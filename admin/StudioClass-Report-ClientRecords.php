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
                <h2>Client Class Records</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Client Class Records
                                </li>
                            </ol>
            </div>
        </div>

    <?php include("StudioClass-Report-List.php"); ?>
    <div class="card">
        <div class="header">
        <h2>Client Class Records</h2>
        </div>
                       <div class="body">
                         <div class="row">
                            <form>
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
                                    <button type="submit" name= "check" class="btn bg-teal btn-block btn-lg waves-effect">Submit</button>
                            </div>
                            <div class="col-md-3"  style="margin-top: 30px;">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>

                          </form>
                        </div>
                            <label>Client Class Records</label>
                            <div class="table-responsive">
                                <div id="print">
                                <table class="table table-bordered table-striped table-hover dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Class Date</th>
                                            <th>Class Name</th>
                                            <th>Coach Name</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                 <?php


             $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 

            if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                      if($_REQUEST['action_type'] == 'check'){

                $cr = $conn->query("SELECT * FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code INNER JOIN coach ON studioclasssession.COACH_ID = coach.COACH_ID WHERE `CLIENT_ID` = ".$_GET['clientName']." ") or die(mysql_error());

                                while($fcr = $cr->fetch_array()) {
                                    $cname = $conn->query("SELECT * FROM `client` WHERE `CLIENT_ID` = '$_GET[clientName]' ") or die(mysql_error());
                                    $fetchc = $cname->fetch_array();
                                    ?>
                                        <tr>
                                            <td><?php echo $fetchc['CLIENT_FirstName'] ?> <?php echo $fetchc['CLIENT_LastName'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fcr['SCS_Date'])) ?></td>
                                            <td><?php echo $fcr['SC_Name'] ?></td>
                                            <td><?php echo $fcr['Coach_FirstName'] ?> 
                                                <?php echo $fcr['Coach_LastName'] ?></td>
                                            <td><?php echo date("g:i A", strtotime($fcr['SCS_StartTime'])) ?></td>
                                            <td><?php echo date("g:i A", strtotime($fcr['SCS_EndTime'])) ?></td>
                                        </tr>
                                        
                                        <?php
                                    }
                            }
                        } else {
                            $cr = $conn->query("SELECT * FROM `clientassignment` INNER JOIN client ON clientassignment.CLIENT_ID = client.CLIENT_ID INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code INNER JOIN coach ON studioclasssession.COACH_ID = coach.COACH_ID") or die(mysql_error());

                                while($fcr = $cr->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $fcr['CLIENT_FirstName'] ?> <?php echo $fcr['CLIENT_LastName'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($fcr['SCS_Date'])) ?></td>
                                            <td><?php echo $fcr['SC_Name'] ?></td>
                                            <td><?php echo $fcr['Coach_FirstName'] ?> 
                                                <?php echo $fcr['Coach_LastName'] ?></td>
                                            <td><?php echo date("g:i A", strtotime($fcr['SCS_StartTime'])) ?></td>
                                            <td><?php echo date("g:i A", strtotime($fcr['SCS_EndTime'])) ?></td>
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
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Client Class Records</h2><center><br><br>"+printcontent +"<br><br><br><span>PRINTED BY: ____________ </span>" + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>SIGNED BY: ____________";
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