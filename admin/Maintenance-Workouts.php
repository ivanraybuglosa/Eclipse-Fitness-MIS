<?php
include("../dbConnect.php");
include("auth.php");
include("includes/header.php");?>

<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>WORKOUTS</h2>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Maintenance - Workouts
        </li>
      </ol>
    </div>
  </div>
  <div class="card">
    <div class="header">
      <h2>Workouts</h2>
    </div>
    <div class="body">
      <div class="row clearfix js-sweetalert">
        <form method="post" action="actions/workoutAction.php?" id="myform" >
          <div class="col-sm-12">
            <div class="col-sm-6">
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" name="workoutName" class="form-control">

                  <label class="form-label">Name</label>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" name="workoutType" class="form-control">

                  <label class="form-label">Type</label>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" name="workoutCategory" class="form-control">

                  <label class="form-label">Category</label>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" name="BodyPart" class="form-control">

                  <label class="form-label">Body Part</label>
                </div>
              </div>
            </div>
            <input type="hidden" name="action_type" value="add"/>
            <button type="submit" class="btn  waves-effect btn-success pull-right" data-type='success'>Save</button>
          </div>
        </form>

      </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card" style="margin-top:20px">

        <div class="body">
          <div class="table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                      <tr role="row">
                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Workout Name</th>

                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Type</th>

                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Category</th>

                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Body Part</th>

                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Actions</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "../dbConnect.php";
                      $db = new dbConnect();
                      $workouts = $db->getRows('workout',array('order_by'=>'WORKOUT_Code ASC'));
                      if(!empty($workouts)){ $count = 0; foreach($workouts as $workout){ $count++;?>
                        <tr>
                          <td class="hidden"><?php echo $workout['WORKOUT_Code']; ?></td>
                          <td><?php echo $workout['WORKOUT_Name']; ?></td>
                          <td><?php echo $workout['WORKOUT_Type']; ?></td>
                          <td><?php echo $workout['WORKOUT_Category']; ?></td>
                          <td><?php echo $workout['WORKOUT_BodyPart']; ?></td>
                          <td align="center">
                            <button type="button" class="btn bg-green" data-toggle="modal"  data-target="#edit-<?php echo $workout['WORKOUT_Code']; ?>"
                              style="height: 30px;">Edit</button></td>
                              <div class="modal fade" id="edit-<?php echo $workout['WORKOUT_Code']; ?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-sm" role="document">
                                  <div class="modal-content">
                                    <center>
                                      <div class="modal-header">
                                        <h3 class="modal-title" id="editLabel">EDIT WORKOUT</h3>
                                      </div>
                                      <form method="post" action="actions/workoutAction.php?" id="myform1" >
                                        <input type="hidden" class="form-control" name="workoutCode" value="<?php echo $workout['WORKOUT_Code']; ?>"/>
                                        <div class="row container-fluid">
                                          <div class="col-sm-12">
                                            <div class="form-group">
                                              <div class="form-line">
                                                <h5 class="pull-left">Workout Name</h5>
                                                <input type="text" class="form-control" name="workoutName" value="<?php echo $workout['WORKOUT_Name']; ?>"/>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-line">
                                                <h5 class="pull-left">Type</h5>
                                                <input type="text" class="form-control"  name="workoutType" value="<?php echo $workout['WORKOUT_Type']; ?>"/>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-line">
                                                <h5 class="pull-left">Category</h5>
                                                <input type="text" class="form-control" name="workoutCategory" value="<?php echo $workout['WORKOUT_Category']; ?>"/>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-line">
                                                <h5 class="pull-left">Body Part</h5>
                                                <input type="text" class="form-control"  name="BodyPart" value="<?php echo $workout['WORKOUT_BodyPart']; ?>"/>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </center>
                                      <div class="modal-footer">
                                        <input type="hidden" name="action_type" value="edit"/>
                                        <button type="submit"  class="btn  bg-green" data-type='success'>SAVE</button>
                                        <input type="hidden" name="action_type" value="delete"/>
                                        <button type="submit"  class="btn  bg-red" data-type='success'>DELETE</button>
                                        <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </tr>
                          <?php } }else{ ?>
                            <tr><td colspan="4">No workout(s) found......</td>
                            <?php } ?>
                          </tr>
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
    </section>
    <script type="text/javascript">

    function showTime(){
      var date = new Date();
      var h = date.getHours();
      var m = date.getMinutes();
      var s = date.getSeconds();
      var day = date.getDate();
      var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      var session = "AM";

      if(h == 0){
        h = 12;
      }
      if(h > 12){
        h = h - 12;
        session = "PM";
      }

      h = (h < 10) ? "0" + h : h;
      m = (m < 10) ? "0" + m : m;
      s = (s < 10) ? "0" + s : s;

      //date
      var date = new Date();
      var mon = date.getMonth();
      var day = date.getDate();
      var yr = date.getFullYear();
      var monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December" ];
      var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];


      var time = h + ":" + m + ":" + s + " " + session+ "  -  "+ monthNames[date.getMonth()] + " "+day+ ","+yr + "(" + days[date.getDay()] + ")";
      document.getElementById("clock").innerHTML = time;




      setTimeout(showTime, 1000);
    }
    showTime();
    </script>
    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/js/pages/dialogsWorkouts.js"></script>
    <?php include("includes/footer.php"); ?>
    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

    <script src="../assets/js/pages/forms/form-wizard.js"></script>
