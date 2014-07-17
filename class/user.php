<?php
class user
{
	
	
	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}
	
	// check authentication of user in DB
	public function login()
	{
		$sql = new sql();
		$sql->connect();
		
		// username and password sent from form 
		$myusername = $_POST['username']; 
		$mypassword = $_POST['password'];
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);

		// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);

		$query="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";
		$result = $sql->xQuery($query);
		//$result=mysql_query($sql);


		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		session_start();
		if($count==1){
			// successfull login
			// Register $myusername, $mypassword and redirect to file "login_success.php"

			$_SESSION['myusername'] = $myusername;
			$_SESSION['mypassword'] = $mypassword;
			
			//exit();

			header("location:searchCompany.php");
		}
		else {
			// create a warning page
			echo "Wrong Username or Password";
		}
	}	



	public function isLoggedIn(){
		session_start();
		//check if user already connected
		if(!isset($_SESSION['myusername'])){
			echo "user not logged in, redirect";
			header("location:index.php");
		}

		return 1; // return true 
	}

	
}
