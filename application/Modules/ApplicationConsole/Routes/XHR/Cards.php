<?php

namespace Application\Modules\ApplicationConsole\Routes\XHR;

use Sequode\View\Module\Card as ModuleCard;

use Sequode\Component\Card\Kit\JS as CardKitJS;
use Sequode\Component\Card\Kit\HTML as CardKitHTML;
use Sequode\Component\DOMElement\Kit\JS as DOMElementKitJS;

use Application\Modules\ApplicationConsole\Module;

use Sequode\Component\Card\Traits\CardsTrait;
use Sequode\Application\Modules\Console\Traits\Routes\XHR\CardsConsoleMenusTrait;


class Cards {

    use CardsTrait, CardsConsoleMenusTrait;

    public static $module = Module::class;
    public static $merge = true;
    public static $routes = [
        'index'
    ];
}