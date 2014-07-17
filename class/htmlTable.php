<?php
class htmlTable
{
	var $htmlTable;
	var $cellpadding;
	var $cellspacing;
	var $tableClass;
    var $tableBorder;
	var $tdInput;
	var $tdWidth;
	var $tdHeight;
	var $tdClass;
	var $tdAlign;
	var $tdColspan;

/*	
	public function htmlTable ($class)
	{
		$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" class=\"$class\" >\n";
		//$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"1\" width=\"840\">\n";
		
	}
*/

	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}
	
	public function newTr()	{
		$this->htmlTable .= "<tr>\n";
	}
	
	public function endTr()
	{
		$this->htmlTable .= "</tr>\n";
	}	
	
	public function getHtmlTable()
	{
		//header
        // change this line:
        //$tableStart = "<TABLE cellpadding=\"0\" cellspacing=\"0\" align=\"center\"";
		$tableStart = "<table";
        $tableSettings = "";
        $tableEnd = "</table>";

		if ($this->tableClass != ""){
			$tableSettings  .= " class=\"$this->tableClass\"";
		}
        
        $temp = $tableStart; //begining of table
        $temp .= $tableSettings . ">\n";
		$this->htmlTable  = $temp . $this->htmlTable;
        
        
		$this->htmlTable  .= $tableEnd;
        return $this->htmlTable;
        
        
        /*
		//header 
		$temp = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"1\"";
		if ($this->tdClass != ""){
			$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" class=\"$this->tdClass\" border=\"1\" >\n" . $this->htmlTable;
		} else {
			$this->htmlTable = $temp . ">\n" . $this->htmlTable;
		}
		
		//$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" class=\"$this->tdClass\" >\n" . $this->htmlTable;
		// setting default values 
		$this->htmlTable  .= "</table>";
		return $this->htmlTable;
        */
	}	

	
	public function addTd($input){
        $tdStart = "<td";
        $tdSettings = "";
        $tdEnd = "</td>\n";

		if ($this->tdWidth != ""){
			$tdSettings  .= " width=\"$this->tdWidth\"";
		}
		if ($this->tdColspan != ""){
			$tdSettings  .= " colspan=\"$this->tdColspan\"";
		}        
        
		$this->htmlTable  .= $tdStart;
        $this->htmlTable  .= $tdSettings . ">";
		$this->htmlTable  .= $input;
		$this->htmlTable  .= $tdEnd;
        
		//reset all td variables
		$this->tdWidth = "";
        $this->tdColspan = "";
    

	}
	
/*
	function addTd($input, $width, $height, $class ="", $align="",$colspan="")
	{
		$this->htmlTable  .= "<td width=\"";
		$this->htmlTable  .= $width;
		$this->htmlTable  .= "\" height=\"";
		$this->htmlTable  .= $height;
		$this->htmlTable  .= "\" colspan=\"";
		$this->htmlTable  .= $colspan;
		$this->htmlTable  .= "\" class=\"";
		$this->htmlTable  .= $class;
		$this->htmlTable  .= "\" align=\"";
		$this->htmlTable  .= $align;
		$this->htmlTable  .= "\">";		
		$this->htmlTable  .= $input;
		$this->htmlTable  .= "</td>\n";
	

	}
*/	
	
}
