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

    $query = "SELECT * FROM instructor_register WHERE id = '".$_POST["ins_id"]."' LIMIT 1";
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
                                <label for="instructor_id">Instructor Id</label>
                                <input type="text" class="form-control" id="instructor_id" name="instructor_id"  value=' .$row['instructor_id'].'>
                            </div>

                            <div class="form-group">
                                <label for="StudentMobile">Student Name</label>
                                <input type="text" class="form-control" id="instructor_name" name=" instructor_name" value=" '.$row["instructor_name"].'">
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="department">Department </label>
                                <input type="text" class="form-control" id="department" name="department" value='.$row['department'].'>
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" value="'.$row['designation'].'">
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="text" class="form-control" id="email" name="email" value='.$row['email'].'>
                            </div>
                           
							<div class="form-group">
                                <label for="AdmissionYear">Contact No</label>
                                <input type="text" class="form-control" id="contact_no" name="contact_no" value='.$row['contact_no'].'>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                <label for="StudentPermanentAddress">Present Address</label>
                                <textarea class="form-control" rows="1" name="present_address">'.$row['present_address'].'</textarea>
                            </div>
							<div class="form-group">
                                <label for="permanent_address">Permanent Address</label>
                               <textarea class="form-control" rows="1" name="permanent_address">'.$row['permanent_address'].'</textarea>
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