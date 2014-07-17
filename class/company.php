<?php
class company
{
	
	
	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}



	public function getCompanyName($id){
		//echo "id" . $id;

		$sql = new sql();
		$sql->connect();
		$query="SELECT companyName FROM company WHERE  companyId = '$id'";
		$result = $sql->xQuery($query);
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		$companyName = $row['companyName'];

		return $companyName;
	}
	

	// this function will send back all IDs that where matched
	public function getSearchCompanyList($searchKeyword){
		
		$sql = new sql();
		$sql->connect();

		//get list of companies search word is passes as sql statement to db
		//$query = "select * from company where companyName like '%" . $_POST['searchBox'] ."%' order by companyName";
		$query = "select companyId from company where companyName like '%" . $searchKeyword ."%' order by companyName";
		$result = $sql->xQuery($query);

		// check if any results where returned
		if(mysql_num_rows($result)==0){

		  return 0; // no companies found
		}

		$i = 0; //counter
		// $row = mysql_fetch_array($result, MYSQL_ASSOC);
		 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		 		$array [$i] = $row['companyId'];
		 		$i++;
		 }
			
		return $array;

	}




}
