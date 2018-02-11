<?php
 include "../dbConnect.php";
 session_start();

 
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Lost Amenities</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Trends - Lost Amenities
                                </li>
                            </ol>
            </div>
        </div>
        
    <?php include("Amenities-Report-List.php"); ?>
            <div class="card">
                    <div class="header">
                       <h2>Lost Amenities</h2>
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
                    window.location.href = 'Amenities-Trend-LostAmenities.php?year='+year;
                });
            });
        </script>
            </div>
                  <div class="body">
                    <div class="col-s-12">
                         <div id="lostamenities" style="width: 100%; height: 400px"></div>
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

$qjan = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Jan' AND A_Year = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Feb' AND A_Year = '$year' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Mar' AND A_Year = '$year' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Apr' AND A_Year = '$year' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'May' AND A_Year = '$year' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Jun' AND A_Year = '$year' ") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Jul' AND A_Year = '$year' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Aug' AND A_Year = '$year' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Sep' AND A_Year = '$year' ") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Oct' AND A_Year = '$year' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Nov' AND A_Year = '$year' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT COALESCE(SUM(A_TowelQty - A_TowelReturn),0) as total FROM `attendance` WHERE A_TowelQty != A_TowelReturn AND `A_Month` = 'Dec' AND A_Year = '$year' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();

//LOCKERS

$wqjan = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Jan' && A_Year = '$year' ") or die(mysqli_error());
$wfjan = $wqjan->fetch_array();

$wqfeb = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Feb' && A_Year = '$year' ") or die(mysqli_error());
$wffeb = $wqfeb->fetch_array();

$wqmar = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Mar' && A_Year = '$year' ") or die(mysqli_error());
$wfmar = $wqmar->fetch_array();

$wqapr = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Apr' && A_Year = '$year' ") or die(mysqli_error());
$wfapr = $wqapr->fetch_array();

$wqmay = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'May' && A_Year = '$year' ") or die(mysqli_error());
$wfmay = $wqmay->fetch_array();

$wqjune = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Jun' && A_Year = '$year' ") or die(mysqli_error());
$wfjune = $wqjune->fetch_array();

$wqjul = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Jul' && A_Year = '$year' ") or die(mysqli_error());
$wfjul = $wqjul->fetch_array();

$wqaug = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Aug' && A_Year = '$year' ") or die(mysqli_error());
$wfaug = $wqaug->fetch_array();

$wqsept = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Sep' && A_Year = '$year' ") or die(mysqli_error());
$wfsept = $wqsept->fetch_array();

$wqoct = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Oct' && A_Year = '$year' ") or die(mysqli_error());
$wfoct = $wqoct->fetch_array();

$wqnov = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Nov' && A_Year = '$year' ") or die(mysqli_error());
$wfnov = $wqnov->fetch_array();

$wqdec = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE A_ReturnedKey = 'Unreturned' AND `A_Month` = 'Dec' && A_Year = '$year' ") or die(mysqli_error());
$wfdec = $wqdec->fetch_array();


?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("lostamenities", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1",
    title:{
        text: "Amenities Lost for the Year <?php echo $year ?>"
    },
    axisX:{
        interval: 1,
    },
    axisY:{
        includeZero: false
    },
    legend: {
        cursor: "pointer",
        verticalAlign: "top",
        horizontalAlign: "center",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{        
        type: "line",
        color: "red",
        legendText: "Towels",
        showInLegend: true, 
        dataPoints: [
            { y: <?php echo $fjan['total']?>, label: "Jan", indexLabel: "<?php echo $fjan['total']?>"},
            { y: <?php echo $ffeb['total']?>, label: "Feb", indexLabel: "<?php echo $ffeb['total']?>"},
            { y: <?php echo $fmar['total']?>, label: "Mar", indexLabel: "<?php echo $fmar['total']?>"},
            { y: <?php echo $fapr['total']?>, label: "Apr", indexLabel: "<?php echo $fapr['total']?>"},
            { y: <?php echo $fmay['total']?>, label: "May", indexLabel: "<?php echo $fmay['total']?>" },
            { y: <?php echo $fjune['total']?>, label: "June", indexLabel: "<?php echo $fjune['total']?>" },
            { y: <?php echo $fjul['total']?>, label: "July", indexLabel: "<?php echo $fjul['total']?>" },
            { y: <?php echo $faug['total']?>, label: "Aug", indexLabel: "<?php echo $faug['total']?>" },
            { y: <?php echo $fsept['total']?>, label: "Sept", indexLabel: "<?php echo $fsept['total']?>"},
            { y: <?php echo $foct['total']?>, label: "Oct", indexLabel: "<?php echo $foct['total']?>" },
            { y: <?php echo $fnov['total']?>, label: "Nov", indexLabel: "<?php echo $fnov['total']?>" },
            { y: <?php echo $fdec['total']?>, label: "Dec", indexLabel: "<?php echo $fdec['total']?>" }
        ]
    },{
         type: "line",
        color: "blue",
        legendText: "Locker Keys",
        showInLegend: true,   
        dataPoints: [
            { y: <?php echo $wfjan["total"]?>, label: "Jan", indexLabel: "<?php echo $wfjan["total"]?>"},
            { y: <?php echo $wffeb["total"]?>, label: "Feb", indexLabel: "<?php echo $wffeb["total"]?>"},
            { y: <?php echo $wfmar["total"]?>, label: "Mar", indexLabel: "<?php echo $wfmar["total"]?>"},
            { y: <?php echo $wfapr["total"]?>, label: "Apr", indexLabel: "<?php echo $wfapr["total"]?>"},
            { y: <?php echo $wfmay["total"]?>, label: "May", indexLabel: "<?php echo $wfmay["total"]?>" },
            { y: <?php echo $wfjune["total"]?>, label: "June", indexLabel: "<?php echo $wfjune["total"]?>" },
            { y: <?php echo $wfjul["total"]?>, label: "July", indexLabel: "<?php echo $wfjul["total"]?>" },
            { y: <?php echo $wfaug["total"]?>, label: "Aug", indexLabel: "<?php echo $wfaug["total"]?>" },
            { y: <?php echo $wfsept["total"]?>, label: "Sept", indexLabel: "<?php echo $wfsept["total"]?>"},
            { y: <?php echo $wfoct["total"]?>, label: "Oct", indexLabel: "<?php echo $wfoct["total"]?>" },
            { y: <?php echo $wfnov["total"]?>, label: "Nov", indexLabel: "<?php echo $wfnov["total"]?>" },
            { y: <?php echo $wfdec["total"]?>, label: "Dec", indexLabel: "<?php echo $wfdec["total"]?>" }
        ]
    }]
});
chart.render();

function toogleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else{
        e.dataSeries.visible = true;
    }
    chart.render();
}

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
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>\

    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <script src="../assets/js/pages/charts/attendance_chart.js"></script>
    
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
</body>

</html>