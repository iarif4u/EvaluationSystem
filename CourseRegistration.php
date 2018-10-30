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
            Course List
            <small>Course Information List </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Course List </li>
        </ol>
    </section>
    <?php
    if(isset($_POST['save'])){

        $course_id = mysqli_real_escape_string($conn, $_POST['course_id']);
        $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $total_marks = mysqli_real_escape_string($conn, $_POST['total_marks']);
        $credit = mysqli_real_escape_string($conn, $_POST['credit']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);

        $path = "csv/"; //set your folder path
        //set the valid file extensions
        $valid_formats = array("doc", "txt", "docx", "pdf"); //add the formats you want to upload

        $name = $_FILES['course_content']['name']; //get the name of the file

        $size = $_FILES['course_content']['size']; //get the size of the file

        if (strlen($name)) { //check if the file is selected or cancelled after pressing the browse button.
            list($txt, $ext) = explode(".", $name); //extract the name and extension of the file
            if (in_array($ext, $valid_formats)) { //if the file is valid go on.
                if ($size < 2098888) { // check if the file size is more than 2 mb

                    $tmp = $_FILES['course_content']['tmp_name'];
                    $move_file = $name;
                    if (move_uploaded_file($tmp, $path . $name)) { //check if it the file move successfully.
                        echo "";
                        echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									File uploaded successfully!!
								</div>
                            </div>';
                    } else {
                        echo '<div class="pad margin no-print">
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Faild !! 
								</div>
                            </div>';
                    }
                } else {

                    echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									File size max 2 MB
								</div>
                            </div>';
                }
            } else {

                echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Invalid file format !!
								</div>
                            </div>';
            }
        } else {

            echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Please select a file..!
								</div>
                            </div>';
        }


        $valid_course = valid_course($course_id, $course_name, $conn);


        if($valid_course == true){

            if ((!empty($course_name)) ) {

                $get_course_info = addCourse($course_id,$course_name,$department,$category,$total_marks,$credit,$remark,$move_file,$status=1,$conn);
                if($get_course_info == true){  ?>

                            <div class="pad margin no-print">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    New Course Add Success .
                                </div>
                            </div>

                        <?php } else{   ?>


                            <div class="pad margin no-print">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                    Something Weant Wrong !! Please Try Again !!
                                </div>
                            </div>

                        <?php      }
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

                    The Student Already Exits !!
                </div>
            </div>

        <?php      }

    }


    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $course_id = mysqli_real_escape_string($conn, $_POST['course_id']);
        $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $total_marks = mysqli_real_escape_string($conn, $_POST['total_marks']);
        $credit = mysqli_real_escape_string($conn, $_POST['credit']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);

        $path = "csv/"; //set your folder path
        //set the valid file extensions
        $valid_formats = array("doc", "txt", "docx", "pdf"); //add the formats you want to upload

        $name = $_FILES['courseContent']['name']; //get the name of the file

        $size = $_FILES['courseContent']['size']; //get the size of the file

        if (strlen($name)) { //check if the file is selected or cancelled after pressing the browse button.
            list($txt, $ext) = explode(".", $name); //extract the name and extension of the file
            if (in_array($ext, $valid_formats)) { //if the file is valid go on.
                if ($size < 2098888) { // check if the file size is more than 2 mb

                    $tmp = $_FILES['courseContent']['tmp_name'];
					$update_file = "";
                    $update_file = $name;
                    if (move_uploaded_file($tmp, $path . $name)) { //check if it the file move successfully.
                        echo "";
                        echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									File uploaded successfully!!
								</div>
                            </div>';
                    } else {
                        echo '<div class="pad margin no-print">
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Faild !! 
								</div>
                            </div>';
                    }
                } else {

                    echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									File size max 2 MB
								</div>
                            </div>';
                }
            } else {

                echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Invalid file format !!
								</div>
                            </div>';
            }
        } else {

            echo '<div class="pad margin no-print">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

									Please select a file..!
								</div>
                            </div>';
        }




                $get_update_info = update_course($id,$course_id,$course_name,$department,$category,$total_marks,$credit,$remark,$update_file,$conn);
                if($get_update_info == true){  ?>

                    <div class="pad margin no-print">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                           Update  Success .
                        </div>
                    </div>

                <?php } else{   ?>


                    <div class="pad margin no-print">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                            Something Weant Wrong !! Please Try Again !!
                        </div>
                    </div>

                <?php      }


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
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addCoursearea"> <i class="fa fa-th-list" aria-hidden="true"></i> Add New Course </a>  </h3>
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addCourseareacsv"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Add New Course CSV File uploader </a>  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body dc-table-style">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Course ID </th>
                                <th>Course Name</th>
                                <th>Department</th>
                                <th>Category/Details</th>
                                <th>Course Content</th>
                                <th>Total Marks </th>
                                <th>Credit </th>
                                <th>Remark </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include_once  'class/control_view.php';
                            $getAllCourse = gteAllCourse($conn);

                            while ($view = mysqli_fetch_assoc($getAllCourse)) {
                            extract($view);
                            ?>
                            <tr id="<?php echo $view['id'] ?>">
                                <td><?php echo $view['course_id']; ?></td>
                                <td><?php echo $view['course_name']; ?></td>
                                <td><?php echo $view['department']; ?> </td>
                                <td><?php echo $view['category']; ?></td>
                                <td><a href="<?php echo "csv/".$view['course_content']; ?>" target=_blank><?php echo $view['course_content']; ?></a></td>
                                <td><?php echo $view['total_marks']; ?></td>
                                <td><?php echo $view['credit']; ?></td>
                                <td><?php echo $view['remark']; ?></td>
                                <td>
                                    <a href="javascript:void(0);" input type="button" name="Update"  id="<?php echo $view["id"]; ?>" class="btn btn-info btn-xs update_data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a class='btn btn-danger btn-xs remove'><i class="fa fa-times" aria-hidden="true"></i></a>


                                </td>
                            </tr>

                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Course ID </th>
                                <th>Course Name</th>
                                <th>Department</th>
                                <th>Category/Details</th>
                                <th>Course Content</th>
                                <th>Total Marks </th>
                                <th>Credit </th>
                                <th>Remark </th>
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
<!-- start Add Course Area-->
<div class="modal fade" id="modal-addCoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Course Register </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- form start -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form" enctype ="multipart/form-data">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CourseName">Course Id</label>
                                    <input type="text" class="form-control" id="course_id" name="course_id" placeholder="Enter The Course ID">
                                </div>

                                <div class="form-group">
                                    <label for="CourseMobile">Course Name</label>
                                    <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter Course Name ">
                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CourseDepartment">Department </label>
                                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter Course Department">
                                </div>
                                <div class="form-group">
                                    <label for="CategoryDetails">Category/Details</label>
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category Details">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Content</label>
                                    <input type="file" id="course_content" name="course_content">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="TotalMarks">Total Marks</label>
                                    <input type="number" class="form-control" id="total_marks" name="total_marks" placeholder="Enter Course TotalMarks">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Credit">Credit</label>
                                    <input type="number" class="form-control" id="credit" name="credit" placeholder="Enter Course Credit">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <textarea class="form-control" rows="1"  name="remark" placeholder="Enter The Full Course Permanent Address Details"></textarea>
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
<!-- End Add Course Area-->
<!--  Start New Course CSV File Uplode Area -->
<div class="modal fade" id="modal-addCourseareacsv">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Course Register - CSV File </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label>Uplode CSV File For Category Name </label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Browsers your Course List .CSV File </p>
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

<!-- start Edit Course Area-->
<div class="modal fade" id="modal-editcoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Course Edit </h4>
            </div>
            <div class="modal-body" id="update_course_data">

            </div>

        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Edit Course information Area-->

<!-- Start Course information Area-->
<div class="modal modal-danger fade" id="modal-delectcoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Course information Delete Now</h4>
            </div>
            <div class="modal-body">
                <p>are you sure delete this Course?</p>
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
<!-- End Delete Course information Area-->

<script>
    $('.update_data').click(function(){
        var course_id = $(this).attr("id");
        $.ajax({
            url:"modal/updateCourseData.php",
            method:"post",
            data:{course_id:course_id},
            success:function(data){
                $('#update_course_data').html(data);
                $('#modal-editcoursearea').modal("show");
            }
        });
    });
    // JavaScript for deleting course

        $(".remove").click(function(){

        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))

        {

            $.ajax({

               url: 'modal/delete_course.php',

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
