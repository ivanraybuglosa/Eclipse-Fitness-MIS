<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php");
 include_once("actions/Client-Trend-Attendance-Action.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Client Attendance</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Trends - Client Attendance
                                </li>
                            </ol>
            </div>
        </div>
        
    <?php include("Client-Report-List.php"); ?>
            <div class="card">
                    <div class="header">
                       <h2>Client Attendance</h2>
                    </div>
                    <div class="body">
                <select id="filteryear" class="validate[required] select form-control show-tick" style="margin-top: -25px; width: 30%;" data-live-search="true">
                    <option>Select Year...</option>
                    <?php
                    for($year=2013; $year<=2025; $year++){
                    ?>
                    <option value="<?php echo $year ?>">
                        <?php echo $year; ?>
                    </option>
                    <?php
                    }
                    ?>
                </select>

        <script>
            $(document).ready(function(){
                $("#filteryear").on('change', function(){
                    var year=$(this).val();
                    window.location.href = 'Client-Trend-Attendance.php?year='+year;
                });
            });
        </script>
            </div>
                  <div class="body">
                    <div class="col-s-12">
                         <div id="attendance" style="width: 100%; height: 400px"></div>
                    </div>
                 </div>
            </div>
                        <footer>
                            <div class="row">
                              <label style="margin-left:30px; margin-risght: 5px;">Export:</label>
                               <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">Print</button>
                               <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">Excel</button>
                               <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">PDF</button>
                            </div>
                        </footer>
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

    <script src="../assets/js/pages/charts/attendance_chart.js"></script>
    
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
</body>

</html>