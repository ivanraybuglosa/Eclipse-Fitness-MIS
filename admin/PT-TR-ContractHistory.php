<?php
 include "../dbConnect.php";
 session_start();

 
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
                                <div class="row clearfix">

                                <div class="col-md-5">
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
                               <table class="table table-bordered table-striped table-hover dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"> 
                                    <thead>
                                        <tr>
                                            <th>Contract Start Date</th>
                                            <th>Coach Name</th>
                                            <th>Client Name</th>
                                            <th>Classification</th>
                                            <th>Sessions</th>
                                            <th>Contract End Date</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                         $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 

                                 if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'filter'){

                                            $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
                                            $filterend = date('Y-m-d', strtotime($_POST['filter_end']));
                                            $clientName = $_POST['clientName'];

                                        if($clientName != "null" && ($filterstart == $_POST['filter_start'] && $filterend = $_POST['filter_end'])) {
                            
                                     $contract = $conn->query("SELECT * FROM `traininglog` INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN client ON traininglog.CLIENT_ID = client.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE TL_RegDate BETWEEN '$filterstart' AND '$filterend' AND client.CLIENT_ID = '$clientName' ") or die(mysql_error());

                                            while($fcon = $contract->fetch_array()) {
                                                $tempcode = $fcon['TL_Code'];
                                                $getmeasure = $conn->query("SELECT M_Classification FROM measurements WHERE TL_Code ='$tempcode' ") or die(mysqli_error());
                                                $fmeasure = $getmeasure->fetch_array();
                                        ?> 
                                            <tr>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_RegDate'])) ?></td>
                                            <td><?php echo $fcon['Coach_FirstName']?> 
                                                <?php echo $fcon['Coach_LastName']?></td>
                                            <td><?php echo $fcon['CLIENT_FirstName'] ?> 
                                                <?php echo $fcon['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fmeasure['M_Classification'] ?></td>
                                            <td><?php echo $fcon['TP_PackageType'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_Expiry'])) ?></td>
                                        </tr>
                                        <?php 
                                        }

                                     } else if ($clientName == "null" && ($filterstart != $_POST['filter_start'] || $filterend != $_POST['filter_end'])) { 

                                        $contract = $conn->query("SELECT * FROM traininglog INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN CLIENT ON traininglog.CLIENT_ID = CLIENT.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code ") or die(mysql_error());
                                            while($fcon = $contract->fetch_array()) {
                                                $tempcode = $fcon['TL_Code'];
                                                $getmeasure = $conn->query("SELECT M_Classification FROM measurements WHERE TL_Code ='$tempcode' ") or die(mysqli_error());
                                                $fmeasure = $getmeasure->fetch_array();
                                        ?> 
                                        <tr>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_RegDate'])) ?></td>
                                            <td><?php echo $fcon['Coach_FirstName']?> 
                                                <?php echo $fcon['Coach_LastName']?></td>
                                            <td><?php echo $fcon['CLIENT_FirstName'] ?> 
                                                <?php echo $fcon['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fmeasure['M_Classification'] ?></td>
                                            <td><?php echo $fcon['TP_PackageType'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_Expiry'])) ?></td>
                                        </tr>
                                    <?php
                                        }
                                     } else {
                                        $contract = $conn->query("SELECT * FROM traininglog INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN CLIENT ON traininglog.CLIENT_ID = CLIENT.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE TL_RegDate BETWEEN '$filterstart' AND '$filterend' OR client.CLIENT_ID = '$clientName' ") or die(mysql_error());

                                            while($fcon = $contract->fetch_array()) {
                                                $tempcode = $fcon['TL_Code'];
                                                $getmeasure = $conn->query("SELECT M_Classification FROM measurements WHERE TL_Code ='$tempcode' ") or die(mysqli_error());
                                                $fmeasure = $getmeasure->fetch_array();
                                                                    ?> 
                                        <tr>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_RegDate'])) ?></td>
                                            <td><?php echo $fcon['Coach_FirstName']?> 
                                                <?php echo $fcon['Coach_LastName']?></td>
                                            <td><?php echo $fcon['CLIENT_FirstName'] ?> 
                                                <?php echo $fcon['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fmeasure['M_Classification'] ?></td>
                                            <td><?php echo $fcon['TP_PackageType'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_Expiry'])) ?></td>
                                        </tr>
                                    <?php
                                        }
                                     }
                                 }
                             } else {

                                     $contract = $conn->query("SELECT * FROM traininglog INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN CLIENT ON traininglog.CLIENT_ID = CLIENT.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code ") or die(mysql_error());
                                            while($fcon = $contract->fetch_array()) {
                                                $tempcode = $fcon['TL_Code'];
                                                $getmeasure = $conn->query("SELECT M_Classification FROM measurements WHERE TL_Code ='$tempcode' ") or die(mysqli_error());
                                                $fmeasure = $getmeasure->fetch_array();
                                                                    ?> 
                                        <tr>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_RegDate'])) ?></td>
                                            <td><?php echo $fcon['Coach_FirstName']?> 
                                                <?php echo $fcon['Coach_LastName']?></td>
                                            <td><?php echo $fcon['CLIENT_FirstName'] ?> 
                                                <?php echo $fcon['CLIENT_LastName'] ?></td>
                                            <td><?php echo $fmeasure['M_Classification'] ?></td>
                                            <td><?php echo $fcon['TP_PackageType'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fcon['TL_Expiry'])) ?></td>
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
            </section>

            <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Personal Training Contract History</h2><center><br><br>" +
                         printcontent + "<br><br><br><span>PRINTED BY: ____________ </span>" + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>SIGNED BY: ____________";
                         window.print();
                         document.body.innerHTML = restorepage;
                     }


            </script>
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