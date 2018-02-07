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
                <h2>Training Packages</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Maintenance - Training Packages
                                </li>
                            </ol>
            </div>
        </div>
            <div class="card">
                <div class="header">
                    <h2>Training Package Form</h2>
                </div>
                <div class="body">
                    <div class="row js-sweetalert">
                            <form method="post" action="actions/trainingPackagesAction.php">
                                    <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="packageType" class="form-control" required>
                                            <label class="form-label">Package Type</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="coachType" class="form-control" required>
                                            <label class="form-label">Coach Type</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="price" class="form-control" required>
                                            <label class="form-label">Price</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="validity" class="form-control" required >
                                            <label class="form-label">Validity(Days)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input type="hidden" name="action_type" value="add" />
                                    <button type="submit" class="btn waves-effect btn-success pull-right" style="padding:10px;">SUBMIT</button>
                                </div>
                    </form>
                    </div>
                    
                </div>
                </div>  
            

                
                    <div class="card">
                        <div class="header">
                            <h2>Training Package List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="align-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 230px;">Package Type</th>
                                                        
                                                        <th class="align-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Coach Type</th>
                                                        
                                                        <th class="align-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Price</th>

                                                        <th class="align-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Validity (Days)</th>
                                                        
                                                        <th class="align-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Actions</th>
                                                
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $pdo = new dbConnect();
                                                    $trainingPackages = $pdo->getRows('trainingpackage',array('order_by'=>'TP_Code ASC'));
                                                    if(!empty($trainingPackages)){ 
                                                        $count = 0; 
                                                        foreach($trainingPackages as $trainingPackagess){ $count++;?>
                                         <tr>
                                            <td class="align-center"><?php echo $trainingPackagess['TP_PackageType'];?> Sessions</td>
                                            <td class="align-center"><?php echo $trainingPackagess['TP_CoachType'];?></td>
                                            <td class="align-center"><?php echo $trainingPackagess['TP_Price']; ?></td>
                                            <td class="align-center"><?php echo $trainingPackagess['TP_Validity']; ?></td>
                                            <td class="align-center">
                                                <button type="button" class="btn bg-green" data-toggle="modal" data-target="#view-<?php echo $trainingPackagess['TP_Code']; ?>">Modify</button>
                                            </td>
                                
                                <div class="modal fade" id="view-<?php echo $trainingPackagess['TP_Code'   ]; ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <center>
                                <div class="modal-header">
                                    <h3 class="modal-title" id="smallModalLabel">EDIT TRAINING PACKAGE</h3>
                                </div>
                    <form method="post" action="actions/trainingPackagesAction.php" id="myform1" >
                        <input type="hidden" class="form-control" name="tpCode" value="<?php echo $trainingPackagess['TP_Code']; ?>"/>
                    <div class="row container-fluid">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line"> 
                                    <h5 class="pull-left">Sessions</h5>
                                    <input type="text" class="form-control" value="<?php echo $trainingPackagess['TP_PackageType']; ?>" name="packageType"/>
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Coach Type</h5>
                                        <input type="text" name="coachType" class="form-control" value="<?php echo $trainingPackagess['TP_CoachType']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Price</h5>
                                        <input type="number" name="price" class="form-control" value="<?php echo $trainingPackagess['TP_Price']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Validity</h5>
                                        <input type="number" name="validity" class="form-control" value="<?php echo $trainingPackagess['TP_Validity']; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="action_type" value="edit"/>
                            <button type="submit" class="btn  bg-green " data-type='success'>SAVE CHANGES</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                    </center>
                </div>
            </div>
        
                        
                        
                                        </tr>
                                        <?php } 
                                                    }else{ ?>
                                                    <tr><td colspan="4">No Training Package(s) found...</td>
                                                    <?php } ?>
                                                </tr>
                                      </tbody>
                                </table>
                                    </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
    </div>
    </section>
            <!-- Card 1 -->
            

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
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
</body>

</html>
