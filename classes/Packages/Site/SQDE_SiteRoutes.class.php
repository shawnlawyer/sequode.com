<?php
class SQDE_SiteRoutes{
	public static $merge = false;
	public static $routes = array(
		'routes',
		'health.php',
		'Kidsn.eot',
		'Kidsn.ttf',
		'application.css',
		'3rdParty.js',
        'application.js'
	);
	public static $routes_to_methods = array(
		'routes' => 'routes',
		'health.php' => 'health',
		'Kidsn.eot' => 'sequodeKidsnEOTFont',
		'Kidsn.ttf' => 'sequodeKidsnTTFFont',
		'application.css' => 'sequodeCSS',
		'3rdParty.js' => 'thirdPartyJS',
		'application.js' => 'applicationJS'
	);
    public static function index(){
		echo SQDE_ComponentHTML::page();
		exit;
	}
	public static function health(){
		echo '1';
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
	public static function thirdPartyJS(){
		$files = array('js/jquery-2.1.4.js','js/kinetic_v5_1_0.js');
		header('Content-type: application/javascript');
		foreach($files as $file){
			echo file_get_contents($file,true);
			echo "\n";
		}
	}
	public static function sequodeCSS(){
		$files = array(
        'css/SQDE_automagic_cards.css',
        'css/SQDE_automagic_content.css',
        'css/SQDE_automagic_data.css',
        'css/SQDE_automagic_forms.css',
        'css/SQDE_automagic_layout.css',
        'css/SQDE_btn.css',
        'css/SQDE_containers.css',
        'css/SQDE_fonts.css',
        'css/SQDE_globals.css',
        'css/SQDE_icons.css',
        'css/SQDE_shortcuts.css',
        'css/SQDE_text.css',
        'css/sequode.css',
        'css/SQDE_client.css'
        );
        header("Content-type: text/css", true);
		foreach($files as $file){
			echo file_get_contents($file,true);
			echo "\n";
		}
	}
	public static function sequodeKidsnTTFFont(){
		$files = array('fonts/Kidsn.ttf');
        header('Content-type: application/font-sfnt', true);
		foreach($files as $file){
			echo file_get_contents($file,true);
		}
	}
	public static function sequodeKidsnEOTFont(){
		$files = array('fonts/Kidsn.ttf');
        header('Content-type: application/vnd.ms-fontobject', true);
		foreach($files as $file){
			echo file_get_contents($file,true);
		}
	}
    
	public static function applicationJS($closure = true,$force_SSL = true){
        
        if(SQDE_UserAuthority::isAuthenticated()){
            $files = array(
                'js/SQDE_Configuration.js',
                'js/SQDE_BaseKit.js',
                'js/SQDE_EventsKit.js',
                'js/SQDE_ShapesKit.js',
                'js/SQDE_CardsKit.js',
                'js/SQDE_Ajax.js',
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
                'js/SQDE_Ajax.js',
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
            //echo SQDE_ComponentJS::forceSSL();
        }
		foreach($files as $file){
			echo file_get_contents($file,true);
			echo "\n";
		}
        if($closure != false){
            echo '}();';
        }
	}
}