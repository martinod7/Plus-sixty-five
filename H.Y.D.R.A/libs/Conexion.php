<?php
class Connect {

	//Declare variable
	private $host;
	private $user;
	private $pass;
	private $dbName;


	function __construct($filename)
	{
		if(is_file($filename)) include $filename;
		else throw new Exception("Error Processing Request");
		

		$this->host		= $host;
		$this->user 	= $user;
		$this->pass 	= $pass;
		$this->dbName 	= $dbName;

		$this->connect();
		
	}
	
	private function connect()
	{
		if(!mysql_connect($this->host,$this->user,$this->pass))
			throw new Exception("Error: not connected to the server. ");
		else
			echo "ok";

		if(!mysql_select_db($this->dbName))
			throw new Exception("Error: No database selected");
		else
			echo "ok";
			
			
	}
	function close()
	{
		mysqli_close();
	}


}
?>