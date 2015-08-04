<?php
class SQDE_SequodeRestAPIServerModule{
    public static function run(){
        $request_pieces = SQDE_Server::requestUriPieces();
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        $application_token = $request_pieces[0];
        array_shift($request_pieces);
        if(!(SQDE_Machine::exists($application_token, 'application_token'))){
            return;
        }
        SQDE_AuthenticatedUser::exists(SQDE_Machine::model()->owner_id,'id');
        SQDE_Packages::add('SQDE_SequodePackage');
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        $request_type = $request_pieces[0];
        array_shift($request_pieces);
        
        
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        
        $package = ucfirst(strtolower($request_pieces[0]));
        array_shift($request_pieces);
        
        if(!SQDE_Packages::is($package)){
            exit;
        }
        if(!isset(SQDE_Packages::model($package)->rest->$request_type)){
            exit;
        }
        $routes_class = SQDE_Packages::model($package)->rest->$request_type;
        if(!in_array($request_pieces[0], SQDE_Routes::routes($routes_class))){
            exit;
        }
        $route = SQDE_Routes::route($routes_class, $request_pieces[0]);
        
        array_shift($request_pieces);
		if(isset($_POST['args']) && !empty($_POST['args'])){
            if( 500000 < strlen(http_build_query($_POST))){ return; }
			$inputs = $_POST['args'];
            
		}elseif(isset($_GET['args']) && !empty($_GET['args'])){
            if( 500000 < strlen(http_build_query($_GET))){ return; }
			$inputs = $_GET['args'];
		}
        $inputs = $request_pieces;
        SQDE_Rest::call($routes_class, $route, $inputs);
        return true;
    }
}