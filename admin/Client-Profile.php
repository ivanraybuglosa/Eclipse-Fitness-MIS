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
          <i class="material-icons">verified_user</i> Clients - Profiles
        </li>
      </ol>
    </div>
  </div>
  <div class="card">

    <form method="POST"  action="actions/profileAction.php">
      <div class="header">
        <h2>Client Registration Form</h2>
      </div>
      <div class="body">
        <div class="col-md-4">
          <div class="form-group form-float">
            <div class="form-line">
              <input type="text" name="name" class="form-control" required>
              <label class="form-label">First Name</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group form-float">
            <div class="form-line">
              <input type="text" name="middle" class="form-control" required >
              <label class="form-label">Middle name</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group form-float">
            <div class="form-line">
              <input type="text" name="surname" class="form-control" required >
              <label class="form-label">Last name</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label style="margin-top: 9px;">Gender: </label>
            <input type="radio" value="Male" name="gender" id="male" class="with-gap" required>
            <label for="male">Male</label>

            <input type="radio"  value="Female" name="gender" id="female" class="with-gap" required>
            <label for="female" class="m-l-20">Female</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group form-float">
            <div class="form-line">
              <input type="email" name="email" class="form-control" required>
              <label class="form-label">Email</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group form-float">
            <div class="form-line">
              <input type="number" class="form-control" name="contactNumber" required>
              <label class="form-label">Contact number</label>
            </div>
          </div>
        </div>

        <!-- <div class="col-md-4">
        <div class="form-group form-float">
        <div class="form-line">
        <input type="text" class="form-control" name="userAccount" required>
        <label class="form-label">User Account</label>
      </div>
    </div>
  </div>   -->
  <div class="col-md-12">
    <div class="form-group form-float">

      <div class="row">
        <div class="col-md-3">
          <label style="margin-top: 9px;">Date of Birth: </label>
        </div>
        <div class="col-md-3">
          <?php
          function get_month()
          {
            $var="";
            for ($m=01; $m<=12; $m++) {
              $month=sprintf("%02d", $m);
              $var .= '<option value="'.$month.'">'.date('F', mktime(0,0,0,$m, 1,      date('Y'))).' </option>';
            }
            return $var;
          }
          ?>
          <select class="form-control show-tick" name = "C_month" >
            <option value="month"> - Month - </option>
            <?php echo get_month(); ?>
          </select>
        </div>
        <div class="col-md-3">
          <?php
          function get_day()
          {
            $var="";
            for ($i = 1; $i < 31; $i++) {
              $num_padded=sprintf("%02d", $i);
              $var .='<option value="'.$num_padded.'">  '.$num_padded.' </option>';
            }
            return $var;
          }
          ?>
          <select class="form-control show-tick" name = "C_day" >
            <option value="day"> - Day - </option>
            <?php echo get_day(); ?>
          </select>
        </div>
        <div class="col-md-3">
          <?php
          function get_year($start,$end){
            $var="";
            while($start <= $end){
              $var .="<option value=".$start.">".$start."</option>";
              $start++;
            }
            return $var;
          }
          ?>
          <select class="form-control show-tick" name="C_year" >
            <option value="year"> - Year - </option>
            <?php echo get_year(1947,2017); ?>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-md-12 pull-right js-sweetalert">
      <input type="hidden" name="action_type" value="add"/>
      <input type="hidden" name="status" value="Walk-in"/>
      <button name ="submit"  type="submit" class="btn bg-green pull-right"  data-type="success">SUBMIT</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>

<div class="card">
  <div class="header">
    <h2>Registered Client List</h2>
  </div>

  <div class="body">

    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
              <tr role="row">

                <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Name</th>

                <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 80px;">Registration Date</th>

                <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 80px;">Status</th>

                <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 70px;">Gender</th>

                <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Contact Number</th>

                <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Actions</th>






              </tr>
            </thead>


            <tbody>
              <?php


              $pdo = new dbConnect();
              $clients = $pdo->getRows('client',array('order_by'=>'CLIENT_ID ASC'));
              if(!empty($clients)){
                $count = 0;
                foreach($clients as $client){
                  $count++;?>
                  <tr>
                    <!--Client Firstname + Lastname Merged -->
                    <td>
                      <?php
                      $firstname = $client['CLIENT_FirstName'];
                      $midname = $client['CLIENT_MiddleName'];
                      $lastname = $client['CLIENT_LastName'];
                      $fullname = $firstname ." ". $midname." ". $lastname;
                      echo $fullname ; ?></td>

                      <td><?php echo date("F j, Y",strtotime($client['CLIENT_regDATE']))?></td>

                      <td><?php echo $client['CLIENT_RegStatus']; ?></td>
                      <td><?php echo $client['CLIENT_Gender']; ?></td>
                      <td><?php echo $client['CLIENT_ContactNumber']; ?></td>
                      <td class="align-center"><a type="button" href="Client-Profile-User1.php?id=<?php echo $client['CLIENT_ID'];?>" class="btn bg-green" >View</button></td>
                      </form>

                    </tr>

                  <?php } }else{ ?>

                    <tr><td colspan="6">No client(s) found......</td></tr>

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
