<?php
include "../dbConnect.php";
session_start();
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
}
include("includes/header.php"); ?>
<!--
<script>

$(document).ready(function() {

$('#reportattendance').DataTable( {
dom: 'Bfrtip',
buttons: [
{
extend: 'print',
customize: function ( win ) {
$(win.document.body)
.css( 'font-size', '10pt' )
.prepend(
'<img src="layouts/eclipse_logo.png"/>'
);

$(win.document.body).find( 'table' )
.addClass( 'compact' )
.css( 'font-size', 'inherit' )
.addClass('display')
.css( 'background-color', 'blue');
}
}
]
} );
} );

</script>
-->
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Walk-in Client List</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Clients - Reports - Attendance History
        </li>
      </ol>
    </div>
  </div>
  <?php include("Client-Report-List.php"); ?>
  <div class="card">
    <div class="header">
      <h2>Attendance History Report</h2>
    </div>

    <div class="body">

      <form method="POST">
        <div class="row clearfix">
          <div class="col-md-6">
            <div class="form-group">
              <div class="form-line">
                <div class="col-md-6">
                  <input type="date" class="form-control"  id="filterstart" name="filter_start"/>
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control" id="filterend" name="filter_end"/>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
          </div>

          <div class="col-md-3">
            <input type="hidden" name="action_type" value="filter"/>
            <button type="submit" name= "filter" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
          </div>

        </div>
      </form>

      <table class="table table-bordered table-striped table-hover dataTables" id="attendancereport" name="attendancereport" role="grid" aria-describedby="DataTables_Table_0_info">

        <thead>
          <tr>
            <th align="center">Client Name</th>
            <th align="center">Time-in</th>
            <th align="center">Time-out</th>
            <th align="center">Towels</th>
            <th align="center">Locker No.</th>
            <th align="center">Date</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

          if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
            if($_REQUEST['action_type'] == 'filter'){

              $filterstart = date('Y-m-d', strtotime($_POST['filter_start']));
              $filterend = date('Y-m-d', strtotime($_POST['filter_end']));

              $pat = $conn->query("SELECT * FROM `attendance` INNER JOIN `client` ON attendance.CLIENT_ID = client.CLIENT_ID WHERE A_TimeOut != '' && A_Date BETWEEN '$filterstart' AND '$filterend' ") or die(mysqli_error());

              while($fetchF = $pat->fetch_array()) {

                $id = $fetchF['CLIENT_ID'];

                ?>
                <tr>
                  <td><?php echo $fetchF['CLIENT_FirstName']; ?>
                    <?php echo $fetchF['CLIENT_LastName']; ?></td>
                    <td><?php echo date('g:i A', strtotime($fetchF['A_TimeIn'])) ?></td>
                    <td><?php echo date('g:i A', strtotime($fetchF['A_TimeOut'])) ?></td>
                    <td><?php echo $fetchF['A_TowelQty']; ?></td>
                    <td><?php echo $fetchF['A_LockerKey']; ?></td>
                    <td><?php echo date("F j, Y", strtotime($fetchF['A_Date'])) ?></td>
                  </tr>
                  <?php
                }
              }
            } else {

              $pat = $conn->query("SELECT * FROM `attendance` INNER JOIN `client` ON attendance.CLIENT_ID = client.CLIENT_ID WHERE A_TimeOut != '' ") or die(mysqli_error());

              while($fetchF = $pat->fetch_array()) {

                $id = $fetchF['CLIENT_ID'];

                ?>
                <tr>
                  <td><?php echo $fetchF['CLIENT_FirstName']; ?>
                    <?php echo $fetchF['CLIENT_LastName']; ?></td>
                    <td><?php echo date('g:i A', strtotime($fetchF['A_TimeIn'])) ?></td>
                    <td><?php echo date('g:i A', strtotime($fetchF['A_TimeOut'])) ?></td>
                    <td><?php echo $fetchF['A_TowelQty']; ?></td>
                    <td><?php echo $fetchF['A_LockerKey']; ?></td>
                    <td><?php echo date("F j, Y", strtotime($fetchF['A_Date'])) ?></td>
                  </tr>
                  <?php
                }
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>


    $(document).ready(function() {
      $('#attendancereport').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 'copy', 'csv', 'excel',
        {
          extend: 'print',
          title: '',
          responsive: true,
          footer: true,
          className: '',
          customize: function ( win ) {
            $(win.document.body)
            .prepend('<left><h4>703-1503</h4></left>')
            .prepend('<left><h4>La Salle Avenue, Bacolod City</h4></left>')
            .prepend('<left><h4>Attendance History Report</h4></left>')
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
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>
<script src="../assets/js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>
</body>

</html>
