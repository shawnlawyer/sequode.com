<?php
class SQDE_SequodesSequencer{


    public static function updateConnectionold($from_object, $to_object, $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        if( !isset($to_object->Stack)|| !isset($from_object->Stack) || intval(SQDE_Sequode::model()->usage_type) === 0 ){return SQDE_Sequode::model();}
        
        $input_object_map = json_decode(SQDE_Sequode::model()->input_object_map);
        $property_object_map = json_decode(SQDE_Sequode::model()->property_object_map);
        $output_object_map = json_decode(SQDE_Sequode::model()->output_object_map);
        $process_instance_object = json_decode(SQDE_Sequode::model()->process_instance_object);
        $input_object = json_decode(SQDE_Sequode::model()->input_object);
        $property_object = json_decode(SQDE_Sequode::model()->property_object);
        $output_object = json_decode(SQDE_Sequode::model()->output_object);
        
        switch($from_object->Stack){
            case 'Inp_Obj':
            
                if($to_object->Key == 0 && $to_object->Member == "Root" && $to_object->Stack == "Inp_Obj"){
                    $member_name = SQDE_SequodesGenerator::makeUniqueMemberName($from_object->Member, $input_object_map);
                    $input_object_map[$from_object->Map_Key]->Stack = $to_object->Stack;
                    $input_object_map[$from_object->Map_Key]->Member = $member_name;
                    $input_object_map[$from_object->Map_Key]->Key = $to_object->Key;
                    $input_object_map[$from_object->Map_Key]->Value = null;
                    
                }elseif(( $to_object->Key == 0 && $to_object->Member != "Root" && $to_object->Stack == "Inp_Obj" ) ||
                        ( $to_object->Key != 0 && $to_object->Member != "Root" && ( $to_object->Stack == "Inp_Obj" || $to_object->Stack == "Out_Obj" ))){
                    
                    $input_object_map[$from_object->Map_Key]->Stack = $to_object->Stack;
                    $input_object_map[$from_object->Map_Key]->Member = $to_object->Member;
                    $input_object_map[$from_object->Map_Key]->Key = $to_object->Key;
                    $input_object_map[$from_object->Map_Key]->Value = null;
                }
                SQDE_Sequode::model()->updateField(json_encode($input_object_map),'input_object_map');
                break;
            case 'Prop_Obj':
            
                if($to_object->Key == 0 && $to_object->Member == "Root" && $to_object->Stack == "Prop_Obj"){
                    $member_name = SQDE_SequodesGenerator::makeUniqueMemberName($from_object->Member, $property_object_map);
                    $property_object_map[$from_object->Map_Key]->Stack = $to_object->Stack;
                    $property_object_map[$from_object->Map_Key]->Member = $member_name;
                    $property_object_map[$from_object->Map_Key]->Key = $to_object->Key;
                    $property_object_map[$from_object->Map_Key]->Value = null;
                    
                }elseif(( $to_object->Key == 0 && $to_object->Member != "Root" &&  $to_object->Stack == "Prop_Obj" ) ||
                    ( $to_object->Key != 0 && $to_object->Member != "Root" &&  $to_object->Stack == "Out_Obj" )){
                    $property_object_map[$from_object->Map_Key]->Stack = $to_object->Stack;
                    $property_object_map[$from_object->Map_Key]->Member = $to_object->Member;
                    $property_object_map[$from_object->Map_Key]->Key = $to_object->Key;
                    $property_object_map[$from_object->Map_Key]->Value = null;
                }
                SQDE_Sequode::model()->updateField(json_encode($property_object_map),'property_object_map');
                break;
                
            case 'Out_Obj':
                if($from_object->Key == 0 && $from_object->Member == "Root" && $from_object->Stack == "Out_Obj" && $to_object->Key != 0 && $to_object->Member != "Root"){
                    $member_name = SQDE_SequodesGenerator::makeUniqueMemberName($to_object->Member, $output_object_map);
                    $output_object_map[$to_object->Map_Key]->Stack = 'Out_Obj';
                    $output_object_map[$to_object->Map_Key]->Member = $member_name;
                    $output_object_map[$to_object->Map_Key]->Key = 0;
                    $output_object_map[$to_object->Map_Key]->Value = null;
                    SQDE_Sequode::model()->updateField(json_encode($output_object_map),'output_object_map');
                }
                break;
            default:
				return SQDE_Sequode::model();
        }
        return SQDE_SequodeOperations::maintenance();
    }
    public static function updateSequence($new_sequence_map, $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
		
		$old_sequence = json_decode(SQDE_Sequode::model()->sequence);
		$new_sequence = array();
		$old_sequence_maps = array();
		
		foreach( $old_sequence as $key => $value ){
			$old_sequence_maps[$key] = array('input_object_map' => array(), 'property_object_map' => array(), 'output_object_map' => array());
		}
		
		$new_sequence = array();
		foreach( $new_sequence_map as $key => $object ){
			$new_sequence[] = $object->id;
		}
		$removeKey = 0;
		if( count( $old_sequence ) > count( $new_sequence ) ){
			foreach( $old_sequence as $key => $value ){
				if($old_sequence[$key] != $new_sequence[$key]){
					$removeKey = $key + 1;
					break;
				}
			}
		}
		
		$new_keys = array();
		
		foreach( $new_sequence_map as $key => $object ){
			if(isset($object->order)){
				$new_keys[$object->order + 1] = $key + 1;
			}
		}
		
		$new_sequence_maps = array();
        
		foreach( $new_sequence as $key => $value ){
			$new_sequence_maps[$key] = array('input_object_map' => array(), 'property_object_map' => array(), 'output_object_map' => array());
			$default_sequence_maps[$key] = array('input_object_map' => array(), 'property_object_map' => array(), 'output_object_map' => array());
		}
		
        
		$old_input_object_map = json_decode(SQDE_Sequode::model()->input_object_map);
		$root_input_map_object = array_shift($old_input_object_map);
        
		$old_property_object_map = json_decode(SQDE_Sequode::model()->property_object_map);
		$root_property_map_object = array_shift($old_property_object_map);
		
		$old_output_object_map = json_decode(SQDE_Sequode::model()->output_object_map);
		$root_output_map_object = array_shift($old_output_object_map);
		
		$object_cache = array();
		$loop_sequode = new SQDE_Sequodes;
		
        
		foreach( $old_sequence as $key => $value ){
			if(!array_key_exists($value, $object_cache)){
				$object_cache[$value] = new SQDE_Sequodes;
				$object_cache[$value]->exists($value,'id');
			}
			
			$loop_sequence_map = array();
			$loop_input_object = json_decode($object_cache[$value]->input_object);
			foreach( $loop_input_object as $member ){
				$loop_map_object = array_shift($old_input_object_map);
				$loop_sequence_map[] = $loop_map_object;
			}
			$old_sequence_maps[$key]['input_object_map'] = $loop_sequence_map;
			
			$loop_sequence_map = array();
			$loop_property_object = json_decode($object_cache[$value]->property_object);
			foreach( $loop_property_object as $member ){
				$loop_map_object = array_shift($old_property_object_map);
				$loop_sequence_map[] = $loop_map_object;
			}
			$old_sequence_maps[$key]['property_object_map'] = $loop_sequence_map;
			
			$loop_sequence_map = array();
			$loop_output_object = json_decode($object_cache[$value]->output_object);
			foreach( $loop_output_object as $member ){
				$loop_map_object = array_shift($old_output_object_map);
				$loop_sequence_map[] = $loop_map_object;
			}
			$old_sequence_maps[$key]['output_object_map'] = $loop_sequence_map;
			
		}
        $addKey = 0;
		foreach( $new_sequence_map as $key => $object ){
			if(!isset($object->order)){
                $addKey = $key + 1;
                break;
            }
		}
        
		foreach( $new_sequence_map as $key => $object ){
			if(!array_key_exists($object->id, $object_cache)){
				$object_cache[$object->id] = new SQDE_Sequodes;
				$object_cache[$object->id]->exists($object->id,'id');
			}
			if(!isset($object->order)){
				$loop_object = json_decode($object_cache[$object->id]->input_object);
				$loop_sequence_map = array();
				foreach($loop_object as $member => $value){
					$loop_sequence_map[] = SQDE_SequodesGenerator::makeMapLocationObject('input','x',$member,$value);
				}
			}else{
				$loop_sequence_map = $old_sequence_maps[$object->order]['input_object_map'];
			}
			$new_sequence_maps[$key]['input_object_map'] = $loop_sequence_map;
			
			if(!isset($object->order)){
				$loop_object = json_decode($object_cache[$object->id]->property_object);
				$loop_sequence_map = array();
				foreach($loop_object as $member => $value){
					$loop_sequence_map[] = SQDE_SequodesGenerator::makeMapLocationObject('property','x',$member,$value);
				}
			}else{
				$loop_sequence_map = $old_sequence_maps[$object->order]['property_object_map'];
			}
			$new_sequence_maps[$key]['property_object_map'] = $loop_sequence_map;
			
			if(!isset($object->order)){
				$loop_object = json_decode($object_cache[$object->id]->output_object);
				$loop_sequence_map = array();
                foreach($loop_object as $member => $value){
					$loop_sequence_map[] = SQDE_SequodesGenerator::makeMapLocationObject('output','x',$member,$value);
				}
			}else{
				$loop_sequence_map = $old_sequence_maps[$object->order]['output_object_map'];
			}
			$new_sequence_maps[$key]['output_object_map'] = $loop_sequence_map;

		}
        
		$input_map_array = array();	
		$property_map_array = array();
		$output_map_array = array();
		foreach( $new_sequence_map as $key => $object ){
			$input_map_array = array_merge($input_map_array, $new_sequence_maps[$key]['input_object_map']);
			$property_map_array = array_merge($property_map_array, $new_sequence_maps[$key]['property_object_map']);
			$output_map_array = array_merge($output_map_array, $new_sequence_maps[$key]['output_object_map']);
		}
        
        foreach( $new_sequence_map as $key => $object ){
			if(!array_key_exists($object->id, $object_cache)){
				$object_cache[$object->id] = new SQDE_Sequodes;
				$object_cache[$object->id]->exists($object->id,'id');
			}
			$loop_object = json_decode($object_cache[$object->id]->input_object);
			$loop_sequence_map = array();
			foreach( $loop_object as $member => $value){
                $loop_sequence_map[] = SQDE_SequodesGenerator::makeMapLocationObject('input',$key+1,$member,$loop_object->$member);
			}
            $default_sequence_maps[$key]['input_object_map'] = $loop_sequence_map;
			
			$loop_object = json_decode($object_cache[$object->id]->property_object);
			$loop_sequence_map = array();
			foreach( $loop_object as $member => $value){
				$loop_sequence_map[] = SQDE_SequodesGenerator::makeMapLocationObject('property',$key+1,$member,$loop_object->$member);
			}
			$default_sequence_maps[$key]['property_object_map'] = $loop_sequence_map;

			$loop_object = json_decode($object_cache[$object->id]->output_object);
			$loop_sequence_map = array();
			foreach( $loop_object as $member => $value){
				$loop_sequence_map[] = SQDE_SequodesGenerator::makeMapLocationObject('output',$key+1,$member,$loop_object->$member);
			}
			$default_sequence_maps[$key]['output_object_map'] = $loop_sequence_map;
		}
        
        
		$input_map_defaults_array = array();	
		$property_map_defaults_array = array();
		$output_map_defaults_array = array();
		foreach( $new_sequence_map as $key => $object ){
			$input_map_defaults_array = array_merge($input_map_defaults_array, $default_sequence_maps[$key]['input_object_map']);
			$property_map_defaults_array = array_merge($property_map_defaults_array, $default_sequence_maps[$key]['property_object_map']);
			$output_map_defaults_array = array_merge($output_map_defaults_array, $default_sequence_maps[$key]['output_object_map']);
		}
        
        
        if($removeKey > 0){
            foreach( $input_map_array as $key => $object ){
                if( $object->Key === $removeKey ){
                    $input_map_array[$key] = $input_map_defaults_array[$key];
                }
            }
            foreach( $property_map_array as $key => $object ){
                if( $object->Key === $removeKey ){
                    $property_map_array[$key] = $property_map_defaults_array[$key];
                }
            }
            foreach( $output_map_array as $key => $object ){
                if( $object->Key === $removeKey ){
                    $output_map_array[$key] = $output_map_defaults_array[$key];
                }
            }
        }
               
        foreach( $input_map_array as $key => $object ){
            if( $object->Key === 0 || $object->Key == $removeKey ){continue;}
            $object->Key = (array_key_exists($object->Key, $new_keys)) ? $new_keys[$object->Key] : $object->Key;
            $input_map_array[$key] = $object;
        }
        foreach( $property_map_array as $key => $object ){
            if( $object->Key === 0 || $object->Key == $removeKey ){continue;}
            $object->Key = (array_key_exists($object->Key, $new_keys)) ? $new_keys[$object->Key] : $object->Key;
            $property_map_array[$key] = $object;
        }
        foreach( $output_map_array as $key => $object ){
            if( $object->Key === 0 || $object->Key == $removeKey ){continue;}
            $object->Key = (array_key_exists($object->Key, $new_keys)) ? $new_keys[$object->Key] : $object->Key;
            $output_map_array[$key] = $object;
        }
        
        if($addKey > 0){
            foreach( $input_map_array as $key => $object ){
                if( $object->Key === 'x' ){
                    $object->Key = $addKey;
                    $input_map_array[$key] = $object;
                }
            }
            foreach( $property_map_array as $key => $object ){
                 if( $object->Key === 'x' ){
                    $object->Key = $addKey;
                    $property_map_array[$key] = $object;
                }
            }
            foreach( $output_map_array as $key => $object ){
                if( $object->Key === 'x' ){
                    $object->Key = $addKey;
                    
                    $output_map_array[$key] = $object;
                }
            }
        }
        
        foreach( $input_map_array as $key => $object ){
            if( $object->Key === 0 ){continue;}
			if( $object->Key > $input_map_defaults_array[$key]->Key ){
				$input_map_array[$key] = $input_map_defaults_array[$key];
			}
		}
        
		foreach( $property_map_array as $key => $object ){
            if( $object->Key === 0 ){continue;}
			if( $object->Key > $property_map_defaults_array[$key]->Key ){
				$property_map_array[$key] = $property_map_defaults_array[$key];
			}
		}
        
		foreach( $output_map_array as $key => $object ){
            if( $object->Key === 0 ){continue;}
			if( $object->Key > $output_map_defaults_array[$key]->Key ){
				$output_map_array[$key] = $output_map_defaults_array[$key];
			}
		}
		
        
		$loop_array = array();
		foreach( $input_map_array as $object ){
			$loop_array[] = $object;
		}
		$input_map_array = $loop_array;
		
		$loop_array = array();
		foreach( $property_map_array as $object ){
			$loop_array[] = $object;
		}
		$property_map_array = $loop_array;
		
		$loop_array = array();
		foreach( $output_map_array as $object ){
			$loop_array[] = $object;
		}
		$output_map_array = $loop_array;
		
		$input_map_array = array_merge(array($root_input_map_object),$input_map_array);	
		$property_map_array = array_merge(array($root_property_map_object),$property_map_array);
		$output_map_array = array_merge(array($root_output_map_object),$output_map_array);
        
        SQDE_Sequode::model()->updateField(json_encode($new_sequence),'sequence');
		SQDE_Sequode::model()->updateField(json_encode($input_map_array),'input_object_map');
		SQDE_Sequode::model()->updateField(json_encode($property_map_array),'property_object_map');
		SQDE_Sequode::model()->updateField(json_encode($output_map_array),'output_object_map');
		unset($object_cache);
		
		return SQDE_SequodeOperations::maintenance();
	}  
}