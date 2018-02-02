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
                <h2>Coach Classes</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Coach Classes
                                </li>
                            </ol>
            </div>
        </div>

    <?php include("PT-Report-List.php"); ?>
    <div class="card">
        <div class="header">
        <h2>Coach Classes</h2>
        </div>
                       <div class="body">
                         <div class="row">
                            <form>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Coach Name</h5>

                                        <select class="form-control show-tick" data-live-search="true" id="coachName2" name="coachName2">
                                            <?php 
                                            $pdo = new dbConnect();
                                            $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());  

                                             $coaches = $pdo->getRows('coach',array('order_by'=>'COACH_ID ASC'));
                                                    if(!empty($coaches)){ 
                                                        $count = 0; 
                                                        foreach($coaches as $coach){ 
                                                            $count++;?>

                                        <option id = "myUL<?php echo $coach['COACH_ID']; ?>" value="<?php echo $coach['COACH_ID']; ?>">
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
                                    <button type="submit" name= "check" class="btn bg-teal btn-block btn-lg waves-effect">Submit</button>
                            </div>
                            <div class="col-md-3"  style="margin-top: 30px;">
                                    <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                                </div>

                             </form>
                        </div>
                    <label>Studio Class Records</label>
                    <div class="table-responsive">
                            <div id="print">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>Coach Name</th>
                                            <th>Class Date</th>
                                            <th>Class Name</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Venue</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                <?php 
                                //INCOMPLETE CODE. DAPAT WHERE COACH_ID = 'option value'

            if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
                                        if($_REQUEST['action_type'] == 'check'){

                            $sc = $conn->query("SELECT * FROM `studioclasssession` INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE `COACH_ID` = '$_GET[coachName2]' ") or die(mysql_error());


                            while($scf = $sc->fetch_array()) {
                                 $cname = $conn->query("SELECT * FROM `coach` WHERE `COACH_ID` = '$_GET[coachName2]' ") or die(mysql_error());
                                 $fetchc = $cname->fetch_array();
                                ?>
                                        <tr>
                                            <td><?php echo $fetchc['Coach_FirstName'] ?> <?php echo $fetchc['Coach_LastName'] ?></td>
                                            <td><?php echo $scf['SCS_Date'] ?></td>
                                            <td><?php echo $scf['SC_Name'] ?></td>
                                            <td><?php echo $scf['SCS_StartTime'] ?></td>
                                            <td><?php echo $scf['SCS_EndTime'] ?></td>
                                            <td><?php echo $scf['SCS_Venue'] ?></td>
                                        </tr>
                                        
                                        <?php 
                                        }
                                    }
                                }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                     </div>
                 </div>
            </section>

            <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h2>Coach Classes</h2><center><br><br>"+printcontent +"<br><br><br><span>PRINTED BY: ____________ </span>" + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>SIGNED BY: ____________";
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