<?php
class SQDE_ConsoleCardsXHR {
    public static $package = 'Console';
    public static function index($dom_id = 'CardsContainer'){
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array(SQDE_AuthenticatedUser::model())), $dom_id);
    }
    public static function menus($dom_id = 'MenusContainer'){
        $html = $js = array();
        $packages = Sequode\ModuleRegistry::models();
        $i = count($packages);
        foreach($packages as $package => $model){
            if(isset($model->card_objects)){
                if(in_array('menu',get_class_methods($model->card_objects))){
                    $i--;
					$card = SQDE_Cards::render($package,'menu');
                    $html[] = \Sequode\Component\Card\Kit\HTML::menuCardHidingContainer($card->html,$i);
                    $js[] = $card->js;
				}
            }
        }
        return \Sequode\Component\DOMElement\Kit\JS::addIntoDom($dom_id, implode('',$html), 'replace'). implode(' ',$js);
    }
}