<?php
class SQDE_ComponentJS {
    public static function googleAnalytics(){
        $js = array();
        $js[] = '(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){';
        $js[] = '(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),';
        $js[] = 'm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)';
        $js[] = '})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');';
        $js[] = 'ga(\'create\', \'UA-55113318-1\', \'auto\');';
        $js[] = 'ga(\'send\', \'pageview\');';
        return implode('',$js);
	}
    public static function forceSSL(){
        $js = array();
        $js[] = 'if(document.location.protocol != "https:"){';
        $js[] = 'document.location = document.URL.replace(/^http:/i, "https:");';
        $js[] = '}';
        return implode('',$js);
	}
    public static function jsQuotedValue($value=''){
        return '\''. $value .'\'';
	}
	public static function documentEventOff($event){
		return '$(document).off(\''.$event.'\');';
	}
    public static function onTapEvents($dom_id,$javascript){
        $js = array();
        $js[] = '$(\'#'.$dom_id.'\').on("click touch", function(){';
        $js[] = $javascript;
        $js[] = '});';
        return implode('',$js);
	}
    public static function onTapEventsAjaxCall($dom_id, $ajax_call_object){
        return self::onTapEvents($dom_id,self::ajaxCall($ajax_call_object));
	}
	public static function ajaxCallObject($route='', $inputs=null, $done_callback=false){
        $object = (object) null;
        $object->route = $route;
        $object->inputs = ($inputs == null) ? array() : $inputs;
        $object->done_callback = $done_callback;
		return $object;
	}
	public static function ajaxCall($call_object){
        $js = array();
        $js[] = 'new SQDE_XHRCall({';
        $js[] = 'route:\''. $call_object->route .'\'';
        if(is_array($call_object->inputs) && count($call_object->inputs) != 0){
            $js[] = ',inputs:['. implode(',',$call_object->inputs) .']';
        }
        if($call_object->done_callback){
            $js[] = ',done_callback:'. $call_object->done_callback;
        }
        $js[] = '});';
        return implode('',$js);
	}
    
    public static function loadComponentHere($ajax_call_object, $contents='', $icon = 'atom'){
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash();
        
        $html[] = '<span id="'.$dom_id.'c">';
        $html[] = '<span class="automagic-card-text-button" id="'.$dom_id.'b">';
        $html[] = $contents;
        if($icon != null){
            $html[] = ' <div class="load-here-icon '.$icon.'-icon-background"></div>'; 
        }
        $html[] = '</span>';
        $html[] = '</span>';
        $ajax_call_object->inputs = array_merge($ajax_call_object->inputs, array(self::jsQuotedValue($dom_id.'c')));
        $js[] = '$(\'#'.$dom_id.'b\').on("click touchend", function(){';
        $js[] = self::ajaxCall($ajax_call_object);
        $js[] = '});';
        
        $components_object = (object) null;
        $components_object->dom_id = $dom_id;
        $components_object->html = implode('',$html);
        $components_object->js = implode('',$js);
        return $components_object;
	}
    /*
	public static function collectValues($form_object, $dom_ids){
        $js = array();
        $js[] = "''";
        if(is_object($form_object)){
            $replacement_object = (object) null;
            $i = 0;
            foreach($form_object as $loop_member => $loop_value){
                $replacement_object->$loop_member = $dom_ids[$i];
                $i++;
            }
            $js = array();
            $js[] = '(function(){';
            $js[] = 'var d = decodeURIComponent(\''.rawurlencode(json_encode($replacement_object)).'\');';
            foreach($dom_ids as $dom_id){
                $js[] =  'd = d.replace(\''.$dom_id.'\', encodeURIComponent(document.getElementById(\''.$dom_id.'\').value));';
            }
            $js[] = 'return d;';
            $js[] = '}())';
        }
        return implode(' ',$js);
	}
	public static function registeyTimeout($variable_name, $javascript, $milliseconds=0){
        $js = array();
        $js[] = 'registry.timeout(\''.$variable_name.'\', function(){';
        $js[] = $javascript;
        $js[] = 'registry.timeouts[\''.$variable_name.'\'] = null; },'.$milliseconds.');';
        return implode(' ',$js);
	}
	public static function enterPressed($javascript){
        $js = array();
        $js[] = 'if (event.keyCode == 13){';
        $js[] = $javascript;
        $js[] = '}';
        return implode(' ',$js);
	}
    
    
    public static function menuItemAjaxAction($dom_id,$route,$inputs=null,$container=null,$active_collection=null){
        $js = array();
        $js[] = '$(\'#'.$dom_id.'\').on("click touch", function(){';
        if($active_collection != null){
            $js[] = 'registry.active_collection = \''.$active_collection.'\';';
        }
        $js[] = 'new SQDE_XHRCall({';
        $js[] = 'route:\''.$route.'\'';
        if($inputs != null){
            $js[] = ',inputs:['.implode(',',$inputs).']';
        }
        $js[] = '});';
        $js[] = '});';
        return implode('',$js);
	}
    public static function menuItemJSAction($dom_id, $js_action ,$container=null, $active_collection=null){
        $js = array();
        $js[] = '$(\'#'.$dom_id.'\').on("click touch", function(){';
        if($active_collection != null){
            $js[] = 'registry.active_collection = \''.$active_collection.'\';';
        }
        $js[] = $js_action;
        $js[] = '});';
        return implode(' ',$js);
	}
    */
}