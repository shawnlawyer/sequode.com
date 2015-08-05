<?php
class SQDE_PackageCardObjects {
    public static $package = 'Package';
    public static function details($machine_model = null){
        if($machine_model != null ){ SQDE_Package::model($machine_model); }
        $machine_model = SQDE_Package::model($sequode_model);
        $card_object = self::operationsCards();
        $card_object->head = 'Package Details';
        $card_object->size = 'large';
        $card_object->body = array('');
        $card_object->body[] = (object) array('js' => 'registry.setContext({card:\'cards/package/details\',collection:\'machines\',node:\''.$machine_model->id.'\'});');
        $card_object->body[] = '<div class="subline kids">Name</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/package/name', array($machine_model->id)), $machine_model->name, 'settings');
        $card_object->body[] = $component_object;
        $card_object->body[] = '<div class="subline kids">Package Token</div>';
        $card_object->body[] = $machine_model->application_token;
        $card_object->body[] = '<div class="subline kids">Authentication Token</div>';
        $card_object->body[] = $machine_model->authentication_token;
        $html = $js = array();
        
        
        $dom_id = SQDE_Component::uniqueHash();
        $component_object = (object) null;
        $component_object->html = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
       
        $js = array();
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$machine_model->id.'\');';
        $js[] = 'if(next_id != \''.$machine_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/package/details', array('next_id')));
        $js[] = '}';
        $card_object->body[] = (object) array('js' =>implode('',$js));
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$machine_model->id.'</div>';
        }
        return $card_object;
    }
    public static function operationsCards($filter='', $_model = null){
        if($_model == null ){ $_model = SQDE_Package::model(); }
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/package/details', array($_model->id)))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/package/delete', array($_model->id)))
        );
        
        return $card_object;
    }
    public static function search( $_model = null){
        if($_model == null ){ $_model = SQDE_Package::model(); }
        
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $search_components_array = SQDE_Forms::render(self::$package,'search');
        $card_object->head = $search_components_array[0];
        array_shift($search_components_array);
        $dom_id = SQDE_Component::uniqueHash('','');
        
        $card_object->menu->items = array();
        foreach($search_components_array as $key => $object){
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $card_object->body = array();
        $card_object->body[] = (object) array('js' =>'registry.setContext({card:\'cards/package/search\',collection:\'package_search\',tearDown:function(){collection_cards = null;}});');
        
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/package/details\';';
        $js[] = 'collection_cards.icon = \'atom\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'package_search\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'package_search\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'package_search\'});';
        $card_object->body[] = (object) array('html' =>implode('',$html),'js' =>implode('',$js));
        
        return $card_object;
    }
    public static function my($user_model = null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
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
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/packages/newPackage'))
        );
        $card_object->body = array();
        $card_object->body[] = (object) array('js' =>'registry.setContext({card:\'cards/package/my\',collection:\'packages\',tearDown:function(){collection_cards = null;}});');
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/packages/details\';';
        $js[] = 'collection_cards.icon = \'atom\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'packages\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'packages\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'packages\'});';
        $card_object->body[] = (object) array('html' =>implode('',$html),'js' =>implode('',$js));
        return $card_object;
    }
}