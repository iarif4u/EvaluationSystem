<?php
/**
 * Created by Tanvir.
 * User: HP
 * Date: 10/28/2018
 * Time: 9:53 PM
 */

require_once('../class/config.php');
$conn=mysqli_connect($host,$dbuser,$password,$database);
if(isset($_POST["course_id"]))
{
    $output = '';

    $query = "SELECT * FROM  course_info WHERE id = '".$_POST["course_id"]."' LIMIT 1";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result))
    {
		
        $output .= '<div class="row">
                    <!-- form start -->
                    <form action="" method="POST" role="form" enctype ="multipart/form-data">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CourseName">Course Id</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value=' .$row['id'].'>
                                    <input type="text" class="form-control" id="course_id" name="course_id" value=' .$row['course_id'].'>
                                </div>

                                <div class="form-group">
                                    <label for="CourseMobile">Course Name</label>
                                    <input type="text" class="form-control" id="course_name" name="course_name" value=" '.$row["course_name"].'">
                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CourseDepartment">Department </label>
                                    <input type="text" class="form-control" id="department" name="department" value=' .$row['department'].'>
                                </div>
                                <div class="form-group">
                                    <label for="CategoryDetails">Category/Details</label>
                                    <input type="text" class="form-control" id="category" name="category" value=' .$row['category'].'>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Content</label>
                                   <input type="file" name="courseContent" id="courseContent">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="TotalMarks">Total Marks</label>
                                    <input type="number" class="form-control" id="total_marks" name="total_marks" value=' .$row['total_marks'].'>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Credit">Credit</label>
                                    <input type="number" class="form-control" id="credit" name="credit" value=' .$row['credit'].'>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <textarea class="form-control" rows="1" name="remark">' .$row['remark'].'</textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.box-body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <input type="submit" value="Submit" name="update" class="btn btn-primary"/>
                        </div>
                    </form>
                    <!-- / form -->
                </div>
                <!-- /.row -->';
    }

    echo $output;
}
?>