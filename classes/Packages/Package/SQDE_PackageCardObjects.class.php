<?php
class SQDE_PackageCardObjects {
    public static $package = 'Package';
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
       
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Package',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/package/newPackage'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'My Packages',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/package/my'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Search Packages',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/package/search'))
        );
        return $items;
    }
    
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        $items = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/package/details', array($_model->id)))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/package/delete', array($_model->id)))
        );
        
        return $items;
    }
    public static function details($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'large';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = self::modelOperationsMenuItems();
        
        $card_object->head = 'Package Details';
        $card_object->body = array('');
        $card_object->body[] = (object) array('js' => 'registry.setContext({card:\'cards/package/details\',collection:\'packages\',node:\''.$_model->id.'\'});');
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Name');
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/package/name', array($_model->id)), $_model->name, 'settings');
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Package Sequode');
        $card_object->body[] = ($_model->sequode_id != 0 && SQDE_Sequode::exists($_model->sequode_id,'id')) ? SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/package/packageSequode', array($_model->id)), SQDE_Sequode::model()->name, 'settings') : SQDE_Forms::render(self::$package,'packageSequode')[0];
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Package Token');
        $card_object->body[] = $_model->token;
        
        $card_object->body[] = SQDE_CardComponent::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/package/details'));
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $card_object;
    }
    public static function my(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->head = 'My Packages';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Package',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/package/newPackage'))
        );
        $card_object->body = array();
        $card_object->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'packages','icon'=>'atom','card_route'=>'cards/package/my','details_route'=>'cards/package/details'));
        return $card_object;
    }
    public static function search(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = array();
        
        $search_components_array = SQDE_Forms::render(self::$package,'search');
        $card_object->head = $search_components_array[0];
        array_shift($search_components_array);
        
        foreach($search_components_array as $key => $object){
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $card_object->body = array();
        $card_object->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'package_search','icon'=>'atom','card_route'=>'cards/package/search','details_route'=>'cards/package/details'));
        return $card_object;
    }
}