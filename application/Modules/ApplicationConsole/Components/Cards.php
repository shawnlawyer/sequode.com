<?php

namespace Application\Modules\ApplicationConsole\Components;

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit as CardKit;
use Sequode\Component\Card\Kit\HTML as CardKitHTML;
use Application\Modules\ApplicationConsole\Module;
use Sequode\Application\Modules\Account\Modeler as AccountModeler;

class Cards {
    
    const Module = Module::class;

    public static function menu(){

        $_o = (object) null;

        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'session-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items =  self::menuItems();

        return $_o;

    }


    public static function menuItems($filters=[]){

        extract((static::Module)::variables());

        $_o = [];

        $_o[$module::xhrCardRoute('index')] = CardKit::onTapEventsXHRCallMenuItem('Console', $module::xhrCardRoute('index'));

        foreach($filters as $filter){

            unset($_o[$filter]);

        }

        return $_o;

    }

    public static function index(){

        extract((static::Module)::variables());

        $user_model = AccountModeler::model();
        
        $_o = (object) null;
        $_o->context = (object)[
            'card' => $module::xhrCardRoute(__FUNCTION__)
        ];
        $_o->size = 'fullscreen';
        $_o->head = 'Console';
        $_o->icon_background = 'sequode-icon-background';
        $_o->body = [''];
        
        $modules = ModuleRegistry::modules();

        $cards = [];

        $z=1000;
        foreach($modules as $key => $module){

            if(!empty($module::model()->components->cards)){

                $class = $module::model()->components->cards;

                if(defined($class.'::Tiles') && !empty($class::Tiles)){
                    $view_tools_toggle_button_id = $module::Registry_Key . 'ToolsViewToggleButton';
                    $tools_container_id = $module::Registry_Key . 'ToolsContainer';

                    $cards[] = (object)['html' => '<div class="alignLeft" style="'.(($z != 1000) ? 'border-top:#ccc 1px solid;': '').'position:relative; padding:0 0 0 0; z-index:'.$z.';">', 'js' => ''];
                    $cards[] = (object)['html' => CardKitHTML::divider(), 'js' => ''];
                    $cards[] = ModuleCard::render($key, 'menu', []);
                    $cards[] = (object)['html' => '<div class="section-title pointer" id="'.$view_tools_toggle_button_id.'">'.$module::Registry_Key .' Tools</div>', 'js' => ''];
                    $cards[] = (object)['html' => '', 'js' => '$("#'.$view_tools_toggle_button_id.'").on("click touchend", function(){var element = $("#'.$tools_container_id.'"); element.css((element.height() == 0) ? { height:\'100%\', visibility:\'visible\' } : { height:0, visibility:\'hidden\' });});'];
                    $cards[] = (object)['html' => '</div> ', 'js' => ''];
                    $z--;
                    $cards[] = (object)['html' => '<div id="'.$tools_container_id.'" class="alignLeft" style="visibility:hidden; height:0; position:relative; padding:0 0 0 0; z-index:'.$z.';">', 'js' => ''];

                    foreach($class::Tiles as $card){

                        $cards[] = ModuleCard::render($key, $card, [], [ModuleCard::Modifier_Small_Tile]);
                        $cards[] = (object)['html' => ' ', 'js' => ''];

                    }
                    $cards[] = (object)['html' => '</div>', 'js' => ''];
                    $z--;
                    
                }
                
            }
            
        }
        
        $html = $js = [];
        $html[] = '<div class="alignCenter" style="padding:1em;">';
        foreach($cards as $card){
            $html[] = $card->html;
            $js[] = $card->js;

        }
        $html[] = '</div>';

        $_o->body[] = (object) ['html' => implode('', $html), 'js' => implode('', $js)];

        return $_o;
    
    }
        
}