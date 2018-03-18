<?php 
include("../dbConnect.php");
include("auth.php");
include("includes/header.php");
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Activity Log</h2>
        </div>
        <ol class="breadcrumb">
        <li>
          <a href="index.php">
            <i class="material-icons">dashboard</i> Dashboard
          </a>
        </li>
        <li class="active">
          <i class="material-icons">verified_user</i> Maintenance - Activity Log
        </li>
      </ol>
    <div class="card">
        <div class="header">  
          <h2>System's Activity Log</h2></h2>
        </div>
        <div class="body">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
              <tr>
                <th style="width: 80px;">User</th>
                <th style="width: 150px;">Activity</th>
                <th style="width: 200px;">Description</th>
                <th style="width: 50px;">Date</th>
                <th style="width: 50px;">Time</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $pdo = new dbConnect();
                $users = $pdo->userActs(array("order_by" => "log_id DESC"));
                  if(!empty($users)){
                    $count = 0;
                    foreach($users as $user){
                      $count++;
              ?>
              <tr>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['log_activity']?></td>
                <td><?php echo $user['log_description']?></td>
                <td><?php echo date("F j, Y",strtotime($user['log_date']))?></td>
                <td><?php echo date("g:i A", strtotime($user['log_time']))?></td>
              </tr>
                    <?php }} ?>
            </tbody>
            </table>
            </div>
        </div>
    </div>
    </div>


</section>

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
