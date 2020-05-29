<?php 
	class Home extends Controller
	{
		public $Category;
		function __construct(){
			$this->Category=$this->model("Categories");
		}
		function Sayhi(){
			$this->view("masterpage1",[
				"page"=>"trangchu",
				"categories"=>$this->Category->listAll()
			]);
		}
		
	}
?>