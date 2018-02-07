<?php
 include "../dbConnect.php";
 session_start();
 if (!$_SESSION['admin'])  
{  
    header('location:../login.php');  
    exit;  
}
 
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Client Training Progress</h2>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Client Training Progress
                                </li>
                            </ol>
            </div>
        </div>
        
    <?php include("includes/PT-Report-List.php"); ?>
    <div class="card">
        <div class="header">
        <h2>Client Training Progress</h2>
            </div>
                        <div class="body">
                         <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Client Code" />
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-success waves-effect" style="padding: 8px;">Check Progress</button>
                                <label style="margin-left: 55px;">Details:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" disabled="true" value="Michael Jackson  "/>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" disabled="true" value="Member" />
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-2">
                                <label style="margin-top: 7px;">Personal Training:</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control show-tick">
                                    <option>PT001</option>
                                    <option>PT002</option>
                                    <option>PT003</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" value="2017-09-30" disabled="true">
                            </div>
                            <div class="col-md-1">
                                <label style="margin:15px; margin-top:8px;">To</label>
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" value="2017-10-05" disabled="true">
                            </div>
                         </div>
                         <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Client Progress</h2>
                                            </div>
                                                <div class="col-md-3 pull-right">
                                                    
                                                    <select class="form-control show-tick">
                                                        <option>Weight</option>
                                                        <option>Skeletal Mass</option>
                                                        <option>Body Fat Mass</option>
                                                        <option>Total Body Water</option>
                                                        <option>Fat Free Mass</option>
                                                        <option>Body Mass Index</option>
                                                        <option>Percent Body Fat</option>
                                                        <option>Waist-Hip Ration</option>
                                                        <option>Basal-Metabolic Rate</option>
                                                        <option>Left Upper Arm</option>
                                                        <option>Right Upper Arm</option>
                                                        <option>Left Upper Thigh</option>
                                                        <option>Right Upper Thigh</option>
                                                        <option>Resting Heart Rate</option>
                                                        <option>Was</option>
                                                        <option>Fat Free Mass</option>
                                                        <option>Fat Free Mass</option>
                                                    </select>

                                                </div>
                                            
                                            <div class="body">
                                                <canvas id="line_chart" height="70"></canvas>
                                            </div>
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

    <script src="../assets/js/pages/charts/chartjsnew.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
</body>

</html>