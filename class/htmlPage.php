<?php

class htmlPage {
    var $htmlPage;
    var $pageTitle;
	var $htmlBody;
	var $test;

	public function __construct() {
		// setting default values 
		$this->test= "test var in construct";
	}
    
    public function getHeader() {
        
        //$headerHtml  = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n";
        $headerHtml  = "<!DOCTYPE html>\n";
        $headerHtml .= "<html>\n";
        $headerHtml .= "<head>\n";
        $headerHtml .= "<title>" . $this->pageTitle ."</title>\n";
        $headerHtml .= "<link rel=stylesheet href=\"styles.css\" type=\"text/css\" />\n";
        $headerHtml .= "</head>\n";
        return $headerHtml;
        
    }
    
    public function getPage() {
        $this->htmlPage = $this->getHeader();
        $this->htmlPage .= "<body>\n";
		$this->htmlPage .= $this->htmlBody;
		$this->htmlPage .= "\n</body>\n";
		// print html footer
		$this->htmlPage .=  "</html>";

        
        return $this->htmlPage;
    }
    
	public function addToBody($addHtml) {
		$this->htmlBody .= $addHtml;
	}

}

?>