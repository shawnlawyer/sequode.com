<?php
class SQDE_AuthedCardObjects {
    public static $package = 'Authed';
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
                'contents'=>'Logout',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/authed/logout'))
            );
        return $items;
    }
}