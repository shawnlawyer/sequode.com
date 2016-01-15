<?php

class SQDE_Cards {
	public static function render($package, $card, $parameters = null){
		return \Sequode\Component\Card\Card::render(\Sequode\Component\Card::fetchObject(\Sequode\ModuleRegistry::model($package)->card_objects, $card, ($parameters == null) ? array() : (!is_array($parameters)) ? array($parameters) : $parameters));
	}
}