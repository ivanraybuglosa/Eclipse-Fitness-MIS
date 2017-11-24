
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
                 
                <h2><strong>Attendance</strong></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    <i class="material-icons">queue</i> Attendance
                                </li>
                            </ol>
                </div>
                            
                       
                    
                </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                            <h2>
                                 Current Gym Users
                            </h2>

                        <div class="col-auto pull-left">
                           <div class="row container-fluid">
                                <div class="col-sm-12" style="margin-top: 50px;">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="CLIENT_ID" class="form-control" placeholder="Client Code" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#time-in">
                                     
                                    <i class="material-icons" >access_alarm</i>
                                    <span>TIME-IN &nbsp;</span>
                                </button>

                                <button type="button" class="btn btn-danger waves-effect" data-toggle="modal"  data-target="#timeout">
                                    <i class="material-icons" >access_alarm</i>
                                    <span>TIME-OUT</span>
                                </button>

                         </div>
                             
                        </div>


                        <div class="body table-responsive">
                            <table class="table table-hover">
                               <thead>
                                        <tr>
                                            <th class="center">Client Code</th>
                                            <th class="center">Client Name</th>
                                            <th class="center">Time-in</th>
                                            <th class="center">Time-out</th>
                                            <th class="center">Towels</th>
                                            <th class="center">Locker No.</th>
                                            <th class="center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td name="CLIENT_ID"class="center">ACD14827</td>
                                            <td class="center">Legislador, Patrick</td>
                                            <td name="A_TimeIn"class="center">9:11 AM</td>
                                            <td name="A_TimeOut" class="center">4:05 PM</td>
                                            <td name="A_TowelQty"class="center">2</td>
                                            <td name="A_LockerKey" class="center">42</td>
                                            <td class="center"><button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal">Modify</button></td>
  
                                        </tr>
                                        <tr>
                                            <td class="center">XLP01981</td>
                                            <td class="center">Nessia, Brix</td>
                                            <td class="center">8:05 AM</td>
                                            <td class="center">10:10 AM</td>
                                            <td class="center">2</td>
                                            <td class="center">81</td>
                                            <td class="center"><button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Modify</button></td>
                                        </tr>
                                        <tr>
                                            <td class="center">GTD12671</td>
                                            <td class="center">Buglosa, Ivan</td>
                                            <td class="center">12:34 PM</td>
                                            <td class="center">3:45 PM</td>
                                            <td class="center">3</td>
                                            <td class="center">190</td>
                                            <td class="center"><button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Modify</button></td>

                                        </tr>
                                        <tr>
                                            <td class="center">OZA01011</td>
                                            <td class="center">Yanson, Vicmar</td>
                                            <td class="center">1:15 PM</td>
                                            <td class="center">2:12 PM</td>
                                            <td class="center">1</td>
                                            <td class="center">79</td>
                                            <td class="center"> <button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Modify</button></td>
                                        </tr>
                                        <tr>
                                            <td class="center">GMJ52011</td>
                                            <td class="center">Gayoba, Miriam</td>
                                            <td class="center">1:44 PM</td>
                                            <td class="center">2:30 PM</td>
                                            <td class="center">3</td>
                                            <td class="center">12</td>
                                            <td class="center"> <button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Modify</button></td>
                                        </tr>

                                    </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Daily Attendance</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <div class="row clearfix">
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control" value="2017-05-10">
                                        </div>
                                    </div>  
                                </div>
                                
                                  
                                    <thead>
                                        <tr>
                                            <th align="center">Client Name</th>
                                            <th align="center">Time-in</th>
                                            <th align="center">Time-out</th>
                                            <th align="center">Towels</th>
                                            <th align="center">Locker No.</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td align="center">Legislador, Patrick</td>
                                            <td align="center">1:21 PM</td>
                                            <td align="center">3:50 PM</td>
                                            <td align="center">2</td>
                                            <td align="center">151</td>
                                            
                                        </tr>
                                        <tr>
                                           <td align="center">Tueres, Joshua</td>
                                            <td align="center">9:25 AM</td>
                                            <td align="center">11:30 AM</td>
                                            <td align="center">3</td>
                                            <td align="center">98</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">Ano, Jemmel</td>
                                            <td align="center">11:12 AM</td>
                                            <td align="center">2:05 PM</td>
                                            <td align="center">2</td>
                                            <td align="center">67</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">Nessia, Brix</td>
                                            <td align="center">3:50 PM</td>
                                            <td align="center">6:15 PM</td>
                                            <td align="center">4</td>
                                            <td align="center">19</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">Buglosa, Ivan</td>
                                            <td align="center">5:29 PM</td>
                                            <td align="center">8:14 PM</td>
                                            <td align="center">2</td>
                                            <td align="center">53</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">Gayoba, Miriam</td>
                                            <td align="center">8:30 AM</td>
                                            <td align="center">12:05 PM</td>
                                            <td align="center">1</td>
                                            <td align="center">21</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">Sombilla, Mark</td>
                                            <td align="center">8:37 AM</td>
                                            <td align="center">1:20 PM</td>
                                            <td align="center">2</td>
                                            <td align="center">39</td>
                                        </tr>
                                         <tr>
                                            <td align="center">Gerundio, Jyth</td>
                                            <td align="center">10:09 AM</td>
                                            <td align="center">2:05 PM</td>
                                            <td align="center">3</td>
                                            <td align="center">109</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">Rubiato, Alessander</td>
                                            <td align="center">1:45 PM</td>
                                            <td align="center">4:51 PM</td>
                                            <td align="center">1</td>
                                            <td align="center">91</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Small Size -->
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Modify Client Amenities</h3>
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
                <!--- Time out modal -->
                <div class="modal fade" id="timeout" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel"><strong>Client Time-out</strong></h3>
                        </div>
                        
                        
                            <div class="row container-fluid">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Client Code</h5>
                                            <input type="text" class="form-control" placeholder="Client Code" value="AA0001"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Client Name</h5>
                                            <input type="text" class="form-control" placeholder="Client Name" value="Hans Patrick Legislador"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Time-In</h5>
                                            <input type="text" class="form-control" placeholder="Time-In" value="8:00 AM"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Time-Out</h5>
                                            <input type="text" class="form-control" placeholder="Time-Out" value="9:00 AM"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Locker No.</h5>
                                            <input type="number" class="form-control" placeholder="Locker" value="56"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Towels</h5>
                                            <input type="number" class="form-control" placeholder="Towels" value="2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Returned Locker No.</h5>
                                            <input type="number" class="form-control" placeholder="Locker" value="56"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Towels</h5>
                                            <input type="number" class="form-control" placeholder="Towels" value="2"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Client Activity</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                <div class="row clearfix">
                               
                                
                                  
                                    <thead>
                                        <tr>
                                            <th align="center">Activity</th>
                                            <th align="center">Coach</th>
                                            <th align="center">Start Time</th>
                                            <th align="center">End Time</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td align="center">Spinning</td>
                                            <td align="center">Mark Benjamin</td>
                                            <td align="center">8:00 AM</td>
                                            <td align="center">9:00 AM</td>
                                            
                                            
                                        </tr>
                                   
                                        
                                        
                                    </tbody>
                                     </div> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
                                </div>
                            
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">TIME-OUT</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="modal fade" id="time-in" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                  <center>
                     <div class="modal-header">
                      <h3 class="modal-title" id="editLabel">EDIT WORKOUT</h3>
                      </div>
                       <form method="post" action="" id="myform1" >
                          <input type="hidden" class="form-control" name="workoutCode" value=""/>
                           <div class="row container-fluid">
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <h5 class="pull-left">Client Code</h5>
                                           <input type="text" class="form-control" name="workoutName" value="VY0052" disabled/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <div class="form-line">
                                                 <h5 class="pull-left">Client Name</h5>
                                                 <input type="text" class="form-control"  name="workoutType" value="Vicmar Yanson" disabled />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="pull-left">Locker Number </h5>
                                        <select class="form-control" name="Locker" style="height:50%">
                                             <?php echo get_locker() ?>
                                        </select>
                                         <?php
                                         function get_locker()
                                            {

                                                //if clientName.Gender = Male $M range is 1-150, if Female 151-300
                                                $var="";
                                                for ($m=1; $m<=150; $m++) {
                                                    $var .= '<option value="'.$m.'">'.$m.' </option>';
                                                }
                                                return $var;

                                                //if number is selected to time-in. Remove from choices
                                            }
                                         ?>
                                        </div>
                                       <div class="form-group">
                                           <div class="form-line">
                                               <h5 class="pull-left">Towels</h5>
                                               <input type="number" class="form-control"  name="BodyPart" value=""/>
                                         </div>
                                     </div>
                                                                                     
                                  </div>
                             </div>
                        </center>
                             <div class="modal-footer">
                                 <input type="hidden" name="action_type" value="edit"/>
                                 <button type="submit"  class="btn  bg-green" data-type='success'>TIME-IN</button>
                                <button type="button" class="btn  bg-red" data-dismiss="modal">CANCEL</button>
                            </div>
                        </form>
                    </div>
                </div>




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
   
</body>

</html>