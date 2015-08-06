<?php
class SQDE_SequodeOriginsRest{
	public static function application(){
		$sequode_model = new SQDE_Sequodes;
        $models = array();
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
        $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
        //$where[] = array('field'=>'palette','operator'=>'=','value'=>'0');
        $sequode_model->getAll($where,'id,name,detail,usage_type,coding_type,sequence,input_object,property_object,output_object,input_object_detail,property_object_detail,output_object_detail,input_object_map,property_object_map,output_object_map,input_form_object,property_form_object');
        
        $models = $sequode_model->all;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
        $sequode_model->getAll($where,'id,name,detail,usage_type,coding_type,sequence,input_object,property_object,output_object,input_object_detail,property_object_detail,output_object_detail,input_object_map,property_object_map,output_object_map,input_form_object,property_form_object');
        
        
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
        $used_ids = array();
        foreach($models as $key => $model){
            $node = (object) null;
            $node->id = intval($model->id);
            $node->n = str_replace(' ','_',$model->name);
            $node->d = json_decode($model->detail);
            $node->if = json_decode($model->input_form_object);
            $node->pf = json_decode($model->property_form_object);
            
            $node->i = json_decode($model->input_object);
            $node->p = json_decode($model->property_object);
            $node->o = json_decode($model->output_object);
            
            $node->ii = json_decode($model->input_object_detail);
            $node->pi = json_decode($model->property_object_detail);
            $node->oi = json_decode($model->output_object_detail);
            
            if($model->usage_type == 1){
                $node->im = json_decode($model->input_object_map);
                $node->pm = json_decode($model->property_object_map);
                $node->om = json_decode($model->output_object_map);
            }
            if($model->usage_type == 1){
                $node->st = json_decode($model->usage_type);
                $node->s = json_decode($model->sequence);
                $used_ids = array_merge($node->s,$used_ids);
            }elseif($model->usage_type == 0){
                $node->ct = intval($model->coding_type);
                $node->c = '%START_CLOSURE_REPLACEMENT_HOOK%'.SQDE_SequodesGenerator::makeCodeFromNode($node).'%END_CLOSURE_REPLACEMENT_HOOK%';
            }
            $models[$key] = $node;
        }
        $used_ids = array_unique($used_ids);
        $filtered_models = array();
        foreach($models as $key => $model){
            if(in_array($model->id, $used_ids) || in_array($model->id, $package_sequode_model_ids) ){
                $filtered_models[] = $model;
                $models[$key] = null;
            }
        }
        unset($models);
        $model_id_to_key = array();
        foreach($filtered_models as $key => $object){
            $model_id_to_key[$object->id] = $key;
        }
        
        $api_host = 'https://sequode.com/';
        
        header('Content-Type: text/plain',true);
        header('Content-Disposition: attachment; filename="'.SQDE_Package::model()->token.'.class.php"');
        echo '<?php
class ' . SQDE_Package::model()->token . ' {
    public static $origin_host = \'' . $api_host . '\';
    public static $application_name = \'' . SQDE_Package::model()->name . '\';
    public static $application_token = \'' . SQDE_Package::model()->token . '\';
    ' . file_get_contents('SQDE_SequodeExpressor.class.php',true) . '
    
    public static $model_name_to_model_id = ' . SQDE_FileManager::var_export($model_name_to_model_id, true) . ';
    public static $model_id_to_key = ' . SQDE_FileManager::var_export($model_id_to_key, true) . ';
    public static function models(){
        return ' . str_replace('Inp_Obj','i', str_replace('Prop_Obj','p', str_replace('Out_Obj','o', str_replace('\'%START_CLOSURE_REPLACEMENT_HOOK%','function($_s){ ',str_replace('%END_CLOSURE_REPLACEMENT_HOOK%\'',' return; }',SQDE_FileManager::var_export($filtered_models, true)))))) . ';
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
        header('Content-Disposition: attachment; filename="SequodeSDK.class.php"');
		echo file_get_contents('SQDE_SequodeSDK.class.php',true);
    }
}