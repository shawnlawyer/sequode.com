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
        $steps = array();
        $steps[] = (object) array(
            'forms'=> array('email'),
            'content'=> (object) array(
                'head' => 'Login',
                'body' => 'Enter your email address / login key'
            )
        );
        $steps[] = (object) array(
            'forms'=> array('password'),
            'content'=> (object) array(
                'head' => 'Login Secret',
                'body' => 'Enter your password / secret key'
            )
        );
        if(!SQDE_Session::is('auth_step')){
            SQDE_Session::set('auth_step',0);
        }
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if(intval(SQDE_Session::get('auth_step')) != 0){
            $_o->menu->items = array();
            $dom_id = SQDE_Component::uniqueHash('','');
            $_o->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Start Over',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/auth/reset'))
            
            );
        }
        $_o->head = 'Login';
        $_o->body = array('');
        if(isset($steps[SQDE_Session::get('auth_step')]->content)){
            if(isset($steps[SQDE_Session::get('auth_step')]->content->head)){
                $_o->body[] = '<div class="subline">'.$steps[SQDE_Session::get('auth_step')]->content->head.'</div>';
            }
            if(isset($steps[SQDE_Session::get('auth_step')]->content->head)){
                $_o->body[] = $steps[SQDE_Session::get('auth_step')]->content->body;
            }
        }
        if(isset($steps[SQDE_Session::get('auth_step')]->forms)){
            foreach($steps[SQDE_Session::get('auth_step')]->forms as $form){
                $_o->body = array_merge($_o->body, SQDE_Forms::render(self::$package, $form));
            }
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;   
    }
}