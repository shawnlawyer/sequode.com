<?php

class Application {
	
	public static function model(){
        
        /*
        if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], array('https://sequode.com','https://origin.sequode.com','https://console.sequode.com','https://xhr.sequode.com','https://api.sequode.com'))) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])){
                    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
                }
                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])){
                    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
                }
            }
        }*/
        
        $_o = (object) null;
        $access_control = array(
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
            "domain":"sequode.com",
            "display_name":"Sequode",
            "meta_description":"PHP Drag and Drop App Framework"
        }');
        $_o->site = $site;
        $system_email = json_decode('{
            "reply_email":"noreply@sequode.com",
            "reply_name":"Sequode",
            "from_email":"system@sequode.com",
            "from_name":"Sequode"
        }');
        $_o->email = (object) null;
        $_o->email->system = $system_email;
        
        $system_database = json_decode('{
            "host":"sequode-production.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"system"
        }');
        $sequodes_database = json_decode('{
            "host":"sequode-production.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"sequodes"
        }');
        $accounts_database = json_decode('{
            "host":"sequode-production.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"accounts"
        }');
        $sessions_database = json_decode('{
            "host":"sequode-production.ckrl02wpm4xk.us-west-2.rds.amazonaws.com",
            "user":"sequode",
            "password":"N4tur4l#$(",
            "name":"sessions"
        }');
        
        $_o->database = (object) null;
        $_o->database->system = $system_database;
        $_o->database->sequodes = $sequodes_database;
        $_o->database->accounts = $accounts_database;
        $_o->database->sessions = $sessions_database;
        
        $emailer = json_decode('{
            "relay":"SMTP",
            "auth":"true",
            "host":"email-smtp.us-east-1.amazonaws.com",
            "username":"AKIAJNA63ZDLQNFL4MDQ",
            "password":"Aiw5Lc0HBIBNsEF1czQR1voTJmr/XsAK1yF5QoHd7aaP",
            "security":"tls",
            "port":"587"
        }');
        
        $_o->emailer = $emailer;
        
        return $_o;
        
    }
    
}