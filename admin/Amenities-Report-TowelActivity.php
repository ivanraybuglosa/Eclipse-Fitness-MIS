<?php
 include "../dbConnect.php";
 session_start();
 if (!$_SESSION['admin'])  
{  
    header('location:../login.php');  
    exit;  
}
 include("includes/header.php"); 
 ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Amenity Reports</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Amenities - Reports - Supply and Laundry Record
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Amenities-Report-List.php"); ?>
        <div class="card">
            <div class="header">
                <h2>Supply and Laundry Record</h2>
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
                            <table class="table table-bordered table-striped table-hover dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            
                                            <th>Date</th>

                                            <th>Type</th>

                                            <th>Time</th>
                                            
                                            <th>Amount</th>
                                                
                                          </tr>
                                    </thead>
                                    
                                   
                                        <tbody>
                                            <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 

                                         if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter'){

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));

                                        $tow = $conn->query("SELECT * FROM `towelinventory` WHERE TI_Date BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());

                                            while($towels = $tow->fetch_array()) { 

                                              ?>  
                                              <tr>
                                
                                                 <td><?php echo date("F j, Y", strtotime($towels['TI_Date'])) ?></td>
                                                 <td><?php echo $towels['TI_Type']; ?></td>
                                                 <td><?php echo date("g:i A", strtotime($towels['TI_Time'])) ?></td>
                                                 <td><?php echo $towels['TI_Supplied'] ?> <?php echo $towels['TI_Laundry'] ?></td>

                                              </tr>
                                             <?php 
                                     }
                                 }
                             } else {
                                     $tow = $conn->query("SELECT * FROM `towelinventory`") or die(mysql_error());

                                            while($towels = $tow->fetch_array()) { 

                                              ?>  
                                              <tr>
                                
                                                 <td><?php echo date("F j, Y", strtotime($towels['TI_Date'])) ?></td>
                                                 <td><?php echo $towels['TI_Type']; ?></td>
                                                 <td><?php echo date("g:i A", strtotime($towels['TI_Time'])) ?></td>
                                                 <td><?php echo $towels['TI_Supplied'] ?> <?php echo $towels['TI_Laundry'] ?></td>

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
                        </div>
                         <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h4>Towel Supply and Laundry </h4><center><br><br>" +
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