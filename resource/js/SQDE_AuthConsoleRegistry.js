var SQDE_AuthConsoleRegistry = function(){
	var self = this;
    self.timeout = function(key, timeout, delay){
        if (!self.timeouts[key] != null){
            window.clearTimeout(self.timeouts[key]);
        }
        self.timeouts[key] = window.setTimeout( timeout, delay );
    }
    self.timeouts = [];
    
    self.cacheBust = function(url){
        return url + (url.indexOf('?') > -1 ? '&' : '?') + '=' +  Math.round(new Date().getTime() / 1000);
    };
	self.doCallback = function(){
		var callback_args = self.copyArguements(arguments);
		var callback_method = callback_args[0];
		var callback_object = callback_args[1];
		if (typeof callback_object == "object" && typeof callback_object[callback_method] == "function"){
			if(callback_args.length == 2){
				callback_object[callback_method]();
			}else if(callback_args.length > 2){
				callback_args.reverse();
				callback_args.pop();
				callback_args.pop();
				callback_args.reverse();
				callback_object[callback_method](callback_args);
			};
		}else if (typeof callback_method === "function"){
			if( callback_args.length >= 1){
				callback_args.reverse();
				callback_args.pop();
				callback_args.reverse();
			};
			callback_method(callback_args);
		}
	};
	self.copyArguements = function(args){
		var newArgs = [];
		for(i=0; i<args.length; i++){
			newArgs[i] = args[i];
		}
		return newArgs;
	};
	self.getURLVar = function(name){
		var urlVaribles = String(document.location).split('?')[1].split('&');
		for(i=0; i<=(urlVaribles.length); i++){
			if (urlVaribles[i].split('=')[0] && urlVaribles[i].split('=')[0] == name){
				return urlVaribles[i].split('=')[1];
			}
		}
	};
}