<?php 

class SP_Controller{
   
  public $lib;
  public $model;
  public $view;
   public $load;
  
  function __construct()
  {
	
	$this->lib = new SP_Lib();  
	$this->model = new SP_Model(); 
	$this->view = new SP_View(); 
	  
  }

}

?>