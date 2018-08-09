<?php
class json{

	private $name,$age ,$work;
	private $line = "\n";

	public function __construct($name,$age,$work){
		$this->name = $name;
		$this->age  = $age;
		$this->work = $work;
	}

	public function pprint(){
		echo "Name : ".$this->name.$this->line;
		echo "Age  : ".$this->age.$this->line;
		echo "Work : ".$this->work.$this->line;
	}
	public function set(){
		
		$json = $this->get();
		$json[$this->name] = ["age" => $this->age ,"work" => $this->work];
		$Ejson = json_encode($json);
		file_put_contents("data.json",$Ejson);

	}

	public function get(){
		$json   = file_get_contents("data.json"); 
		$Djson = json_decode($json,true);
		return $Djson;
	}


}





?>