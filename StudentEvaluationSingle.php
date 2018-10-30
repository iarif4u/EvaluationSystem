<?php require_once 'header.php';
require_once 'leftSide.php';?>
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


    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">

            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">

                <address>
                    <strong>Md Minhajul Islam</strong><br>
                    Student ID : CSE 10315104 <br>
                    Department : CSE<br>
                    Section : 2015 - 2016<br>
                    Semester : 4th <br>
                    Year : 2nd

                </address>
            </div>
                      <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table id="" class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th rowspan="2">Subject ID</td>
                        <th rowspan="2">Subject Name</td>
                        <th rowspan="2">Inter Evaluation<br> (Out of 25)</td>
                        <th colspan="4">Final</td>
                        <th rowspan="2">Total Marks</td>
                        <th rowspan="2">Grade</td>
                        <th rowspan="2">GPA</td>
                    </tr>
                    <tr>
                        <th>1st Examinar</td>
                        <th>2nd Examinar</td>
                        <th>3rd Examinar</td>
                        <th>Average</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Subject ID 1</td>
                        <td>Subject Name 1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>52.5</td>
                        <td>73.5</td>
                        <td>A-</td>
                        <td>3.50</td>
                    </tr>

                    <tr>
                        <td>Subject ID 2</td>
                        <td>Subject Name 1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>58.5</td>
                        <td>79.5</td>
                        <td>A+</td>
                        <td>4</td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                 <table class="table table-bordered">
                    <tr>
                        <th class="tg-0pky">Credit Hour Per Course<br></th>
                        <th class="tg-baqh">Credit Taken</th>
                        <th class="tg-baqh"><span style="font-weight:bold">30</span></th>
                        <th class="tg-baqh">Credit Earned</th>
                        <th class="tg-baqh"><span style="font-weight:bold">30</span></th>
                    </tr>
                    <tr>
                        <td class="tg-0lax">Grade Point Average (GPA)</td>
                        <td class="tg-baqh" colspan="2">2.96</td>
                        <td class="tg-baqh">Results</td>
                        <td class="tg-baqh"><span style="font-weight:bold">P</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">Remarks</td>
                        <td class="tg-baqh" colspan="4">NA</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th colspan="6" class="text-center">Combined Result</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>1st Year</td>
                        <td>2nd Year<br></td>
                        <td>3rd  Year</td>
                        <td>4th Year</td>
                        <td>Total</td>
                    </tr>
                    <tr>
                        <td>Total Grade Point</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Credit Taken</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Credit Earned</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Grade Point Average</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Viva-Voce</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CGPA</td>
                        <td colspan="2">2.88</td>
                        <td>Result</td>
                        <td colspan="2">P</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <table class="table table-bordered ">
                    <tr>
                        <td><span style="font-weight:bold">Numerical Letter</span></td>
                        <td><span style="font-weight:bold">Letter Grade</span></td>
                        <td><span style="font-weight:bold">Grade Point</span></td>
                    </tr>
                    <tr>
                        <td> 80% and above </td>
                        <td class="text-center">A+</td>
                        <td class="text-center">4.00<br></td>
                    </tr>
                    <tr>
                        <td> 75% to less than 80% </td>
                        <td class="text-center">A</td>
                        <td class="text-center">3.75</td>
                    </tr>
                    <tr>
                        <td> 70% to less than 75% </td>
                        <td class="text-center">A-</td>
                        <td class="text-center">3.50</td>
                    </tr>
                    <tr>
                        <td> 65% to less than 70% </td>
                        <td class="text-center">B+</td>
                        <td class="text-center">3.25</td>
                    </tr>
                    <tr>
                        <td> 60% to less than 65% </td>
                        <td class="text-center">B</td>
                        <td class="text-center">3.00</td>
                    </tr>
                    <tr>
                        <td> 55% to less than 60% </td>
                        <td class="text-center">B-</td>
                        <td class="text-center">2.75</td>
                    </tr>
                    <tr>
                        <td> 50% to less than 55% </td>
                        <td class="text-center">C+</td>
                        <td class="text-center">2.50</td>
                    </tr>
                    <tr>
                        <td> 45% to less than 50% </td>
                        <td class="text-center">C</td>
                        <td class="text-center">2.25</td>
                    </tr>
                    <tr>
                        <td> 40% to less than 45% </td>
                        <td class="text-center">D</td>
                        <td class="text-center">2.0</td>
                    </tr>
                    <tr>
                        <td> Less than 40% </td>
                        <td class="text-center">F</td>
                        <td class="text-center">0.0</td>
                    </tr>
                    <tr>
                        <td> Incomplete (absent)</td>
                        <td>X</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>

                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generate PDF
                </button>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
</div>

<?php require_once 'footer.php';?>
