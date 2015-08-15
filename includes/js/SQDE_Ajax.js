var SQDE_XHRCall = function(){
	var self = this;
    self.send = function (){
        if(arguments.length != 0 && typeof arguments[0] == "object" && 'route' in arguments[0]){
            for(var i in arguments[0]){
                self[i] = arguments[0][i];
            }
        }
        var o = new SQDE_XHRObject();
        o.route = self.route;
        o.protocol = self.protocol;
        o.protocol_version = self.protocol_version;
        o.domain = self.domain;
        o.server_route = self.server_route;
        o.method = self.method;
        o.content_type = self.content_type;
        o.prepare_handler = self.prepare_handler
        o.transport_handler = self.transport_handler;
        o.response_handler = self.response_handler;
        o.start_callback = self.start_callback;
        o.loading_callback = self.loading_callback;
        o.done_callback = self.done_callback;
        o.XMLHttpRequest(self.inputs);
        self.setDefaults();
    }
    self.setDefaults = function(){
        self.route = '';
        self.inputs = [];
        self.protocol = window.location.protocol;
        self.protocol_version = 'HTTP/1.1';
        self.domain = 'sequode.com';
        self.server_route = '/xhr'
        self.method = 'POST';
        self.content_type = 'application/x-www-form-urlencoded';
        self.prepare_handler = false;
        self.transport_handler = false;
        self.response_handler = false;
        self.start_callback = false;
        self.loading_callback = false;
        self.done_callback = false;
    }
    self.setDefaults();
    if(arguments.length != 0){
        self.send(arguments[0]);
    }
}
var SQDE_XHRObject = function(){
	var self = this;    
    self.XMLHttpRequestObject = function (){
        var o;
        try {
            o = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(e){
            try{
                o = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(e){
                o = null;
            }
        }
        if(!o && typeof XMLHttpRequest != "undefined"){
            o = new XMLHttpRequest();
        };
        return o;
    };
    self.getCompleteRoute = function(){
        return self.protocol+'//'+self.domain+self.server_route;
    };
    self.prepareData = function(d){
        if(!self.prepare_handler){
            var i,o;
            o = 'sub=' + escape(self.route);
            for (i=0; i<d.length; i++){
                o = o + '&args[]=' + escape(d[i]);
            }
            return o;
        }else{
            return self.prepare_handler();
        }
    };
    self.transportData = function(d){
        if(!self.transport_handler){
            var r;
            r = self.XMLHttpRequestObject();
            r.open(self.method, self.getCompleteRoute(), true);
            r.setRequestHeader('Content-Type', self.content_type);
            r.onreadystatechange = function() {
                self.handleResponseState(r.readyState, r.status, r.responseText);
            }
            r.send(d);
            delete r;
        }else{
            self.transport_handler(d);
        }
    };
    self.handleResponseState = function(state, status, d){
        var r;
        switch(state){
            case 1:
                break;
            case 2:
                if(self.start_callback != false){setTimeout(self.start_callback,0)};
                return;
            case 3:
                if(self.loading_callback != false){setTimeout(self.loading_callback,0)};
                return;
            case 4:
                switch(status){
                    case 200:
                    case 301:
                    case 302:
                    case 303:
                    case 304:
                        self.handleResponseData(d);
                        break;
                    default:
                        if(d != ''){
                            try{
                                console.log(d);
                            }catch(e){
                                return;
                            }
                        }
                        break;
                }
                break;
            default:
                break;
        }
        return;
    };
    self.handleResponseData = function(d){
        if(!self.response_handler){
            if(d != ''){
                try{
                    eval(d);
                }catch(e){
                    console.log(d);
                }
            }
            if(self.done_callback != false){setTimeout(self.done_callback,0)};
        }else{
            self.response_handler(d);
        }
    };
    self.XMLHttpRequest = function(parameters) {
        self.transportData(self.prepareData(parameters));
    }
}