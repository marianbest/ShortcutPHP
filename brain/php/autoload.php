<?php
// Autload files...
if($autoload!=NULL)
 {
	 if(is_array($autoload))
	 {
		 foreach($autoload as $fileload)
		 {
			  include('libs/'.$fileload.'.php'); 
		 }
	 } else include('libs/'.$autoload.'.php');
 }
?>