<?php

namespace Application\Modules\AuthConsole\Routes\XHR;

use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit\JS as CardKitJS;
use Application\Modules\AuthConsole\Module;
use Sequode\Application\Modules\Auth\Module as AuthModule;
use Sequode\Application\Modules\Register\Module as RegisterModule;
use Sequode\Application\Modules\Traits\Routes\XHR\CardsCardRouteTrait as XHRCardsCardRouteTrait;
use Sequode\Application\Modules\Console\Traits\Routes\XHR\CardsConsoleMenusTrait;

class Cards {

    use XHRCardsCardRouteTrait, CardsConsoleMenusTrait;
    
    public static $module = Module::class;
    
    public static function index($dom_id = 'CardsContainer'){

        $module = static::$module;

        $js = [];

        $deck = [
            ModuleCard::render($module::$registry_key, __FUNCTION__, [true])
        ];
        $js[] = CardKitJS::placeDeck($deck, $dom_id);

        $deck = [
            ModuleCard::render(AuthModule::$registry_key, 'login'),
            ModuleCard::render(RegisterModule::$registry_key, 'signup')
        ];
        $js[] = CardKitJS::placeDeck($deck, $dom_id, false);
        
        return implode('', $js);
        
    }
}