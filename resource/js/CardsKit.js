var CardsKit = function(){
	var self = this;
    
	self.card = function(stdObj){
        var o = {};
        o.card = $('<div>');
        o.element = o.card; 
        if(stdObj.dom_id){
            o.id = stdObj.dom_id;
            o.element.attr('id', stdObj.dom_id);
        }
        if(stdObj.z_index){
            o.z_index = stdObj.z_index;
            o.element.css("z-index", o.z_index);
        }
        if(stdObj.position){
            o.position = stdObj.position;
            o.element.css("position", o.position);
        }
        o.card.addClass('automagic-card');
        if(stdObj.css_class){
            o.card.addClass(stdObj.css_class);
        }
        if(stdObj.css_classes){
            for(var i=0; i < stdObj.css_classes.length; i++  ){
                o.card.addClass(stdObj.css_classes[i]);
            }
        }
        o.head = $('<div>'); 
        o.head.addClass('automagic-card-head');
        if(stdObj.head){
            o.head.append(stdObj.head);
        }
        o.body = $('<div>'); 
        o.body.addClass('automagic-card-body');
        if(stdObj.body){
            o.body.append(stdObj.body);
        }
        o.card.append(o.head);
        o.card.append(o.body);
        return o;
	};
	self.shim = function(){
        var o = {};
        o.shim = $('<div>');
        o.element = o.shim;
        o.shim.addClass('automagic-shim');
        return o;
	};
	self.deck = function(stdObj){
        var o = {};
        o.deck = $('<div>');
        o.element = o.deck;
        if(stdObj.dom_id){
            o.id = stdObj.dom_id;
            o.element.attr('id', stdObj.dom_id);
        }
        o.element.addClass('card-grid');
        if(stdObj.css_class){
            o.element.addClass(stdObj.css_class);
        }
        return o;
	};
    
    self.sleeve = function(stdObj){
        var o = {};
        o.sleeve = $('<div>');
        o.dom_id = stdObj.dom_id + '_CardSleeve';
        o.element = o.sleeve;
        o.sleeve.attr('id',o.dom_id);
        o.sleeve.addClass('automagic-card-sleeve');
        return o;
	};
}