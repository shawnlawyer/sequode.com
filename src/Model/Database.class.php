<?php
namespace Sequode\Model;
class Database extends Application {
	//Setting object members
	public $table 			=	'';
	public $orderBy			=	'id';
	public $order			=	'ASC';
	public $all				=	array();
	public $members			= 	array();
	public $relationships	= 	array();
    public $database_connection = 'system_database';
	//object constructor
	public function __construct($lookupMembers=true){
        $database = $this->database_connection;
		$this->database = self::model()->$database;
		if($lookupMembers == true){
			$this->setMembers();
		}
        return true;
	}
	//standard delete record 
	public function delete($id,$limit=1){
		$sql = "
			DELETE FROM {$this->table} WHERE id = ".$this->safedSQLData($id, "int")." LIMIT 1;
			";
		$this->database->query($sql);
		return true;
	}
	public function modelObject(){
		$object = (object) null;
		foreach($this->members as $member=>$value){
			$object->$member = $this->$member;
		}
		return $object;
	}
	//attempts to bring the full object into existence using a value and field name
	public function exists($value,$by='id') {
		if (count($this->all)!=0){return false;}
		if (!isset($this->members[$by]) || intval($this->members[$by]['unique']) == 0){return false;}
		$sql = "
			SELECT *
			FROM {$this->table}
			WHERE {$by} = ".$this->safedSQLData($value, $this->members[$by]['saveType'])."
			";
		$query = $this->database->query($sql);
		if(mysql_num_rows($query) != 0){
			$row = mysql_fetch_object($query);
			foreach($this->members as $member=>$value){
				$this->$member = $row->$member;
				$this->members[$member]['value'] = $row->$member;
			}
			//$this->id				=	$row->id;
			//$this->parameters		=	$this->getRelationship(0);
			return true;
		}
		return false;
	}
	//creates a record
	public function create(){
		if (count($this->all)!=0){return false;}
		$sql = "
			INSERT INTO {$this->table}
		 	(`id`)
			VALUES
		 	('')
			";
		$this->database->query($sql);
		$this->id = $this->database->insertId;
		return true;
	}
	public function saveChangedMembers(){
		if(count($this->all)!=0){return false;}
		if(trim($id) != '' && !$this->exists($id,'id')){return false;}
		if(!$this->id){return false;}
		foreach($this->members as $member=>$value){
			if($value !== $loop_value['value'] && $member != 'id'){
				$this->updateField($value,$member);
			}
		}
    }
	//updates a field of a record
	public function updateField($value,$member,$id=''){
		if(count($this->all)!=0){return false;}
		if(trim($id) != '' && !$this->exists($id,'id')){return false;}
		if(!$this->id){return false;}
        $save_type = (isset($this->members[$member]) && isset($this->members[$member]['saveType'])) ? $this->members[$member]['saveType'] : 'quoted';
		switch($save_type){
			case 'int':
				$sql = "
					UPDATE {$this->table}
					SET
					`{$member}` = ".$this->safedSQLData($value, "int")."
					WHERE id = ".$this->safedSQLData($this->id, "int")."
				";		
				break;
			case 'quoted':
			default:
				$sql = "
					UPDATE {$this->table}
					SET
					`{$member}` = ".$this->safedSQLData($value, "text")."
					WHERE id = ".$this->safedSQLData($this->id, "int")."
				";		
				break;
		}
		if($this->database->query($sql)){
			$this->$member = $value;
			return true;
		}else{
			return false;
		}
    }
	//increments a version or subversion
	function incrementVersion($subversions=0){
		if(count($this->all)!=0){return false;}
		if(!$this->id){return false;}
		if(!isset($this->members['version']['value'])){return false;}
		if(substr_count($this->version, '.') == 0 && intval($subversions) != 0){
			 $array = explode('.' , $this->version);
			 $version = $array[intval($subversions)];
			 $version++;
			 $array[intval($subversions)] = $version;
			 $version = implode('.', $array);
		}else{
			 $version = intval($this->versions);
			 $version++;	
		}
		$this->version = $version;
		$this->updateField($version,'version');
		return true;
	}
	// establish objects relationship
	function getRelationship($key=0){
		if(count($this->all)!=0){return false;}
		if(!$this->id){return false;}
		$object = new $this->object_relationships[$key];
		$object->getAll($this->id);
		if(count($object->all) > 0){
			return $object->all;
		}else{	
			return array();
		}
	}

	public function getAll($where='',$fields='*',$singleArray=false,$limit=''){
		$sql = "SELECT ".$fields." FROM {$this->table} ";
		if($where != '' && !is_array($where)){
			return false;
		}else if(is_array($where)){
			$temp_sql = '';
			for($i=0;$i<count($where);$i++){
                $field = '';
                $type = '';
                $operator = '=';
                $value = '';
                if(isset($this->members[$where[$i]['field']]['saveType'])){
                    $field = $where[$i]['field'];
                    $type = $this->members[$where[$i]['field']]['saveType'];
                    $value = $where[$i]['value'];
                    if(isset($where[$i]['operator'])){
                        $operator = $where[$i]['operator'];
                    }
                    if($temp_sql != ''){
                        $temp_sql .= ' AND ';
                    }
                    $temp_sql .= $this->statementWhereClauseSnippit($field,$type,$operator,$value);					
				}
			}
		}
		if($temp_sql != ''){
			$sql .= 'WHERE '.$temp_sql .' ';
		}
		$sql .= "ORDER BY {$this->orderBy} {$this->order}";
		if($limit != ''){
			$sql .= ' LIMIT '.$limit .'';
		}
		$query = $this->database->query($sql);
		$this->all = array();
        if(strpos(',',$fields) === false && $fields != '*' && $singleArray == true){
            while($row = mysql_fetch_object($query)) {
                $this->all[] = $row->$fields;
            }
        }else{
             while($row = mysql_fetch_object($query)) {
                $this->all[] = $row;
            }
        }
		if(count($this->all)>0){
			return true;
		}else{
			return false;
		}
	}
    
	public function getCount($where='',$fields='*',$singleArray=false,$limit=''){
		$sql = "SELECT COUNT(".$fields.") as results_count FROM {$this->table} ";
		if($where != '' && !is_array($where)){
			return false;
		}else if(is_array($where)){
			$temp_sql = '';
			for($i=0;$i<count($where);$i++){
                $field = '';
                $type = '';
                $operator = '=';
                $value = '';
                if(isset($this->members[$where[$i]['field']]['saveType'])){
                    $field = $where[$i]['field'];
                    $type = $this->members[$where[$i]['field']]['saveType'];
                    $value = $where[$i]['value'];
                    if(isset($where[$i]['operator'])){
                        $operator = $where[$i]['operator'];
                    }
                    if($temp_sql != ''){
                        $temp_sql .= ' AND ';
                    }
                    $temp_sql .= $this->statementWhereClauseSnippit($field,$type,$operator,$value);					
				}
			}
		}
		if($temp_sql != ''){
			$sql .= 'WHERE '.$temp_sql .' ';
		}
		$sql .= "ORDER BY {$this->orderBy} {$this->order}";
		if($limit != ''){
			$sql .= ' LIMIT '.$limit .'';
		}
		$query = $this->database->query($sql);
        while($row = mysql_fetch_object($query)) {
            $this->results_count = $row->results_count;
        }
		if($this->results_count>0){
			return true;
		}else{
			return false;
		}
	}
    
	public function getPreviousId(){
        if(!isset($this->id)){return false;}
		$sql = "SELECT id as previous_id FROM {$this->table} where  AND id < {$this->id} LIMIT 1;";
		$query = $this->database->query($sql);
        while($row = mysql_fetch_object($query)) {
            $this->previous_id = $row->previous_id;
        }
		if(isset($this->previous_id)){
			return true;
		}else{
			return false;
		}
	}
	public function getNextId(){
        if(!isset($this->id)){return false;}
		$sql = "SELECT id as next_id FROM {$this->table} where  AND id > {$this->id} LIMIT 1;";
		$query = $this->database->query($sql);
        while($row = mysql_fetch_object($query)) {
            $this->next_id = $row->next_id;
        }
		if(isset($this->next_id)){
			return true;
		}else{
			return false;
		}
	}
	public function statementWhereClauseSnippit($field,$type,$operator,$value){
		if(strpos(strtolower($this->statementWhereClauseOperator($operator,$type)), 'like') === false){
			$output = '`'.$field.'` '. $this->statementWhereClauseOperator($operator,$type) .' '. $this->safedSQLData($value,$type);
		}else{
			$output = '`'.$field.'` '. $this->statementWhereClauseOperator($operator,$type) .' '. $this->safedSQLData($this->statementWhereClauseOperatorWildcard($operator,$value),$type);
		}
		return $output;
	}
	public function statementWhereClauseOperator($operator,$type){
		switch($operator){
			case '<':
			case '>':
			case '<=':
			case '>=':
				if($type != 'int' || $type != 'float'){
					return false;
				}else{
					return $operator;
				}
			case '!=':
			case '=':
				return $operator;
			case '%=%':
			case '=%':
			case '%=':
				return 'LIKE';
			case '%!=%':
			case '!=%':
			case '!%=':
				return 'NOT LIKE';
			default:
				return false;
		}
	}
	public function statementWhereClauseOperatorWildcard($operator,$input){
		switch ($operator){
			case '%=%':
			case '%!=%':
				return '%'.$input.'%';
			case '=%':
			case '!=%':
				return $input.'%';
			case '%=':
			case '%!=':
				return '%'.$input;
			default:
				return $input;
		}
	}
	public function safedSQLData($input,$type,$localsource=false){
		$input = ($localsource) ? $input : ((get_magic_quotes_gpc()) ? $input : mysql_real_escape_string($input));
		switch (strtolower($type)){
			case 'int':
				$output = ($input != "") ? intval($input) : "NULL";
				break;
			case 'float':
				$output = ($input != "") ? "'" . floatval($input) . "'" : "NULL";
				break;
			default:
				$output = ($input != "") ? "'" . $input . "'" : "NULL";
				break;			
		}
		return $output;
	}
	public function setMembers(){
		$this->members = $this->getMembers();
	}
	public function getMembers(){
		$sql = "SHOW COLUMNS FROM {$this->table}";
		$query = $this->database->query($sql);
        $raw_members = array();
		while($row = mysql_fetch_object($query)){
			$raw_members[$row->Field] = $row;
		}
		$members = array();
		foreach($raw_members as $row){
			$members[$row->Field] = array();
			if(strpos($row->Type, '(') === false){
				$type = $row->Type;
				if(strpos($row->Type, 'long') === false){
					$length=1024;
				}else{
					$length=10240000000;
				}
			}else{
				list($type, $length) = sscanf(trim(str_replace(array('(',')'), ' ', $row->Type)), "%s %d");
			}
			$members[$row->Field]['saveType'] = $this->memberBasicType($type);
			$members[$row->Field]['basictype'] = $this->memberBasicType($type);
			$members[$row->Field]['type'] = $type;
			$members[$row->Field]['length'] = $length;
			$members[$row->Field]['default'] = $row->Default;
			$members[$row->Field]['unique'] = ($row->Key == 'UNI' || $row->Key == 'PRI') ? 1 : 0;
			$members[$row->Field]['blank'] = ($row->Null == 'YES') ? 1 : 0;
			$members[$row->Field]['key'] = (!empty($row->Key)) ? 1 : 0;
			$members[$row->Field]['extra'] = $row->Extra;
		}
		return $members;
	}
	public function memberBasicType($type){
		switch(strtolower($type)){
			case 'tinyint':
			case 'smallint':
			case 'mediumint':
			case 'bigint':
			case 'int':
				return 'int';  
			case 'double':
			case 'decimal':
			case 'float':
				return 'float';  
			default:
				return 'text';  
		}
	}
}