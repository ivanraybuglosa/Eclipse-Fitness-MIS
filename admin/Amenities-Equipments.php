
<?php
include "../dbConnect.php";
session_start();

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
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Towel Monitoring</h2>
                </div>
                <div class="body">
                    
                        <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                            <thead>
                                <tr>
                                    <th>Activity</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $pdo = new dbConnect();
                                    $supplied = $pdo->towelSupplied(array("order_by" => "TI_Date DESC"));
                                    if(!empty($supplied)){ 
                                        $count = 0; 
                                        foreach($supplied as $supply){ 
                                        $count++;
                                ?>
                                <tr>
                                    <td><?php echo $supply['TI_Type']?></td>
                                    <td><?php echo date("F j, Y", strtotime($supply['TI_Date']))?></td>
                                    <td><?php echo date("g:i A", strtotime($supply['TI_Time']))?></td>
                                    <td>
                                        <?php 
                                            if($supply['TI_Type'] === "Supply"){
                                                echo $supply['TI_Supplied'];
                                            }else{
                                                echo $supply['TI_Laundry'];
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php } }else{ ?>
                                    <tr><td colspan="6">No Towel Activity found......</td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    
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
                            <h2>Equipment Monitoring</h2>
                        </div>
                        <div class="body">

                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr role="row">
                                            <th><center>Type</center></th>
                                            <th><cemter>Model</cemter></th>
                                            <th><center>Quantity</center></th>
                                            <th><center>Latest Delivery Date</center></th>
                                            <th><center>Latest Delivery Time</center></th>
                                            <th><center>Actions</center></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $pdo = new dbConnect();
                                        $eqp = $pdo->equipmentRows(array('order_by'=>'E_Model'));
                                            if(!empty($eqp)){ 
                                                $count = 0; 
                                                foreach($eqp as $equipment){ 
                                                $count++;
                                        $quantityRestock = $pdo->quantityRestock($equipment['E_Type'],$equipment['E_Model']);
                                        $quantityDiscard = $pdo->quantityDiscard($equipment['E_Type'],$equipment['E_Model']);
                                        ?>
                                        <tr>
                                            <td><?php echo $equipment['E_Type']; ?></td>
                                            <td><?php echo $equipment['E_Model']; ?></td>
                                            <td><?php echo $quantityRestock - $quantityDiscard ?></td>
                                            <td><?php echo date("F d, Y", strtotime($equipment['EI_DeliveryDate'])) ?></td>
                                            <td><?php echo date("g:i A", strtotime($equipment['EI_DeliveryTime'])) ?></td>
                                            <td>
                                                <center>
                                                    <button class="btn btn-success" data-toggle="modal" data-target="#restock-<?php echo $equipment['EI_Code']; ?>" waves-effect btn-success" >Details</button>
                                                </center>
                                            
                                    <div class="modal fade" id="restock-<?php echo $equipment['EI_Code']; ?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                
                                                <form method="post" action="actions/equipmentsAction.php">
                                                <div class="modal-header">
                                                    <h3 class="modal-title"><center><?php echo $equipment['E_Type']?> Details</center></h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                    <div class="header">
                                                        <h2>Restock/Discard <?php echo $equipment['E_Type']?></h2>
                                                    </div>
                                                    <div class="body">
                                                <div class="row clearfix">
                            <div class="col-lg-4">
                                <div class="form-group" >
                                    <label>Equipment Type</label>
                                    <div class="form-line">
                                        <input type="text" name="restockType" class="form-control" placeholder="Type" value="<?php echo $equipment['E_Type']?>" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Model</label>
                                    <div class="form-line">
                                        <input type="text" name="restockModel" class="form-control" placeholder="Model" value="<?php echo $equipment['E_Model']?>" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <div class="form-line">
                                        <input type="number" min="0" name="restockQuantity" class="form-control" placeholder="Quantity" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Delivery Date</label>
                                    <div class="form-line">
                                        <input type="date" required="true" name="restockDeliveryDate" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Delivery Time</label>
                                    <div class="form-line">
                                        <input type="time" required="true" name="restockDeliveryTime" min="07:00" max="22:00" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group" style="margin-top:20px;">
                                            <label style="margin-top: 9px;">Activity </label>
                                            <input type="radio" checked value="Restock" name="activity" id="restock" class="with-gap" required\">
                                            <label for="restock">Restock</label>

                                            <input type="radio"  value="Discard" name="activity" id="discard" class="with-gap" required">
                                            <label for="discard" class="m-l-20">Discard</label>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" name="E_Code" value="<?php echo $equipment['E_Code']?>">
                                <input type="hidden" name="action_type" value="restock"/>
                                <button type="submit" name ="submit" class="btn pull-right bg-green" data-type='success'>SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                            
                       
                    
                            <div class="card">     
                                <div class="header">
                                    <h2><?php echo $equipment['E_Type']?> Inventory</h2>
                                </div>
                                <div class="body">

                                    <div class="row clearfix">


                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th><center>Activity</center></th>
                                            <th><center>Date</center></th>
                                            <th><center>Time</center></th>
                                            <th><center>Quantity</center></th>                                             
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                            <?php
                                                $pdo = new dbConnect();
                                                $equips = $pdo->equipHistory($equipment['E_Code'],array("order_by" => "EI_DeliveryDate DESC"));

                                                    if(!empty($equips)){
                                                        $count = 0;
                                                        foreach($equips as $equip){
                                            ?>                         
                                        <tr>
                                            <td><center><?php echo $equip['EI_Activity'] ?></center></td>
                                            <td><center><?php echo date("F j, Y", strtotime($equip['EI_DeliveryDate'])) ?></center></td>
                                            <td><center><?php echo date("g:i A", strtotime($equip['EI_DeliveryTime'])) ?></center></td>
                                            <td><center><?php echo $equip['EI_Quantity']; ?></center></td>
                                             <?php }}?>
                                        </tr>


                                       
                                        </tbody>
                                    </table>

                                </div>
                         
                            
                                        </div>
                                        <div class="modal-footer">

                                <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        </td>

                                            </tr>
                                        <?php } }else{ ?>
                                        <tr><td colspan="6">No Equipment(s) found......</td>
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
<script type="text/javascript" src="../assets/js/pages/fullcalendar/lib/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="../assets/js/pages/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript" src="../assets/js/pages/fullcalendar/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="../assets/js/pages/fullcalendar/fullcalendar-script.js"></script>
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



</body>

</html>
            