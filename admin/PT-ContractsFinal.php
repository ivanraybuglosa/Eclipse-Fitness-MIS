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
                <h2>Contracts</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    <i class="material-icons">perm_contact_calendar</i> Personal Training - Contracts
                                </li>
                            </ol>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Personal Training Contracts</h2>
            </div>
            <!-- Tab panes -->
        

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Coach</th>
                                            <th>Coach Type</th>
                                            <th>Number of Sessions</th>
                                            <th>Training Duration</th>
                                            <th>Training Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $pdo = new dbConnect();
                                            
                                            $ptClients = $pdo->rowsjoin('traininglog','client','coach','trainingpackage','CLIENT_ID','COACH_ID','TP_Code',array('order_by'=>'TL_Code ASC'));

                                            if(!empty($ptClients)){ 
                                                $count = 0; 
                                                foreach($ptClients as $pt){ 
                                                $count++;
                                               

                                        ?>
                                        <tr>
                                            <td><?php $firstname = $pt['CLIENT_FirstName']; $lastname = $pt['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                            
                                            <td><?php $firstname = $pt['Coach_FirstName']; $lastname = $pt['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                            <td><?php echo $pt['Coach_Type']?></td>
                                            <td><?php echo $pt['TP_PackageType']?> Sessions</td>
                                            <td><?php echo $pt['TP_Validity']?> Days</td>
                                            <td><?php echo $pt['TL_TrainingStatus']?></td>
                                            
                                             <td class="align-center">
                                                
                                                <a type="button" href="PT-ContractsInfo.php?id=<?php echo $pt['TL_Code'];?>&amp;client=<?php echo $pt['CLIENT_ID'];?>" class="btn bg-green" >View</a>
                                            
                                             </td>
                                        </tr>
                                        <?php } }else{ ?>

                                                    <tr><td colspan="6">No Personal Training Contract(s) found......</td></tr>

                                                    <?php } ?>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
    </section>
    <?php include("includes/footer.php"); ?>
<script>

</script>

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

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <script src="../assets/js/pages/charts/chartjsnew.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
