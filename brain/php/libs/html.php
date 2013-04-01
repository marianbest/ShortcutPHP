<?php
 class html {
     
	 // GET HTML TYPE
	 function get_type($type,$lang)
	 {
		 switch($type)
		 {
			 case "xhtml":
			 $htmlcode = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//'.strtoupper($lang).'" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						  <html xmlns="http://www.w3.org/1999/xhtml" lang="'.$lang.'">';
			 break;
			 case "html4":
			 $htmlcode = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//'.strtoupper($lang).'" "http://www.w3.org/TR/html4/loose.dtd"><html>';
			 break;
			 case "html5":
			 $htmlcode = "<!DOCTYPE html><html>";
			 break;
		 }
		 echo $htmlcode;
	 }
	 
	 // GET HTML CHARSET
	 function get_meta_charset($charset = "utf-8")
	 {
		 $htmlcode = '<meta http-equiv="Content-Type" content="text/html; charset='.$charset.'"/>';
		 echo $htmlcode;
	 }
	 
	 // GET HTML TITLE
	 function get_meta_title($chars = NULL)
	 {
		 $htmlcode = '<title>'.$chars.'</title>';
		 echo $htmlcode;
	 }
	 
     // GET HTML DESCRIPTION
	 function get_meta_description($chars = NULL)
	 {
		 $htmlcode = '<meta name="description" content="'.$chars.'" />';
		 echo $htmlcode;
	 }
	 
	 // GET HTML KEYWORDS
	 function get_meta_keywords($chars = NULL)
	 {
		 $htmlcode = '<meta name="keywords" content="'.$chars.'" />';
		 echo $htmlcode;
	 }
	 
	 // HTML PLACEHOLDER FOR ALL BROWSERS INCLUDING IE7
	 function get_placeholder($text)
	 {
		 $htmlcode = "onfocus=\"if(this.value =='".$text."' ) this.value=''\" onblur=\"if(this.value=='') this.value='".$text."'\" value=\"".$text."\"";
		 echo $htmlcode;
	 }
 }
?>