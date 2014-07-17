<?php
class htmlTable
{
	var $htmlTable;

	public function __construct() {
		// setting default values 
		$this->htmlTable = "";
		
    }
/*	
	public function htmlTable ($class)
	{
		$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" class=\"$class\" >\n";
		//$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"1\" width=\"840\">\n";
		
	}
*/	
	public function newTr()	{
		$this->htmlTable .= "<tr>\n";
	}
	
	public function endTr() {
		$this->htmlTable .= "</tr>\n";
	}	
	
	public function getHtmlTable() {
		$this->htmlTable = "<table cellpadding=\"0\" cellspacing=\"0\" class=\"$class\" >\n" . $this->htmlTable;
	
		$this->htmlTable  .= "</table>";
		return $this->htmlTable;
	}	
	

	function addTd($input, $width, $height, $class ="", $align="",$colspan="") {
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
}
?>