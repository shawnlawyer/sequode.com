<?php
class SQDE_AccountCardObjects {
    public static $package = 'Account';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items =  self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $_o = array();
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Account Details','cards/account/details');
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Update Password','cards/account/updatePassword');
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Update Email','cards/account/updateEmail');
        return $_o;
    }
    public static function details(){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $_model = forward_static_call_array(array($modeler,'model'),array());
        $_o = (object) null;
        $_o->head = 'Account Detail';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Email');
        $_o->body[] = $_model->email;
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $_o;
    }
    public static function updatePassword(){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        $dialog_store = SQDE_Session::get($dialog['session_store_key']);
        $step = $dialog['steps'][$dialog_store->step];
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if($dialog_store->step != 0){
            $_o->menu = (object) null;
            $_o->menu->items = array();
            $_o->menu->items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Start Over','operations/account/' . __FUNCTION__,array(SQDE_Form::jsQuotedValue('{"reset":"1"}')));
        }
        $_o->head = 'Account Password';
        $_o->body = array('');
        if(isset($step->content)){
            if(isset($step->content->head)){
                $_o->body[] = '<div class="subline">'.$step->content->head.'</div>';
            }
            if(isset($step->content->head)){
                $_o->body[] = $step->content->body;
            }
        }
        if(isset($step->forms)){
            foreach($step->forms as $form){
                $_o->body = array_merge($_o->body, SQDE_Forms::render(self::$package, $form));
            }
        }
        if($dialog_store->step != 0){
            $_o->body[] = SQDE_CardComponent::resetDialog('operations/account/' . __FUNCTION__);
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }
    public static function updateEmail(){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        $dialog_store = SQDE_Session::get($dialog['session_store_key']);
        $step = $dialog['steps'][$dialog_store->step];
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if($dialog_store->step != 0){
            $_o->menu = (object) null;
            $_o->menu->items = array();
            $_o->menu->items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Start Over','operations/account/' . __FUNCTION__,array(SQDE_Form::jsQuotedValue('{"reset":"1"}')));
        }
        $_o->head = 'Account Email';
        $_o->body = array('');
        if(isset($step->content)){
            if(isset($step->content->head)){
                $_o->body[] = '<div class="subline">'.$step->content->head.'</div>';
            }
            if(isset($step->content->head)){
                $_o->body[] = $step->content->body;
            }
        }
        if(isset($step->forms)){
            foreach($step->forms as $form){
                $_o->body = array_merge($_o->body, SQDE_Forms::render(self::$package, $form));
            }
        }
        if($dialog_store->step != 0){
            $_o->body[] = SQDE_CardComponent::resetDialog('operations/account/' . __FUNCTION__);
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }
}