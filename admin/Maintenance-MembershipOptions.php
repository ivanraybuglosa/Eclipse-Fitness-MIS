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
      <h2>MEMBERSHIP OPTIONS</h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          Maintenance - Membership Options
        </li>
      </ol>
    </div>
  </div>

  <div class="card">
    <div class="header">
      <h2>Membership Option Form</h2>
    </div>
    <div class="body">
      <div class="row js-sweetalert">
        <form method="POST" action="actions/membershipAction.php">
          <div class="col-sm-4">
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" name="type" class="form-control" required >
                <label class="form-label">Membership Type</label>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group form-float">
              <div class="form-line">
                <input type="number" min="0" name="duration" class="form-control" required >
                <label class="form-label">Duration(Months)</label>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group form-float">
              <div class="form-line">
                <input type="text" name="price" class="form-control"  required>
                <label class="form-label">Total Price</label>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <input type="hidden" name="action_type" value="add"/>
            <button type="submit" class="btn waves-effect btn-success pull-right" data-type='success'>SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="header">
      <h2>Membership Options List</h2>
    </div>
    <div class="body">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
              <thead>
                <tr role="row">
                  <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 230px;">Membership Type</th>

                  <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Duration</th>

                  <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Price</th>
                  <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Actions</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $pdo = new dbConnect();
                $member = $pdo->getRows('membership', array('order_by' => 'MS_Code ASC'));
                if(!empty($member)){
                  $count = 0;
                  foreach($member as $members){
                    $count++;?>

                    <tr role="row">

                      <td ><?php echo $members['MS_Type']; ?></td>
                      <td ><?php echo $members['MS_Duration']; ?> Months</td>
                      <td ><?php echo $members['MS_Price'];?></td>
                      <td ><button type="button" data-toggle="modal"  data-target="#edit-<?php echo $members['MS_Code']; ?>" class="btn bg-green" >Modify</button></td>
                      <div class="modal fade" id="edit-<?php echo $members['MS_Code']; ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                          <form method="post" action="actions/membershipAction.php" >
                            <div class="modal-content">
                              <center>
                                <div class="modal-header">
                                  <h3 class="modal-title" id="smallModalLabel">EDIT MEMBERSHIP OPTION</h3>
                                </div>

                                <div class="row container-fluid">
                                  <div class="col-sm-12">
                                    <div class="form-group">
                                      <div class="form-line">

                                        <h5 class="pull-left">Membership Type</h5>
                                        <input type="text" class="form-control" name="type" value="<?php echo $members['MS_Type']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="form-line">
                                        <h5 class="pull-left">Duration</h5>
                                        <input type="number" class="form-control" name="duration" value="<?php echo $members['MS_Duration']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="form-line">
                                        <h5 class="pull-left">Price</h5>
                                        <input type="number" name="price" class="form-control" value="<?php echo $members['MS_Price']; ?>"/>

                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </center>
                              <div class="modal-footer">
                                <input type="hidden" class="form-control" name="MS_Code" value="<?php echo $members['MS_Code']; ?>"/>
                                <input type="hidden" name="action_type" value="edit"/>
                                <button type="submit" class="btn  bg-green">SAVE CHANGES</button>
                                <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </tr>
                <?php }

              }else { ?>
                <tr><td colspan="6">No Membership Option(s) found...</td></tr>
              <?php } ?>


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
<script src="../assets/js/pages/dialogsMembershipOptions.js"></script>
<!-- Custom Js -->
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>


<script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
