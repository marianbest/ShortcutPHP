<?php
class SP_Model
{
	function load($file)
	{
		$model_path = 'app/models/';
		$full_model = $model_path.$file.'.php';
		if(file_exists($full_model)) { include($full_model);  }
		
	}
}
?>