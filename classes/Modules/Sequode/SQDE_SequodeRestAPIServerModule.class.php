<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\Controller\Application\HTTPRequest;

class SQDE_SequodeRestAPIServerModule{
    public static function run(){
        if ($_SERVER['HTTP_HOST'] != 'api.sequode.com'){
            exit;
        }
        $request_pieces = HTTPRequest::requestUriPieces();
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        $token = $request_pieces[0];
        array_shift($request_pieces);
        if(!(SQDE_Token::exists($token, 'token'))){
            return;
        }
        SQDE_AuthenticatedUser::exists(SQDE_Token::model()->owner_id,'id');
        ModuleRegistry::add('\\'.'SQDE_SequodePackage');
        //ModuleRegistry::add('\\'.'SQDE_PackagePackage');
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
        
        if(!ModuleRegistry::is($package)){
            exit;
        }
        if(!isset(ModuleRegistry::model($package)->rest->$request_type)){
            exit;
        }
        $routes_class = ModuleRegistry::model($package)->rest->$request_type;
        if(!in_array($request_pieces[0], Sequode\Routes::routes('\\'.$routes_class))){
            exit;
        }
        $route = \Sequode\Routes::route('\\'.$routes_class, $request_pieces[0]);
        
        array_shift($request_pieces);
		if(isset($_POST['args']) && !empty($_POST['args'])){
            if( 500000 < strlen(http_build_query($_POST))){ return; }
			$inputs = $_POST['args'];
            
		}elseif(isset($_GET['args']) && !empty($_GET['args'])){
            if( 500000 < strlen(http_build_query($_GET))){ return; }
			$inputs = $_GET['args'];
		}
        $inputs = $request_pieces;
        \Sequode\Rest::call('\\'.$routes_class, $route, $inputs);
        return true;
    }
}