var SQDE_SequencerPalette = function(){
	var self = this;
    self.dict = ['models','height','background_layer','models_layer','temp_layer','grid'];
    self.initialized = false;
    self.initialize = function(){
        if(self.initialized == true){ return;}
        self.initialized = true;
    }
    self.grid_position = {x:62.5};
	self.run = function(){
		self.buttons_layer = new Kinetic.Layer();
		stage.add(self.buttons_layer);
		self.makeOpenPaletteButton();
	};
	self.runPalette = function (){
        self.tearDown();
        self.height = 200;
		self.temp_layer = new Kinetic.Layer();
		stage.add(self.temp_layer);
		self.background_layer = new Kinetic.Layer();
		stage.add(self.background_layer);
		self.models_layer = new Kinetic.Layer();
		stage.add(self.models_layer);
        self.models_layer.moveToTop();
		self.setupGrids();
        var grid_id = 0;
        
        self.models = [];
        
        var collection = registry.collection('palette');
        var i = 0 ;
		for( var id in collection ){
            setTimeout(self.makeModel, 0, id, i);
            i++;
		}
    };
    self.tearDown = function(){
		if(!self.models){ return; }
		self.models_layer.remove();
		self.background_layer.remove();
		self.temp_layer.remove();
		self.temp_layer.destroy();
		self.models_layer.destroy();
		self.background_layer.destroy();
		for(var i in self.dict ){
			self[self.dict[i]] = undefined;
		}
	};
	self.setupGrids = function(){
		self.grid = [];
        var collection_length = Object.keys(registry.collection('palette')).length;
        for(var i = 0; i < collection_length; i++) {
            self.grid[i] = (i*config.sequencer.grid_cell_width) + self.grid_position.x;
		}
	};
	self.makeModel = function(id,grid_id){
		var model = new SQDE_Model();
		model.parent = self;
		model.original = false;
		model.grid_id = grid_id;
		model.node = registry.node('sequodes', id);
		model.id = id;
		model.stage = stage;
		model.layer = self.models_layer;
		model.x = self.grid[grid_id];
		model.y = 0;
		model.valignment = 'bottom';
		model.run();
	};
    self.setHeight = function(height){
        if ( self.height < height + 85 ){
			self.height = height + 85;
		}
    }
	self.modelComplete = function(model){
        model.group = eventsKit.attachDraggableCursorEvents(model.group);
		model = self.attachEventModelOnDragStart(model);
		model = self.attachEventModelOnDragMove(model);
		model = self.attachEventModelOnDragEnd(model);

        self.models[model.grid_id] = model;
        if(self.models.length == Object.keys(registry.collection('palette')).length){
            self.modelsComplete();
        }
    }
    self.modelsComplete = function(model){
        setTimeout(self.makePaletteArea,0);
    }
    self.makeOpenPaletteButton = function(){
		
        var layer = shapesKit.textButton(30,10,'Palette','kids',18);
        self.attachHidePaletteEventButtonOnClickTouch(layer.group,'open');
        
        self.buttons_layer.add(layer.group);
        self.open_button = layer;
        self.buttons_layer.draw();
		
	};
    self.makePaletteArea = function(){
        var layer = {};
        layer.width = stage.getWidth() - 60;
        layer.height = self.height;
		layer.x = 30;
        layer.y = -250;
        layer.box = new Kinetic.Rect({
            x: layer.x,
            y: layer.y,
            fill: '#FAFAFA',
            width: layer.width,
            height: layer.height,
            cornerRadius: 5,
		});
        layer.shadow = shapesKit.boxShadow(layer.x,layer.y,layer.width,layer.height);
        
        var inpObj = config.get('sequencer','grid_area_number');
        inpObj.text = 'X';
        layer.hideButton = {};
        layer.hideButton.group = new Kinetic.Group({x:layer.width + layer.x - 18,y:layer.y + 10});
        layer.hideButton.button = shapesKit.circleButton(inpObj);
        layer.hideButton.group.add(layer.hideButton.button.group);
		
        self.attachHidePaletteEventButtonOnClickTouch(layer.hideButton.button.group,'close');
        
        self.background_layer.add(layer.shadow.group);
        self.background_layer.add(layer.box);
        self.background_layer.add(layer.hideButton.group);
        self.background = layer;
        self.background_layer.draw();
		setTimeout(self.openPalette,0);
	};
	self.attachHidePaletteEventButtonOnClickTouch = function(shape, action){
        switch(action){
			case 'close':
				shape.on("touchend click", function(){
					setTimeout(self.closePalette,0);
				});
				break;
			case 'open':
				shape.on("touchend click", function(){
					self.runPalette();
				});
				break;
			default:
				break;
		}
        shape.on("touchstart mouseover", function(){
            document.body.style.cursor = 'pointer';
        });
        shape.on("touchend mouseout", function(){
            document.body.style.cursor = 'default';
        });
		return shape;
	};
	self.attachEventModelOnDragStart = function(model){
		model.group.on("dragstart", function(event){
            model.group.remove();
			self.dragging = true;
            sequencer.dragging = true;
            model.original = false;
			if(typeof(sequencer.sequence) == "object" && sequencer.sequence.length > 0 ){
                sequencer.ends_layer.hide();
                sequencer.wiring_layer.hide();
                sequencer.flow_lines_layer.hide();
                sequencer.dragging = true;
                sequencer.focused_grid_area_id = false;
            }
            setTimeout(self.closePalette,0);
            if(typeof(sequencer.sequence) != "object" || sequencer.sequence.length < 1 ){
                model.group.moveTo(self.temp_layer);
                model.group.moveToTop();
                self.temp_layer.draw();
            } else {
                model.group.moveTo(sequencer.sequence_layer);
                model.group.moveToTop();
                sequencer.sequence_layer.draw();
            }
		});
		return model;
	}
    self.moveDragModel = function(model){
        if(typeof(sequencer.sequence) != "object" || sequencer.sequence.length < 1 ){
            self.temp_layer.draw();
        }else{
            sequencer.sequence_layer.draw();
        }
    }
    self.detectDragModelCollision = function(model){
        var grid_area_id;
        for(grid_area_id in sequencer.grid_areas){
            if(sequencer.detectCollision(sequencer.grid_areas[grid_area_id].box,model.body_shape)){
                if (sequencer.focused_grid_area_id !== false && sequencer.focused_grid_area_id != grid_area_id){
                    self.cleanupAfterModelToGridAreaCollision(model, sequencer.grid_areas[sequencer.focused_grid_area_id]);
                }
                var grid_area = sequencer.grid_areas[grid_area_id];
                if(sequencer.focused_grid_area_id === false){
                    sequencer.focused_grid_area_id = grid_area_id;
                    sequencer.setGridMode('add');
                    var box_width = grid_area.box.getWidth() + config.sequencer.grid_cell_width;
                    grid_area.box.setWidth(box_width);
                    grid_area.append_auger.group.setX(box_width);       
                    sequencer.grid_areas_layer.batchDraw();
                    sequencer.sequence_layer.batchDraw();
                    model.original = false;
                    model.sequence_id = sequencer.sequence.length;
                    model.order = grid_area.models.length;
                    grid_area.models.push(model.sequence_id);
                    sequencer.models.push(model);
                    sequencer.drag_id = model.sequence_id;
                    sequencer.grid_areas[grid_area.id] = grid_area;
                    if(grid_area.id+1 != sequencer.grid_areas.length){
                        sequencer.grid_areas[grid_area.id+1].line.remove();
                        sequencer.makeGridFlowLine(grid_area.id+1,false);
                    }
                    sequencer.reorderFocusedGridArea();
                    sequencer.alignModelsToGrid(true);
                    sequencer.grid_areas_layer.draw();
                }else{
                    sequencer.reorderFocusedGridArea();
                    sequencer.alignModelsToGrid(true);
                }
                sequencer.gridAugerHitTest(grid_area,model);
                break;
            }else{
                if(sequencer.focused_grid_area_id !== false){
                    self.cleanupAfterModelToGridAreaCollision(model, sequencer.grid_areas[sequencer.focused_grid_area_id]);
                }
            }
        }
    }
    self.attachEventModelOnDragMove = function(model){
		model.group.on("dragmove", function(){
            setTimeout(self.moveDragModel,0,model);
            if(typeof(sequencer.sequence) == "object" || sequencer.sequence.length > 0 ){
                setTimeout(sequencer.reorderFocusedGridArea,2);
                setTimeout(self.detectDragModelCollision,10,model);
            }
		});
		return model;
	}
	self.modelOnDragEndTween = function(tween_id, model, x, y){
        sequencer.alignModelsTween(tween_id, model, x, y);
    }
	self.attachEventModelOnDragEnd = function(model){
		model.group.on("dragend", function(event){
            sequencer.dragging = false;
            if(typeof(sequencer.sequence) != "object" || sequencer.sequence.length < 1 ){
                self.temp_layer.draw();
            }else{
                sequencer.sequence_layer.draw();
            }
            setTimeout(self.runPalette,0);
            sequencer.modelOnDragEnd(model);
		});
		return model;
	}
    self.cleanupAfterModelToGridAreaCollision = function(model, grid_area){
        sequencer.setGridMode('sequence');
        grid_area.models.pop();
        sequencer.models.pop();
        var grid_order = [];
        for(var i=0; i < grid_area.grid_order.length;i++){
            if(i != grid_area.models.length){
                grid_order.push(i);
            }
        }
        grid_area.grid_order = grid_order;
        sequencer.reorderFocusedGridArea();
        sequencer.alignModelsToGrid(true);
        sequencer.sequence_layer.draw();
        sequencer.focused_grid_area_id = false;
        var box_width = grid_area.box.getWidth() - config.sequencer.grid_cell_width;
        grid_area.box.setWidth(box_width);
        grid_area.append_auger.group.setX(box_width);
        sequencer.grid_areas[grid_area.id] = grid_area;
        if(grid_area.id+1 != sequencer.grid_areas.length){
            sequencer.grid_areas[grid_area.id+1].line.remove();
            sequencer.grid_areas[grid_area.id+1].line.destroy();
            sequencer.grid_areas[grid_area.id] = grid_area;
            sequencer.makeGridFlowLine(grid_area.id+1,false);
        }
        sequencer.grid_areas_layer.draw();
        grid_area.box.fill('white');
        sequencer.grid_areas[grid_area.id] = grid_area;
        sequencer.flow_lines_layer.show();
        sequencer.grid_area_augmenter = false;
        for(var i=0; i< sequencer.grid_auger_types.length;i++){
            type = sequencer.grid_auger_types[i];
            auger = type + '_auger';
            grid_area[auger].circle.setStroke('black');
            grid_area[auger].symbol.fill('darkgray');
        }
        sequencer.grid_areas_layer.draw();
        sequencer.grid_auger_split_position = false;
    }
	self.openPalette = function(){
    	new Kinetic.Tween({
			node: self.background_layer, 
			x: 0,
			y: 260,
			easing: Kinetic.Easings.EaseOut,
			duration: 0.8,
			onFinish: function() {
				self.palette_state = 'open';
				self.models_layer.setY(self.height - 32.5);
				self.models_layer.batchDraw();
			}
		}).play();
	};
	self.closePalette = function(){
		self.models_layer.remove();
		self.models_layer.destroy();
		self.models_layer = new Kinetic.Layer();
    	new Kinetic.Tween({
			node: self.background_layer, 
			x: 0,
			y: -260,
			easing: Kinetic.Easings.EaseIn,
			duration: 0.8,
			onFinish: function() {
				self.palette_state = 'closed';
				self.tearDown();
			}
		}).play();
	};
    self.initialize();
}