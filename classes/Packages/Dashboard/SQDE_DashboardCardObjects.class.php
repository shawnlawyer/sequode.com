<?php
class SQDE_DashboardCardObjects {
    public static $package = 'Dashboard';
    public static function index($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        return self::gettingStarted($user_model);
    }
    public static function collection($collection, $user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        switch($collection){
            case 'my':
            case 'my_sequodes':
                return self::mySequodes($user_model);
            case 'machines':
            case 'my_machines':
                return self::myMachines($user_model);
            case 'packages':
            case 'my_packages':
                return self::myPackages($user_model);
            case 'tokens':
            case 'my_tokens':
                return self::myTokens($user_model);
        }
    }
    public static function gettingStarted($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->head = 'Sequode Web Services';
        $_o->icon_background = 'sequode-icon-background';
        $_o->body = array();
        
        $html = $js = array();
        $html[] = SQDE_Card::divider(true);
        $html[] = SQDE_Card::shim();
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_sequodes', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_tokens', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_packages', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_machines', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $_o->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        return $_o;
    }
    
    public static function mySequodes($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Sequodes';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/newSequence'))
        );
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Sequode', 'Sequodes Created : ', $user_model);
        return $_o;
    }
    public static function myMachines($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Application Machines';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Application Machine',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/machine/newMachine'))
        );
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Machine', 'Application Machines Created: ', $user_model);
        return $_o;
    }
    public static function myPackages($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Packages';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Package',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/package/newPackage'))
        );
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Package', 'Packages Created : ', $user_model);
        return $_o;
    }
    public static function myTokens($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Tokens';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Token',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/token/newToken'))
        );
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Token', 'Tokens Created : ', $user_model);
        return $_o;
    }
}