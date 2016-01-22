<?php
class SQDE_Sessions extends \Sequode\Model\Database {
    public $database_connection     =   'sessions_database';
	public $table                   =	'sessions';
	public function __construct() {
		parent::__construct();
		return true;
	}
}