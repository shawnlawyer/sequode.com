<?php
/*
 *
 * (c) Shawn T Lawyer <shawnlawyer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
abstract class SQDE_Singleton{
    public static function getInstances($class,$dump=false) {
        static $instances = array();
        if (is_string($class) && $instances[$class] === null) {
            $instances[$class] = new $class;
        }
        return ($dump) ? $instances : ((!is_string($class)) ? null : $instances[$class]);
    }
}