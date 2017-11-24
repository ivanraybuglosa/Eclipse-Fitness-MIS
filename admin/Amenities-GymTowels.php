
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
            
        <!-- Small Size -->
			
			
			
			
			
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Update</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Towel Count</h5>
                                            <input type="number" class="form-control" placeholder="Towel Count" value="2"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Locker Number</h5>
                                            <input type="number" class="form-control" placeholder="Locker Number" value="42"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">SAVE CHANGES</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
			
			
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                            <h2>
                                 Towels
                            </h2>

                        <div class="col-auto pull-left">
							<form method="POST" action="actions/towelsAction.php">
                           <div class="row container-fluid">
                                <div class="col-sm-12" style="margin-top: 60px;">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name ="supplied"class="form-control" placeholder="Supply Towels" />
                                        </div>
                                    </div>
									<input type="hidden" name="action_type" value="supply"/>
                                    <button type="submit" name ="submit" class="btn btn-success waves-effect" style="margin-top:-20px;">
                                         <span style="padding: 5px;"> SUPPLY</span>
                                     </button>
									
									
									
                                </div>
                            </div>
								</form>
							<form method="POST" action="actions/towelsAction.php">
                                <div class="col-sm-12" style="margin-top: 20px;">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="laundry" class="form-control" placeholder="For laundry" />
                                        </div>
                                    </div>
									<input type="hidden" name="action_type" value="laundry"/>
                                     <button name = "submit" type="submit" class="btn bg-red waves-effect" style="margin-top:-20px;">
                                         <span>LAUNDRY</span>
                                     </button>
                                </div>

							</form>
                         </div>
                             
                    </div>
                                                        
														
									
                        <div class="body table-responsive">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">sort</i>
                        </div>
                        <div class="content">
                            <div class="text">Available</div>
                            <div class="number">250</div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">add</i>
                        </div>
                        <div class="content">
                            <div class="text">Supplied</div>
                            <div class="number">300</div>
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
                            <div class="number">50</div>
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
                            <div class="number">0</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">receipt</i>
                        </div>
                        <div class="content">
                            <div class="text">Used</div>
                            <div class="number">50</div>
                        </div>
                    </div>
                </div>
                            
            </div>
        </div>
		<div class="card">

                <div class="header">
                    <h2>
                        Equipments
                    </h2>
                </div>
                <div class="body">
                    <form action="actions/equipmentsAction.php" method="POST">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group" style="margin-top:15px">
                                    <div class="form-line">
                                        <input type="text" name="type" class="form-control" placeholder="Type" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="model" class="form-control" placeholder="Model" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" />
                                    </div>
                                </div>
                                <input type="hidden" name="action_type" value="add"/>
                                <button type="submit" name="submit" class="btn  waves-effect btn-success pull-right" style="padding:10px; margin-bottom:10px;">SAVE</button>
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
