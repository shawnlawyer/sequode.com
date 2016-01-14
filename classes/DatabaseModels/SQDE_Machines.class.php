<?php
class SQDE_Machines extends \Sequode\Model\Database {
    public $database_connection     =   'accounts_database';
	public $table 					=	'machines';
	public function __construct() {
		parent::__construct();
		return true;
	}
	public function create(){
		$sql = "
			INSERT INTO {$this->table}
		 	(`id`,`usage_type`,`owner_id`,`name`,`domain`,`application_token`,`authentication_token`,`ip_addresses`,`webhooks`,`workflow`)
			VALUES
		 	(''
			,0
			,0
			,'New Machine'
			,''
            ,".$this->safedSQLData(SQDE_Session::uniqueHash('application_token'), 'text')."
            ,".$this->safedSQLData(SQDE_Session::uniqueHash('authentication_token'), 'text')."
            ,'[]'
            ,'{}'
            ,0
            )
			";
		$this->database->query($sql);
		$this->id = $this->database->insertId;
		return true;
	}
}