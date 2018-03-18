<?php
include("../dbConnect.php");
include("auth.php");
include("includes/header.php"); ?>

<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>General Revenue</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Clients - Trends - General Revenue
        </li>
      </ol>
    </div>
  </div>
  <?php include("Client-Report-List.php"); ?>
  <div class="card">
    <div class="header">
      <h2>General Revenue</h2>
    </div>
    <div class="body">
      <select id="filteryear" class="validate[required] select form-control show-tick" style="margin-top: -25px; width: 30%;" data-live-search="true">
        <option>Select Year...</option>
        <?php
        for($year=2013; $year<=2025; $year++){
          ?>
          <option value="<?php echo $year ?>">
            <?php echo $year; ?>
          </option>
          <?php
        }
        ?>
      </select>
      <script>
      $(document).ready(function(){
        $("#filteryear").on('change', function(){
          var year=$(this).val();
          window.location.href = 'Client-Trend-GeneralRevenue.php?year='+year;
        });
      });
      </script>
    </div>
    <div class="body">
      <div class="col-s-12">
        <div id="genrev" style="width: 100%; height: 400px"></div>
      </div>
    </div>
  </div>

  <?php

  $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

  $year = date('Y');
  if(isset($_GET['year']))
  {
    $year=$_GET['year'];
  }

  //REGULAR
  $mems = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction`  WHERE TR_Type = 'Membership' AND TR_Status = 'paid' AND year = '$year') as zero ") or die(mysqli_error());
  $fmems = $mems->fetch_array();

  $pts = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction`  WHERE TR_Type = 'Personal Training' AND TR_Status = 'paid' AND year = '$year') as zero ") or die(mysqli_error());
  $fpts = $pts->fetch_array();

  $lostk = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction`  WHERE TR_Type = 'Lost Locker Key' AND TR_Status = 'paid' AND year = '$year') as zero ") or die(mysqli_error());
  $flostk = $lostk->fetch_array();

  $lostt = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction`  WHERE TR_Type = 'Lost Towel(s)' AND TR_Status = 'paid' AND year = '$year') as zero ") or die(mysqli_error());
  $flostt = $lostt->fetch_array();

  $walk = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction`  WHERE TR_Type = 'Walk-in' AND TR_Status = 'paid' AND year = '$year') as zero ") or die(mysqli_error());
  $fwalk = $walk->fetch_array();
  ?>


  <script>
  window.onload = function () {

    var chart = new CanvasJS.Chart("genrev", {
      animationEnabled: true,
      exportEnabled: true,
      title:{
        text:"Revenues for the Year <?php echo $year ?>"
      },
      axisX:{
        interval: 1
      },
      data: [{
        type: "column",
        name: "Regulars",
        axisYType: "primary",
        color: "blue",
        dataPoints: [
          { y: <?php echo $fwalk["zero"]?>, label: "Walk-ins", indexLabel:"<?php echo $fwalk["zero"]?>"},
          { y: <?php echo $fmems["zero"]?>, label: "Memberships", indexLabel:"<?php echo $fmems["zero"]?>"},
          { y: <?php echo $fpts["zero"]?>, label: "Personal Trainings", indexLabel:"<?php echo $fpts["zero"]?>"},
          { y: <?php echo $flostk["zero"]?>, label: "Lost Keys", indexLabel:"<?php echo $flostk["zero"]?>"},
          { y: <?php echo $flostt["zero"]?>, label: "Lost Towels", indexLabel:"<?php echo $flostt["zero"]?>"},
          { y: <?php echo $total = $fwalk['zero'] + $fmems['zero'] + $fpts['zero'] + $flostk['zero'] + $flostt['zero'] ?>, color: "red", label: "Total Revenue", indexLabel: "<?php echo $total ?>"}

        ]
      }]
    });
    chart.render();

  }
</script>

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
<script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Custom Js -->
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>\

<script src="../assets/js/pages/forms/basic-form-elements.js"></script>
<script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

<script src="../assets/js/pages/charts/new_member.js"></script>
<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>

</body>

</html>
