<?php
class SQDE_SiteCardsXHR {
    public static $package = 'Site';
    public static function sequode($dom_id = 'CardsContainer'){
        $deck = array();
        $deck[] = SQDE_Cards::render('Auth','login');
        $deck[] = SQDE_Cards::render('Register','signup');
        $deck[] = SQDE_Cards::render('Site','sequode');
        return SQDE_ComponentJS::placeDeck($deck, $dom_id);
    }
}