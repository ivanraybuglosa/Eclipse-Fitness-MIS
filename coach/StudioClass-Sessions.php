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
                <h2>Studio Class Sessions</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="material-icons">dashboard</i> Dashboard
                    </li>
                    <li class="active">
                        <i class="material-icons">alarm_add</i> Studio Class - Studio Class Sessions
                    </li>
                </ol>
                </div>
        </div>
            
       
        

        <div class="card">
            <div class="header">
                <h2>Studio Class Sessions</h2>
            </div>

            <div class="body">
                            
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Coach</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:100px;">Studio Class</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 80px;">Date</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Start Time</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 70px;">End Time</th> 
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Venue</th>
                                           <!--  
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Actions</th> -->
                                          </tr>
                                    </thead>
                                        <tbody>
                                                 <?php
                                                    include"includes/dbConnect.php";
                                                      $sta1 = $connect->query("SELECT COACH_ID FROM `users` INNER JOIN `coach` on coach.userID = users.userID  WHERE stat = '1' ") or die(mysqli_error());
                                                             while($user1 = $sta1->fetch_array()){ 
                                                                $userF = $user1['COACH_ID'];

                                                                $date = date('Y-m-d');

                                                    $sta = $connect->query("SELECT * FROM `users` INNER JOIN `coach` on coach.userID = users.userID INNER JOIN studioclasssession on studioclasssession.COACH_ID = coach.COACH_ID INNER JOIN `studioclass` on studioclasssession.SC_Code = studioclass.SC_Code WHERE studioclasssession.COACH_ID = '$userF' AND studioclasssession.SCS_Date = '$date' ") or die(mysqli_error());
                                                     }
                                                             while($user = $sta->fetch_array()){  
                                                  ?>

                                                    <tr>
                                                        <!--Client Firstname + Lastname Merged -->
                                                        <td><?php $firstname = $user['Coach_FirstName']; $lastname = $user['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                                        <td><?php echo $user['SC_Name']; ?></td>
                                                        <td><?php echo date("F j, Y", strtotime($user['SCS_Date'])); ?>
                                                        </td>
                                                        <td><?php echo date("0g:i A", strtotime($user['SCS_StartTime'])); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date("g:i A", strtotime($user['SCS_EndTime'])); ?>
                                                           
                                                        </td>
                                                        <td><?php echo $user['SC_Venue']; ?></td>
                                                       
                                                        <!-- <td class="align-center"><a type="button" class="btn bg-green" href="StudioClass-Schedule.php?id=<?php echo $studioclasssession['SCS_Code']?>&amp;coach=<?php echo $studioclasssession['COACH_ID'];?>">View</button></td> -->

                                                        </tr>
<?php } ?>
                                                   

                                                  
                                                    
                                                </tbody>
                                      
                                </table>
                                    </div>
                                    </div>
                                    
                                    </div>    
             
            
           
    </div> 
</section>     
                
            
            


    <!-- Jquery Core Js -->
    <?php include("includes/footer.php"); ?>

    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    


</body>

</html>
