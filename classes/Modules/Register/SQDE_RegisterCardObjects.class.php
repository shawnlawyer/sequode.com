<?php
class SQDE_RegisterCardObjects {
    public static $package = 'Register';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items = self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $_o = array();
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Signup','cards/register/signup');
        return $_o;
    }
    public static function signup(){
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
        $_o->head = ' Create Account';
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
            $_o->body[] = SQDE_CardComponent::resetDialog('operations/register/' . __FUNCTION__);
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }
}