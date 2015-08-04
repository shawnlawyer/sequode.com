<?php
class SQDE_SequodeCardsAjax {
    public static $package = 'Sequode';
    public static function componentSettings($type = false, $member=null, $sequode_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__,array($type, $member));
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
    public static function details($sequode_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canView()
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
    public static function internalForms($sequode_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
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
    public static function internalPositionForms($sequode_model_id=0, $position=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__,array($position));
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
    public static function chart($sequode_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
    public static function search($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
    public static function my($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
    public static function favorites($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
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