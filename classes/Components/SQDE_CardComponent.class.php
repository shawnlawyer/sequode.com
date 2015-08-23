<?php
class SQDE_CardComponent {
    public static function collection($component){
        $dom_id = SQDE_Component::uniqueHash('','');
        $html = $js = array();
        
        $html[] = '<div  class="fitBlock alignCenter" id="'.$dom_id.'"></div>';
        $js[] = 'var cards = new SQDE_CollectionCards();';
        $js[] = 'cards.container = \''.$dom_id.'\';';
        if(isset($component->icon)){
            $js[] = 'cards.icon = \''.$component->icon.'\';';
        }
        if(isset($component->details_route)){
            $js[] = 'cards.details_route = \''.$component->details_route.'\';';
        }
        if(isset($component->card_route) && isset($component->collection)){
            $js[] = 'cards.collection = \''.$component->collection.'\';';
            $js[] = 'registry.setContext({card:\''.$component->card_route.'\',collection:\''.$component->collection.'\',tearDown:function(){cards = undefined;}});';
            $js[] = 'registry.subscribeToUpdates({type:\'context\', collection:\''.$component->collection.'\', call: cards.run});';
            $js[] = 'registry.fetch({collection:\''.$component->collection.'\'});';
        }
        return (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
    }
    public static function nextInCollection($component){
        
        $html = $js = array();
        $dom_id = SQDE_Component::uniqueHash();
        $html[] = '<span class="automagic-card-next" id="'.$dom_id.'c"></span>';
        if(isset($component->model_id) && isset($component->details_route)){
            $js[] = 'var next_id = registry.nextNode(registry.collection(registry.active_collection), \''.$component->model_id.'\');';
        
            $js[] = 'if(next_id != \''.$_model->id.'\'){';
            $js[] = 'document.getElementById(\''.$dom_id.'c\').innerHTML = \'<span class="noSelect kids" id="'.$dom_id.'">\' + registry.node(registry.active_collection, next_id).n + \' &gt;</span>\';';
            $js[] = SQDE_ComponentJS::onTapEventsXHRCall($dom_id, SQDE_ComponentJS::xhrCallObject($component->details_route, array('next_id')));
            $js[] = '}';
        }
        return (object) array('html' => implode('', $html), 'js' => implode(' ', $js));
    }
}