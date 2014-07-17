<?php
class htmlDiv
{
	var $htmlDiv;
	var $divData;
	var $divClass;
	
	public function __construct() {
	
		
		//$this->test= "test var in construct";
	}
	
	public function newTr()	{
		$this->htmlDiv .= "<tr>\n";
	}
	
	public function endTr()
	{
		$this->htmlDiv .= "</tr>\n";
	}	
	
	public function getHtmlDiv()
	{

		
		$divStart = "<div";
        $divSettings = "";
        $divEnd = "</div>\n";

		if ($this->divClass != ""){
			$divSettings  .= " class=\"$this->divClass\"";
		}
        
        $temp = $divStart; //begining of div
        $temp .= $divSettings . ">";
		$this->htmlDiv  = $temp . $this->htmlDiv;
        $this->htmlDiv  .= $this->divData;

		$this->htmlDiv  .= $divEnd;
		$temp = $this->htmlDiv;

		//reset all td variables
		$this->htmlDiv ="";
        return $temp;
               
	}	


	
}
