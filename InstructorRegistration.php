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
            Instructor List
            <small>Instructor Information List </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Instructor List </li>
        </ol>
    </section>
	<?php
    if(isset($_POST['save'])){

        $instructor_id = mysqli_real_escape_string($conn, $_POST['instructor_id']);
        $instructor_name = mysqli_real_escape_string($conn, $_POST['instructor_name']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $designation = mysqli_real_escape_string($conn, $_POST['designation']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
        $present_address = mysqli_real_escape_string($conn, $_POST['present_address']);
        $permanent_address = mysqli_real_escape_string($conn, $_POST['permanent_address']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);
        
		

        $valid_instructor = valid_instructor($instructor_id, $instructor_name, $conn);


        if($valid_instructor == true){

            if (!empty($instructor_id)) {
				
				/* print_r($instructor_name);
				print_r($instructor_id);
				die(); */
				

                if(strlen($_POST['contact_no']) >= 11){
                    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        echo '<div class="pad margin no-print">
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Invalid E-Mail Address !!
								</div>
                            </div>';
                    }else {
						
                        $get_info = addInstructor($instructor_id, $instructor_name, $department, $designation, $email, $contact_no, $present_address, $permanent_address, $remark, $status=1, $conn);
						
                        if($get_info == true){  ?>

                            <div class="pad margin no-print">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    New Instructor Add Success .
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

                    The Instructor Already Exits !!
                </div>
            </div>

        <?php      }

    }


    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $instructor_id = mysqli_real_escape_string($conn, $_POST['instructor_id']);
        $instructor_name = mysqli_real_escape_string($conn, $_POST['instructor_name']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $designation = mysqli_real_escape_string($conn, $_POST['designation']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
        $present_address = mysqli_real_escape_string($conn, $_POST['present_address']);
        $permanent_address = mysqli_real_escape_string($conn, $_POST['permanent_address']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);

           if(strlen($_POST['contact_no']) >= 11){
                    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        echo '<div class="pad margin no-print">
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Invalid E-Mail Address !!
								</div>
                            </div>';
                    }else {
                        $update = update_instructor($id,$instructor_id, $instructor_name, $department, $designation, $email, $contact_no, $present_address, $permanent_address, $remark, $conn);
						
						
                        if($update == true){  ?>

                            <div class="pad margin no-print">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    Instructor Data Update Success .
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
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addInstructorarea"> <i class="fa fa-th-list" aria-hidden="true"></i> Add New Instructor </a>  </h3>
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addInstructorareacsv"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Add New Instructor CSV File uploader </a>  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body dc-table-style">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Instructor ID </th>
                                <th>Instructor Name</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php
                            include_once  'class/control_view.php';
                            $gteAllInstructor = gteAllInstructor($conn);

                            while ($view = mysqli_fetch_assoc($gteAllInstructor)) {
                            extract($view);
							?>
                            <tr id="<?php echo $view['id'] ?>">
                                <td><?php echo $view['instructor_id']; ?></td>
                                <td><?php echo $view['instructor_name']; ?></td>
                                <td><?php echo $view['department']; ?></td>
                                <td><?php echo $view['designation']; ?></td>
                                
                                <td><?php echo $view['contact_no']; ?></td>
								<td><?php echo $view['email']; ?></td>
                                <td>
                                    <a href="javascript:void(0);" input type="button" name="view"  id="<?php echo $view["id"]; ?>" class="btn btn-primary btn-xs view_data"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" input type="button" name="Update"  id="<?php echo $view["id"]; ?>" class="btn btn-info btn-xs update_data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a class='btn btn-danger btn-xs remove'><i class="fa fa-times" aria-hidden="true"></i></a>

                                </td>
                            </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Instructor ID </th>
                                <th>Instructor Name</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Contact</th>
                                <th>Email</th>
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
<!-- start Add Instructor Area-->
<div class="modal fade" id="modal-addInstructorarea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Instructor Register </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- form start -->
                   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InstructorName">Instructor Id</label>
                                    <input type="text" class="form-control" id="instructor_id" name="instructor_id" placeholder="Enter The Instructor ID">
                                </div>
                                <div class="form-group">
                                    <label for="InstructorMobile">Instructor Name</label>
                                    <input type="text" class="form-control" id="instructor_name" name="instructor_name" placeholder="Enter Instructor Name ">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Department">Department </label>
                                    <input type="text" class="form-control" id="department"  name="department" placeholder="Enter Department Session">
                                </div>
                                <div class="form-group">
                                    <label for="InstructorDesignation">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Instructor Designation">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InstructorEmail">Instructor Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="InstructorPresentAddress">Instructor Present Address</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter The Full Instructor Present Address Details" name="present_address"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InstructorContact">Instructor Contact Number</label>
                                    <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="Enter Contact Number">
                                </div>
                                <div class="form-group">
                                    <label for="InstructorPermanentAddress">Instructor Permanent Address</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter The Full Instructor Permanent Address Details" name="permanent_address"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter The Full Instructor Permanent Address Details" name="remark"></textarea>
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
<!-- End Add Instructor Area-->
<!--  Start New Instructor CSV File Uplode Area -->
<div class="modal fade" id="modal-addInstructorareacsv">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Instructor Register - CSV File </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label>Uplode CSV File For Category Name </label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Browsers your Instructor List .CSV File </p>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label>.CSV File Formate Downlode Here</label>
                                <a class="btn btn-success"> <i class="fa fa-cloud-download" aria-hidden="true"></i> Download CSV File </a>
                                <p class="help-block">CSV File Formate </p>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--  End New Category CSV File Uplode Area -->
<!-- start View Instructor Area-->
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Instructor Details</h4>
            </div>
            <div class="modal-body" id="instructor_details">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- End View Instructor Area-->
<!-- start Edit Instructor Area-->
<div class="modal fade" id="modal-ediInstructor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Student Data </h4>
            </div>
            <div class="modal-body" id="update_instructor_data">


            </div>

        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Edit Instructor information Area-->

<!-- Start Instructor information Area-->
<div class="modal modal-danger fade" id="modal-delectInstructorarea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Instructor information Delete Now</h4>
            </div>
            <div class="modal-body">
                <p>are you sure delete this Instructor?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-outline">Yes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Delete Instructor information Area-->

<script>
    $(document).ready(function(){
        $('.view_data').click(function(){
            var ins_id = $(this).attr("id");
            $.ajax({
                url:"modal/getInstructor.php",
                method:"post",
                data:{ins_id:ins_id},
                success:function(data){
                    $('#instructor_details').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });
	
	 $('.update_data').click(function(){
        var ins_id = $(this).attr("id");
        $.ajax({
            url:"modal/upDateInstructor.php",
            method:"post",
            data:{ins_id:ins_id},
            success:function(data){
                $('#update_instructor_data').html(data);
                $('#modal-ediInstructor').modal("show");
            }
        });
    });
	
	//  javascript delete instructor
	
	$(".remove").click(function(){

        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))

        {

            $.ajax({

               url: 'modal/delete_instructor.php',

               type: 'GET',

               data: {id: id},

               error: function() {

                  alert('Something is wrong');

               },

               success: function(data) {

                    $("#"+id).remove();

                    alert("Record removed successfully");  

               }

            });

        }

    });
</script>
<?php require_once 'footer.php';?>
