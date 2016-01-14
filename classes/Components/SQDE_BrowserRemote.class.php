<?php
class SQDE_BrowserRemote {

	public static function uniqueID($seed='',$prefix='SQDE'){
		$time = explode(' ', microtime());
        $time = $time[0] + $time[1];
		return $prefix.md5($time.$seed);
	}
	public static function formatForJS($input){
		return str_replace("\r",'\r',str_replace("\n",'\n',addslashes($input)));
	}
	public static function addIntoDom($element,$code,$mode='replace',$depth=0){
		$stream = ' ';
		switch($mode){
			case 'append':
				$stream .= 'document.getElementById(\''.$element.'\').innerHTML = document.getElementById(\''.$element.'\').innerHTML + \''.self::formatForJS($code).'\';';
			break;
			case 'prepend':
				$stream .= 'document.getElementById(\''.$element.'\').innerHTML = \''.self::formatForJS($code).'\' + document.getElementById(\''.$element.'\').innerHTML;';
			break;
			case 'replace':
			default:
				$stream .= 'document.getElementById(\''.$element.'\').innerHTML = \''.self::formatForJS($code).'\';';
			break;
		}
		return self::depth($stream,$depth);
	}
	public static function removeInDom($element,$depth=0){
		$stream .= " ";
		$stream .= ' $(\''.$element.'\').parentNode.removeChild(document.getElementById(\''.$element.'\'));';
		return self::depth($stream,$depth);
	}
}