<?php
	require_once('config.php'); // This is mysql connection
    $conn=mysqli_connect($host,$dbuser,$password,$database);

	function drop_student_by_id($conn,$id){

		$sql = "DELETE FROM student_reg WHERE id = $id";
		$query = mysqli_query($conn, $sql);
		if($query){
			return true;
		}else{
			return false;
		}		
	}	

?>