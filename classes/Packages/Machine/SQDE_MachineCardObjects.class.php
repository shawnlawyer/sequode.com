<?php
class SQDE_MachineCardObjects {
    public static $package = 'Machine';
    public static $modeler = 'SQDE_Machine';
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        $items = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/machine/details', array($_model->id)))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/machine/delete', array($_model->id)))
        );
        
        return $items;
    }
    public static function details($_model = null){
         $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'large';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = self::modelOperationsMenuItems();
        
        $card_object->head = 'Machine Details';
        $card_object->body = array('');
        $card_object->body[] = (object) array('js' => 'registry.setContext({card:\'cards/machine/details\',collection:\'machines\',node:\''.$_model->id.'\'});');
        $card_object->body[] = '<div class="subline kids">Name</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/machine/name', array($_model->id)), $_model->name, 'settings');
        $card_object->body[] = $component_object;
        $card_object->body[] = '<div class="subline kids">Application Token</div>';
        $card_object->body[] = $_model->application_token;
        $card_object->body[] = '<div class="subline kids">Authentication Token</div>';
        $card_object->body[] = $_model->authentication_token;
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        
        $html[] = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$_model->id.'\');';
        $js[] = 'if(next_id != \''.$_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/machine/details', array('next_id')));
        $js[] = '}';
        $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
        }
        return $card_object;
    }
    public static function my(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->head = 'My Machines';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Package',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/package/newPackage'))
        );
        $card_object->body = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'var cards = new SQDE_CollectionCards();';
        $js[] = 'cards.details_route = \'cards/machine/details\';';
        $js[] = 'cards.icon = \'atom\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'machines\';';
        $js[] = 'registry.setContext({card:\'cards/machine/my\',collection:\'machines\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'machines\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'machines\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
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
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'cards = new SQDE_CollectionCards();';
        $js[] = 'cards.details_route = \'cards/machine/details\';';
        $js[] = 'cards.icon = \'atom\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'machine_search\';';
        $js[] = 'registry.setContext({card:\'cards/machine/search\',collection:\'machine_search\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'machine_search\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'machine_search\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
}