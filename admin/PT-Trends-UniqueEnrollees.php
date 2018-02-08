<?php
 include "../dbConnect.php";
 session_start();
 
 
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Personal Training Enrollees</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                   Personal Training - Trends - Unique Enrollees
                                </li>
                            </ol>
            </div>
        </div>
    <div class="card">
        <div class="header">
            <h2>Personal Training Enrollees</h2>
        </div>
                        <div class="body">
                         
                        
                         <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                
                                            <div class="col-sm-1">
                                            <label style="margin-right: 55px; margin-top: 6px;">Date:</label>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="startDate" value = "2017-01-01"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="endDate" 
                                                       value = "2017-07-01"/>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="button" class="btn btn-success waves-effect" style="padding:8px 10px;">&nbsp; Filter &nbsp;</button>
                                
                                            </div>
                                                
                                            
                                            <div class="body">
                                                <canvas id="pt_chart" height="150"></canvas>
                                                
                                            </div>
                            </div>

                                            <footer>
                                                <div class="row">
                                                <label style="margin-left:30px; margin-right: 5px;">Export:</label>
                                                   <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">Print</button>
                                                   <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">Excel</button>
                                                   <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">PDF</button>

                                                </div>
                                            </footer>
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
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>\

    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <script src="../assets/js/pages/charts/ptEnrollees.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
</body>

</html>