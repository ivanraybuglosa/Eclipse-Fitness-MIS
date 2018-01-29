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
                <h2>Contract History</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Contract History
                                </li>
                            </ol>
            </div>
        </div>
        
    <?php include("PT-Report-List.php"); ?>
    <div class="card">
    <div class="header">
        <h2>Contract History</h2>
    </div>
                        <div class="body">
                        <form method="POST">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <div class="row clearfix">

                                <div class="col-sm-8">
                                    <div class="form-group">
                                       <div class="form-line">
                                        <div class="col-md-6">
                                         <input type="date" class="form-control"  name="filter_start"/>
                                        </div>
                                        <div class="col-md-6">
                                         <input type="date" class="form-control" name="filter_end"/>
                                       </div>
                                     </div>
                                    </div>  
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                    <input type="hidden" name="action_type" value="filter"/>
                                    <button type="submit" name= "filter" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>
                            </div>
                        </form>
                                
                                    <thead>
                                        <tr>
                                            <th>Start Date</th>
                                            <th>Coach Name</th>
                                            <th>Client Name</th>
                                            <th>Sessions</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 

                                         if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter'){

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));

                                         $contract = $conn->query("SELECT * FROM `traininglog` INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN client ON traininglog.CLIENT_ID = client.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE TL_RegDate BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());
                                            while($fcon = $contract->fetch_array()) {
                                                                    ?> 
                                        <tr>
                                            <td><?php echo $fcon['TL_RegDate']?></td>
                                            <td><?php echo $fcon['Coach_FirstName']?> 
                                                <?php echo $fcon['Coach_LastName']?></td>
                                            <td><?php echo $fcon['CLIENT_FirstName'] ?> 
                                                <?php echo $fcon['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fcon['TP_PackageType'] ?></td>
                                            <td><?php echo $fcon['TL_Expiry'] ?></td>
                                        </tr>
                                        <?php 
                                     }
                                 }
                             } else {

                                     $contract = $conn->query("SELECT * FROM `traininglog` INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN client ON traininglog.CLIENT_ID = client.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code") or die(mysql_error());
                                            while($fcon = $contract->fetch_array()) {
                                                                    ?> 
                                        <tr>
                                            <td><?php echo $fcon['TL_RegDate']?></td>
                                            <td><?php echo $fcon['Coach_FirstName']?> 
                                                <?php echo $fcon['Coach_LastName']?></td>
                                            <td><?php echo $fcon['CLIENT_FirstName'] ?> 
                                                <?php echo $fcon['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fcon['TP_PackageType'] ?></td>
                                            <td><?php echo $fcon['TL_Expiry'] ?></td>
                                        </tr>
                                    <?php
                                        }
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