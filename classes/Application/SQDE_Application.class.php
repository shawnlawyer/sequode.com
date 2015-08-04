<?php
class SQDE_Application{
	public static function model($replace = false){
        static $model;
        if(!is_object($model)){
            $model = new SQDE_ApplicationConfiguration;
        }elseif($replace != false){
            $model = $replace;
        }
        return $model;
    }
}