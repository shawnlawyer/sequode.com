<?php
class SQDE_SiteCardObjects {
    public static function sequode(){
        $_o = (object) null;
        $_o->head = 'Sequode Sequencer for PHP';
        $_o->component_seperator = '';
        
        $html = $js = array();
        $_o->body = array();
        
        $html[] = '<div class="subline ">Introduction</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode Sequencer is a tool for process arrangement in PHP. In the current state, It allows you to arrange PHP SPL code elements into processes without having to write the code. The end goal is allow any PHP library to be arranged, not just the SPL.';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode Sequencer is <b>not</b> a code replacement tool. The sequencer allows you to manage the use and flow of the code in the PHP SPL without having to handle the code.';
        $html[] = '</div>';
        $html[] = '</div>';
        
        $_o->body[] = (object) array('html' => implode('',$html));
        return $_o;
    }
    
    public static function introduction(){
        $_o = (object) null;
        $_o->head = 'Sequode Sequencer for PHP';
        $_o->component_seperator = '';
        
        $html = $js = array();
        $_o->body = array();
        
        $html[] = '<div class="subline ">Introduction</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode Sequencer is a tool for process arrangement in PHP. It allows you to arrange PHP SPL code elements into processes without having to write the code.';
        $html[] = '</div>';
                
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode Sequencer is <b>not</b> a code replacement tool. It works over your code and give the ability to ';
        $html[] = '</div>';
        $_o->body[] = (object) array('html' => implode('',$html));
        return $_o;
    }
}