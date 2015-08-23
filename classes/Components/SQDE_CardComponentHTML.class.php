<?php
class SQDE_CardComponentHTML {
    public static function modelId(&$model){
        return '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
    }
}