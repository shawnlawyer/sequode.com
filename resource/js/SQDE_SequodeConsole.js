var SQDE_SequodeConsole = function(){
	var self = this;
	self.tearDown = function(){
        main, baseKit, registry, config, shapesKit, cardsKit, eventsKit = undefined;
        document.getElementsByTagName('body')[0].innerHTML = '';
	};
	self.startUp = function(){
		self.placeContainers();
        setTimeout(self.setContext,0);
	};
    if(typeof main === 'object'){
        main.tearDown();
    }
    main = self;
    config = new SQDE_Configuration();
	baseKit = new SQDE_BaseKit();
	shapesKit = new SQDE_ShapesKit();
	cardsKit = new SQDE_Cards();
	eventsKit = new SQDE_EventsKit();
	registry = new SQDE_SequodeConsoleRegistry();
	self.loadMenus = function() {
        new SQDE_XHRCall({route:'cards/console/menus', inputs:['MenusContainer']});
    };
    self.loadCard = function(route, inputs) {
        new SQDE_XHRCall({route:route, inputs:inputs});
    };
	self.setContext = function(){
        var call = {route:baseKit.getURLVar("card"),inputs:[]};
        if(call.route === null){
            call.route = 'console/index';
        }else if(baseKit.getURLVar("id") !== null){
            call.inputs.push(baseKit.getURLVar("id"));
        }
        call.route = 'cards/' + call.route;
        new SQDE_XHRCall(call);
	};
    self.placeContainers = function(){
        var html = 
           ['<div id="MenusContainer" class="fitBlock alignLeft"></div>',
            '<div id="BodyContainer" class="fitBlock alignLeft">',
            '<div id="bodyCardGridCardsContainer" class="body-card-grid">',
            '<div class="full-grid-cell alignCenter">',
            '<div id="CardsContainer" class="auto-grid-cell"></div>',
            '</div>',
            '</div>'
           ].join('');
        document.getElementsByTagName('body')[0].innerHTML = html;
        setTimeout(self.loadMenus,0);
	};
    registry.fetch({});
}