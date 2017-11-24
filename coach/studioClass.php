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
                <h2><strong>STUDIO CLASS</strong></h2>
            </div>
            
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <button type="button" data-toggle="modal" data-target="#createNew"class="btn bg-teal btn-block btn-lg waves-effect">ADD NEW SESSION</button>
                </div>
                <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">FILTER</button>
                </div>
                <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name" class="form-control" >
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                <select class="form-control show-tick">
                        <option>Date</option>
                        <option>Coach</option>
                        <option>No. of Participants</option>
                    </select>

                </div>
   
             </div>
             
            </div> 
            <!-- Card 1 -->
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">

                            <h2>
                                Aqua Zumba 
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 14 2017</p> 
                         <p><b>Time:</b> 5:00 PM - 6:00 PM</p> 
                         <p><b>Coach:</b> Jemmel Dave</p>
                         <p><b>Participants:</b> 5</p>
                        </div>
                        </div>
                 </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">
                            <h2>
                                Spinning Class 
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 14 2017</p> 
                         <p><b>Time:</b> 3:00 PM - 4:00 PM</p> 
                         <p><b>Coach:</b> Erul Ubas</p>
                         <p><b>Participants:</b> 39</p>
                        </div>
                 </div>
                 </div>
            
                 <!-- End of Card 1 -->
                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">
                            <h2>
                                F360 
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 14 2017</p> 
                         <p><b>Time:</b> 5:00 PM - 6:00 PM</p> 
                         <p><b>Coach:</b> Brix Nessia</p>
                         <p><b>Participants:</b> 4</p>
                        </div>
                 </div>

                 </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">

                            <h2>
                                Zumba
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 15 2017</p> 
                         <p><b>Time:</b> 9:00 AM - 10:00 AM</p> 
                         <p><b>Coach:</b> Patrick Legislador</p>
                         <p><b>Participants:</b> 10</p>
                        </div>
                        </div>
                 </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">
                            <h2>
                                Yoga
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 15 2017</p> 
                         <p><b>Time:</b> 1:00 PM - 2:00 PM</p> 
                         <p><b>Coach:</b> Mark Benjamin</p>
                         <p><b>Participants:</b> 7</p>
                        </div>
                 </div>
                 </div>
            
                 <!-- End of Card 1 -->
                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">
                            <h2>
                                Dance Aero 
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 15 2017</p> 
                         <p><b>Time:</b> 5:00 PM - 6:00 PM</p> 
                         <p><b>Coach:</b> Larry Bril</p>
                         <p><b>Participants:</b> 10</p>
                        </div>
                 </div>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">

                            <h2>
                                HIIT 
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 15 2017</p> 
                         <p><b>Time:</b> 6:00 PM - 7:00 PM</p> 
                         <p><b>Coach:</b> Jay Divinagracia</p>
                         <p><b>Participants:</b> 4</p>
                        </div>
                        </div>
                 </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">
                            <h2>
                                ABS-Clinic
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 16 2017</p> 
                         <p><b>Time:</b> 10:00 AM - 11:00 AM</p> 
                         <p><b>Coach:</b> Hernel Magbanua</p>
                         <p><b>Participants:</b> 15</p>
                        </div>
                 </div>
                 </div>
            
                 <!-- End of Card 1 -->
                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card" style = "margin-top: 20px">
                        <div class="header bg-light-green">
                            <h2>
                                Pilates
                            </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Cancel</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                        <div class="body">             
                         <p><b>Date:</b> September 16 2017</p> 
                         <p><b>Time:</b> 1:00 PM - 2:00 PM</p> 
                         <p><b>Coach:</b> Ivan Del Prado</p>
                         <p><b>Participants:</b> 6</p>
                        </div>
                 </div>
                 </div>
            <div class="modal fade" id="createNew" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Add Studio Class Session</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Studio Class Name</h5>
                                            <input type="text" class="form-control" placeholder="Studio Class Name" value="Spinning"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Coach Name</h5>
                                            <input type="text" class="form-control" placeholder="Coach Name" value="Mark Benjamin"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Date</h5>
                                            
                                            <input type="date" class="form-control" placeholder="">
                                            
                                        </div>
                                    </div>
                                
                                    
                                     <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Start Time</h5>
                                            <input type="time" class="form-control" placeholder="Start Time" value="8:00"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">End Time</h5>
                                            <input type="time" class="form-control" placeholder="End Time" value="9:00"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">SAVE</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Jquery Core Js -->
    <?php include("includes/footer.php"); ?>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
