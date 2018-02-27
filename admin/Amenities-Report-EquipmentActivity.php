<?php
 include "../dbConnect.php";
 session_start();
 
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
                                    Amenities - Reports - Equipment Activity
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Amenities-Report-List.php"); ?>
        <div class="card">
            <div class="header">
                <h2>Equipment Activity</h2>
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
                                </div>

                                <div class="col-md-3">
                                    <input type="hidden" name="action_type" value="filter"/>
                                    <button type="submit" name= "filter" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>

                            </div>
                        </form>
                            <table class="table table-bordered table-striped table-hover dataTable" id="eqactivity" name="eqactivity" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            
                                            <th>Equipment Type</th>

                                            <th>Equipment Model</th>

                                            <th>Date</th>

                                            <th>Time</th>
                                            
                                            <th>Activity</th>

                                            <th>Quantity</th>
                                                
                                          </tr>
                                    </thead>
                                    
                                   
                                        <tbody>
                                            <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 

                                         if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter'){

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));

                                            if($filterstart != $_POST['filter_start'] || $filterend != $_POST['filter_end']) {

                                                $equips = $conn->query("SELECT * FROM `equipmentinventory` INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code ") or die(mysql_error());

                                            while($eq = $equips->fetch_array()) { 

                                              ?>  
                                              <tr>
                                                 <td><?php echo $eq['E_Type'] ?></td>
                                                 <td><?php echo $eq['E_Model'] ?></td>
                                                 <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                 <td><?php echo date("g:i A", strtotime($eq['EI_DeliveryTime'])) ?></td>
                                                 <td><?php echo $eq['EI_Activity']; ?></td>
                                                 <td><?php echo $eq['EI_Quantity'] ?></td>

                                              </tr>
                                    <?php
                                        }


                                            } else {
                                                $equips = $conn->query("SELECT * FROM `equipmentinventory` INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code WHERE EI_DeliveryDate BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());

                                            while($eq = $equips->fetch_array()) { 

                                              ?>  
                                              <tr>
                                                 <td><?php echo $eq['E_Type'] ?></td>
                                                 <td><?php echo $eq['E_Model'] ?></td>
                                                 <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                 <td><?php echo date("g:i A", strtotime($eq['EI_DeliveryTime'])) ?></td>
                                                 <td><?php echo $eq['EI_Activity']; ?></td>
                                                 <td><?php echo $eq['EI_Quantity'] ?></td>

                                              </tr>
                                    <?php
                                        }
                                 }
                                        
                                 }
                             } else {
                                     $equips = $conn->query("SELECT * FROM `equipmentinventory` INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code ") or die(mysql_error());

                                            while($eq = $equips->fetch_array()) { 

                                              ?>  
                                              <tr>
                                                 <td><?php echo $eq['E_Type'] ?></td>
                                                 <td><?php echo $eq['E_Model'] ?></td>
                                                 <td><?php echo date("F j, Y", strtotime($eq['EI_DeliveryDate'])) ?></td>
                                                 <td><?php echo date("g:i A", strtotime($eq['EI_DeliveryTime'])) ?></td>
                                                 <td><?php echo $eq['EI_Activity']; ?></td>
                                                 <td><?php echo $eq['EI_Quantity'] ?></td>

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
             <script>
              
                $(document).ready(function() {

                 $('#eqactivity').DataTable( {
                     dom: 'Bfrtip',
                     buttons: [ 'copy', 'csv', 'excel',
                          { 
                              extend: 'print',
                              title: '',
                              responsive: true,
                              footer: true,
                    customize: function ( win ) {
                    $(win.document.body)
                        .prepend('<left><h4>433-0000</h4></left>')
                        .prepend('<left><h4>La Salle Avenue, Bacolod City</h4></left>')
                        .prepend('<left><h4>Equipment Activity Report</h4></left>')
                        .prepend('<left><h3>Eclipse Healing and Body Design Center</h3></left>')

                    $(win.document.body).find('h3').css('font-family','Impact'); 
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' )

                    $(win.document.body.innerHTML += "<br><br><center><div><label>Date Printed: ____________  &nbsp; &nbsp; &nbsp; Printed By:____________ &nbsp; &nbsp; &nbsp; &nbsp; Signed By: ____________</label></div></center>")
                }

                        }
                  ]
               } );


            } );

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