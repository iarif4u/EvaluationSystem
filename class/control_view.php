<?php
/**
 * Created by Tanvir.
 * User: HP
 * Date: 10/27/2018
 * Time: 10:42 PM
 */

require_once  ('config.php');

    $conn=mysqli_connect($host,$dbuser,$password,$database);

    if (mysqli_connect_errno()){

        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    function gteAllStudent($conn) {

        $sql = "SELECT * FROM `student_reg` Where status = '1'";
        $query = mysqli_query($conn, $sql) or mysqli_error($conn);
        return $query;
    }


    function viewStudentById($conn, $std_id){
       // $std_id = $_GET['std_id'];
        $sql = "SELECT * FROM student_reg WHERE std_id = '$std_id'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
        return $row;
    }


	function gteAllCourse($conn) {

		$sql = "SELECT * FROM `course_info` Where status = '1'";
		$query = mysqli_query($conn, $sql) or mysqli_error($conn);
		return $query;
	}
	
	
	function gteAllInstructor($conn) {

		$sql = "SELECT * FROM `instructor_register` Where status = '1'";
		$query = mysqli_query($conn, $sql) or mysqli_error($conn);
		return $query;
	}


function matchForLogin($conn,$user, $password)
{
    $sql = "SELECT * FROM admins WHERE username = '$user' AND password = '$password'";

    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}