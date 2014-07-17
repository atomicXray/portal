<?php

include_once("class/htmlPage.php");
include_once("class/htmlTable.php");
include_once("class/htmlForm.php");
include_once("class/htmlInput.php");
include_once("class/htmlDiv.php");
include_once("class/sql.php");

//define classes used in this page
$loginPage = new htmlPage();
//$loginTable = new htmlTable();
//$headerTable = new htmlTable();
$div = new htmlDiv();
//$div2 = new htmlDiv();
$input = new htmlInput();
$form = new htmlForm();
//$sql = new sql();

//connect to Portal DB move this to the class on creation to execute.
//$sql->connect();

//set page title
$loginPage->pageTitle = "Portal v1.4";

// Build page, start here
//start adding from top of the page here

$form->action="checkLogin.php";
$loginPage->addToBody($form->getFormHeader());
// top space
$div->divData = "";
$div->divClass = "loginBox1";
$loginPage->addToBody($div->getHtmlDiv());

// Login box
$div->divData = "<strong>Portal Login</strong>";
$div->divClass = "loginBox5";
$tempHtml = $div->getHtmlDiv();

$div->divData = "Username";
$div->divClass = "loginBox3";
$tempHtml .= $div->getHtmlDiv();


$div->divData = '<input type="text" class="" name="username" value=""/>';
$div->divClass = "loginBox4";
$tempHtml .= $div->getHtmlDiv();


$div->divData = "Password";
$div->divClass = "loginBox3";
$tempHtml .= $div->getHtmlDiv();


$div->divData = '<input type="password" class="" name="password" value=""/>';
$div->divClass = "loginBox4";
$tempHtml .= $div->getHtmlDiv();


$div->divData = '<input type="submit" class="loginButton" value="Login"/>';
$div->divClass = "loginBox5";
$tempHtml .= $div->getHtmlDiv();


$div->divData = $tempHtml;
$div->divClass = "loginBox2";
$loginPage->addToBody($div->getHtmlDiv());
// login box end

$loginPage->addToBody($form->getFormFooter());

//output HTML page
echo $loginPage = $loginPage->getPage();

?>