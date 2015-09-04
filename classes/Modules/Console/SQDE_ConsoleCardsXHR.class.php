<?php
class SQDE_ConsoleCardsXHR {
    public static $package = 'Console';
    public static function index($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array(SQDE_AuthenticatedUser::model())), $dom_id);
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
	public static function operations(){
        
        $packages = SQDE_PackagesHandler::models();
        foreach($packages as $package => $model){
            if(isset($model->xhr->operations)){
                echo '<li> /';
                echo $model->context;
                echo '/ </li>';
                $routes = SQDE_Routes::routes($model->xhr->operations);
                foreach($routes as $route){
                    echo '<li>';
                    echo __FUNCTION__ .'/'. $model->context .'/'. $route;
                    echo '</li>';
                }
            }
        }
		exit;
	}
	public static function cards(){
        
        $packages = SQDE_PackagesHandler::models();
        foreach($packages as $package => $model){
            echo '<li> /';
            echo $model->context;
            echo '/ </li>';
            if(isset($model->xhr->cards)){
                $routes = SQDE_Routes::routes($model->xhr->cards);
                foreach($routes as $route){
                    echo '<li>';
                    echo '<a href="/?card='. $model->context .'/'. $route .'">';
                    echo $model->context .'/'. $route;
                    echo '</a>';
                    echo '</li>';
                }
            }
        }
		exit;
	}
}