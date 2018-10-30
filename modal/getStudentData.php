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

    $query = "SELECT * FROM student_reg WHERE id = '".$_POST["std_id"]."'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result))
    {
        $output .= '  
                <div class="row">
                    <!-- form start -->
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentName">Student Id</label>
                                <input type="text" class="form-control" id="StudentName"  value='.$row['std_id'].' disabled>
                            </div>

                            <div class="form-group">
                                <label for="StudentMobile">Student Name</label>
                                <input type="text" class="form-control" id="StudentName" value=" '.$row["std_name"].'" disabled>
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentSession">Session </label>
                                <input type="text" class="form-control" id="StudentSession" value='.$row['std_session'].' disabled>
                            </div>
                            <div class="form-group">
                                <label for="StudentDepartment">Department</label>
                                <input type="text" class="form-control" id="StudentDepartment" value='.$row['std_department'].' disabled>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentHall">Hall </label>
                                <input type="text" class="form-control" id="StudentHall" value='.$row['hall'].' disabled>
                            </div>
                            <div class="form-group">
                                <label for="StudentPresentAddress">Student Present Address</label>
                                <textarea class="form-control" rows="1"  disabled>'.$row['std_present_address'].'</textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="AdmissionYear">Admission Year</label>
                                <input type="text" class="form-control" id="AdmissionYear" value='.$row['admission_year'].' disabled>
                            </div>
                            <div class="form-group">
                                <label for="StudentPermanentAddress">Student Permanent Address</label>
                                <textarea class="form-control" rows="1"  disabled>'.$row['std_permanent_address'].'</textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentContact">Student Contact Number</label>
                                <input type="text" class="form-control" id="StudentContact" value='.$row['std_con_no'].' disabled>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentEmail">Student Email Address</label>
                                <input type="email" class="form-control" id="StudentEmail" value='.$row['std_email'].' disabled>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="Remarks">Remarks</label>
                                <textarea class="form-control" rows="1" disabled>'.$row['remark'].'</textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.box-body -->
                </div>
                ';
    }

    echo $output;
}
?>