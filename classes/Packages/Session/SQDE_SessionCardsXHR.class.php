<?php
class SQDE_SessionCardsXHR {
    public static $package = 'Session';
    public static function details($session_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_Session::exists($session_model_id,'id')
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
    
    public static function search($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
}