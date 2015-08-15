var SQDE_SequodeCards = function(){
	var self = this;
    self.initialized = false;
    self.details_route = 'cards/sequode/details';
    self.icon = 'sequode';
    self.cards_dom_container = '';
    self.major_collection = '';
    self.minor_collection = '';
    self.initialize = function(){
        if(self.initialized == true){ return;}
        self.initialized = true;
    }
    self.run = function(){
        self.runCollection(registry.active_collection);
    };
    self.runCollection = function(collection_key){
        self.cards = [];
        var collection = registry.collection(collection_key);
        if(Object.keys(collection).length == 1){
            new SQDE_XHRCall({route:self.details_route, inputs:[collection[Object.keys(collection)[0]].id]});
        }else{
            for(var id in collection){
                self.cards.push(self.card(collection[id]));
            }
            self.place();
        }
    };
    self.card = function(node){
        var card = $('<div>');
        card.addClass('automagic-card');
        card.addClass('pointer');
        var html = 
           [
            '<div class="automagic-card-head">',
            '<div class="card-icon '+ self.icon +'-icon-background"></div>',
            '<div class="card-title kids">'+ node.n +'</div>',
            '</div>',
            '<div class="automagic-card-body"></div>'
           ].join('');
           card.append(html);
        return self.attachCardEvents(card,node.id);
	};
    self.place = function(){
        var card ,i;
        $('#MagicCardsContainer').empty();
        $('#MagicCardsContainer').append('<div class="automagic-divider"></div>');
        for(i in self.cards){
            
            $('#MagicCardsContainer').append(self.cards[i]);
            $('#MagicCardsContainer').append('<div class="automagic-shim"></div>');
        }
	};
	self.attachCardEvents = function(card,id){
            card.on("click touchend", function(){
                new SQDE_XHRCall({route:self.details_route, inputs:[id]});
            });
        return card;
	};
    self.initialize();
}