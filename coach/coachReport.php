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
                                COACH ACTIVITY REPORT
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
                                            <th>Name</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Registration Date</th>
                                            <th>Activity</th>
                                            <th>Session Date</th>
                                            <th>Start time</th>
                                            <th>End time</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <!-- Exportable Table -->
                 
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Mark Benjamin</td>
                                            <td>Member</td>
                                            <td>08/04/2017</td>
                                            <td>PTS001</td>
                                            <td>08/25/2017</td>
                                            <td>08:00</td>
                                            <td>09:00</td>
                                        </tr>
                                        <tr>
                                            <td>Ivan Buglosa</td>
                                            <td>Mark Benjamin</td>
                                            <td>Member</td>
                                            <td>09/20/2017</td>
                                            <td>PTS002</td>
                                            <td>09/21/2017</td>
                                            <td>09:00</td>
                                            <td>10:00</td>
                                        </tr>
                                        <tr>
                                            <td>Patrick Legislador</td>
                                            <td>Ivan del Prado</td>
                                            <td>Regular</td>
                                            <td>07/15/2017</td>
                                            <td>SC025</td>
                                            <td>08/19/2017</td>
                                            <td>13:00</td>
                                            <td>14:00</td>
                                        </tr>
                                        <tr>
                                            <td>Brix Nessia</td>
                                            <td>Manny Pacquiao</td>
                                            <td>Regular</td>
                                            <td>06/27/2017</td>
                                            <td>PTS050</td>
                                            <td>07/01/2017</td>
                                            <td>15:00</td>
                                            <td>16:00</td>
                                        </tr>
                                        <tr>
                                            <td>Erul Ubas</td>
                                            <td>Juan de la Cruz</td>
                                            <td>Member</td>
                                            <td>08/06/2017</td>
                                            <td>SC030</td>
                                            <td>09/20/2017</td>
                                            <td>13:00</td>
                                            <td>14:00</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Jordan</td>
                                            <td>Kobe Bryant</td>
                                            <td>Regular</td>
                                            <td>09/24/2017</td>
                                            <td>PTS015</td>
                                            <td>09/30/2017</td>
                                            <td>15:00</td>
                                            <td>16:00</td>
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