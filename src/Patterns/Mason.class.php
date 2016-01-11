<?php

/*
 *
 * (c) Shawn T Lawyer <shawnlawyer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Sequode\Patterns;

class Mason extends Singleton {

    public static function fetchObject($object_class, $object_method, $parameters = null){
        return forward_static_call_array(array($object_class,$object_method),($parameters == null) ? array() : $parameters);
	}
    public static function make(){
        return forward_static_call_array(array(get_called_class(), static::$mason),func_get_args());
	}
    public static function getInstance(){
		return Singleton::getInstances(get_class());   
    }
}