<?php
class SQDE_UsersCardObjects {
    public static $package = 'Users';
    public static $modeler = 'SQDE_User';
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
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/users/search'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New User',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/users/newUser'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Guest',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/users/newGuest'))
        );
        return $items;
    }
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        $items = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/users/details', array($_model->id)))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/users/delete', array($_model->id)))
        );
        if(SQDE_UserAuthority::isSystemOwner()){
            $dom_id = SQDE_Component::uniqueHash('','');
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Login As',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/users/loginAs', array($_model->id)))
            );
        }
        return $items;
    }
    public static function details($_model = null){
         $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'User Detail';
        $_o->body = array('');
        
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Username');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/users/updateName', array($_model->id)), $_model->username, 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Password');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/users/updatePassword', array($_model->id)), 'Set Password', 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Role');
        SQDE_Role::exists($_model->role_id,'id');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/users/updateRole', array($_model->id)), SQDE_Role::model()->name, 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Active Status');
        $_o->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/users/updateActive', array($_model->id)), (($_model->active == 1) ? 'Active' : 'Suspended'), 'settings');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Sign Up Date');
        $_o->body[] = date('g:ia \o\n l jS F Y',$_model->sign_up_date);
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Allowed Sequode Count');
        $_o->body[] = $_model->allowed_sequode_count;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Favorite Sequodes');
        $_o->body[] = $_model->sequode_favorites;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Email');
        $_o->body[] = $_model->email;
        $sequodes_model = SQDE_UserOperations::getOwnedModels('Sequode', $user_model, 'id,name');
        $_o->body[] = '<div class="subline kids">Sequodes Created : '.count($sequodes_model->all).'</div>';
        $dom_id = SQDE_Component::uniqueHash('','');
        foreach($sequodes_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button kids" id="'.$dom_id.$i.'">';
            $html[] = ' &#8727; ';
            $html[] = $object->name;
            $html[] = '</div>';            
            $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id.$i, SQDE_ComponentJS::xhrCallObject('cards/users/details', array($object->id)));
            $_o->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        
        $_o->body[] = SQDE_CardComponent::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/users/details'));
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
        $_o->body[] = SQDE_CardComponent::collection((object) array('collection'=>'user_search','icon'=>'user','card_route'=>'cards/users/search','details_route'=>'cards/users/details'));
        return $_o;
    }
}