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
                                                    $pdo = new dbConnect();
                                                    $scs = $pdo->getRowsInnerJoin("SCS_Code","COACH_Firstname","SC_Name",'studioclasssession','coach','studioclass',"COACH_ID","SC_Code",array('order_by'=>'SCS_Code DESC'));
                                                    if(!empty($scs)){ 
                                                        $count = 0; foreach($scs as $studioclasssession){ 
                                                            $count++;?>
                                                    <tr>
                                                        <!--Client Firstname + Lastname Merged -->
                                                        <td><?php $firstname = $studioclasssession['Coach_FirstName']; $lastname = $studioclasssession['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                                        <td><?php echo $studioclasssession['SC_Name']; ?></td>
                                                        <td><?php echo date("F j, Y", strtotime($studioclasssession['SCS_Date'])); ?>
                                                        </td>
                                                        <td><?php echo date("0g:i A", strtotime($studioclasssession['SCS_StartTime'])); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date("g:i A", strtotime($studioclasssession['SCS_EndTime'])); ?>
                                                           
                                                        </td>
                                                        <td><?php echo $studioclasssession['SC_Venue']; ?></td>
                                                       
                                                        <!-- <td class="align-center"><a type="button" class="btn bg-green" href="StudioClass-Schedule.php?id=<?php echo $studioclasssession['SCS_Code']?>&amp;coach=<?php echo $studioclasssession['COACH_ID'];?>">View</button></td> -->

                                                        </tr>

                                                    <?php } }else{ ?>

                                                    <tr><td colspan="6">No Studio Class Session(s) found......</td></tr>

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
