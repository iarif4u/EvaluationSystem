<?php
	require_once('config.php'); // This is mysql connection
    $conn=mysqli_connect($host,$dbuser,$password,$database);

	function update_stuent($conn, $id, $std_id, $std_name,$std_session,$std_department,$hall, $admission_year,$std_present_address,$std_permanent_address,$std_con_no,$std_email,$remark){
		$sql = "UPDATE student_reg SET std_id='$std_id', std_name='$std_name', std_session='$std_session',std_department='$std_department', hall='$hall', admission_year='$admission_year', std_present_address='$std_present_address', std_permanent_address='$std_permanent_address',std_con_no='$std_con_no', std_email='$std_email', remark='$remark' WHERE id = '$id'";
		$query = mysqli_query($conn,$sql) or (mysqli_error($conn));
		if($query){
			return true;
		}else{
			return false;
		}
	}



	function update_course($id,$course_id,$course_name,$department,$category,$total_marks,$credit,$remark,$update_file,$conn){
		$sql = "UPDATE course_info SET course_id='$course_id', course_name='$course_name', department='$department',category='$category', total_marks='$total_marks', credit='$credit', remark='$remark', course_content='$update_file' WHERE id = '$id'";
		$query = mysqli_query($conn,$sql) or (mysqli_error($conn));
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	function update_instructor($id,$instructor_id, $instructor_name, $department, $designation, $email, $contact_no, $present_address, $permanent_address, $remark, $conn){
		
   $sql = "UPDATE instructor_register SET instructor_id='$instructor_id', instructor_name='$instructor_name', department='$department',designation='$designation', email='$email',  	contact_no='$contact_no', present_address='$present_address', permanent_address='$permanent_address', remark='$remark' WHERE id = '$id'";
    $query = mysqli_query($conn,$sql) or (mysqli_error($conn));
	
	
    if($query){
        return true;
    }else{
        return false;
    }
}


?>