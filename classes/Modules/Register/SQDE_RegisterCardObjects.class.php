<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

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
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Signup','cards/register/signup');
        return $_o;
    }
    public static function signup(){
        $dialog = ModuleRegistry::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){
            SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
        }
        $dialog_store = SQDE_Session::get($dialog['session_store_key']);
        $step = $dialog['steps'][$dialog_store->step];
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if($dialog_store->step != 0){
            $_o->menu = (object) null;
            $_o->menu->items = array();
            $_o->menu->items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Start Over','operations/account/' . __FUNCTION__,array(Sequode\Component\Form\Form::jsQuotedValue('{"reset":"1"}')));
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
                $_o->body = array_merge($_o->body, \Sequode\ModuleForm::render(self::$package, $form));
            }
        }
        if($dialog_store->step != 0){
            $_o->body[] = \Sequode\Component\Card\CardKit::resetDialogButton('operations/register/' . __FUNCTION__);
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }
}