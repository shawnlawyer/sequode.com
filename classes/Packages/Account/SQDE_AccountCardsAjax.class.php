<?php
class SQDE_AccountCardsAjax {
    public static $package = 'Account';
    public static function details($dom_id = 'MagicCardsContainer'){
        if(!(
            SQDE_UserAuthority::isAuthenticated()
        )){return;}
        $card = SQDE_Cards::render(self::$package,__FUNCTION__,SQDE_AuthenticatedUser::model());
        $html = $js = array();
        if($dom_id == 'MagicCardsContainer'){
            $html[] = SQDE_Card::divider();
        }
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
}