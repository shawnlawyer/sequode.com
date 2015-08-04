<?php
class SQDE_SequodeRuntime{ 
	private $instance_id;
	public function __construct($instance_id,$sequence_stack){
		$this->instance_id = $instance_id;
        
		$this->input_output_runtime_map = SQDE_Stacks::Controller($this->instance_id,"Run_Inp_Out_Map","returnStack");
		$this->property_output_runtime_map = SQDE_Stacks::Controller($this->instance_id,'Run_Prop_Out_Map','returnStack');
       
		$this->run($sequence_stack);
	}
	public function instanceId(){
		return $this->instance_id;
	}
	private function run($stack){
		// May God the Universe forgive my soul. Shalom DovBer Lawyer ben Avraham
        
        
        //this is used to skip over {"Root":}
        SQDE_StacksIterator::Controller($this->instance_id,'Inp_Obj','nextStack');
        SQDE_StacksIterator::Controller($this->instance_id,'Prop_Obj','nextStack');
        SQDE_StacksIterator::Controller($this->instance_id,'Out_Obj','nextStack');

		foreach($stack['sequence'] as $map_key => $sequode_model){
            $Inp_Obj = SQDE_StacksIterator::Controller($this->instance_id,'Inp_Obj','currentStack');
            SQDE_StacksIterator::Controller($this->instance_id,'Inp_Obj','nextStack');
            if(is_array($this->input_output_runtime_map[$map_key + 1])){
                foreach($this->input_output_runtime_map[$map_key + 1] as $loop_member => $value){
                    $Inp_Obj->$loop_member = SQDE_Stacks::Controller($this->instance_id,'Out_Obj','returnKey',$value['key'])->$value['member'];
                }
            }
            $Prop_Obj = SQDE_StacksIterator::Controller($this->instance_id,'Prop_Obj','currentStack');
            SQDE_StacksIterator::Controller($this->instance_id,'Prop_Obj','nextStack');
            if(is_array($this->property_output_runtime_map[$map_key + 1])){
                foreach($this->property_output_runtime_map[$map_key + 1] as $loop_member => $value){
                    $Prop_Obj->$loop_member = SQDE_Stacks::Controller($this->instance_id,'Out_Obj','returnKey',$value['key'])->$value['member'];
                }
            }
			$Out_Obj = ($sequode_model->usage_type == 0)
                     ? $this->runCode($sequode_model,$Inp_Obj,$Prop_Obj)
                     : $this->runSequence($sequode_model,$Inp_Obj,$Prop_Obj);
                     
            SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',$Out_Obj);
		}
        $this->output_object = SQDE_Stacks::Controller($this->instance_id,"Out_Obj","returnStack")[0];
		return;
	}
	private function runCode($sequode_model, $input_object, $property_object){
		
        foreach($input_object as $member => $value){
            if(is_string($value) && (strtolower($value) == 'true' || strtolower($value) == 'false')){
                $input_object->$member = (strtolower($value) == 'true') ? true : false;
            }
        }
        foreach($property_object as $member => $value){
            if(is_string($value) && (strtolower($value) == 'true' || strtolower($value) == 'false')){
                $property_object->$member = (strtolower($value) == 'true') ? true : false;
            }
        }
		$output_object = json_decode($sequode_model->output_object);
		$file = $sequode_model->name . $sequode_model->stub_file_extension;
		if(!@include($file)){
			SQDE_SequodeOperations::saveCode($sequode_model);
			if(!@include($file)){
				echo "Couldn't generate " . $sequode_model->name. "\n";
			}
		}
		return $output_object;
	}
	private function runSequence($sequode_model, $input_object, $property_object){
        foreach($input_object as $member => $value){
            if(is_string($value) && (strtolower($value) == 'true' || strtolower($value) == 'false')){
                $input_object->$member = (strtolower($value) == 'true') ? true : false;
            }
        }
        foreach($property_object as $member => $value){
            if(is_string($value) && (strtolower($value) == 'true' || strtolower($value) == 'false')){
                $property_object->$member = (strtolower($value) == 'true') ? true : false;
            }
        }
        $process = new SQDE_SequodePreProcess($sequode_model);
        $process->input_object = $input_object;
        $process->property_object = $property_object;
        $process->run();
        return $process->output_object;
	}
}