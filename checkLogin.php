<?php

include_once("class/htmlPage.php");
include_once("class/htmlTable.php");
include_once("class/htmlForm.php");
include_once("class/htmlInput.php");
include_once("class/htmlDiv.php");
include_once("class/sql.php");
include_once("class/user.php");

//define classes used in this page
$loginPage = new htmlPage();

$sql = new sql();
$user = new user();


$user->login();


//connect to Portal DB move this to the class on creation to execute.
$sql->connect();


//set page title
$loginPage->pageTitle = "Portal v1.4";

//output HTML page
echo $loginPage = $loginPage->getPage();







?>