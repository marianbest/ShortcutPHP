<?php
// Load my settings
require 'app/settings/config.php';
// Lib class
require 'lib.php';

// Models class
require 'model.php';

// Views class
require 'view.php';

// Controllers class
require 'controller.php';

// Autoload libs
require 'autoload.php';

// General class
require 'general.php';
$website = new website();

if((($page==NULL)||($page=="index"))&&($subpage==NULL)) { 
$page="index"; 
}

new SP_Controller();
// Load ShortcutPHP settings
require 'settings.php';

$default_model_file=$model_path.$default_model;
$default_view_file=$view_path.$default_view;


//echo $subpage; 
if(($subpage==NULL)&&($page!=NULL))
{
$full_controller = $controller_path.$page.'.php';
} else if(($subpage!=NULL))
{
$full_controller = $controller_path.$page.'.php';

}


if(file_exists($full_controller)) 
   { 
    if($page=="index")
	 {   $subpagep=explode("/",strrev($_SERVER['REQUEST_URI']));
	     $subpage = strrev($subpagep[0]);
		 if(($subpage==NULL)||($subpage=="index"))
		 {
		 // Autoload controllers first page
		 include($full_controller);
		 // Autload index
		 if(file_exists($default_model_file)) {  include($default_model_file); }
	     if(file_exists($default_view_file)) {  include($default_view_file); } 
		 } else {
		 // Autoload controllers first page
		 include($full_controller);	 
		 $exist_subpage = 0;
			// Autoload subpages
			$full_view=$view_path.$subpage.".php";
			$class_methods = get_class_methods($page);
			foreach ($class_methods as $functionName) {
				if($functionName==$subpage) { $exist_subpage = 1; $functionGood=$functionName; }
			}
			
		
			if($exist_subpage>0)
			{
				if(file_exists($full_view)) {  include($full_view); } 
			       else { include $error_path.'404.php'; }
			} else { include $error_path.'404.php'; }
		 
		 }
	 }
	  // Autoload controllers 
	 

	 else {
		 // Autoload controllers pages
	     include($full_controller); 
      if(($subpage!=NULL)&&($page!=NULL))  
	    { 
		
		
		    $exist_subpage = 0;
			// Autoload subpages
			$class_methods = get_class_methods($page);
			foreach ($class_methods as $functionName) {
				if($functionName==$subpage) { $exist_subpage = 1; $functionGood=$functionName; }
			}
			 if($exist_subpage>0) { $clasa_controler = new $page(); $clasa_controler->$functionGood(); } 
			   else { include $error_path.'404.php';  }
	    } else if(($page!=NULL)&&(($subpage=="index")||($subpage==NULL))){
			
		 
			  $exist_subpage = 0;	
			  // Autoload index
			  
			  $class_methods = get_class_methods($page);
				foreach ($class_methods as $functionName) {
					if($functionName=="index") { $exist_subpage = 1; $functionGood=$functionName; } 
				}
				if($exist_subpage>0) { $clasa_controler = new $page(); $clasa_controler->$functionGood(); } 
				   else { include $error_path.'404.php';  }
				   
			
			  
		}
	 }
   }
    else { include $error_path.'404.php';  }
 


?>