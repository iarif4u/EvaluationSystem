<?php require_once 'header.php';
require_once 'leftSide.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Assigned Course List
            <small>Assigned Course Information List </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">AssignedCourse List </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addAssignedCoursearea"> <i class="fa fa-th-list" aria-hidden="true"></i> Add New AssignedCourse </a>  </h3>
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-addAssignedCourseareacsv"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Add New AssignedCourse CSV File uploader </a>  </h3>
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
                                <th>Course Name </th>
                                <th>Year </th>
                                <th>Semester</th>
                                <th>session</th>
                                <th>Department</th>
                                <th>Category/Details</th>
                                <th>Instructor Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>301</td>
                                <td>Marketing Research</td>
                                <td>Marketing </td>
                                <td>Marketing - M</td>
                                <td>Marketing - M</td>
                                <td>Marketing - M</td>
                                <td>100</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btn-view" title="View Information" data-toggle="modal" data-target="#modal-viewAssignedCoursearea"><i class="fa fa-eye" aria-hidden="true"></i> </a>
                                    <a href="#" class="btn-edit" title="Edit Information" data-toggle="modal" data-target="#modal-editAssignedCoursearea"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn-detect" title="Detect Information" data-toggle="modal" data-target="#modal-delectAssignedCoursearea"><i class="fa fa-times" aria-hidden="true"></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>302</td>
                                <td>Marketing Research</td>
                                <td>Marketing </td>
                                <td>Marketing - M</td>
                                <td>Marketing - M</td>
                                <td>Marketing - M</td>
                                <td>100</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btn-view" title="View Information" data-toggle="modal" data-target="#modal-viewAssignedCoursearea"><i class="fa fa-eye" aria-hidden="true"></i> </a>
                                    <a href="#" class="btn-edit" title="Edit Information" data-toggle="modal" data-target="#modal-editAssignedCoursearea"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn-detect" title="Detect Information" data-toggle="modal" data-target="#modal-delectAssignedCoursearea"><i class="fa fa-times" aria-hidden="true"></i></a>

                                </td>
                            </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Course ID </th>
                                <th>Course Name </th>
                                <th>Year </th>
                                <th>Semester</th>
                                <th>session</th>
                                <th>Department</th>
                                <th>Category/Details</th>
                                <th>Instructor Name</th>
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
<!-- start Add AssignedCourse Area-->
<div class="modal fade" id="modal-addAssignedCoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add AssignedCourse Register </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course Name 1</option>
                                        <option>Course Name 2</option>
                                        <option>Course Name 4</option>
                                        <option>Course Name 5</option>
                                        <option>Course Name 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Session</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course Name 1</option>
                                        <option>Course Name 2</option>
                                        <option>Course Name 4</option>
                                        <option>Course Name 5</option>
                                        <option>Course Name 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Semester </label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Semester </option>
                                        <option>Semester  2</option>
                                        <option>Semester  4</option>
                                        <option>Semester  5</option>
                                        <option>Semester  6</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category/Details </label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Category/Details Name </option>
                                        <option>Category/Details Name  2</option>
                                        <option>Category/Details Name  4</option>
                                        <option>Category/Details Name  5</option>
                                        <option>Semester  6</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course ID</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course ID 1</option>
                                        <option>Course ID 2</option>
                                        <option>Course ID 4</option>
                                        <option>Course ID 5</option>
                                        <option>Course ID 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Department Name</option>
                                        <option>Department Name</option>
                                        <option>Department Name</option>
                                        <option>Department Name</option>
                                        <option>Department Name</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Instructor  Name</label>
                                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter The Full AssignedCourse Permanent Address Details"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.box-body -->
                    </form>
                    <!-- / form -->

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
<!-- /.modal -->
<!-- End Add AssignedCourse Area-->
<!--  Start New AssignedCourse CSV File Uplode Area -->
<div class="modal fade" id="modal-addAssignedCourseareacsv">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add AssignedCourse Register - CSV File </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label>Uplode CSV File For Category Name </label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Browsers your AssignedCourse List .CSV File </p>
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
<!-- start View AssignedCourse Area-->
<div class="modal fade" id="modal-viewAssignedCoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">AssignedCourse Information View </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Name</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Course Name 1</option>
                                    <option>Course Name 2</option>
                                    <option>Course Name 4</option>
                                    <option>Course Name 5</option>
                                    <option>Course Name 6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Session</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Course Name 1</option>
                                    <option>Course Name 2</option>
                                    <option>Course Name 4</option>
                                    <option>Course Name 5</option>
                                    <option>Course Name 6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Semester </label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Semester </option>
                                    <option>Semester  2</option>
                                    <option>Semester  4</option>
                                    <option>Semester  5</option>
                                    <option>Semester  6</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Category/Details </label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Category/Details Name </option>
                                    <option>Category/Details Name  2</option>
                                    <option>Category/Details Name  4</option>
                                    <option>Category/Details Name  5</option>
                                    <option>Semester  6</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course ID</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Course ID 1</option>
                                    <option>Course ID 2</option>
                                    <option>Course ID 4</option>
                                    <option>Course ID 5</option>
                                    <option>Course ID 6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Department Name</option>
                                    <option>Department Name</option>
                                    <option>Department Name</option>
                                    <option>Department Name</option>
                                    <option>Department Name</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Instructor  Name</label>
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="Remarks">Remarks</label>
                                <textarea class="form-control" rows="1" placeholder="Enter The Full AssignedCourse Permanent Address Details"></textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End View AssignedCourse Area-->
<!-- start Edit AssignedCourse Area-->
<div class="modal fade" id="modal-editAssignedCoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add AssignedCourse Edit </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course Name 1</option>
                                        <option>Course Name 2</option>
                                        <option>Course Name 4</option>
                                        <option>Course Name 5</option>
                                        <option>Course Name 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Session</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course Name 1</option>
                                        <option>Course Name 2</option>
                                        <option>Course Name 4</option>
                                        <option>Course Name 5</option>
                                        <option>Course Name 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Semester </label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Semester </option>
                                        <option>Semester  2</option>
                                        <option>Semester  4</option>
                                        <option>Semester  5</option>
                                        <option>Semester  6</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category/Details </label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Category/Details Name </option>
                                        <option>Category/Details Name  2</option>
                                        <option>Category/Details Name  4</option>
                                        <option>Category/Details Name  5</option>
                                        <option>Semester  6</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course ID</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Course ID 1</option>
                                        <option>Course ID 2</option>
                                        <option>Course ID 4</option>
                                        <option>Course ID 5</option>
                                        <option>Course ID 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Department Name</option>
                                        <option>Department Name</option>
                                        <option>Department Name</option>
                                        <option>Department Name</option>
                                        <option>Department Name</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Instructor  Name</label>
                                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter The Full AssignedCourse Permanent Address Details"></textarea>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.box-body -->
                    </form>
                    <!-- / form -->
                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Edit AssignedCourse information Area-->

<!-- Start AssignedCourse information Area-->
<div class="modal modal-danger fade" id="modal-delectAssignedCoursearea">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">AssignedCourse information Delete Now</h4>
            </div>
            <div class="modal-body">
                <p>are you sure delete this AssignedCourse?</p>
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
<!-- End Delete AssignedCourse information Area-->
<?php require_once 'footer.php';?>
