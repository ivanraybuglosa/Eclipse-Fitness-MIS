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
                <h2>Transaction History</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Reports - Transaction History
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Client-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Transaction History Report</h2>
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
                                <div class="col-md-2">
                                    <input type="hidden" name="action_type" value="filter"/>
                                    <button type="submit" name= "filter" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>

                                <div class="col-md-2">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>

                            </div>
                        </form>

                        <div id="print">
                        <label>Transaction Records</label>
                         <table class="table table-bordered table-striped table-hover dataTable" id="reportattendance" name="reportattendance" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr>
                                            <th>Transaction Date</th>
                                            <th>Client Name</th>
                                            <th>Transaction Type</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 


                                if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter') {

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));
                                            $clientName = $_POST['clientName'];

                                            if($clientName != "null" && $filterstart == $_POST['filter_start']) {
                                                $th = $conn->query("SELECT * FROM transaction WHERE CLIENT_ID = '$clientName' AND TR_TransactionDate BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());

                                                while($fth = $th->fetch_array()) {
                                                $cid = $fth['CLIENT_ID'];
                                                $client = $conn->query("SELECT * FROM client WHERE CLIENT_ID = '$cid' ") or die(mysql_error());
                                                $fc = $client->fetch_array()
                                             ?>
                                               <tr>
                                                   <td><?php echo date("F j, Y", strtotime($fth['TR_TransactionDate'])) ?></td>
                                                   <td><?php echo $fc['CLIENT_FirstName'] ?> 
                                                       <?php echo $fc['CLIENT_MiddleName'] ?> 
                                                       <?php echo $fc['CLIENT_LastName'] ?> </td>
                                                   <td><?php echo $fth['TR_Type'] ?></td>
                                                   <td><?php echo $fth['TR_Bill'] ?></td>
                                               </tr>

                                               <?php
                                               } 
                                            } else if($clientName == "null" && ($filterstart != $_POST['filter_start'] || $filterend != $_POST['filter_end'])) {

                                                $th = $conn->query("SELECT * FROM transaction INNER JOIN client ON transaction.CLIENT_ID = client.CLIENT_ID ") or die(mysql_error());

                                                 while($fth = $th->fetch_array()) { 
                                                 ?>
                                                     <tr>
                                                          <td><?php echo date("F j, Y", strtotime($fth['TR_TransactionDate'])) ?></td>
                                                          <td><?php echo $fth['CLIENT_FirstName'] ?> 
                                                              <?php echo $fth['CLIENT_MiddleName'] ?> 
                                                              <?php echo $fth['CLIENT_LastName'] ?></td>
                                                          <td><?php echo $fth['TR_Type'] ?></td>
                                                          <td><?php echo $fth['TR_Bill'] ?></td>
                                                     </tr>
                                                  <?php

                                            } 
                                        } else {

                                            $th = $conn->query("SELECT * FROM transaction WHERE CLIENT_ID = '$clientName' OR TR_TransactionDate BETWEEN '$filterstart' AND '$filterend' ") or die(mysql_error());

                                            while($fth = $th->fetch_array()) {
                                                $cid = $fth['CLIENT_ID'];
                                                $client = $conn->query("SELECT * FROM client WHERE CLIENT_ID = '$cid' ") or die(mysql_error());
                                                $fc = $client->fetch_array()
                                             ?>
                                               <tr>
                                                   <td><?php echo date("F j, Y", strtotime($fth['TR_TransactionDate'])) ?></td>
                                                   <td><?php echo $fc['CLIENT_FirstName'] ?> 
                                                       <?php echo $fc['CLIENT_MiddleName'] ?> 
                                                       <?php echo $fc['CLIENT_LastName'] ?> </td>
                                                   <td><?php echo $fth['TR_Type'] ?></td>
                                                   <td><?php echo $fth['TR_Bill'] ?></td>
                                               </tr>
                                               <?php
                                                 }
                                            }
                                        }

                                    }  else {

                                         $th = $conn->query("SELECT * FROM transaction INNER JOIN client ON transaction.CLIENT_ID = client.CLIENT_ID ") or die(mysql_error());

                                                 while($fth = $th->fetch_array()) { 
                                                 ?>
                                                     <tr>
                                                          <td><?php echo date("F j, Y", strtotime($fth['TR_TransactionDate'])) ?></td>
                                                          <td><?php echo $fth['CLIENT_FirstName'] ?> 
                                                              <?php echo $fth['CLIENT_MiddleName'] ?> 
                                                              <?php echo $fth['CLIENT_LastName'] ?></td>
                                                          <td><?php echo $fth['TR_Type'] ?></td>
                                                          <td><?php echo $fth['TR_Bill'] ?></td>
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