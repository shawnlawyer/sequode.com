var SQDE_Sequencer = function(){
	var self = this;
    var sequencer_palette = new SQDE_SequencerPalette;
    sequencer_palette.parent = self;
    self.initialized = false;
    self.first_run_complete = false;
	self.active = false;
    self.initialize = function(){
        if(self.initialized == true){
            return;
        }
        self.initialized = true;
    };
    self.tearDown = function(id){
		if(self.active == false){ return;}
        if(id != self.id){
            self.view_layers_offset = {x:0,y:0};
            self.first_run_complete == false;
        }
        self.initialized = false;
		self.view_positioner_layer.remove();
		self.grid_areas_layer.remove();
		self.flow_lines_layer.remove();
		self.sequence_layer.remove();
		self.ends_layer.remove();
		self.wiring_layer.remove();
		self.view_positioner_layer.destroy();
		self.grid_areas_layer.destroy();
		self.flow_lines_layer.destroy();
		self.sequence_layer.destroy();
		self.ends_layer.destroy();
		self.wiring_layer.destroy();
		var i;
		for( i in self.dict){
			self[self.dict[i]] = undefined;
		}
	};
	self.dict = ['models','sequence','flow_lines_layer','grid_areas_layer','sequence_layer','wiring_layer','ends_layer','view_positioner_layer','id','dragging','drag_id','y','offstage','tweens_playing','grids','grid','grid_mode','grid_x','grid_order','align_lock'];
	self.models = [];
	self.IOPmodels = { 'head':false, 'base':true };
    self.grid_auger_types = ['prepend','split','append'];
    self.connections = {'i':[],'p':[],'o':[]};
    self.connecters = {'i':[],'p':[],'o':[]};
	self.gridarea_height = 200;
    self.view_layers_offset = {x:0,y:0};
    self.view_layers_starting_offset = {x:0,y:0};
    self.all_layers = ['flow_lines_layer','grid_areas_layer','sequence_layer','wiring_layer','ends_layer','view_positioner_layer'];
    self.view_layers = ['flow_lines_layer','grid_areas_layer','sequence_layer','wiring_layer','ends_layer'];
    self.makeChartViewable = function(){
        self.center_stage = {x:Math.floor(stage.getWidth()/2), y:Math.floor(stage.getHeight()/2)};
        if(self.view_layers_offset.x != 0 || self.view_layers_offset.y != 0 ){return;}
        self.view_layers_offset = {x:Math.floor((stage.getWidth()/2)- (self.gridAreaWidth(self.node.grid_areas[0].count)/2)),y:Math.floor(stage.getHeight()/2)};
            
    };
    self.modelComplete = function(model){
        self.models[model.sequence_order] = self.modelEventListeners(model);;
        self.models_done++;
        self.done();
    };
    self.done = function(){
        if(self.models_done != self.sequence.length){return false;}
        self.modelsComplete();
    };
	self.modelsComplete = function(){
        self.sequenceIPOConnectionModels();
		self.makeWiringStacks();
		self.makeWiring();
        self.wiring_layer.moveToTop();
        setTimeout(self.makeGridAreaTchotchkes,0);
    };
    self.run = function(){
        sequencer_palette.run();
        self.grid_areas = [];
        self.focused_grid_area_id = false;
		id = parseInt((arguments.length != 0) ? arguments[0] : self.id);
        self.tearDown(id);
        
        registry.active_sequence = id;
        self.grid_flow_lines_done = 0;
        
        self.connection_receiver = false;
        self.connection_transmitter = false;
        self.focused_grid_area_id = false;
        self.grid_area_augmenter = false;
        self.grid_auger_split_position = false;
		self.view_positioner_layer = new Kinetic.Layer();
		stage.add(self.view_positioner_layer);
		self.flow_lines_layer = new Kinetic.Layer();
		stage.add(self.flow_lines_layer);
		self.grid_areas_layer = new Kinetic.Layer();
		stage.add(self.grid_areas_layer);
		self.ends_layer = new Kinetic.Layer();
		stage.add(self.ends_layer);
		self.sequence_layer = new Kinetic.Layer();
		stage.add(self.sequence_layer);
		self.wiring_layer = new Kinetic.Layer();
		stage.add(self.wiring_layer);
		self.node = registry.node('sequodes', id);
        if(self.node.s.length > 0 ){
            setTimeout(self.makeViewPositioner,0);
        self.makeChartViewable();
        }
		self.sequence = self.node.s;
		self.id = id;
		self.dragging = false;
		self.drag_id = false;
		self.align_lock = false;
		self.IOPmodels = { 'head':false, 'base':true };
		self.connections = {'i':[],'p':[],'o':[]};
		self.connecters = {'i':[],'p':[],'o':[]};
		self.tweens_playing = [];
		self.models = [];
		self.grid_states = { 'add': '', 'sequence': '', 'remove': '' } ;
        self.grid = [];
        self.grid_order = [];
        if(self.sequence.length != 0){
            self.grids = { 'add': [], 'sequence': [], 'remove': [] };
            
            self.makeGridAreas();
            self.setGridMode('sequence');
            self.makeSequenceModels();
        }
		self.active = true;
	};
	self.gridPositionerComplete = function(model){
        self.model_positioners_done++;
        if(self.model_positioners_done != self.grid_areas.length){return;}
        if(self.grid_areas.length == 1){
            self.complete();
        }else{
            self.makeGridFlowLines();
        }
    }
    self.gridFlowLineComplete = function(model){
        self.grid_flow_lines_done++;
        if(self.grid_flow_lines_done != self.grid_areas.length -1){return;}
        self.complete();
    }
    self.makeViewPositioner = function(){
        var o = {};
        o.width = stage.getWidth();
        o.height = stage.getHeight();
		o.x = 0;
        o.y = 0;
        o.group = new Kinetic.Group({x:o.x, y:o.y, draggable:true, dragDistance:2});
        o.box = new Kinetic.Rect({
            x: 0,
            y: 0,
            width: o.width,
            height: o.height
		});
        o.group.add(o.box);
        o = self.viewerPositionerEventListeners(o);
        self.view_positioner_layer.add(o.group);
        self.view_positioner_layer.moveToBottom();
	};
	self.makeSequenceModels = function(){
        self.models_done = 0;
		var model;
		var node;
		var grid_area;
        var sequence_order = 0;
		for( var area_id in self.grid_areas ){
            grid_area = self.grid_areas[area_id];
            for(var i=0; i<grid_area.models.length; i++){
                node = registry.node('sequodes',self.sequence[sequence_order]);
                model = new SQDE_Model();
                model.parent = self;
                model.original = true;
                model.sequence_id = grid_area.models[i];
                model.sequence_order = sequence_order;
                model.order = i;
                model.grid_area = area_id;
                model.node = node;
                model.id = node.id;
                model.stage = stage;
                model.layer = self.sequence_layer;
                model.x = grid_area.x + grid_area.sequence[i];
                model.y = grid_area.y;
                model.valignment = 'bottom';
                model.run();
                self.models[grid_area.models[i]] = model;
                sequence_order++;
            };
        }
	};
	self.sequenceIPOConnectionModels = function(){
		var model;
		var node;
		for(type in self.IOPmodels){
			node = registry.node('sequodes', self.id);
			model = new SQDE_ModelEnds();
			model.parent = self;
			model.node = node;
			model.id = self.id;
			model.stage = stage;
			model.layer = self.ends_layer;
            if(self.sequence.length != 0){
                if( type == 'head' ){
                    model.x = self.grid_areas[0].box.getAbsolutePosition().x - 8;
                    model.y = self.grid_areas[0].box.getAbsolutePosition().y + (self.grid_areas[0].box.getHeight()*.85);
                }else if( type == 'base' ){
                    model.x = self.grid_areas[self.grid_areas.length-1].box.getAbsolutePosition().x - 25 + self.grid_areas[self.grid_areas.length-1].box.getWidth();
                    model.y = self.grid_areas[self.grid_areas.length-1].box.getAbsolutePosition().y + (self.grid_areas[self.grid_areas.length-1].box.getHeight()*.85);
                }
            }else{
                model.y = self.grid_areas[0].y + (self.grid_areas[0].box.getHeight()*.5);
                if( type == 'head' ){
                    model.x = self.grid_areas[0].x;
                }else if( type == 'base' ){
                    model.x = self.grid_areas[0].x + self.grid_areas[0].box.getWidth();
                }
            }
			model.valignment = 'bottom';
			model.type = type;
			model.run();
			self.IOPmodels[type] = self.modelEndsEventListeners(model);
		}
	};
    self.makeGridAreas = function(){
        var grid_areas = [];
        var grid_area_ids = [];
        var i;
        var model_sequence_id = 0;
        for(i=0;i<self.node.grid_areas.length;i++){
            grid_areas[i] = {'id':i,'models':[],'grid_order':[]};
            for(j=0;j<self.node.grid_areas[i].count;j++){
                grid_areas[i].models.push(model_sequence_id);
                grid_areas[i].grid_order.push(j);
                model_sequence_id++;
            }
        };
        var grid_area;
        for(grid_area_id in grid_areas){
            grid_area = grid_areas[grid_area_id];
            grid_area = self.makeGridArea(grid_area);
            grid_area = self.makeGridAreaStates(grid_area);
            if(grid_area_id == 0){
                grid_area.group.draggable(false);
            }else{
                grid_area.group = eventsKit.attachMoveableCursorEvents(grid_area.group);
                grid_area = self.attachGridAreaEventOnDragStart(grid_area);
                grid_area = self.attachGridAreaEventOnDragMove(grid_area);
                grid_area = self.attachGridAreaEventOnDragEnd(grid_area);
            }
            self.grid_areas_layer.add(grid_area.group);
        }
        self.grid_areas = grid_areas;
        self.focused_grid_area_id = false;
	};
    self.makeGridArea = function(grid_area){
        var layer, width, height, x, y, group_x, group_y;
        width = self.gridAreaWidth(grid_area.models.length);
        height = self.gridarea_height;
        x = self.node.grid_areas[grid_area.id].x;
		y = self.node.grid_areas[grid_area.id].y;
        group_x = x - config.sequencer.grid_cell_width*.5 - 15;
        group_y = y - height + config.sequencer.grid_cell_width*.5;
        grid_area.x = x;
        grid_area.y = y;
        grid_area.width = width;
        grid_area.height = height;
        grid_area.group = new Kinetic.Group({x:group_x, y:group_y, draggable:true,dragDistance:2});
        layer = {};
        layer.width = width + (config.sequencer.grid_cell_width*5);
        layer.height = height + (config.sequencer.grid_cell_width) - (config.sequencer.grid_cell_width*.5);
		layer.x = group_x - config.sequencer.grid_cell_width - (config.sequencer.grid_cell_width*1.5);
        layer.y = group_y;
        layer.box = new Kinetic.Rect({
            x: layer.x,
            y: layer.y,
            width: layer.width,
            height: layer.height,
            stroke: '#00FF00',
            strokeWidth: 1.5,
            cornerRadius: 10
		});
        self.grid_areas_layer.add(layer.box);
        grid_area.placement_collider = layer.box
        
        layer = {};
        layer.width = width;
        layer.height = height;
		layer.x = group_x;
        layer.y = group_y;
        
        layer.box = new Kinetic.Rect({
            x: group_x,
            y: group_y,
            fill: 'white',
            width: width,
            height: height,
            stroke: '#00FF00',
            strokeWidth: 1.5,
            cornerRadius: 10
		});
        self.grid_areas_layer.add(layer.box);
        grid_area.placement_preview = layer.box;
        
        layer = {};
        layer.width = width;
        layer.height = height;
		layer.x = 0;
        layer.y = 0;
        layer.box = new Kinetic.Rect({
            x: layer.x,
            y: layer.y,
            fill: 'white',
            width: layer.width,
            height: layer.height,
            stroke: 'darkgray',
            strokeWidth: .5,
            cornerRadius: 5
		});
        grid_area.box = layer.box;
        
        grid_area.group.add(layer.box);
        
        grid_area.placement_collider.hide();
        grid_area.placement_preview.hide();
        
        return grid_area;
        
	};
    self.makeGridAreaStates = function(grid_area){
		var grid = [];
		var i;
		var state;
        for( i=0; i<grid_area.grid_order.length; i++ ){
            grid[i]=(i*config.sequencer.grid_cell_width);
        }
        grid[grid_area.grid_order.length]=(grid_area.grid_order.length*config.sequencer.grid_cell_width);
        for( state in self.grid_states ){
            if(state != 'add'){
               grid.pop();
            }
            grid_area[state] = new Array().concat(grid);
        }
        return grid_area;
	};
    self.makeGridAreaTchotchkes = function(){
        self.model_positioners_done = 0;
        for(var i=0; i < self.grid_areas.length;i++){
            setTimeout(self.makeGridAreaTchotchke, 0, i);
        }
	};
	self.makeGridAreaTchotchke = function(i){
        var inpObj;
        var grid_area = self.grid_areas[i]; 
        var grid_numbers_padding = 3;
        var top = -(grid_numbers_padding);
        var middle = grid_area.height*.5;
        var bottom = grid_area.height - (grid_numbers_padding+3);
        grid_area.next_number = false;
        if(self.grid_areas.length > 1){
            grid_area.current_number = {};
            grid_area.current_number.y = top;
            if( i > 0 && self.grid_areas.length > 1){
                if(self.grid_areas[i-1].y == grid_area.y){
                    grid_area.current_number.y = middle;
                }else if(self.grid_areas[i-1].y > grid_area.y){
                    grid_area.current_number.y = bottom;
                }
            }
            grid_area.current_number.x = 0 - (grid_numbers_padding);
            grid_area.current_number.grid_area_id = i;
            grid_area.current_number.number = i + 1;
            inpObj = config.get('sequencer','grid_area_number');
            inpObj.text = grid_area.current_number.number;
            grid_area.current_number.circle = shapesKit.circleButton(inpObj).group;
            grid_area.current_number.group = new Kinetic.Group({x:grid_area.current_number.x,y:grid_area.current_number.y});
            grid_area.current_number.group.add(grid_area.current_number.circle);
            grid_area.group.add(grid_area.current_number.group);
        }
        if(self.grid_areas.length > 1 && i != self.grid_areas.length - 1){
            grid_area.next_number = {};
            grid_area.next_number.y = top;
            if(self.grid_areas[i+1].y == grid_area.y){
                grid_area.next_number.y = middle;
            }else if(self.grid_areas[i+1].y > grid_area.y){
                grid_area.next_number.y = bottom;
            }
            grid_area.next_number.x = grid_area.box.getWidth() - grid_numbers_padding + 1;
            grid_area.next_number.grid_area_id = i;
            grid_area.next_number.number = i + 2;
            inpObj = config.get('sequencer','grid_area_number');
            inpObj.text = grid_area.next_number.number;
            grid_area.next_number.circle = shapesKit.circleButton(inpObj).group;
            grid_area.next_number.group = new Kinetic.Group({x:grid_area.next_number.x,y:grid_area.next_number.y});
            grid_area.next_number.group.add(grid_area.next_number.circle);
            grid_area.group.add(grid_area.next_number.group);
        }
        grid_area.prepend_auger = {};
        grid_area.prepend_auger.x = 0;
        grid_area.prepend_auger.y = grid_area.box.getHeight()*.5;
        grid_area.prepend_auger.grid_area_id = i;
        grid_area.prepend_auger.number = i + 1;
        grid_area.prepend_auger.group = new Kinetic.Group({x:grid_area.prepend_auger.x,y:grid_area.prepend_auger.y});
        inpObj = config.get('sequencer','grid_area_auger_collider');
        grid_area.prepend_auger.collider = shapesKit.box(inpObj);
        grid_area.prepend_auger.group.add(grid_area.prepend_auger.collider);
        inpObj = config.get('sequencer','grid_area_auger');
        grid_area.prepend_auger.circle = shapesKit.circle(inpObj);
        grid_area.prepend_auger.group.add(grid_area.prepend_auger.circle);
        inpObj = config.get('sequencer','grid_area_number');
        inpObj.text = '+';
        grid_area.prepend_auger.symbol = shapesKit.text(inpObj);
        grid_area.prepend_auger.symbol.setX(-(grid_area.prepend_auger.symbol.getWidth()*.5));
        grid_area.prepend_auger.symbol.setY(-(grid_area.prepend_auger.symbol.getHeight()*.5));
        grid_area.prepend_auger.group.add(grid_area.prepend_auger.symbol);
        grid_area.prepend_auger.group.hide();
        grid_area.group.add(grid_area.prepend_auger.group);
        grid_area.append_auger = {};
        grid_area.append_auger.x = grid_area.box.getWidth();
        grid_area.append_auger.y = grid_area.box.getHeight()*.5;
        grid_area.append_auger.grid_area_id = i;
        grid_area.append_auger.number = '+';
        if(self.node.grid_areas.length-1 !== i){
            grid_area.append_auger.number = i + 2;
        }
        grid_area.append_auger.group = new Kinetic.Group({x:grid_area.append_auger.x,y:grid_area.append_auger.y});
        inpObj = config.get('sequencer','grid_area_auger_collider');
        grid_area.append_auger.collider = shapesKit.box(inpObj);
        grid_area.append_auger.group.add(grid_area.append_auger.collider);
        inpObj = config.get('sequencer','grid_area_auger');
        grid_area.append_auger.circle = shapesKit.circle(inpObj);
        grid_area.append_auger.group.add(grid_area.append_auger.circle);
        inpObj = config.get('sequencer','grid_area_number');
        inpObj.text = '+';
        grid_area.append_auger.symbol = shapesKit.text(inpObj);
        grid_area.append_auger.group.add(grid_area.append_auger.symbol);
        grid_area.append_auger.symbol.setX(-(grid_area.append_auger.symbol.getWidth()*.5));
        grid_area.append_auger.symbol.setY(-(grid_area.append_auger.symbol.getHeight()*.5));
        grid_area.append_auger.group.hide(); 
        grid_area.group.add(grid_area.append_auger.group);
        grid_area.split_auger = {};
        grid_area.split_auger.x = 0;
        grid_area.split_auger.y = grid_area.box.getHeight();
        grid_area.split_auger.grid_area_id = i;
        grid_area.split_auger.number = '+';
        grid_area.split_auger.group = new Kinetic.Group({x:grid_area.split_auger.x,y:grid_area.split_auger.y});
        inpObj = config.get('sequencer','grid_area_auger_collider');
        grid_area.split_auger.collider = shapesKit.box(inpObj);
        grid_area.split_auger.group.add(grid_area.split_auger.collider);
        inpObj = config.get('sequencer','grid_area_auger');
        grid_area.split_auger.circle = shapesKit.circle(inpObj);
        grid_area.split_auger.group.add(grid_area.split_auger.circle);
        inpObj = config.get('sequencer','grid_area_number');
        inpObj.text = grid_area.split_auger.number;
        grid_area.split_auger.symbol = shapesKit.text(inpObj);
        grid_area.split_auger.group.add(grid_area.split_auger.symbol);
        grid_area.split_auger.symbol.setX(-(grid_area.split_auger.symbol.getWidth()*.5));
        grid_area.split_auger.symbol.setY(-(grid_area.split_auger.symbol.getHeight()*.5));
        grid_area.split_auger.group.hide();       
        grid_area.group.add(grid_area.split_auger.group);
        self.grid_areas[i] = grid_area;
        self.gridPositionerComplete();
	};
    self.makeGridFlowLines = function(){
        self.grid_flow_lines_done = 0;
        for(var i=0; i < self.grid_areas.length;i++){
            if(i !== 0){
                setTimeout(self.makeGridFlowLine, 0, i);
            }
        }
	};
    self.makeGridFlowLine = function(i,notifyComplete){
        var grid_area_to = self.grid_areas[i];
        var grid_area_from = self.grid_areas[i-1];
        var from_x, from_y, to_x, to_y;
        from_x = grid_area_from.next_number.circle.getX()+grid_area_from.next_number.group.getX()+grid_area_from.group.getX()+2.5;
        from_y = grid_area_from.next_number.circle.getY()+grid_area_from.next_number.group.getY()+grid_area_from.group.getY()+6.5;
        to_x = grid_area_to.current_number.circle.getX()+grid_area_to.current_number.group.getX()+grid_area_to.group.getX()+3;
        to_y = grid_area_to.current_number.circle.getY()+grid_area_to.current_number.group.getY()+grid_area_to.group.getY()+6.5;

        grid_area_to.line = new Kinetic.Line({
            points: [from_x, from_y ,to_x , to_y],
            stroke: 'darkgray',
            strokeWidth: config.model.stroke_width
        });
        self.flow_lines_layer.add(grid_area_to.line);
        
        grid_area_to.line.moveToBottom();
        self.grid_areas[i] = grid_area_to;
        if(notifyComplete != false){
            self.gridFlowLineComplete();
        }else{
            self.complete();
        }
	};
	self.makeWiringStacks = function(){
		var connecter, connection;
		var model, node;
		var end_stack, end_key;
		var shape;
		var stack_keys = {'i':'i','p':'p','o':'o'};
		self.connections = {'i':[],'p':[],'o':[]};
		self.connecters = {'i':[],'p':[],'o':[]};
		
		model = self.IOPmodels['head'];
		for(var i=0;i<self.node['i'].length;i++){
			connecter = {};
			connecter.type = 'i';
			connecter.shape = model.button_shapes['i'][i];
			connecter.x = connecter.shape.getAbsolutePosition().x;
			connecter.y = connecter.shape.getAbsolutePosition().y;
			self.connecters['i'].push(connecter);
		}
		for(var i=0;i<self.node['p'].length;i++){
			connecter = {};
			connecter.type = 'p';
			connecter.shape = model.button_shapes['p'][i];
			connecter.x = connecter.shape.getAbsolutePosition().x;
			connecter.y = connecter.shape.getAbsolutePosition().y;
			self.connecters['p'].push(connecter);
		}
		for(var i=0;i<self.sequence.length;i++){
			model = self.models[i];
			node = self.node.m[i];
			for(var stack in self.connecters){
				for(var j=0;j<node[stack].length;j++){
					connecter = {};
					connecter.type = stack;
					connecter.shape = model.button_shapes[stack][j];
					connecter.x = connecter.shape.getAbsolutePosition().x;
					connecter.y = connecter.shape.getAbsolutePosition().y;
                    
					if(node[stack][j].srcKey != -1 && stack !='o'){
						connection = {};
						connection.start = connecter;
						end_stack = stack_keys[node[stack][j].stack];
						if(end_stack == 'i' || end_stack == 'p'){
							end_key = node[stack][j].srcKey;
						}else if(end_stack == 'o'){
							end_key = node[stack][j].srcKey;
						}
						connection.end = self.connecters[end_stack][end_key];
						self.connections[stack].push(connection);
					}
					self.connecters[stack].push(connecter);
					
				}
			}
		}
		model = self.IOPmodels['base'];
        
		for(var i=0;i<model.button_shapes['o'].length;i++){
			connecter = {};
			connecter.type = 'o';
			connecter.shape = model.button_shapes['o'][i];
			connecter.x = connecter.shape.getAbsolutePosition().x;
			connecter.y = connecter.shape.getAbsolutePosition().y;
			self.connecters['o'].push(connecter);
			
            node = self.node['o'][i];
			connection = {};
			connection.start = connecter;
			end_key = node.srcKey;
			connection.end = self.connecters['o'][end_key];
			self.connections['o'].push(connection);
		}
	};
	self.makeWiring = function(){
		self.wiring_group = shapesKit.group(config.model.group);
		var wire, wire1, wire2, connections, wire_group;
		var start, end, padding, start_y_padding, end_y_padding, start_x_padding, end_x_padding;
		var start_x, start_y, end_x, end_y;
        var model_button = config.get('model','button');
        var start_adjuster, end_adjuster;
        padding = (model_button.radius / 2) + model_button.strokeWidth;
        var type_stroke = {'i':'yellow','p':'#306EFF','o':'#00FF00'};
		for( var type in self.connections ){
			connections = self.connections[type];
			for( var i = 0; i < connections.length; i++ ){
                if( connections[i].end == undefined ){ continue; }
                start = connections[i].start;
				end = connections[i].end ;
                if(start.y == end.y){
                    start_adjuster = (connections[i].start.type != 'p') ? .75 : 0 ;
                    end_adjuster = (connections[i].start.type != 'p') ? .75 : 0 ;
                    start_x_padding = padding;
                    end_x_padding = padding;
                    start_y_padding = padding;
                    end_y_padding = padding;
                    
                    start_x = (start.x > end.x) ?  start.x - start_x_padding - start_adjuster : start.x + start_x_padding + start_adjuster;
                    end_x = (start.x > end.x) ?  end.x + end_x_padding + end_adjuster : end.x - end_x_padding - end_adjuster;
                    start_y = start.y;
                    end_y = end.y;
                    
                }else if((start.y > end.y && start.y - end.y < 30) || (start.y < end.y && end.y - start.y < 30)){
                    start_adjuster = (connections[i].start.type != 'p') ? .75 : 0 ;
                    end_adjuster = (connections[i].start.type != 'p') ? .75 : 0 ;
                    start_x_padding = padding + 2.5;
                    end_x_padding = padding + .5;
                    start_y_padding = padding;
                    end_y_padding = padding;
                    
                    start_x = start.x - start_x_padding - start_adjuster;
                    end_x = end.x + end_x_padding + end_adjuster;
                    start_y = (start.y > end.y) ? start.y - 1 : start.y + 1;
                    end_y = (start.y > end.y) ? end.y + 1 : end.y - 1;
                    
                }else{
                    start_adjuster = (connections[i].start.type != 'p') ? .75 : 0 ;
                    end_adjuster = (connections[i].start.type != 'p') ? .75 : 0 ;
                    start_x_padding = padding;
                    end_x_padding = padding;
                    start_y_padding = padding;
                    end_y_padding = padding;
                    
                    start_x = start.x - start_x_padding - start_adjuster;
                    end_x = end.x + end_x_padding + end_adjuster;
                    start_y = (start.y > end.y) ? start.y - start_y_padding + start_adjuster: start.y + start_y_padding + start_adjuster;
                    end_y =  (start.y > end.y) ? end.y + end_y_padding + end_adjuster : end.y - end_y_padding + end_adjuster;
                    
                }
                
                wire_group = shapesKit.group(config.model.group);
                wire = new Kinetic.Line({
					points: [start_x, start_y, end_x, end_y],
					stroke: 'black',
					strokeWidth: 1.5
				});
                wire1 = new Kinetic.Line({
					points: [start_x, start_y, end_x, end_y],
					stroke: type_stroke[connections[i].end.type],
					strokeWidth: 1
				});
                wire2 = new Kinetic.Line({
					points: [start_x, start_y, end_x, end_y],
					stroke: type_stroke[connections[i].start.type],
					strokeWidth: 1,
					dash: [11, 11]
				});
				wire_group.add(wire);
				wire_group.add(wire1);
				wire_group.add(wire2);
				self.wiring_group.add(wire_group);
			}
		}
		self.wiring_layer.add(self.wiring_group);
	};
	self.setGridMode = function(mode){
		switch(mode){
			case 'add':
			case 'remove':
				self.grid_mode = mode;
				break;
			default:
				self.grid_mode = 'sequence';
				break;
		}
	};
	self.reorderFocusedGridArea = function(){
		if( self.focused_grid_area_id !== false){
            var model;
            var order = [];
            var reorder = [];
            var x;
            var sorter = [];
            var i; 
            var key;
            var grid_area = self.grid_areas[self.focused_grid_area_id];
            for( i=0; i<grid_area.models.length; i++ ){
                model = self.models[grid_area.models[i]];
                x = model.group.getAbsolutePosition().x;
                if( model.sequence_id == self.drag_id && self.grid_mode == 'remove'){ continue; }
                if( model.sequence_id == self.drag_id){ x++; }
                reorder[x] = i;
                sorter.push(x);
            }
            sorter.sort(function(a,b){return a - b});
            for(var i=0;i<sorter.length;i++){
                order.push(reorder[sorter[i]]);
            }
            grid_area.grid_order = order;
            self.grid_areas[self.focused_grid_area_id] = grid_area; 
		}
	};
	self.alignModelsToGrid = function(override_tweens){
        if( self.focused_grid_area_id !== false){
            var x;
            var y;
            var model;
            var grid_area = self.grid_areas[self.focused_grid_area_id];
            if(grid_area[self.grid_mode].length != 0){
                for(var i=0;i<grid_area[self.grid_mode].length;i++){
                    model = self.models[grid_area.models[grid_area.grid_order[i]]];
                    if(self.tweens_playing[i] == true && override_tweens != true){ continue; }
                    x = self.node.grid_areas[grid_area.id].x + grid_area[self.grid_mode][i];
                    y = self.node.grid_areas[grid_area.id].y - model.height;
                    if(self.dragging != false){
                        if(model.sequence_id != self.drag_id){
                            setTimeout(self.alignModelsTween,0, grid_area.models[grid_area.grid_order[i]], model, x, y);
                        }else{
                            if( grid_area.grid_order.length > 1){
                                grid_area.append_auger.group.show();
                                grid_area.prepend_auger.group.show();
                            }
                            if( i == 0 || i == grid_area.grid_order.length - 1){
                                grid_area.split_auger.group.hide();
                                self.grid_auger_split_position = false;
                            }else{
                                self.grid_auger_split_position = i;
                                grid_area.split_auger.group.setX(grid_area[self.grid_mode][i] + config.sequencer.grid_cell_width);
                                grid_area.split_auger.group.show();
                            }
                            self.grid_areas_layer.draw();
                        }
                    }else{
                        if(model.sequence_id != self.drag_id){
                            setTimeout(self.alignModelsTween,0, grid_area.models[grid_area.grid_order[i]], model, x, y);
                        }else{
                            setTimeout(self.alignModelsTween,0, self.drag_id, model, x, y);
                        }
                    }
                }
                self.sequence_layer.batchDraw();
            }
        }
	};
	self.alignModelsTween = function(id, model, x, y){
    	new Kinetic.Tween({
			node: model.group, 
			x: x,
			y: y,
			easing: Kinetic.Easings.EaseOut,
			duration: 0.2,
			onFinish: function() {
				self.tweens_playing[id] = false;
			}
		}).play();
		self.tweens_playing[id] = true;
	};
	self.saveSequence = function(model){
        if( self.focused_grid_area_id === false){
            if(self.node.s.length < 1 ){
                new SQDE_AjaxCall({route:'operations/sequode/addToSequence', inputs:[self.id, model.node.id, 0, 0, 0], done_callback: function(){registry.fetch({collection:'sequodes', key: self.id})}});
            }else if(self.focused_grid_area_id === false && model.original == true){
                new SQDE_AjaxCall({route:'operations/sequode/removeFromSequence', inputs:[self.id, model.sequence_order], done_callback: function(){registry.fetch({collection:'sequodes', key: self.id})}});
            }
            return;  
        }else if(self.focused_grid_area_id !== false){
            var sequence = [];
            var models_key;
            var position = 0;
            var gridarea_position = 0;
            var grid_area = 0;
            for(var i=0; i<self.grid_areas.length; i++){
                grid_area = self.grid_areas[i];
                for(var j=0; j<grid_area.grid_order.length; j++){
                    models_key = grid_area.models[grid_area.grid_order[j]];
                    if(model.original == true && self.models[models_key].sequence_order == model.sequence_order ){
                        new SQDE_AjaxCall({route:'operations/sequode/reorderSequence', inputs:[self.id, model.sequence_order, position, (j == 0) ? 0 : 1 ,(self.grid_area_augmenter == false) ? 0 : 1], done_callback: function(){registry.fetch({collection:'sequodes', key: self.id})}});
                        return;
                    }else if(model.original == false && self.models[models_key].original == false ){
                        new SQDE_AjaxCall({route:'operations/sequode/addToSequence', inputs:[self.id, model.node.id, position, (j == 0) ? 0 : 1 ,(self.grid_area_augmenter == false) ? 0 : 1], done_callback: function(){registry.fetch({collection:'sequodes', key: self.id})}});
                        return;
                    }
                    position++;
                }
            }
        }
    };
    self.saveGridArea = function(gridarea){
        var x,y,multiplier;
        var scale;
        if(gridarea.id == 0){return;}
        x = (self.node.grid_areas[gridarea.id].x - self.node.grid_areas[0].x);
        y = (self.node.grid_areas[gridarea.id].y - self.node.grid_areas[0].y);
        new SQDE_AjaxCall({route:'operations/sequode/moveGridArea', inputs:[self.id, gridarea.id, x, y], done_callback: function(){registry.fetch({collection:'sequodes', key: self.id})}});
	};
	self.detectCollision = function(a, b){
        var a_pos = a.getAbsolutePosition();
        var b_pos = b.getAbsolutePosition();
        return !(
        (a_pos.y + a.getHeight() < b_pos.y) ||
        (a_pos.y > b_pos.y + b.getHeight()) ||
        (a_pos.x + a.getWidth() < b_pos.x) ||
        (a_pos.x > b_pos.x + b.getWidth())
        );
    };
    self.setViewOffset = function(draw){
		for(i=0;i<self.view_layers.length;i++){
            self[self.view_layers[i]].setX(self.view_layers_offset.x);
            self[self.view_layers[i]].setY(self.view_layers_offset.y);
            if(draw != false){
                self[self.view_layers[i]].batchDraw();
            }
        }
	};
    self.gridAugerHitTest = function(grid_area, model){
        self.grid_area_augmenter = false;
        var auger;
        var stroke = 'black';
        var fill = 'darkgrey';
        var type;
        for(var i=0; i< self.grid_auger_types.length;i++){
            type = self.grid_auger_types[i];
            auger = type + '_auger';
            if(self.detectCollision(model.placement_collider,grid_area[auger].collider) && self.detectCollision(grid_area[auger].collider,model.placement_collider)){
                self.grid_area_augmenter = type;
                stroke = '#00FF00';
                fill = '#00FF00';
                break;
           }
        }
        if( grid_area[auger].circle.stroke() != stroke ){
            grid_area[auger].circle.setStroke(stroke);
            grid_area[auger].symbol.fill(fill);
            self.grid_areas_layer.draw();
        }
	};
    self.drawAllLayers = function(){
		for(i=0;i<self.all_layers.length;i++){
            self[self.all_layers[i]].batchDraw();
        }
	};
    self.drawViewLayers = function(){
		for(i=0;i<self.all_layers.length;i++){
            if(self[self.view_layers[i]]){
                self[self.view_layers[i]].batchDraw();
            }
        }
	};
    self.complete = function(){
        self.setViewOffset(false);
        self.first_run_complete = true;
        self.drawAllLayers();
    }
    self.gridAreaDropPosition = function(grid_area, not_group){
        var cell = {
            width:config.sequencer.grid_cell_width + (config.sequencer.grid_cell_width *.50),
            height:self.gridarea_height + (config.sequencer.grid_cell_width *.75)
        };
        var grid_x = (not_group == true) ? grid_area.x : grid_area.group.getX() + config.sequencer.grid_cell_width*.5 - 17.5;
        var grid_y = (not_group == true) ? grid_area.y : grid_area.group.getY() + self.gridarea_height;
        var x = (Math.floor(((not_group == true) ? grid_x : grid_x + (config.sequencer.grid_cell_width) - (config.sequencer.grid_cell_width *.50)) / cell.width)) * cell.width;
        var y = (Math.floor(((not_group == true) ? grid_y : grid_y - (config.sequencer.grid_cell_width*.5)) / cell.height)) * cell.height;
        return {x: (not_group == true) ? x : x - config.sequencer.grid_cell_width*.5 - 15 , y : (not_group == true) ? y : y - (self.gridarea_height) + (config.sequencer.grid_cell_width *.5)};
    };
    self.gridPlacementHitTest = function(grid_area){
        var grid_area_id;
        var stroke = '#00FF00';
        self.can_drop_grid_target = true;
        for(grid_area_id in self.grid_areas){
            if(grid_area_id == grid_area.id){continue};
            if(self.detectCollision(grid_area.placement_preview,self.grid_areas[grid_area_id].placement_collider) && self.detectCollision(self.grid_areas[grid_area_id].placement_collider,grid_area.placement_preview)){
                stroke = '#FF0000';
                self.can_drop_grid_target = false;
                break;
            }
        }
        if( grid_area.placement_preview.stroke() != stroke ){
           grid_area.placement_preview.setStroke(stroke);
           self.grid_areas_layer.draw();
        }
	};
    self.setConnectionReceiver = function(object){
        self.connection_receiver = object;
        self.addConnection();
	};
    self.setConnectionTransmitter = function(object){
        self.connection_transmitter = object;
        self.addConnection();
	};
    self.addConnection = function(){
        if(self.connection_receiver == false || self.connection_transmitter == false){
            return;
        }
        if(self.connection_receiver.type == 'external' && self.connection_transmitter.type == 'external'){
            self.connection_receiver = false;
            self.connection_transmitter = false;
            return;
        }
        var route = (self.connection_receiver.type == 'external' || self.connection_transmitter.type == 'external') ? 'operations/sequode/addExternalConnection' : 'operations/sequode/addInternalConnection';
        var type = (self.connection_receiver.type == 'external') ? self.connection_transmitter.type : self.connection_receiver.type;
        new SQDE_AjaxCall({route:route, inputs:[self.id,type,self.connection_transmitter.key,self.connection_receiver.key], done_callback: function(){registry.fetch({collection:'sequodes', key: self.id})}});
        self.connection_receiver = false;
        self.connection_transmitter = false;
	};
    self.cleanupAfterModelToGridAreaCollision = function(model, grid_area){
        if(self.focused_grid_area_id != model.grid_area){
            self.setGridMode('sequence');
            grid_area.models.pop();
        }else{
            self.setGridMode('remove');
        }
        var grid_order = [];
        for(var i=0; i < grid_area.grid_order.length;i++){
            if(i != grid_area.models.length){
                grid_order.push(i);
            }
        }
        grid_area.grid_order = grid_order;
        self.reorderFocusedGridArea();
        self.alignModelsToGrid(true);
        self.sequence_layer.draw();
        self.focused_grid_area_id = false;
        var box_width = grid_area.box.getWidth() - config.sequencer.grid_cell_width;
        grid_area.box.setWidth(box_width);
        grid_area.append_auger.group.setX(box_width);
        self.grid_areas[grid_area.id] = grid_area;
        if(grid_area.id+1 != self.grid_areas.length){
            self.grid_areas[grid_area.id+1].line.remove();
            self.grid_areas[grid_area.id+1].line.destroy();
            self.grid_areas[grid_area.id] = grid_area;
            self.makeGridFlowLine(grid_area.id+1,false);
        }
        self.grid_areas_layer.draw();
        grid_area.box.fill('white');
        self.grid_areas[grid_area.id] = grid_area;
        self.flow_lines_layer.show();
        
        self.grid_area_augmenter = false;
        for(var i=0; i< self.grid_auger_types.length;i++){
            type = self.grid_auger_types[i];
            auger = type + '_auger';
            grid_area[auger].circle.setStroke('black');
            grid_area[auger].symbol.fill('darkgrey');
        }
        self.grid_areas_layer.draw();
        self.grid_auger_split_position = false;
    };
    self.gridAreaWidth = function(models_count){
        return(models_count*config.sequencer.grid_cell_width) + (config.sequencer.grid_cell_width);
    };
    self.initialize();
    
    // Event Listeners attachments
    
	self.viewerPositionerEventListeners = function(positioner){
        positioner.group = eventsKit.attachDraggableCursorEvents(positioner.group);
        positioner = self.attachViewDraggerEventOnDragStart(positioner);
        positioner = self.attachViewDraggerEventOnDragMove(positioner);
        positioner = self.attachViewDraggerEventOnDragEnd(positioner);
        return positioner;
	};
    
	self.modelEventListeners = function(model){
		model = self.attachModelButtonsEventOnTap(model);
        model = self.attachModelEventOnDragStart(model);
        model = self.attachModelEventOnDragMove(model);
        model = self.attachModelEventOnDragEnd(model);
		return model;
	};

	self.modelEndsEventListeners = function(model){
        model = self.attachModelEndsEventButtonsOnTap(model);
        model = self.attachModelEndsEventBodyOnTap(model);
		return model;
	};
    
    //drag event listner attachments
    
    self.attachGridAreaEventOnDragStart = function(gridarea){
		gridarea.group.on("dragstart", function(){
            
            self.flow_lines_layer.hide();
            self.ends_layer.hide();
            self.sequence_layer.hide();
            self.wiring_layer.hide();
            gridarea.placement_preview.show();
            gridarea.placement_preview.setPosition(self.gridAreaDropPosition(gridarea));
            self.drawViewLayers();
		});
		return gridarea;
	};
	self.attachGridAreaEventOnDragMove = function(gridarea){
        gridarea.group.on("dragmove", function(){
            gridarea.placement_preview.setPosition(self.gridAreaDropPosition(gridarea));
            gridarea.placement_collider.setPosition(self.gridAreaDropPosition(gridarea));
            self.grid_areas_layer.draw();
            setTimeout(self.gridPlacementHitTest,0,gridarea);
        });
		return gridarea;
	};
	self.attachGridAreaEventOnDragEnd = function(gridarea){
		gridarea.group.on("dragend", function(){
            gridarea.placement_preview.hide();
            self.grid_areas_layer.draw();
            if(self.can_drop_grid_target == true){
                self.node.grid_areas[gridarea.id].x = gridarea.group.getX() + config.sequencer.grid_cell_width*.5 + 15;
                self.node.grid_areas[gridarea.id].y = gridarea.group.getY() + gridarea.height - 15;
                self.saveGridArea(gridarea);
            }else{
                self.run();
            }
		});
		return gridarea;
	};
	self.attachViewDraggerEventOnDragStart = function(positioner){
        positioner.group.on("dragstart", function(){
            self.view_layers_starting_offset = {x:self.view_layers_offset.x,y:self.view_layers_offset.y};
        });
        return positioner;
    };
    self.attachViewDraggerEventOnDragMove = function(positioner){
        positioner.group.on("dragmove", function(){
            self.view_layers_offset = {x:positioner.group.getX() + self.view_layers_starting_offset.x,y:positioner.group.getY() +self.view_layers_starting_offset.y};
            self.setViewOffset(true);
        });
        return positioner;
    };
    self.attachViewDraggerEventOnDragEnd = function(positioner){
        positioner.group.on("dragend", function(){
            positioner.group.setX(0);
            positioner.group.setY(0);
            self.complete();
            self.view_layers_starting_offset = {x:0,y:0};
        });
        return positioner;
    };
    self.attachModelEventOnDragStart = function(model){
		model.group.on("dragstart", function(){
            var height = model.height * 1.667;
            var width = config.model.width * 1.667;
			self.ends_layer.hide();
			self.wiring_layer.hide();
            self.flow_lines_layer.hide();
			self.dragging = true;
			self.drag_id = model.sequence_order;
            self.focused_grid_area_id = model.grid_area;
		});
		return model;
	};
	self.attachModelEventOnDragMove = function(model){
        model.group.on("dragmove", function(){
            for(var grid_area_id in self.grid_areas){
                if(self.detectCollision(self.grid_areas[grid_area_id].placement_collider,model.placement_collider) && self.detectCollision(model.placement_collider,self.grid_areas[grid_area_id].placement_collider)){
                    if (self.focused_grid_area_id !== false && self.focused_grid_area_id != grid_area_id){
                        self.cleanupAfterModelToGridAreaCollision(model, self.grid_areas[self.focused_grid_area_id]);
                    }
                    var grid_area = self.grid_areas[grid_area_id];
                    if(self.focused_grid_area_id === false){
                        self.focused_grid_area_id = grid_area_id;
                        if(self.focused_grid_area_id != model.grid_area){
                            self.setGridMode('add');
                            grid_area.models.push(model.sequence_id);
                        }else{
                            self.setGridMode('sequence');
                        }
                        var box_width = grid_area.box.getWidth() + config.sequencer.grid_cell_width;
                        grid_area.box.setWidth(box_width);
                        grid_area.append_auger.group.setX(box_width);
                        self.grid_areas_layer.draw();
                        self.grid_areas[grid_area.id] = grid_area;
                        if(grid_area.id+1 != self.grid_areas.length){
                            self.grid_areas[grid_area.id+1].line.remove();
                            self.grid_areas[grid_area.id+1].line.destroy();
                            self.makeGridFlowLine(grid_area.id+1,false);
                        }
                        self.reorderFocusedGridArea();
                        self.alignModelsToGrid(true);
                        self.grid_areas_layer.draw();
                    }else{
                        self.reorderFocusedGridArea();
                        self.alignModelsToGrid(true);
                    }
                    if( grid_area.grid_order.length > 1){
                        self.gridAugerHitTest(grid_area,model);
                    }
                    break;
                }else{
                    if(self.focused_grid_area_id !== false){
                        self.cleanupAfterModelToGridAreaCollision(model, self.grid_areas[self.focused_grid_area_id]);
                    }
                }
            }
        });
        return model;
    };
	self.attachModelEventOnDragEnd = function(model){
		model.group.on("dragend", function(){
            self.modelOnDragEnd(model);
		});
		return model;
	};
    self.modelOnDragEnd = function(model){
		self.dragging = false;
        self.drag_id = false;
        if(self.grid_area_augmenter == false){
            self.alignModelsToGrid(true);
        }
        self.saveSequence(model);
	};

    //tap event listner attachments
    
    self.attachModelEndsEventButtonsOnTap = function(model){
		for(var type in model.button_shapes){
			for( var i in model.button_shapes[type] ){
				model.button_shapes[type][i] = self.attachModelEndsEventButtonOnTap(model.button_shapes[type][i],type,i);
			}
		}
		return model;
	};
	self.attachModelEndsEventButtonOnTap = function(shape,type,i){
		switch(type){
			case 'i':
				shape.on("click touchend", function(){
					clearTimeout(self.clickTimeout);
					self.clickTimeout = setTimeout(function(){
                        self.setConnectionTransmitter({'type':'input', 'key' : (i+1) });
					},300);
				});
				break;
			case 'p':
				shape.on("click touchend", function(){
					clearTimeout(self.clickTimeout);
					self.clickTimeout = setTimeout(function(){
                        self.setConnectionTransmitter({'type':'property', 'key' : (i+1) });
					},300);
				});
				break;
			default:
				break;
		}
		return shape;
	};
	self.attachModelEndsEventBodyOnTap = function(model){
		switch(model.type){
			case 'base':
				model.body_shape.on("click touchend", function(){
					clearTimeout(self.clickTimeout);
                    self.setConnectionReceiver({'type':'external', 'key':0});
				});
				break;
			case 'head':
				model.body_shape.on("click touchend", function(){
					clearTimeout(self.clickTimeout);   
                    self.setConnectionTransmitter({'type':'external', 'key':0});
				});
				break;
			default:
				break;
		}
		return model;
	};
	self.attachModelButtonsEventOnTap = function(model){
		for(var type in model.button_shapes){
			for( var i in model.button_shapes[type] ){
				model.button_shapes[type][i] = self.attachModelEventButtonOnTap(model.button_shapes[type][i],model.sequence_order,type,i);
			}
		}
		return model;
	};
	self.attachModelEventButtonOnTap = function(shape,i,type,j){
		switch(type){
			case 'i':
				shape.on("click touchend", function(){
					clearTimeout( self.clickTimeout );
                    self.setConnectionReceiver({'type':'input', 'key':(self.node.m[i][type][j].lead)});
				});
				break;
			case 'p':
				shape.on("click touchend", function(){
					clearTimeout(self.clickTimeout);
                    self.setConnectionReceiver({'type':'property', 'key':(self.node.m[i][type][j].lead)});
				});
				break;
			case 'o':
				shape.on("click touchend", function(){
					clearTimeout(self.clickTimeout);
                    self.setConnectionTransmitter({'type':'output', 'key':(self.node.m[i][type][j].lead)});
				});
				break;
			default:
				break;
		}
		return shape;
	};
    
}