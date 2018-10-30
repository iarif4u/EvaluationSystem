<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/26/2018
 * Time: 11:54 PM
 */

require_once('config.php');
//$conn = mysqli_connect($servername, $username, $password, $dbname);

    function valid_student($std_id, $std_name, $conn){
        if(empty($std_id)){
            return false;
        }
        else{
            $sql = "SELECT std_id, std_name FROM student_reg WHERE std_id ='$std_id' AND  std_name = '$std_name'";
            $query = mysqli_query($conn, $sql) or mysqli_error($conn);

            $row = mysqli_num_rows($query);
            if($row<=0){
                return true;
            }else{
                return false;
            }
        }
    }


function valid_course($course_id, $course_name, $conn){
    if(empty($course_id)){
        return false;
    }
    else{
        $sql = "SELECT course_id, course_name FROM course_info WHERE course_id ='$course_id' AND  course_name = '$course_name'";
        $query = mysqli_query($conn, $sql) or mysqli_error($conn);

        $row = mysqli_num_rows($query);
        if($row<=0){
            return true;
        }else{
            return false;
        }
    }
}

function valid_instructor($instructor_id, $instructor_name, $conn){
    if(empty($instructor_id)){
        return false;
    }
    else{
        $sql = "SELECT instructor_id, instructor_name FROM instructor_register WHERE instructor_id ='$instructor_id' AND  instructor_name = '$instructor_name'";
        $query = mysqli_query($conn, $sql) or mysqli_error($conn);

        $row = mysqli_num_rows($query);
        if($row<=0){
            return true;
        }else{
            return false;
        }
    }
}