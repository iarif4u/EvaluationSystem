<?php
/**
 * Created by Tanvir.
 * User: HP
 * Date: 10/28/2018
 * Time: 9:53 PM
 */

require_once('../class/config.php');
$conn=mysqli_connect($host,$dbuser,$password,$database);
if(isset($_POST["ins_id"]))
{
    $output = '';

    $query = "SELECT * FROM instructor_register WHERE id = '".$_POST["ins_id"]."'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result))
    {
        $output .= '  
                <div class="row">
                    <!-- form start -->
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentName">Instructor Id</label>
                                <input type="text" class="form-control" id="StudentName"  value='.$row['instructor_id'].' disabled>
                            </div>

                            <div class="form-group">
                                <label for="StudentMobile">Instructor Name</label>
                                <input type="text" class="form-control" id="StudentName" value=" '.$row["instructor_name"].'" disabled>
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentSession">Department  </label>
                                <input type="text" class="form-control" id="StudentSession" value='.$row['department'].' disabled>
                            </div>
                            <div class="form-group">
                                <label for="StudentDepartment">Designation</label>
                                <input type="text" class="form-control" id="StudentDepartment" value="'.$row['designation'].'" disabled>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentHall"> Email Address </label>
                                <input type="text" class="form-control" id="StudentHall" value='.$row['email'].' disabled>
                            </div>
                            <div class="form-group">
                                <label for="StudentPresentAddress">Contact Number</label>
                                <textarea class="form-control" rows="1"  disabled>'.$row['contact_no'].'</textarea>
                            </div>
                        </div>
                        <!-- /.col -->
						 <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="StudentHall">Present Address </label>
                                <input type="text" class="form-control" id="StudentHall" value='.$row['present_address'].' disabled>
                            </div>
                            <div class="form-group">
                                <label for="StudentPresentAddress">Permanent Address</label>
                                <textarea class="form-control" rows="1"  disabled>'.$row['permanent_address'].'</textarea>
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