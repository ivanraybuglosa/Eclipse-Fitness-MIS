<?php
 include "../dbConnect.php";
 session_start();
 if (!$_SESSION['admin'])  
{  
    header('location:../login.php');  
    exit;  
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
                            <div class="col-md-6">
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

                            <div class="col-md-3"  style="margin-top: 30px;">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>

                             </form>
                        </div>

                    <label>Client Membership Records</label>
                        <div id="print">
                         <table class="table table-bordered table-striped table-hover dataTable" id="reportattendance" name="reportattendance" role="grid" aria-describedby="DataTables_Table_0_info">
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
                    </div>

                    <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Transaction History Report</h2><center><br><br>" +
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