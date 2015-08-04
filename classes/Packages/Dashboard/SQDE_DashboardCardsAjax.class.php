<?php
class SQDE_DashboardCardsAjax {
    public static $package = 'Dashboard';
    public static function index($user_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && $user_model_id != SQDE_AuthenticatedUser::model()->id
        && SQDE_User::exists($user_model_id,'id')
        ))
        { $user_model = SQDE_User::model($user_model_id,'id'); }
        elseif(!(
        SQDE_UserAuthority::isSystemOwner()
        && $user_model_id != SQDE_AuthenticatedUser::model()->id
        && !SQDE_User::exists($user_model_id,'id')
        ))
        {return;}
        else
        {$user_model = SQDE_AuthenticatedUser::model();}
        
        $card = SQDE_Cards::render(self::$package,__FUNCTION__, array($user_model));
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
}