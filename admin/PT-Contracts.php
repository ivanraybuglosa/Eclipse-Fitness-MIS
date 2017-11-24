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
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane animated fadeInRight active" id="home_animation_2">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                           
                                            <th>Status</th>
                                            <th>Coach</th>
                                            <th>Coach Type</th>
                                            <th>Package Type</th>
                                            <th>Validity</th>
                                            <th>Training Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            
                                            <td>Member</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green">Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>1 Sessions</td>
                                            <td>7 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Ashley Conning</td>
                                            <td>Junior</td>
                                            <td>24 Sessions</td>
                                            <td>168 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            
                                            <td>Member</td>
                                            <td>Clark Sonn</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Clark Sonn</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                        
                                            <td>Walk-in</td>
                                            <td>Xenon Rawse</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            
                                            <td>Member</td>
                                             <td>Xenon Rawse</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                         <tr>
                                            <td>Tiger Nixon</td>
                                            
                                            <td>Member</td>
                                            <td>Kevin Garnett</td>
                                             <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                             <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                          
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Cedrc Kelly</td>
                                           
                                            <td>Member</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>8 Sessions</td>
                                            <td>56 Days</td>
                                            
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>1 Sessions</td>
                                            <td>7 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>1 Sessions</td>
                                            <td>7 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>1 Sessions</td>
                                            <td>7 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            
                                            <td>Walk-in</td>
                                            <td>Kevin Garnett</td>
                                            <td>Senior</td>
                                            <td>1 Sessions</td>
                                            <td>7 Days</td>
                                            
                                            <td class="colorOn">On Going</td>
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_measurements" class="btn bg-green" >Manage</button></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#MOD_training" class="btn bg-green" >Train</button></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
           
        
        <!--- modals -->
        <div class="modal fade" id="MOD_measurements" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                   <center>
                             <div class="modal-header">
                            <div class="block-header">
                <h2><strong>Client Information</strong></h2>
            </div>
                                 
 <ul class="nav nav-tabs  nav-justified" id="tabContent">
    
     <li class="active">
         <a href="#bodymassindex" data-toggle="tab">Body Mass Index</a>
     </li>
      <li>
            <a href="#bodymeasurements" data-toggle="tab">Body Measurements</a>
     </li>
     <li>
            <a href="#healthcondition" data-toggle="tab">Health Condition</a>
     </li>
    
    
</ul>

<div class="tab-content">
 
    
    <div class="tab-pane active" id="bodymassindex">
             <div class="body">
                    <h5><i>Initial Body Mass Index</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Weight:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="192cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Skeletal Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="19cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Fat Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="100%">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Total Body Water:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="12%">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Fat Free Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="12%">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Mass Index:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="90%">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Percent Body Fat:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="20%">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Waist-Hip Ratio:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="12cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Basal-Metabolic Rate:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="12cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                               
                    <hr/>
                 
                  <h5><i>Final Body Mass Index</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Weight:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Skeletal Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Fat Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Total Body Water:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Fat Free Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Mass Index:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Percent Body Fat:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Waist-Hip Ratio:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Basal-Metabolic Rate:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                               
                    <hr/>
        </div>
        
    </div>


     <div class="tab-pane" id="bodymeasurements">
         <div class="body">
             <fieldset>
         <h5><i>Initial Body Measurements</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Fat Percent:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="20%">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Left Upper Arm:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="192cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Right Upper Arm:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="192cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Chest:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="100cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Waist:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="250cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Hip:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="56cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Left Upper Thigh:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="45cm">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Right Upper Thigh:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder=45cm"">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Resting Heart Rate:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="5">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                    </div>
         <h5><i>Final Body Measurements</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Fat Percent:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Left Upper Arm:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Right Upper Arm:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Chest:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Waist:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Hip:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Left Upper Thigh:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Right Upper Thigh:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Resting Heart Rate:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                    </div>
                                 </fieldset>
         
    </div>
     
    </div>


    <div class="tab-pane" id="healthcondition">
                  <div class="body">
                    <fieldset>
                         <div class="demo-checkbox" style="margin:30px;">
                            <div class="col-md-4">
                                <input type="checkbox" id="md_checkbox_1"/>
                                <label for="md_checkbox_1">Asthma</label>
                                <input type="checkbox" id="md_checkbox_2"/>
                                <label for="md_checkbox_2">Hypertension</label>
                                <input type="checkbox" id="md_checkbox_3"/>
                                <label for="md_checkbox_3">Stroke</label>
                                <input type="checkbox" id="md_checkbox_4" />
                                <label for="md_checkbox_4">Heart Disease</label>
                                <input type="checkbox" id="md_checkbox_5" />
                                <label for="md_checkbox_5">High Blood</label>
                                <input type="checkbox" id="md_checkbox_6"/>
                                <label for="md_checkbox_6" style="margin-left:-4px;">Obesity</label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="md_checkbox_7" />
                                <label for="md_checkbox_7">Back Pain</label>
                                <input type="checkbox" id="md_checkbox_8" />
                                <label for="md_checkbox_8">Osteoporosis</label>
                                <input type="checkbox" id="md_checkbox_9" />
                                <label for="md_checkbox_9">Disability</label>
                                <input type="checkbox" id="md_checkbox_10" />
                                <label for="md_checkbox_10">Acidity</label>
                                <input type="checkbox" id="md_checkbox_11" />
                                <label for="md_checkbox_11">Seizure</label>
                                <input type="checkbox" id="md_checkbox_12" />
                                <label for="md_checkbox_12" style="margin-left:-3px;">Paralysis</label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="md_checkbox_13" />
                                <label for="md_checkbox_13">Epilepsy</label>
                                <input type="checkbox" id="md_checkbox_14" />
                                <label for="md_checkbox_14">Arthritis</label>
                                <input type="checkbox" id="md_checkbox_15" />
                                <label for="md_checkbox_15">Diabetes</label>
                                <input type="checkbox" id="md_checkbox_16" />
                                <label for="md_checkbox_16">Anemia</label>
                                <input type="checkbox" id="md_checkbox_17"/>
                                <label for="md_checkbox_17">Fibromyalgia</label>
                                <input type="checkbox" id="md_checkbox_18" />
                                <label for="md_checkbox_18" style="margin-left:-3px;">Sclerosis</label>
                            </div>
                   </div>
               </fieldset>
               </div>
            </div>
                 <div class="modal-footer">
                     <button type="button" class="btn  bg-green" data-dismiss="modal">SAVE CHANGES</button>
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 </div> 
    
                  </div>
                 </div>
                 </center>
                  
             </div>
                </div>
            </div>
            <!--- modals -->
        <div class="modal fade" id="MOD_training" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                   <center>
                             <div class="modal-header">
                            <div class="block-header">
                <h2><strong>Personal Training</strong></h2>
            </div>
                                 
 <ul class="nav nav-tabs  nav-justified" id="tabContent">
     <li class="active">
        <a href="#training" data-toggle="tab">Training</a>
     </li>
     <li>
     <a href="#sessions" data-toggle ="tab">Sessions</a>
     </li>
     <li>
     <a href="#progress" data-toggle ="tab">Progress</a>
     </li>
     </ul>

<div class="tab-content">
    <div class="tab-pane active" id="training">
         <div class="body">
                    
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                            <h5 class="pull-left">Start Time</h5>
                                            <input type="time" class="form-control" placeholder="Start Time" value="8:00"/>
                                        </div>
                                        </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">End Time</h5>
                                            <input type="time" class="form-control" placeholder="End Time" value="9:00"/>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                               <div>
                                   
             <div role="tabpanel" class="tab-pane" id="home_animation_2">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body container-fluid">
                        <div class="demo-checkbox" style="margin:30px;">
                            <div class="col-md-4">
                                <label>Upper Body</label>

                                <input type="checkbox" id="md_checkbox_1"/>
                                <label for="md_checkbox_1">Arm Building</label>
                                <input type="checkbox" id="md_checkbox_2"/>
                                <label for="md_checkbox_2">Biceps Drill</label>
                                <input type="checkbox" id="md_checkbox_3"/>
                                <label for="md_checkbox_3">Triceps Drill </label>
                                <input type="checkbox" id="md_checkbox_4" />
                                <label for="md_checkbox_4">Belly Cut</label>
                                <input type="checkbox" id="md_checkbox_5" />
                                <label for="md_checkbox_5">Ab Rolling</label>
                                <input type="checkbox" id="md_checkbox_6"/>
                                <label for="md_checkbox_6" style="margin-left:-4px;">Chest Pumps</label>
                            </div>
                            <div class="col-md-4">
                                <label>Lower Body</label>

                                <input type="checkbox" id="md_checkbox_7" />
                                <label for="md_checkbox_7">Leg Workout</label>
                                <input type="checkbox" id="md_checkbox_8" />
                                <label for="md_checkbox_8">Thigh Strengthening</label>
                                <input type="checkbox" id="md_checkbox_9" />
                                <label for="md_checkbox_9">Footwork Training</label>
                                <input type="checkbox" id="md_checkbox_10" />
                                <label for="md_checkbox_10">Waist Cut</label>
                                <input type="checkbox" id="md_checkbox_11" />
                                <label for="md_checkbox_11">Feet Reflex</label>
                                <input type="checkbox" id="md_checkbox_12" />
                                <label for="md_checkbox_12" style="margin-left:-3px;">Sideleg Power</label>
                            </div>
                            <div class="col-md-4">
                                <label>Cardio</label>

                                <input type="checkbox" id="md_checkbox_13" />
                                <label for="md_checkbox_13">Ladder Steps</label>
                                <input type="checkbox" id="md_checkbox_14" />
                                <label for="md_checkbox_14">Sprint Reflex</label>
                                <input type="checkbox" id="md_checkbox_15" />
                                <label for="md_checkbox_15">Treadmill Jog</label>
                                <input type="checkbox" id="md_checkbox_16" />
                                <label for="md_checkbox_16">Dodge Training</label>
                                <input type="checkbox" id="md_checkbox_17"/>
                                <label for="md_checkbox_17">Power Jumps</label>
                                <input type="checkbox" id="md_checkbox_18" />
                                <label for="md_checkbox_18" style="margin-left:-3px;">Bike Training</label>
                            </div>
                         </div>
                        </div>
                    </div>
                        <div class="body container-fluid">
                         <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-line">
                                <h5 class="pull-left">Workout Sets</h5>
                                  <input type="number" class="form-control" min="0"  />
                              </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-line">
                                <h5 class="pull-left">Repetitions</h5>
                                 <input type="number" class="form-control" min="0" />
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green" data-dismiss="modal">START</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                        </div>
                </div>
            </div>
         </div>
                         
                         </div>

                                
                            </div>
                               
                        
        </div>
    </div>
    
    <div class="tab-pane" id="sessions">
             <div class="body">
                     <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Session #</th>
                                            <th>Workout</th>
                                            <th>Sets</th>
                                            <th>Repetitions</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kettle Bell</td>
                                            <td>8</td>
                                            <td>5</td>
                                            <td>14:00</td>
                                            <td>15:45</td>
                                            <td>9/30/17</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>American Set</td>
                                            <td>10</td>
                                            <td>3</td>
                                            <td>9:30</td>
                                            <td>10:15</td>
                                            <td>10/1/17</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>California Speedball</td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>11:00</td>
                                            <td>11:45</td>
                                            <td>10/2/17</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ladder Steps</td>
                                            <td>3</td>
                                            <td>5</td>
                                            <td>16:30</td>
                                            <td>17:15</td>
                                            <td>10/2/17</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Power Jumps</td>
                                            <td>10</td>
                                            <td>10</td>
                                            <td>18:45</td>
                                            <td>19:30</td>
                                            <td>10/3/17</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Cardio Thread</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <td>8:00</td>
                                            <td>8:45</td>
                                            <td>10/4/17</td>
                
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Reflex Training</td>
                                            <td>8</td>
                                            <td>5</td>
                                            <td>1:30</td>
                                            <td>2:15</td>
                                            <td>10/4/17</td>
                                        </tr>
                                         <tr>
                                            <td>8</td>
                                            <td>Triceps Training</td>
                                            <td>3</td>
                                            <td>5</td>
                                            <td>20:00</td>
                                            <td>20:45</td>
                                            <td>10/5/17</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                 </div>
                         <div class="modal-footer">
                            <button type="button" class="btn bg-green pull-left">COMPLETE TRAINING</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
    </div>
    <div class="tab-pane" id="progress">
            <div class="body">
                                    <!-- Line Chart -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Client Progress Monitoring</h2>
                                            </div>
                                                <div class="col-md-3 pull-right">
                                                    
                                                    <select class="form-control show-tick">
                                                        <option>Weight</option>
                                                        <option>Skeletal Mass</option>
                                                        <option>Body Fat Mass</option>
                                                        <option>Total Body Water</option>
                                                        <option>Fat Free Mass</option>
                                                        <option>Body Mass Index</option>
                                                        <option>Percent Body Fat</option>
                                                        <option>Waist-Hip Ration</option>
                                                        <option>Basal-Metabolic Rate</option>
                                                        <option>Left Upper Arm</option>
                                                        <option>Right Upper Arm</option>
                                                        <option>Left Upper Thigh</option>
                                                        <option>Right Upper Thigh</option>
                                                        <option>Resting Heart Rate</option>
                                                        <option>Was</option>
                                                        <option>Fat Free Mass</option>
                                                        <option>Fat Free Mass</option>
                                                    </select>

                                                </div>
                                            
                                            <div class="body">
                                                <canvas id="line_chart" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                         <div class="modal-footer">
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
    </div>
     </div>
                       </div>
                    </center>
                         
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
