<?php
class SQDE_SequodeCardObjects {
    public static $package = 'Sequode';
    public static function menu(){
        $_o = (object) null;
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $_o->menu->items =  self::menuItems();
        return $_o;
    }
    public static function menuItems(){
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $_o = array();
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('New Sequode','operations/sequode/newSequence');
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('My Sequodes','cards/sequode/my');
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Search Sequodes','cards/sequode/search');
        $_o[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Favorited Sequodes','cards/sequode/favorites');
        return $_o;
    }
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        $items = array();
        if(SQDE_UserAuthority::canView($_model)){
            $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Details','cards/sequode/details', array($_model->id));
        }
        if(SQDE_UserAuthority::isInSequodeFavorites($_model)){
            $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Remove From Favorited','operations/account/removeFromSequodeFavorites', array($_model->id));
        }else{
            $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Add To Favorited','operations/account/addToSequodeFavorites', array($_model->id));
        }
        if(SQDE_SequodeAuthority::isSequence($_model)){
            
            $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('View Chart','cards/sequode/chart', array($_model->id));
            
            if(SQDE_UserAuthority::canEdit($_model)){
                $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Edit Chart','cards/sequode/sequencer', array($_model->id));
            }
            if(SQDE_UserAuthority::canEdit($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Empty Sequence','operations/sequode/emptySequence', array($_model->id));
                }
            }
            if(SQDE_UserAuthority::canEdit($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Restore To Default','operations/sequode/formatSequence', array($_model->id));
                }
            }
            if(SQDE_UserAuthority::canCopy($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Clone','operations/sequode/cloneSequence', array($_model->id));
                }
            }
            if(SQDE_UserAuthority::canEdit($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Internal Forms','cards/sequode/internalForms', array($_model->id));
                }
            }
            if(SQDE_UserAuthority::canDelete($_model)){
                if(SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $items[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallMenuItem('Delete','operations/sequode/deleteSequence', array($_model->id));
                }
            }
        }
        
        return $items;
    }
	public static function componentSettings($type, $member, $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->head = 'Component Settings';
        $_o->icon_type = 'card-icon';
        $_o->icon_background = 'atom-icon-background';
        $_o->size = 'medium';
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $components = \Sequode\ModuleForm::render(self::$package,'componentSettings', array($type, $member, $dom_id));
        $_o->body = array();
        $_o->body[] = '<div id="' . $dom_id . '">';
        foreach($components as $component){
            $_o->body[] = $component;
        }
        $_o->body[] = '</div>';
        return $_o;
	}
    public static function sequode($dom_id, $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->head = 'Component';
        $components = \Sequode\ModuleForm::render(self::$package,'sequode');
        $_o->body = array();
        foreach($components as $component){
            $_o->body[] = $component->html;
        }
        return $_o;
	}   
    public static function details( $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'Sequode Details';
        $_o->size = 'large';
        $_o->body = array('');
        
        $_o->body[] = (object) array('js' => 'registry.setContext({card:\'cards/sequode/details\',collection:\'sequodes\',node:\''.$_model->id.'\'});');
        $input_object = json_decode($_model->input_object);
        $property_object = json_decode($_model->property_object);
        $output_object = json_decode($_model->output_object);
        $input_object_detail = json_decode($_model->input_object_detail);
        $property_object_detail = json_decode($_model->property_object_detail);
        $output_object_detail = json_decode($_model->output_object_detail);
        $input_form_object = json_decode($_model->input_form_object);
        $property_form_object = json_decode($_model->property_form_object);
        
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Name');
        $text = $_model->name;
        $_o->body[] = (SQDE_UserAuthority::canEdit()) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/name', array($_model->id)), $text, 'settings') : $text;
        
        $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Description');
        $text = json_decode($_model->detail)->description;
        $text = (!empty($text)) ? $text : 'Sequode needs description.';
        $_o->body[] = (SQDE_UserAuthority::canEdit()) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/description', array($_model->id)), $text, 'settings') : $text;
        
        if(SQDE_SequodeAuthority::isCode() && $_model->owner_id == 8){
            $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
            $html = $js = array();
            $html = '<div class="subline" id="'.$dom_id.'">More info</div>';
            $js = \Sequode\Component\DOMElement\Kit\JS::onTapEvents($dom_id, 'var win = window.open(\'http://php.net/'.$_model->name.'\', \'_blank\'); win.focus();');
            $_o->body[] = (object) array('html' => $html, 'js' => $js);
        }
        if(SQDE_SequodeAuthority::isSequence() && !SQDE_SequodeAuthority::isEmptySequence()){
            $_o->body[] = \Sequode\Component\Card\CardKit::onTapEventsXHRCallButton('View Chart','cards/sequode/chart', array($_model->id));
        } 
        if(SQDE_SequodeAuthority::isSequence() && SQDE_UserAuthority::canEdit($_model)){
            $_o->body[] =  \Sequode\Component\Card\CardKit::onTapEventsXHRCallButton('Edit Chart','cards/sequode/sequencer', array($_model->id));
            //$dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
            //$html = $js = array();
           // $html = '<div class="subline" id="'.$dom_id.'">More info</div>';
            //$js = \Sequode\Component\DOMElement\Kit\JS::onTapEvents($dom_id, 'var win = window.open(\'http://php.net/'.$_model->name.'\', \'_blank\'); win.focus();');
           // $_o->body[] = (object) array('html' => $html, 'js' => $js);
        }
        if(SQDE_SequodeAuthority::isSequence()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Sequence');
            $sequence = json_decode($_model->sequence);
            $model_object_cache = array();
            if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                foreach($sequence as $loop_sequence_key => $loop_model_id){
                    if(!array_key_exists($loop_model_id, $model_object_cache)){
                        $model_object_cache[$loop_model_id] = new SQDE_Sequode::$model;
                        $model_object_cache[$loop_model_id]->exists($loop_model_id,'id');
                    }
                    $text = '('.($loop_sequence_key+1).') '.$model_object_cache[$loop_model_id]->name;
                    $_o->body[] = (SQDE_UserAuthority::canEdit()) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('cards/sequode/internalPositionForms', array($_model->id, $loop_sequence_key)), $text, 'settings') : $text;
                }
            }else{
                    $_o->body[] = 'Sequode is empty.';   
            }
            
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Use Policy');
            $text = (SQDE_SequodeAuthority::isShared()) ? 'Public Use' : 'System Restricted Use';
            $_o->body[] = \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/sharing', array($_model->id)), $text, 'atom');
        }
        if(SQDE_SequodeAuthority::isCode()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Tenancy Requirement');
            $text = (SQDE_SequodeAuthority::isTenacyDedicated()) ? 'Dedicated Enviroment' : 'Shared Enviroment';
            $_o->body[] = (SQDE_UserAuthority::isSystemOwner()) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/tenancy', array($_model->id)), $text, 'setting') : $text;
        } 
        if(SQDE_SequodeAuthority::isSequence() && !SQDE_SequodeAuthority::isEmptySequence()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Palettes Menu Visibility');
            $text = (SQDE_SequodeAuthority::isPalette()) ? 'Shown in Palettes Menu' : 'Hidden from Palettes Menu';
            $_o->body[] = (SQDE_UserAuthority::canEdit($_model)) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/updateIsPalette', array($_model->id)), $text, 'settings') : $text;
        } 
        foreach(array('input','property') as $type){
            switch($type){
                case 'input':                            
                    $type_title = 'Inputs';
                    $type_object = $input_object;
                    $type_object_detail = $input_object_detail;
                    $type_form_object = $input_form_object;
                break;
                case 'property':
                    $type_title = 'Properties';
                    $type_object = $property_object;
                    $type_object_detail = $property_object_detail;
                    $type_form_object = $property_form_object;
                break;
            }
        
            if($type_object != (object) null){
                $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock($type_title);
                foreach($type_object as $member => $value){
                    $_o->body[] = $member . ' (' . $type_object_detail->$member->type. ') ' . (($type_object_detail->$member->required == true) ? 'required' : 'optional');
                    \Sequode\Component\FormInput\FormInput::exists($type_form_object->$member->Component,'name');
                    $text = 'Form Component : '. \Sequode\Component\FormInput\FormInput::model()->printable_name;
                    $_o->body[] = (SQDE_UserAuthority::canEdit()) ? \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('cards/sequode/componentSettings', array(Sequode\Component\Form\Form::jsQuotedValue($type), Sequode\Component\Form\Form::jsQuotedValue($member), $_model->id)), $text, 'settings') : $text;
                }
            }
        }
        if($output_object != (object) null){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock('Outputs');
            foreach($output_object as $member => $value){
                $_o->body[] = $member . ' (' . $output_object_detail->$member->type. ')';
            }
            $_o->body[] = '';
        }
        
        $_o->body[] = \Sequode\Component\Card\CardKit::nextInCollection((object) array('model_id'=>$_model->id,'details_route'=>'cards/sequode/details'));
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::modelId($_model);
        }
        return $_o;
    }
    public static function internalForms( $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'large';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = $_model->name;
        
        $sequence = json_decode($_model->sequence);
        foreach($sequence as $loop_sequence_key => $loop_model_id){
            $_o->body[] = \Sequode\ModuleCard::render(self::$package,'internalPositionForms',array($loop_sequence_key));
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $_o->body[] = \Sequode\Component\Card\Kit\HTML::modelId($_model);
        }
        return $_o;
    }
    public static function internalPositionForms($position, $_model = null){
        $position = intval($position);
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'medium';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        
        
        $input_object_map = json_decode($_model->input_object_map);
        $default_input_object_map = json_decode($_model->default_input_object_map);
        $property_object_map = json_decode($_model->property_object_map);
        $default_property_object_map = json_decode($_model->default_property_object_map);
        
        $sequence = json_decode($_model->sequence);
        if(!isset($sequence[$position])){ return; }
        $sequence_model_id = $sequence[$position];
        $sequence_model = new SQDE_Sequode::$model;
        $sequence_model->exists($sequence_model_id,'id');
        
        $_o->head = $sequence_model->name;
        $_o->menu->items = self::modelOperationsMenuItems('', $sequence_model);
        $_o->body = array();
        $_o->body[] = '';
        $sequence_model->input_object_detail = json_decode($sequence_model->input_object_detail);
        $sequence_model->property_object_detail = json_decode($sequence_model->property_object_detail);
        
        $types = array('input', 'property');
        $type_labels = array('input' => 'Inputs', 'property' => 'Properties');
        $detail_objects = array('input' => 'input_object_detail', 'property' => 'property_object_detail');
        $maps = array('input' => $input_object_map, 'property' => $property_object_map);
        $default_maps = array('input' => $default_input_object_map, 'property' => $default_property_object_map);
        
        $possible_components = array();
        
        foreach($types as $type){
            $map = $maps[$type];
            $default_map = $default_maps[$type];
            $detail_object_member = $detail_objects[$type];
            foreach($default_map as $map_key => $location_object){
                if($map_key == 0){ continue; }
                $sequence_key = $location_object->Key - 1;
                if($sequence_key < $position){ continue; }
                if($sequence_key > $position){ break; }
                $member = $location_object->Member;
                $component_object = (object) null;
                $component_object->map_key = $map_key;
                $component_object->type = $type;
                $component_object->sequence_key = $sequence_key;
                $component_object->member = $member;
                $component_object->required = $sequence_model->$detail_object_member->$member->required;
                $component_object->connected = (!(
                    $map[$map_key]->Key == $location_object->Key
                    && $map[$map_key]->Stack == $location_object->Stack
                )) ? true : false;
                $component_object->value_set = (
                    $component_object->connected == false
                    && !empty($map[$map_key]->Value)
                ) ? true : false;
                $possible_components[] = $component_object;
            }
        }
        foreach($possible_components as $component){
            if($type_labels[$component->type] != false){
                $_o->body[] = \Sequode\Component\Card\Kit\HTML::sublineBlock($type_labels[$component->type]);
                $type_labels[$component->type] = false;
            }
            if(($component->connected == true)){
                $text = $component->member;
                $_o->body[] = \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/component', array(Sequode\Component\Form\Form::jsQuotedValue($component->type), $_model->id, $component->map_key)), $text, 'settings');
            }elseif($component->required == false && $component->value_set == false){ 
                $text = $component->member;
                $_o->body[] = \Sequode\Component\DOMElement\Kit\JS::loadComponentHere(\Sequode\Component\DOMElement\Kit\JS::xhrCallObject('forms/sequode/component', array(Sequode\Component\Form\Form::jsQuotedValue($component->type), $_model->id, $component->map_key)), $text, 'settings');
            }else{
                $components_array = \Sequode\ModuleForm::render(self::$package,'component',array($component->type, $component->map_key, $_model));
                foreach($components_array as $component_object){
                    $_o->body[] = $component_object;
                }
            }
        }
        return $_o;
    }
    public static function sequencer( $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'Sequode Chart &gt; Edit &gt; '.$_model->name;
        
        $items = array();
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item-label noSelect',
            'contents'=>'Select Palette'
        );
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'js_action'=> 'new SQDE_XHRCall({route:\'forms/sequode/selectPalette\',inputs:['.Sequode\Component\Form\Form::jsQuotedValue($dom_id).']});'                 
        );
        $_o->menu->items = array_merge($items,$_o->menu->items);
        
        $_o->body = array();
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div class="SequencerStageContainer" id="'.$dom_id.'chart"></div>';
        $js[] = 'var sequencer;';
        $js[] = 'sequencer = new SQDE_Sequencer();';
        $js[] = 'sequencer.stage = shapesKit.stage({ container: \''.$dom_id.'chart\', width: $(window).width(), height: $(window).height() });';
        $js[] = 'registry.setContext({card:\'cards/sequode/chart\',collection:\'sequodes\',node:'.$_model->id.',tearDown:function(){ sequencer = undefined; }});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequodes\', key:true, call: sequencer.run});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'palette\', call: sequencer.palette.run});';
        $js[] = 'registry.fetch({collection:\'sequodes\',key:'.$_model->id.'});';
        $_o->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $_o;
    }
    public static function chart( $_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null ) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'), array($_model));
        
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = self::modelOperationsMenuItems();
        
        $_o->head = 'Sequode Chart &gt; View &gt; '.$_model->name;
        
        $_o->body = array();
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div class="SequencerStageContainer" id="'.$dom_id.'chart"></div>';
        $js[] = 'var sequencer;';
        $js[] = 'sequencer = new SQDE_Sequencer();';
        $js[] = 'sequencer.default_events = false;';
        $js[] = 'sequencer.stage = shapesKit.stage({ container: \''.$dom_id.'chart\', width: $(window).width(), height: $(window).height() });';
        $js[] = 'registry.setContext({card:\'cards/sequode/chart\',collection:\'sequodes\',node:'.$_model->id.',tearDown:function(){ sequencer = undefined; }});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequodes\', key:true, call: sequencer.run});';
        $js[] = 'registry.fetch({collection:\'sequodes\',key:'.$_model->id.'});';
        $_o->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $_o;
    }
    public static function search($_model = null){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = array();
        
        $search_components_array = \Sequode\ModuleForm::render(self::$package,'search');
        $_o->head = $search_components_array[0];
        array_shift($search_components_array);
        
        foreach($search_components_array as $key => $object){
            $_o->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $_o->body = array();
        $_o->body[] = \Sequode\Component\Card\CardKit::collectionCard((object) array('collection'=>'sequode_search','icon'=>'sequode','card_route'=>'cards/sequode/search','details_route'=>'cards/sequode/details'));
        return $_o;
    }
    public static function my(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = array();
        
        $_o->head = 'My Sequodes';
        
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject('operations/sequode/newSequence'))
        );
        
        $_o->body = array();
        $_o->body[] = \Sequode\Component\Card\CardKit::collectionCard((object) array('collection'=>'my_sequodes','icon'=>'sequode','card_route'=>'cards/sequode/my','details_route'=>'cards/sequode/details'));
        return $_o;
    }
    public static function favorites(){
        $_o = (object) null;
        $_o->size = 'fullscreen';
        $_o->icon_type = 'menu-icon';
        $_o->icon_background = 'sequode-icon-background';
        $_o->menu = (object) null;
        $_o->menu->items = array();
        
        $_o->head = 'Sequode Favorites';
        
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $_o->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Empty Favorites',
            'js_action'=> \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject('operations/user/emptySequodeFavorites',[],'function(){registry.fetch({collection:\'sequode_favorites\'});}'))
        );
        
        $_o->body = array();
        $_o->body[] = \Sequode\Component\Card\CardKit::collectionCard((object) array('collection'=>'sequode_favorites','icon'=>'sequode','card_route'=>'cards/sequode/favorites','details_route'=>'cards/sequode/details'));
        return $_o;
    }
}