<?php require_once 'header.php';
require_once 'leftSide.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Evaluation - Course Wise
            <small>Evaluation - Course Wise Information List </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Evaluation - Course Wise </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><a class="btn btn-success" data-toggle="modal" data-target="#modal-CourseWiseFilterData"> <i class="fa fa-th-list" aria-hidden="true"></i>Evaluation - Course Wise filter data</a>  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th  rowspan="3">Student Name</th>
                                    <th  rowspan="3">Student ID</th>
                                    <th  colspan="6">Marks Obtained</th>
                                    <th  rowspan="3">Grade</th>
                                    <th  rowspan="3">GPA</th>
                                </tr>
                                <tr>
                                    <th  rowspan="2">Inter Evaluation<br> (Out of 25)</th>
                                    <th  colspan="4">Final</th>
                                    <th  rowspan="2">Total Marks</th>
                                </tr>
                                <tr>
                                    <th>1st Examinar</th>
                                    <th>2nd Examinar</th>
                                    <th>3rd Examinar</th>
                                    <th>Average</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Md Minhajul Islam</td>
                                    <td>CSE 00305104</td>
                                    <td><input type="number" class="form-control" id="InterEvaluation" placeholder="Inter Evaluation"></td>
                                    <td><input type="number" class="form-control" id="FstExaminar" placeholder="1st Examinar"></td>
                                    <td><input type="number" class="form-control" id="sstExaminar" placeholder="2nd Examinar"></td>
                                    <td>0</td>
                                    <td>52.5</td>
                                    <td>73.5</td>
                                    <td>A-</td>
                                    <td>3.50</td>
                                </tr>

                                <tr>
                                    <td>Md Nafiz Islam</td>
                                    <td>CSE 00305105</td>
                                    <td><input type="number" class="form-control" id="InterEvaluation" placeholder="Inter Evaluation"></td>
                                    <td><input type="number" class="form-control" id="FstExaminar" placeholder="1st Examinar"></td>
                                    <td><input type="number" class="form-control" id="sstExaminar" placeholder="2nd Examinar"></td>
                                    <td>0</td>
                                    <td>58.5</td>
                                    <td>79.5</td>
                                    <td>A+</td>
                                    <td>4</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer with-border">
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>


<!-- start View AssignedCourse Area-->
<div class="modal fade" id="modal-CourseWiseFilterData">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Evaluation - Course Wise filter data </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="box-body">
                        <div class="col-md-6">
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
                                    <option selected="selected">Course ID 1</option>
                                    <option>Course ID</option>
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

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Flider Data</button>
            </div>
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End View AssignedCourse Area-->


<?php require_once 'footer.php';?>
