<?php
/**
  * 
  */
 class Ajax extends Controller
 {
 	
 	public $role;
 	function __construct()
 	{
 		$this->role=$this->model("RolesModel");
 	}
 	function saveDataRole(){
 		$name=$_POST['namerole'];
 		$this->role->insertRole($name);		
 	}

 } 
 ?>
