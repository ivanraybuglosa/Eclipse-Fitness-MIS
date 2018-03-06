<?php
include "../dbConnect.php";
session_start();
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
}

include("includes/header.php");
?>

<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>BACKUP AND RESTORE</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Maintenance - Backup and Restore
        </li>
      </ol>
    </div>
  </div>

  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'eclipse_db');
  set_time_limit(0);
  $message = '';
  $message2 = '';
  if(isset($_POST["import"])) {
    if($_FILES["database"]["name"] != '')
    {
      $array = explode(".", $_FILES["database"]["name"]);
      $extension = end($array);

      if($extension == 'sql')
      {
        $connect = mysqli_connect("localhost", "root", "", "eclipse_db"); // DIRI KA MA ILIS SANG DB NAME NGA GUSTO MO IMPORTAN SANG FILE MO. ISLI LANG IF GUSTO MO ITEST ANG IMPORT.
        $output = '';
        $count = 0;
        $file_data = file($_FILES["database"]["tmp_name"]);

        foreach($file_data as $row)
        {
          $start_Character = substr(trim($row), 0, 2);
          if($start_Character != '--' || $start_Character != '/*' || $start_Character != '//' || $row != '')
          {
            $output = $output . $row;
            $end_character = substr(trim($row), -1, 1);
            if($end_character == ';')
            {
              if(!mysqli_query($connect, $output))
              {
                $count++;
              }
              $output = '';
            }
          }
        }
        $message = '<label class="text-success">Database Successfully Imported!</label>';
      }
      else
      {
        $message = '<label class="text-danger">Invalid File</label>';
      }
    }
    else
    {
      $message = '<label class="text-danger">Please select SQL File</label>';
    }

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $time = date('g:i s');

    $conn->query("INSERT INTO `backuphistory` VALUES('', 'Import', '$date', '$time')") or die(mysqli_error());
  }


  if(isset($_POST["export"])) {

    $message2 = '<label class="text-success">Database Successfully Exported to C:\xampp\htdocs\EclipseMIS\admin\backup</label>';

    $tables = array();
    $result = mysqli_query($conn, "SHOW TABLES");
    while ($row = mysqli_fetch_row($result)){
      $tables[] = $row[0];
    }

    $return = '';

    foreach ($tables as $table) {
      $result = mysqli_query($conn, "SELECT * FROM ". $table);
      $num_fields = mysqli_num_fields($result);

      $return .= 'DROP TABLE '.$table.';';
      $row2 = mysqli_fetch_row(mysqli_query($conn, 'SHOW CREATE TABLE '.$table));
      $return .= "\n\n".$row2[1].";\n\n";

      for ($i=0;$i<$num_fields;$i++){
        while ($row = mysqli_fetch_row($result)){
          $return .= 'INSERT INTO '.$table.' VALUES(';
          for ($j=0;$j<$num_fields;$j++){
            $row[$j] = addslashes($row[$j]);
            if(isset($row[$j])){$return .= '"' .$row[$j]. '"';} else {$return .= '""';}
            if($j<$num_fields-1){$return .= ',';}
          }
          $return .="); \n";
        }
      }

      $return .="\n\n\n";
    }


    $handle = fopen('backup/backup.sql', 'w+');
    fwrite($handle, $return);
    fclose($handle);
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $time=date("H:i:s");

    $conn->query("INSERT INTO `backuphistory` VALUES('', 'Export', '$date', '$time')") or die(mysqli_error());

  }
  ?>


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="row">
        <div class="body">

          <form method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div><?php echo $message; ?></div>
              <p>
                <label>Select an SQL File</label>
                <input type="file" name="database">
              </p>
            </div>
            <div class="col-md-12">
              <div><?php echo $message2; ?></div>
            </div>
            <div class="row container-fluid">
              <div class="col-md-6">
                <button type="submit" name="import" class="btn btn-block btn-success" value="Import">Import Database</button>
              </div>
              <div class="col-md-6">
                <button type="submit" name="export" class="btn btn-block btn-danger" value="Export">Export Database</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="body">
        <div class="table-responsive">

          <table class="table table-bordered table-striped table-hover dataTable js-basic-example ">

            <thead>
              <tr>
                <th>Activity</th>
                <th>Description</th>
                <th>Back-up Date</th>
                <th>Back-up Time</th>
              </tr>
            </thead>

            <tbody>
              <?php

              $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());
              $maintenance = $conn->query("SELECT * FROM `backuphistory` ") or die(mysql_error());

              while($fmaint = $maintenance->fetch_array()) {
                ?>
                <tr>
                  <td><?php echo $fmaint['backup_type'] ?></td>
                  <td>Successful <?php echo $fmaint['backup_type'] ?> of Database.</td>
                  <td><?php echo date("F j, Y", strtotime($fmaint['backup_date'])) ?></td>
                  <td><?php echo date('g:i A', strtotime($fmaint['backup_time'])) ?></td>
                </tr>

                <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
</section>
<!-- Card 1 -->

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
