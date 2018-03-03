<?php
include "../dbConnect.php";
session_start();
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
}
include("includes/header.php");
include_once("actions/StudioClass-Trend-Participants-Action.php"); ?>
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Studio Class Participants</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Studio Class - Trends - Studio Class Participants
        </li>
      </ol>
    </div>
  </div>
  <?php include("includes/StudioClass-Report-List.php"); ?>
  <div class="card">
    <div class="header">
      <h2>Monthly Class Participants</h2>
    </div>
    <div class="body">
      <div class="col-s-12">
        <div id="participants" style="width: 100%; height: 400px"></div>
      </div>
    </div>
  </div>
  <footer>
    <div class="row">
      <label style="margin-left:30px; margin-right: 5px;">Export:</label>
      <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">Print</button>
      <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">Excel</button>
      <button type="button" class="btn btn-success waves-effect" style="padding:8px 30px;">PDF</button>
    </div>
  </footer>
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

<!-- Jquery DataTable Plugin Js -->
<script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extens
ions/export/pdfmake.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Custom Js -->
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>

<script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

<script src="../assets/js/pages/charts/studioClassSession.js"></script>
<script src="canvas/jquery.min.js"></script>
<script src="canvas/jquery.canvasjs.min.js"></script>

<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>

</body>

</html>ui
