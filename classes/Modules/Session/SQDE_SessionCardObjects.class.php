<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Form as ModuleForm;

class SQDE_SessionCardObjects {
    public static $package = 'Session';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'session-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items =  self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $_o = array();
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Search Sessions','cards/session/search');
        return $_o;
    }
    public static function details($_model=null){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'session-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        
        
        $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Delete Session','cards/session/delete',array($_model->id));
        
        $_o->body[] = \Sequode\Component\Card\CardKit::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/session/details'));
        
        $_o->body = array();
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $js[] = \Sequode\Component\DOMElement\Kit\JS::documentEventOff('keydown');
        $js[] = '$(document).on(\'keydown\',(function(e){';
        
        $js[] = 'if (e.keyCode == 66){';
        
        $js[] = 'new SQDE_XHRCall({route:"operations/session/blockIP",inputs:['.$_model->id.']});';
        $js[] = '}';
        
        $js[] = 'if(next_id != \''.$_model->id.'\'){';
        
        $js[] = 'if (e.keyCode == 39){';
        $js[] = 'new SQDE_XHRCall({route:"cards/session/details",inputs:[next_id]});';
        $js[] = '}';
        
        $js[] = 'if (e.keyCode == 46){';
        $js[] = 'new SQDE_XHRCall({route:\'operations/session/delete\',inputs: ['.$_model->id.'],done_callback:function(){ new SQDE_XHRCall({route:\'cards/session/details\',inputs:[next_id]});} });';
        $js[] = '}';
        
        $js[] = '}else{';
        $js[] = 'if (e.keyCode == 46){';
        $js[] = 'new SQDE_XHRCall({route:\'operations/session/delete\',inputs: ['.$_model->id.']});';
        $js[] = '}';
        
        $js[] = '}';
        
        $js[] = '}));';
        
        
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Username');
        $_o->body[] = $_model->username;
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Ip Address');
        $_o->body[] = $_model->ip_address;
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Data');
        $_o->body[] = '<textarea style="width:20em; height:10em;">'.$_model->session_data.'</textarea>';
        $location = geoip_record_by_name($_model->ip_address);
        if ($location) {
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Geo Location');
        $_o->body[] = $location['city'].((!empty($location['region'])) ? ' '.$location['region'] : ''). ', '. $location['country_name'].((!empty($location['postal_code'])) ? ', '.$location['postal_code'] : '');
            
        }
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Session Started');
        $_o->body[] = date('g:ia \o\n l jS F Y',$_model->session_start);
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Last Sign In');
        $_o->body[] = \Sequode\Component\Card\CardKit::deleteInCollection((object) array('route'=>'operations/session/delete','model_id'=>$_model->id));
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::modelId($_model);
        return $_o;
    }
    public static function search($_model = null){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'session-icon-background';
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
        $_o->body[] = \Sequode\Component\Card\CardKit::collectionCard((object) array('collection'=>'session_search','icon'=>'atom','card_route'=>'cards/session/search','details_route'=>'cards/session/details'));
        return $_o;
    }
}