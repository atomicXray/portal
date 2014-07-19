<?php
// echo memory_get_usage();
// page load timer
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

include_once("class/htmlPage.php");
include_once("class/htmlTable.php");
include_once("class/htmlForm.php");
include_once("class/htmlInput.php");
include_once("class/htmlDiv.php");
include_once("class/sql.php");
include_once("class/user.php");
include_once("class/company.php");

//define classes used in this page
$searchPage = new htmlPage();
$div = new htmlDiv();
$input = new htmlInput();
$form = new htmlForm();
$sql = new sql();
$user = new user();
$company = new company();

// check if user is logged in, if not then user will be redirected to login page
$user->isLoggedIn();

//connect to Portal DB 
$sql->connect();

// testing


// if( $temp =  $company->getSearchCompanyList($searchKeyword)==0){

// 	echo "no results found";
// }


// testing

// complex checking, too much going on here:
// check this 
// updated
if (isset($_POST['searchBox'])){
	// search box had value entered
	$searchKeyword = $_POST['searchBox'];


	if ($searchKeyword =="") {
		//echo "empty";

	}

	$companyList =  $company->getSearchCompanyList($searchKeyword);

	if ($companyList ==0) {
		// unset variable for check below
		unset($companyList);

	}


} else {
	// set the variable to nothing
	$searchKeyword = "";

}





//set page title
$searchPage->pageTitle = "Portal v1.4";

$form->action="searchCompany.php";
$searchPage->addToBody($form->getFormHeader());
// top space
$div->divData = "";
$div->divClass = "searchBox1";
$searchPage->addToBody($div->getHtmlDiv());

// search box
$div->divData = "";
$div->divClass = "searchBox5";
$tempHtml = $div->getHtmlDiv();


$div->divData = '<input type="text" class="" name="searchBox" value=""/>';
$div->divClass = "searchBox4";
$tempHtml .= $div->getHtmlDiv();



$div->divData = '<input type="submit" class="loginButton" value="Search"/>';
$div->divClass = "searchBox5";
$tempHtml .= $div->getHtmlDiv();


$div->divData = $tempHtml;
$div->divClass = "searchBox2";
$searchPage->addToBody($div->getHtmlDiv());
// search box end


//  space
$div->divData = "";
$div->divClass = "resultBox1";
$searchPage->addToBody($div->getHtmlDiv());

$serverInfo = $company->getSearchServerList($companyList[0]);
print_r($serverInfo);
// Result box
if(isset($companyList)){
	// got results
	$div->divData = $company->getCompanyName($companyList[0]);
	$div->divClass = "resultBox5";
	$tempHtml = $div->getHtmlDiv();

	$div->divData = $serverInfo[0]['externalServerName'];
	// $div->divData = "<strong>Ext IP:</strong> 192.138.168.153<br />
	// user: user<br />
	// pass: pass";
	$div->divClass = "resultBox4";
	$tempHtml .= $div->getHtmlDiv();

} else {
	// no results to display
	$div->divData = "nothing found";
	$div->divClass = "resultBox5";
	$tempHtml = $div->getHtmlDiv();


	
}




$div->divData = $tempHtml;
$div->divClass = "resultBox2";
$searchPage->addToBody($div->getHtmlDiv());
// Result box end





//  space
$div->divData = "";
$div->divClass = "resultBox1";
$searchPage->addToBody($div->getHtmlDiv());

// search box
$div->divData = "Alendel";
$div->divClass = "resultBox5";
$tempHtml = $div->getHtmlDiv();


$div->divData = "<strong>Ext IP:</strong> 192.138.168.153<br />
user: user<br />
pass: pass";
$div->divClass = "resultBox4";
$tempHtml .= $div->getHtmlDiv();



$div->divData = $tempHtml;
$div->divClass = "resultBox2";
$searchPage->addToBody($div->getHtmlDiv());
// search box end





//  space
$div->divData = "";
$div->divClass = "resultBox1";
$searchPage->addToBody($div->getHtmlDiv());

// search box
$div->divData = "Alendel";
$div->divClass = "resultBox5";
$tempHtml = $div->getHtmlDiv();


$div->divData = "<strong>Ext IP:</strong> 192.138.168.153<br />
user: user<br />
pass: pass<br />
<strong>Ext IP:</strong> 192.138.168.153<br />
user: user<br />
pass: pass";
$div->divClass = "resultBox4";
$tempHtml .= $div->getHtmlDiv();



$div->divData = $tempHtml;
$div->divClass = "resultBox2";
$searchPage->addToBody($div->getHtmlDiv());
// search box end





//  space
$div->divData = "";
$div->divClass = "resultBox1";
$searchPage->addToBody($div->getHtmlDiv());

// search box
$div->divData = "Alendel";
$div->divClass = "resultBox5";
$tempHtml = $div->getHtmlDiv();


$div->divData = "<strong>Ext IP:</strong> 192.138.168.153<br />
user: user<br />
pass: pass";
$div->divClass = "resultBox4";
$tempHtml .= $div->getHtmlDiv();



$div->divData = $tempHtml;
$div->divClass = "resultBox2";
$searchPage->addToBody($div->getHtmlDiv());
// search box end









// Page timer
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);

$searchPage->addToBody('<p  style="color:#DDD;margin-left:20px;text-align:center"><br><br><br>'.$total_time.'</p>');

//output HTML page
echo $searchPage = $searchPage->getPage();
?>