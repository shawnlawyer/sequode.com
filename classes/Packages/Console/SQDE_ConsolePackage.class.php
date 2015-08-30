<?php
class SQDE_ConsolePackage {
    public static $package = 'Console'; 
	public static function model(){
        $model = (object) null;
        $model->context = 'console';
        $model->card_objects = 'SQDE_ConsoleCardObjects';
        $model->xhr = (object) null;
        $model->xhr->cards = 'SQDE_ConsoleCardsXHR';
		$model->routes = array(
			'SQDE_ConsoleRoutes'
		);
		return $model;
	}
}