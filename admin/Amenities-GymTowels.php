
<?php
 include "../dbConnect.php";
 session_start();
 
 include("includes/header.php"); ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Activity</h2>
            </div>
            
            <ol class="breadcrumb">
                                
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                           
                                <li class="active">
                                    <i class="material-icons">exposure</i> Amenities - Activities
                                </li>
                            </ol>
			
			
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                            <h2>
                                 Towels
                            </h2>

                        <div class="col-auto pull-left">
							<form method="POST" action="actions/towelInventoryAction.php">
                           <div class="row container-fluid">
                                <div class="col-sm-12" style="margin-top: 60px;">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" min="1" name="supply" class="form-control" placeholder="Supply Towels" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="action_type" value="add"/>
                                    <button type="submit" name ="submit" class="btn btn-success waves-effect" style="margin-top:-20px;">
                                         <span style="padding: 5px;">SUPPLY</span>
                                     </button>
									
									
									
                                </div>
                            </div>
								</form>
							<form method="POST" action="actions/towelInventoryAction.php">
                                <div class="col-sm-12" style="margin-top: 20px;">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="laundry" class="form-control" />
                                        </div>
                                    </div>
                 

									<input type="hidden" name="action_type" value="laundry"/>
                                     <button name ="submit" type="submit" class="btn bg-red waves-effect" style="margin-top:-20px;">
                                         <span>LAUNDRY</span>
                                     </button>
                                </div>

							</form>
                         </div>
                             
                    </div>


                                                        
						
                        <div class="body table-responsive">
                        <?php 
                            $pdo = new dbConnect();
                            $available = $pdo->previousAvailable();
                            $towels = $pdo->towels(date("Y-m-d"),array("order_by" => "TI_Code"));
                            if(!empty($towels)){ 
                                $count = 0; 
                                foreach($towels as $towel){ 
                                $count++;
                                ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">add</i>
                        </div>
                        <div class="content">
                            <div class="text">Supplied</div>
                            <div class="number"><?php echo $towel["supply"] ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-red hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">receipt</i>
                        </div>
                        <div class="content">
                            <div class="text">Laundry</div>
                            <div class="number"><?php echo $towel["laundry"] ?>  </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">sort</i>
                        </div>
                        <div class="content">
                          
                            <div class="text">Available</div>
                            <div class="number"><?php echo $available ?></div>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">remove</i>
                        </div>
                        <div class="content">
                            <div class="text">Borrowed</div>
                            <div class="number"><?php echo $towel["TI_Borrowed"] ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assignment_returned</i>
                        </div>
                        <div class="content">
                            <div class="text">Returned</div>
                            <div class="number"><?php echo $towel["TI_Returned"] ?></div>
                        </div>
                    </div>
                </div>
                <?php }} ?>
                
                
                
                          
            </div>
        </div>

		<div class="card">

                <div class="header">
                    <h2>
                        Equipment
                    </h2>
                </div>
                <div class="body">
                    <form action="actions/equipmentsAction.php" method="POST">
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group" >
                                    <label>Equipment Type</label>
                                    <div class="form-line">
                                        <input type="text" name="type" class="form-control" placeholder="Type" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Model</label>
                                    <div class="form-line">
                                        <input type="text" name="model" class="form-control" placeholder="Model" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Delivery Date</label>
                                    <div class="form-line">
                                        <input type="date" name="deliveryDate" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Delivery Time</label>
                                    <div class="form-line">
                                        <input type="time" name="deliveryTime" min="08:00" max="22:00" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <div class="form-line">
                                        <input type="number" min="0" name="quantity" class="form-control" placeholder="Quantity" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Supplier</label>
                                    <div class="form-line">
                                        <input type="text" name="supplier" class="form-control" placeholder="Supplier" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="hidden" name="action_type" value="add"/>
                                <button type="submit" name="submit" class="btn  waves-effect btn-success pull-right" style="padding:10px; margin-bottom:10px;">SUBMIT</button>
                            </div>
                        </div>
                    </form>
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
