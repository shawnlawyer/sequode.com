    public static function express($sequode_model, $input_object=null, $property_object=null){
        if($input_object != null){
            $sequode_model->input_object = $input_object;
        }
        if($property_object != null){
            $sequode_model->property_object = $property_object;
        }
        $ipo = array(
            'i' => array('object' => 'input_object','map' => 'input_object_map','stack' => 'Inp_Obj'),
            'p' => array('object' => 'property_object','map' => 'property_object_map','stack' => 'Prop_Obj'),
            'o' => array('object' => 'output_object','map' => 'output_object_map','stack' => 'Out_Obj')
        );
        $map_keys = array('i' => 0,'p' => 0,'o' => 0);
        $sequence = array(array());
		foreach($sequode_model->sequence as $position => $id){
            $sequence_model = self::model($id);
            foreach(array('i','p') as $m){
                $object = $sequence_model->{$ipo[$m]['object']};
                $map = $sequode_model->{$ipo[$m]['map']};
                $stack = $ipo[$m]['stack'];
                foreach($object as $member => $value){
                    $map_keys[$m]++;
                    $map_key = $map_keys[$m];
                    $location_object = $map[$map_key];
                    $object->{$member} = $location_object->Value;
                    if($location_object->Key == 0 && $location_object->Stack == $stack){
                        $object->{$member} = $sequode_model->{$ipo[$m]['object']}->{$location_object->Member};
                    }elseif($location_object->Key > 0 && $location_object->Stack == $ipo['o']['stack']){
                        $object->{$member} = $sequence[$location_object->Key]->{$ipo['o']['object']}->{$location_object->Member};
                    }
                    if(is_string($object->{$member}) && (strtolower($object->{$member}) == 'true' || strtolower($object->{$member}) == 'false')){
                        $object->{$member} = (strtolower($object->{$member}) == 'true') ? true : false;
                    }
                }
            }    
            $sequode = ($sequence_model->usage_type == 0)
                ? $sequence_model->code
                : self::express($sequence_model, $sequence_model->input_object, $sequence_model->property_object);
            
            $output_object = ($sequence_model->usage_type == 0)
                ? call_user_func_array($sequode, array($sequence_model, $sequence_model->input_object, $sequence_model->property_object))
                : $sequode->output_object;
                
            foreach($sequence_model->output_object as $member => $value){
                $sequence_model->output_object->{$member} = $output_object->{$member};
            }
            foreach(array('o') as $m){
                $object = $sequence_model->{$ipo[$m]['object']};
                $map = $sequode_model->{$ipo[$m]['map']};
                $stack = $ipo[$m]['stack'];
                foreach($object as $member => $value){
                    $map_keys[$m]++;
                    $map_key = $map_keys[$m];
                    $location_object = $map[$map_key];
                    if($location_object->Key == 0 && $location_object->Stack == $stack){
                        $sequode_model->{$ipo['o']['object']}->{$location_object->Member} = $object->{$member};
                    }
                }
            } 
            $sequence[] = $sequence_model;
		}
		return $sequode_model;
	}