<?php
class SQDE_AccountCardObjects {
    public static $package = 'Account';
    public static $modeler = 'SQDE_User';
    public static function details($_model = null){
         $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        $card_object = (object) null;
        $card_object->head = 'Account Detail';
        
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
        $card_object->menu = (object) null;
        
        $html = $js = array();
        
        $card_object->body[] = '<div class="subline kids">Username</div>';
        $card_object->body[] = $_model->username;
        $card_object->body[] = '<div class="subline kids">Role</div>';
        SQDE_Role::exists($_model->role_id,'id');
        $card_object->body[] = SQDE_Role::model()->name;
        $card_object->body[] = '<div class="subline kids">Sign Up Date</div>';
        $card_object->body[] = date('g:ia \o\n l jS F Y',$_model->sign_up_date);
        $card_object->body[] = '<div class="subline kids">Allowed Sequode Count</div>';
        $card_object->body[] = $_model->allowed_sequode_count;
        $card_object->body[] = '<div class="subline kids">Sequode Favorites</div>';
        $card_object->body[] = $_model->sequode_favorites;
        $card_object->body[] = '<div class="subline kids">Email</div>';
        $card_object->body[] = $_model->email;
        $sequodes_model = SQDE_UserOperations::getSequodesModelOfAllSequodes($_model,'id,name');
        $card_object->body[] = '<div class="subline kids">Sequodes Created : '.count($sequodes_model->all).'</div>';
        $dom_id = SQDE_Component::uniqueHash();
        foreach($sequodes_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button kids" id="'.$dom_id.$i.'">';
            $html[] = ' &#8727; ';
            $html[] = $object->name;
            $html[] = '</div>';
            $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id.$i, SQDE_ComponentJS::ajaxCallObject('cards/sequode/details', array($object->id)));
            $card_object->body[] = (object) array('html' => implode('',$html).'js' => implode('',$js));
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
        }
        return $card_object;
    }
}