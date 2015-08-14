var SQDE_ModelEnds = function(){
	var self = this; 
	self.types = ['head','base'];
	self.type = 'head';
	self.buttons = {'i':[],'p':[],'o':[]};
	self.run = function(){
		self.group = shapesKit.group();
        var height_multiplier = 1;
        var most_buttons = 'p';
        var padding_multiplier = 3.5;
        for(var m in self.buttons){
            if((self.type == 'head' && m == 'o') || (self.type == 'base' && (m == 'i' || m == 'p'))){
                continue;
            }
			if ( height_multiplier < self.node[m].length ){
                most_buttons = m;
				height_multiplier = self.node[m].length;
			}
		}
        if((most_buttons != 'p' && self.node['p'].length != self.node[most_buttons].length) && !(self.node['i'].length == self.node['p'].length && self.node['p'].length == self.node['o'].length)){
            padding_multiplier = 2;
        }
        self.height = ((height_multiplier - 1)*config.model.segment_height)+(config.model.padding_height*padding_multiplier);
		self.buildModel();
	};
	self.buildModel = function(){
        self.makeBody();
        self.makeButtons();
		switch(self.valignment){
			case 'bottom':
				self.group.setY(self.y - self.height);
				break;
			case 'top':
			default:
				self.group.setY(self.y);
		}
		self.group.setX(self.x);
		self.layer.add(self.group);
	};
	self.makeBody = function(){
		var inpObj;
        inpObj = config.get('model_end_'+self.type,'body');
		inpObj.height = self.height;
        self.body = shapesKit.box(inpObj);
        self.group.add(self.body);
	};
	self.makeButtons = function(){
		for(var ipo in self.buttons){
			for (var i=0;i<self.node[ipo].length;i++){
                self.makeButton(ipo,i);
			}
		}
	};
	self.makeButton = function(m,i){
		var o = {};
		o.inpObj = config.model.button;
		o.inpObj.fill = config.model.button_type_colors[m];
		o.inpObj.x =  config.model.button_positions_x[m];
		o.inpObj.y = self.height - ( config.model.padding_height + ( i * config.model.segment_height ) + config.model.button_type_height_adjustment[m] );
		o.shape = shapesKit.circle(o.inpObj);
        if( self.default_events == true ){
            o = self.attachButtonEventMouseOverOut(o, self.node[m][i].n);
        }
		self.buttons[m][i] = o.shape;
		if(self.type == 'head' && m == 'o'){
			return;
		}
		if(self.type == 'base' && (m == 'i' || m == 'p')){
			return;
		}
		self.group.add(self.buttons[m][i]);
	};
	self.attachButtonEventMouseOverOut = function(button, text){
        var tip = {};
		button.shape.on('mouseover', function() {
            document.body.style.cursor = 'pointer';
            if(self.original){
                self.parent.wiring_layer.hide();
            }
			tip.inpObj = config.get('model','tip_label');
			tip.inpObj.x = button.inpObj.x;
			tip.inpObj.y = button.inpObj.y - button.inpObj.radius;
			tip.shape = shapesKit.label(tip.inpObj);
			tip.inpObj = config.get('model','tip_tag');
			tip.shape.add(shapesKit.tag(tip.inpObj));
			tip.inpObj = config.get('model','tip_text');
			tip.inpObj.text = decodeURIComponent(text);
			tip.shape.add(shapesKit.text(tip.inpObj));
			self.group.add(tip.shape);
			self.group.setDraggable(false);
			self.group.moveToTop();
			tip.shape.moveToTop();
			self.layer.batchDraw();
		});
		button.shape.on('mouseout', function(){
            document.body.style.cursor = 'default';
            if(self.original){
                self.parent.wiring_layer.show();
            }
            self.group.setDraggable(false);
			tip.shape.remove();
			tip.shape.destroy();
			self.layer.batchDraw();
		});
		return button;
	};
};