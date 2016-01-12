<?php
class SQDE_ApplicationConfiguration {
	
	public function __construct(){
        $_o = (object) null;
        $access_control = array( 
            'api.sequode.com',
            'xhr.sequode.com',
            'origin.sequode.com',
            'console.sequode.com',
            'sequode.com'
        );
        $_o->access_control = $access_control;
        $sessions = json_decode('{
            "create_domain": "sequode.com",
            "domain": "sequode.com",
            "length": 86400,
            "path": "/",
            "cookie": "sequodeUser"
        }');
        $_o->sessions = $sessions;
        $site = json_decode('{
            "email":"noreply@sequode.com",
            "domain":"sequode.com",
            "display_name":"Sequode",
            "protocol":"https://"
        }');
        $_o->site = $site;
        $system_database = json_decode('{
            "host":"sequode-'.$_SERVER['WORKFLOW_ENVIRONMENT'].'.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"system"
        }');
        $sequodes_database = json_decode('{
            "host":"sequode-'.$_SERVER['WORKFLOW_ENVIRONMENT'].'.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"sequodes"
        }');
        $accounts_database = json_decode('{
            "host":"sequode-'.$_SERVER['WORKFLOW_ENVIRONMENT'].'.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"accounts"
        }');
        $sessions_database = json_decode('{
            "host":"sequode-'.$_SERVER['WORKFLOW_ENVIRONMENT'].'.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"sessions"
        }');
        /*
        $operations_database = json_decode('{
            "host":"sequode-'.$_SERVER['WORKFLOW_ENVIRONMENT'].'.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"operations"
        }');
        */
		$_o->system_database = new SQDE_MySQLDatabase($system_database->host,$system_database->user,$system_database->password,$system_database->name);
		$_o->sequodes_database = new SQDE_MySQLDatabase($sequodes_database->host,$sequodes_database->user,$sequodes_database->password,$sequodes_database->name);
		$_o->accounts_database = new SQDE_MySQLDatabase($accounts_database->host,$accounts_database->user,$accounts_database->password,$accounts_database->name);
		$_o->sessions_database = new SQDE_MySQLDatabase($sessions_database->host,$sessions_database->user,$sessions_database->password,$sessions_database->name);
		//$_o->database = new SQDE_MySQLDatabase($database->host,$database->user,$database->password,$database->name);
		if(!empty($_SERVER['WINDIR'])){
			$_o->docRoot = 'C:/wamp/www/msystem';
		}else{
			$_o->docRoot = '/opts/nginx/html';
		}
        return _o;
    }
}