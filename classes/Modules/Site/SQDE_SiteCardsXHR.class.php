<?php
class SQDE_SiteCardsXHR {
    public static $package = 'Site';
    public static function sequode($dom_id = 'CardsContainer'){
        $js = array();
        $deck = array();
        $deck[] = SQDE_Cards::render('Site','sequode');
        $js[] = SQDE_ComponentJS::placeDeck($deck, $dom_id);
        $deck = array();
        $deck[] = SQDE_Cards::render('Auth','login');
        $js[] =SQDE_ComponentJS::placeDeck($deck, $dom_id, false, true, false);
        $deck = array();
        $deck[] = SQDE_Cards::render('Register','signup');
        $js[] =SQDE_ComponentJS::placeDeck($deck, $dom_id, false, false, true);
        return implode('',$js);
    }
}