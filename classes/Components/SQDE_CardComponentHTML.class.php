<?php
class SQDE_CardComponentHTML {
    public static function modelId(&$_model){
        return '<div style="position:absolute; bottom:5px; right:5px;" class="subline ">Id: '.$_model->id.'</div>';
    }
    public static function sublineBlock($content){
        return '<div class="subline ">'.$content.'</div>';
    }
    public static function shim($break_before = false,$break_after = false){
        $html = array();
        if($break_before != false){
            $html[] = '<br />';
        }
        $html[] = '<div class="automagic-shim"></div>';
        if($break_after != false){
            $html[] = '<br />';
        }
        return implode('',$html);
	}
    public static function divider($break_before = false){
        $html = array();
        if($break_before != false){
            $html[] = '<br />';
        }
        $html[] = '<div class="automagic-divider"></div>';
        return implode('',$html);
	}
    public static function contentRowDivider(){
        $html = array();
        if($break_before != false){
            $html[] = '<br />';
        }
        $html[] = '<div class="automagic-content-row-divider"></div>';
        if($break_after != false){
            $html[] = '<br />';
        }
        return implode('',$html);
	}
}