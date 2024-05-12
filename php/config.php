<?php
class databaseConnection{
	public function __construct(){
		global $conn;
		$conn = new mysqli("localhost:3308", "root", "" , "uni");
		//check error 
		if(!$conn){
			die("Database cannot established connection properly: " . $conn->connect_error());
		}

	}
}

?>
