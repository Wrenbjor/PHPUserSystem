<?php

class DB
{
	/*** mysql hostname ***/
	private $hostname = 'localhost:/tmp/mysql/chi.sock'; // Put your host name here
	
	/*** mysql username ***/
	private $username = 'isadora'; // Put your MySQL User name here
	
	/*** mysql password ***/
	private $password = 'z98M3Koc'; // Put Your MySQL Password here
	
	/*** mysql password ***/
	private $dbName = 'chi'; // Put Your MySQL Database name here
		
	/*** database resource ***/
	public $dbh = NULL; // Database handler

	public function __construct() // Default Constructor
	{
		try
		{
			$this->dbh = new PDO("mysql:host=$this->hostname;dbname=$this->dbName", $this->username, $this->password);
			/*** echo a message saying we have connected ***/
			//echo 'Connected to database'; // Test with this string
		}
		catch(PDOException $e)
		{
			echo __LINE__.$e->getMessage();
		}
	}
	
	public function __destruct()
	{
		$this->dbh = NULL; // Setting the handler to NULL closes the connection propperly
	}
	
	public function runQuery($sql)
	{
		try
		{
			//echo $sql;
			$count = $this->dbh->exec($sql) or print_r($this->dbh->errorInfo());
		}
		catch(PDOException $e)
		{
			echo __LINE__.$e->getMessage();
		}
	}

	public function getQuery($sql)
	{
		$stmt = $this->dbh->query($sql);
	    $stmt->setFetchMode(PDO::FETCH_ASSOC);	
		return $stmt; // Returns an associative array that can be diectly accessed or looped through with While or Foreach
	}	
}
?>