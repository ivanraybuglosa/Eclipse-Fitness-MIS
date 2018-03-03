
<?php
include "../dbConnect.php";
session_start();
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
}
include("includes/header.php"); ?>


<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <center><h2><label>Eclipse Dashboard</label></h2></center>
    </div>
  </div>


  <!-- Widgets -->

        


  <?php
  $year = date("Y");
  $today = date("Y-m-d");
  $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

  $date = date('Y-m-d');

  $fetchclients = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` ") or die(mysqli_error());
  $clients = $fetchclients->fetch_array();

  $yearclients = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE year = '$year' ") or die(mysqli_error());
  $fyclients = $yearclients->fetch_array();

  $ptclients = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `traininglog` WHERE year = '$year' ") or die(mysqli_error());
  $trainClients = $ptclients->fetch_array();

  $fetchcontracts = $conn->query("SELECT COUNT(TL_Code) as total FROM `traininglog` ") or die(mysqli-error());
  $contracts = $fetchcontracts->fetch_array();

  $fetchparticipants = $conn->query("SELECT COUNT(CA_Code) as total FROM `clientassignment` ") or die(mysql_error());
  $participants = $fetchparticipants->fetch_array();

  $fetchpresent = $conn->query("SELECT COUNT(A_Code) as total FROM `attendance` WHERE `A_TimeOut` IS NULL && `A_Date` = '$today' ") or die(mysql_error());
  $present = $fetchpresent->fetch_array();

  $fetchwalkin = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE `CLIENT_RegStatus` = 'Walk-in' && year = '$year' ") or die(mysql_error());
  $walkin = $fetchwalkin->fetch_array();

  $fetchmembers = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE `CLIENT_RegStatus` = 'Member' && year = '$year'") or die(mysql_error());
  $members = $fetchmembers->fetch_array();

  $allfetch = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE year = '$year' ") or die(mysql_error());
  $all = $allfetch->fetch_array();

  //TRANSACTIONS
  $fetchtran= $conn->query("SELECT COUNT(TR_ID) as total FROM `transaction` WHERE TR_status = 'paid' && year = '$year' ") or die(mysql_error());
  $comtran = $fetchtran->fetch_array();

  $fetchtransact = $conn->query("SELECT COUNT(TR_ID) as total FROM `transaction` WHERE year = '$year' ") or die(mysql_error());
  $transact = $fetchtransact->fetch_array();

  $fetchbill = $conn->query("SELECT IFNULL(total,0) as final FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE year = '$year') as initial ") or die(mysql_error());
  $bill = $fetchbill->fetch_array();

  $fetchpayment = $conn->query("SELECT IFNULL(total,0) as final FROM (SELECT SUM(Pay_amount) as total FROM `payment` WHERE year = '$year') as initial ") or die(mysql_error());
  $payment = $fetchpayment->fetch_array();

  //COMPANY

  $coach = $conn->query("SELECT COUNT(COACH_ID) as total FROM `coach`") or die(mysql_error());
  $fcoach = $coach->fetch_array();

  $equip = $conn->query("SELECT IFNULL(total,0) as final FROM (SELECT SUM(EI_Quantity) as total FROM `equipmentinventory`) as initial ") or die(mysql_error());
  $fequip = $equip->fetch_array();

  $sc = $conn->query("SELECT COUNT(SC_Code) as total FROM `studioclass` ") or die(mysql_error());
  $fsc = $sc->fetch_array();

  $scs = $conn->query("SELECT COUNT(SCS_Code) as total FROM `studioclasssession` ") or die(mysql_error());
  $fscs = $scs->fetch_array();

  ?>

  <div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-pink hover-expand-effect">
        <div class="icon">
          <i class="material-icons">playlist_add_check</i>
        </div>
        <div class="content">
          <div class="text">Currently Present</div>
          <div class="number count-to" data-from="0" data-to="<?php echo $present['total'] ?>" data-speed="15" data-fresh-interval="20"><?php echo $present['total'] ?></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-cyan hover-expand-effect">
        <div class="icon">
          <i class="material-icons">help</i>
        </div>
        <div class="content">
          <div class="text">Ongoing Contracts</div>
          <div class="number count-to" data-from="0" data-to="<?php echo $contracts['total'] ?>" data-speed="1000" data-fresh-interval="20"><?php echo $contracts['total'] ?></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-light-green hover-expand-effect">
        <div class="icon">
          <i class="material-icons">forum</i>
        </div>
        <div class="content">
          <div class="text">Class Participants</div>
          <div class="number count-to" data-from="0" data-to="<?php echo $participants['total'] ?>" data-speed="1000" data-fresh-interval="20"><?php echo $participants['total'] ?></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-orange hover-expand-effect">
        <div class="icon">
          <i class="material-icons">person_add</i>
        </div>
        <div class="content">
          <div class="text">Total Clients</div>
          <div class="number count-to" data-from="0" data-to="<?php echo $clients['total'] ?>" data-speed="1000" data-fresh-interval="20"><?php echo $clients['total'] ?></div>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Widgets -->
  <!-- CPU Usage -->
  <!-- #END# CPU Usage -->
  <div class="row clearfix">

    <!-- Answered Tickets -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="card">
        <div class="body bg-teal">
          <div class="font-bold m-b--35">CLIENTS THIS YEAR</div>
          <ul class="dashboard-stat-list">
            <li>
              WALK-INS
              <span class="pull-right"><b><?php echo $walkin['total'] ?></b></span>
            </li>

            <li>
              MEMBERSHIPS
              <span class="pull-right"><b><?php echo $members['total'] ?></b> </span>
            </li>

            <li>
              TRAINING CONTRACTS
              <span class="pull-right"><b><?php echo $trainClients['total'] ?></b></span>
            </li>

            <li>
              TOTAL CLIENTS
              <span class="pull-right"><b><?php echo $fyclients['total'] ?></b></span>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="card">
        <div class="body bg-teal">
          <div class="font-bold m-b--35">TRANSACTIONS THIS YEAR</div>
          <ul class="dashboard-stat-list">
            <li>
              PAYMENTS RECEIVED
              <span class="pull-right"><b><?php echo $payment['final'] ?></b> </span>
            </li>

            <li>
              UNSETTLED ACCOUNTS
              <span class="pull-right"><b><?php echo $bill['final'] - $payment['final'] ?> </b> </span>
            </li>

            <li>
              COMPLETED TRANSACTIONS
              <span class="pull-right"><b><?php echo $comtran['total'] ?></b></span>
            </li>

            <li>
              TOTAL TRANSACTIONS
              <span class="pull-right"><b><?php echo $transact['total'] ?></b></span>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="card">
        <div class="body bg-teal">
          <div class="font-bold m-b--35">THE COMPANY THIS YEAR</div>
          <ul class="dashboard-stat-list">
            <li>
              COACHES
              <span class="pull-right"><b><?php echo $fcoach['total'] ?></b></span>
            </li>

            <li>
              EQUIPMENT
              <span class="pull-right"><b><?php echo $fequip['final'] ?></b> </span>
            </li>

            <li>
              CLASSES OFFERED
              <span class="pull-right"><b><?php echo $fsc['total'] ?></b></span>
            </li>

            <li>
              CLASSES SESSIONS
              <span class="pull-right"><b><?php echo $fscs['total'] ?></b></span>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Answered Tickets -->
  <!-- Task Info -->

  <!-- <div class="card">
  <div class="header">
  <h2>THIS WEEK'S MEMBERSHIP EXPIRY</h2>
</div>
<div class="body">
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
<thead>
<tr>
<th>Client</th>
<th>Days Remaining</th>
</tr>
</thead>
<tbody>
<?php
$pdo = new dbConnect();
$date = date("Y-m-d");
$week = $pdo->getExpire($date);
$exprs = $pdo->expiry($date,$week,array("order_by" => "M_Code ASC"));
if(!empty($exprs)){
$count = 0;
foreach($exprs as $exp){
$count++;
?>

<tr>
<td><?php
$firstname = $exp['CLIENT_FirstName'];
$midname = $exp['CLIENT_MiddleName'];
$lastname = $exp['CLIENT_LastName'];
$fullname = $firstname ." ". $midname." ". $lastname;
echo $fullname ;
?>

</td>
<td><?php echo $date - $exp['M_expiryDate']?></td>

</tr>
<?php } }else{ ?>

<tr><td colspan="6">No Client found......</td></tr>

<?php } ?>

</tbody>
</table>
</div>
</div> -->

</div>
</div>


<div class="card">
  <div class="header">
    <h2>TODAY'S ACTIVITIES</h2>
  </div>
  <div class="body">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
      <thead>
        <tr>
          <th>Coach</th>
          <th>Activity</th>
          <th>Start Time</th>
          <th>End Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $pdo = new dbConnect;
        $date = date("Y-m-d");
        $acts = $pdo->dashboardActs($date,array("order_by" => "AL_Code ASC"));
        if(!empty($acts)){
          $count = 0;
          foreach($acts as $act){
            ?>

            <tr>
              <td><?php $firstname = $act['Coach_FirstName']; $lastname = $act['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
              <td><?php echo $act['Activity']?></td>
              <td><?php echo date("g:i A", strtotime($act['AL_StartTime'])) ?></td>
              <td><?php echo date("g:i A", strtotime($act['AL_EndTime'])) ?></td>
            </tr>
          <?php } }else{ ?>

            <tr><td colspan="6">No Activities found......</td></tr>

          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>


  <!-- #END# Task Info -->
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
