<?php
class SQDE_UserCardObjects {
    public static $package = 'User';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items =  self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $items = array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Search Users',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/user/search'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New User',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/newUser'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Guest',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/newGuest'))
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
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/user/details', array($_model->id)))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/delete', array($_model->id)))
        );
        if(SQDE_UserAuthority::isSystemOwner()){
            $dom_id = SQDE_Component::uniqueHash('','');
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Login As',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/loginAs', array($_model->id)))
            );
        }
        return $items;
    }
    public static function details($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'User Detail';
        $_o->body = array('');
        
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Username');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/user/updateName', array($_model->id)), $_model->username, 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Password');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/user/updatePassword', array($_model->id)), 'Set Password', 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Role');
        SQDE_Role::exists($_model->role_id,'id');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/user/updateRole', array($_model->id)), SQDE_Role::model()->name, 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Active Status');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/user/updateActive', array($_model->id)), (($_model->active == 1) ? 'Active' : 'Suspended'), 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Sign Up Date');
        $_o->body[] = date('g:ia \o\n l jS F Y',$_model->sign_up_date);
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Allowed Sequode Count');
        $_o->body[] = $_model->allowed_sequode_count;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Favorite Sequodes');
        $_o->body[] = $_model->sequode_favorites;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Email');
        $_o->body[] = $_model->email;
        $_o->body[] = SQDE_CardComponent::collectionTile('Sequode', 'Sequodes Created : ', $_model);
        $_o->body[] = SQDE_CardComponent::collectionTile('Package', 'Packages Created : ', $user_model);
        $_o->body[] = SQDE_CardComponent::collectionTile('Token', 'Tokens Created : ', $_model);
        $_o->body[] = SQDE_CardComponent::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/user/details'));
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $_o;
    }
    public static function search(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
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
        $_o->body[] = SQDE_CardComponent::collectionCard((object) array('collection'=>'user_search','icon'=>'user','card_route'=>'cards/user/search','details_route'=>'cards/user/details'));
        return $_o;
    }
}