<?php
class SQDE_ConsoleCardObjects {
    public static $package = 'Console';
    public static function index(){
        return self::tiles(SQDE_AuthenticatedUser::model());
    }
    public static function tiles($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->head = 'Sequode Web Services';
        $_o->icon_background = 'sequode-icon-background';
        $_o->body = array();
        $cards = array('mySequodes','myPackages','myTokens');
        $html = $js = array();
        $html[] = SQDE_Card::divider(true);
        $html[] = '<div class="fitBlock alignCenter">';
        foreach($cards as $key => $card){
            if($key != 0){
                $html[] = SQDE_Card::shim();
            }
            $object = SQDE_Cards::render('Console', $card);
            $html[] = $object->html;
            $js[] = $object->js;
        }
        $html[] = '</div>';
        $_o->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        return $_o;
    }
    
    public static function mySequodes($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Sequodes';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        $_o->menu->item[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('New Sequode','operations/token/newSequence');
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Sequode', 'Sequodes Created : ', $user_model);
        return $_o;
    }
    public static function myPackages($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Packages';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        $_o->menu->item[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('New Package','operations/token/newPackage');
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Package', 'Packages Created : ', $user_model);
        return $_o;
    }
    public static function myTokens($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $_o = (object) null;
        $_o->head = 'My Tokens';
        $_o->size = 'xsmall';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items =  array();
        $_o->menu->item[] = SQDE_CardComponent::onTapEventsXHRCallMenuItem('New Token','operations/token/newToken');
        $_o->body = array();
        $_o->body[] = '';
        $_o->body[] = SQDE_CardComponent::collectionTile('Token', 'Tokens Created : ', $user_model);
        return $_o;
    }
}