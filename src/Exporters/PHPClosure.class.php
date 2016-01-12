<?php
namespace Sequode\Exporters;

class PHPClosure {
    public static function export($variable, $return = false, $delimeter_nl = true ) {
        if ($variable instanceof stdClass) {
            $result = '(object) '.self::__FUNCTION__(get_object_vars($variable), true, false);
        } else if (is_array($variable)) {
            $array = array ();
            foreach ($variable as $key => $value) {
                $array[] = var_export($key, true).' => '.self::__FUNCTION__($value, true);
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