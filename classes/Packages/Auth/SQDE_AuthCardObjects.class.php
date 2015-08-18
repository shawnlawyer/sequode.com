<?php
class SQDE_AuthCardObjects {
    public static $package = 'Auth';
    public static function menu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'settings-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $card_object->menu->items = self::menuItems();
        return $card_object;
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
        $card_object = (object) null;
        $card_object->head = 'Login';
        $card_object->icon_background = 'sessions-icon-background';
        $card_object->size = 'medium';
        $card_object->body = SQDE_Forms::render(self::$package,'login');
        return $card_object;
    }
    public static function terms(){
        $card_object = (object) null;
        $card_object->head = 'Terms and Conditions';
        $card_object->icon_background = 'settings-icon-background';
        $card_object->size = 'medium';
        $card_object->body = array_merge(SQDE_Forms::render(self::$package,'terms'),SQDE_Forms::render(self::$package,'acceptTerms'));
        return $card_object;
    }
}