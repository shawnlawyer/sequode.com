var Console = function(){
	var self = this;
    if(typeof main === 'object'){
        main.tearDown();
    }
    main = self;
    config = new Configuration();
    baseKit = new BaseKit();
    shapesKit = new ShapesKit();
    cardsKit = new Cards();
    eventsKit = new EventsKit();
    registry = new Registry();
	self.tearDown = function(){
        main, baseKit, registry, config, shapesKit, cardsKit, eventsKit = undefined;
        document.getElementsByTagName('body')[0].innerHTML = '';
	};
	self.startUp = function(){

        $(window).on('popstate', registry.popState);
		self.placeContainers();
        setTimeout(self.loadURLContext,0);
	};
    self.loadMenus = function() {
        new XHRCall({route:'cards/console/menus', inputs:['MenusContainer']});
    };
    self.loadCard = function(route, inputs) {
        new XHRCall({route:route, inputs:inputs});
    };
    self.loadURLContext = function(){
        var call = {route:baseKit.getURLVar("card"),inputs:[]};
        if(call.route === null){
            call.route = 'console/index';
        }else if(baseKit.getURLVar("id") !== null){
            call.inputs.push(baseKit.getURLVar("id"));
        }
        call.route = 'cards/' + call.route;
        new XHRCall(call);
	};
    self.placeContainers = function(){
        document.getElementsByTagName('body')[0].innerHTML = [

            '<div id="MenusContainer" class="fitBlock alignLeft"></div>',
            '<div id="BodyContainer" class="fitBlock alignLeft">',
            '<div id="bodyCardGridCardsContainer" class="body-card-grid">',
            '<div class="full-grid-cell alignCenter">',
            '<div id="CardsContainer" class="auto-grid-cell"></div>',
            '</div>',
            '</div>',
            '<div id="ContextContainer" style="position:absolute; bottom:1px; z-index: 1005;"></div>'
           ].join('');
        setTimeout(self.loadMenus,0);
	};

    self.showContext = function(text){
        document.getElementById('ContextContainer').innerHTML = text;
        console.log(text);
    };

    registry.fetch({});
}