<?php
class SQDE_UsersOperationsXHR {
    public static $package = 'Users';
    public static function newUser(){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        return SQDE_UsersCardsXHR::details(SQDE_UserOperations::newUser()->id);
    }
    public static function newGuest(){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        return SQDE_UsersCardsXHR::details(SQDE_UserOperations::newGuest()->id);
    }
    public static function delete($user_model_id){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_User::exists($user_model_id,'id')
        )){return;}
        SQDE_UserOperations::delete();
        return;
    }
    public static function updateDomain($json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $input = json_decode(rawurldecode($json));
        SQDE_UserOperations::updateDomain(rawurldecode($input->domain));
        return;
    }
    public static function loginAs($user_model_id){
        $input = json_decode(rawurldecode($json));
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_User::exists($user_model_id,'id')
        )){return;}
        SQDE_UserOperations::login();
        return SQDE_SiteRoutes::applicationJS(false);
    }
    public static function updatePassword($user_model_id, $json){
        $input = json_decode(rawurldecode($json));
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_User::exists($user_model_id,'id')
        )){return;}
        SQDE_UserOperations::updatePassword($input->password);
        return;
    }
    public static function updateRole($user_model_id, $json){
        $input = json_decode(rawurldecode($json));
        if(!(
            SQDE_UserAuthority::isSystemOwner()
            && SQDE_User::exists($user_model_id,'id')
            && SQDE_Role::exists($input->role,'id')
        )){return;}
        SQDE_UserOperations::updateRole();
        return;
    }
    public static function updateActive($user_model_id, $json){
        $input = json_decode(rawurldecode($json));
        if(!(
            SQDE_UserAuthority::isSystemOwner()
            && SQDE_User::exists($user_model_id,'id')
        )){return;}
        SQDE_UserOperations::updateActive($input->active);
        return;
    }
    public static function search($search_json){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        $search_object = json_decode(stripslashes($search_json));
        if(!is_object($search_object) || (trim($search_object->search) == '' || empty(trim($search_object->search)))){
            SQDE_Session::set('user_search', '{}');
        }else{
            SQDE_Session::set('user_search', stripslashes($search_json));
        }
        $js[] = 'registry.active_collection = \'user_search\';';
        $js[] = 'registry.fetch({collection:\'user_search\'});';
        return implode(' ',$js);
    }
    public static function updateName($user_model_id, $json){
        if(!(
            SQDE_User::exists($user_model_id,'id')
        )){ return; }
        $input = json_decode($json);
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($input->username))));
        if(strlen($name)==0){
            return ' alert(\'Name cannot be empty\');';
        }
        if(!eregi("^([A-Za-z0-9_])*$",$name)){
            return ' alert(\'Name can be alphanumeric and contain spaces only\');';
        }
        
        if(SQDE_User::exists($name,'username') && SQDE_User::model()->id != $user_model_id){
            return ' alert(\'Name already exists\');';
        }elseif(SQDE_User::exists($name,'username') && SQDE_User::model()->id == $user_model_id){
            return;
        }
        SQDE_User::exists($user_model_id,'id');
        SQDE_UserOperations::updateName($name);
        $js = array();
        $js[] = 'registry.fetch({collection:\'users\', key:'.SQDE_User::model()->id.'});';
        if(SQDE_AuthenticatedUser::model()->id == $user_model_id){
            $js[] = 'registry.fetch({collection:\'user\');';
        }
        return implode(' ', $js);
    }
}