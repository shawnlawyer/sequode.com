var SQDE_SequodeConsoleRegistry = function(){
	var self = this;
	self.origin_host = 'https://origin.sequode.com';
	self.collections_feed = self.origin_host + '/collections';
    self.collections = {};
    self.active_context = false;
    self.context_log = [];
    self.setContext = function(context){
        var o = {card:'',collection:'',node:'',tearDown:function(){return;}};
        for(var i in o){
            if(i in context){
                o[i] = context[i];
            }
        }
        self.context_log.push(o);
        if(self.active_context != false){
            self.active_context.tearDown;
        }
        self.clearTypeSubscriptions('context');
        self.active_context = o;
    };
    self.active_collection = 'sequodes';
    self.update_subscriptions = [];
    self.timeouts = [];
    
	self.sequode_finder_view_nodes = [];    
    
    self.sequode_finder_last_search_hash = '';
    self.sequode_finder_last_search = '';
    
    self.fetch = function(o){
        var call = function(o){
            var route = self.collections_feed;
            for(var i in o){
                route = route + '/' + o[i];
            }
            var fetched = {};
            $.ajax({
                type: "POST",
                url:  self.cacheBust(route),
                dataType: "json",
                success: function(data){
                    o.data = data;
                    self.fetched(o);
                }
            });
        };
		setTimeout(call, 0, o);
    }
    self.fetched = function(o){
        var notify = {};
        if('collection' in o){
            notify['collection'] = o.collection;
            if('key' in o){
                self.collections[o.collection][o.key] = o.data;
                notify.key = o.key;
            }else{
                self.collections[o.collection] = o.data;
            }
        }else{
            notify['collection'] = 'collections';
            self.collections = o.data;
        }
        self.notifySubscriber(notify);
    }
    self.nextNode = function(collection, id){
        var keys = Object.keys( collection );
        var key = keys.indexOf( id );
        if((key + 1) < keys.length){
            return keys[ (key + 1) ];
        }else{
            return keys[0];
        }
        
    };

    self.previousNode = function(collection, id){
        var keys = Object.keys( collection );
        var key = keys.indexOf( id );
        var next_id = key -= 1;
        if(next_id === keys.length){
            next_id = keys.length - 1;
        }
        return keys[next_id];
    };
    self.node = function(collection, id){
        return self.collections[collection][id];
    }
    self.collection = function(collection){
        return self.collections[collection];
    }
    self.subscribeToUpdates = function(o){
        self.update_subscriptions.push(o);
    }
    self.clearTypeSubscriptions = function(type){
        var o;
        var update_subscriptions = [];
        for(var i in self.update_subscriptions){
            o = self.update_subscriptions[i];
            if(o.type != type){
                update_subscriptions.push(o);
            }
        }
        self.update_subscriptions = update_subscriptions;
    }
    self.notifySubscriber = function(o){
        var subscription;
        if(o.collection != 'collections'){
            if('key' in o){
                for(var i in self.update_subscriptions){
                    subscription = self.update_subscriptions[i];
                    if(subscription.collection != o.collection){
                        continue;
                    }
                    if('key' in subscription){
                        setTimeout(subscription.call, 0, o.key);
                    }else{
                        setTimeout(subscription.call, 0);
                    }
                }
            }else{
                for(var i in self.update_subscriptions){
                    subscription = self.update_subscriptions[i];
                    if(subscription.collection != o.collection){
                        continue;
                    }
                    setTimeout(subscription.call, 0);
                }
            }
        }else{
            main.startUp();
        }
    }
    
    
    self.timeout = function(key, timeout, delay){
        if (!self.timeouts[key] != null){
            window.clearTimeout(self.timeouts[key]);
        }
        self.timeouts[key] = window.setTimeout( timeout, delay );
    }
	self.getURLVar = function(name){
		var urlVaribles = String(document.location).split('?')[1].split('&');
		for(i=0; i<=(urlVaribles.length); i++){
			if (urlVaribles[i].split('=')[0] && urlVaribles[i].split('=')[0] == name){
				return urlVaribles[i].split('=')[1];
			}
		}
	};
    self.cacheBust = function(url){
        return url + (url.indexOf('?') > -1 ? '&' : '?') + 'cb=' +  Math.round(new Date().getTime() / 1000);
    };
}