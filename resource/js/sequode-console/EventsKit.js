var EventsKit = function(){
	var self = this;
    self.attachDraggableCursorEvents = function(shape){
        shape.on('touch mousedown', function() {
            document.body.style.cursor = '-webkit-grabbing';
		});
        shape.on('touchstart mouseup mouseover', function() {
            document.body.style.cursor = '-webkit-grab';
		});
        shape.on('touchend mouseout', function() {
            document.body.style.cursor = 'default';
		});
        return shape;
    };
    self.attachMoveableCursorEvents = function(shape){
        shape.on('touch mousedown mouseover', function() {
            document.body.style.cursor = 'move';
		});
        shape.on('touchstart mouseup', function() {
            document.body.style.cursor = 'move';
		});
        shape.on('touchend mouseout', function() {
            document.body.style.cursor = 'default';
		});
        return shape;
    };
}
