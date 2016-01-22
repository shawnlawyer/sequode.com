<?php
use Sequode\Model\Database as DatabaseModel;

class SQDE_Packages extends DatabaseModel {
    public $database_connection     =   'accounts_database';
	public $table 					=	'packages';
	public function __construct() {
		parent::__construct();
		return true;
	}
	public function create(){
		$sql = "
			INSERT INTO {$this->table}
		 	(`id`,`sequode_id`,`owner_id`,`name`,`token`,`routes`)
			VALUES
		 	(''
			,0
			,0
			,'New Package'
            ,".$this->safedSQLData(SQDE_Session::uniqueHash('token'), 'text')."
            ,'{}'
            )
			";
		$this->database->query($sql);
		$this->id = $this->database->insertId;
		return true;
	}
}