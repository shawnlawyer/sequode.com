var SQDE_Configuration = function(){
	var self = this;
	self.sequencer_stage = {
		container: 'container',
		width: $(window).width(),
		height: $(window).height()-5
	};
    var model_width = 35;
    var segment_height = 16;
    var padding_height = 10;
    var stroke_width = 1;
	self.model = {};
	self.model.group = { draggable:true, dragDistance: 3};
	self.model.width = model_width;
	self.model.stroke_width = stroke_width;
	self.model.padding_height = padding_height;
	self.model.segment_height = segment_height;
	self.model.button_types = ['i','p','o'];
    self.model.button_positions_x = {'i':3.25,'p':(model_width/2),'o':model_width-3.25};
	self.model.button_type_height_adjustment = {'i':0,'p':(segment_height/2),'o':0};
    self.model.button_type_colors = {'i':'yellow','p':'#306EFF','o':'#00FF00'};
    
	self.model.tip_label = {
		x: 0,
		y: 0,
		opacity: 1.00
	};
	self.model.tip_tag = {
		fill: 'white',
		pointerDirection: 'down',
		pointerWidth: 5,
		pointerHeight: 10,
		lineJoin: 'round',
		stroke: 'black',
		strokeWidth: 1
	};
	self.tip = {};
	self.tip.text = {
		text: '',
		fontFamily: 'Calibri',
		fontSize: 14,
		padding: 4,
		fill: 'black'
	};
    
	self.tip.label = {
		x: 0,
		y: 0,
		opacity: 1.00
	};
	self.tip.tag = {
		fill: 'white',
		pointerDirection: 'down',
		pointerWidth: 5,
		pointerHeight: 10,
		lineJoin: 'round',
		stroke: 'black',
		strokeWidth: 1
	};
	self.model.tip_text = {
		text: '',
		fontFamily: 'Calibri',
		fontSize: 14,
		padding: 4,
		fill: 'black'
	};
	self.model.halo = {
		x:(model_width / 2),
		y:0, 
		width: self.model.width, 
		height: 0,
		radius: (model_width / 4), 
		fill: 'white',
		stroke: 'black',
		strokeWidth: 1
	};
	self.model.button = {
		x: 0,
		y: 0,
		radius: 6,
		fill: 'gray',
		stroke: 'black',
		strokeWidth: 1
	};
	self.model.body = {
		x:0,
		y:0,
		width: self.model.width,
		height: 0,
		name: 'mainbox',
		stroke: 'black',
		cornerRadius: 10,
		strokeWidth: 1,
        fillLinearGradientStartPoint: {x:0, y:0},
        fillLinearGradientEndPoint: {x:35,y:0},
        fillLinearGradientColorStops: [0, 'white',
                                       0.07 , 'white',
                                       0.08, 'black',
                                       0.09, 'black',
                                       0.10 , 'white',
                                       0.16 , 'white',
                                       0.18, 'black',
                                       0.19, 'black',
                                       0.20, 'white',
                                       0.80, 'white',
                                       0.81, 'black',
                                       0.82, 'black',
                                       0.84, 'white',
                                       0.90, 'white',
                                       0.91, 'black',
                                       0.92, 'black',
                                       0.93 , 'white',
                                       1, 'white'
                                       ]
	};
	self.sequencer = {};
	self.sequencer.grid_area_auger = {
		x:0,
		y:0,
		radius: 10, 
		fill: 'white',
		stroke: 'black',
		strokeWidth: 1
	};
	self.sequencer.grid_area_auger_collider = {
		x:-15,
		y:-15,
		width: 30, 
		height: 30,
        fill: 'black',
		opacity: 0.0
	};
	self.sequencer.grid_area_number = {
        x:-.5,
        y:-.5,
		fontSize:11,
		fill:'#333333',
        fontStyle:'bold'
	};
    self.sequencer.distance_y = 15;
	self.sequencer.grid_flow_line = {
		x:0,
		y:0,
		radius: (self.model.width*.33), 
		fill: 'white',
		stroke: 'black',
		strokeWidth: 1
	};
	self.sequencer.grid_cell_width = 65;
	self.sequencer.grid_padding = self.sequencer.grid_cell_width - self.model.width;
    self.model_end_head = {};
    self.model_end_head.body = {
		x:0,
		y:0,
		width: self.model.width / 2,
		height: 0,
		fill: 'white',
		stroke: 'darkgray',
		cornerRadius: 5,
		strokeWidth: 1
	};
	self.model_end_base = {};
    self.model_end_base.body = {
		x:self.model.width / 2,
		y:0,
		width: self.model.width / 2,
		height: 0,
		fill: 'white',
		stroke: 'darkgray',
		cornerRadius: 5,
		strokeWidth: self.model.stroke_width
	};
    self.copy = function(obj){
        var newObj = {};
        for(i in obj){
            newObj[i] = obj[i];
        }
        return newObj;
    }
    self.get = function(group,obj){
        var newObj = {};
        for(i in self[group][obj]){
            newObj[i] = self[group][obj][i];
        }
        return newObj;
    }
}