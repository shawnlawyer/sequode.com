<?php
namespace Sequode\Patterns;

class Modeler extends Mason {
	public static function model($replace = false){
        static $store;  
        if(!is_object($store) || ($replace != false && $replace == null)){
            $store = new static::$model;
        }elseif($replace != false){
            $store = $replace;
        }
        return $store;
    }
	public static function exists($value, $by='id'){
        return (static::model(null)->exists($value, $by)) ? true : false ;
    }
}