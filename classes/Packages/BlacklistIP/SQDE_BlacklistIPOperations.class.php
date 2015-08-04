<?php
class SQDE_BlacklistIPOperations {
    public static function create($session_model){
        SQDE_BlacklistIP::model()->create($session_model->ip_address);
        return SQDE_BlacklistIP::model();
    }
    public static function delete($blacklist_ip_model){
        if($blacklist_ip_model == null ){ $blacklist_ip_model = SQDE_BlacklistIP::model(); }
        $blacklist_ip_model->delete($blacklist_ip_model->id);
        return SQDE_BlacklistIP::model($blacklist_ip_model);
    }
}