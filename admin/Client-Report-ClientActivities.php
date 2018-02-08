<?php
 include "../dbConnect.php";
 session_start();
 
 include("includes/header.php"); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Coach Activity</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Reports - Client Activities
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Client-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Client Activity Report</h2>
        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Registration Date</th>
                                            <th>Coach</th>
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
                                            <td>Member</td>
                                            <td>08/04/2017</td>
                                            <td>Mark Benjamin</td>
                                            <td>Personal Training</td>
                                            <td>08/25/2017</td>
                                            <td>8:00 AM</td>
                                            <td>9:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Ivan Buglosa</td>
                                            <td>Member</td>
                                            <td>09/20/2017</td>
                                            <td>Mark Benjamin</td>
                                            <td>Personal Training</td>
                                            <td>09/21/2017</td>
                                            <td>9:00 AM</td>
                                            <td>10:00 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Patrick Legislador</td>
                                            <td>Regular</td>
                                            <td>07/15/2017</td>
                                            <td>Ivan del Prado</td>
                                            <td>Studio Class</td>
                                            <td>08/19/2017</td>
                                            <td>1:00 PM</td>
                                            <td>2:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>Brix Nessia</td>
                                            <td>Regular</td>
                                            <td>06/27/2017</td>
                                            <td>Manny Pacquiao</td>
                                            <td>Personal Training</td>
                                            <td>07/01/2017</td>
                                            <td>3:00 PM</td>
                                            <td>4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>Erul Ubas</td>
                                            <td>Member</td>
                                            <td>08/06/2017</td>
                                            <td>Juan de la Cruz</td>
                                            <td>Studio Class</td>
                                            <td>09/20/2017</td>
                                            <td>1:00 PM</td>
                                            <td>2:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Jordan</td>
                                            <td>Regular</td>
                                            <td>09/24/2017</td>
                                            <td>Kobe Bryant</td>
                                            <td>Personal Training</td>
                                            <td>09/30/2017</td>
                                            <td>3:00 PM</td>
                                            <td>4:00 PM</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
           
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