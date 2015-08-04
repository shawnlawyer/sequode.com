var SQDE_ShapesKit = function(){
	var self = this;
	self.stage = function(stdObj){
		return new Kinetic.Stage(stdObj);
	};
	self.group = function(stdObj){
		return new Kinetic.Group(stdObj);
	};
	self.circle = function(stdObj){
		return new Kinetic.Circle(stdObj);
	};
	self.box = function(stdObj){
		return new Kinetic.Rect(stdObj);
	};
	self.label = function(stdObj){
		return new Kinetic.Label(stdObj);
	};
	self.tag = function(stdObj){
		return new Kinetic.Tag(stdObj);
	};
	self.text = function(stdObj){
		return new Kinetic.Text(stdObj);
	};
    self.textButton = function(x,y,text,font,fontsize){
        var shapes = {};
        var inpObj = {
            text: text,
            fill: 'black',
            x : x,
            y : y
        };
		shapes.group = new Kinetic.Group();
        shapes.text = self.text({
            text: text,
            fontFamily: font,
            fontSize: fontsize,
            fontWeight: 800,
            fill: 'black',
            x : x+5,
            y : y+5,
			shadowColor: 'black',
			shadowBlur: 1.5
        });
		shapes.button = new Kinetic.Rect({
            x: x,
            y: y,
            width: (shapes.text.getWidth() + 10),
            height: (shapes.text.getHeight() + 10),
            fill: 'white',
            stroke: 'black',
            cornerRadius: 5,
            strokeWidth: 1
		});
		shapes.group.add(shapes.button);
		shapes.group.add(shapes.text);
		return shapes;
	};
    self.boxShadow = function(x,y,width,height){
        var layer, shapes, modifier, orignial_modifier;
        orignial_modifier = 15;
        modifier = orignial_modifier;
        shapes = {};
        shapes.group = self.group({x:x,y:y});
        layer = {};
        layer.width = width + modifier;
        layer.height = height + modifier;
		layer.x = - (modifier * .5);
        layer.y = - (modifier * .5);
        layer.box = self.box({
            x: layer.x,
            y: layer.y, 
            fill: 'lightgray',
            opacity: .10,
            width: layer.width,
            height: layer.height,
            cornerRadius: 5
		});
        shapes.layer_1 = layer;
        shapes.group.add(layer.box);
        
        layer = {};
        modifier = orignial_modifier * .66;
        layer.width = width + modifier;
        layer.height = height + modifier;
		layer.x = - (modifier * .5);
        layer.y = - (modifier * .5);
        layer.box = self.box({
            x: layer.x,
            y: layer.y,
            fill: 'lightgray',
            opacity: .25,
            width: layer.width,
            height: layer.height,
            cornerRadius: 5
		});
        shapes.layer_2 = layer;
        shapes.group.add(layer.box);
        
        layer = {};
        modifier = orignial_modifier * .33;
        layer.width = width + modifier;
        layer.height = height + modifier;
		layer.x = - (modifier * .5);
        layer.y = - (modifier * .5);
        layer.box = self.box({
            x: layer.x,
            y: layer.y,
            fill: 'lightgrey',
            opacity: .50,
            width: layer.width,
            height: layer.height,
            cornerRadius: 5
		});
        shapes.layer_3 = layer;
        shapes.group.add(layer.box);
        return shapes;
	};
    
    self.circleShadow = function(x,y,radius){
        var layer, shapes, modifier, orignial_modifier;
        orignial_modifier = 9;
        modifier = orignial_modifier;
        shapes = {};
        shapes.group = self.group({x:x,y:y});
        layer = {};
        layer.radius = radius + modifier;
        layer.circle = self.circle({
            x: 0,
            y: 0, 
            fill: 'lightgray',
            opacity: .10,
            radius: layer.radius
		});
        shapes.layer_1 = layer;
        shapes.group.add(layer.circle);
        
        layer = {};
        modifier = orignial_modifier * .66;
        layer.radius = radius + modifier;
        layer.circle = self.circle({
            x: 0,
            y: 0, 
            fill: 'lightgray',
            opacity: .25,
            radius: layer.radius
		});
        shapes.layer_2 = layer;
        shapes.group.add(layer.circle);
        
        layer = {};
        modifier = orignial_modifier * .33;
        layer.radius = radius + modifier;
        layer.circle = self.circle({
            x: 0,
            y: 0, 
            fill: 'lightgrey',
            opacity: .50,
            radius: layer.radius
		});
        shapes.layer_3 = layer;
        shapes.group.add(layer.circle);
        return shapes;
	};
    self.circleButton = function(text){
		var inpObj, link;
		var radius = 9;
        if(text.text){
            inpObj = text;
        }else{
            inpObj = config.get('model_detail','help');
            inpObj.text = text;
        }
        layer = {};
        layer.group = self.group({});
        layer.text = self.text(inpObj);
		layer.x = (layer.text.getTextWidth()/2)-.5;
        layer.y = Math.floor(layer.text.getTextHeight()/2);
        layer.radius = radius;
                
		layer.circle = self.circle({
            x: layer.x,
            y: layer.y,
            radius: layer.radius,
            stroke: 'darkgray',
            strokeWidth: 1,
            fillRadialGradientEndRadius: layer.radius,
            fillRadialGradientColorStops:[0, 'white', 0.75, 'white', 0.80, 'lightgray',  0.90, 'darkgray', 1, 'white']
		});
        
        
        layer.group.add(layer.circle);
        layer.group.add(layer.text);
        
        layer.hit_area = layer.circle;
        
        return layer;
    }
}
