<?php
class SQDE_RegisterCardObjects {
    public static $package = 'Register';
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
            'contents'=>'Signup',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/register/signup'))
        
        );
        return $items;
    }
    public static function signup(){
        $steps = array();
        $steps[] = (object) array(
            'forms'=> array('email'),
            'content'=> (object) array(
                'head' => 'Step ' . (SQDE_Session::get('registration_step') + 1) . '<br><br>Register Email',
                'body' => 'Enter an email address to begin.'
            )
        );
        $steps[] = (object) array(
            'forms'=> array('password'),
            'content'=> (object) array(
                'head' => 'Step ' . (SQDE_Session::get('registration_step') + 1) . '<br><br>Create Password',
                'body' => 'A password must be at least 8 characters long and contain at least 1 capital letter (A), 1 lowercase letter (a), 1 number (1) and one symbol character(!).'
            )
        );
        $steps[] = (object) array(
            'forms'=> array('terms','acceptTerms'),
            'content'=> (object) array(
                'head' => 'Step ' . (SQDE_Session::get('registration_step') + 1) . '<br><br>Accept Terms',
                'body' => 'Enter an email address to begin.'
            )
        );
        $steps[] = (object) array(
            'forms'=> array('verify'),
            'content'=> (object) array(
                'head' => 'Step ' . (SQDE_Session::get('registration_step') + 1) . '<br><br>Verification',
                'body' => 'A verififation token was been emailed to you. <br/><br/>Copy and Paste the code to verify your email address.'
            )
        );
        $steps[] = (object) array(
            'content'=> (object) array(
                'head' => 'Complete!',
                'body' => 'Email address has been verified. You can now login.'
            )
        );
        if(!SQDE_Session::is('registration_step')){
            SQDE_Session::set('registration_step',0);
        }
        $_o = (object) null;
        $_o->icon_background = 'users-icon-background';
        $_o->size = 'small';
        if(intval(SQDE_Session::get('registration_step')) != 0){
            $_o->menu->items = array();
            $dom_id = SQDE_Component::uniqueHash('','');
            $_o->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Start Over',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/register/reset'))
            
            );
        }
        $_o->head = 'Create Account';
        $_o->body = array('');
        if(isset($steps[SQDE_Session::get('registration_step')]->content)){
            if(isset($steps[SQDE_Session::get('registration_step')]->content->head)){
                $_o->body[] = '<div class="subline kids">'.$steps[SQDE_Session::get('registration_step')]->content->head.'</div>';
            }
            if(isset($steps[SQDE_Session::get('registration_step')]->content->head)){
                $_o->body[] = $steps[SQDE_Session::get('registration_step')]->content->body;
            }
        }
        if(isset($steps[SQDE_Session::get('registration_step')]->forms)){
            foreach($steps[SQDE_Session::get('registration_step')]->forms as $form){
                $_o->body = array_merge($_o->body, SQDE_Forms::render(self::$package, $form));
            }
        }
        $_o->body[] = (object) array('js' => '$(\'.focus-input\').focus(); $(\'.focus-input\').select();');
        return $_o;    
    }
}