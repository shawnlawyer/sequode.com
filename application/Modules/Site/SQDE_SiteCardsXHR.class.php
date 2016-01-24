<?php

use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit\JS as CardKitJS;

class SQDE_SiteCardsXHR {
    public static $package = 'Site';
    public static function sequode($dom_id = 'CardsContainer'){
        $js = array();
        $deck = array();
        $deck[] = ModuleCard::render('Site','sequode',true,true,true);
        $js[] = CardKitJS::placeDeck($deck, $dom_id);
        $deck = array();
        $deck[] = ModuleCard::render('Auth','login');
        $deck[] = ModuleCard::render('Register','signup');
        $js[] =CardKitJS::placeDeck($deck, $dom_id, false);
        return implode('',$js);
    }
}