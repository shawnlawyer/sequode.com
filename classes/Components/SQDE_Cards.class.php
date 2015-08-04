<?php
class SQDE_Cards {
	public static function render($package, $card, $parameters = null){
		return SQDE_Card::make(SQDE_Card::fetchObject(SQDE_Packages::model($package)->card_objects, $card, ($parameters == null) ? array() : (!is_array($parameters)) ? array($parameters) : $parameters));
	}
}