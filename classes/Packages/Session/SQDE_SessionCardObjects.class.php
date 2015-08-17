<?php
class SQDE_SessionCardObjects {
    public static $package = 'Session';
    public static $modeler = 'SQDE_Session';
    public static function details($_model=null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'large';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'session-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete Session',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/session/delete', array($_model->id)))
        );
        
        
        $card_object->body = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
       
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$_model->id.'\');';
        $js[] = SQDE_ComponentJS::documentEventOff('keydown');
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
        $js[] = 'if(next_id != \''.$_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/session/details', array('next_id')));
        $js[] = '}';
        
        $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        $card_object->body[] = '<div class="subline kids">Username</div>';
        $card_object->body[] = $_model->username;
        $card_object->body[] = '<div class="subline kids">Ip Address</div>';
        $card_object->body[] = $_model->ip_address;
        $card_object->body[] = '<div class="subline kids">Data</div>';
        $card_object->body[] = '<textarea style="width:20em; height:10em;">'.$_model->session_data.'</textarea>';
        $location = geoip_record_by_name($_model->ip_address);
        if ($location) {
        $card_object->body[] = '<div class="subline kids">Geo Location</div>';
        $card_object->body[] = $location['city'].((!empty($location['region'])) ? ' '.$location['region'] : ''). ', '. $location['country_name'].((!empty($location['postal_code'])) ? ', '.$location['postal_code'] : '');
            
        }
        $card_object->body[] = '<div class="subline kids">Session Started</div>';
        $card_object->body[] = date('g:ia \o\n l jS F Y',$_model->session_start);
        $card_object->body[] = '<div class="subline kids">Last Sign In</div>';
        $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
        return $card_object;
    }
    public static function search($_model = null){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'session-icon-background';
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
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'cards = new SQDE_CollectionCards();';
        $js[] = 'cards.details_route = \'cards/session/details\';';
        $js[] = 'cards.icon = \'atom\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'session_search\';';
        $js[] = 'registry.setContext({card:\'cards/session/search\',collection:\'session_search\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'session_search\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'session_search\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
}