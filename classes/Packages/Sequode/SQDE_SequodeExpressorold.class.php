<?php
class SQDE_SequodeExpressor{
	public $sequode_model = null;
	public $instance_id;
	public $input_object;
	public $property_object;
	public $output_object;
	public $sequence_stack = array();
	public function __construct($sequode_model, $input_object=null, $property_object=null){
        $this->sequode_model = $sequode_model;
        if($input_object != null){
            $this->input_object = $input_object;
        }
        if($property_object != null){
            $this->property_object = $property_object;
        }
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
        $sequode_model = $this->sequode_model;
        $this->input_object = $sequode_model->input_object;
        $this->property_object = $sequode_model->property_object;
        $this->output_object = $sequode_model->output_object;
	}
	public function run(){
        
        $sequence_stack = array();
		$sequence_stack['object'] = $this->sequode_model;
		$sequence_stack['sequence'] = array();
        
		SQDE_Stacks::Controller($this->instance_id,'Inp_Obj','stack',json_decode('{"Root":""}'));
		SQDE_Stacks::Controller($this->instance_id,'Prop_Obj','stack',json_decode('{"Root":""}'));
		SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',json_decode('{"Root":""}'));
        foreach($this->sequode_model->sequence as $key => $id){
            $sequode_model = SQDE_SequodeChain::model($id);
            $sequence_stack['sequence'][] = $sequode_model;
            SQDE_Stacks::Controller($this->instance_id,'Inp_Obj','stack',$sequode_model->input_object);
            SQDE_Stacks::Controller($this->instance_id,'Prop_Obj','stack',$sequode_model->property_object);
            SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',$sequode_model->output_object);
        }
        $this->sequence_stack = $sequence_stack;
        
		SQDE_Stacks::Controller($this->instance_id,'Inp_Obj_Map','replaceStack',$this->sequode_model->input_object_map);
		SQDE_Stacks::Controller($this->instance_id,'Prop_Obj_Map','replaceStack',$this->sequode_model->property_object_map);
		SQDE_Stacks::Controller($this->instance_id,'Out_Obj_Map','replaceStack',$this->sequode_model->output_object_map);
        
		// May God the Universe forgive my soul. Shalom DovBer Lawyer ben Avraham
		$this->property_object->Run_Process = true;
		
		SQDE_Stacks::Controller($this->instance_id,'Out_Obj','replaceStack',array());
		$this->bind();
        
        SQDE_StacksIterator::Controller($this->instance_id,'Inp_Obj','nextStack');
        SQDE_StacksIterator::Controller($this->instance_id,'Prop_Obj','nextStack');
        SQDE_StacksIterator::Controller($this->instance_id,'Out_Obj','nextStack');

		foreach($this->sequence_stack['sequence'] as $map_key => $sequode_model){
            $Inp_Obj = SQDE_StacksIterator::Controller($this->instance_id,'Inp_Obj','currentStack');
            SQDE_StacksIterator::Controller($this->instance_id,'Inp_Obj','nextStack');
            if(isset($this->sequode_model->input_output_runtime_map[$map_key + 1]) && is_array($this->sequode_model->input_output_runtime_map[$map_key + 1])){
                foreach($this->sequode_model->input_output_runtime_map[$map_key + 1] as $loop_member => $value){
                    $Inp_Obj->$loop_member = SQDE_Stacks::Controller($this->instance_id,'Out_Obj','returnKey',$value['key'])->$value['member'];
                }
            }
            $Prop_Obj = SQDE_StacksIterator::Controller($this->instance_id,'Prop_Obj','currentStack');
            SQDE_StacksIterator::Controller($this->instance_id,'Prop_Obj','nextStack');
            if(isset($this->sequode_model->property_output_runtime_map[$map_key + 1]) && is_array($this->sequode_model->property_output_runtime_map[$map_key + 1])){
                foreach($this->sequode_model->property_output_runtime_map[$map_key + 1] as $loop_member => $value){
                    $Prop_Obj->$loop_member = SQDE_Stacks::Controller($this->instance_id,'Out_Obj','returnKey',$value['key'])->$value['member'];
                }
            }
            foreach($Inp_Obj as $member => $value){
                if(is_string($value) && (strtolower($value) == 'true' || strtolower($value) == 'false')){
                    $Inp_Obj->$member = (strtolower($value) == 'true') ? true : false;
                }
            }
            foreach($Prop_Obj as $member => $value){
                if(is_string($value) && (strtolower($value) == 'true' || strtolower($value) == 'false')){
                    $Prop_Obj->$member = (strtolower($value) == 'true') ? true : false;
                }
            }
            if($sequode_model->usage_type == 0){
                $Out_Obj = $this->runCode($sequode_model,$Inp_Obj,$Prop_Obj);
            }else{
                $sequode = new SQDE_SequodeExpressor($sequode_model, $input_object, $property_object);
                $Out_Obj = $sequode->run()->output_object;
            }
            SQDE_Stacks::Controller($this->instance_id,'Out_Obj','stack',$Out_Obj);
		}
        $this->output_object = SQDE_Stacks::Controller($this->instance_id,"Out_Obj","returnStack")[0];
		return $this;
	}
	private function runCode($sequode_model, $input_object, $property_object){
		$output_object = $sequode_model->output_object;
        $file = SEQUODE_CODE_CACHE_DIRECTORY . DIRECTORY_SEPARATOR . str_replace('::','--',str_replace(' ','_',$sequode_model->name)).'.sequode.php';
		if(!@include($file)){
                self::saveCode($sequode_model);
			if(!@include($file)){
				echo "Couldn't generate " . $sequode_model->name. "\n";
			}
		}
		return $output_object;
	}
    private function bind(){
		SQDE_StacksIterator::Controller($this->instance_id,"Inp_Obj_Map","resetStack");
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
		SQDE_StacksIterator::Controller($this->instance_id,"Prop_Obj_Map","resetStack");
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
		SQDE_StacksIterator::Controller($this->instance_id,"Out_Obj_Map","resetStack");
		foreach(SQDE_Stacks::Controller($this->instance_id,"Out_Obj","returnStack") as $loop_key => $loop_object){
			foreach($loop_object as $loop_member => $loop_value){
				$location_object = json_decode(json_encode(SQDE_StacksIterator::Controller($this->instance_id,"Out_Obj_Map","currentStack")));
				if($location_object->Key == 0 && $location_object->Stack == "Out_Obj" && $loop_member != "Root"){
					$location_object_member_name = $location_object->Member;
					$loop_object->$loop_member = $this->output_object->$location_object_member_name;
				}
				if($location_object->Key > 0 && $location_object->Stack == "Out_Obj"){
					$loop_object->$loop_member = $location_object->Value;
				}
				SQDE_StacksIterator::Controller($this->instance_id,"Out_Obj_Map","nextStack");
			}
		}
		return true;
	}
    
	public static function uniqueHash($seed='',$prefix='SQDE'){
		$time = explode(' ', microtime());
        $time = $time[0] + $time[1];
		return $prefix.md5($time.$seed);
	}
    
    public static function saveCode($sequode_model){
        $filename = str_replace('::','--',str_replace(' ','_',$sequode_model->name)).'.sequode.php';
        $filepath = SEQUODE_CODE_CACHE_DIRECTORY . DIRECTORY_SEPARATOR . $filename;
        $write = fopen($filepath, 'w');
			
        if(fwrite($write, self::makeCodeFromModel($sequode_model))){
            fclose($write);
            return true;
        }
        return false;
    }
    public static function makeCodeFromModel($sequode_model){
        if($sequode_model->coding_type == 1){
            return self::makeFunction($sequode_model);
        }
    }
    public static function makeFunction($sequode_model){
            $input_object = (object) null;
            $input_members = array();
            $parameters = $sequode_model->input_object;
            foreach($parameters as $member => $value){
                $input_object->$member = null;
                $input_members[] = '$input_object->'.$member;
                
            }
            $code = array();
            $code[] = '<?php';
            $code[] = '$output_object->Success = true;';
            $code[] = 'if($property_object->Run_Process === true || intval($property_object->Run_Process) == 1){';
            $code[] = '    try{';
            $output_object = $sequode_model->output_object;
            if(count(get_object_vars($output_object)) == 2){
                foreach($output_object as $member => $value){
                    if($member != 'Success'){
                        $code[] = '    $output_object->'.$member.' = '.$sequode_model->name.'('.implode(',',$input_members).');';
                        $code[] = '        if($output_object->'.$member.' === false){';
                        $code[] = '            $output_object->Success = false;';
                        $code[] = '        }';
                    }
                }
            }else{
                if($sequode_model->name == 'echo'){
                    $code[] = '    '.$sequode_model->name.' '.implode('.',$input_members).';';
                }else{
                  $code[] = '    '.$sequode_model->name.'('.implode(',',$input_members).');';
                }
            }
            $code[] = '    }catch(Exception $e){';
            $code[] = '        $output_object->Success = false;';
            $code[] = '    }';
            $code[] = '}';
        
        return str_replace('    ','',implode(' ', $code));
    }
}