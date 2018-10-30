<?php
require_once 'header.php';
require_once 'leftSide.php';
require_once 'class/config.php';
require_once 'class/control_reg.php';
require_once 'class/control_valid.php';
require_once 'class/control_view.php';
require_once 'class/control_update.php';



$conn=mysqli_connect($host,$dbuser,$password,$database);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student List
            <small>Student Information List </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Student List </li>
        </ol>
    </section>
    <?php
    if(isset($_POST['save'])){

        $std_id = mysqli_real_escape_string($conn, $_POST['std_id']);
        $std_name = mysqli_real_escape_string($conn, $_POST['std_name']);
        $std_session = mysqli_real_escape_string($conn, $_POST['std_session']);
        $std_department = mysqli_real_escape_string($conn, $_POST['std_department']);
        $hall = mysqli_real_escape_string($conn, $_POST['hall']);
        $admission_year = mysqli_real_escape_string($conn, $_POST['admission_year']);
        $std_present_address = mysqli_real_escape_string($conn, $_POST['std_present_address']);
        $std_permanent_address = mysqli_real_escape_string($conn, $_POST['std_permanent_address']);
        $std_con_no = mysqli_real_escape_string($conn, $_POST['std_con_no']);
        $std_email = mysqli_real_escape_string($conn, $_POST['std_email']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);


        $valid_student = valid_student($std_id, $std_name, $conn);


        if($valid_student == true){

            if ((!empty($std_id)) || (!empty($std_name))) {

                if(strlen($_POST['std_con_no']) >= 11){
                    if(!filter_var($_POST['std_email'], FILTER_VALIDATE_EMAIL)) {
                        echo '<div class="pad margin no-print">
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Invalid E-Mail Address !!
								</div>
                            </div>';
                    }else {
                        $get_std_info = addStudent($std_id, $std_name, $std_session, $std_department, $hall, $admission_year, $std_present_address, $std_permanent_address, $std_con_no, $std_email, $remark, $status = 1, $conn);

                        if($get_std_info == true){  ?>

                            <div class="pad margin no-print">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    New Student Add Success .
                                </div>
                            </div>

                        <?php } else{   ?>


                            <div class="pad margin no-print">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    Something Weant Wrong !! Please Try Again !!
                                </div>
                            </div>

                        <?php     } }
                }else {   ?>

                    <div class="pad margin no-print">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                            Please Provide Valid Contact Number !!
                        </div>
                    </div>

                <?php 	}

            }else{  ?>

                <div class="pad margin no-print">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        Some Field Are Missing !! Please Fill All Field !!
                    </div>
                </div>

            <?php        }

        }else{  ?>

            <div class="pad margin no-print">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    The Student Already Exits !!
                </div>
            </div>

        <?php      }

    }


    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $std_id = mysqli_real_escape_string($conn, $_POST['std_id']);
        $std_name = mysqli_real_escape_string($conn, $_POST['std_name']);
        $std_session = mysqli_real_escape_string($conn, $_POST['std_session']);
        $std_department = mysqli_real_escape_string($conn, $_POST['std_department']);
        $hall = mysqli_real_escape_string($conn, $_POST['hall']);
        $admission_year = mysqli_real_escape_string($conn, $_POST['admission_year']);
        $std_present_address = mysqli_real_escape_string($conn, $_POST['std_present_address']);
        $std_permanent_address = mysqli_real_escape_string($conn, $_POST['std_permanent_address']);
        $std_con_no = mysqli_real_escape_string($conn, $_POST['std_con_no']);
        $std_email = mysqli_real_escape_string($conn, $_POST['std_email']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);

           if(strlen($_POST['std_con_no']) >= 11){
                    if(!filter_var($_POST['std_email'], FILTER_VALIDATE_EMAIL)) {
                        echo '<div class="pad margin no-print">
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Invalid E-Mail Address !!
								</div>
                            </div>';
                    }else {
                        $update = update_stuent($conn, $id, $std_id, $std_name,$std_session,$std_department,$hall, $admission_year,$std_present_address,$std_permanent_address,$std_con_no,$std_email,$remark);
                        if($update == true){  ?>

                            <div class="pad margin no-print">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    Student Data Update Success .
                                </div>
                            </div>

                        <?php } else{   ?>


                            <div class="pad margin no-print">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    Something Weant Wrong !! Please Try Again !!
                                </div>
                            </div>

                        <?php     } }
                }else {   ?>

                    <div class="pad margin no-print">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                            Please Provide Valid Contact Number !!
                        </div>
                    </div>

                <?php }
        }

     if(isset($_POST['savecsv'])){
            if($_FILES['file']['name']){
                $filename = explode(".", $_FILES['file']['name']);
                if($filename[1] == 'csv'){
                    $handler = fopen($_FILES['file']['tmp_name'], "r");
                    $stored = [];
                    while($data = fgetcsv($handler)){
                        if (in_array($data[0], $stored)) { continue;}
                        $sql  = ("INSERT INTO `student_reg` (std_id, std_name, std_session, std_department, hall, admission_year, std_present_address, std_permanent_address, std_con_no, std_email, remark) 
                        VALUES('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]')");

                        $query = mysqli_query($conn, $sql) or mysqli_error($conn);
                        $stored[] = $data[0];

                    }
                    if($query) {    ?>
                        <div class="pad margin no-print">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                CSV File Upload Success !!
                            </div>
                        </div>

                     <?php
                        fclose($handler);
                    } else {   ?>

                        <div class="pad margin no-print">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                Faild Upload!!
                            </div>
                        </div>

               <?php      }
                }
            }



        }

        ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addStudentarea"> <i class="fa fa-th-list" aria-hidden="true"></i> Add New Student </a>  </h3>
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addStudentareacsv"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Add New Student CSV File uploader </a>  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body dc-table-style">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Stu ID</th>
                                <th>Stu Name</th>
                                <th>Session</th>
                                <th>Department</th>
                                <th>Hall</th>
                                <th>Year</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            include_once  'class/control_view.php';
                            $getStudentData = gteAllStudent($conn);

                            while ($view = mysqli_fetch_assoc($getStudentData)) {
                                extract($view);
                                ?>
                                <tr>
                                    <td><?php echo $view['std_id']; ?></td>
                                    <td><?php echo $view['std_name']; ?></td>
                                    <td><?php echo $view['std_session']; ?></td>
                                    <td><?php echo $view['std_department']; ?></td>
                                    <td><?php echo $view['hall']; ?></td>
                                    <td><?php echo $view['admission_year']; ?></td>
                                    <td><?php echo $view['std_con_no']; ?></td>
                                    <td>
                                        <a href="javascript:void(0);" input type="button" name="view"  id="<?php echo $view["id"]; ?>" class="btn btn-primary btn-xs view_data"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="javascript:void(0);" input type="button" name="Update"  id="<?php echo $view["id"]; ?>" class="btn btn-info btn-xs update_data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a delete-id='<?php echo $view["id"]; ?>' class='btn btn-danger btn-xs delete-object'><i class="fa fa-times" aria-hidden="true"></i></a>

                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Stu ID</th>
                                <th>Stu Name</th>
                                <th>Session</th>
                                <th>Department</th>
                                <th>Hall</th>
                                <th>Year</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- start Add Student Area-->
<div class="modal fade" id="modal-addStudentarea">


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Student Register </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- form start -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="StudentName">Student Id</label>
                                    <input type="text" class="form-control" id="std_id" name="std_id" placeholder="Enter The Student ID" required="1">
                                </div>

                                <div class="form-group">
                                    <label for="StudentMobile">Student Name</label>
                                    <input type="text" class="form-control" id="std_name" name="std_name" placeholder="Enter Student Name" required="1">
                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="StudentSession">Session </label>
                                    <input type="text" class="form-control" id="std_session" name="std_session" placeholder="Enter Student Session" required="1">
                                </div>
                                <div class="form-group">
                                    <label for="StudentDepartment">Department</label>
                                    <input type="text" class="form-control" id="std_department" name="std_department" placeholder="Enter Student Department" required="1">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="StudentHall">Hall </label>
                                    <input type="text" class="form-control" id="hall" name="hall" placeholder="Enter Hall">
                                </div>
                                <div class="form-group">
                                    <label for="StudentPresentAddress">Student Present Address</label>
                                    <textarea class="form-control" rows="1" name="std_present_address" name="std_present_address" placeholder="Enter The Full Student Present Address Details" required="1"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="AdmissionYear">Admission Year</label>
                                    <input type="date" class="form-control" id="admission_year" name="admission_year" placeholder="Enter Student Admission Year">
                                </div>
                                <div class="form-group">
                                    <label for="StudentPermanentAddress">Student Permanent Address</label>
                                    <textarea class="form-control" rows="1" name="std_permanent_address" name="std_permanent_address" placeholder="Enter The Full Student Permanent Address Details" required="1"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="StudentContact">Student Contact Number</label>
                                    <input type="number" class="form-control" id="std_con_no" name="std_con_no" placeholder="Enter Contact Number" required="1">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="StudentEmail">Student Email Address</label>
                                    <input type="email" class="form-control" id="std_email" name="std_email" placeholder="Enter Email Address" required="1">
                                </div>
                            </div>
                            <!-- /.col -->

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <textarea class="form-control" rows="1" name="remark" placeholder="Enter The Full Student Permanent Address Details"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.box-body -->



                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>
                    <!-- / form -->

                </div>
                <!-- /.row -->
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Add Student Area-->
<!--  Start New Student CSV File Uplode Area -->
<div class="modal fade" id="modal-addStudentareacsv">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Student Register - CSV File </h4>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype ="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">

                            <div class="form-group">
                                <label>Uplode CSV File </label>
                                <input type = "file" name ="file" class ="form-control"/>
                                <p class="help-block">Browsers your Student List .CSV File </p>
                            </div>
                            <!-- /.form-group -->

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">

                            <div class="form-group">
                                <label>.CSV File Formate Downlode Here</label>
                                <a href="csv/student_list.csv" class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Download CSV File </a>
                                <p class="help-block">CSV File Formate </p>
                            </div>
                            <!-- /.form-group -->

                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type = "submit" name = "savecsv" id= "Submit"  class="btn btn-primary" onClick="showit();"><span class = "glyphicon glyphicon-upload"></span> UPLOAD</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--  End New Category CSV File Uplode Area -->


<!-- /.modal -->
<!-- End View Student Area-->
<!-- start Edit Student Area-->
<div class="modal fade" id="modal-edititemarea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Student Data </h4>
            </div>
            <div class="modal-body" id="update_student_data">


            </div>

        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- start View Student Area-->
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Student Details</h4>
            </div>
            <div class="modal-body" id="stuent_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.view_data').click(function(){
            var std_id = $(this).attr("id");
            $.ajax({
                url:"modal/getStudentData.php",
                method:"post",
                data:{std_id:std_id},
                success:function(data){
                    $('#stuent_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });

    $('.update_data').click(function(){
        var std_id = $(this).attr("id");
        $.ajax({
            url:"modal/updateStudentData.php",
            method:"post",
            data:{std_id:std_id},
            success:function(data){
                $('#update_student_data').html(data);
                $('#modal-edititemarea').modal("show");
            }
        });
    });


    // JavaScript for deleting student

    $(document).on('click', '.delete-object', function(){

        var id = $(this).attr('delete-id');

        bootbox.confirm({
            message: "<h4>Are you sure?</h4>",
            buttons: {
                confirm: {
                    label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                    className: 'btn-danger'
                },
                cancel: {
                    label: '<span class="glyphicon glyphicon-remove"></span> No',
                    className: 'btn-primary'
                }
            },
            callback: function (result) {

                if(result==true){
                    $.post('modal/delete_student.php', {
                        id: id
                    }, function(data){
                        location.reload();
                    }).fail(function() {
                        alert('Unable to delete.');
                    });
                }
            }
        });

        return false;
    });
</script>

<?php require_once 'footer.php';?>
