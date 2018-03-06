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
      <h2>Clients Transaction</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          <i class="material-icons">credit_card</i> Clients - Transaction
        </li>
      </ol>
    </div>
  </div>
  <!-- <div class="card">

</div> -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="card">
    <div class="header">
      <h2>Unpaid Transactions</h2>
    </div>
    <div class="body">
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
            <thead>
              <tr>

                <th>Client Name</th>
                <th>Bill</th>
                <th>Action</th>


              </tr>
            </thead>
            <!-- WALK-IN QUERY TRANSACTONS -->
            <tbody>
              <?php
              $pdo = new dbConnect();
              $trs = $pdo->transClient(array("order_by" => "TR_ID DESC"));
              if(!empty($trs)){
                $count = 0;
                foreach($trs as $tr){
                  $count++;

                  ?>


                  <tr>
                    <td><?php $firstname = $tr['CLIENT_FirstName']; $lastname = $tr['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                    <td><?php echo $tr['bill']; ?></td>

                    <td>
                      <form method="post" action="actions/transactionAction.php">
                        <input type="hidden" name="TR_ID" value="<?php echo $tr['TR_ID']?>">
                        <input type="hidden" name="action_type" value="add">
                        <button class="btn bg-red" >CHECKOUT</button>
                      </form>
                    </td>
                    <!--   </form> -->



                  </tr>
                <?php } }else{ ?>

                  <tr><td colspan="6">No transaction(s) found......</td></tr>

                <?php } ?>

              </tbody>


              <!-- #END# Hover Rows -->



            </table>
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



</body>

</html>
