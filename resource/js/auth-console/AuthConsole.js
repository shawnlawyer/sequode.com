var AuthConsole = function(){
	var self = this;
	self.tearDown = function(){
        main, registry = undefined;
	};
    if(typeof main === 'object'){
        main.tearDown();
    }
	main = self;
	registry = new AuthConsoleRegistry();
    self.run = function(){
        self.startup();
	};
    self.loadMenus = function() {
        new XHRCall({route:'cards/console/menus', inputs:['MenusContainer']});
    };
    self.loadCard = function(route, inputs) {
        new XHRCall({route:route, inputs:inputs});
    };
	self.startup = function(){
		self.placeContainers();
        setTimeout(self.setContext,0);
	};
	self.setContext = function(){
        setTimeout(self.loadCard, 0, 'cards/console/index', []);
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
        setTimeout(self.loadMenus, 0);
	};
    self.run();
}