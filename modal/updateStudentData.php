<?php
/**
 * Created by Tanvir.
 * User: HP
 * Date: 10/28/2018
 * Time: 9:53 PM
 */

require_once('../class/config.php');
$conn=mysqli_connect($host,$dbuser,$password,$database);
if(isset($_POST["std_id"]))
{
    $output = '';

    $query = "SELECT * FROM student_reg WHERE id = '".$_POST["std_id"]."' LIMIT 1";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result))
    {
        $output .= '<div class="row" xmlns="http://www.w3.org/1999/html">
                    <!-- form start -->
                     <form action="" method="POST" role="form">
                    <div class="box-body">
                        <div class="col-md-6">
                           
                                <input type="hidden" class="form-control" id="id" name="id"  value=' .$row['id'].'>
                           
                            <div class="form-group">
                                <label for="StudentName">Student Id</label>
                                <input type="text" class="form-control" id="StudentName" name="std_id"  value=' .$row['std_id'].'>
                            </div>

                            <div class="form-group">
                                <label for="StudentMobile">Student Name</label>
                                <input type="text" class="form-control" id="StudentName" name="std_name" value=" '.$row["std_name"].'">
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentSession">Session </label>
                                <input type="text" class="form-control" id="StudentSession" name="std_session" value='.$row['std_session'].'>
                            </div>
                            <div class="form-group">
                                <label for="StudentDepartment">Department</label>
                                <input type="text" class="form-control" id="StudentDepartment" name="std_department" value='.$row['std_department'].'>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentHall">Hall </label>
                                <input type="text" class="form-control" id="StudentHall" name="hall" value='.$row['hall'].'>
                            </div>
                            <div class="form-group">
                                <label for="StudentPresentAddress">Student Present Address</label>
                                <textarea class="form-control" rows="1"  name="std_present_address">'.$row['std_present_address'].'</textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="AdmissionYear">Admission Year</label>
                                <input type="text" class="form-control" id="AdmissionYear" name="admission_year" value='.$row['admission_year'].'>
                            </div>
                            <div class="form-group">
                                <label for="StudentPermanentAddress">Student Permanent Address</label>
                                <textarea class="form-control" rows="1" name="std_permanent_address">'.$row['std_permanent_address'].'</textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentContact">Student Contact Number</label>
                                <input type="text" class="form-control" id="StudentContact" name="std_con_no" value='.$row['std_con_no'].'>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentEmail">Student Email Address</label>
                                <input type="email" class="form-control" id="StudentEmail" name="std_email" value='.$row['std_email'].'>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="Remarks">Remarks</label>
                                <textarea class="form-control" rows="1" name="remark">'.$row['remark'].'</textarea>
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
                </div>';
    }

    echo $output;
}
?>