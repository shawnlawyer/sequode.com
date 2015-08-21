<?php
class SQDE_DashboardCardsXHR {
    public static $package = 'Dashboard';
    public static function index($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array(SQDE_AuthenticatedUser::model())), $dom_id);
    }
}