<?php
 include "../dbConnect.php";
 session_start();
 
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Equipment Inventory Report</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Amenities - Reports - Equipment Inventory Report
                                </li>
                            </ol>
            </div>
        </div>
    </div>
    <?php include("Amenities-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Equipment Inventory Report</h2>
        </div>
        
                        <div class="body">
                        <form method="POST">
                            <div class="row clearfix">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <div class="form-line">
                                        <div class="col-md-6">
                                         <input type="date" class="form-control"  id="filterstart" name="filter_start"/>
                                        </div>
                                        <div class="col-md-6">
                                         <input type="date" class="form-control"  id="filterend" name="filter_end"/>
                                       </div>
                                     </div>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                            <select class="form-control show-tick" data-live-search="true" id="equips" name="equips">
                                        <option value="null">Choose Equipment Type</option>
                                            <?php 
                                            $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

                                            $equip = $conn->query("SELECT * FROM equipment") or die(mysql_error());

                                            while($eq = $equip->fetch_array()) {
                                                ?>

                                        <option id = "<?php echo $eq['E_Code']; ?>" value="<?php echo $eq['E_Code']; ?>">
                                                <?php echo $eq['E_Type']; ?>
                                        </option>
                                            <?php 
                                                }
                                            ?>
                                </select>

                                </div>
                                <div class="col-md-2">
                                    <input type="hidden" name="action_type" value="filter"/>
                                    <button type="submit" name= "filter" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>

                                <div class="col-md-2">
                                    <a id="printer" class="btn bg-green btn-block btn-lg" onclick="printContent('print');">Print</a>
                                </div>

                            </div>
                        </form>
                        <div id="print">
                         <table class="table table-bordered table-striped table-hover dataTables js-basic-example" id="equipmentreport" name="equipmentreport" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr>
                                            <th>Equipment Type</th>
                                            <th>Equipment Model</th>
                                            <th>Delivery Date</th>
                                            <th>Quantity</th>
                                            <th>Supplier</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 


                                if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter') {

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));
                                            $equipName = $_POST['equips'];

                                            if($equipName != "null" && $filterstart == $_POST['filter_start']) {
                                                $equip = $conn->query("SELECT * FROM equipmentinventory INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code WHERE EI_DeliveryDate BETWEEN '$filterstart' AND '$filterend' AND equipment.E_Code = '$equipName' ") or die(mysql_error());

                                         while($eq = $equip->fetch_array()) { 
                                              ?>  
                                              <tr>
                                                    <td><?php echo $eq['E_Type'] ?></td>
                                                    <td><?php echo $eq['E_Model'] ?></td>
                                                    <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                    <td><?php echo $eq['EI_Quantity'] ?></td>
                                                    <td><?php echo $eq['EI_Supplier'] ?></td>
                                             </tr>
                                                 <?php
                                              } 
                                            } else if($equipName == "null" && ($filterstart != $_POST['filter_start'] || $filterend != $_POST['filter_end'])) {

                                                $equip = $conn->query("SELECT * FROM equipmentinventory INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code ") or die(mysql_error());

                                                 while($eq = $equip->fetch_array()) { 
                                                    ?>  

                                                 <tr>
                                                    <td><?php echo $eq['E_Type'] ?></td>
                                                    <td><?php echo $eq['E_Model'] ?></td>
                                                    <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                    <td><?php echo $eq['EI_Quantity'] ?></td>
                                                    <td><?php echo $eq['EI_Supplier'] ?></td>
                                                </tr>

                                                    <?php

                                                 }
                                                
                                         } else {

                                            $equip = $conn->query("SELECT * FROM equipmentinventory INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code WHERE EI_DeliveryDate BETWEEN '$filterstart' AND '$filterend' OR equipment.E_Code = '$equipName' ") or die(mysql_error());

                                         while($eq = $equip->fetch_array()) { 
                                              ?>  
                                              <tr>
                                                    <td><?php echo $eq['E_Type'] ?></td>
                                                    <td><?php echo $eq['E_Model'] ?></td>
                                                    <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                    <td><?php echo $eq['EI_Quantity'] ?></td>
                                                    <td><?php echo $eq['EI_Supplier'] ?></td>
                                             </tr>
                                             <?php

                                                 }
                                            }
                                        }

                                    }  else {

                                         $equip = $conn->query("SELECT * FROM equipmentinventory INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code ") or die(mysql_error());

                                         while($eq = $equip->fetch_array()) { 
                                              ?>  
                                              <tr>
                                                    <td><?php echo $eq['E_Type'] ?></td>
                                                    <td><?php echo $eq['E_Model'] ?></td>
                                                    <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                    <td><?php echo $eq['EI_Quantity'] ?></td>
                                                    <td><?php echo $eq['EI_Supplier'] ?></td>
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
                      $(document).ready(function() {
                        
                      });

                     function printContent(el) {

                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Equipment Inventory Report</h2><center><br><br>" +
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