<?php
use Sequode\Model\Database as DatabaseModel;

class SQDE_Roles extends DatabaseModel {
    public $database_connection     =   'accounts_database';
	public $table                   =	'roles';
	public function __construct() {
		parent::__construct();
		return true;
	}
}