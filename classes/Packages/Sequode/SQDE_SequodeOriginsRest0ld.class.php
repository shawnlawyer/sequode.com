<?php
class SQDE_SequodeOriginsRest{
	public static function application(){
		$sequode_model = new SQDE_Sequodes;
        $models = array();
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
        $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
        $sequode_model->getAll($where,'id,name,detail,usage_type,coding_type,sequence,input_object,property_object,output_object,input_object_detail,property_object_detail,output_object_detail,input_object_map,property_object_map,output_object_map,input_form_object,property_form_object');
        
        $models = $sequode_model->all;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
        $sequode_model->getAll($where,'id,name,detail,usage_type,coding_type,sequence,input_object,property_object,output_object,input_object_detail,property_object_detail,output_object_detail,input_object_map,property_object_map,output_object_map,input_form_object,property_form_object');
        
        $model_name_to_model_id = array();
        foreach($sequode_model->all as $key => $object){
            $model_name_to_model_id[$object->name] = $object->id;
        }
        $models = array_merge($models, $sequode_model->all);
        $model_id_to_key = array();
        foreach($models as $key => $object){
            $model_id_to_key[$object->id] = $key;
        }
        
        foreach($models as $key => $model){
            $node = (object) null;
            $node->id = intval($model->id);
            $node->name = str_replace(' ','_',$model->name);
            $node->usage_type = intval($model->usage_type);
            $node->detail = json_decode($model->detail);
            $node->input_form_object = json_decode($model->input_form_object);
            $node->property_form_object = json_decode($model->property_form_object);
            
            $node->input_object = json_decode($model->input_object);
            $node->property_object = json_decode($model->property_object);
            $node->output_object = json_decode($model->output_object);
            
            $node->input_object_detail = json_decode($model->input_object_detail);
            $node->property_object_detail = json_decode($model->property_object_detail);
            $node->output_object_detail = json_decode($model->output_object_detail);
            
            if($model->usage_type == 1){
                $node->input_object_map = json_decode($model->input_object_map);
                $node->property_object_map = json_decode($model->property_object_map);
                $node->output_object_map = json_decode($model->output_object_map);
                $node->input_output_runtime_map = json_decode($model->input_output_runtime_map,true);
                $node->property_output_runtime_map = json_decode($model->property_output_runtime_map,true);
            }
            if($model->usage_type == 1){
                $node->sequence = json_decode($model->sequence);
            }elseif($model->usage_type == 0){
                $node->coding_type = intval($model->coding_type);
                $node->code = '%START_CLOSURE_REPLACEMENT_HOOK%'.SQDE_SequodesGenerator::makeCodeFromNode($node).'%END_CLOSURE_REPLACEMENT_HOOK%';
            }
            $models[$key] = $node;
        }
        $api_host = 'https://sequode.com/';
        header('Content-Type: text/plain',true);
        echo '<?php
class ' . SQDE_Machine::model()->application_token . ' {
    public static $origin_host = \'' . $api_host . '\';
    public static $application_name = \'' . SQDE_Machine::model()->name . '\';
    public static $application_token = \'' . SQDE_Machine::model()->application_token . '\';
    ' . file_get_contents('SQDE_SequodeExpressor.class.php',true) . '
    
    public static $model_name_to_model_id = ' . SQDE_FileManager::var_export($model_name_to_model_id, true) . ';
    public static $model_id_to_key = ' . SQDE_FileManager::var_export($model_id_to_key, true) . ';
    public static function models(){
        return ' . str_replace('\'%START_CLOSURE_REPLACEMENT_HOOK%','function($sequode_model, $input_object, $property_object){ $output_object = $sequode_model->output_object; ',str_replace('%END_CLOSURE_REPLACEMENT_HOOK%\'',' return $output_object; }',SQDE_FileManager::var_export($models, true))) . ';
    }
    public static function exists($value, $by=\'id\'){
        if($by == \'name\'){
            return (isset(static::$model_name_to_model_id[$value])) ? static::$model_id_to_key[static::$model_name_to_model_id[$value]] : false;
        }else{ 
            return (isset(static::$model_id_to_key[intval($value)])) ? static::$model_id_to_key[intval($value)] : false;
        }
    }
    
    public static function model($value, $by = null){
        switch($by){
            case \'id\':
            case \'name\':
                break;
            default:
                $by = \'id\';
                break;
        }
        $model_key = self::exists($value,$by);
        
        if($model_key !== false){
            return self::models()[$model_key];
        }
        return false;   
	}
}
';
    /*
	public static function getIndex($owner_id){
        $sequode_model = new SQDE_Sequode::$model;
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$owner_id);
        $where[] = array('field'=>'index','operator'=>'=','value'=> 1);
        $sequode_model->getAll($where,'id',false,1);
        $index = false;
        foreach($sequode_model->all as $key => $object){
            $index = $object->id;
			break;
        }
        if($index != false){
            SQDE_Sequode::exists($index,'id');
            return SQDE_Sequode::model();
        }
        return false;   
	}*/
    }
	public static function sdk(){
        header('Content-Type: text/plain',true);
		echo file_get_contents('SQDE_SequodeSDK.class.php',true);
    }
}