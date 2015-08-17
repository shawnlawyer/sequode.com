<?php
class SQDE_UsersCardObjects {
    public static $package = 'Users';
    public static $modeler = 'SQDE_User';
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        $items = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/users/details', array($_model->id)))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Delete',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/users/delete', array($_model->id)))
        );
        if(SQDE_UserAuthority::isSystemOwner()){
            $dom_id = SQDE_Component::uniqueHash('','');
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Login As',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/users/loginAs', array($_model->id)))
            );
        }
        return $items;
    }
    public static function details($_model = null){
         $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'large';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = self::modelOperationsMenuItems();
        
        $card_object->head = 'User Detail';
        $card_object->body = array('');
        
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html[] = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$_model->id.'\');';
        $js[] = 'if(next_id != \''.$_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/users/details', array('next_id')));
        $js[] = '}';
        $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        
        $card_object->body[] = '<div class="subline kids">Username</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updateName', array($_model->id)), $_model->username, 'settings');
        $card_object->body[] = '<div class="subline kids">Password</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updatePassword', array($_model->id)), 'Set Password', 'settings');
        $card_object->body[] = '<div class="subline kids">Role</div>';
        SQDE_Role::exists($_model->role_id,'id');
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updateRole', array($_model->id)), SQDE_Role::model()->name, 'settings');
        $card_object->body[] = '<div class="subline kids">Active Status</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updateActive', array($_model->id)), (($_model->active == 1) ? 'Active' : 'Suspended'), 'settings');
        $card_object->body[] = '<div class="subline kids">Sign Up Date</div>';
        $card_object->body[] = date('g:ia \o\n l jS F Y',$_model->sign_up_date);
        $card_object->body[] = '<div class="subline kids">Allowed Sequode Count</div>';
        $card_object->body[] = $_model->allowed_sequode_count;
        $card_object->body[] = '<div class="subline kids">Favorite Sequodes</div>';
        $card_object->body[] = $_model->sequode_favorites;
        $card_object->body[] = '<div class="subline kids">Email</div>';
        $card_object->body[] = $_model->email;
        $sequodes_model = SQDE_UserOperations::getSequodesModelOfAllSequodes($_model,'id,name');
        $card_object->body[] = '<div class="subline kids">Sequodes Created : '.count($sequodes_model->all).'</div>';
        $dom_id = SQDE_Component::uniqueHash('','');
        foreach($sequodes_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button kids" id="'.$dom_id.$i.'">';
            $html[] = ' &#8727; ';
            $html[] = $object->name;
            $html[] = '</div>';            
            $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id.$i, SQDE_ComponentJS::ajaxCallObject('cards/users/details', array($object->id)));
            $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
        return $card_object;
    }
    public static function search(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
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
        $js[] = 'cards.details_route = \'cards/users/details\';';
        $js[] = 'cards.icon = \'user\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'user_search\';';
        $js[] = 'registry.setContext({card:\'cards/users/search\',collection:\'user_search\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'user_search\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'user_search\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
}