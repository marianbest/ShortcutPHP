<?php

class website {

	function info($type)
	{
	  $config_file = getcwd()."/app/settings/config.php";
	  include($config_file);
	  switch($type)
	  {
		  case "full_path":
		  $ret = getcwd();
		  break;
		  case "template_path":
		  $ret = getcwd()."/app/views/";
		  break;
		  case "stylesheet_url":
		  $ret = '<link href="'.$site_url.'/app/views/style.css" rel="stylesheet" type="text/css"/>';
		  break;
		  case "template_url":
		  $ret = $site_url.'/app/views/';
		  break;
	  }
	  return $ret;
	}
	
	function get_template($type)
	{
	  $ret = getcwd()."/app/views/".$type.".php";
	  include($ret);
	}
	
	function get_js($type)
	{ 
	  $config_file = getcwd()."/app/settings/config.php";
	  include($config_file);
	  $ret = $site_url."/brain/js/".$type.".js";
	  echo '<script src="'.$ret.'" type="text/javascript"></script>';
	}
	
	function get_css($type)
	{
	  $config_file = getcwd()."/app/settings/config.php";
	  include($config_file);
	  $ret = $site_url."/brain/css/".$type.".css";
	  echo '<link href="'.$ret.'" rel="stylesheet" type="text/css"/>';
	}
	
	function cookie($type)
	{
		$info = explode("|",$_COOKIE['user']);
		switch($type)
		{
			case "uid":
			$ret = $info[0];
			break;
			case "username":
			$ret = $info[1];
			break;
			case "utype":
			$ret = $info[2];
			break;
			case "ipaddress":
			$ret = $info[3];
			break;
			case "lastlogindate":
			$ret = $info[4];
			break;
			case "lastlogintime":
			$ret = $info[5];
			break;
		}
		return $ret;
	}

}


?>