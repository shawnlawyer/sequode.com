var BaseKit = function(){
	var self = this;
	self.doCallback = function(callback_method, callback_object){
		if (typeof callback_object === "object" && typeof callback_object[callback_method] === "function") {
			callback_object[callback_method]();
		}else if (typeof callback_method() === "function") {
			callback_method();
		}
	}
	self.getURLVar = function (name) {
		var url = String(document.location);
		var varibles = [];
		if(url.indexOf('?') != -1){
			if(url.split('?')[1].indexOf('&') != -1){
				varibles = url.split('?')[1].split('&');
			}else{
				varibles.push(url.split('?')[1]);
			}
		}
		for(i=0; i<=(varibles.length); i++){
			if(String(varibles[i]).indexOf('=') != -1 && varibles[i].split('=')[0] == name) {
				return varibles[i].split('=')[1];
			}
		}
		return null;
	}
}