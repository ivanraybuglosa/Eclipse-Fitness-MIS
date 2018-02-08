    <?php
 include "../dbConnect.php";
 session_start();
 
 
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Coach Contracts</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Coach Contracts
                                </li>
                            </ol>
            </div>
        </div>

    <?php include("PT-Report-List.php"); ?>
    <div class="card">
        <div class="header">
        <h2>Coach Contracts</h2>
        </div>
                       <div class="body">
                         <div class="row">
                            <form method="POST">
                            <div class="col-md-6">
                            <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Coach Name</h5>

                                        <select class="form-control show-tick" data-live-search="true" id="coachName" name="coachName">
                                            <?php 
                                            $pdo = new dbConnect();
                                            $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());  
                                             $coaches = $pdo->getRows('coach',array('order_by'=>'COACH_ID ASC'));
                                                    if(!empty($coaches)){ 
                                                        $count = 0; 
                                                        foreach($coaches as $coach){ 
                                                            $count++;?>

                                        <option id = "coach<?php echo $coach['COACH_ID']; ?>" value="<?php echo $coach['COACH_ID']; ?>">
                                                <?php 
                                                $firstname = $coach['Coach_FirstName']; 
                                                      $lastname = $coach['Coach_LastName']; 
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
                                    <button type="submit" name= "check" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                            </div>
                            <div class="col-md-3"  style="margin-top: 30px;">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>

                          </form>
                        </div>
                            <label>Personal Training Records</label>
                            <div class="table-responsive">
                                <div id="print">
                                <table class="table table-bordered table-striped table-hover dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    
                                    <thead>
                                        <tr>
                                            <th>Coach Name</th>
                                            <th>Registration Date</th>
                                            <th>Client Name</th>
                                            <th>Sessions</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                 <?php
            if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                      if($_REQUEST['action_type'] == 'check'){

                $pt = $conn->query("SELECT * FROM `traininglog` INNER JOIN client ON traininglog.CLIENT_ID = client.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE `COACH_ID` = ".$_POST['coachName']." ") or die(mysql_error());

                                while($ptf = $pt->fetch_array()) {
                                    $cname = $conn->query("SELECT * FROM `coach` WHERE `COACH_ID` = '$_POST[coachName]' ") or die(mysql_error());
                                    $fetchc = $cname->fetch_array();
                                    ?>
                                        <tr>
                                            <td><?php echo $fetchc['Coach_FirstName'] ?> <?php echo $fetchc['Coach_LastName'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($ptf['TL_RegDate'])) ?></td>
                                            <td><?php echo $ptf['CLIENT_FirstName'] ?> 
                                                <?php echo $ptf['CLIENT_LastName'] ?></td>
                                            <td><?php echo $ptf['TP_PackageType'] ?> Sessions</td>
                                            <td><?php echo date("F j, Y", strtotime($ptf['TL_Expiry'])) ?></td>
                                        </tr>
                                        
                                        <?php
                                    }
                            }
                        }   else {
                            $pt = $conn->query("SELECT * FROM `traininglog` INNER JOIN client ON traininglog.CLIENT_ID = client.CLIENT_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID") or die(mysql_error());

                                while($ptf = $pt->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $ptf['Coach_FirstName'] ?> <?php echo $ptf['Coach_LastName'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($ptf['TL_RegDate'])) ?></td>
                                            <td><?php echo $ptf['CLIENT_FirstName'] ?> 
                                                <?php echo $ptf['CLIENT_LastName'] ?></td>
                                            <td><?php echo $ptf['TP_PackageType'] ?> Sessions</td>
                                            <td><?php echo date("F j, Y", strtotime($ptf['TL_Expiry'])) ?></td>
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
                <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Coach Training Contracts</h2><center><br><br>"+printcontent +"<br><br><br><span>PRINTED BY: ____________ </span>" + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>SIGNED BY: ____________";
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