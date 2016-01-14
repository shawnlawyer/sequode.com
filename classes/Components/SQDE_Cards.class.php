<?php
class SQDE_Cards {
	public static function render($package, $card, $parameters = null){
		return \Sequode\View\Card::render(\Sequode\View\Card::fetchObject(\Sequode\ModuleRegistry::model($package)->card_objects, $card, ($parameters == null) ? array() : (!is_array($parameters)) ? array($parameters) : $parameters));
	}
}