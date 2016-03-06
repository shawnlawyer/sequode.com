<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

use Sequode\Controller\Application\HTTPRequest;
use Sequode\Model\Application\Routes;
use Sequode\Controller\Application\HTTPRequest\Rest as RestRequest;

class HTTPAPIRequest{
    public static function run(){
        $request_pieces = HTTPRequest::requestUriPieces();
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        $token = $request_pieces[0];
        array_shift($request_pieces);
        if(!(\Sequode\Application\Modules\Token\Modeler::exists($token, 'token'))){
            return;
        }
        
        if ($_SERVER['HTTP_HOST'] != 'api.sequode.com'){
            exit;
        }
        \Sequode\Application\Modules\Account\Modeler::exists(\Sequode\Application\Modules\Token\Modeler::model()->owner_id,'id');
        ModuleRegistry::add(Sequode\Application\Modules\Sequode\Module::class);
        
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        $request_type = $request_pieces[0];
        array_shift($request_pieces);
        
        
        if(!isset($request_pieces[0]) || trim($request_pieces[0]) == ''){
            exit;
        }
        
        $context = strtolower($call_pieces[1]);
        $modules_context = ModuleRegistry::modulesContext();
        if(!array_key_exists($context, $modules_context)){
            return;
        }
        $module_registry_key = $modules_context[$context];    
        
        array_shift($request_pieces);
        
        $module = ModuleRegistry::module($module_registry_key);
        
        if(!isset($module::model()->rest->$request_type)){
            exit;
        }
        $routes_class = $module::model()->rest->$request_type;
        if(!in_array($request_pieces[0], Routes::routes('\\'.$routes_class))){
            exit;
        }
        $route = Routes::route('\\'.$routes_class, $request_pieces[0]);
        
        array_shift($request_pieces);
		if(isset($_POST['args']) && !empty($_POST['args'])){
            if( 500000 < strlen(http_build_query($_POST))){ return; }
			$inputs = $_POST['args'];
            
		}elseif(isset($_GET['args']) && !empty($_GET['args'])){
            if( 500000 < strlen(http_build_query($_GET))){ return; }
			$inputs = $_GET['args'];
		}
        $inputs = $request_pieces;
        RestRequest::call('\\'.$routes_class, $route, $inputs);
        return true;
    }
}