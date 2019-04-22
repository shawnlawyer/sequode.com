var CollectionCards = function(){
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
            '<div class="automagic-card-head" style="overflow:hidden;">',
            '<div class="card-icon '+ self.icon +'-icon-background"></div>',
            '<div class="card-title ">'+ node.n +'</div>',
            '</div>',
            '<div class="automagic-card-body"></div>'
           ].join('');
           card.append(html);
        return self.attachCardEvents(card, node.id);
	};
    self.place = function(){
        $('#' + self.container).empty();
        /*$('#' + self.container).append('<div class="automagic-divider"></div>');*/
        for(var i in self.cards) {
            /*
            if(i > 0){
                $('#' + self.container).append(' ');
            }*/

            $('#' + self.container).append(self.cards[i]);
        }
	};
	self.attachCardEvents = function(card,id){
            card.on("click touchend", function(){
                new XHRCall({route:self.details_route, inputs:[id]});
            });
        return card;
	};
}