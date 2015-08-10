<?php
class SQDE_SequodeOriginsRest{
	public static function package(){
        $used_ids = array();
        SQDE_Sequode::exists(SQDE_Package::model()->sequode_id,'id');
        $package_sequode_model_ids = array_unique(json_decode(SQDE_Sequode::model()->sequence));
        
		$sequode_model = new SQDE_Sequodes;
        foreach($package_sequode_model_ids as $id){
            $used_ids[] = $id;
            $sequode_model->exists($id,'id');
            $used_ids = array_merge($used_ids, json_decode(SQDE_Sequode::model()->sequence));
        }
		$sequode_model = new SQDE_Sequodes;
        $models = array();
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
        $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
        $where[] = array('field'=>'palette','operator'=>'=','value'=>'0');
        $sequode_model->getAll($where,'id,name,detail,usage_type,coding_type,sequence,input_object,property_object,output_object,input_object_detail,property_object_detail,output_object_detail,input_object_map,property_object_map,output_object_map,input_form_object,property_form_object');
        
        $models = $sequode_model->all;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
        $sequode_model->getAll($where,'id,name,detail,usage_type,coding_type,sequence,input_object,property_object,output_object,input_object_detail,property_object_detail,output_object_detail,input_object_map,property_object_map,output_object_map,input_form_object,property_form_object');
        
        $name_to_id = array();
        foreach($sequode_model->all as $key => $object){
            if(in_array($object->id, $package_sequode_model_ids)){
                $name_to_id[$object->name] = $object->id;
            }
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
                $used_ids = array_merge($used_ids,$node->s);
            }elseif($model->usage_type == 0){
                $node->ct = intval($model->coding_type);
                $node->c = '%START_CLOSURE_REPLACEMENT_HOOK%'.SQDE_SequodesGenerator::makeCodeFromNode($node).'%END_CLOSURE_REPLACEMENT_HOOK%';
            }
            $models[$key] = $node;
        }
        $used_ids = array_unique($used_ids);
        $filtered_models = array();
        foreach($models as $key => $model){
            if(in_array($model->id, $used_ids)){
                $filtered_models[] = $model;
                $models[$key] = null;
            }
        }
        unset($models);
        $id_to_key = array();
        foreach($filtered_models as $key => $object){
            $id_to_key[$object->id] = $key;
        }
        
        $api_host = 'https://api.sequode.com/';
        
        header('Content-Type: text/plain',true);
        header('Content-Disposition: attachment; filename="'.SQDE_Package::model()->token.'.class.php"');
        echo '<?php
class ' . SQDE_Package::model()->token . ' {
    public static $origin_host = \'' . $api_host . '\';
    public static $application_name = \'' . SQDE_Package::model()->name . '\';
    public static $application_token = \'' . SQDE_Package::model()->token . '\';
    ' . file_get_contents('SQDE_SequodeExpressor.class.php',true) . '
    
    public static $name_to_id = ' . SQDE_FileManager::var_export($name_to_id, true) . ';
    public static $id_to_key = ' . SQDE_FileManager::var_export($id_to_key, true) . ';
    public static $index = ' . $package_sequode_model_ids[0] . ';
    public static function collection(){
        return ' . str_replace('Inp_Obj','i', str_replace('Prop_Obj','p', str_replace('Out_Obj','o', str_replace('\'%START_CLOSURE_REPLACEMENT_HOOK%','function($_s){ ',str_replace('%END_CLOSURE_REPLACEMENT_HOOK%\'',' return; }',SQDE_FileManager::var_export($filtered_models, true)))))) . ';
    }
    public static function exists($value, $by=\'id\'){
        if($by == \'name\'){
            return (isset(static::$name_to_id[$value])) ? static::$id_to_key[static::$name_to_id[$value]] : false;
        }else{ 
            return (isset(static::$id_to_key[intval($value)])) ? static::$id_to_key[intval($value)] : false;
        }
    }
    
    public static function node($value, $by = null){
        switch($by){
            case \'id\':
            case \'name\':
                break;
            default:
                $by = \'id\';
                break;
        }
        $key = self::exists($value,$by);
        
        if($key !== false){
            return self::collection()[$key];
        }
        return false;   
	}
}
';
    }
	public static function sdk(){
        header('Content-Type: text/plain',true);
        header('Content-Disposition: attachment; filename="SequodeSDK.class.php"');
		echo file_get_contents('SQDE_SequodeSDK.class.php',true);
    }
}