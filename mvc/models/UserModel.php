<?php 
/**
 * 
 */
class UserModel extends DB
{
	function getLogin($username,$passWord){
		$query="SELECT * FROM users WHERE username=?;";
		$stmt=mysqli_stmt_init($this->conn);
		mysqli_stmt_prepare($stmt,$query);
		mysqli_stmt_bind_param($stmt,'s',$username);
		mysqli_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_assoc($result)){
			$checkPass=false;
			if($passWord===$row['password']){
				$checkPass=true;
			}
			if($checkPass==true){
				$_SESSION['username']=$row['username'];
				$_SESSION['fullname']=$row['full_name'];
				return true;
				exit();
			}else{
				return false;
				exit();
			}
		}else{
			return false;
			exit();
		}
	}
}
?>