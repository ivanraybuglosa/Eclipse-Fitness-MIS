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
                <h2>Membership History</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Reports - Membership History
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Client-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Membership History Report</h2>
        </div>
                        <div class="body">

                         <div class="row">
                          <form method="POST"> 
                            <div class="col-md-9">
                            <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Client Name</h5>

                                        <select class="form-control show-tick" data-live-search="true" name="clientName">
                                        <option value="null">Choose Client</option>
                                            <?php 
                                            $pdo = new dbConnect();

                                             $client = $pdo->getRows('client',array('order_by'=>'CLIENT_ID ASC'));
                                                    if(!empty($client)){ 
                                                        $count = 0; 
                                                        foreach($client as $clients){
                                                            $count++;?>

                                        <option id = "<?php echo $clients['CLIENT_ID']; ?>" value="<?php echo $clients['CLIENT_ID']; ?>">
                                                <?php 
                                                $firstname = $clients['CLIENT_FirstName']; 
                                                      $lastname = $clients['CLIENT_LastName']; 
                                                      $fullname=$firstname." ".$lastname; 
                                                      echo $fullname ; 
                                                 ?>
                                        </option>
                                            <?php 
                                                }
                                            }
                                            ?>
                                </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="margin-top: 30px;">
                                    <input type="hidden" name="action_type" value="check"/>
                                    <button type="submit" name= "check" id="check" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                            </div>

                             </form>
                        </div>

                         <table class="table table-bordered table-striped table-hover dataTable" id="memhistory" name="memhistory" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Registration Date</th>
                                            <th>Membership Type</th>
                                            <th>Membership Duration</th>
                                            <th>Expiry Date</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 


                                if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'check') {

                                            $clientName = $_POST['clientName'];

                                            if($clientName == "null") {
                                              $membership = $conn->query("SELECT * FROM membershiptype INNER JOIN membership ON membershiptype.MS_Code = membership.MS_Code INNER JOIN client ON membershiptype.CLIENT_ID = client.CLIENT_ID ") or die(mysql_error());

                                                while($fmem = $membership->fetch_array()) {
                                             ?>
                                               <tr>
                                                   <td><?php echo $fmem['CLIENT_FirstName'] ?> 
                                                       <?php echo $fmem['CLIENT_MiddleName'] ?> 
                                                       <?php echo $fmem['CLIENT_LastName'] ?> </td>
                                                   <td><?php echo date("F j, Y", strtotime($fmem['M_regDate'])) ?></td>
                                                   <td><?php echo $fmem['MS_Type'] ?></td>
                                                   <td><?php echo $fmem['MS_Duration'] ?></td>
                                                   <td><?php echo date("F j, Y", strtotime($fmem['M_expiryDate'])) ?></td>
                                               </tr>

                                               <?php
                                               }

                                            } else {

                                            $membership = $conn->query("SELECT * FROM membershiptype INNER JOIN membership ON membershiptype.MS_Code = membership.MS_Code INNER JOIN client ON membershiptype.CLIENT_ID = client.CLIENT_ID WHERE client.CLIENT_ID = '$clientName' ") or die(mysql_error());

                                                while($fmem = $membership->fetch_array()) {
                                             ?>
                                               <tr>
                                                   <td><?php echo $fmem['CLIENT_FirstName'] ?> 
                                                       <?php echo $fmem['CLIENT_MiddleName'] ?> 
                                                       <?php echo $fmem['CLIENT_LastName'] ?> </td>
                                                   <td><?php echo date("F j, Y", strtotime($fmem['M_regDate'])) ?></td>
                                                   <td><?php echo $fmem['MS_Type'] ?></td>
                                                   <td><?php echo $fmem['MS_Duration'] ?> Months</td>
                                                   <td><?php echo $fmem['M_expiryDate'] ?></td>
                                               </tr>

                                               <?php
                                               } 
                                             }

                                            }

                                       }  else {

                                         $membership = $conn->query("SELECT * FROM membershiptype INNER JOIN membership ON membershiptype.MS_Code = membership.MS_Code INNER JOIN client ON membershiptype.CLIENT_ID = client.CLIENT_ID ") or die(mysql_error());

                                                while($fmem = $membership->fetch_array()) {
                                             ?>
                                               <tr>
                                                   <td><?php echo $fmem['CLIENT_FirstName'] ?> 
                                                       <?php echo $fmem['CLIENT_MiddleName'] ?> 
                                                       <?php echo $fmem['CLIENT_LastName'] ?> </td>
                                                   <td><?php echo date("F j, Y", strtotime($fmem['M_regDate'])) ?></td>
                                                   <td><?php echo $fmem['MS_Type'] ?></td>
                                                   <td><?php echo $fmem['MS_Duration'] ?> Months</td>
                                                   <td><?php echo date("F j, Y", strtotime($fmem['M_expiryDate'])) ?></td>
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
    $('#memhistory').DataTable( {
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
                        .prepend('<center><h4>Client Membership History Report</h4></center>')
                        .prepend('<center><h3>Eclipse Healing and Body Design Center</h3></center>')

                    $(win.document.body).find('h3').css('font-family','Impact'); 
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' )

                    $(win.document.body.innerHTML += "<br><br><center><div><label>Printed By: ____________  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Signed By:____________</label></div></center>")
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