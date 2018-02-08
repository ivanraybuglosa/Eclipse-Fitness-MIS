<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Registration Revenue</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Trends - Registration Revenue
                                </li>
                            </ol>
            </div>
        </div>
        <?php include("Client-Report-List.php"); ?>
        <div class="card">
            <div class="header">
                <h2>Registration Revenue</h2>
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
                    window.location.href = 'Client-Trend-MembershipRevenue.php?year='+year;
                });
            });
        </script>
            </div>
            <div class="body">
            <div class="col-s-12">
                 <div id="revenue" style="width: 100%; height: 400px"></div>
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

//REGULAR 
$qjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Jan' && year = '$year') as zero ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Feb' && year = '$year') as zero ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Mar' && year = '$year') as zero ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Apr' && year = '$year') as zero ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'May' && year = '$year') as zero ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Jun' && year = '$year' ) as zero") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Jul' && year = '$year') as zero ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Aug' && year = '$year') as zero ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Sep' && year = '$year' ) as zero") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Oct' && year = '$year') as zero ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Nov' && year = '$year') as zero ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Regular' AND month = 'Dec' && year = '$year') as zero ") or die(mysqli_error());
$fdec = $qdec->fetch_array();


//STUDENTS

$qjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Jan' && year = '$year') as zero ") or die(mysqli_error());
$sfjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Feb' && year = '$year') as zero ") or die(mysqli_error());
$sffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Mar' && year = '$year') as zero ") or die(mysqli_error());
$sfmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Apr' && year = '$year') as zero ") or die(mysqli_error());
$sfapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'May' && year = '$year') as zero ") or die(mysqli_error());
$sfmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Jun' && year = '$year' ) as zero") or die(mysqli_error());
$sfjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Jul' && year = '$year') as zero ") or die(mysqli_error());
$sfjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Aug' && year = '$year') as zero ") or die(mysqli_error());
$sfaug = $qaug->fetch_array();

$qsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Sep' && year = '$year' ) as zero") or die(mysqli_error());
$sfsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Oct' && year = '$year') as zero ") or die(mysqli_error());
$sfoct = $qoct->fetch_array();

$qnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Nov' && year = '$year') as zero ") or die(mysqli_error());
$sfnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(MS_Price) as total FROM `membershiptype` INNER JOIN `membership` ON membershiptype.MS_Code = membership.MS_Code WHERE membership.MS_Type = 'Student' AND month = 'Dec' && year = '$year') as zero ") or die(mysqli_error());
$sfdec = $qdec->fetch_array();

//WALK-INS
$qjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Jan' && year = '$year') as zero ") or die(mysqli_error());
$wfjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Feb' && year = '$year') as zero ") or die(mysqli_error());
$wffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Mar' && year = '$year') as zero ") or die(mysqli_error());
$wfmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Apr' && year = '$year') as zero ") or die(mysqli_error());
$wfapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'May' && year = '$year') as zero ") or die(mysqli_error());
$wfmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Jun' && year = '$year' ) as zero") or die(mysqli_error());
$wfjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Jul' && year = '$year') as zero ") or die(mysqli_error());
$wfjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Aug' && year = '$year') as zero ") or die(mysqli_error());
$wfaug = $qaug->fetch_array();

$qsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Sep' && year = '$year' ) as zero") or die(mysqli_error());
$wfsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Oct' && year = '$year') as zero ") or die(mysqli_error());
$wfoct = $qoct->fetch_array();

$qnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Nov' && year = '$year') as zero ") or die(mysqli_error());
$wfnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT SUM(TR_Bill) as total FROM `transaction` WHERE TR_Type = 'Walk-in' AND month = 'Dec' && year = '$year') as zero ") or die(mysqli_error());
$wfdec = $qdec->fetch_array();

?>


<script>
window.onload = function () {
    
var chart = new CanvasJS.Chart("revenue", {
    animationEnabled: true,
    exportEnabled: true,
    title:{
        text:"Registration Revenues for the Year <?php echo $year ?>"
    },
    axisX:{
        interval: 1
    },
    data: [{
        type: "column",
        name: "Regulars",
        axisYType: "primary",
        color: "#6A55CC",
        legendText: "Regular",
        showInLegend: true,
        dataPoints: [
            { y: <?php echo $fjan["zero"]?>, label: "January"},
            { y: <?php echo $ffeb["zero"]?>, label: "February"},
            { y: <?php echo $fmar["zero"]?>, label: "March"},
            { y: <?php echo $fapr["zero"]?>, label: "April"},
            { y: <?php echo $fmay["zero"]?>, label: "May"},
            { y: <?php echo $fjune["zero"]?>, label: "June"},
            { y: <?php echo $fjul["zero"]?>, label: "July"},
            { y: <?php echo $faug["zero"]?>, label: "August"},
            { y: <?php echo $fsept["zero"]?>, label: "September"},
            { y: <?php echo $foct["zero"]?>, label: "October"},
            { y: <?php echo $fnov["zero"]?>, label: "November"},
            { y: <?php echo $fdec["zero"]?>, label: "December"}

        ]
    },{
        type: "column",
        name: "Student",
        axisYType: "primary",
        color: "#5BCCD5",
        legendText: "Student",
        showInLegend: true,
        dataPoints: [
            { y: <?php echo $sfjan["zero"]?>, label: "January"},
            { y: <?php echo $sffeb["zero"]?>, label: "February"},
            { y: <?php echo $sfmar["zero"]?>, label: "March"},
            { y: <?php echo $sfapr["zero"]?>, label: "April"},
            { y: <?php echo $sfmay["zero"]?>, label: "May"},
            { y: <?php echo $sfjune["zero"]?>, label: "June"},
            { y: <?php echo $sfjul["zero"]?>, label: "July"},
            { y: <?php echo $sfaug["zero"]?>, label: "August"},
            { y: <?php echo $sfsept["zero"]?>, label: "September"},
            { y: <?php echo $sfoct["zero"]?>, label: "October"},
            { y: <?php echo $sfnov["zero"]?>, label: "November"},
            { y: <?php echo $sfdec["zero"]?>, label: "December"}
        ]
    },{

        type: "column",
        name: "Walk-In",
        axisYType: "primary",
        color: "#589CBA",
        legendText: "Walk-In",
        showInLegend: true,
        dataPoints: [
            { y: <?php echo $wfjan["zero"]?>, label: "January"},
            { y: <?php echo $wffeb["zero"]?>, label: "February"},
            { y: <?php echo $wfmar["zero"]?>, label: "March"},
            { y: <?php echo $wfapr["zero"]?>, label: "April"},
            { y: <?php echo $wfmay["zero"]?>, label: "May"},
            { y: <?php echo $wfjune["zero"]?>, label: "June"},
            { y: <?php echo $wfjul["zero"]?>, label: "July"},
            { y: <?php echo $wfaug["zero"]?>, label: "August"},
            { y: <?php echo $wfsept["zero"]?>, label: "September"},
            { y: <?php echo $wfoct["zero"]?>, label: "October"},
            { y: <?php echo $wfnov["zero"]?>, label: "November"},
            { y: <?php echo $wfdec["zero"]?>, label: "December"}
        ]
    }]
});
chart.render();

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

    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <script src="../assets/js/pages/charts/new_member.js"></script>
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
</body>

</html>