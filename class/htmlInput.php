<?php
class htmlInput
{
	var $class;
	var $name;
	var $value;




	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}
	
	// returns input box Html
	public function getHtmlInputBox(){
		return "<input type=\"text\" class=\"$this->class\" name=\"$this->name\" value=\"$this->value\"/>";
	}


	public function getHtmlSubmitBox(){
		return "<input type=\"submit\" class=\"$this->class\" value=\"$this->value\"/>";

	}

	
	
	
/*
	public function getHtmlInput()
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
		$this->htmlInput  = $temp . $this->htmlInput;
        
        
		$this->htmlInput  .= $tableEnd;
        return $this->htmlInput;
        
        
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
        
		$this->htmlInput  .= $tdStart;
        $this->htmlInput  .= $tdSettings . ">";
		$this->htmlInput  .= $input;
		$this->htmlInput  .= $tdEnd;
        
		//reset all td variables
		$this->tdWidth = "";
        $this->tdColspan = "";
    

	}
	
*/
	
}
