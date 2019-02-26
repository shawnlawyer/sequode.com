<?php

namespace Application\Modules\ApplicationConsole\Routes\XHR;

use Sequode\Application\Modules\Traits\Routes\XHR\CardsCardRouteTrait as XHRCardsCardRouteTrait;
use Sequode\Application\Modules\Console\Traits\Routes\XHR\CardsConsoleMenusTrait;

class Cards {

    use XHRCardsCardRouteTrait, CardsConsoleMenusTrait;

    public static $module = Module::class;

    public static $merge = true;

    public static $routes = [
        'index'
    ];
}