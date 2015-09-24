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
        $items = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Account Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/account/details'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Update Password',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/account/updatePassword'))
        );
        return $items;
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
        $steps = array();
        $steps[] = (object) array(
            'forms'=> array('updatePassword'),
            'content'=> (object) array(
                'head' => 'New Password',
                'body' => 'A password must be at least 8 characters long and contain at least 1 capital letter (A), 1 lowercase letter (a), 1 number (1) and one symbol character(!).'
            )
        );
        $steps[] = (object) array(
            'forms'=> array('password'),
            'content'=> (object) array(
                'head' => 'Current Password',
                'body' => 'Enter your current password.'
            )
        );
        if(!SQDE_Session::is('update_password_step')){
            SQDE_Session::set('update_password_step',0);
        }
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if(intval(SQDE_Session::get('update_password_step')) != 0){
            $_o->menu->items = array();
            $dom_id = SQDE_Component::uniqueHash('','');
            $_o->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Start Over',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/account/resetUpdatePassword'))
            
            );
        }
        $_o->head = 'Account Password';
        $_o->body = array('');
        if(isset($steps[SQDE_Session::get('update_password_step')]->content)){
            if(isset($steps[SQDE_Session::get('update_password_step')]->content->head)){
                $_o->body[] = '<div class="subline">'.$steps[SQDE_Session::get('update_password_step')]->content->head.'</div>';
            }
            if(isset($steps[SQDE_Session::get('update_password_step')]->content->head)){
                $_o->body[] = $steps[SQDE_Session::get('update_password_step')]->content->body;
            }
        }
        if(isset($steps[SQDE_Session::get('update_password_step')]->forms)){
            foreach($steps[SQDE_Session::get('update_password_step')]->forms as $form){
                $_o->body = array_merge($_o->body, SQDE_Forms::render(self::$package, $form));
            }
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }
}