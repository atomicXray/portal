<?php
class htmlForm
{
	//var $htmlTable;
	public $action;

	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}
	
	public function getFormHeader() {
		
		//<form name="form1" method="post" action="checklogin.php">
		//echo "<form action=\"addCompany.php\" method = \"post\">\n";
		$headerStart = "<form ";
		$headerSettings = "method = \"post\"";
		$headerEnd = ">\n";
		
		if ($this->action != ""){
			$headerSettings  .= " action=\"$this->action\"";
		}
        
		$header = $headerStart . $headerSettings . $headerEnd;
		return $header;		
	}
	public function getFormFooter() {
		
		
		$footer = "</form>\n";
		return $footer;		
	}	
/*	
	public function newTr()
	{
		$this->htmlTable .= "<tr>\n";
		//$this->htmlTable .= "</tr>";
	}
	
	public function endTr()
	{
		$this->htmlTable .= "</tr>\n";
	}	
	
	public function getHtmlTable()
	{
		//header
        // change this line:
        $tableStart = "<TABLE cellpadding=\"0\" cellspacing=\"0\" align=\"center\"";
        $tableSettings = "";
        $tableEnd = "</TABLE>";
        
		if ($this->tableBorder != ""){
			$tableSettings  .= " border=\"$this->tableBorder\"";
		}
        
        $temp = $tableStart; //begining of table
        $temp .= $tableSettings . ">\n";
		$this->htmlTable  = $temp . $this->htmlTable;
        
        
		$this->htmlTable  .= $tableEnd;
        return $this->htmlTable;
      
        

	}	

	
	public function addTd($input){
        $tdStart = "<TD";
        $tdSettings = "";
        $tdEnd = "</TD>\n";

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
	

*/	
}
