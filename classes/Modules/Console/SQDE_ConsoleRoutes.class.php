<?php
class SQDE_ConsoleRoutes{
	public static $merge = false;
	public static $routes = array(
		'xhr',
		'routes',
		'cards',
		'operations',
		'collections',
		'application.css',
		'3rdParty.js',
        'application.js'
	);
	public static $routes_to_methods = array(
		'xhr' => 'xhr',
		'routes' => 'routes',
		'cards' => 'cards',
		'operations' => 'operations',
		'collections' => 'collections'
		'application.css' => 'css',
		'3rdParty.js' => 'vendorJS',
		'application.js' => 'js'
	);
    public static function index(){
		echo SQDE_ComponentHTML::page();
		exit;
	}
	public static function routes(){
        if(SQDE_UserAuthority::isSystemOwner()){
            $routes_classes = SQDE_ApplicationProfile::model()->routes;
            foreach($routes_classes as $routes_class){
                $routes = SQDE_Routes::routes($routes_class);
                echo $routes_class.'<br>';
                echo '<ul>';
                foreach($routes as $route){
                    echo '<li>';
                    echo '<a href="/'.$route.'">'.$route.'</a><br>';
                    echo '</li>';
                }
                echo '</ul>';
            }
        }
		exit;
	}
	public static function operations(){
        $packages = SQDE_PackagesHandler::models();
        foreach($packages as $package => $model){
            echo '<li> /';
            echo $model->context;
            echo '/ </li>';
            if(isset($model->xhr->operations)){
                $routes = SQDE_Routes::routes($model->xhr->operations);
                foreach($routes as $route){
                    echo '<li>';
                    echo __FUNCTION__ .'/'. $model->context .'/'. $route;
                    echo '</li>';
                }
            }
        }
		exit;
	}
	public static function cards(){
        
        $packages = SQDE_PackagesHandler::models();
        foreach($packages as $package => $model){
            echo '<li> /';
            echo $model->context;
            echo '/ </li>';
            if(isset($model->xhr->cards)){
                $routes = SQDE_Routes::routes($model->xhr->cards);
                foreach($routes as $route){
                    echo '<li>';
                    echo '<a href="/?card='. $model->context .'/'. $route .'">';
                    echo $model->context .'/'. $route;
                    echo '</a>';
                    echo '</li>';
                }
            }
        }
		exit;
	}
	public static function cardsCollection(){
        
        $packages = SQDE_PackagesHandler::models();
        echo '{';
        foreach($packages as $package => $model){
            if(isset($model->xhr->cards)){
                $routes = SQDE_Routes::routes($model->xhr->cards);
                foreach($routes as $route){
                    echo '"cards":"'. $model->context .'/'. $route .'",';
                    echo $model->context .'/'. $route;
                    echo '</a>';
                    echo '</li>';
                }
            }
        }
		exit;
	}
	public static function vendorJS(){
		$files = array('js/jquery-2.1.4.js','js/kinetic_v5_1_0.js');
		header('Content-type: application/javascript');
		foreach($files as $file){
			echo file_get_contents($file,true);
			echo "\n";
		}
	}
	public static function css(){
		$files = array(
        'css/SQDE_automagic_cards.css',
        'css/SQDE_automagic_content.css',
        'css/SQDE_automagic_data.css',
        'css/SQDE_automagic_forms.css',
        'css/SQDE_automagic_layout.css',
        'css/SQDE_btn.css',
        'css/SQDE_containers.css',
        'css/SQDE_globals.css',
        'css/SQDE_icons.css',
        'css/SQDE_shortcuts.css',
        'css/SQDE_text.css',
        'css/sequode.css',
        'css/SQDE_client.css'
        );
        header("Content-type: text/css", true);
        echo '@charset "utf-8";';
        echo "\n";
		foreach($files as $file){
			echo file_get_contents($file,true);
			echo "\n";
		}
	}
	public static function js($closure = true,$force_SSL = true){
        
        if(SQDE_UserAuthority::isAuthenticated()){
            $files = array(
                'js/SQDE_Configuration.js',
                'js/SQDE_SymbolsKit.js',
                'js/SQDE_BaseKit.js',
                'js/SQDE_EventsKit.js',
                'js/SQDE_ShapesKit.js',
                'js/SQDE_CardsKit.js',
                'js/SQDE_XHR.js',
                'js/SQDE_Model.js',
                'js/SQDE_ModelEnds.js',
                'js/SQDE_Sequencer.js',
                'js/SQDE_SequencerPalette.js',
                'js/SQDE_CollectionCards.js',
                'js/SQDE_SequodeConsoleRegistry.js',
                'js/SQDE_SequodeConsole.js',
                'js/sequode-main.js'
            );
        }else{
            $files = array(
                'js/SQDE_XHR.js',
                'js/SQDE_AuthConsole.js',
                'js/SQDE_AuthConsoleRegistry.js',
                'js/auth-main.js'
            );
        }
		header('Content-type: application/javascript');
        echo '/* Copyright (c) 2006-2015 Shawn Thomas Lawyer - shawnlawyer@gmail.com. All Rights Reserved. */';
        echo "\n";
        if($closure == true){
            echo '!function() {';
        }
        if($force_SSL == true && $_SERVER['WORKFLOW_ENVIRONMENT'] != 'development'){
            echo SQDE_ComponentJS::forceSSL();
        }
		foreach($files as $file){
			echo file_get_contents($file,true);
			echo "\n";
		}
        if($closure != false){
            echo '}();';
        }
	}
	public static function xhr(){
        
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
        if(!SQDE_PackagesHandler::is($package)){
            return;
        }
        $request_type = $call_pieces[0];
        if(!isset(SQDE_PackagesHandler::model($package)->xhr->$request_type)){
            return;
        }
        $routes_class = SQDE_PackagesHandler::model($package)->xhr->$request_type;
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

        echo SQDE_XHR::call($routes_class, $route, $args);
        return true;
    }
	public static function collections($collection='collections', $key = null){
        $collections = array('my_sequodes', 'sequode_favorites', 'palette', 'sequodes', 'tokens', 'packages');
        

        switch($collection){
			case 'my_sequodes':
                SQDE_SequodeCollections::owned();
                return;
			case 'packages':
                SQDE_PackageCollections::owned();
                return;
			case 'tokens':
                SQDE_TokenCollections::owned();
                return;
			case 'sequode_search':
                SQDE_SequodeCollections::search();
                return;
			case 'user_search':
                SQDE_UserCollections::search();
                return;
			case 'session_search':
                SQDE_SessionCollections::search();
                return;
			case 'package_search':
                SQDE_PackageCollections::search();
                return;
			case 'token_search':
                SQDE_TokenCollections::search();
                return;
			case 'sequode_favorites':
                SQDE_SequodeCollections::favorited();
                return;
			case 'palette':
                SQDE_SequodeCollections::palette();
                return;
			case 'sequodes':
                SQDE_SequodeCollections::main($key);
                return;
            default:
			case 'collections':
                echo '{';
                echo  "\n";
                foreach($collections as $loop_key => $collection){
                    if($loop_key != 0){echo ",\n";}
                    echo '"'.$collection.'":';
                    echo self::collections($collection);
                }
                
                echo  "\n";
                echo '}';
                return;
		}
	}
}