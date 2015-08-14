var SQDE_Model = function(){
	var self = this;
	self.default_events = true;
    self.height = 35;
	self.buttons = {'i':[],'p':[],'o':[]};
	self.run = function(){
        self.group = shapesKit.group(config.model.group);
        var height_multiplier = 1;
        var most_buttons = 'p';
        var padding_multiplier = 3.5;
		for(var type in self.buttons){
			if ( height_multiplier < self.node[type].length ){
                most_buttons = type;
				height_multiplier = self.node[type].length;
			}
		}
        if((most_buttons != 'p' && self.node['p'].length != self.node[most_buttons].length) && !(self.node['i'].length == self.node['p'].length && self.node['p'].length == self.node['o'].length)){
            padding_multiplier = 2;
        }
        self.height = ((height_multiplier - 1)*config.model.segment_height)+(config.model.padding_height*padding_multiplier);
		self.buildModel();
	};
	self.buildModel = function(){
        setTimeout(self.makeCollider,0);
        setTimeout(self.makeBody,0);
        setTimeout(self.makeHalo,0);
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
	self.makeHalo = function(i,j){
		var t = false;
		var o = {};
		o.inpObj = config.get('model','halo');
		o.inpObj.height = self.height;
		o.shape = shapesKit.circle(o.inpObj);
        if( self.default_events == true ){
           o.shape.on('mouseout', function(){
                if(t != false){
                    t.shape.remove();
                    t.shape.destroy();
                    t = false;
                    self.layer.batchDraw();
                }
            });
            o.shape.on('mouseover', function() {
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
            o.shape.on('touchend', function(){
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
		self.group.add(o.shape);
        self.halo = o.shape;
	};
	self.makeBody = function(){
		var o = {};
		o.inpObj = config.get('model','body');
		o.inpObj.height = self.height;
		o.shape = shapesKit.box(o.inpObj);
        if( self.default_events == true ){
            o.shape.on('mouseover touch', function() {
                self.group.moveToTop();
                self.group.draggable(true);
                self.layer.batchDraw();
            });
            o.shape.on('mouseout touchend', function() {
                self.group.moveToTop();
                self.layer.batchDraw();
            });
        }
		self.group.add(o.shape);
        self.body = o.shape;
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
		o.inpObj = config.get('model','button');
		o.inpObj.fill = config.model.button_type_colors[m];
		o.inpObj.x =  config.model.button_positions_x[m];
		o.inpObj.y = self.height - ( config.model.padding_height + ( i * config.model.segment_height) + config.model.button_type_height_adjustment[m] );
		o.shape = shapesKit.circle(o.inpObj);
        if( self.default_events == true ){
            o = self.attachButtonEventMouseOverOut(o, {}, o.inpObj.x, o.inpObj.y - o.inpObj.radius, self.node[m][i].n);
        }
		self.buttons[m][i] = o.shape;
        if(m != 'p'){
            self.buttons[m][i].setScale({x:0.71,y:1.05});
        }
		self.group.add(self.buttons[m][i]);
		for(var m in self.buttons){
            if(self.buttons[m].length != self.node[m].length){ break; }
            self.parent.modelComplete(self);
        }
	};
	self.attachButtonEventMouseOverOut = function(button, tip, x, y, text){
		button.shape.on('mouseover', function() {
            document.body.style.cursor = 'pointer';
            if(self.original){
                self.parent.wiring_layer.hide();
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
                self.parent.wiring_layer.show();
            }
            self.group.setDraggable(false);
			tip.shape.remove();
			tip.shape.destroy();
			self.layer.batchDraw();
		});
		return button;
	};
	self.makeCollider = function(){
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