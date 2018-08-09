<?php
/*



*/

class MySQL{
	private $con;
	public $datas_chr;
	public function __construct($config){
		$this->connect($config);
	}
	private function connect($conf){
		$this->con = mysqli_connect($conf["host"],$conf["username"],$conf["password"],$conf["db_name"]) or die(mysqli_connect_error());

	}
	public function query($command_line){
		$query = mysqli_query($command_line,$this->con);
		$this->datas_ch = [];
		if ($query == True)
			{
				if (gettype($query) == "resource"){

					while($put_query = mysqli_fetch_assoc($query)){
							$this->datas_ch[] = $put_query;
					}
				}else{ return null;}
				return True;
			}
		else{return false;}
	}
	public function __destruct(){
		mysqli_close($this->con);
	} 
}




?>