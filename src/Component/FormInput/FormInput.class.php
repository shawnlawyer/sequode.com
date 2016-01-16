<?php
namespace Sequode\Component\FormInput;
class FormInput {

	public static function uniqueHash($seed='',$prefix='SQDE'){
		$number = explode(" ", microtime());
		return $prefix.sha1(md5((rand(0,$number[0]) + $number[0] + rand(0,$number[1]) + $number[1])).$number[0].$number[1]);
	}
	public static function formatScript($input){
		return str_replace("\r",'\r',str_replace("\n",'\n',str_replace("'","\'",trim($input))));
	}
	public static function formatValue($input){
		return str_replace("\r",'\r',str_replace("\n",'\n',str_replace('"','\"',trim($input))));
	}
    public static function select($component){
        $html = $js = $class = $style = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = (isset($component->Dom_Id)) ? $component->Dom_Id : self::uniqueHash();
        if(!is_array($component->Values) && !is_object($component->Values)){
           $component->Values = json_decode(str_replace('.*-"-*.',"\\'",str_replace("'",'"',str_replace("\\'",'.*-"-*.',$component->Values))));
        }
        if(isset($component->On_Focus)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'focus', $component->On_Focus);
        }
        if(isset($component->On_Blur)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'blur', $component->On_Blur);
        }
        if(isset($component->On_Change)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->On_Change);
        }
        if(isset($component->Value_Changed)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->Value_Changed);
        }
        if(isset($component->CSS_Class)){   
            $class[] = self::formatValue($component->CSS_Class);
        }
        if(isset($component->CSS_Style)){   
            $style[] = self::formatValue($component->CSS_Style);
        }
        if(isset($component->Width)){   
            $style[] = 'width:'.intval($component->Width).'px;';
        }
        $class = implode(' ',$class);
        $style = implode(' ',$style);
        
        if(trim($component->Label) != ''){
            $label_component = (object) null;
            $label_component->Dom_Id = $dom_id.'Label';
            $label_component->For_Dom_Id = $dom_id;
            $label_component->Value = $component->Label;
            $output_component = self::mergeComponents($output_component,self::divLabel($label_component));
        }
        
        $html[] = '<select';
        $html[] = 'class="'.$class.'"';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = 'style="'.$style.'"';
        $html[] = '>';
    
        if(!empty($component->Default_Value)){
			$html[] = '<option';
			$html[] = 'value="'.self::formatValue($component->Default_Value).'"';
			$html[] = '>';
			$html[] = self::formatValue(strip_tags($component->Default_Printable));
			$html[] = '</option>';
		}
        
        foreach($component->Values as $row){
            $value_key = $component->Value_Key;
            $printable_key = $component->Printable_Key;
            $html[] = '<option';
			$html[] = 'value="'.self::formatValue($row->$value_key).'"';
			if(isset($component->Value) && $component->Value == $row->$value_key){
				$html[] = 'selected="selected"';
			}
            $html[] = '>';
			$html[] = self::formatValue(strip_tags($row->$printable_key));
			$html[] = '</option>';
		}
        $html[] = '</select>';
        
        $output_component->html .= implode(' ',$html);
        $output_component->js .= implode(' ',$js);
        return $output_component;
    }
    public static function password($component){
        $html = $js = $class = $style = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = (isset($component->Dom_Id)) ? $component->Dom_Id : self::uniqueHash();
        
        if(isset($component->Value)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::setValueJS($dom_id, $component->Value);
        }
        if(isset($component->On_Focus)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'focus', $component->On_Focus);
        }
        if(isset($component->On_Blur)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'blur', $component->On_Blur);
        }
        if(isset($component->On_Change)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->On_Change);
        }
        if(isset($component->Value_Changed)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->Value_Changed);
        }
        if(isset($component->On_Key_Up)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->On_Key_Up);
        }
        if(isset($component->On_Key_Down)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keydown', $component->On_Key_Down);
        }
        if(isset($component->On_Key_Press)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keypress', $component->On_Key_Press);
        }
        if(isset($component->CSS_Class)){   
            $class[] = self::formatValue($component->CSS_Class);
        }
        if(isset($component->CSS_Style)){   
            $style[] = self::formatValue($component->CSS_Style);
        }
        if(isset($component->Width)){   
            $style[] = 'width:'.intval($component->Width).'px;';
        }
        $class = implode(' ',$class);
        $style = implode(' ',$style);
        
        if(trim($component->Label) != ''){
            $label_component = (object) null;
            $label_component->Dom_Id = $component->Dom_Id.'Label';
            $label_component->For_Dom_Id = $component->Dom_Id;
            $label_component->Value = $component->Label;
            $output_component = self::mergeComponents($output_component,self::divLabel($label_component));
        }
        
        $html[] = '<input';
        $html[] = 'type="password"';
        $html[] = 'class="'.$class.'"';
        $html[] = 'id="'.$component->Dom_Id.'"';
        $html[] = 'value=""';
        $html[] = 'style="'.$style.'"';
        $html[] = '/>';
        
        $output_component->html .= implode(' ',$html);
        $output_component->js .= implode(' ',$js);
        return $output_component;
	}
    public static function input($component){
        $html = $js = $class = $style = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = (isset($component->Dom_Id)) ? $component->Dom_Id : self::uniqueHash();
        
        if(isset($component->Value)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::setValueJS($dom_id, $component->Value);
        }
        if(isset($component->On_Focus)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'focus', $component->On_Focus);
        }
        if(isset($component->On_Blur)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'blur', $component->On_Blur);
        }
        if(isset($component->On_Change)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->On_Change);
        }
        if(isset($component->Value_Changed)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->Value_Changed);
        }
        if(isset($component->On_Key_Up)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->On_Key_Up);
        }
        if(isset($component->On_Key_Down)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keydown', $component->On_Key_Down);
        }
        if(isset($component->On_Key_Press)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keypress', $component->On_Key_Press);
        }
        if(isset($component->CSS_Class)){   
            $class[] = self::formatValue($component->CSS_Class);
        }
        if(isset($component->CSS_Style)){   
            $style[] = self::formatValue($component->CSS_Style);
        }
        if(isset($component->Width)){   
            $style[] = 'width:'.intval($component->Width).'px;';
        }
        $class = implode(' ',$class);
        $style = implode(' ',$style);
        
        if(trim($component->Label) != ''){
            $label_component = (object) null;
            $label_component->Dom_Id = $component->Dom_Id.'Label';
            $label_component->For_Dom_Id = $component->Dom_Id;
            $label_component->Value = $component->Label;
            $output_component = self::mergeComponents($output_component,self::divLabel($label_component));
        }
        
        $html[] = '<input';
        $html[] = 'type="text"';
        $html[] = 'class="'.$class.'"';
        $html[] = 'id="'.$component->Dom_Id.'"';
        $html[] = 'value=""';
        $html[] = 'style="'.$style.'"';
        $html[] = '/>';
        
        $output_component->html .= implode(' ',$html);
        $output_component->js .= implode(' ',$js);
        return $output_component;
	}
    public static function textarea($component){	
        $html = $js = $class = $style = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = '';
		
        if(isset($component->Dom_Id)){   
            $dom_id = $component->Dom_Id;
        }
        if(isset($component->Value)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::setValueJS($dom_id, $component->Value);
        }
        if(isset($component->On_Focus)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'focus', $component->On_Focus);
        }
        if(isset($component->On_Blur)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'blur', $component->On_Blur);
        }
        if(isset($component->On_Change)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->On_Change);
        }
        if(isset($component->Value_Changed)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->Value_Changed);
        }
        if(isset($component->On_Key_Up)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->On_Key_Up);
        }
        if(isset($component->On_Key_Down)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keydown', $component->On_Key_Down);
        }
        if(isset($component->On_Key_Press)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keypress', $component->On_Key_Press);
        }
        if(isset($component->CSS_Class)){   
            $class[] = self::formatValue($component->CSS_Class);
        }
        if(isset($component->CSS_Style)){   
            $style[] = self::formatValue($component->CSS_Style);
        }
        if(isset($component->Width)){   
            $style[] = 'width:'.intval($component->Width).'em;';
        }
        if(isset($component->Height)){   
            $style[] = 'height:'.intval($component->Height).'em;';
        }
        
        $class = implode(' ',$class);
        $style = implode(' ',$style);
        
        if(trim($component->Label) != ''){
            $label_component = (object) null;
            $label_component->Dom_Id = $dom_id.'Label';
            $label_component->For_Dom_Id = $dom_id;
            $label_component->Value = $component->Label;
            $output_component = self::mergeComponents($output_component,self::divLabel($label_component));
        }
        
        $html[] = '<textarea';
        $html[] = 'class="'.$class.'"';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = 'style="'.$style.'"';
        $html[] = '></textarea>';
        
        $output_component->html .= implode(' ',$html);
        $output_component->js .= implode(' ',$js);
        return $output_component;
	}
    public static function dataBoundSelect($component){
		$object = new $component->Class_Name;
		$object->getAll();
        $component->Values = $object->all;
		return self::select($component);
	}
	public static function hiddenInput($component){
        
        $html = array();
        $js = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = (isset($component->Dom_Id)) ? $component->Dom_Id : self::uniqueHash();
        
        if(isset($component->Value)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::setValueJS($dom_id, $component->Value);
        }
        if(isset($component->On_Change)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->On_Change);
        }
        if(isset($component->Value_Changed)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->Value_Changed);
        }
        
        $html[] = '<input';
        $html[] = 'type="hidden"';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = 'value=""';
        $html[] = '>';
        $output_component->html = implode(' ', $html);
        $output_component->js = implode(' ', $js);
        return $output_component;
	}
    public static function label($component){
        $html = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $for_dom_id = $value = '';
		
        $dom_id = (isset($component->Dom_Id)) ? $component->Dom_Id : self::uniqueHash();
        
        if(isset($component->For_Dom_Id)){   
            $for_dom_id = $component->For_Dom_Id;
        }
        if(isset($component->Value)){   
            $value = $component->Value;
        }
        $html[] = '<label';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = 'for="'.$for_dom_id.'"';
        $html[] = '>'.$value.'</label>';
        $output_component->html = implode(' ',$html);
        return $output_component;
    }
    public static function divLabel($component){
        $html = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = $value = '';
		
        if(isset($component->Dom_Id)){   
            $dom_id = $component->Dom_Id;
        }
        if(isset($component->Value)){   
            $value = self::formatValue($component->Value);
        }
		
		$html[] = '<div';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = '>'.$value.'</div>';
        $output_component->html .= implode(' ',$html);
        return $output_component;
    }
    public static function button($component){	
        $html = $js = $class = $style = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = (isset($component->Dom_Id)) ? $component->Dom_Id : self::uniqueHash();
        $value = 'Button';
        if(isset($component->Value)){   
            $value = self::formatValue($component->Value);
        }
        if(isset($component->On_Click)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'click', $component->On_Click);
        }
        if(isset($component->CSS_Class)){   
            $class[] = self::formatValue($component->CSS_Class);
        }
        if(isset($component->CSS_Style)){   
            $style[] = self::formatValue($component->CSS_Style);
        }
		
        $class = implode(' ',$class);
        $style = implode(' ',$style);
        
        $html[] = '<input';
        $html[] = 'type="button"';
        $html[] = 'class="'.$class.'"';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = 'value="'.$value.'"';
        $html[] = 'style="'.$style.'"';
        $html[] = '/>';
        
        $output_component->html .= implode(' ',$html);
        $output_component->js .= implode(' ',$js);
        return $output_component;
	}
    public static function checkbox($component){
        $html = $js = $class = $style = array();
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        $dom_id = $value = '';
		
        if(isset($component->Dom_Id)){   
            $dom_id = $component->Dom_Id;
        }
        if(isset($component->Value)){   
            $value = self::formatValue($component->Value);
        }
        if(isset($component->On_Focus)){   
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'focus', $component->On_Focus);
        }
        if(isset($component->On_Blur)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'blur', $component->On_Blur);
        }
        if(isset($component->On_Change)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->On_Change);
        }
        if(isset($component->On_Key_Up)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keyup', $component->On_Key_Up);
        }
        if(isset($component->On_Key_Down)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keydown', $component->On_Key_Down);
        }
        if(isset($component->On_Key_Press)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'keypress', $component->On_Key_Press);
        }
        if(isset($component->On_Click)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'click', $component->On_Click);
        }
        if(isset($component->Value_Changed)){
            $js[] = \Sequode\Component\DOMElement\Kit\JS::addEventListenerJS($dom_id, 'change', $component->Value_Changed);
        }
        if(isset($component->CSS_Class)){   
            $class[] = self::formatValue($component->CSS_Class);
        }
        if(isset($component->CSS_Style)){   
            $style[] = self::formatValue($component->CSS_Style);
        }
        $class = implode(' ',$class);
        $style = implode(' ',$style);
        
        if(isset($component->Label) && trim($component->Label) != ''){
            $label_component = (object) null;
            $label_component->Dom_Id = $dom_id.'Label';
            $label_component->For_Dom_Id = $dom_id;
            $label_component->Value = $component->Label;
            $output_component = self::mergeComponents($output_component,self::divLabel($label_component));
        }
        
        $html[] = '<input';
        $html[] = 'type="checkbox"';
        $html[] = 'class="'.$class.'"';
        $html[] = 'id="'.$dom_id.'"';
        $html[] = 'value="'.$value.'"';
        $html[] = 'style="'.$style.'"';
        if($component->Value == $component->Checked_Value){ $html[] = 'checked="checked"'; }
        $html[] = '/>';
        
        $label_component = (object) null;
        $label_component->Dom_Id = $dom_id.'LabelText"';
        $label_component->For_Dom_Id = $dom_id;
        $label_component->Value = $component->Display_Value;
        $output_component = self::mergeComponents($output_component,(object) array('html' => implode(' ',$html),'js' => implode(' ',$js)));
        $output_component = self::mergeComponents($output_component,self::label($label_component));
        
        return $output_component;
    }
    public static function checkboxSwitch($component){
        
        $output_component = (object) array('dom_id'=>'','html'=>'','js'=>'');
        
        $checkbox_dom_id = $component->Dom_Id.'CheckBox';
        $checkbox_labeltext_dom_id = $checkbox_dom_id . 'LabelText';
        
        $html = array();
        $html[] = '<span';
        $html[] = 'id="'.$checkbox_labeltext_dom_id.'"';
        $html[] = '>'.(($component->Value == $component->On_Value) ? $component->On_Text : $component->Off_Text).'</span>';
        
        $js = array();
        $js[] = '$(\'#'.$checkbox_labeltext_dom_id.'\').html(($(\'#'.$checkbox_dom_id.'\').is(\':checked\')) ? decodeURIComponent(\''.rawurlencode($component->On_Text).'\') : decodeURIComponent(\''.rawurlencode($component->Off_Text).'\'));';
        $js[] = 'document.getElementById(\''.$component->Dom_Id.'\').value = ($(\'#'.$checkbox_dom_id.'\').is(\':checked\')) ? decodeURIComponent(\''.rawurlencode($component->On_Value).'\') : decodeURIComponent(\''.rawurlencode($component->Off_Value).'\');';
        if(isset($component->Value_Changed)){
            $js[] = $component->Value_Changed;
            unset($component->Value_Changed);
        }
        $checkbox_component = clone($component);
        $checkbox_component->Value_Changed = implode(' ',$js);
        $checkbox_component->Dom_Id = $checkbox_dom_id;
        $checkbox_component->Display_Value =  implode(' ',$html);
        $checkbox_component->Value =  $component->Value;
        $checkbox_component->Checked_Value = $component->On_Value;
        
        $output_component = self::mergeComponents($output_component,self::checkbox($checkbox_component));
        $output_component = self::mergeComponents($output_component,self::hiddenInput($component));
        return $output_component;
    }
	public static function mergeComponents($component_a, $component_b){
        foreach($component_b as $member => $value){
            $component_a->$member = (!isset($component_a->$member)) ? $value : $component_a->$member . $value;
        }
        return $component_a;
    }
	public static function model($replace = false){
        static $model;  
        if(!is_object($model) || ($replace != false && $replace == null)){
            $model = new \Sequode\Component\FormInput\FormInputs;
        }elseif($replace != false){
            $model = $replace;
        }
        return $model;
    }
	public static function exists($value, $by='id'){
        return (self::model(null)->exists($value,$by)) ? true : false ;
    }
	public static function render($component_object, $component_model = null, $sequode_model = null){
        if($component_model != null ){ \Sequode\Component\FormInput\FormInput::model($component_model); }
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        if($component_object->Component == 'checkboxSwitch' && !isset($component_object->On_Value)){
            \Sequode\Component\FormInput\FormInput::exists('checkboxSwitch','name');
            $component_object = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        }elseif((!isset($component_object->Component) || \Sequode\Component\FormInput\FormInput::exists($component_object->Component,'name')) && !isset(\Sequode\Component\FormInput\FormInput::model()->component)){
            \Sequode\Component\FormInput\FormInput::exists('str','name');
            $component_object = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        }
		return forward_static_call_array(array('\Sequode\Component\FormInput\FormInput',\Sequode\Component\FormInput\FormInput::model()->component), array($component_object));
    }
}