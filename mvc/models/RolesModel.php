<?php 
/**
 * 
 */
class RolesModel extends DB
{
	function listRoles(){
		$query="SELECT * FROM roles";
		$rows=mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
	function insertRole($namerole){
		$query="INSERT INTO roles VALUES(null,'$namerole')";
		mysqli_query($this->conn,$query);
	}
}
?>