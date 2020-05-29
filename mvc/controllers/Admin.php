<?php 
class Admin extends Controller
{
	public $User;
	public $Role;
		function __construct(){
			$this->User=$this->model("UserModel");
			$this->Role=$this->model("RolesModel");
		}
	function Sayhi(){
			$this->viewadmin("masterpageadmin",[
				"page"=>"trangchu"
			]);
	}
	function Login(){		
			$this->viewadmin("login");		
	}
	function checkLogin(){
		if( isset($_POST['btnLogin']) ){

			$email=$_POST['email'];
			$pass=$_POST['password'];
			$a=$this->User->getLogin($email,$pass);
			if($a==true){
				$this->viewadmin("masterpageadmin",[
			 	"page"=>"trangchu"
				 ]);
			}else{
				$this->viewadmin("login");
			}			
		}else{
			
		}
	}
	function logout(){
		session_unset();
		session_destroy();
		$this->viewadmin("login");
	}
	function listRole(){
		$this->viewadmin("masterpageadmin",[
			 	"page"=>"roles", 
			 	"role"=>$this->Role->listRoles()
		]);
	}
	function listRoletalbe(){
		$this->viewadmins("table",[
			 	"role"=>$this->Role->listRoles()
		]);
	}
}
?>