<?php
class SQDE_AuthCardObjects {
    public static $package = 'Auth';
    public static function menu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $card_object->menu->items =  self::menuItems();
        return $card_object;
    }
    public static function menuItems(){
        $items = array();
        
        if(
            isset(SQDE_AuthenticatedUser::model()->role_id)
            && SQDE_AuthenticatedUser::model()->role_id < 101
        ){
            $dom_id = SQDE_Component::uniqueHash('','');
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'New Application Machine',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/machine/newMachine'))
            );
            $dom_id = SQDE_Component::uniqueHash('','');
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'My Application Machines',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/machine/my'))
            );
            $dom_id = SQDE_Component::uniqueHash('','');
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Search Application Machine',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/machine/search'))
            );
        }
        return $items;
    }
    public static function login(){
        $card_object = (object) null;
        $card_object->head = 'Login';
        $card_object->icon_background = 'sessions-icon-background';
        $card_object->size = 'medium';
        $card_object->body = SQDE_Forms::render(self::$package,,'login');
        return $card_object;
    }
    public static function terms(){
        $card_object = (object) null;
        $card_object->head = 'Terms and Conditions';
        $card_object->icon_background = 'settings-icon-background';
        $card_object->size = 'medium';
        $card_object->body = array_merge(SQDE_Forms::render(self::$package,,'terms'),SQDE_Forms::render(self::$package,,'acceptTerms'));
        return $card_object;
    }
}