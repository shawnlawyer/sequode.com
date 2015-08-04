<?php
class SQDE_AuthCardsAjax {
    public static $package = 'Auth';
    public static function login($dom_id = 'MagicCardsContainer'){
        if((
        SQDE_UserAuthority::isAuthenticated()
        && !SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        if($dom_id == 'MagicCardsContainer'){
            $html[] = SQDE_Card::divider();
        }
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
    public static function terms($dom_id = 'MagicCardsContainer'){
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        if($dom_id == 'MagicCardsContainer'){
            $html[] = SQDE_Card::divider();
        }
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
}