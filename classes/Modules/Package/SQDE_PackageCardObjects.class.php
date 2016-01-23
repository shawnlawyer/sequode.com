<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Form as ModuleForm;

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
        $_o = array();
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('New Package','operations/package/newPackage');
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('My Packages','cards/package/my');
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Search Sequodes','cards/package/search');
        return $_o;
    }
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        $_o = array();
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Details','cards/package/details',array($_model->id));
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Delete','cards/package/delete',array($_model->id));
        return $_o;
    }
    public static function details($_model = null){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
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
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Name');
        $_o->body[] = \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/package/name', array($_model->id)), $_model->name, 'settings');
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Package Sequode');
        $_o->body[] = ($_model->sequode_id != 0 && SQDE_Sequode::exists($_model->sequode_id,'id')) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/package/packageSequode', array($_model->id)), SQDE_Sequode::model()->name, 'settings') : ModuleForm::render(self::$package,'packageSequode')[0];
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Package Token');
        $_o->body[] = $_model->token;
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('<a target="_blank" href="/source/'.$_model->token.'">Download</a>');
        
        $_o->body[] = \Sequode\Component\Card\CardKit::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/package/details'));
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::modelId($_model);
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
        
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Package',
            'js_action'=> \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject('operations/package/newPackage'))
        );
        $_o->body = array();
        $_o->body[] = \Sequode\Component\Card\CardKit::collectionCard((object) array('collection'=>'packages','icon'=>'atom','card_route'=>'cards/package/my','details_route'=>'cards/package/details'));
        return $_o;
    }
    public static function search(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = array();
        
        $search_components_array = ModuleForm::render(self::$package,'search');
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
        $_o->body[] = \Sequode\Component\Card\CardKit::collectionCard((object) array('collection'=>'package_search','icon'=>'atom','card_route'=>'cards/package/search','details_route'=>'cards/package/details'));
        return $_o;
    }
}