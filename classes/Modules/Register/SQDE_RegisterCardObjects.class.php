<?php
class SQDE_RegisterCardObjects {
    public static $package = 'Register';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'settings-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items = self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $items = array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Signup',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/register/signup'))
        
        );
        return $items;
    }
    public static function signup(){
        $steps = array('email','verify','terms');
        if(!SQDE_Session::is('registration_step')){
            SQDE_Session::set('registration_step',0);
        }
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        $_o->head = 'Signup &gt; Step ' . (SQDE_Session::get('registration_step') + 1);
        $_o->body = array_merge(SQDE_Forms::render(self::$package, $steps[SQDE_Session::get('registration_step')]));
        return $_o;    
    }
}