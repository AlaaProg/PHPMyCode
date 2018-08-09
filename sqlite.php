<?php
# exec query fetchArray(SQLITE3_ASSOC)
class sqlite{
	
	private $sql;

	function __construct($db){
		$this->sql = new SQLite3($db);

		if (!$this->sql){ print($this->lastErrorMsg()."\n");exit();}

	}
	function exec($sql_command){
		if ($this->sql){
			$do = $this->sql->exec($sql_command);
			if ($do){
				return "Successfully ";
			}else{
				return $this->sql->listErrorMsg();
			}
		}
	}
	function query($sql_command){
		if ($this->sql){
			$do = $this->sql->query($sql_command);
			if ($do){
				return $do->fetchArray(SQLITE3_ASSOC);
			}else{
				return $this->sql->listErrorMsg();
			}
		}
	}


}

?>