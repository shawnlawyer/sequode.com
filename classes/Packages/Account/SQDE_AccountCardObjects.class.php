<?php
class SQDE_AccountCardObjects {
    public static $package = 'Account';
    public static $modeler = 'SQDE_AuthenticatedUser';
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
            'contents'=>'Account Details',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/account/details'))
        );
        return $items;
    }
    public static function details(){
        $_model = forward_static_call_array(array(self::$modeler,'model'),array());
        $_o = (object) null;
        $_o->head = 'Account Detail';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'user-icon-background';
        
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Username');
        $_o->body[] = $_model->username;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Role');
        SQDE_Role::exists($_model->role_id,'id');
        $_o->body[] = SQDE_Role::model()->name;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Sign Up Date');
        $_o->body[] = date('g:ia \o\n l jS F Y',$_model->sign_up_date);
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Allowed Sequode Count');
        $_o->body[] = $_model->allowed_sequode_count;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Sequode Favorites');
        $_o->body[] = $_model->sequode_favorites;
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Email');
        $_o->body[] = $_model->email;
        $sequodes_model = SQDE_UserOperations::getOwnedModels('Sequode', $user_model, 'id,name');
        $_o->body[] = SQDE_CardComponentHTML::sublineBlock('Sequodes Created : '.count($sequodes_model->all));
        $dom_id = SQDE_Component::uniqueHash();
        foreach($sequodes_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button kids" id="'.$dom_id.$i.'">';
            $html[] = ' &#8727; ';
            $html[] = $object->name;
            $html[] = '</div>';
            $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id.$i, SQDE_ComponentJS::xhrCallObject('cards/sequode/details', array($object->id)));
            $_o->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $_o;
    }
}