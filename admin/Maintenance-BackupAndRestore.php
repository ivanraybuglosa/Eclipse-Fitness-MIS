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
                <h2>BACKUP AND RESTORE</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Maintenance - Backup and Restore
                                </li>
                            </ol>
            </div>
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="card">
                 <div class="row">
                    <div class="body">
                        <div class="col-md-6">
                    <a href="backup/export.php" class="btn btn-block btn-danger" style="padding: 10px;">Export Database</a>
                        </div>
                        <div class="col-md-6">
                    <a href="backup/import.php" name="import" class="btn btn-block btn-success" style="padding: 10px;">Import Database</a>
                        </div>
                    </div>
                 </div>
                 <div class="body">
                   <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Description</th>
                                            <th>Back-up Date</th>
                                            <th>Back-up Time</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                 <?php

                $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 
                $maintenance = $conn->query("SELECT * FROM `backuphistory` ") or die(mysql_error());

                                while($fmaint = $maintenance->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $fmaint['backup_type'] ?></td>
                                            <td>Successful <?php echo $fmaint['backup_type'] ?> of Database.</td>
                                            <td><?php echo date("F j, Y", strtotime($fmaint['backup_date'])) ?></td>
                                            <td><?php echo date('g:i A', strtotime($fmaint['backup_time'])) ?></td>
                                        </tr>
                                        
                                        <?php
                                    } 
                                 ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                 </div>
               </div>
            </div>
               
        </div>
    </section>
            <!-- Card 1 -->
            

    <!-- Jquery Core Js -->
    <?php include("includes/footer.php"); ?>

    


    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <script src="../../plugins/dropzone/dropzone.js"></script>
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>


    <script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
