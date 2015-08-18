<?php
class SQDE_SequodeCardObjects {
    public static $package = 'Sequode';
    public static $modeler = 'SQDE_Sequode';
    
    public static function menu(){
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->position_adjuster =  'automagic-card-menu-right-side-adjuster';
        $card_object->menu->items =  self::menuItems();
        return $card_object;
    }
    public static function menuItems(){
        $items = array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'My Sequodes',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/my'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/newSequence'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Search Sequodes',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/search'))
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Sequode Favorites',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/favorites'))
        );
        return $items;
    }
    public static function modelOperationsMenuItems($filter='', $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        $items = array();
        //details
        if(SQDE_UserAuthority::canView($_model)){
            $dom_id = SQDE_Component::uniqueHash();
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Details',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/details', array($_model->id)))
            );
        }
        //favorites
        if(SQDE_UserAuthority::isInSequodeFavorites($_model)){
            $dom_id = SQDE_Component::uniqueHash();
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Remove From Favorites',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/removeFromSequodeFavorites', array($_model->id)))
            );
        }else{
            $dom_id = SQDE_Component::uniqueHash();
            $items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Add To Favorites',
                'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/addToSequodeFavorites', array($_model->id)))
            );
        }
        if(SQDE_SequodeAuthority::isSequence($_model)){
            
            //Sequence Chart
            if(SQDE_UserAuthority::canEdit($_model)){
                $dom_id = SQDE_Component::uniqueHash();
                $items[] = array(
                    'css_classes'=>'automagic-card-menu-item noSelect',
                    'id'=>$dom_id,
                    'contents'=>'Sequence Chart',
                    'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/chart', array($_model->id)))
                );
            }
            //Empty Sequence
            if(SQDE_UserAuthority::canEdit($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Empty Sequence',
                        'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/emptySequence', array($_model->id)))
                    );
                }
            }
            //Restore To Default
            if(SQDE_UserAuthority::canEdit($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Restore To Default',
                        'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/formatSequence', array($_model->id)))
                    );
                }
            }
            
            //Make Exact Clone 
            if(SQDE_UserAuthority::canCopy($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Clone',
                        'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/cloneSequence', array($_model->id)))
                    );
                }
            }
            //Internal Forms
            if(SQDE_UserAuthority::canEdit($_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Internal Forms',
                        'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/internalForms', array($_model->id)))
                    );
                }
            }
            //Delete
            if(SQDE_UserAuthority::canDelete($_model)){
                if(SQDE_SequodeAuthority::isEmptySequence($_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Delete',
                        'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/deleteSequence', array($_model->id)))
                    );
                }
            }
        }
        
        return $items;
    }
	public static function componentSettings($type, $member, $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->head = 'Component Settings';
        $card_object->icon_type = 'card-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->size = 'medium';
        $dom_id = SQDE_Component::uniqueHash('','');
        $components = SQDE_Forms::render(self::$package,'componentSettings', array($type, $member, $dom_id));
        $card_object->body = array();
        $card_object->body[] = '<div id="' . $dom_id . '">';
        foreach($components as $component){
            $card_object->body[] = $component;
        }
        $card_object->body[] = '</div>';
        return $card_object;
	}
    public static function sequode($dom_id, $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->head = 'Component';
        $components = SQDE_Forms::render(self::$package,'sequode');
        $card_object->body = array();
        foreach($components as $component){
            $card_object->body[] = $component->html;
        }
        return $card_object;
	}   
    public static function details( $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'large';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = self::modelOperationsMenuItems();
        
        $card_object->head = 'Sequode Details';
        $card_object->size = 'large';
        $card_object->body = array('');
        
        $card_object->body[] = (object) array('js' => 'registry.setContext({card:\'cards/sequode/details\',collection:\'sequodes\',node:\''.$_model->id.'\'});');
        $input_object = json_decode($_model->input_object);
        $property_object = json_decode($_model->property_object);
        $output_object = json_decode($_model->output_object);
        $input_object_detail = json_decode($_model->input_object_detail);
        $property_object_detail = json_decode($_model->property_object_detail);
        $output_object_detail = json_decode($_model->output_object_detail);
        $input_form_object = json_decode($_model->input_form_object);
        $property_form_object = json_decode($_model->property_form_object);
        
        $card_object->body[] = '<div class="subline kids">Name</div>';
        $text = $_model->name;
        if(SQDE_UserAuthority::canEdit()){
            $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/name', array($_model->id)), $text, 'settings');
        }else{
            $card_object->body[] = $text;
        }
        
        $card_object->body[] = '<div class="subline kids">Description</div>';
        $text = json_decode($_model->detail)->description;
        $text = (!empty($text)) ? $text : 'Sequode needs description.';
        if(SQDE_UserAuthority::canEdit()){
            $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/description', array($_model->id)), $text, 'settings');
        }else{
            $card_object->body[] = $text;
        }
        if(SQDE_SequodeAuthority::isCode() && $_model->owner_id == 8){
            $dom_id = SQDE_Component::uniqueHash('','');
            $html = $js = array();
            $html = '<div class="subline kids" id="'.$dom_id.'">More info</div>';
            $js = SQDE_ComponentJS::onTapEvents($dom_id, 'var win = window.open(\'http://php.net/'.$_model->name.'\', \'_blank\'); win.focus();');
            $card_object->body[] = (object) array('html' => $html, 'js' => $js);
        }
        if(SQDE_SequodeAuthority::isSequence()){
            $card_object->body[] = '<div class="subline kids">Sequence</div>';
            $sequence = json_decode($_model->sequence);
            $model_object_cache = array();
            if(!SQDE_SequodeAuthority::isEmptySequence($_model)){
                foreach($sequence as $loop_sequence_key => $loop_model_id){
                    if(!array_key_exists($loop_model_id, $model_object_cache)){
                        $model_object_cache[$loop_model_id] = new SQDE_Sequode::$model;
                        $model_object_cache[$loop_model_id]->exists($loop_model_id,'id');
                    }
                    $text = '('.($loop_sequence_key+1).') '.$model_object_cache[$loop_model_id]->name;
                    if(SQDE_UserAuthority::canEdit()){
                        $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('cards/sequode/internalPositionForms', array($_model->id, $loop_sequence_key)), $text, 'settings');
                    }else{
                        $card_object->body[] = $text;
                    }
                }
            }else{
                    $card_object->body[] = 'Sequode is empty.';   
            }
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div class="subline kids">Use Policy</div>';
            $text = (SQDE_SequodeAuthority::isShared()) ? 'Public Use' : 'System Restricted Use';
            $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/sharing', array($_model->id)), $text, 'atom');
        }
        if(SQDE_SequodeAuthority::isCode()){
            $card_object->body[] = '<div class="subline kids">Tenancy Requirement</div>';
            $text = (SQDE_SequodeAuthority::isTenacyDedicated()) ? 'Dedicated Enviroment' : 'Shared Enviroment';
            $card_object->body[] = (SQDE_UserAuthority::isSystemOwner()) ? SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/tenancy', array($_model->id)), $text, 'setting') : $text;
        } 
        if(SQDE_SequodeAuthority::isSequence() && !SQDE_SequodeAuthority::isEmptySequence()){
            $card_object->body[] = '<div class="subline kids">Palette Visibility</div>';
            $text = (SQDE_SequodeAuthority::isPalette()) ? 'Shown in Palettes' : 'Hidden from Palettes';
            $card_object->body[] = (SQDE_UserAuthority::canEdit($_model)) ? SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/updateIsPalette', array($_model->id)), $text, 'settings') : $text;
        } 
        if(SQDE_SequodeAuthority::isSequence() && !SQDE_SequodeAuthority::isEmptySequence()){
            $card_object->body[] = '<div class="subline kids">Package Useability</div>';
            $text = (SQDE_SequodeAuthority::isPackage()) ? 'Useable As Package' : 'Not Used As Package';
            $card_object->body[] = (SQDE_UserAuthority::canEdit($_model)) ? SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/updateIsPackage', array($_model->id)), $text, 'settings') : $text;
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
                $card_object->body[] = '<div class="subline kids">'.$type_title.'</div>';
                foreach($type_object as $member => $value){
                    $card_object->body[] = $member . ' (' . $type_object_detail->$member->type. ') ' . (($type_object_detail->$member->required == true) ? 'required' : 'optional');
                    SQDE_Component::exists($type_form_object->$member->Component,'name');
                    $text = 'Form Component : '. SQDE_Component::model()->printable_name;
                    $card_object->body[] = (SQDE_UserAuthority::canEdit()) ? SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('cards/sequode/componentSettings', array(SQDE_Form::jsQuotedValue($type), SQDE_Form::jsQuotedValue($member), $_model->id)), $text, 'settings') : $text;
                }
            }
        }
        if($output_object != (object) null){
            $card_object->body[] = '<div class="subline kids">Outputs</div>';
            foreach($output_object as $member => $value){
                $card_object->body[] = $member . ' (' . $output_object_detail->$member->type. ')';
            }
            $card_object->body[] = '';
        }
        
        
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
       
        $js = array();
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$_model->id.'\');';
        
        $js[] = 'if(next_id != \''.$_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/sequode/details', array('next_id')));
        $js[] = '}';
        $card_object->body[] = (object) array('html' => implode('',$html), 'js' => implode('',$js));
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
        }
        return $card_object;
    }
    public static function internalForms( $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'large';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = self::modelOperationsMenuItems();
        
        $card_object->head = $_model->name;
        
        $sequence = json_decode($_model->sequence);
        foreach($sequence as $loop_sequence_key => $loop_model_id){
            $card_object->body[] = SQDE_Cards::render(self::$package,'internalPositionForms',array($loop_sequence_key));
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$_model->id.'</div>';
        }
        return $card_object;
    }
    public static function internalPositionForms($position, $_model = null){
        $position = intval($position);
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'medium';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        
        
        $input_object_map = json_decode($_model->input_object_map);
        $default_input_object_map = json_decode($_model->default_input_object_map);
        $property_object_map = json_decode($_model->property_object_map);
        $default_property_object_map = json_decode($_model->default_property_object_map);
        
        $sequence = json_decode($_model->sequence);
        if(!isset($sequence[$position])){ return; }
        $sequence_model_id = $sequence[$position];
        $sequence_model = new SQDE_Sequode::$model;
        $sequence_model->exists($sequence_model_id,'id');
        
        $card_object->head = $sequence_model->name;
        $card_object->menu->items = self::modelOperationsMenuItems('', $sequence_model);
        $card_object->body = array();
        $card_object->body[] = '';
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
                $card_object->body[] = '<div class="subline kids">'.$type_labels[$component->type].'</div>';
                $type_labels[$component->type] = false;
            }
            if(($component->connected == true)){
                $text = $component->member;
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/component', array(SQDE_Form::jsQuotedValue($component->type), $_model->id, $component->map_key)), $text, 'settings');
            }elseif($component->required == false && $component->value_set == false){ 
                $text = $component->member;
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere(SQDE_ComponentJS::xhrCallObject('forms/sequode/component', array(SQDE_Form::jsQuotedValue($component->type), $_model->id, $component->map_key)), $text, 'settings');
            }else{
                $components_array = SQDE_Forms::render(self::$package,'component',array($component->type, $component->map_key, $_model));
                foreach($components_array as $component_object){
                    $card_object->body[] = $component_object;
                }
            }
        }
        return $card_object;
    }
    public static function chart( $_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : forward_static_call_array(array(self::$modeler,'model'), array($_model));
        
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = self::modelOperationsMenuItems();
        
        $card_object->head = 'Sequode Chart &gt; '.$_model->name;
        
        $items = array();
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item-label noSelect',
            'contents'=>'Select Palette'
        );
        $dom_id = SQDE_Component::uniqueHash('','');
        $items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'js_action'=> 'new SQDE_XHRCall({route:\'forms/user/selectPalette\',inputs:['.SQDE_Form::jsQuotedValue($dom_id).']});'                 
        );
        $card_object->menu->items = array_merge($items,$card_object->menu->items);
        
        $card_object->body = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div class="SequencerStageContainer" id="'.$dom_id.'chart"></div>';
        $js[] = 'var sequencer;';
        $js[] = 'sequencer = new SQDE_Sequencer();';
        $js[] = 'sequencer.stage = shapesKit.stage({ container: \''.$dom_id.'chart\', width: $(window).width(), height: $(window).height() });';
        $js[] = 'registry.setContext({card:\'cards/sequode/chart\',collection:\'sequodes\',node:'.$_model->id.',tearDown:function(){ sequencer = undefined; }});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequodes\', key:true, call: sequencer.run});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'palette\', call: sequencer.palette.run});';
        $js[] = 'registry.fetch({collection:\'sequodes\',key:'.$_model->id.'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
    public static function search($_model = null){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = array();
        
        $search_components_array = SQDE_Forms::render(self::$package,'search');
        $card_object->head = $search_components_array[0];
        array_shift($search_components_array);
        
        foreach($search_components_array as $key => $object){
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $card_object->body = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'cards = new SQDE_CollectionCards();';
        $js[] = 'cards.details_route = \'cards/sequode/details\';';
        $js[] = 'cards.icon = \'sequode\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'sequode_search\';';
        $js[] = 'registry.setContext({card:\'cards/sequode/search\',collection:\'sequode_search\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequode_search\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'sequode_search\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
    public static function my(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = array();
        
        $card_object->head = 'My Sequodes';
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/sequode/newSequence'))
        );
        
        $card_object->body = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'var cards = new SQDE_CollectionCards();';
        $js[] = 'cards.details_route = \'cards/sequode/details\';';
        $js[] = 'cards.icon = \'sequode\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'my\';';
        $js[] = 'registry.setContext({card:\'cards/sequode/my\',collection:\'my\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'my\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'my\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
    public static function favorites(){
        $card_object = (object) null;
        $card_object->size = 'fullscreen';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = array();
        
        $card_object->head = 'Sequode Favorites';
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Empty Favorites',
            'js_action'=> SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('operations/user/emptySequodeFavorites',[],'function(){registry.fetch({collection:\'sequode_favorites\'});}'))
        );
        
        $card_object->body = array();
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'var cards = new SQDE_CollectionCards();';
        $js[] = 'cards.details_route = \'cards/sequode/details\';';
        $js[] = 'cards.icon = \'sequode\';';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.collection = \'sequode_favorites\';';
        $js[] = 'registry.setContext({card:\'cards/sequode/favorites\',collection:\'sequode_favorites\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequode_favorites\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\'sequode_favorites\'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
}