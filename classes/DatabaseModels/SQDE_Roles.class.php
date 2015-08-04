<?php
class SQDE_Roles extends SQDE_DatabaseModel {
    public $database_connection     =   'accounts_database';
	public $table                   =	'roles';
	public function __construct() {
		parent::__construct();
		return true;
	}
}