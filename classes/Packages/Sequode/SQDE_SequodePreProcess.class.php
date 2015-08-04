<?php
class SQDE_SequodePreProcess{
	public $sequode_model = null;
	public $instance_id;
	public $input_object;
	public $property_object;
	public $output_object;
	public $runtime_object;
	public $sequence_stack = array();
	public $input_output_runtime_map = array();
	public $property_output_runtime_map = array();
	public function __construct($sequode_model){
        $this->sequode_model = $sequode_model;
        $this->initialize();
        return $this;
	}
	public function instanceId(){
		if(empty($this->instance_id) || !isset($this->instance_id)){
			$microtime = explode(" ", microtime());
			$this->instance_id = substr(md5(substr(md5($microtime[0] . $microtime[1]),rand(8,16))),16);
		}
		return $this->instance_id;
	}
    private function initialize(){
		
		$this->instanceId();
		
        $this->stackModels();
		
        $this->stackInputs();
        $this->stackProperties();
        $this->stackOutputs();
		
        $this->input_object = json_decode($this->sequode_model->input_object);
        $this->property_object = json_decode($this->sequode_model->property_object);
        $this->output_object = json_decode($this->sequode_model->output_object);
		
        $this->input_object_map = json_decode($this->sequode_model->input_object_map);
        $this->property_object_map = json_decode($this->sequode_model->property_object_map);
        $this->output_object_map = json_decode($this->sequode_model->output_object_map);
		
		$this->input_output_runtime_map = json_decode($this->sequode_model->input_output_runtime_map,true);
		$this->property_output_runtime_map = json_decode($this->sequode_model->property_output_runtime_map,true);
		
		SQDE_Stacks::Controller($this->instance_id,'Inp_Obj_Map','replaceStack',$this->input_object_map);
		SQDE_Stacks::Controller($this->instance_id,'Prop_Obj_Map','replaceStack',$this->property_object_map);
		SQDE_Stacks::Controller($this->instance_id,'Out_Obj_Map','replaceStack',$this->output_object_map);
		
		SQDE_Stacks::Controller($this->instance_id,'Run_Inp_Out_Map','replaceStack',$this->input_output_runtime_map);
		SQDE_Stacks::Controller($this->instance_id,'Run_Prop_Out_Map','replaceStack',$this->property_output_runtime_map);
		
	}
	public function run(){
		
		$this->property_object->Run_Process = true;
		
		SQDE_Stacks::Controller($this->instance_id,'Out_Obj','replaceStack',array());
		$this->bindInputObjects();
		$this->bindPropertyObjects();
		$this->bindOutputObjects();
		$sequode_run_object = new SQDE_SequodeRuntime($this->instance_id,$this->sequence_stack);
		
		$this->output_object = $sequode_run_object->output_object;
		return $this;
	}
	/* runtime methods */
    private function bindInputObjects(){
		SQDE_StacksIterator::Controller($this->instance_id,"Inp_Obj_Map","resetStack");
		$runtime_output_map = array();
		foreach(SQDE_Stacks::Controller($this->instance_id,"Inp_Obj","returnStack") as $loop_key => $loop_object){
			foreach($loop_object as $loop_member => $loop_value){
				$location_object = json_decode(json_encode(SQDE_StacksIterator::Controller($this->instance_id,"Inp_Obj_Map","currentStack")));
				if($location_object->Key == 0 && $location_object->Stack == "Inp_Obj" && $loop_member != "Root"){
					$location_object_member_name = $location_object->Member;
					$loop_object->$loop_member = $this->input_object->$location_object_member_name;
				}
				if($location_object->Key > 0 && $location_object->Stack == "Inp_Obj"){
					$loop_object->$loop_member = $location_object->Value;
				}
				SQDE_StacksIterator::Controller($this->instance_id,"Inp_Obj_Map","nextStack");
			}
		}
		return true;
	}
	private function bindPropertyObjects(){
		SQDE_StacksIterator::Controller($this->instance_id,"Prop_Obj_Map","resetStack");
		$runtime_output_map = array();
		foreach(SQDE_Stacks::Controller($this->instance_id,"Prop_Obj","returnStack") as $loop_key => $loop_object){
			foreach($loop_object as $loop_member => $loop_value){
				$location_object = json_decode(json_encode(SQDE_StacksIterator::Controller($this->instance_id,"Prop_Obj_Map","currentStack")));
				if($location_object->Key == 0 && $location_object->Stack == "Prop_Obj" && $loop_member != "Root"){
					$location_object_member_name = $location_object->Member;
					$loop_object->$loop_member = $this->property_object->$location_object_member_name;
				}
				if($location_object->Key > 0 && $location_object->Stack == "Prop_Obj"){
					$loop_object->$loop_member = $location_object->Value;
				}
				SQDE_StacksIterator::Controller($this->instance_id,"Prop_Obj_Map","nextStack");
			}
		}
		return true;
	}
	private function bindOutputObjects(){
		SQDE_StacksIterator::Controller($this->instance_id,"Out_Obj_Map","resetStack");
		$runtime_output_map = array();
		foreach(SQDE_Stacks::Controller($this->instance_id,"Out_Obj","returnStack") as $loop_key => $loop_object){
			foreach($loop_object as $loop_member => $loop_value){
				$location_object = json_decode(json_encode(SQDE_StacksIterator::Controller($this->instance_id,"Out_Obj_Map","currentStack")));
				if($location_object->Key == 0 && $location_object->Stack == "Out_Obj" && $loop_member != "Root"){
					$location_object_member_name = $location_object->Member;
					$loop_object->$loop_member = $this->property_object->$location_object_member_name;
				}
				if($location_object->Key > 0 && $location_object->Stack == "Out_Obj"){
					$loop_object->$loop_member = $location_object->Value;
				}
				SQDE_StacksIterator::Controller($this->instance_id,"Out_Obj_Map","nextStack");
			}
		}
		return true;
	}
	private function stackInputs(){
		$sequode_model = $this->sequence_stack['object'];
		if($sequode_model->usage_type == 0){
			SQDE_Stacks::Controller($this->instance_id,'Inp_Obj','stack',json_decode($sequode_model->input_object));
		}elseif($sequode_model->usage_type == 1){
			SQDE_Stacks::Controller($this->instance_id,'Inp_Obj','stack',json_decode('{"Root":""}'));
			foreach($this->sequence_stack['sequence'] as $sequode_model){
				SQDE_Stacks::Controller($this->instance_id,'Inp_Obj','stack',json_decode($sequode_model->input_object));
			}
		}
		return;
	}
    private function stackProperties(){
		$sequode_model = $this->sequence_stack['object'];
		if($sequode_model->usage_type == 0){
			SQDE_Stacks::Controller($this->instance_id,'Prop_Obj','stack',json_decode($sequode_model->property_object));
		}elseif($sequode_model->usage_type == 1){
			SQDE_Stacks::Controller($this->instance_id,'Prop_Obj','stack',json_decode('{"Root":""}'));
			foreach($this->sequence_stack['sequence'] as $sequode_model){
				SQDE_Stacks::Controller($this->instance_id,'Prop_Obj','stack',json_decode($sequode_model->property_object));
			}
		}
		return;
	}
	private function stackOutputs(){
		$sequode_model = $this->sequence_stack['object'];
		if($sequode_model->usage_type == 0){
			SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',json_decode($sequode_model->output_object));
		}elseif($sequode_model->usage_type == 1){
			SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',json_decode('{"Root":""}'));
			foreach($this->sequence_stack['sequence'] as $sequode_model){
				SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',json_decode($sequode_model->output_object));
			}
		}
		return;
	}
	private function stackModels(){
        $sequence_stack = array();
		$sequence_stack['object'] = $this->sequode_model;
		$sequence_stack['sequence'] = array();
		switch(intval($this->sequode_model->usage_type)){
			case 0:
				$sequence_stack['sequence'][] = $this->sequode_model;
				$this->sequence_stack = $sequence_stack;
				break;
			case 1:
				foreach(json_decode($this->sequode_model->sequence) as $id){
					$sub_sequode = new SQDE_Sequodes;
                    $sub_sequode->exists($id,'id');
					$sequence_stack['sequence'][] = $sub_sequode;
				}
				$this->sequence_stack = $sequence_stack;
				break;
			default:
				return;
		}
	}
}