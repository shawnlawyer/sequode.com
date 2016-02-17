var SQDE_SymbolsKit = function(){
	var self = this;
    self.symbols = {};
    self.symbols.flip_card = {
        text: $('<textarea />').html("&#8617;").text(),
		fontFamily:'Arial',
		x:0,
		y:0,
		fontSize:14,
		fontStyle:'bold',
		fill:'black'
    };
    self.symbols.search = {
        text: $('<textarea />').html("&#128269;").text(),
		fontFamily:'Segoe UI Symbol',
		x:7.5,
		y:-5.5,
		fontSize:18,
		fontStyle:'bold',
		fill:'#BCC6CC',
        shadowColor: 'black',
        shadowBlur: 2,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.blank = {
        text: $('<textarea />').html("&#43;").text(),
		fontFamily:'Arial',
		x:11.5,
		y:-11.5,
		fontSize:28,
		fill:'#00FF00',
        shadowColor: 'black',
        shadowBlur: 2 ,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.run = {
        text: $('<textarea />').html("&#9654;").text(),
		fontFamily:'Wingdings',
		x:12.5,
		y:-8.5,
		fontSize:22,
		fill:'#306EFF',
        shadowColor: 'black',
        shadowBlur: 2 ,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.attributes = {
        text: $('<textarea />').html("&#123;..&#125;").text(),
		fontFamily:'Arial',
		x:12.5,
		y:-8.5,
		fontSize:16,
		fontStyle:'bold',
		fill:'yellow',
        shadowColor: 'black',
        shadowBlur: 2 ,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.clone = {
        text: $('<textarea />').html("&#178;").text(),
		fontFamily:'Arial',
		x:14.5,
		y:-12.5,
		fontSize:32,
		fill:'#00FF00',
        shadowColor: 'black',
        shadowBlur: 2 ,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.format = {
        text: $('<textarea />').html("&#8634;").text(),
		fontFamily:'Wingdings',
		x:10.5,
		y:-8.5,
		fontSize:20,
		fill:'red',
		fontStyle:'bold',
        shadowColor: 'black',
        shadowBlur: 2 ,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.remove = {
        text: $('<textarea />').html("&#10007;").text(),
		fontFamily:'Wingdings',
		x:8.5,
		y:-8.5,
		fontSize:24,
		fill:'red',
        shadowColor: 'black',
        shadowBlur: 2 ,
        shadowOffset: {x:0,y:0},
        shadowOpacity: 1.0
    };
    self.symbols.component_settings = {
        text: $('<textarea />').html("&#9825;").text(),
		fontFamily:'sans-serif',
		fontSize:11,
		fill:'black'
    };
    self.copy = function(obj){
        var newObj = {};
        for(i in obj){
            newObj[i] = obj[i];
        }
        return newObj;
    }
    self.get = function(group,obj){
        var newObj = {};
        for(i in self[group][obj]){
            newObj[i] = self[group][obj][i];
        }
        return newObj;
    }
}