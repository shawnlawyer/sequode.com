<?php
class SQDE_AuthCardObjects {
    public static $package = 'Auth';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'settings-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items = self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $items = array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Login',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/auth/login'))
        
        );
        return $items;
    }
   public static function login(){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        $dialog_store = SQDE_Session::get($dialog['session_store_key']);
        $step = $dialog['steps'][$dialog_store->step];
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if($dialog_store->step != 0){
            $_o->menu = (object) null;
            $_o->menu->items = array();
            $dom_id = SQDE_Component::uniqueHash('','');
            $_o->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Start Over',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/auth/login',array(SQDE_Form::jsQuotedValue('{"reset":"1"}'))))
                );
        }
        $_o->head = 'Authentication';
        $_o->body = array('');
        if(isset($step->content)){
            if(isset($step->content->head)){
                $_o->body[] = '<div class="subline">'.$step->content->head.'</div>';
            }
            if(isset($step->content->head)){
                $_o->body[] = $step->content->body;
            }
        }
        if(isset($step->forms)){
            foreach($step->forms as $form){
                $_o->body = array_merge($_o->body, SQDE_Forms::render(self::$package, $form));
            }
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }  
}