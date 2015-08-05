<?php
class SQDE_SiteAjaxRoutes {
	public static $merge = true;
	public static $routes = array(
		'ajax.php'
	);
	public static $routes_to_methods = array(
		'ajax.php' => 'ajax'
	);
	public static function ajax(){
        
		$call = false;
		$args = array();

		if(isset($_POST['sub']) && !empty($_POST['sub'])){
			$call = $_POST['sub'];
		}elseif(isset($_GET['sub']) && !empty($_GET['sub'])){
			$call = $_GET['sub'];
		}
        
        $call_pieces = explode('/',$call);
        if(!isset($call_pieces[1])){
            return;
        }
        if(!isset($call_pieces[2])){
            return;
        }
        $package = ucfirst(strtolower($call_pieces[1]));
        if(!SQDE_Packages::is($package)){
            return;
        }
        $request_type = $call_pieces[0];
        if(!isset(SQDE_PackagesHandler::model($package)->ajax->$request_type)){
            return;
        }
        $routes_class = SQDE_PackagesHandler::model($package)->ajax->$request_type;
        if(!in_array($call_pieces[2], SQDE_Routes::routes($routes_class))){
            return;
        }
        $route = SQDE_Routes::route($routes_class, $call_pieces[2]);
        
		if(isset($_POST['args']) && !empty($_POST['args'])){
            if( 500000 < strlen(http_build_query($_POST))){ return; }
			$args = $_POST['args'];
            
		}elseif(isset($_GET['args']) && !empty($_GET['args'])){
            if( 500000 < strlen(http_build_query($_GET))){ return; }
			$args = $_GET['args'];
		}

        echo SQDE_Ajax::call($routes_class, $route, $args);
        return true;
    }
}