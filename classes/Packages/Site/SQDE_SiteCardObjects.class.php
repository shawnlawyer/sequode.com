<?php
class SQDE_SiteCardObjects {
    public static function sequode(){
        $card_object = (object) null;
        $card_object->head = 'Sequode is Liquid Software';
        $card_object->component_seperator = '';
        $card_object->body = array();
        $card_object->body[] = '<div class="card-subtitle kids">Liquid who?</div>';
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'Sequode is short for Sequencing Sequence-able Code, so basically turning software code into a bunch of numbers, or as I call it, Liquid Software.';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="subline kids">It\'s what you make it.</div>';
        
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'Sequode is visual software programming, in which a user arranges a computer language\'s code elements into computer software, no coding necessary, but totally allowed if you want to turn your own code into Sequodes. Enterprise grade software, all with what feels like a prototype\'s flowchart. And you can create with the touch of a finger, since Sequode is completely touch enabled and mobile ready from day one!';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="subline kids">So easy, even a kid can program!</div>';
        
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'Sequode is so easy to use that a kid with no programming skills, can make working programs. Then learn indepth programming, along the way through a completely visual and friendly enviroment.';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'So watch out, search goggles, face space, tweater and tumblee. Some 10 year old, maybe even your 10 year old, will be able to build all of the next Big Tools in Sequode.';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="subline kids">Better</div>';
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'At public launch Sequode will be free to all school age kids globally, because Sequode is about making the World better.';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="subline kids">Fun</div>';
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'What do you call the automated regression suite for a web based visual programming tool?';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="card-textblock card-text">';
        $card_object->body[] = 'A programmer :)';
        $card_object->body[] = '</div>';
        
        $card_object->body[] = '<div class="subline kids alignCenter">Launch 7.21.2015</div>';
        return $card_object;
    }
    public static function sequodesMenu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $dom_id_base = SQDE_Component::uniqueHash('','');
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/sequode/newSequence'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Search Sequodes',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/sequode/search'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'My Sequodes',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/sequode/my'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Sequode Favorites',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/sequode/favorites'))
        );
        return $card_object;
    }
    public static function authMenu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'settings-icon-background';
        $card_object->menu = (object) null;
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        
        $card_object->menu->items =  array();
        if(
            SQDE_UserAuthority::isAuthenticated()
        ){
            
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Logout',
                'js_action'=> SQDE_ComponentJS::onTapEvents($dom_id, 'window.location.assign(\'/logout\');')
            );
        }else{
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Login',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/auth/login'))
            );
            /*
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Get Started',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/auth/terms'))
            );
            */
        }
        return $card_object;
    }
    public static function usersMenu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'user-icon-background';
        $card_object->menu = (object) null;
        $dom_id_base = SQDE_Component::uniqueHash('','');
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        
        $card_object->menu->items = array();
        if(
            isset(SQDE_AuthenticatedUser::model()->role_id)
            && SQDE_AuthenticatedUser::model()->role_id < 101
        ){
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'User Details',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/user/accountSettings'))
            );
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Search Users',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/users/search'))
            );
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'New User',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/users/newUser'))
            );
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'New Guest',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/users/newGuest'))
            );
        }
        return $card_object;
    }
    
    public static function machinesMenu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $dom_id_base = SQDE_Component::uniqueHash('','');
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        
        $card_object->menu->items = array();
        if(
            isset(SQDE_AuthenticatedUser::model()->role_id)
            && SQDE_AuthenticatedUser::model()->role_id < 101
        ){
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'New Application Machine',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/machine/newMachine'))
            );
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'My Application Machines',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/machine/my'))
            );
            $dom_id = SQDE_Component::uniqueHash('','');
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Search Application Machine',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/machine/search'))
            );
        }
        return $card_object;
    }
    public static function sessionsMenu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'session-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->position_adjuster = 'automagic-card-menu-right-side-adjuster';
        $card_object->menu->items = array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Search Sessions',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/session/search'))
        );
        return $card_object;
    }
}