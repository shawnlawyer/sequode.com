<?php
class SQDE_ApplicationConfiguration {
	public function __construct(){
        if(isset(\Sequode\ApplicationConfiguration::model()->database)){
            foreach(\Sequode\ApplicationConfiguration::model()->database as $member => $database){
                $this->database->$member . '_database' = new \Sequode\Controller\Database\MySQL($database->host,$database->user,$database->password,$database->name);
            }
        }
    }
}