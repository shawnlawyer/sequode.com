<?php
class SQDE_SiteCardObjects {
    public static function sequode(){
        $_o = (object) null;
        $_o->head = 'Sequode is Liquid Software';
        $_o->component_seperator = '';
        
        $html = $js = array();
        $_o->body = array();
        
        $html[] = '<div class="subline alignCenter"><br><br>A Very Beta Sequode<br><br></div>';
        $html[] = '<div class="card-subtitle ">Liquid who?</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode is short for Sequencing Sequence-able Code, so basically turning software code into a bunch of numbers, or as I call it, Liquid Software.';
        $html[] = '</div>';
        
        $html[] = '<div class="subline ">It\'s what you make it.</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode is visual software programming, in which a user arranges a computer language\'s code elements into computer software, no coding necessary, but totally allowed if you want to turn your own code into Sequodes. Enterprise grade software, all with what feels like a prototype\'s flowchart. And you can create with the touch of a finger, since Sequode is completely touch enabled and mobile ready from day one!';
        $html[] = '</div>';
        
        $html[] = '<div class="subline ">So easy, even a kid can program!</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'Sequode is so easy to use that a kid with no programming skills, can make working programs. Then learn indepth programming, along the way through a completely visual and friendly enviroment.';
        $html[] = '</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'So watch out, search goggles, face space, tweater and tumblee. Some 10 year old, maybe even your 10 year old, will be able to build all of the next Big Tools in Sequode.';
        $html[] = '</div>';
        
        $html[] = '<div class="subline ">Better</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'All current features of Sequode will remain free to all school age kids globally, because Sequode is about making the World better.';
        $html[] = '</div>';
        
        $html[] = '<div class="subline ">Fun</div>';
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'What do you call the automated regression suite for a web based visual programming tool?';
        $html[] = '</div>';
        
        $html[] = '<div class="card-textblock card-text">';
        $html[] = 'A programmer :)';
        $html[] = '</div>';
        
        $_o->body[] = (object) array('html' => implode('',$html));
        return $_o;
    }
}