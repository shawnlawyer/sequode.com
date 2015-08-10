<?php
header('Access-Control-Allow-Origin: https://sequode.com');
header('Access-Control-Allow-Origin: https://console.sequode.com');
header('Access-Control-Allow-Origin: https://origin.sequode.com');
class SQDE_Server {
	public static function run(){
		$route_class = false;
        $routes_classes = SQDE_ApplicationProfile::model()->routes;
		$route = 'index';
        $request_pieces = SQDE_Server::requestUriPieces();
		if(isset($request_pieces[0]) && trim($request_pieces[0]) == ''){
			foreach($routes_classes as $routes_class){
				if(in_array('index',get_class_methods($routes_class))){
					$parameters = array(); 
					unset($request_pieces);
					forward_static_call_array(array($routes_class ,'index'), $parameters);
					return;
				}
			}
		}
		if(isset($request_pieces[0]) && trim($request_pieces[0]) != ''){
			foreach($routes_classes as $routes_class){
				if(isset($request_pieces[0]) && in_array($request_pieces[0],SQDE_Routes::routes($routes_class))){
					$route = SQDE_Routes::route($routes_class, trim($request_pieces[0]));
					array_shift($request_pieces);
					$parameters = array(); 
					if(isset($request_pieces[0])){
						$parameters = $request_pieces;
					}
					unset($request_pieces);
					forward_static_call_array(array($routes_class ,$route), $parameters);
					return;
					
				}
			}
		}
		if(isset(SQDE_ApplicationProfile::model()->module)){
			return forward_static_call_array(array(SQDE_ApplicationProfile::model()->module ,'run'), array());	
		}
    }
    public static function requestUriPieces(){
        
        $request_pieces = $_SERVER['REQUEST_URI'];
        $request_pieces = explode('?',$request_pieces)[0];
        $request_pieces = explode('#',$request_pieces)[0];
        $request_pieces = explode('/',$request_pieces);
        
        array_shift($request_pieces);
        return $request_pieces;
    }
	public static function setCookie($name = '', $value = '', $expire = 0){
        setcookie($name, $value, $expire, SQDE_Application::model()->sessions->path, SQDE_Application::model()->sessions->domain);
	}
}