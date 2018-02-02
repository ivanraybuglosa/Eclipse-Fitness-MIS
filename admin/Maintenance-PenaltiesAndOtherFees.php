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
                <h2>Studio Class</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Maintenenance - Penalties and Other Fees
                                </li>
                            </ol>
            </div>
        </div>
            
            
            
                    <div class="card">
                        <div class="header">
                            <h2>Penalties and Other Fees</h2>
                        </div>
                            <div class="body">

                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                                
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Type</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Fee</th>

                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Actions</th>
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 

                                        $pdo = new dbConnect();
                                        $penalties = $pdo->getRows('penalties',array("order_by" => "P_ID"));
                                            if(!empty($penalties)){
                                                $count = 0;
                                                foreach($penalties as $penalty){

                                        ?>
                                        
                                        
                                         <tr role="row" class="odd">
                                            <td><?php echo $penalty['P_Type']?></td>
                                            <td><?php echo $penalty['P_Fee']?></td>
                                            
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#edit-<?php echo $penalty['P_ID']; ?>" class="btn bg-green" >Modify</button></td>

                                          <div class="modal fade" id="edit-<?php echo $penalty['P_ID']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel"><strong>Modify Fee</strong></h3>
                        </div>

                        <div class="container-fluid">
                            
                                <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Type</h5>
                                        <input type="text" class="form-control" placeholder="Client Name" value="<?php echo $penalty['P_Type'] ?>" disabled/>
                                    </div>
                                </div>

                            

                            <form method="POST" action="actions/penaltiesAction.php">
                                <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">Fee</h5>
                                        <input name="fee" type="number" class="form-control" placeholder="<?php echo $penalty['P_Fee']?>" min="0" />
                                    </div>
                                </div>

                        </div>

                    </center>
                    <div class="modal-footer">
                        <input type="hidden" name="P_ID" value="<?php echo $penalty['P_ID'];?>"/>
                        <input type="hidden" name="action_type" value="edit"/>
                        <button type="submit" name="submit" class="btn  bg-green">SAVE CHANGES</button>
                        <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                                                
                                           
                                        </tr>
                                      <?php } }else{ ?>
                                    <tr><td colspan="6">No Penalties found......</td></tr>
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
                </div>
            </div>
            <!-- #END# Hover Rows -->

            </div>
    </section>
<?php include("includes/footer.php"); ?>



    <script src="../assets/js/pages/dialogsStudioClass.js"></script>
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
