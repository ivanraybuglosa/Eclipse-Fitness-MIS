<?php
 include "../dbConnect.php";
 session_start();
if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
    }
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Equipment List</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Amenities - Reports - Equipment List
                                </li>
                            </ol>
            </div>
        </div>
    </div>
    <?php include("Amenities-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Equipment List</h2>
        </div>
        
                        <div class="body">
                        <form method="POST">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <div class="form-line">
                                        <div class="col-md-6">
                                         <input type="date" class="form-control"  id="filterstart" name="filter_start"/>
                                        </div>
                                        <div class="col-md-6">
                                         <input type="date" class="form-control" name="filter_end"/>
                                       </div>
                                     </div>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <input type="hidden" name="action_type" value="filter"/>
                                    <button type="submit" name= "filter" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>

                                <div class="col-md-3">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>

                            </div>
                        </form>

                        <div id="print">
                         <table class="table table-bordered table-striped table-hover dataTable" id="reportattendance" name="reportattendance" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Gender</th>
                                            <th>Contact Number</th>
                                            <th>Email Address</th>
                                            <th>Registration Date</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                    $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

                                     if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter'){

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));

                                        $wl = $conn->query("SELECT * FROM client WHERE CLIENT_RegStatus = 'Walk-in' && CLIENT_regDATE BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());

                                         while($fwl = $wl->fetch_array()) { 
                                              ?>  
                                              <tr>
                                                    <td><?php echo $fwl['CLIENT_FirstName'] ?> 
                                                    <?php echo $fwl['CLIENT_LastName'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_Gender'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_ContactNumber'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_Email'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_regDATE'] ?></td>
                                             </tr>
                                            <?php 
                                            }
                                        }
                                    } else {

                                     $wl = $conn->query("SELECT * FROM client WHERE CLIENT_RegStatus = 'Walk-in' ") or die(mysql_error());

                                         while($fwl = $wl->fetch_array()) { 
                                              ?>  
                                              <tr>
                                                    <td><?php echo $fwl['CLIENT_FirstName'] ?> 
                                                    <?php echo $fwl['CLIENT_LastName'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_Gender'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_ContactNumber'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_Email'] ?></td>
                                                    <td><?php echo $fwl['CLIENT_regDATE'] ?></td>
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

                    <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Client Walk-in List</h2><center><br><br>" +
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