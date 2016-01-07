<?php
class SQDE_SiteCardsXHR {
    public static $package = 'Site';
    public static function sequode($dom_id = 'CardsContainer'){
        $js = array();
        $deck = array();
        $deck[] = SQDE_Cards::render('Site','sequode',true,true,true);
        $js[] = SQDE_ComponentJS::placeDeck($deck, $dom_id);
        $deck = array();
        $deck[] = SQDE_Cards::render('Auth','login');
        $deck[] = SQDE_Cards::render('Register','signup');
        $js[] =SQDE_ComponentJS::placeDeck($deck, $dom_id, false);
        return implode('',$js);
    }
}