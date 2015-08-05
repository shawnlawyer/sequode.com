<?php
class SQDE_SiteCardsAjax {
    public static $package = 'Site';
    public static function sequode($dom_id = 'MagicCardsContainer'){
        
        $card = SQDE_Cards::render(self::$package,__FUNCTION__);
        $html = array();
        $js = array();
        $html[] = SQDE_Card::divider();
        $html[] = $card->html;
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode(' ',$html), 'replace');
        $js[] = $card->js;
        return implode(' ',$js);
    }
    public static function menus($dom_id = 'MenusContainer'){
        $html = $js = array();
        $card = SQDE_Cards::render(self::$package,'authMenu');
        $html[] = SQDE_Card::menuCardHidingContainer($card->html,9);
        $js[] = $card->js;
        if(SQDE_UserAuthority::isAuthenticated()){
            $card = SQDE_Cards::render(self::$package,'sequodesMenu');
            $html[] = SQDE_Card::menuCardHidingContainer($card->html,8);
            $js[] = $card->js;
            if(SQDE_AuthenticatedUser::model()->role_id < 101){
                $card = SQDE_Cards::render(self::$package,'usersMenu');
                $html[] = SQDE_Card::menuCardHidingContainer($card->html,7);
                $js[] = $card->js;
                $card = SQDE_Cards::render(self::$package,'packagesMenu');
                $html[] = SQDE_Card::menuCardHidingContainer($card->html,6);
                $js[] = $card->js;
                $card = SQDE_Cards::render(self::$package,'machinesMenu');
                $html[] = SQDE_Card::menuCardHidingContainer($card->html,5);
                $js[] = $card->js;
            }
        }
        if(SQDE_UserAuthority::isSystemOwner()){ 
            $card = SQDE_Cards::render(self::$package,'sessionsMenu');
            $html[] = SQDE_Card::menuCardHidingContainer($card->html,4);
            $js[] = $card->js;
        }
        return SQDE_BrowserRemote::addIntoDom($dom_id, implode('',$html), 'replace'). implode(' ',$js);
    }
}