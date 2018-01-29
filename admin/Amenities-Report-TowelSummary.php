<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); 
 ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Amenity Reports</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Amenities - Reports
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Amenities-Report-List.php"); 

            $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
        ?>
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-md-8">
                        <select id="filteryear" class="validate[required] select form-control show-tick" style="margin-top: -25px; width: 30%;" data-live-search="true">
                            <option>Select Year...</option>
                            <?php
                            for($y=2013; $y<=2025; $y++){
                            ?>
                            <option value="<?php echo $y ?>">
                                <?php echo $y; ?>
                            </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4 pull-right">
                        <a class="btn bg-green btn-block btn-lg" onclick="printContent('print')">Print</a>
                    </div>
                </div>

        <script>
            $(document).ready(function(){
                $("#filteryear").on('change', function(){
                    var year=$(this).val();
                    window.location.href = 'Amenities-Report-TowelSummary.php?year='+year;
                });
            });
        </script>
            </div>
            <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="center">Monthly Towel Usage for the Year <?php echo $year ?></h4>
                                         <div id="print">
                            <table class="table table-bordered table-striped table-hover dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    
                                    
                                    <thead>
                                        <tr role="row">
                                            <th>
                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>Mar</th>
                                            <th>Apr</th>
                                            <th>May</th>
                                            <th>Jun</th>
                                            <th>Jul</th>
                                            <th>Aug</th>
                                            <th>Sept</th>
                                            <th>Oct</th>
                                            <th>Nov</th>
                                            <th>Dec</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$qjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Jan' && A_Year = '$year') as zero") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Feb' && A_Year = '$year') as zero") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Mar' && A_Year = '$year') as zero") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Apr' && A_Year = '$year') as zero") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'May' && A_Year = '$year') as zero") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Jun' && A_Year = '$year') as zero") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Jul' && A_Year = '$year') as zero") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Aug' && A_Year = '$year') as zero") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Sep' && A_Year = '$year') as zero") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Oct' && A_Year = '$year') as zero") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Nov' && A_Year = '$year') as zero") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE `A_Month` = 'Dec' && A_Year = '$year') as zero") or die(mysqli_error());
$fdec = $qdec->fetch_array();



$qqjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Jan' && A_Year = '$year') as zero") or die(mysqli_error());
$ffjan = $qqjan->fetch_array();

$qqfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Feb' && A_Year = '$year') as zero") or die(mysqli_error());
$fffeb = $qqfeb->fetch_array();

$qqmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Mar' && A_Year = '$year') as zero") or die(mysqli_error());
$ffmar = $qqmar->fetch_array();

$qqapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Apr' && A_Year = '$year') as zero") or die(mysqli_error());
$ffapr = $qqapr->fetch_array();

$qqmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'May' && A_Year = '$year') as zero") or die(mysqli_error());
$ffmay = $qqmay->fetch_array();

$qqjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Jun' && A_Year = '$year') as zero") or die(mysqli_error());
$ffjune = $qqjune->fetch_array();

$qqjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Jul' && A_Year = '$year') as zero") or die(mysqli_error());
$ffjul = $qqjul->fetch_array();

$qqaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Aug' && A_Year = '$year') as zero") or die(mysqli_error());
$ffaug = $qqaug->fetch_array();

$qqsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Sep' && A_Year = '$year') as zero") or die(mysqli_error());
$ffsept = $qqsept->fetch_array();

$qqoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Oct' && A_Year = '$year') as zero") or die(mysqli_error());
$ffoct = $qqoct->fetch_array();

$qqnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Nov' && A_Year = '$year') as zero") or die(mysqli_error());
$ffnov = $qqnov->fetch_array();

$qqdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE `A_Month` = 'Dec' && A_Year = '$year') as zero") or die(mysqli_error());
$ffdec = $qqdec->fetch_array();

$borrowedTotal = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelQty) as total FROM `attendance` WHERE A_Year = '$year') as zero") or die(mysql_error());
$fetchBorrowed = $borrowedTotal->fetch_array();

$returnedTotal = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(A_TowelReturn) as total FROM `attendance` WHERE A_Year = '$year') as zero") or die(mysql_error());
$fetchReturned = $returnedTotal->fetch_array();
?>

                                       <tr>
                                         <td>Borrowed</td>
                                         <td><?php echo $fjan['zero'] ?></td>
                                         <td><?php echo $ffeb['zero'] ?></td>
                                         <td><?php echo $fmar['zero'] ?></td>
                                         <td><?php echo $fapr['zero'] ?></td>
                                         <td><?php echo $fmay['zero'] ?></td>
                                         <td><?php echo $fjune['zero'] ?></td>
                                         <td><?php echo $fjul['zero'] ?></td>
                                         <td><?php echo $faug['zero'] ?></td>
                                         <td><?php echo $fsept['zero'] ?></td>
                                         <td><?php echo $foct['zero'] ?></td>
                                         <td><?php echo $fnov['zero'] ?></td>
                                         <td><?php echo $fdec['zero'] ?></td>
                                         <td><?php echo $fetchBorrowed['zero'] ?></td>

                                       </tr>


                                       <tr>
                                         <td>Returned</td>
                                         <td><?php echo $ffjan['zero'] ?></td>
                                         <td><?php echo $fffeb['zero'] ?></td>
                                         <td><?php echo $ffmar['zero'] ?></td>
                                         <td><?php echo $ffapr['zero'] ?></td>
                                         <td><?php echo $ffmay['zero'] ?></td>
                                         <td><?php echo $ffjune['zero'] ?></td>
                                         <td><?php echo $ffjul['zero'] ?></td>
                                         <td><?php echo $ffaug['zero'] ?></td>
                                         <td><?php echo $ffsept['zero'] ?></td>
                                         <td><?php echo $ffoct['zero'] ?></td>
                                         <td><?php echo $ffnov['zero'] ?></td>
                                         <td><?php echo $ffdec['zero'] ?></td>
                                         <td><?php echo $fetchReturned['zero'] ?></td>

                                       </tr>

                                    </tbody>
                                </table>
                                    </div>
                                </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>

                     function printContent(el) {
                         var restorepage = document.body.innerHTML;
                         var printcontent = document.getElementById(el).innerHTML;
                         document.body.innerHTML ="<center><img src='../logo.png' height='70' width='200'></center><center><h4>Monthly Towel Usage for the Year <?php echo $year ?> </h4><center><br><br>" +
                         printcontent + "<br><br><br><span>PRINTED BY: ____________ </span>" + "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>SIGNED BY: ____________";
                         window.print();
                         document.body.innerHTML = restorepage;
                     }


            </script>
    </section>
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