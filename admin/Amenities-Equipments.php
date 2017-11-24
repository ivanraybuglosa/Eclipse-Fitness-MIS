
<?php
include "../dbConnect.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location: ../login.php');
}
include("includes/header.php"); ?>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Record</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


            <ol class="breadcrumb">
                <li>
                    <a href="index.php">
                        <i class="material-icons">dashboard</i> Dashboard
                    </a>
                </li>
                <li class="active">
                    <i class="material-icons">lock</i> Amenity - Record
                </li>
            </ol>
        </div>
    </div>

        <div class="card">
            <div class="header">
                <h2>Towel Monitoring</h2>
            </div>

            <div class="body">
                <div class="row">
                    <div id="full-calendar">              
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

    <!-- Small Size -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>List of Equipment</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr role="row">
                                            <th align="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Type</th>

                                            <th align="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Model</th>

                                            <th align="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Quantity</th>

                                            <th align="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Last Checked Date</th>

                                            <th align="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Status</th>

                                            <th align="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $pdo = new dbConnect();
                                        $eqp = $pdo->getRows('equipment',array('order_by'=>'E_Code ASC'));
                                        if(!empty($eqp)){ $count = 0; foreach($eqp as $equipment){ $count++;?>
                                        <tr>
                                            <td class="hidden"><?php echo $equipment['E_Code']; ?></td>
                                            <td><?php echo $equipment['E_Name']; ?></td>
                                            <td><?php echo $equipment['E_Type']; ?></td>
                                            <td><?php echo $equipment['E_Quantity']; ?></td>
                                            <td><?php echo $equipment['E_Quantity']; ?></td>
                                            <td><?php echo $equipment['E_Quantity']; ?></td>
                                            <td>    
                                            <td class="align-center">
                                                <input type="hidden" name="action_type" value="mod"/>
                                                <button type="button" class="btn bg-green" data-toggle="modal"   data-target="#mod-<?php echo $equipment['E_Code']; ?>" 
                                                        style="height: 30px;">Modify</button></td></td>


                                    <div class="modal fade" id="mod-<?php echo $equipment['E_Code']; ?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="smallModalLabel">Edit Equipment Information</h3>
                                                </div>
                                                <form method="post" action="actions/equipmentsAction.php?" id="myform1" >
                                                    <input type="hidden" class="form-control" name="E_Code" value="<?php echo $equipment['E_Code']; ?>"/>
                                                    <div class="row container-fluid">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <h5 class="pull-left">Type</h5>
                                                                    <input type="text" class="form-control" name="type" placeholder="Type" value= "<?php echo $equipment['E_Name'];?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <h5 class="pull-left">Model</h5>
                                                                    <input type="text" name="model" class="form-control" placeholder="Model" value="<?php echo $equipment['E_Type']; ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <h5 class="pull-left">Last Checked Date</h5>
                                                                    <input type="text" class="form-control" placeholder="Last Checked Date" value="Last Checked Date">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <h5 class="pull-left">Status</h5>
                                                                    <input type="text" class="form-control" placeholder="Email Address" value="Email Address"/>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>



                                                    <div class="modal-footer">
                                                        <input type="hidden" name="action_type" value="edit"/>
                                                        <button type="submit" name ="edit" class="btn  bg-green" data-type='success'>SAVE</button>
                                                        <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                </form>
                                            </div>      
                                            </tr>
                                        <?php } }else{ ?>
                                        <tr><td colspan="4">No Equipment(s) found......</td>
                                            <?php } ?>
                                        </tr>

                                        </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>



<?php include("includes/footer.php"); ?>
<!-- Custom Js -->
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

<script type="text/javascript" src="../assets/js/pages/fullcalendar/lib/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="../assets/js/pages/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript" src="../assets/js/pages/fullcalendar.js"></script>
<script type="text/javascript" src="../assets/js/pages/fullcalendar/js/fullcalendar.min.js"></script>

</body>

</html>
            