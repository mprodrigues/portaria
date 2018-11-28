<?php

class Sql extends PDO{
	
	private $conn;
	
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=admin_portaria","admin_root","zKQiTh0qWO");
	
	}
	
	private function setParams($statement,$parameters = array()){		
		
		foreach($statement as $key => $value){
			$this->setParam($key,$value);
			
		}
		
	}
	
	private function setParam($statement,$key,$value){		
		
		foreach($statement as $key => $value){		
			$statement->bindParam($key,$value);
			
		}
		
	}
	
	public function query($rawquery, $params = array()){
		
		$stmt = $this->conn->prepare($rawquery);
		
		$this->setParams($stmt,$params);
		
		$stmt->execute();
		
		return $stmt;	
		
	}
	
	public function select($rawquery, $params = array()){
		$stmt = $this->query($rawquery, $params);
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	}
	
}

?>