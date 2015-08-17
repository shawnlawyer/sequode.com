<?php
class SQDE_AuthedCardObjects {
    public static $package = 'Authed';
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
                'contents'=>'Logout',
                'js_action'=> SQDE_ComponentJS::onTapEvents($dom_id, 'window.location.assign(\'/logout\');')
            );
        return $items;
    }
}