<?php
class SQDE_DashboardCardObjects {
    public static $package = 'Dashboard';
    public static function index($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        return self::gettingStarted($user_model);
    }
    public static function collection($collection, $user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        switch($collection){
            case 'my':
            case 'my_sequodes':
                return self::mySequodes($user_model);
            case 'machines':
            case 'my_machines':
                return self::myMachines($user_model);
            case 'packages':
            case 'my_packages':
                return self::myPackages($user_model);
        }
    }
    public static function gettingStarted($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->head = 'Sequode Web Services';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->body = array();
        
        $html = $js = array();
        $html[] = SQDE_Card::divider(true);
        $html[] = SQDE_Card::shim();
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_sequodes', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_packages', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $html[] = SQDE_Card::shim();
        $component_object = SQDE_Cards::render('Dashboard', 'collection', array('my_machines', $user_model));
        $html[] = $component_object->html;
        $js[] = $component_object->js;
        $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        return $card_object;
    }
    
    public static function mySequodes($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $card_object = (object) null;
        $card_object->head = 'My Sequodes';
        $card_object->size = 'small';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/sequode/newSequence'))
        );
        $card_object->body = array();
        $card_object->body[] = '';
        $sequodes_model = SQDE_UserOperations::getSequodesModelOfAllSequodes($user_model,'id,name');
        $card_object->body[] = '<div class="subline kids">Sequodes Created : '.count($sequodes_model->all).'</div>';
        $dom_id = SQDE_Component::uniqueHash();
        foreach($sequodes_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button" id="'.$dom_id.$i.'">';
            $html[] = $object->name;
            $html[] = '</div>';
            $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id.$i, SQDE_ComponentJS::ajaxCallObject('cards/sequode/details', array($object->id)));
            $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        return $card_object;
    }
    public static function myMachines($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $card_object = (object) null;
        $card_object->head = 'My Application Machines';
        $card_object->size = 'small';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Application Machine',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/machine/newMachine'))
        );
        $card_object->body = array();
        $card_object->body[] = '';
        $machines_model = SQDE_UserOperations::getMachinesModelOfAllMachines($user_model,'id,name');
        $card_object->body[] = '<div class="subline kids">Application Machines : '.count($machines_model->all).'</div>';
        $dom_id = SQDE_Component::uniqueHash();
        foreach($machines_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button" id="'.$dom_id.$i.'">';
            $html[] = $object->name;
            $html[] = '</div>';
            $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id.$i, SQDE_ComponentJS::ajaxCallObject('cards/machine/details', array($object->id)));
            $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        return $card_object;
    }
    public static function myPackages($user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $card_object = (object) null;
        $card_object->head = 'My Packages';
        $card_object->size = 'small';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Package',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('operations/package/newPackage'))
        );
        $card_object->body = array();
        $card_object->body[] = '';
        $_model = SQDE_UserOperations::getPackagesModelOfAllPackages($user_model,'id,name');
        $card_object->body[] = '<div class="subline kids">Packages : '.count($_model->all).'</div>';
        $dom_id = SQDE_Component::uniqueHash();
        foreach($_model->all as $i => $object){
            $html = $js = array();
            $html[] = '<div class="automagic-card-text-button" id="'.$dom_id.$i.'">';
            $html[] = $object->name;
            $html[] = '</div>';
            $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id.$i, SQDE_ComponentJS::ajaxCallObject('cards/package/details', array($object->id)));
            $card_object->body[] = (object) array('html' => implode('',$html),'js' => implode('',$js));
        }
        return $card_object;
    }
}