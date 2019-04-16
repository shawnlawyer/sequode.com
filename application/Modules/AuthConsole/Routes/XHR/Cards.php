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
    
    const Module = Module::class;

    public static function index($dom_id = 'CardsContainer'){

        extract((static::Module)::variables());

        $js = [];

        $deck = [
            ModuleCard::render($module::Registry_Key, __FUNCTION__, [true], [ModuleCard::Modifier_No_Context])
        ];
        $js[] = CardKitJS::placeDeck($deck, $dom_id);

        $deck = [
            ModuleCard::render(AuthModule::Registry_Key, 'login', [], [ModuleCard::Modifier_No_Context]),
            ModuleCard::render(RegisterModule::Registry_Key, 'signup', [], [ModuleCard::Modifier_No_Context])
        ];
        $js[] = CardKitJS::placeDeck($deck, $dom_id, false);
        
        return implode('', $js);
        
    }

}