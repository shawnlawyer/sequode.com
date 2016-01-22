<?php
class SQDE_Roles extends \Sequode\Model\Database {
    public $database_connection     =   'accounts_database';
	public $table                   =	'roles';
	public function __construct() {
		parent::__construct();
		return true;
	}
}