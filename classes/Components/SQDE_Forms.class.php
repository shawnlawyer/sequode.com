<?php
class SQDE_Forms {
	public static function render($package, $form, $parameters = null){
		return SQDE_Form::render(SQDE_Form::fetchObject(Sequode\ModuleRegistry::model($package)->form_objects, $form, ($parameters == null) ? array() : (!is_array($parameters)) ? array($parameters) : $parameters));
	}
}