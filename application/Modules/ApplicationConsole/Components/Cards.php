<?php

namespace Application\Modules\ApplicationConsole\Components;

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit\HTML as CardKitHTML;

use Application\Modules\ApplicationConsole\Module;
use Sequode\Application\Modules\Account\Modeler as AccountModeler;
class Cards {
    
    const Module = Module::class;

    public static function index(){

        extract((static::Module)::variables());

        $user_model = AccountModeler::model();
        
        $_o = (object) null;
        $_o->context = (object)[
            'card' => $module::xhrCardRoute(__FUNCTION__)
        ];
        $_o->size = 'fullscreen';
        $_o->head = 'Sequode';
        $_o->icon_background = 'sequode-icon-background';
        $_o->body = [];
        
        $modules = ModuleRegistry::modules();
        $cards = [];
        foreach($modules as $registry_key => $module){
            if(!empty($module::model()->components->cards)){
                $class = $module::model()->components->cards;
                if(!empty($class::$tiles) && is_array($class::$tiles)){
                    foreach($class::$tiles as $card){
                        $cards[] = ModuleCard::render($registry_key, $card, [$user_model]);
                    }
                    
                }
                
            }
            
        }
        
        $html = $js = [];
        $html[] = CardKitHTML::divider(true);
        $html[] = '<div class="fitBlock alignCenter">';
        foreach($cards as $key => $card){

            if($key != 0){
                $html[] = CardKitHTML::shim();
            }
            $html[] = $card->html;
            $js[] = $card->js;

        }
        $html[] = '</div>';
        $_o->body[] = (object) ['html' => implode('', $html), 'js' => implode('', $js)];

        return $_o;
    
    }
        
}