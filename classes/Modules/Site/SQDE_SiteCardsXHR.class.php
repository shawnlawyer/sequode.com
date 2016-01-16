<?php
class SQDE_SiteCardsXHR {
    public static $package = 'Site';
    public static function sequode($dom_id = 'CardsContainer'){
        $js = array();
        $deck = array();
        $deck[] = \Sequode\ModuleCard::render('Site','sequode',true,true,true);
        $js[] = \Sequode\Component\Card\Kit\JS::placeDeck($deck, $dom_id);
        $deck = array();
        $deck[] = \Sequode\ModuleCard::render('Auth','login');
        $deck[] = \Sequode\ModuleCard::render('Register','signup');
        $js[] =\Sequode\Component\Card\Kit\JS::placeDeck($deck, $dom_id, false);
        return implode('',$js);
    }
}