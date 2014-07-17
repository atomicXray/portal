<?php
class sql
{
	//var $htmlTable;



	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}
	
	public function connect()	{
		
		//$this->htmlTable .= "<tr>\n";

		// db login info
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="portal"; // Database name 
		//$tbl_name="members"; // Table name

		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB, doesn't exist $db_name on this server");

	}


	public function xQuery($query)
	{
		if($result = mysql_query($query))
		{
			// to display query generated enable this.
			//echo "query executed: " . $query ."<br>";
		} else
		{
			echo "Error running query: " . mysql_error() . "<br>" . "<b>query: </b>" . $query;
			exit();
		}
		return $result;
	}

}
