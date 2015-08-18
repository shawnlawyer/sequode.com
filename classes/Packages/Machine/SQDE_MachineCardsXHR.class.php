<?php
class SQDE_MachineCardsXHR {
    public static $package = 'Machine';
    public static function details($machine_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Machine::exists($machine_model_id,'id')
        && (SQDE_UserAuthority::isMachineOwner()
        || SQDE_UserAuthority::isSystemOwner())
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
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
    public static function my($dom_id = 'MagicCardsContainer'){
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
}