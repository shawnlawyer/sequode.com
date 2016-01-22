<?php
class SQDE_ApplicationConfiguration {
	
	public function __construct(){
        $sessions = json_decode('{
            "create_domain": "sequode.com",
            "domain": "sequode.com",
            "length": 86400,
            "path": "/",
            "cookie": "sequodeUser"
        }');
        $this->sessions = $sessions;
       
        if(isset(ApplicationConfiguration::model()->database)){
            foreach(ApplicationConfiguration::model()->database as $member => $database){
                $this->database->$member . '_database' = new \Sequode\Controller\Database\MySQL($database->host,$database->user,$database->password,$database->name);
            }
        }
    }
}