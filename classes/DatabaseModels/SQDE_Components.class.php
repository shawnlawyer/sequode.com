<?php
class SQDE_Components extends \Sequode\Model\Database {
    public $database_connection     =   'system_database';
	public $table 				    =	"components";   
	public $usage_types			=	array(0=>"swing",1=>"logical");
	public function __construct() {
		parent::__construct();
		return true;
	}
	public function create($name, $printable_name, $usage_type){
		$sql = "
			INSERT INTO {$this->table}
			(`id`,`name`,`printable_name`,`usage_type`)
			VALUES
		 	(''
			,".$this->database->safeData($name, "text")."
			,".$this->database->safeData($printable_name, "text")."
			,".$this->database->safeData($usage_type, "int").")
			";
		$this->database->query($sql);
		$this->id = $this->database->insertId;
		return true;
	}
}