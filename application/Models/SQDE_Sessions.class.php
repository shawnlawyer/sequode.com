<?php
use Sequode\Model\Database\SQL\ORM;

class SQDE_Sessions extends ORM {
    public $database_connection     =   'sessions_database';
	public $table                   =	'sessions';
	public function __construct() {
		parent::__construct();
		return true;
	}
}