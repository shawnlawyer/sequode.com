<?php
use Sequode\Model\Database\SQL\ORM;

class SQDE_Tokens extends ORM {
    public $database_connection     =   'accounts_database';
	public $table 					=	'tokens';
	public function __construct() {
		parent::__construct();
		return true;
	}
	public function create(){
		$sql = "
			INSERT INTO {$this->table}
		 	(`id`,`owner_id`,`name`,`token`)
			VALUES
		 	(''
			,0
			,'New Token'
            ,".$this->safedSQLData(SQDE_TokenOperations::uniqueHash('SQDETOK'), 'text')."
            )
			";
		$this->database->query($sql);
		$this->id = $this->database->insertId;
		return true;
	}
}