<?php

namespace Application\Modules\AuthConsole;

use Sequode\Application\Modules\Traits\ModuleRoutesTrait;

class Module {

    use ModuleRoutesTrait;

    const Registry_Key = 'Console';

    public static function model(){
        
        $_o = (object)  array (
            'context' => 'console',
            'assets' => (object) array(
                'html' => array(
                    'page' => 'html/page.php'
                ),
                'boot_collections' => array(
                ),
                'css' => array(
                    'css/automagic_cards.css',
                    'css/automagic_content.css',
                    'css/automagic_data.css',
                    'css/automagic_forms.css',
                    'css/automagic_layout.css',
                    'css/btn.css',
                    'css/containers.css',
                    'css/globals.css',
                    'css/icons.css',
                    'css/shortcuts.css',
                    'css/text.css',
                    'css/sequode.css',
                    'css/client.css'
                ),
                'javascript' => array(
                    'assets/js/app.min.js'
                ),
            ),
            'components' => (object) array (
                'cards' => Components\Cards::class
            ),
            'routes' =>  array (
                'http' => Routes\Routes::class
            ),
            'xhr' => (object) array (
                'cards' => Routes\XHR\Cards::class
            )
        );
		
        return $_o;
	}
    
}