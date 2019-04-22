<?php

namespace Application\Modules\AuthConsole\Components;

use Application\Modules\AuthConsole\Module;
use Sequode\Application\Modules\Traits\Components\CardsMenuCardTrait;
use Sequode\Component\Card\Kit as CardKit;

class Cards {

    use CardsMenuCardTrait;

    const Module = Module::class;

    public static function card(){

        $_o = (object) null;
        $_o->head = 'Console Tools';
        $_o->icon = 'sequode';
        $_o->menu = (object) null;
        $_o->menu->items = [];
        $_o->menu->position = '';
        $_o->size = 'fullscreen';
        $_o->body = [];

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

        $_o = (object) null;

        $_o->context = (object)[
            'card' => $module::xhrCardRoute(__FUNCTION__)
        ];
        $_o->head = 'Sequencer for PHP';
        $_o->component_seperator = '';
        
        $html = $js = [];
        $_o->body = [];
        $html[] = '<div class="card-textblock card-text"></div>';
        
        $html[] = '<div class="subline">Project Introduction</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequencer is a tool for process creation and management in PHP. In the current state, the tool allows you to arrange PHP SPL code elements into processes without having to write the actual code.';
        $html[] = '</div>';
        
        $html[] = '<div class="card-textblock card-text"></div>';
        
        $html[] = '<div class="subline ">Sequences of Programming Logic</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'The tool is <span class="subline ">not</span> a code replacement tool. The tool abstracts the code elements into simple visual components and allows you to create software visually by arraging the visual elements on a stage or programmatically via a REST API.';
        $html[] = '</div>';
        
        $html[] = '<div class="card-textblock card-text"></div>';
        
        $html[] = '<div class="subline ">Future</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'The end goal of this project is to allow any PHP library to be arranged, not just the SPL.';
        $html[] = '</div>';
        
        $html[] = '<div class="card-textblock card-text"></div>';
        
        $_o->body[] = (object) array('html' => implode('',$html));

        return $_o;

    }

}