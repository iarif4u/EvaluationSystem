<?php 

include 'config.php';


	function addStudent($std_id, $std_name, $std_session, $std_department, $hall, $admission_year, $std_present_address, $std_permanent_address, $std_con_no, $std_email, $remark, $status=1, $conn){
		
		$sql = "INSERT INTO `student_reg`(`std_id`, `std_name`, `std_session`, `std_department`, `hall`, `admission_year`, `std_present_address`, `std_permanent_address`, `std_con_no`, `std_email`, `remark`, `status`) 
		VALUES ('$std_id', '$std_name', '$std_session', '$std_department', '$hall', '$admission_year', '$std_present_address', '$std_permanent_address', '$std_con_no', '$std_email', '$remark', '$status')";
		
		$query = mysqli_query($conn, $sql);
		
		if($query){
			
			return true;
			
		}else{
			
			return false;
		}
	}
	
	
	function addCourse($course_id,$course_name,$department,$category,$total_marks,$credit,$remark,$move_file,$status=1,$conn){

		$sql = "INSERT INTO `course_info`(`course_id`, `course_name`, `department`, `category`, `total_marks`, `credit`, `remark`, `course_content`, `status`) 
		VALUES ('$course_id', '$course_name', '$department', '$category', '$total_marks', '$credit', '$remark', '$move_file', '$status')";
		
		$query = mysqli_query($conn, $sql);
		
		if($query){
			return true;
			
		}else{
			
			return false;
			
		}
		
		
	}


	function addInstructor($instructor_id, $instructor_name, $department, $designation, $email, $contact_no, $present_address, $permanent_address, $remark, $status=1, $conn){

        $sql = "INSERT INTO instructor_register (instructor_id, instructor_name, department, designation, email, contact_no, present_address, permanent_address, remark, status)
        VALUES ('$instructor_id','$instructor_name', '$department', '$designation', '$email', '$contact_no', '$present_address', '$permanent_address', '$remark', '$status')";

        $query = mysqli_query($conn, $sql);

        if($query){

            return true;
        }else{
            return false;
        }
    }


    function assignCourse($course_name, $course_id, $session, $year, $semister, $department, $category, $instructor_name, $remark, $status=1,$conn){

	    $sql = "INSERT INTO assignCourse (course_name, course_id, session, year, semister, department, category, instructor_name, remark, status)
        VALUES('$course_name', '$course_id', '$session', '$year', '$semister', '$department', '$category', '$instructor_name', '$remark', '$status') ";


    }




?>