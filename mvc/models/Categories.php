<?php 
class Categories extends DB{
	public function listAll(){
		$query="SELECT * FROM categories";
		$rows= mysqli_query($this->conn,$query);
		$mang=array();
		while($row=mysqli_fetch_array($rows)){
			$mang[]=$row;
		}
		return $mang;
	}
}
?>