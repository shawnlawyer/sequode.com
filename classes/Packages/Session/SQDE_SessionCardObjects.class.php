<?php
class SQDE_SessionCardObjects {
    public static $package = 'Session';
    public static function details($session_model=null){
        if($session_model == null ){ $session_model = SQDE_Session::model(); }
        $card_object = (object) null;
        $card_object->head = 'Session Detail';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'session-icon-background';
        
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete Session',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/session/delete', array($session_model->id)))
        );
        
        $html = $js = array();
        
        
        $dom_id = SQDE_Component::uniqueHash();
        $component_object = (object) null;
        $component_object->html = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
       
        $js = array();
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$session_model->id.'\');';
        $js[] = SQDE_ComponentJS::documentEventOff('keydown');
        $js[] = '$(document).on(\'keydown\',(function(e){';
        
        $js[] = 'if (e.keyCode == 66){';
        
        $js[] = 'new SQDE_AjaxCall({route:"operations/session/blockIP",inputs:['.$session_model->id.']});';
        $js[] = '}';
        
        $js[] = 'if(next_id != \''.$session_model->id.'\'){';
        
        $js[] = 'if (e.keyCode == 39){';
        $js[] = 'new SQDE_AjaxCall({route:"cards/session/details",inputs:[next_id]});';
        $js[] = '}';
        
        $js[] = 'if (e.keyCode == 46){';
        $js[] = 'new SQDE_AjaxCall({route:\'operations/session/delete\',inputs: ['.$session_model->id.'],done_callback:function(){ new SQDE_AjaxCall({route:\'cards/session/details\',inputs:[next_id]});} });';
        $js[] = '}';
        
        $js[] = '}else{';
        $js[] = 'if (e.keyCode == 46){';
        $js[] = 'new SQDE_AjaxCall({route:\'operations/session/delete\',inputs: ['.$session_model->id.']});';
        $js[] = '}';
        
        $js[] = '}';
        
        $js[] = '}));';
        $js[] = 'if(next_id != \''.$session_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/session/details', array('next_id')));
        $js[] = '}';
        $component_object->js = implode('',$js);
        $card_object->body[] = $component_object;
        $card_object->body[] = '<div class="subline kids">Username</div>';
        $card_object->body[] = $session_model->username;
        $card_object->body[] = '<div class="subline kids">Ip Address</div>';
        $card_object->body[] = $session_model->ip_address;
        $card_object->body[] = '<div class="subline kids">Data</div>';
        $card_object->body[] = '<textarea style="width:20em; height:10em;">'.$session_model->session_data.'</textarea>';
        $location = geoip_record_by_name($session_model->ip_address);
        if ($location) {
        $card_object->body[] = '<div class="subline kids">Geo Location</div>';
        $card_object->body[] = $location['city'].((!empty($location['region'])) ? ' '.$location['region'] : ''). ', '. $location['country_name'].((!empty($location['postal_code'])) ? ', '.$location['postal_code'] : '');
            
        }
        $card_object->body[] = '<div class="subline kids">Session Started</div>';
        $card_object->body[] = date('g:ia \o\n l jS F Y',$session_model->session_start);
        $card_object->body[] = '<div class="subline kids">Last Sign In</div>';
        $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$session_model->id.'</div>';
        return $card_object;
    }
    public static function search(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'session-icon-background';
        $search_components_array = SQDE_Forms::render(self::$package,'search');
        $card_object->head = $search_components_array[0];
        array_shift($search_components_array);
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash();
        
        $card_object->menu->items = array();
        foreach($search_components_array as $key => $object){
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $card_object->body = array();
        $component_object->js = 'registry.setContext({card:\'cards/session/search\',collection:\'session_search\',tearDown:function(){collection_cards = null;}});';
        $card_object->body[] = $component_object;
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/session/details\';';
        $js[] = 'collection_cards.icon = \'atom\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'session_search\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'session_search\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'session_search\'});';
        $component_object = (object) null;
        $component_object->html = implode('', $html);
        $component_object->js = implode(' ', $js);
        $card_object->body[] = $component_object;
        
        return $card_object;
    }
}