<?php
class SQDE_AuthCardObjects {
    public static $package = 'Auth';
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
            'contents'=>'Login',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/auth/login'))
        
        );
        /*
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Get Started',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/auth/terms'))
        );
        */
        return $items;
    }
    public static function login(){
        $_o = (object) null;
        $_o->head = 'Login';
        $_o->icon_background = 'sessions-icon-background';
        $_o->size = 'medium';
        $_o->body = SQDE_Forms::render(self::$package,'login');
        return $_o;
    }
    public static function terms(){
        $_o = (object) null;
        $_o->head = 'Terms and Conditions';
        $_o->icon_background = 'settings-icon-background';
        $_o->size = 'medium';
        $_o->body = array_merge(SQDE_Forms::render(self::$package,'terms'),SQDE_Forms::render(self::$package,'acceptTerms'));
        return $_o;
    }
}