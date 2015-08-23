<?php
class SQDE_AccountCardObjects {
    public static $package = 'Account';
    public static $modeler = 'SQDE_User';
    public static function menu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $card_object->menu->items =  self::menuItems();
        return $card_object;
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
         $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        $card_object = (object) null;
        $card_object->head = 'Account Detail';
        
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
        $card_object->menu = (object) null;
        
        $html = $js = array();
        
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Username');
        $card_object->body[] = $_model->username;
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Role');
        SQDE_Role::exists($_model->role_id,'id');
        $card_object->body[] = SQDE_Role::model()->name;
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Sign Up Date');
        $card_object->body[] = date('g:ia \o\n l jS F Y',$_model->sign_up_date);
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Allowed Sequode Count');
        $card_object->body[] = $_model->allowed_sequode_count;
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Sequode Favorites');
        $card_object->body[] = $_model->sequode_favorites;
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock('Email');
        $card_object->body[] = $_model->email;
        $sequodes_model = SQDE_UserOperations::getSequodesModelOfAllSequodes($_model,'id,name');
        $card_object->body[] = SQDE_CardComponentHTML::sublineBlock(Sequodes Created : '.count($sequodes_model->all));
        $dom_id = SQDE_Component::uniqueHash();
        foreach($sequodes_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button kids" id="'.$dom_id.$i.'">';
            $html[] = ' &#8727; ';
            $html[] = $object->name;
            $html[] = '</div>';
            $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id.$i, SQDE_ComponentJS::xhrCallObject('cards/sequode/details', array($object->id)));
            $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = SQDE_CardComponentHTML::modelId($_model);
        }
        return $card_object;
    }
}