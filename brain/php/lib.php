<?php

class SP_Lib
{
	function lib($file,$data = null)
	{
		$load_path = 'app/libs/';
		$full_load = $load_path.$file.'.php';
		if(is_array($data)) { extract($data); }
		if(file_exists($full_load)) { include $full_load; }
	}
	
	
}

?>