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
                <h2>Studio Classes</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Studio Class - Reports - Studio Classes
                                </li>
                            </ol>
            </div>
        </div>
    <?php include("StudioClass-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Studio Classes</h2>
        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div class="col-md-3 pull-right">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>
                                <div id="print">
                                <table class="table table-bordered table-striped table-hover dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <div class="row clearfix">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   
                                    <thead>
                                        <tr>
                                            <th align="center">Class Name</th>
                                            <th align="center">Capacity</th>
                                            <th align="center">Times Held</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());  
                                            $class = $conn->query("SELECT * FROM `studioclass`") or die(mysql_error());
                                            while($fclass = $class->fetch_array()) {
                                                $sc = $fclass['SC_Code'];

                                                $fc = $conn->query("SELECT COUNT(*) as total FROM `studioclasssession` WHERE SC_Code = '$sc' ") or die(mysql_error());
                                                $ffc = $fc->fetch_array();

                                                                    ?>
                                        <tr>
                                            <td align="center"><?php echo $fclass['SC_Name'] ?></td>
                                            <td align="center"><?php echo $fclass['SC_Capacity'] ?></td>
                                            <td align="center"><?php echo $ffc['total'] ?></td>
                                        </tr>

                                        <?php 
                                    }
                                    ?>
                                    </tbody>
                                </div>
                            </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Studio Class List</h2><center><br><br>" +
                         printcontent + "<br><br><br><span>PRINTED BY: ____________ </span>" + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>SIGNED BY: ____________";
                         window.print();
                         document.body.innerHTML = restorepage;
                     }


            </script>
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