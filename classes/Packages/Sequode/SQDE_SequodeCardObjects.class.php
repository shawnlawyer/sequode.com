<?php
class SQDE_SequodeCardObjects {
    public static $package = 'Sequode';
	public static function componentSettings($type, $member, $sequode_model = null){
        $card_object = (object) null;
        $card_object->head = 'Component Settings';
        $card_object->icon_type = 'card-icon';
        $card_object->icon_background = 'atom-icon-background';
        $card_object->size = 'medium';
        $dom_id = SQDE_Component::uniqueHash();
        $components = SQDE_Forms::render('Sequode','componentSettings', array($type, $member, $dom_id));
        $card_object->body = array();
        $card_object->body[] = '<div id="' . $dom_id . '">';
        foreach($components as $component){
            $card_object->body[] = $component;
        }
        $card_object->body[] = '</div>';
        return $card_object;
	}
    public static function sequode($dom_id, $sequode_model = null){
        $card_object = (object) null;
        $card_object->head = 'Component';
        $components = SQDE_Forms::render('Sequode','sequode');
        $card_object->body = array();
        foreach($components as $component){
            $card_object->body[] = $component->html;
        }
        return $card_object;
	}   
    public static function details($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        $card_object = self::operationsCards();
        $card_object->head = 'Sequode Details';
        $card_object->size = 'large';
        $card_object->body = array('');
        
        $component_object = (object) null;
        $component_object->js = 'registry.setContext({card:\'cards/sequode/details\',collection:\'sequodes\',node:\''.$sequode_model->id.'\'});';
        
        $card_object->body[] = $component_object;
        $input_object = json_decode($sequode_model->input_object);
        $property_object = json_decode($sequode_model->property_object);
        $output_object = json_decode($sequode_model->output_object);
        $input_object_detail = json_decode($sequode_model->input_object_detail);
        $property_object_detail = json_decode($sequode_model->property_object_detail);
        $output_object_detail = json_decode($sequode_model->output_object_detail);
        $input_form_object = json_decode($sequode_model->input_form_object);
        $property_form_object = json_decode($sequode_model->property_form_object);
        
        $card_object->body[] = '<div class="subline kids">Name</div>';
        $text = $sequode_model->name;
        if(SQDE_UserAuthority::canEdit()){
            $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/name', array($sequode_model->id));
            $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
        }else{
            $card_object->body[] = $text;
        }
        
        $card_object->body[] = '<div class="subline kids">Description</div>';
        $text = json_decode($sequode_model->detail)->description;
        $text = (!empty($text)) ? $text : 'Sequode needs description.';
        if(SQDE_UserAuthority::canEdit()){
            $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/description', array($sequode_model->id));
            $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
        }else{
            $card_object->body[] = $text;
        }
        if(SQDE_SequodeAuthority::isCode() && $sequode_model->owner_id == 8){
            $component_object = (object) null;
            $dom_id = SQDE_Component::uniqueHash('','');
            $component_object->html = '<div class="subline kids" id="'.$dom_id.'">More info</div>';
            $component_object->js =SQDE_ComponentJS::onTapEvents($dom_id, 'var win = window.open(\'http://php.net/'.$sequode_model->name.'\', \'_blank\'); win.focus();');
            $card_object->body[] = $component_object;
        }
        if(SQDE_SequodeAuthority::isSequence()){
            $card_object->body[] = '<div class="subline kids">Sequence</div>';
            $sequence = json_decode($sequode_model->sequence);
            $model_object_cache = array();
            $html = array();
            $js = array();
            if(!SQDE_SequodeAuthority::isEmptySequence($sequode_model)){
                foreach($sequence as $loop_sequence_key => $loop_model_id){
                    if(!array_key_exists($loop_model_id, $model_object_cache)){
                        $model_object_cache[$loop_model_id] = new SQDE_Sequode::$model;
                        $model_object_cache[$loop_model_id]->exists($loop_model_id,'id');
                    }
                    $text = '('.($loop_sequence_key+1).') '.$model_object_cache[$loop_model_id]->name;
                    if(SQDE_UserAuthority::canEdit()){
                        $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('cards/sequode/internalPositionForms', array($sequode_model->id, $loop_sequence_key));
                        $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
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
            $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/sharing', array($sequode_model->id));
            $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'atom');
    }
        if(SQDE_SequodeAuthority::isCode()){
            $card_object->body[] = '<div class="subline kids">Tenancy Requirement</div>';
            $text = (SQDE_SequodeAuthority::isTenacyDedicated()) ? 'Dedicated Enviroment' : 'Shared Enviroment';
            if(SQDE_UserAuthority::isSystemOwner()){
                $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/tenancy', array($sequode_model->id));
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'setting');
            }else{
                $card_object->body[] = $text;
            }
        } 
        if(SQDE_SequodeAuthority::isSequence() && !SQDE_SequodeAuthority::isEmptySequence()){
            $card_object->body[] = '<div class="subline kids">Palette Visibility</div>';
            $text = (SQDE_SequodeAuthority::isPalette()) ? 'Shown in Palettes' : 'Hidden from Palettes';
            if(SQDE_UserAuthority::canEdit($sequode_model)){
                $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/updateIsPalette', array($sequode_model->id));
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
            }else{
                $card_object->body[] = $text;
            }
        } 
        if(SQDE_SequodeAuthority::isSequence() && !SQDE_SequodeAuthority::isEmptySequence()){
            $card_object->body[] = '<div class="subline kids">Package Useability</div>';
            $text = (SQDE_SequodeAuthority::isPackage()) ? 'Useable As Package' : 'Not Used As Package';
            if(SQDE_UserAuthority::canEdit($sequode_model)){
                $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/updateIsPackage', array($sequode_model->id));
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
            }else{
                $card_object->body[] = $text;
            }
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
                    if(SQDE_UserAuthority::canEdit()){
                        $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('cards/sequode/componentSettings', array(SQDE_Form::jsQuotedValue($type), SQDE_Form::jsQuotedValue($member), $sequode_model->id));
                        $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
                    }else{
                        $card_object->body[] = $text;
                    }
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
        $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$sequode_model->id.'\');';
        
        $js[] = 'if(next_id != \''.$sequode_model->id.'\'){';
        $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
        $js[] = SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, SQDE_ComponentJS::ajaxCallObject('cards/sequode/details', array('next_id')));
        $js[] = '}';
        $card_object->body[] = (object) array('html' => implode('',$html), 'js' => implode('',$js));
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$sequode_model->id.'</div>';
        }
        return $card_object;
    }
    public static function internalForms($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        $card_object = self::operationsCards();
        $card_object->head = $sequode_model->name;
        
        $card_object->size = 'large';
        
        $input_object_map = json_decode($sequode_model->input_object_map);
        $default_input_object_map = json_decode($sequode_model->default_input_object_map);
        $property_object_map = json_decode($sequode_model->property_object_map);
        $default_property_object_map = json_decode($sequode_model->default_property_object_map);
        
        $sequence = json_decode($sequode_model->sequence);
        foreach($sequence as $loop_sequence_key => $loop_model_id){
            $card_object->body[] = SQDE_Cards::render('Sequode','internalPositionForms',array($loop_sequence_key));
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $card_object->body[] = '<div style="position:absolute; bottom:5px; right:5px;" class="subline kids">Id: '.$sequode_model->id.'</div>';
        }
        return $card_object;
    }
    public static function internalPositionForms($position, $sequode_model = null){
        $position = intval($position);
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        
        
        $input_object_map = json_decode($sequode_model->input_object_map);
        $default_input_object_map = json_decode($sequode_model->default_input_object_map);
        $property_object_map = json_decode($sequode_model->property_object_map);
        $default_property_object_map = json_decode($sequode_model->default_property_object_map);
        $sequence = json_decode($sequode_model->sequence);
        if(!isset($sequence[$position])){ return; }
        $sequence_model_id = $sequence[$position];
        $sequence_model = new SQDE_Sequode::$model;
        $sequence_model->exists($sequence_model_id,'id');
        
        $card_object = self::operationsCards('',$sequence_model);
        $card_object->size = 'medium';
        
        $card_object->body = array();
        $card_object->body[] = '';
        $card_object->head = $sequence_model->name;
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
                $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/component', array(SQDE_Form::jsQuotedValue($component->type), $sequode_model->id, $component->map_key));
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
            }elseif($component->required == false && $component->value_set == false){ 
                $text = $component->member;
                $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('forms/sequode/component', array(SQDE_Form::jsQuotedValue($component->type), $sequode_model->id, $component->map_key));
                $card_object->body[] = SQDE_ComponentJS::loadComponentHere($ajax_call_object, $text, 'settings');
            }else{
                $components_array = SQDE_Forms::render('Sequode','component',array($component->type, $component->map_key));
                foreach($components_array as $component_object){
                    $card_object->body[] = $component_object;
                }
            }
        }
        return $card_object;
    }
    public static function operationsCards($filter='', $sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        $card_object = (object) null;
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items = array();
        
        //details
        if(SQDE_UserAuthority::canView($sequode_model)){
            $dom_id = SQDE_Component::uniqueHash();
            $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('cards/sequode/details', array($sequode_model->id));
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Details',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
            );
        }
        //favorites
        if(SQDE_UserAuthority::isInSequodeFavorites($sequode_model)){
            $dom_id = SQDE_Component::uniqueHash();
            $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/user/removeFromSequodeFavorites', array($sequode_model->id));
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Remove From Favorites',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
            );
        }else{
            $dom_id = SQDE_Component::uniqueHash();
            $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/user/addToSequodeFavorites', array($sequode_model->id));
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'id'=>$dom_id,
                'contents'=>'Add To Favorites',
                'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
            );
        }
        if(SQDE_SequodeAuthority::isSequence($sequode_model)){
            
            //Sequence Chart
            if(SQDE_UserAuthority::canEdit($sequode_model)){
                $dom_id = SQDE_Component::uniqueHash();
                $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('cards/sequode/chart', array($sequode_model->id));
                $card_object->menu->items[] = array(
                    'css_classes'=>'automagic-card-menu-item noSelect',
                    'id'=>$dom_id,
                    'contents'=>'Sequence Chart',
                    'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
                );
            }
            //Sequence Chart
            if(SQDE_UserAuthority::canRun($sequode_model)){
                $dom_id = SQDE_Component::uniqueHash();
                $card_object->menu->items[] = array(
                    'css_classes'=>'automagic-card-menu-item noSelect',
                    'id'=>$dom_id,
                    'contents'=>'Run',
                    'js_action'=> SQDE_ComponentJS::onTapEvents($dom_id, 'var win = window.open(\'http://sequo.de/'.$sequode_model->name.'\', \'_blank\'); win.focus();')
                );
            }
            //Empty Sequence
            if(SQDE_UserAuthority::canEdit($sequode_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($sequode_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/sequode/emptySequence', array($sequode_model->id));
                    $card_object->menu->items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Empty Sequence',
                        'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
                    );
                }
            }
            //Restore To Default
            if(SQDE_UserAuthority::canEdit($sequode_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($sequode_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/sequode/formatSequence', array($sequode_model->id));
                    $card_object->menu->items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Restore To Default',
                        'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
                    );
                }
            }
            
            //Make Exact Clone 
            if(SQDE_UserAuthority::canCopy($sequode_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($sequode_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/sequode/cloneSequence', array($sequode_model->id));
                    $card_object->menu->items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Clone',
                        'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
                    );
                }
            }
            //Internal Forms
            if(SQDE_UserAuthority::canEdit($sequode_model)){
                if(!SQDE_SequodeAuthority::isEmptySequence($sequode_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('cards/sequode/internalForms', array($sequode_model->id));
                    $card_object->menu->items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Internal Forms',
                        'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
                    );
                }
            }
            //Delete
            if(SQDE_UserAuthority::canDelete($sequode_model)){
                if(SQDE_SequodeAuthority::isEmptySequence($sequode_model)){
                    $dom_id = SQDE_Component::uniqueHash();
                    $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/sequode/deleteSequence', array($sequode_model->id));
                    $card_object->menu->items[] = array(
                        'css_classes'=>'automagic-card-menu-item noSelect',
                        'id'=>$dom_id,
                        'contents'=>'Delete',
                        'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
                    );
                }
            }
        }
        
        return $card_object;
    }
    public static function chart( $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        
        $card_object = self::operationsCards('',$sequence_model);
        $card_object->size = 'fullscreen';
        $card_object->head = 'Sequode Chart &gt; '.$sequode_model->name;
        $card_object->body = array();
        $component_object->js = 'registry.setContext({card:\'cards/sequode/chart\',collection:\'sequodes\',node:'.$sequode_model->id.',tearDown:function(){ sequencer = undefined; }});';
        $card_object->body[] = $component_object;
        $dom_id = SQDE_Component::uniqueHash();
        $item_head = array(
            'css_classes'=>'automagic-card-menu-item-label noSelect',
            'contents'=>'Select Palette'
        );
        $item = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'js_action'=> 'new SQDE_AjaxCall({route:\'forms/user/selectPalette\',inputs:['.SQDE_Form::jsQuotedValue($dom_id).']});'                 
        );
        $card_object->menu->items = array_merge(array($item_head,$item),$card_object->menu->items);
        
        $html = $js = array();
        $html[] = '<div class="SequencerStageContainer" id="'.$dom_id.'chart"></div>';
        $js[] = 'var sequencer;';
        $js[] = 'sequencer = new SQDE_Sequencer();';
        $js[] = 'sequencer.stage = shapesKit.stage({ container: \''.$dom_id.'chart\', width: $(window).width(), height: $(window).height() });';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequodes\', key:true, call: sequencer.run});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'palette\', call: sequencer.palette.run});';
        $js[] = 'registry.fetch({collection:\'sequodes\',key:'.$sequode_model->id.'});';
        $card_object->body[] = (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
        return $card_object;
    }
    public static function search( $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        
        $card_object = self::operationsCards('',$sequode_model);
        $card_object->size = 'fullscreen';
        $search_components_array = SQDE_Forms::render(self::$package,'search');
        $card_object->head = $search_components_array[0];
        array_shift($search_components_array);
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash();
        
        $card_object->menu->items = array();
        foreach($search_components_array as $key => $object){
            $card_object->menu->items[] = array(
                'css_classes'=>'automagic-card-menu-item noSelect',
                'contents'=>$object->html,
                'js_action'=> $object->js                
            );
        }
        $card_object->body = array();
        $component_object->js = 'registry.setContext({card:\'cards/sequode/search\',collection:\'search_sequodes\',tearDown:function(){collection_cards = null;}});';
        $card_object->body[] = $component_object;
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/sequode/details\';';
        $js[] = 'collection_cards.icon = \'sequode\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'sequode_search\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequode_search\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'sequode_search\'});';
        $component_object = (object) null;
        $component_object->html = implode('', $html);
        $component_object->js = implode(' ', $js);
        $card_object->body[] = $component_object;
        
        return $card_object;
    }
    public static function my($user_model=null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        
        $card_object = self::operationsCards('',$sequode_model);
        $card_object->size = 'fullscreen';
        $card_object->head = 'My Sequodes';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/sequode/newSequence');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'New Sequode',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
        );
        $card_object->body = array();
        $component_object->js = 'registry.setContext({card:\'cards/sequode/my\',collection:\'my\',tearDown:function(){collection_cards = null;}});';
        $card_object->body[] = $component_object;
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/sequode/details\';';
        $js[] = 'collection_cards.icon = \'sequode\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'my\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'my\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'my\'});';
        $component_object = (object) null;
        $component_object->html = implode('', $html);
        $component_object->js = implode(' ', $js);
        $card_object->body[] = $component_object;
        return $card_object;
    }
    public static function favorites(){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $sequode_model = SQDE_Sequode::model($sequode_model);
        
        $card_object = self::operationsCards('',$sequode_model);
        $card_object->size = 'fullscreen';
        $card_object->head = 'Sequode Favorites';
        $card_object->icon_type = 'menu-icon';
        $card_object->icon_background = 'sequode-icon-background';
        $card_object->menu = (object) null;
        $card_object->menu->items =  array();
        
        $dom_id = SQDE_Component::uniqueHash('','');
        $ajax_call_object = SQDE_ComponentJS::ajaxCallObject('operations/user/emptySequodeFavorites',[],'function(){registry.fetch({collection:\'sequode_favorites\'});}');
        $card_object->menu->items[] = array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=>'Clear Favorites',
            'js_action'=> SQDE_ComponentJS::onTapEventsAjaxCall($dom_id, $ajax_call_object)
        );
        $card_object->body = array();
        $component_object->js = 'registry.setContext({card:\'cards/sequode/favorites\',collection:\'sequode_favorites\',tearDown:function(){collection_cards = null;}});';
        $card_object->body[] = $component_object;
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'collection_cards = new SQDE_CollectionCards();';
        $js[] = 'collection_cards.details_route = \'cards/sequode/details\';';
        $js[] = 'collection_cards.icon = \'sequode\';';
        $js[] = 'collection_cards.container = \''.$dom_id.'\';';
        $js[] = 'collection_cards.collection = \'sequode_favorites\';';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\'sequode_favorites\', call: collection_cards.run});';
        $js[] = 'registry.fetch({collection:\'sequode_favorites\'});';
        $component_object = (object) null;
        $component_object->html = implode('', $html);
        $component_object->js = implode(' ', $js);
        $card_object->body[] = $component_object;
        return $card_object;
    }
}