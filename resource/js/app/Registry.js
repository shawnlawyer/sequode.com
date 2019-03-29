var Registry = function(){
    var self = this;

    self.active_collection = '';
    self.update_subscriptions = [];
    self.timeouts = [];
    self.collections_feed = '/collections';
    self.collections = {};
    self.active_context = {};
    self.context_history = [];
    self.active_context_history_key = -1;
    self.last_history_position = false;
    self.setContext = function(context){
        var o = {card:'',collection:'',node:'',tearDown:function(){}};
        for(var i in o){
            if(i in context){
                o[i] = context[i];
            }
        }
        console.log('history.state :');
        console.log(history.state);
        if(self.active_context_history_key === -1){
            if(history.state === null) {
                console.log('state is null.');
                console.log(o);
                self.setActiveContext(o, true);
            }else if(history.state.position == history.length){

                console.log('top of the stack.');
                console.log('history.state.position: ' + history.state.position);
                console.log('history.length: ' + history.length);
                if (self.compareContexts(o, eval(history.state.context)) === true) {
                    console.log('page refreshed.');
                    console.log(o);
                    self.setActiveContext(o, false);
                } else{
                    console.log('how do i get here?.');
                    console.log(o);
                }
                if (self.active_context_history_key === -1) {
                    self.active_context_history_key++;
                }
            }else if(history.state.position != history.length){
                console.log('we are floating around in the history but don\'t have a record of this context in our log');
                console.log('history.state.position: ' + history.state.position);
                console.log('history.length: ' + history.length);
                if(self.compareContexts(o, eval(history.state.context))){
                    console.log('a context was re-requested so lets avoid loading it\'s context.');
                    console.log(o);
                    self.setActiveContext(o, false);
                }else{
                    console.log('a new context was requested so lets load it.');
                    console.log(o);
                    //self.rebuildHistory();
                    self.setActiveContext(o, true);
                }
            }

            if (self.active_context_history_key === -1) {
                self.active_context_history_key++;
            }
            return;
        }
        console.log('history.state.position: ' + history.state.position);
        console.log('history.length: ' + history.length);
        if(self.compareContexts(o, self.active_context)) {
            console.log('the active context was reloaded from an xhr call response.');
            console.log(o);
            self.setActiveContext(o, false);
        }else if(self.compareContexts(o, self.context_history[self.active_context_history_key])){
            console.log('this seems to happens when the back/forward button is pressed. the context_history has a key matching the active_context_history_key for the context.');
            console.log(o);
            self.setActiveContext(o, false);
        }else if(self.compareContexts(o, eval(history.state.context))){
            console.log('this seems to happens when the forward button is pressed top of the history stack? the context beinging loaded is the same as the history.state.context.');
            console.log(o);
            self.setActiveContext(o, false);
        }else{
            console.log('new context requested?.');
            console.log(o);
            self.setActiveContext(o, true);
        }

    };
    self.popState = function(e)  {
        console.log('history.length: ' + history.length);
        console.log('self.last_history_position: ' + self.last_history_position);
        if (history.state != null) {
            console.log('history.state.position: ' + history.state.position);
            if (self.last_history_position > history.state.position) {
                if (self.active_context_history_key - 1 >= 0) {
                    self.active_context_history_key--;
                    console.log('back button pressed.');
                }
            } else if (self.last_history_position < history.state.position) {
                if (self.active_context_history_key + 1 <= self.context_history.length - 1) {
                    self.active_context_history_key++;
                    console.log('forward button pressed.');
                }
            } else {
                console.log('refresh button was pressed');
            }
        }else{

            console.log('this is a new session or user cleared history and requested a card via url');
        }
        main.loadURLContext();

    }

    self.setActiveContext = function(o, new_context){
        if(new_context === true){
            state = {url:'', data:{position:history.length, context:self.cleanCloneContexts(o)}, title:''};
            state.url = '?card=' + o.card.replace('cards/', '');
            if(o.node !== ''){
                state.url += '&id=' + o.node;
            }
            console.log('new state :');
            console.log(state);
            if(history.state !== null){
                console.log('pushState');
                history.pushState(state.data, state.title, state.url);
                self.active_context_history_key++;
                self.context_history.push(o);
                self.last_history_position = history.length;
            }else{
                console.log('replaceState');
                history.replaceState(state.data, state.title, state.url);
                self.active_context_history_key;
                self.context_history[self.active_context_history_key] = o;
            }
        }
        if(self.active_context !== false){
            self.active_context.tearDown;
        }

        console.log('old active context:');
        console.log(self.active_context );

        self.clearTypeSubscriptions('context');
        self.active_context = o;
        self.active_collection = o.collection;

        console.log('new active context:');
        console.log(self.active_context );
        console.log('active collection: ' + self.active_collection);

    };

    self.compareContexts = function(a, b){

        console.log('compare objects');
        console.log('a:');
        console.log(a);
        console.log('b:');
        console.log(b);
        if(typeof b !== 'object'){
            //console.log('b is not an object');
            //console.log(b);
           return false;
        }
        for(var i in a){
            if(typeof a[i] === 'function'){
                continue;
            }
            if(i in b){
                if((typeof a[i] === 'object' || typeof a[i] === 'array') && self.compareContexts(a[i], b[i]) === false){
                    return false;
                }else if(a[i] !== b[i]){
                    return false;
                }
            }else{
                return false;
            }
        }
        return true;
    };

    self.cleanCloneContexts = function(a){
        var b = {};
        for(var i in a){
            if(typeof a[i] === 'function'){
                continue;
            }
            if(typeof a[i] === 'object' || typeof a[i] === 'array'){
                b[i] = self.cleanCloneContexts(a[i]);
            }else{
                b[i] = a[i];
            }
        }
        return b;
    };

    self.rebuildHistory = function(){

        var new_context_history = [];
        if(self.active_context_history_key !== self.context_history.length - 1){
            for( var i in self.context_history){
                if(i > self.active_context_history_key - 1){
                    new_context_history.push(self.context_history[i]);
                }else{
                    break;
                }
            }
            self.context_history = new_context_history;
        }
    };
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
    };

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
    };

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
    };

    self.collection = function(collection){
        return self.collections[collection];
    };

    self.subscribeToUpdates = function(o){
        self.update_subscriptions.push(o);
    };

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
    };

    self.notifySubscriber = function(o){
        var subscription;
        if('collection' in o && o.collection != 'collections'){
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
    };

    self.timeout = function(key, timeout, delay){
        if (!self.timeouts[key] != null){
            window.clearTimeout(self.timeouts[key]);
        }
        self.timeouts[key] = window.setTimeout( timeout, delay );
    };

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
};