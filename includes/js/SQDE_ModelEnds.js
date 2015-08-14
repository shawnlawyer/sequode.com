var SQDE_ModelEnds = function(){
	var self = this; 
	self.group = false;
	self.types = ['head','base'];
	self.type = 'head';
	
	self.button_shapes = {'i':[],'p':[],'o':[]};
	self.height_multiplier = 1;
	self.most_buttons = false;
	self.iop_buttons = [];
	self.run = function(){
		self.iop_button_coords_x = [0,(config.model.width/2),config.model.width];
		if(self.group == false){
			self.group = shapesKit.group();
		}
		self.initialize();
		self.buildModel();
	};
	self.initialize = function(){
		for(var i=0;i<config.model.button_types.length;i++){
			key = config.model.button_types[i]
			self.iop_buttons[key] = new Array();
			self.iop_buttons[key]['data'] = self.node[key];
			if(self.type == 'head' && config.model.button_types[i] == 'o'){
			continue;
			}
			if(self.type == 'base' && (config.model.button_types[i] == 'i' || config.model.button_types[i] == 'p')){
				continue;
			}
			if ( self.height_multiplier < self.node[key].length ){
                self.most_buttons = config.model.button_types[i];
				self.height_multiplier = self.node[key].length;
			}
		}
        self.padding_multiplier = 2;
        if(self.most_buttons == 'p'){
            self.padding_multiplier = 3.5;
        }
		self.height = ((self.height_multiplier - 1)*config.model.segment_height)+(config.model.padding_height*self.padding_multiplier);
	};
	self.buildModel = function(xml){
		self.generateModelParts();
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
	self.generateModelParts = function(node){
		self.body();
		var key;
		for(var i=0;i<config.model.button_types.length;i++){
			key = config.model.button_types[i];
			for (var j=0;j<self.node[key].length;j++){
				self.button(i,j);
			}
		}	
	};
	self.body = function(){
		var layer, inpObj;
        inpObj = config.get('model_end_'+self.type,'body');
		inpObj.height = self.height;
		layer = {};
        layer.box = shapesKit.box(inpObj);
        self.group.add(layer.box);
        self.body_shape = layer.box;
	};
	self.button = function(i,j){
		var button = {};
		var tip = {};
		var type = config.model.button_types[i];
		button.inpObj = config.model.button;
		button.inpObj.fill = config.model.button_type_colors[i];
		button.inpObj.x = self.iop_button_coords_x[i];
		button.inpObj.y = self.height - ( config.model.padding_height + (j*config.model.segment_height) + config.model.button_type_height_adjustment[type]);
		button.shape = shapesKit.circle(button.inpObj);
		button = self.attachButtonEventMouseOverOut(button, tip, button.inpObj.x, button.inpObj.y - button.inpObj.radius, self.node[type][j].n);
		self.button_shapes[type][j] = button.shape;
		if(self.type == 'head' && config.model.button_types[i] == 'o'){
			return;
		}
		if(self.type == 'base' && (config.model.button_types[i] == 'i' || config.model.button_types[i] == 'p')){
			return;
		}
		self.group.add(self.button_shapes[type][j]);
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