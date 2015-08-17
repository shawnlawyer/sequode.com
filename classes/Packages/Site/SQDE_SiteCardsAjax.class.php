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
        $html = $js = array();\
        $i = 100;
        $packages = SQDE_PackagesHandler::models();
        foreach($packages as $package => $model{
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