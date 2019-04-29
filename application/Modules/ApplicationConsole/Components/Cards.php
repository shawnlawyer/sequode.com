<?php

namespace Application\Modules\ApplicationConsole\Components;

use Sequode\Application\Modules\Traits\Components\CardsCardTrait;
use Sequode\Application\Modules\Traits\Components\CardsMenuCardTrait;
use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit as CardKit;
use Application\Modules\ApplicationConsole\Module;
use Sequode\Application\Modules\Account\Modeler as AccountModeler;

class Cards {

    use CardsCardTrait,
        CardsMenuCardTrait;

    const Module = Module::class;

    const Icon = 'sequode';

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
        
        $_o = static::card();
        $_o->context = (object)[
            'card' => $module::xhrCardRoute(__FUNCTION__)
        ];
        $_o->head = 'Console';
        $_o->body[] = '';
        
        $modules = ModuleRegistry::modules();

        $menu_cards = [];
        $section_cards = [];

        $z=1000;
        foreach($modules as $key => $module){

            if(!empty($module::model()->components->cards)){

                $component_cards = $module::model()->components->cards;

                if(defined($component_cards.'::Tiles') && !empty($component_cards::Tiles)){
                    $view_tools_toggle_button_id = $module::Registry_Key . 'ToolsViewToggleButton';
                    $close_tools_toggle_button_id = $module::Registry_Key . 'ToolsCloseToggleButton';
                    $tools_container_id = $module::Registry_Key . 'ToolsContainer';
                    $menu_cards[] = (object)['html' => '<div class="alignCenter" style="'. /*(($z != 1001) ? 'border-top:#ccc 1px solid;': '') */ ''.'position:relative; width:auto; display:inline; padding:1em 0 0 0; z-index:'.$z.';">', 'js' => ''];
                    $card = $component_cards::card();
                    $card->head = (object) [
                        'html' => '<div class="pointer" style="width:auto;" id="'.$view_tools_toggle_button_id.'">'.$module::Registry_Key .' Tools</div>',
                        //'js' => '$("#'.$view_tools_toggle_button_id.'").on("click touchend", function(){var element = $("#'.$tools_container_id.'"); $(\'.tool-cards-section\').each(function(){if(this.id != "'.$tools_container_id.'"){ $(this).css({ position:\'absolute\', height:0, visibility:\'hidden\', display:\'inline\' });}}); element.css((element.height() == 0) ? { position:\'relative\', height:\'100%\', visibility:\'visible\', display:\'block\' } : { position:\'absolute\', height:0, visibility:\'hidden\', display:\'inline\' });});'
                        'js' => '$("#'.$view_tools_toggle_button_id.'").on("click touchend", function(){var element = $("#'.$tools_container_id.'"); element.css((element.height() == 0) ? { position:\'relative\', height:\'100%\', visibility:\'visible\', display:\'block\' } : { position:\'absolute\', height:0, visibility:\'hidden\', display:\'inline\' });});'
                    ];
                    $menu_cards[] = ModuleCard::render($key, 'menu', [$card]);
                    $menu_cards[] = (object)['html' => '</div> ', 'js' => ''];
                    $z--;
                    $section_cards[] = (object)['html' => '<div id="'.$tools_container_id.'" class=" automagic-card alignLeft tool-cards-section" style="clear:all; visibility:hidden; height:0; position:absolute; top:0; padding:0 0 0 0; z-index:'.($z - 500).';">', 'js' => ''];
                    $section_cards[] = (object)['html' => '<div class="automagic-card-head">', 'js' => ''];
                    $section_cards[] = (object) [
                        'html' => '<div class="pointer" style=" position: relative; top:.25em; float:right; width:1em; height:1em; font-weight: 500; font-size:1.5em;" id="'.$close_tools_toggle_button_id.'">X</div>',
                        'js' => '$("#'.$close_tools_toggle_button_id.'").on("click touchend", function(){var element = $("#'.$tools_container_id.'"); element.css({ position:\'absolute\', height:0, visibility:\'hidden\', display:\'inline\' }); });'
                    ];

                    $card = $component_cards::card();

                    $card->head = (object) [
                        'html' => $module::Registry_Key .' Tools',
                        'js' => ''
                    ];
                    $section_cards[] = ModuleCard::render($key, 'menu', [$card]);
                    $section_cards[] = (object)['html' => '</div>', 'js' => ''];
                    $section_cards[] = (object)['html' => '<div class="automagic-card-body" style="padding: 1em 0 0 0;">', 'js' => ''];





                    foreach($component_cards::Tiles as $card){

                        $section_cards[] = ModuleCard::render($key, $card, [], [ModuleCard::Modifier_Small_Tile]);
                        //$cards[] = (object)['html' => ' ', 'js' => ''];

                    }
                    $section_cards[] = (object)['html' => '</div></div>', 'js' => ''];
                    $z--;
                    
                }
                
            }
            
        }

        $html = $js = [];
        $html[] = '<div class="alignCenter" style="padding:2em 1em;">';
        $html[] = '<div>';
        foreach($menu_cards as $card){
            $html[] = $card->html;
            $js[] = $card->js;

        }
        $html[] = '</div>';

        $html[] = '<div>';
        foreach($section_cards as $card){
            $html[] = $card->html;
            $js[] = $card->js;

        }
        $html[] = '</div>';
        $html[] = '</div>';

        $_o->body[] = (object) ['html' => implode('', $html), 'js' => implode('', $js)];

        return $_o;
    
    }
        
}