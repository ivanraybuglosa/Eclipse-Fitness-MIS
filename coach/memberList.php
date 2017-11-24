<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>
 <section class="content">
        <div class="container-fluid">
    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MEMBER LIST
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">COPY</button>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">EXCEL</button>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">PDF</button>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">PRINT</button>
                                </div>
                                
                                

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