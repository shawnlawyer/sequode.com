var SQDE_CollectionCards = function(){
	var self = this;
    self.run = function(){
        self.runCollection(self.collection);
    };
    self.runCollection = function(collection_key){
        self.cards = [];
        var collection = registry.collection(collection_key);
        for(var id in collection){
            self.cards.push(self.card(collection[id]));
        }
        self.place();
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
        $('#' + self.container).empty();
        $('#' + self.container).append('<div class="automagic-divider"></div>');
        for(i in self.cards){
            $('#' + self.container).append(self.cards[i]);
            $('#' + self.container).append('<div class="automagic-shim"></div>');
        }
	};
	self.attachCardEvents = function(card,id){
            card.on("click touchend", function(){
                new SQDE_AjaxCall({route:self.details_route, inputs:[id]});
            });
        return card;
	};
}