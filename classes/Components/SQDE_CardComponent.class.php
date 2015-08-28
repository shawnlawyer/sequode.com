<?php
class SQDE_CardComponent {
    public static function packageCollection($package, $headline='', $user_model=null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $context = SQDE_PackagesHandler::model($package)->context;
        $_models = SQDE_UserOperations::getOwnedModels($package, $user_model, 'id,name')->all;
        $html[] = '<div class="automagic-card-menu-item noSelect" id="'.$dom_id.'">'.$headline . count($_models).'</div>';
        $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject('cards/'.$context.'/my', array($object->id)));
        foreach($_models as $i => $object){
            $html[] = '<div class="automagic-card-menu-item noSelect" id="'.$dom_id.$i.'">';
            $html[] = $object->name;
            $html[] = '</div> ';
            $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id.$i, SQDE_ComponentJS::xhrCallObject('cards/'.$context.'/details', array($object->id)));
        }
        return (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
    }
    public static function collection($component){
        if(!(
            isset($component->icon) 
            && isset($component->collection)
            && isset($component->details_route)
            && isset($component->card_route)
        )){
            return (object) array('html' => '', 'js' => '');
        }
        $dom_id = SQDE_Component::uniqueHash('','');
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
        $dom_id = SQDE_Component::uniqueHash('','');
        $html[] = '<span class="automagic-card-next noSelect kids" id="'.$dom_id.'"></span>';
        if(isset($component->model_id) && isset($component->details_route)){
            $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$component->model_id.'\');';
            $js[] = 'if(next_id != \''.$_model->id.'\'){';
            $js[] = 'document.getElementById(\''.$dom_id.'\').innerHTML = registry.node(registry.active_collection, next_id).n + \' &gt;\';';
            $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject($component->details_route, array('next_id')));
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
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        $html[] = '<span class="automagic-card-delete noSelect kids" id="'.$dom_id.'">x</span>';
        $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject($component->route, array($_model->id)));
        return (object) array('html' => implode('',$html),'js' => implode('',$js));
    }
}