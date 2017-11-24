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
                <h2>Studio Class Participants</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Studio Class - Trends - Studio Class Participants
                                </li>
                            </ol>
            </div>
        </div>
    <div class="card">
        <div class="header">
            <h2>Studio Class Participants</h2>
        </div>
                        <div class="body">
                         
                         
                         <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <div class="col-sm-1">
                                            <label style="margin-right: 55px;">Date:</label>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="startDate" value = "2017-01-01"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="endDate" 
                                                       value = "2017-07-01"/>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-success waves-effect" style="padding:8px 10px;">&nbsp; Filter &nbsp;</button>
                                
                                            </div>
                                                <div class="col-md-3 pull-right">
                                                    
                                                    <select class="form-control show-tick">
                                                        <option>Aqua Zumba</option>
                                                        <option>Zumba</option>
                                                        <option>Yoga</option>
                                                        <option>Spinning</option>
                                                        <option>HIIT</option>
                                                        <option>F360</option>
                                                        
                                                    </select>

                                                </div>
                                            
                                            <div class="body">
                                                <canvas id="studioSession" height="70"></canvas>
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
    <script src="../assets/plugins/jquery-datatable/extens
                 ions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
      <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <script src="../assets/js/pages/charts/studioClassSession.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
</body>

</html>ui