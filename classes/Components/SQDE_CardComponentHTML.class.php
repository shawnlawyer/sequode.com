<?php
class SQDE_CardComponentHTML {
    public static function modelId(&$_model){
        return '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
    }
    public static function sublineBlock($content){
        return '<div class="subline kids">'.$content.'</div>';
    }
}