<?php
 include "../dbConnect.php";
 session_start();
 
 
 include("includes/header.php");
 include_once("actions/Client-Trend-TopClients-Action.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Top Clients</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                     Clients - Trends - Top Clients
                                </li>
                            </ol>
            </div>
        </div>
      <?php include("Client-Report-List.php"); ?>
             <div class="card">
                    <div class="header">
                       <h2>Top Clients (Based on Expenses)</h2>
                    </div>
                  <div class="body">
                    <div class="col-s-12">
                         <div id="topclients" style="width: 100%; height: 400px"></div>
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

    <script src="../assets/js/pages/charts/topClients.js"></script>

    <script src="canvas/jquery.min.js"></script>
    <script src="canvas/jquery.canvasjs.min.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
</body>

</html>