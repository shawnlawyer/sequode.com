<?php
class SQDE_UsersCardObjects {
    public static $package = 'Users';
    public static function details($user_model=null){
        if($user_model == null ){ $user_model = SQDE_User::model(); }
        $card_object = (object) null;
        $card_object->head = 'User Detail';
        
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Login As',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/users/loginAs', array($user_model->id)))
        );
        
        
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
        $js = array();
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$user_model->id.'\');';
        $js[] = 'if(next_id != \''.$user_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/users/details', array('next_id')));
        $js[] = '}';
        $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        
        $card_object->body[] = '<div class="subline kids">Username</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updateName', array($user_model->id)), $user_model->username, 'settings');
        $card_object->body[] = '<div class="subline kids">Password</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updatePassword', array($user_model->id)), 'Set Password', 'settings');
        $card_object->body[] = '<div class="subline kids">Role</div>';
        SQDE_Role::exists($user_model->role_id,'id');
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updateRole', array($user_model->id)), SQDE_Role::model()->name, 'settings');
        $card_object->body[] = '<div class="subline kids">Active Status</div>';
        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::ajaxCallObject('forms/users/updateActive', array($user_model->id)), (($user_model->active == 1) ? 'Active' : 'Suspended'), 'settings');
        $card_object->body[] = '<div class="subline kids">Sign Up Date</div>';
        $card_object->body[] = date('g:ia \o\n l jS F Y',$user_model->sign_up_date);
        $card_object->body[] = '<div class="subline kids">Allowed Sequode Count</div>';
        $card_object->body[] = $user_model->allowed_sequode_count;
        $card_object->body[] = '<div class="subline kids">Favorite Sequodes</div>';
        $card_object->body[] = $user_model->sequode_favorites;
        $card_object->body[] = '<div class="subline kids">Email</div>';
        $card_object->body[] = $user_model->email;
        $sequodes_model = SQDE_UserOperations::getSequodesModelOfAllSequodes($user_model,'id,name');
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
        $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$user_model->id.'</div>';
        return $card_object;
    }
    public static function search(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
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
        $card_object->body[] = (object) array('js' => 'registry.setContext({card:\'cards/users/search\',collection:\'user_search\',tearDown:function(){collection_cards = null;}});');
        $dom_id = SQDE_Component::uniqueHash();
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/users/details\';';
        $js[] = 'collection_cards.icon = \'user\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'user_search\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'user_search\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'user_search\'});';
        $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        return $card_object;
    }
}