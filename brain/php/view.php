<?php
class SP_View
{
	function load($file,$data = null)
	{
		$view_path = 'app/views/';
		$full_view = $view_path.$file.'.php';
		if(is_array($data)) { extract($data); }
		if(file_exists($full_view)) { include($full_view); }
	}
}
?>