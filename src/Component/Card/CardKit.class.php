<?php
namespace Sequode\Component\Card;
class CardKit {
    public static function collectionTile($package, $headline=''){
        $user_model = \SQDE_AuthenticatedUser::model();
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $context = \Sequode\ModuleRegistry::model($package)->context;
        $_models = \SQDE_AccountOperations::getOwnedModels($package, $user_model, 'id,name')->all;
        $html[] = '<div class="automagic-content-area-xsmall-tile-container">';
        $html[] = '<div class="automagic-card-menu-item noSelect" id="'.$dom_id.'">'.$headline . count($_models).'</div>';
        $js[] = \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject('cards/'.$context.'/my', array($object->id)));
        foreach($_models as $i => $object){
            $html[] = '<div class="automagic-card-menu-item noSelect" id="'.$dom_id.$i.'">';
            $html[] = $object->name;
            $html[] = '</div> ';
            $js[] = \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id.$i, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject('cards/'.$context.'/details', array($object->id)));
        }
        $html[] = '</div>';
        return (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
    }
    public static function collectionCard($component){
        if(!(
            isset($component->icon) 
            && isset($component->collection)
            && isset($component->details_route)
            && isset($component->card_route)
        )){
            return (object) array('html' => '', 'js' => '');
        }
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'var cards = new SQDE_CollectionCards();';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        $js[] = 'cards.icon = \''.$component->icon.'\';';
        $js[] = 'cards.details_route = \''.$component->details_route.'\';';
        $js[] = 'cards.collection = \''.$component->collection.'\';';
        $js[] = 'registry.setContext({card:\''.$component->card_route.'\',collection:\''.$component->collection.'\',tearDown:function(){cards = undefined;}});';
        $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\''.$component->collection.'\', call: cards.run});';
        $js[] = 'registry.fetch({collection:\''.$component->collection.'\'});';
        return (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
    }
    public static function nextInCollection($component){
        if(!(
            isset($component->model_id) 
            && isset($component->details_route)
        )){ 
            return (object) array('html' => '', 'js' => '');
        }
        $html = $js = array();
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html[] = '<span class="automagic-card-next noSelect " id="'.$dom_id.'"></span>';
        if(isset($component->model_id) && isset($component->details_route)){
            $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$component->model_id.'\');';
            $js[] = 'if(next_id != \''.$_model->id.'\'){';
            $js[] = 'document.getElementById(\''.$dom_id.'\').innerHTML = registry.node(registry.active_collection, next_id).n + \' &gt;\';';
            $js[] = \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject($component->details_route, array('next_id')));
            $js[] = '}';
        }
        return (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
    }
    public static function deleteInCollection($component){
        if(!(
            isset($component->model_id)
            && isset($component->route)
            
        )){ 
            return (object) array('html' => '', 'js' => '');
        }
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $html[] = '<span class="automagic-card-delete noSelect " id="'.$dom_id.'">x</span>';
        $js[] = \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject($component->route, array($component->model_id)));
        return (object) array('html' => implode('',$html),'js' => implode('',$js));
    }
    public static function onTapEventsXHRCallMenuItem($contents, $route, $inputs=null, $callback=null){
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        return array(
            'css_classes'=>'automagic-card-menu-item noSelect',
            'id'=>$dom_id,
            'contents'=> $contents,
            'js_action'=> \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject($route,$inputs,$callback))
        );
    }
    public static function resetDialogButton($route){
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $html[] = '<span class="btn" id="'.$dom_id.'">Reset</span>';
        $js[] = \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject($route, array(\Sequode\Component\Form\Form::jsQuotedValue('{"reset":"1"}'))));
        return (object) array('html' => implode('',$html),'js' => implode('',$js));
    }
    public static function onTapEventsXHRCallButton($contents, $route, $inputs=null, $callback=null){
        $dom_id = \Sequode\Component\FormInput\FormInput::uniqueHash('','');
        $html = $js = array();
        $html[] = '<span class="btn" id="'.$dom_id.'">'.$contents.'</span>';
        $js[] = \Sequode\Component\DOMElement\Kit\JS::onTapEventsXHRCall($dom_id, \Sequode\Component\DOMElement\Kit\JS::xhrCallObject($route,$inputs,$callback));
        return (object) array('html' => implode('',$html),'js' => implode('',$js));
    }
}