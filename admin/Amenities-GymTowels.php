
<?php
include "../dbConnect.php";
session_start();
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
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


    <div class="row clearfix">
      <div class="card">
        <div class="header">
          <h2>Towels</h2>

          <button type="button" data-toggle="modal" data-target="#activity" class="btn btn-success waves-effect pull-right" style="margin-top:-27px; padding-right:30px; padding-left:30px;">
            <i class="material-icons">menu</i>
            <span>TOWEL ACTIVITY</span>
          </button>
        </div>
        <div class="body">


          <div class="body table-responsive">
            <?php
            $pdo = new dbConnect();
            date_default_timezone_set('Asia/Manila');
            $available = $pdo->previousAvailable();
            $towels = $pdo->towels(date("Y-m-d"),array("order_by" => "TI_Code"));
            $available = $pdo->previousAvailable();
            if(!empty($towels)){
              $count = 0;
              foreach($towels as $towel){
                $count++;
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">add</i>
                    </div>
                    <div class="content">
                      <div class="text">SUPPLIED</div>
                      <div class="number"><?php if(empty($towel['supply'])){echo "0";}else{echo $towel['supply']; }?></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">check</i>
                    </div>
                    <div class="content">
                      <div class="text">AVAILABLE</div>
                      <div class="number"><?php if(empty($available)){echo "0";}else{echo $available; } ?></div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">store</i>
                    </div>
                    <div class="content">
                      <div class="text">TOTAL</div>
                      <div class="number"><?php echo $available + ($towel['TI_Borrowed'] + $towel['TI_Returned']) + $towel['laundry']?></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">keyboard_arrow_right</i>
                    </div>
                    <div class="content">
                      <div class="text">BORROWED</div>
                      <div class="number"><?php if(empty($towel['TI_Borrowed'])){echo "0";}else{echo $towel['TI_Borrowed']; }?></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">keyboard_arrow_left</i>
                    </div>
                    <div class="content">
                      <div class="text">RETURNED</div>
                      <div class="number"><?php if(empty($towel['TI_Returned'])){echo "0";}else{echo $towel['TI_Returned'];}?></div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">arrow_upward</i>
                    </div>
                    <div class="content">
                      <div class="text">LAUNDRY</div>
                      <div class="number"><?php if(empty($towel['laundry'])){ echo "0";}else{echo $towel['laundry']; }?></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                      <i class="material-icons">arrow_downward</i>
                    </div>
                    <div class="content">
                      <div class="text">DELIVERED </div>
                      <div class="number"><?php if(empty($towel['delivered'])){echo "0";}else{echo $towel['delivered'];}?></div>
                    </div>
                  </div>
                </div>



              <?php }} ?>




            </div>
          </div>
        </div>

        <!-- MODAL FOR Supply -->
        <div class="modal fade" id="activity" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <center>
                <div class="modal-header">
                  <div class="block-header">
                    <h2><strong>TOWEL ACTIVITY</strong></h2>
                  </div>
                </div>
                  </center>
                <div class="modal-body">
                  <form method="post" action="actions/towelInventoryAction.php" />
                  <div class="col-sm-12">
                    <div class="form-group form-float">
                      <div class="form-line">
                        <input type="number" class="form-control" name="towelAmount" required>
                        <label class="form-label">Towel Amount </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label style="margin-top: 9px;">Towel Activity</label>
                  </div>
                  <div class="col-md-12">
                    <input type="radio" value="Supply" name="activity" id="supply" class="with-gap" required>
                    <label for="supply">Supply</label>
                    </div>
                    <div class="col-md-12">
                  <input type="radio"  value="Delivered" name="activity" id="delivered" class="with-gap" required>
                  <label for="delivered">Delivered</label>
                  </div>
                  <div class="col-md-12">
                  <input type="radio"  value="Laundry" name="activity" id="laundry" class="with-gap" required>
                  <label for="laundry">Laundry</label>
                </div>
              </div>

              <div class="modal-footer">

                <input type="hidden" name="action_type" value="add">
                <button name ="submit" type="submit" class="btn  bg-green">SUBMIT</button>
              </form>
              <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
            </div>


        </div>
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
              <div class="form-group">
                <label>Equipment</label>
                <div class="form-line">
                  <select class="form-control show-tick" data-live-search="true" name="type" required>
                    <option value="SQUAT RACK">SQUAT RACK</option>
                    <option value="BARBELLS">BARBELLS</option>
                    <option value="BENCH PRESS">BENCH PRESS</option>
                    <option value="INCLINE BENCH PRESS">INCLINE BENCH PRESS</option>
                    <option value="HAMMER STRENGTH MACHINE">HAMMER STRENGTH MACHINE</option>
                    <option value="CABLES AND PULLEYS">CABLES AND PULLEYS</option>
                    <option value="DUMBBELLS">DUMBBELLS</option>
                    <option value="PULLUP BAR">PULLUP BAR</option>
                    <option value="LAT PULLDOWN MACHINE">LAT PULLDOWN MACHINE</option>
                    <option value="LEG EXTENSION MACHINE">LEG EXTENSION MACHINE</option>
                    <option value="LEG CURL MACHINE">LEG CURL MACHINE</option>
                    <option value="HYPER EXTENSION BENCH">HYPER EXTENSION BENCH</option>
                    <option value="DIPPING BARS">DIPPING BARS</option>
                    <option value="SMITH MACHINE">SMITH MACHINE</option>
                    <option value="PREACHER BENCH">PREACHER BENCH</option>
                    <option value="ABDOMINAL BENCH">ABDOMINAL BENCH</option>
                    <option value="LEG PRESS MACHINE">LEG PRESS MACHINE</option>
                    <option value="HACK SQUAT MACHINE">HACK SQUAT MACHINE</option>
                    <option value="CALF MACHINE">CALF MACHINE</option>
                    <option value="LEG ADDUCTION MACHINE">LEG ADDUCTION MACHINE</option>
                    <option value="KETTLEBELLS">KETTLEBELLS</option>
                    <option value="WALL BALL">WALL BALL</option>
                    <option value="FOAM ROLLER">FOAM ROLLER</option>
                    <option value="STABILITY BALL">STABILITY BALL</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Model</label>
                <div class="form-line">
                  <input type="text" name="model" class="form-control" placeholder="Model" required/>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Quantity</label>
                <div class="form-line">
                  <input type="number" required min="0" name="quantity" class="form-control" placeholder="Quantity" required />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Delivery Date</label>
                <div class="form-line">
                  <input type="date" required="true" name="deliveryDate" class="form-control" required/>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Delivery Time</label>
                <div class="form-line">
                  <input type="time" name="deliveryTime" min="07:00" max="22:00" class="form-control" required/>
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
