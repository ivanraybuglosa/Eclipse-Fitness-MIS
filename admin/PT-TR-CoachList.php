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
                <h2>Coach List</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Coach List
                                </li>
                            </ol>
            </div>
        </div>
        
    <?php include("PT-Report-List.php"); ?>
    <div class="card">
    <div class="header">
        <h2>Coach List</h2>
    </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                               
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Specialty</th>
                                            <th>Email Address</th>
                                            <th>Type</th>
                                            <th>Specialty</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                        //INCOMPLETE CODE. KULANG PA YEARLY FILTER
                                            $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());  
                                            $coach = $conn->query("SELECT * FROM `coach`") or die(mysql_error());
                                            while($fcoach = $coach->fetch_array()) {
                                                                    ?> 
                                        <tr>
                                            <td><?php echo $fcoach['Coach_LastName']?> <?php echo $fcoach['Coach_FirstName'] ?></td>
                                            <td><?php echo $fcoach['Coach_Gender']?></td>
                                            <td><?php echo $fcoach['Coach_Specialty'] ?></td>
                                            <td><?php echo $fcoach['Coach_EmailAddress'] ?></td>
                                            <td><?php echo $fcoach['Coach_Type'] ?></td>
                                            <td><?php echo $fcoach['Coach_ContactNumber'] ?></td>
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