<?php
include("../dbConnect.php");
include("auth.php");
include("includes/header.php"); ?>
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Coach List</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Personal Training - Reports - Coach List
        </li>
      </ol>
    </div>
  </div>

  <?php include("PT-Report-List.php"); ?>
  <div class="card">
    <div class="header">
      <h2>Coach List</h2>
    </div>
    <div class="body">
      <div class="row clearfix">

      </div>
      <div id="print">
        <table class="table table-bordered table-striped table-hover dataTable" id="coachlist" role="grid" aria-describedby="DataTables_Table_0_info">

          <thead>
            <tr>
              <th>Name</th>
              <th>Gender</th>
              <th>Specialty</th>
              <th>Email Address</th>
              <th>Coach Type</th>
              <th>Contact Number</th>

            </tr>
          </thead>

          <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());
            $coach = $conn->query("SELECT * FROM `coach`") or die(mysql_error());
            while($fcoach = $coach->fetch_array()) {
              ?>
              <tr>
                <td><?php echo $fcoach['Coach_LastName']?> <?php echo $fcoach['Coach_FirstName'] ?></td>
                <td><?php echo $fcoach['Coach_Gender']?></td>
                <td><?php echo $fcoach['Coach_Specialty'] ?></td>
                <td><?php echo $fcoach['Coach_EmailAddress'] ?></td>
                <td><?php echo $fcoach['Coach_Type'] ?></td>
                <td><?php echo $fcoach['Coach_ContactNumber'] ?></td>
              </tr>

              <?php
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<script>

$(document).ready(function() {
  $('#coachlist').DataTable( {
    dom: 'Bfrtip',
    buttons: [ 'copy', 'csv', 'excel',
    {
      extend: 'print',
      title: '',
      responsive: true,
      footer: true,
      customize: function ( win ) {
        $(win.document.body)
        .prepend('<left><h4>703-1503</h4></left>')
        .prepend('<left><h4>La Salle Avenue, Bacolod City</h4></left>')
        .prepend('<left><h4>Coach List</h4></left>')
        .prepend('<left><h3>Eclipse Healing and Body Design Center</h3></left>')

        $(win.document.body).find('h3').css('font-family','Impact');

        $(win.document.body).find( 'table' )
        .addClass( 'compact' )
        .css( 'font-size', 'inherit' )

        $(win.document.body.innerHTML += "<br><br><center><div><label>Date Printed: ____________  &nbsp; &nbsp; &nbsp; Printed By:____________ &nbsp; &nbsp; &nbsp; &nbsp; Signed By: ____________</label></div></center>")
      }

    }
  ]
} );

} );

</script>
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
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>
<script src="../assets/js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>
</body>

</html>
