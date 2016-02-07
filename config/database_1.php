<?php
	
class Database
{
	private $host;
	private $db_name;
	private $db_username;
	private $db_password;
	private $connection;

	public function __contruct($host,$db_name,$db_username,$db_password)
	{
		$this->host = $host;
		$this->db_name = $db_name;
		$this->db_username = $db_username;
		$this->db_password = $db_password;

		try 
		{
    		$connection = new PDO('mysql:host='.{$host}.';dbname='.{$db_name}, $db_username, $db_password);
    		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
		catch(PDOException $e) {echo 'ERROR: ' . $e->getMessage();}
	}

	public function getConnection()
	{
		return $this->connection;
	}

	public function closeConnection()
	{

	}
}
?>