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
}