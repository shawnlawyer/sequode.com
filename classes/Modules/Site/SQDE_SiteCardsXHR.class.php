<?php
class SQDE_SiteCardsXHR {
    public static $package = 'Site';
    public static function sequode($dom_id = 'CardsContainer'){
        $deck = array();
        $deck[] = SQDE_Cards::render('Site','sequode');
        $deck[] = SQDE_Cards::render('Auth','login');
        $deck[] = SQDE_Cards::render('Register','register');
        return SQDE_ComponentJS::placeDeck($deck, $dom_id);
    }
    public static function menus($dom_id = 'MenusContainer'){
        $html = $js = array();
        $packages = SQDE_PackagesHandler::models();
        $i = count($packages);
        foreach($packages as $package => $model){
            if(isset($model->card_objects)){
                if(in_array('menu',get_class_methods($model->card_objects))){
                    $i--;
					$card = SQDE_Cards::render($package,'menu');
                    $html[] = SQDE_Card::menuCardHidingContainer($card->html,$i);
                    $js[] = $card->js;
				}
            }
        }
        return SQDE_BrowserRemote::addIntoDom($dom_id, implode('',$html), 'replace'). implode(' ',$js);
    }
}