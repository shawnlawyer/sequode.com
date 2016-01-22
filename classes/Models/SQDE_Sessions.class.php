<?php
use Sequode\Model\Database as DatabaseModel;

class SQDE_Sessions extends DatabaseModel {
    public $database_connection     =   'sessions_database';
	public $table                   =	'sessions';
	public function __construct() {
		parent::__construct();
		return true;
	}
}