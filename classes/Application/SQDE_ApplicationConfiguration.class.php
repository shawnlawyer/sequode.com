<?php
class SQDE_ApplicationConfiguration {
	public function __construct(){
        if(isset(\Sequode\ApplicationConfiguration::model()->database)){
            $this->database = (object) null;
            foreach(\Sequode\ApplicationConfiguration::model()->database as $member => $database){
                $add_member = $key. '_database';
                $this->$add_member = new \Sequode\Controller\Database\MySQL($database->host,$database->user,$database->password,$database->name);
            }
        }
    }
}