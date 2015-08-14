var SQDE_Model = function(){
	var self = this; 
	self.group = false;
	self.button_shapes = {'i':[],'p':[],'o':[]};
	self.default_events = true;
	self.hide_tips = true;
	self.iop_buttons = [];
    self.height = 35;
	self.run = function(){
		self.iop_button_coords_x = [3.25,(config.model.width/2),config.model.width-3.25];
		if(self.group == false){
            self.group = shapesKit.group(config.model.group);
		}
		self.initialize();
		self.buildModel();
	};
	self.initialize = function(){
        var height_multiplier = 1;
        var most_buttons = 'p';
        var padding_multiplier = 3.5;
		for(var type in self.button_shapes){
			if ( height_multiplier < self.node[type].length ){
                most_buttons = type;
				height_multiplier = self.node[type].length;
			}
		}
        if((most_buttons != 'p' && self.node['p'].length != self.node[most_buttons].length) && !(self.node['i'].length == self.node['p'].length && self.node['p'].length == self.node['o'].length)){
            padding_multiplier = 2;
        }
        self.height = ((height_multiplier - 1)*config.model.segment_height)+(config.model.padding_height*padding_multiplier);
	};
	self.buildModel = function(){
		setTimeout(self.generateModelParts,0);
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
        setTimeout(self.collider,0);
        setTimeout(self.body,0);
        setTimeout(self.halo,0);
		var key;
		for(var i=0;i<config.model.button_types.length;i++){
			key = config.model.button_types[i];
			for (var j=0;j<self.node[key].length;j++){
                setTimeout(self.button,0,i,j);
			}
		}	
	};
    self.done = function(){
        if(self.button_shapes.i.length != self.node.i.length){return false;}
        if(self.button_shapes.p.length != self.node.p.length){return false;}
        if(self.button_shapes.o.length != self.node.o.length){return false;}
        self.parent.modelComplete(self);
    };
	self.halo = function(i,j){
        var h;
		var t = false;
		var o = {};
		o.inpObj = config.get('model','halo');
		o.inpObj.height = self.height;
		h = shapesKit.circle(o.inpObj);
        if( self.default_events == true ){
            h.on('mouseout', function(){
                if(t != false){
                    t.shape.remove();
                    t.shape.destroy();
                    t = false;
                    self.layer.batchDraw();
                }
            });
            h.on('mouseover', function() {
                if(t == false){
                    document.body.style.cursor = '-webkit-grab';
                    t = {};
                    t.inpObj = config.get('model','halo_tip_label');
                    t.inpObj.x = o.inpObj.x;
                    t.inpObj.y = o.inpObj.y - o.inpObj.radius;
                    t.shape = shapesKit.label(t.inpObj);
                    t.inpObj = config.get('model','halo_tip_tag');
                    t.shape.add(shapesKit.tag(t.inpObj));
                    t.inpObj = config.model.halo_tip_text;
                    t.inpObj.text = decodeURIComponent(self.node.n);
                    t.shape.add(shapesKit.text(t.inpObj));
                    self.group.add(t.shape);
                    self.group.moveToTop();
                    t.shape.moveToTop();
                    self.layer.batchDraw();
                }
            });
            h.on('touchend', function(){
                if(t != false){
                    t.shape.remove();
                    t.shape.destroy();
                    t = false;
                    self.layer.batchDraw();
                }else{
                    document.body.style.cursor = '-webkit-grab';
                    t = {};
                    t.inpObj = config.get('model','halo_tip_label');
                    t.inpObj.x = o.inpObj.x;
                    t.inpObj.y = o.inpObj.y - o.inpObj.radius;
                    t.shape = shapesKit.label(t.inpObj);
                    t.inpObj = config.get('model','halo_tip_tag');
                    t.shape.add(shapesKit.tag(t.inpObj));
                    t.inpObj = config.model.halo_tip_text;
                    t.inpObj.text = decodeURIComponent(self.node.n);
                    t.shape.add(shapesKit.text(t.inpObj));
                    self.group.add(t.shape);
                    self.group.moveToTop();
                    t.shape.moveToTop();
                    self.layer.batchDraw();
                }
            });
        }
		self.group.add(h);
	};
	self.body = function(){
		var body = {};
		body.inpObj = config.get('model','body');
		body.inpObj.height = self.height;
		self.body_shape = shapesKit.box(body.inpObj);
        if( self.default_events == true ){
            self.body_shape.on('mouseover touch', function() {
                self.group.moveToTop();
                self.group.draggable(true);
                self.layer.batchDraw();
            });
            self.body_shape.on('mouseout touchend', function() {
                self.group.moveToTop();
                self.layer.batchDraw();
            });
        }
		self.group.add(self.body_shape);
	};
	self.button = function(i,j){
		var button = {};
		var tip = {};
		var type = config.model.button_types[i];
		button.inpObj = config.get('model','button');
		button.inpObj.fill = config.model.button_type_colors[i];
		button.inpObj.x = self.iop_button_coords_x[i];
		button.inpObj.y = self.height - ( config.model.padding_height + (j*config.model.segment_height) + config.model.button_type_height_adjustment[type]);
		button.shape = shapesKit.circle(button.inpObj);
        
        if( self.default_events == true ){
            button = self.attachButtonEventMouseOverOut(button, tip, button.inpObj.x, button.inpObj.y - button.inpObj.radius, self.node[type][j].n);
        }
		self.button_shapes[type][j] = button.shape;
        if(type != 'p'){
            self.button_shapes[type][j].setScale({x:0.71,y:1.05});
        }
		self.group.add(self.button_shapes[type][j]);
        self.done();
	};
	self.attachButtonEventMouseOverOut = function(button, tip, x, y, text){
		button.shape.on('mouseover', function() {
            document.body.style.cursor = 'pointer';
            
            if(self.original){
                sequencer.wiring_layer.hide();
            }
			tip.inpObj = config.get('model','button_tip_label');
			tip.inpObj.x = x;
			tip.inpObj.y = y;
			tip.shape = shapesKit.label(tip.inpObj);
			tip.inpObj = config.get('model','button_tip_tag');
			tip.shape.add(shapesKit.tag(tip.inpObj));
			tip.inpObj = config.get('model','button_tip_text');
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
                sequencer.wiring_layer.show();
            }
            self.group.setDraggable(false);
			tip.shape.remove();
			tip.shape.destroy();
			self.layer.batchDraw();
		});
		return button;
	};
	self.add = function(shape){
		self.group.add(shape);
	};
	self.collider = function(){
		var inpObj = {
            x: -((config.model.width * 2)/8),
            y: 0,
            width: config.model.width * 1.5,
            height: self.height,
            stroke: '#00FF00',
            strokeWidth: 1.5,
            cornerRadius: 10
		};
		self.placement_collider = shapesKit.box(inpObj);
		self.placement_collider.hide();
		self.group.add(self.placement_collider);
	};
};