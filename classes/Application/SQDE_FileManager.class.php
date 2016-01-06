<?php
/*
 *
 * (c) Shawn T Lawyer <shawnlawyer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class SQDE_FileManager {
    public static function var_export ($variable, $return = false, $delimeter_nl = true ) {
        if ($variable instanceof stdClass) {
            $result = '(object) '.self::var_export(get_object_vars($variable), true, false);
        } else if (is_array($variable)) {
            $array = array ();
            foreach ($variable as $key => $value) {
                $array[] = var_export($key, true).' => '.self::var_export($value, true);
            }
            if($delimeter_nl == true){
            $result = 'array ('.implode(',
        ', $array).')';
            }else{
            $result = 'array ('.implode(', ', $array).')';
            }
        } else {
            $result = var_export($variable, true);
        }
        if (!$return) {
            echo $result;
            return;
        } else {
            return $result;
        }
    }
}