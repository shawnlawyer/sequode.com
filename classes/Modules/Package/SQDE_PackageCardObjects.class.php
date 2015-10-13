<?php
class SQDE_PackageCardObjects {
    public static $package = 'Package';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items =  self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $dom_id = SQDE_Component::uniqueHash('','');
        $items = array();
        $items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('New Package','operations/package/newPackage');
        $items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('My Packages','cards/package/my');
        $items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Search Sequodes','cards/package/search');
        return $items;
    }
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        $items = array();
        $items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Details','cards/package/details',array($_model->id));
        $items[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Delete','cards/package/delete',array($_model->id));
        return $items;
    }
    public static function details($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'Package Details';
        $_o->body = array('');
        $_o->body[] = (object) array('js' => 'registry.setContext({card:\'cards/package/details\',collection:\'packages\',node:\''.$_model->id.'\'});');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Name');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/package/name', array($_model->id)), $_model->name, 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Package Sequode');
        $_o->body[] = ($_model->sequode_id != 0 && SQDE_Sequode::exists($_model->sequode_id,'id')) ? SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/package/packageSequode', array($_model->id)), SQDE_Sequode::model()->name, 'settings') : SQDE_Forms::render(self::$package,'packageSequode')[0];
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Package Token');
        $_o->body[] = $_model->token;
        
        $_o->body[] = SQDE_CardComponent::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/package/details'));
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $_o;
    }
    public static function my(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->head = 'My Packages';
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
        $_o->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'packages','icon'=>'atom','card_route'=>'cards/package/my','details_route'=>'cards/package/details'));
        return $_o;
    }
    public static function search(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = array();
        
        $search_components_array = SQDE_Forms::render(self::$package,'search');
        $_o->head = $search_components_array[0];
        array_shift($search_components_array);
        
        foreach($search_components_array as $key => $object){
            $_o->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $_o->body = array();
        $_o->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'package_search','icon'=>'atom','card_route'=>'cards/package/search','details_route'=>'cards/package/details'));
        return $_o;
    }
}