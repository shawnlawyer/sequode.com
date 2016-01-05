<?php
class SQDE_SiteCardObjects {
    public static function sequode(){
        $_o = (object) null;
        $_o->head = 'Sequode Sequencer for PHP';
        $_o->component_seperator = '';
        
        $html = $js = array();
        $_o->body = array();
        $html[] = '<div class="subline">Introduction</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode Sequencer is a tool for process creation and management in PHP. In the current state, the tool allows you to arrange PHP SPL code elements into processes without having to write the actual code. The end goal is to allow any PHP library to be arranged, not just the SPL.';
        $html[] = '</div>';
        
        $html[] = '<div class="subline ">Sequences of Programming Logic</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'The tool allows you to manage the use and flow of the code in the PHP SPL without having to wirte the code but is <span class="subline ">not</span> a code replacement tool. The tool abstracts the code elements into simple visual components and allows you to create software visually by arraging the visual elements on a stage or programmatically via a REST API.';
        $html[] = '</div>';
        
        $_o->body[] = (object) array('html' => implode('',$html));
        return $_o;
    }
}