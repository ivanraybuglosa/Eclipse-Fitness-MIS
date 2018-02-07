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
                                    Maintenenance - Studio Class
                                </li>
                            </ol>
            </div>
        </div>
            
            <div class="card">
            <div class="header">
                <h2>Studio Class</h2>
            </div>
                <div class="body">
                    <div class="row clearfix js-sweetalert">
                        <form method="post" action="actions/studioClassAction.php">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="scname" class="form-control" >
                                            <label class="form-label">Studio Class Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="sccapacity" class="form-control" >
                                            <label class="form-label">Participant Capacity</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="venue" class="form-control" >
                                            <label class="form-label">Venue</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input type="hidden" name="action_type" value="add"/>
                                    <button type="submit" class="btn  waves-effect btn-success pull-right" data-type="success" style="padding:10px;">SUBMIT</button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
            
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                                
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Studio Class Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Capacity</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Venue</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Actions</th>
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $pdo = new dbConnect();
                                            $studioClass = $pdo->getRows("studioclass", array("order_by" => "SC_Code ASC")); 
                                                    if(!empty($studioClass)){
                                                        $count = 0;
                                                            foreach($studioClass as $studioClasses){
                                                                $count++;

                                        ?>
                                        
                                        
                                         <tr role="row" class="odd">
                                            <td><?php echo $studioClasses['SC_Name']; ?></td>
                                            <td><?php echo $studioClasses['SC_Capacity']; ?></td>
                                            <td><?php echo $studioClasses['SC_Venue']; ?></td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#edit-<?php echo $studioClasses['SC_Code']; ?>" class="btn bg-green" >Modify</button></td>

                                          <div class="modal fade" id="edit-<?php echo $studioClasses['SC_Code']; ?>" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                <center>
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="smallModalLabel">EDIT STUDIO CLASS</h3>
                                                    </div>
                                                    <form  method="post" action="actions/studioClassAction.php?" id="myform1">
                                                        <input type="hidden" class="form-control" name="scCode" value="<?php echo $studioClasses['SC_Code']; ?>"/>
                                                        <div class="row container-fluid">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <h5 class="pull-left">Studio Class</h5>
                                                                        <input type="text" class="form-control" name="scname"  value="<?php echo $studioClasses['SC_Name']; ?>"/>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <h5 class="pull-left">Participants</h5>
                                                                        <input type="text" class="form-control" name="sccapacity" value="<?php echo $studioClasses['SC_Capacity']; ?>"/>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <h5 class="pull-left">Venue</h5>
                                                                        <input type="text" class="form-control" name="scvenue" value="<?php echo $studioClasses['SC_venue']; ?>"/>
                                                                    </div>
                                                                </div>
                                                                 
                                                            </div>
                                                        </div>
                                                    </center>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="action_type" value="edit"/>
                                                        <button type="submit"  class="btn  bg-green" data-type='success'>SAVE CHANGES</button>
                                                        <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                    </form>
                                                </div>
                                                
                                           
                                        </tr>
                                        <?php } 
                                                    }else{ ?>
                                                    <tr><td colspan="4">No Studio Class(es) found......</td>
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
