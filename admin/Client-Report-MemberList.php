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
                <h2>Member List</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Reports - Member List
                                </li>
                            </ol>
            </div>
        </div>

    <?php include("Client-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Member List</h2>
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

                         <table class="table table-bordered table-striped table-hover dataTable" id="memlist" name="memlist" role="grid" aria-describedby="DataTables_Table_0_info">
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

                                         $ml = $conn->query("SELECT * FROM client WHERE CLIENT_RegStatus = 'Member' && CLIENT_regDATE BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());

                                         while($fml = $ml->fetch_array()) { 
                                    ?>
                                        <tr>
                                            <td><?php echo $fml['CLIENT_FirstName'] ?> 
                                                <?php echo $fml['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fml['CLIENT_Gender'] ?></td>
                                            <td><?php echo $fml['CLIENT_ContactNumber'] ?></td>
                                            <td><?php echo $fml['CLIENT_Email'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fml['CLIENT_regDATE'])) ?></td>
                                            
                                        </tr>
                                        <?php 
                                     }
                                 }
                             } else {

                                     $ml = $conn->query("SELECT * FROM client WHERE CLIENT_RegStatus = 'Member' ") or die(mysql_error());

                                         while($fml = $ml->fetch_array()) { 

                                              ?>  
                                              <tr>
                                            <td><?php echo $fml['CLIENT_FirstName'] ?> 
                                                <?php echo $fml['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fml['CLIENT_Gender'] ?></td>
                                            <td><?php echo $fml['CLIENT_ContactNumber'] ?></td>
                                            <td><?php echo $fml['CLIENT_Email'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fml['CLIENT_regDATE'])) ?></td>

                                        </tr>
                                    <?php
                                        }
                                    }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <script>
$(document).ready(function() {
    $('#memlist').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 'copy', 'csv', 'excel',
            { 
                extend: 'print',
                title: '',
                responsive: true,
                footer: true,
                className: '',
                customize: function ( win ) {
                    $(win.document.body)
                        .prepend('<left><h4>433-0000</h4></left>')
                        .prepend('<left><h4>La Salle Avenue, Bacolod City</h4></left>')
                        .prepend('<left><h4>Member List</h4></left>')
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