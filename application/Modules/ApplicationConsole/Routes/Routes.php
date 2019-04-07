<?php

namespace Application\Modules\ApplicationConsole\Routes;

use Application\Modules\ApplicationConsole\Module;

use Sequode\Application\Modules\Console\Traits\Routes\IndexTrait;
use Sequode\Application\Modules\Console\Traits\Routes\CSSTrait;
use Sequode\Application\Modules\Console\Traits\Routes\JavascriptTrait;
use Sequode\Application\Modules\Console\Traits\Routes\VendorJavascriptTrait;
use Sequode\Application\Modules\Console\Traits\Routes\XHRTrait;
use Sequode\Application\Modules\Console\Traits\Routes\CollectionsTrait;

class Routes{

    use IndexTrait,
        CSSTrait,
        JavascriptTrait,
        VendorJavascriptTrait,
        XHRTrait,
        CollectionsTrait;

    const Module = Module::class;

	public static $merge = false;

	public static $routes = [
        'xhr',
		'collections',
		'application.css',
        'application.js',
		'vendor.js',
    ];
    
	public static $routes_to_methods = array(
    
		'xhr' => 'xhr',
		'collections' => 'collections',
		'application.css' => 'css',
		'application.js' => 'js',
		'vendor.js' => 'vendorJS',
	
    );
    
}