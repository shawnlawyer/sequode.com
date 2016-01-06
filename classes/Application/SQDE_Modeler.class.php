<?php
/*
 *
 * (c) Shawn T Lawyer <shawnlawyer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class SQDE_Modeler extends SQDE_Mason {
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
    public static function getInstance(){
		return SQDE_Singleton::getInstances(get_class());   
    }
}