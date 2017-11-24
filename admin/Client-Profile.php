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
                <h2>Client Profile</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <i class="material-icons">verified_user</i> Clients - Profile
                    </li>
                </ol>
                </div>
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                
            <form method="POST"  action="actions/profileAction.php" style="padding:20px 40px 20px 40px;">
                               
                                <h3>Personal Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" >
                                            <label class="form-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="surname" class="form-control" >
                                            <label class="form-label">Last name</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" >
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="contactNumber" >
                                        <label class="form-label">Contact number</label>
                                    </div>
                                    </div>      
                                  <div class="form-group form-float">
									  
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label style="margin-top: 9px;">Date of Birth: </label>
                                        </div>
                                        <div class="col-md-3">
                                             <select class="form-control show-tick" name = "C_month">
                                                     <option> - Month - </option>
														<option value="January">January</option>
														<option value="Febuary">Febuary</option>
														<option value="March">March</option>
														<option value=    "April">April</option>
														<option value="May">May</option>
														<option value="June">June</option>
														<option value="July">July</option>
														<option value="August">August</option>
														<option value="September">September</option>
														<option value="October">October</option>
														<option value="November">November</option>
														<option value="December">December</option>
												 
                                             </select>
                                        </div>
                                        <div class="col-md-3">
                                             <select class="form-control show-tick" name = "C_day">
                                                    <option> - Day - </option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
												 	<option value="31">31</option>
                                             </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control show-tick" name="C_year">
                                                    <option value='1947'>1947</option>
														<option value='1948'>1948</option>
														<option value='1949'>1949</option>
														<option value='1950'>1950</option>
														<option value='1951'>1951</option>
														<option value='1952'>1952</option>
														<option value='1953'>1953</option>
														<option value='1954'>1954</option>
														<option value='1955'>1955</option>
														<option value='1956'>1956</option>
														<option value='1957'>1957</option>
														<option value='1958'>1958</option>
														<option value='1959'>1959</option>
														<option value='1960'>1960</option>
														<option value='1961'>1961</option>
														<option value='1962'>1962</option>
														<option value='1963'>1963</option>
														<option value='1964'>1964</option>
														<option value='1965'>1965</option>
														<option value='1966'>1966</option>
														<option value='1967'>1967</option>
														<option value='1968'>1968</option>
														<option value='1969'>1969</option>
														<option value='1970'>1970</option>
														<option value='1971'>1971</option>
														<option value='1972'>1972</option>
														<option value='1973'>1973</option>
														<option value='1974'>1974</option>
														<option value='1975'>1975</option>
														<option value='1976'>1976</option>
														<option value='1977'>1977</option>
														<option value='1978'>1978</option>
														<option value='1979'>1979</option>
														<option value='1980'>1980</option>
														<option value='1981'>1981</option>
														<option value='1982'>1982</option>
														<option value='1983'>1983</option>
														<option value='1984'>1984</option>
														<option value='1985'>1985</option>
														<option value='1986'>1986</option>
														<option value='1987'>1987</option>
														<option value='1988'>1988</option>
														<option value='1989'>1989</option>
														<option value='1990'>1990</option>
														<option value='1991'>1991</option>
														<option value='1992'>1992</option>
														<option value='1993'>1993</option>
														<option value='1994'>1994</option>
														<option value='1995'>1995</option>
														<option value='1996'>1996</option>
														<option value='1997'>1997</option>
														<option value='1998'>1998</option>
														<option value='1999'>1999</option>
														<option value='2000'>2000</option>
														<option value='2001'>2001</option>
														<option value='2002'>2002</option>
														<option value='2003'>2003</option>
														<option value='2004'>2004</option>
														<option value='2005'>2005</option>
														<option value='2006'>2006</option>
														<option value='2007'>2007</option>
														<option value='2008'>2008</option>
														<option value='2009'>2009</option>
														<option value='2010'>2010</option>
														<option value='2011'>2011</option>
														<option value='2012'>2012</option>
														<option value='2013'>2013</option>
														<option value='2014'>2014</option>
														<option value='2015'>2015</option>
														<option value='2016'>2016</option>
														<option value='2017'>2017</option>
														<option value='2018'>2018</option>
														
                                             </select>
                                        </div>
                                    </div>  
                             
                                    <div class="form-group" style="margin-top:20px">
                                        <input type="radio" value="Male" name="gender" id="male" class="with-gap">
                                        <label for="male">Male</label>

                                        <input type="radio"  value="Female" name="gender" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Female</label>
                                    </div>
                                </fieldset>
                                <div class="body">
                                <h3>Member Registration</h3>
                                <fieldset>
                                    <!-- //Radio buttons -->
                                     <h4>Add as a Member?</h4>
                                    <div>
                                        <input type="radio" id="rdobuy" name="foo" value="buy"  class="with-gap" />
                                         <label for="rdobuy">Yes</label>
                                         <div class="reveal-if-active">        
                                        <label for="which-dog">Please Choose Membership Type</label>   
                                         <div class="col-md-6" >
                                            <select class="form-control show-tick" name="type">
                                                <option value="Student">Student</option>
                                                <option value="Regular">Regular</option>
                                            </select>
                                         </div>
                                          <div class="col-md-6" >
                                            <select class="form-control show-tick" name="duration">
                                                <option value="1 Month">1 Month</option>
                                                <option value="3 Months">3 Months</option>
                                                <option value="6 Months">6 Months</option>
                                                <option value="12 Months">12 Months</option>
                                            </select>
                                         </div>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <input type="radio" name="foo" value="sell" id="rdosell"  class="with-gap"/>
                                        <label for="rdosell">No</label>
                                        <div class="reveal-if-active">
                                        <input type="hidden" id="which-cat" name="which-cat" class="require-if-active" data-require-pair="#rdosell" />
                                        </div>
                                    </div>
                                </fieldset>
									<input type="hidden" name="action_type" value="add"/>
                                    <button name ="submit"  type="submit" class="btn bg-green pull-right">SAVE</button>
                            </form>
                                    </div>
                
                </div>
            </div>
            </div>
            <div >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                                
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Last Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">First Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Status</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Email Address</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 30px;">Age</th> 
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;">Gender</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;">Manage</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;">Actions</th>
                                            
                                            
                                            
                                           
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                   
                                        <tbody>
                                                    <?php
                                                    
													
                                                    $pdo = new dbConnect();
                                                    $clients = $pdo->getRows('client',array('order_by'=>'CLIENT_ID ASC'));
                                                    if(!empty($clients)){ 
                                                        $count = 0; foreach($clients as $client){ 
                                                            $count++;?>
                                                    <tr>
                                                        <td><?php echo $client['CLIENT_FirstName']; ?></td>
                                                        <td><?php echo $client['CLIENT_LastName']; ?></td>
                                                        <td><?php echo $client['CLIENT_bday']; ?></td>
                                                        <td><?php echo $client['CLIENT_Gender']; ?></td>
														<td><?php echo $client['CLIENT_Email']; ?></td>
														<td><?php echo $client['CLIENT_ContactNumber']; ?></td>
														<td class="align-center"><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">Modify</button></td>
														<td class="align-center"><button type="button" data-toggle="modal"  data-target="#actions"class="btn bg-green" >Enroll</button></td>
														
                                                        
                                                    </tr>
                                                    <?php } }else{ ?>
                                                    <tr><td colspan="6">No workout(s) found......</td></tr>
                                                    <?php } ?>
                                                </tbody>
                                        
                                       
                                             
                                           
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
            
        <!-- Small Size -->
            <div class="modal fade" id="view" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                              
                        
                        
                    <center>
                             <div class="modal-header">
                            <div class="block-header">
                             <h2>Client Profile</h2>
                            </div>
                                 
 <ul class="nav nav-tabs  nav-justified" id="tabContent">
     <li class="active">
         <a href="#info" data-toggle="tab">Client Information</a>
     </li>
     <li class>
            <a href="#activity" data-toggle="tab">Activity Log</a>
     </li>
     <!-- 
     <li class>
            <a href="#transaction" data-toggle="tab">Transaction Log</a>
     </li> -->
    
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="info">
            <div class="body">
                            <form id="form_validation" method="POST" novalidate="novalidate">
                                <div class="form-group form-float">
                                    
                                    <div >
                                         <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Client Code:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="C001">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Legislador">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Patrick">
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                    
                                </div>
                                
                                <div class="form-group form-float">
                                    
                                    <div >
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Age:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="19">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Email Address:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="patrick@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                                
                                <div class="form-group form float">
                                    <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Contact Number:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="09993808653">
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Registration Date:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="8-10-17">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Registration Status:</label>
                                        </span>
                                        <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="Member">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="input-group">
                                    
                                        <label>Gender:</label>
                                        
                                            <input type="radio" name="gender" id="male" class="with-gap" checked="true">
                                            <label for="male">Male</label>
                                            <input type="radio" name="gender" id="female" class="with-gap">
                                            <label for="female" class="m-l-20">Female</label>
                                    
                                    </div>
                                </div>
                                        
                                        </div>
                                    
                                   
                                        
                                </div>
                                
                            </form>
                        </div>
        
       
    </div>

    <div class="tab-pane" id="activity">
       <div class="body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                           <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Date</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Activity</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Coach</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Start Time</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">End Time</th>
                                            
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        
                                         <tr role="row" class="odd">
                                            
                                            <td name="AL_Date">04/25/2017</td>
                                            <td name="Acitivity">Training Session</td>
                                            <td class="sorting_1">Mark Benjamin</td>
                                            <td>8:00 AM</td>
                                            <td>9:00 AM</td>

                                              
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td>07/12/2017</td>
                                            <td>Class Session</td>
                                            <td class="sorting_1">Ivan del Prado</td>
                                            <td>10:00 AM</td>
                                            <td>11:00 AM</td>
                                             
                                            
                                        </tr><tr role="row" class="odd">
                                            
                                            <td>04/30/2017</td>
                                            <td>Class Session</td>
                                            <td class="sorting_1">Manny Pacquiao</td>
                                            <td>1:00 PM</td>
                                            <td>2:00 PM</td>
                                            
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td>05/05/2017</td>
                                            <td>Training Session</td>
                                            <td class="sorting_1">Mark Benjamin</td>
                                            <td>2:00 PM</td>
                                            <td>3:00 PM</td>
                                             
                                           
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

    
                </div>
                       
                        </center>
                        <div class="modal-footer">

                        <button type="button" class="btn  bg-green waves-effect" data-dismiss="modal"> &nbsp; SAVE &nbsp;</button>
                        <button type="button" class="btn  bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>               
                    </div>
            </div>
                
                <div class="modal fade" id="actions" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                              
                        
                        
                    <center>
                             <div class="modal-header">
                            <div class="block-header">
                             <h2>Client Profile</h2>
                            </div>
                                 
                <ul class="nav nav-tabs  nav-justified" id="tabContent">
     
     <li class="active">
            <a href="#membership" data-toggle="tab">Membership</a>
     </li>
     <li class>
            <a href="#personaltrain" data-toggle="tab">Personal Training</a>
     </li>
</ul>
        
        <div class="tab-content">  
            <div class="tab-pane active" id="personaltrain">
            <br>
                <div class="body">
                <div class="row">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Package Type: </label>
                         </div>
                         <div class="col-md-3">
                                  <input type="text" name="validitytrain" class="form-control" disabled="true" value="8 Sessions">
                         </div>
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:10px;">Coach: </label>
                         </div>
                    
                   
                    
                         <div class="col-md-3">
                                  <input type="text" name="validitytrain" class="form-control" disabled="true" value="Mark Benjamin">
                         </div>
                    </div>
                 <div class="row">
                         <div class="col-md-3">
                             <label style="margin-top: 30px; margin-right:20px;">Start Date:</label>
                         </div>
                         <div class="col-md-3">
                                  <input type="text" name="validitytrain" class="form-control" disabled="true" value="10/01/2017" style="margin-top: 25px; margin-right:20px;">
                         </div>
                        <div class="col-md-3">
                             <label style="margin-top: 30px; margin-right:20px;">End Date:</label>
                         </div>
                   
                    
                         <div class="col-md-3">
                                  <input type="text" name="validitytrain" class="form-control" disabled="true" value="11/29/2017" style="margin-top: 25px; margin-right:20px;">
                         </div>
                       </div>  
                    
                    
                    <div class="row">
                        <div class="form-inline">
                         <div class="col-md-3">
                             <label style="margin-top: 30px; margin-right:20px;">Days Remaining</label>
                         </div>
                         <div class="col-md-3">
                                  <input type="text" name="validitytrain" class="form-control" disabled="true" value="64 Days" style="margin-top: 25px; margin-right:20px;">
                         </div>  
                    
                        </div>
                    </div>
                <br>
                    
            <div class="card">
             <div class="body">
                 
                <div class="row">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Package Type: </label>
                         </div>
                         <div class="col-md-3">
                                  <select class="form-control show-tick">
                                          <option>1 Session</option>
                                          <option>8 Sessions</option>
                                          <option>12 Sessions</option>
                                          <option>24 Sessions</option>
                                  </select>
                         </div>
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Coach Type: </label>
                         </div>
                         <div class="col-md-3">
                                 <select class="form-control show-tick">
                                          <option>Junior</option>
                                          <option>Senior</option>
                                  </select>
                          </div>

                    </div>
                    <div class="row">
                        <div class="form-inline">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Validity: </label>
                         </div>
                         <div class="col-md-3">
                            <input type="text" name="validitytrain" class="form-control" disabled="true">
                          </div>   
                        <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Price: </label>
                         </div>
                         <div class="col-md-3">
                            <input type="text" name="pricetrain" class="form-control" disabled="true">
                         </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-inline">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Assigned Coach: </label>
                         </div>
                         <div class="col-md-3">
                            <select class="form-control show-tick">
                                          <option>Mark Benjamin</option>
                                          <option>John Cena</option>
                                  </select>
                          </div>   
                        <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Specialty: </label>
                         </div>
                         <div class="col-md-3">
                            <input type="text" name="specialtytrain" class="form-control" disabled="true">
                         </div> 
                        </div>
                    </div>
                    </div>

              <div class="modal-footer">
                            <button type="button" class="btn  btn-success" data-dismiss="modal">ENROLL</button>
             </div>
                </div>
                    <div class="modal-footer">

                        <button type="button" class="btn  bg-green waves-effect" data-dismiss="modal"> &nbsp; SAVE &nbsp;</button>
                        <button type="button" class="btn  bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                </div>
                </div>

        <div class="tab-pane" id="membership">
            <br>
             <div class="body">
                <div class="row">
                    <div class="fomr-inline">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Membership Type: </label>
                         </div>
                         <div class="col-md-3">
                                  <input type="text" class="form-control" disabled="true" value="Regular">
                         </div>
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Duration: </label>
                         </div>
                         <div class="col-md-3">
                                 <input type="text" class="form-control" disabled="true" value="3 Months">
                          </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-inline">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Start Date: </label>
                         </div>
                         <div class="col-md-3">
                            <input type="date" class="form-control" value="2017-08-25" />
                          </div>   
                        <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">End Date: </label>
                         </div>
                         <div class="col-md-3">
                            <input type="date" class="form-control" value="2017-11-25" />
                         </div> 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-inline">
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Remaining: </label>
                         </div>
                         <div class="col-md-2">
                            <div class="form-group">
                             <input type="text" name="specialtytrain" class="form-control" style="margin-left: 10px;" disabled="true" value="68 Days">
                            </div>
                          </div>
                    </div>
                    </div>
                    <br>
                     <div class="card">
                        <div class="body">
                        <div class="row">
                            <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Membership Type: </label>
                         </div>
                         <div class="col-md-3">
                                  <select class="form-control show-tick">
                                          <option>Regular</option>
                                          <option>Student</option>
                                  </select>
                         </div>
                         <div class="col-md-3">
                             <label style="margin-top: 8px; margin-right:20px;">Duration: </label>
                         </div>
                         <div class="col-md-3">
                                 <select class="form-control show-tick">
                                          <option>3 Months</option>
                                          <option>6 Months</option>
                                          <option>12 Months</option> 
                                  </select>
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-inline">
                            <div class="col-md-3">
                             <label style="margin-right:20px;">Price: </label>
                            </div>
                           <div class="col-md-2">
                            <div class="form-group">
                             <input type="text" name="specialtytrain" class="form-control" style="margin-left: 50px;" disabled="true" value="1899">
                            </div>
                          </div>
                          <div class="col-md-3 pull-right">
                            <button type="button" style="padding-left:25px; padding-right:25px;" class="btn  btn-success" onclick="relocate_home()">RENEW</button>
                                <script>
                                    function relocate_home()
                                        {
                                         location.href = "transaction.php";
                                        } 
                                </script>
                          </div>
                      </div>
                        </div>
                     </div>
                 </div>
                        <div class="modal-footer">
                        <button type="button" class="btn  bg-green waves-effect" data-dismiss="modal"> &nbsp; SAVE &nbsp;</button>
                        <button type="button" class="btn  bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                </div>
             </div>

                        </div>
                        </div>
                        </center>
                    </div>
                    </div>
                </div>
                
    </section>
<?php include("includes/footer.php"); ?>

<script>
var FormStuff = {    init: function() {    this.applyConditionalRequired();    this.bindUIActions();  },    bindUIActions: function() {    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);  },    applyConditionalRequired: function() {        $(".require-if-active").each(function() {      var el = $(this);      if ($(el.data("require-pair")).is(":checked")) {        el.prop("required", true);      } else {        el.prop("required", false);      }    });      }  };FormStuff.init();
</script>


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
