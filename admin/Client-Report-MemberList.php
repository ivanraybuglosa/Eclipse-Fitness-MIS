<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Member List</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Reports - Member List
                                </li>
                            </ol>
            </div>
        </div>

        <div class="card">
            <div class="header">
             <div class="body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="Client-Report-Walkin.php" class="btn bg-blue btn-block waves-effect" role="button" name="btn-signup" data-type="success">WALK-IN LIST</a>
                        </div>
                        <div class="col-md-3">
                            <a href="Client-Report-MemberList.php" class="btn bg-blue btn-block waves-effect" role="button" name="btn-signup" data-type="success">MEMBER LIST</a>
                        </div>
                        <div class="col-md-3">
                            <a href="Client-Report-ClientActivities.php" class="btn bg-blue btn-block waves-effect" role="button" name="btn-signup" data-type="success">CLIENT ACTIVITIES</a>
                        </div>
                        <div class="col-md-3">
                            <a href="Client-Report-TransactionHistory.php" class="btn bg-blue btn-block waves-effect" role="button" name="btn-signup" data-type="success">TRANSACTION HISTORY</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="Client-Trend-ActiveAndNot.php" class="btn bg-green btn-block waves-effect" role="button" name="btn-signup" data-type="success">CLIENT STATUS</a>
                        </div>
                        <div class="col-md-3">
                            <a href="Client-Trend-Attendance.php" class="btn bg-green btn-block waves-effect" role="button" name="btn-signup" data-type="success">CLIENT ATTENDANCE</a>
                        </div>
                        <div class="col-md-3">
                            <a href="Client-Trend-UniqueClients.php" class="btn bg-green btn-block waves-effect" role="button" name="btn-signup" data-type="success">UNIQUE CLIENTS</a>
                        </div>
                        <div class="col-md-3">
                            <a href="Client-Trend-topClients.php" class="btn bg-green btn-block waves-effect" role="button" name="btn-signup" data-type="success">TOP CLIENTS</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    <div class="card">
        <div class="header">
            <h2>Member List</h2>
        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Contact Number</th>
                                            <th>Registration Date</th>
                                            <th>Membership Type</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <!-- Exportable Table -->
                 
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>19</td>
                                            <td>Male</td>
                                            <td>09123456789</td>
                                            <td>09/07/2017</td>
                                            <td>Student</td>
                                            <td>3 Months</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ivan Buglosa</td>
                                            <td>20</td>
                                            <td>Male</td>
                                            <td>09831758491</td>
                                            <td>08/20/2017</td>
                                            <td>Regular</td>
                                            <td>6 Months</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Patrick Legislador</td>
                                            <td>21</td>
                                            <td>Male</td>
                                            <td>09183759182</td>
                                            <td>08/25/2017</td>
                                            <td>Regular</td>
                                            <td>12 Months</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Brix Nessia</td>
                                            <td>22</td>
                                            <td>Male</td>
                                            <td>09418271691</td>
                                            <td>07/30/2017</td>
                                            <td>Student</td>
                                            <td>6 Months</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Erul Ubas</td>
                                            <td>23</td>
                                            <td>Male</td>
                                            <td>09123869181</td>
                                            <td>08/14/2017</td>
                                            <td>Student</td>
                                            <td>3 Months</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Mary Francisco</td>
                                            <td>25</td>
                                            <td>Female</td>
                                            <td>09218281961</td>
                                            <td>09/20/2017</td>
                                            
                                            <td>Regular</td>
                                            <td>6 Months</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    <?php include("includes/footer.php"); ?>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
      <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
</body>

</html>