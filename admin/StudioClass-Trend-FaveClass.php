<?php
include("../dbConnect.php");
include("auth.php");
include("includes/header.php");
include_once("actions/SC-Trend-FaveClass-Action.php"); ?>
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Favorite Classes</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Studio Class - Trends - Favorite Classes
        </li>
      </ol>
    </div>
  </div>
  <?php include("StudioClass-Report-List.php"); ?>
  <div class="card">
    <div class="header">
      <h2>Favorite Classes</h2>
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
          window.location.href = 'StudioClass-Trend-FaveClass.php?year='+year;
        });
      });
      </script>
    </div>

    <div class="body">
      <div class="col-s-12">
        <div id="faveclass" style="width: 100%; height: 400px"></div>
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
