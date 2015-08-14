var SQDE_ModelEnds = function(){
	var self = this; 
	self.group = false;
	self.types = ['head','base'];
	self.type = 'head';
	
	self.buttons = {'i':[],'p':[],'o':[]};
	self.run = function(){
		if(self.group == false){
			self.group = shapesKit.group();
		}
		self.initialize();
		self.buildModel();
	};
	self.initialize = function(){
        var height_multiplier = 1;
        var most_buttons = 'p';
        var padding_multiplier = 3.5;
            for(var m in self.buttons){
            if(self.type == 'head' && m == 'o'){
                continue;
            }
            if(self.type == 'base' && (m == 'i' || m == 'p')){
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
	};
	self.buildModel = function(){
        setTimeout(self.makeBody,0);
        setTimeout(self.makeButtons,0);
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
        self.group.add(self.body);
        self.body = shapesKit.box(inpObj);
	};
	self.makeButtons = function(){
        self.buttons = {'i':[],'p':[],'o':[]};
		var m;
		for(var i=0;i<config.model.button_types.length;i++){
			m = config.model.button_types[i];
			for (var j=0;j<self.node[m].length;j++){
                setTimeout(self.makeButton,0,i,j);
			}
		}
	};
	self.makeButton = function(i,j){
		var button = {};
		var tip = {};
		var type = config.model.button_types[i];
		button.inpObj = config.model.button;
		button.inpObj.fill = config.model.button_type_colors[i];
		button.inpObj.x =  config.model.button_positions_x[i];
		button.inpObj.y = self.height - ( config.model.padding_height + (j*config.model.segment_height) + config.model.button_type_height_adjustment[type]);
		button.shape = shapesKit.circle(button.inpObj);
		button = self.attachButtonEventMouseOverOut(button, tip, button.inpObj.x, button.inpObj.y - button.inpObj.radius, self.node[type][j].n);
		self.buttons[type][j] = button.shape;
		if(self.type == 'head' && config.model.button_types[i] == 'o'){
			return;
		}
		if(self.type == 'base' && (config.model.button_types[i] == 'i' || config.model.button_types[i] == 'p')){
			return;
		}
		self.group.add(self.buttons[type][j]);
	};
	self.attachButtonEventMouseOverOut = function(button, tip, x, y, text){
		button.shape.on('mouseover', function() {
			tip.inpObj = config.model.button_tip_label;
			tip.inpObj.x = x;
			tip.inpObj.y = y;
			tip.shape = shapesKit.label(tip.inpObj);
			tip.inpObj = config.model.button_tip_tag;
			tip.shape.add(shapesKit.tag(tip.inpObj));
			tip.inpObj = config.model.button_tip_text;
			tip.inpObj.text = text;
			tip.shape.add(shapesKit.text(tip.inpObj));
			self.group.add(tip.shape);
			self.group.moveToTop();
			tip.shape.moveToTop();
			self.parent.wiring_layer.hide();
			self.layer.draw();
		});
		button.shape.on('mouseout', function(){
			tip.shape.remove();
			tip.shape.destroy();
			self.parent.wiring_layer.show();
			self.layer.draw();
		});
		return button;
	};
};