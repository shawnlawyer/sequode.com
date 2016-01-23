<?php
class SQDE_BuilderApplicationConfiguration {
	
	public static function model(){
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
            "domain":"sequode.com",
            "display_name":"Sequode"
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