<?php
class SQDE_TokenCardObjects {
    public static $package = 'Token';
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
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('New Token','operations/token/newPackage');
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('My Tokens','cards/token/my');
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Search Tokens','cards/token/search');
        return $_o;
    }
    
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        $_o = array();
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Details','cards/token/details',array($_model->id));
        $_o[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('Delete','cards/token/delete',array($_model->id));
        return $items;
    }
    public static function details($_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'Token Details';
        $_o->body = array('');
        $_o->body[] = (object) array('js' => 'registry.setContext({card:\'cards/token/details\',collection:\'tokens\',node:\''.$_model->id.'\'});');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Name');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/token/name', array($_model->id)), $_model->name, 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Token');
        $_o->body[] = $_model->token;
        
        
        $_o->body[] = SQDE_CardComponent::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/token/details'));
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $_o;
    }
    public static function my(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->head = 'My Tokens';
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
        $_o->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'tokens','icon'=>'atom','card_route'=>'cards/token/my','details_route'=>'cards/token/details'));
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
        $_o->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'token_search','icon'=>'atom','card_route'=>'cards/token/my','details_route'=>'cards/token/details'));
        return $_o;
    }
}