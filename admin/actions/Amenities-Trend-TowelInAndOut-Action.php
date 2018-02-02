<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
//SUPPLY QUERIES
$qjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Jan' && year = '$year') as zero") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Feb' && year = '$year') as zero") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Mar' && year = '$year') as zero") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Apr' && year = '$year') as zero") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'May' && year = '$year') as zero") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Jun' && year = '$year') as zero") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Jul' && year = '$year') as zero") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Aug' && year = '$year') as zero") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Sep' && year = '$year') as zero") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Oct' && year = '$year') as zero") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Nov' && year = '$year') as zero") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Supplied) as total FROM `towelinventory` WHERE TI_Type = 'Supply' && `month` = 'Dec' && year = '$year') as zero") or die(mysqli_error());
$fdec = $qdec->fetch_array();


//LAUNDRY QUERIES

$qqjan = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Jan' && year = '$year') as zero") or die(mysqli_error());
$ffjan = $qqjan->fetch_array();

$qqfeb = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Feb' && year = '$year') as zero") or die(mysqli_error());
$fffeb = $qqfeb->fetch_array();

$qqmar = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Mar' && year = '$year') as zero") or die(mysqli_error());
$ffmar = $qqmar->fetch_array();

$qqapr = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Apr' && year = '$year') as zero") or die(mysqli_error());
$ffapr = $qqapr->fetch_array();

$qqmay = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'May' && year = '$year') as zero") or die(mysqli_error());
$ffmay = $qqmay->fetch_array();

$qqjune = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Jun' && year = '$year') as zero") or die(mysqli_error());
$ffjune = $qqjune->fetch_array();

$qqjul = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Jul' && year = '$year') as zero") or die(mysqli_error());
$ffjul = $qqjul->fetch_array();

$qqaug = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Aug' && year = '$year') as zero") or die(mysqli_error());
$ffaug = $qqaug->fetch_array();

$qqsept = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Sep' && year = '$year') as zero") or die(mysqli_error());
$ffsept = $qqsept->fetch_array();

$qqoct = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Oct' && year = '$year') as zero") or die(mysqli_error());
$ffoct = $qqoct->fetch_array();

$qqnov = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Nov' && year = '$year') as zero") or die(mysqli_error());
$ffnov = $qqnov->fetch_array();

$qqdec = $conn->query("SELECT IFNULL(total,0) as zero FROM (SELECT  SUM(TI_Laundry) as total FROM `towelinventory` WHERE TI_Type = 'Laundry' && `month` = 'Dec' && year = '$year') as zero") or die(mysqli_error());
$ffdec = $qqdec->fetch_array();


?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("inandout", {
    animationEnabled: true,
    title:{
        text: "Monthly Supply and Laundry for the Year <?php echo $year ?>"
    },
    axisX: {
        interval: 1,
    },
    axisY: {
        title: "Towel Count",
        titleFontColor: "#4F81BC",
        lineColor: "#4F81BC",
        labelFontColor: "#4F81BC",
        tickColor: "#4F81BC"
    },
    toolTip: {
        shared: true
    },
    legend: {
        cursor:"pointer",
        itemclick: toggleDataSeries
    },
    data: [{
        type: "column",
        name: "Supplied Towels",
        legendText: "Supplied Towels",
        showInLegend: true, 
        dataPoints:[
            { label: "Jan", y: <?php echo $fjan['zero'] ?> , indexLabel: "<?php echo $fjan['zero'] ?>"},
            { label: "Feb", y: <?php echo $ffeb['zero'] ?> , indexLabel: "<?php echo $ffeb['zero'] ?>"},
            { label: "Mar", y: <?php echo $fmar['zero'] ?> , indexLabel: "<?php echo $fmar['zero'] ?>"},
            { label: "Apr", y: <?php echo $fapr['zero'] ?> , indexLabel: "<?php echo $fapr['zero'] ?>"},
            { label: "May", y: <?php echo $fmay['zero'] ?> , indexLabel: "<?php echo $fmay['zero'] ?>"},
            { label: "Jun", y: <?php echo $fjune['zero'] ?> , indexLabel: "<?php echo $fjune['zero'] ?>"},
            { label: "Jul", y: <?php echo $fjul['zero'] ?> , indexLabel: "<?php echo $fjul['zero'] ?>"},
            { label: "Aug", y: <?php echo $faug['zero'] ?> , indexLabel: "<?php echo $faug['zero'] ?>"},
            { label: "Sep", y: <?php echo $fsept['zero'] ?> , indexLabel: "<?php echo $fsept['zero'] ?>"},
            { label: "Oct", y: <?php echo $foct['zero'] ?> , indexLabel: "<?php echo $foct['zero'] ?>"},
            { label: "Nov", y: <?php echo $fnov['zero'] ?> , indexLabel: "<?php echo $fnov['zero'] ?>"},
            { label: "Dec", y: <?php echo $fdec['zero'] ?> , indexLabel: "<?php echo $fdec['zero'] ?>"}
        ]
    },
    {
        type: "column", 
        name: "Laundry Towels",
        legendText: "Laundry Towels",
        axisYType: "secondary",
        showInLegend: true,
        dataPoints:[
            { label: "Jan", y: <?php echo $ffjan['zero'] ?> , indexLabel: "<?php echo $ffjan['zero'] ?>"},
            { label: "Feb", y: <?php echo $fffeb['zero'] ?> , indexLabel: "<?php echo $fffeb['zero'] ?>"},
            { label: "Mar", y: <?php echo $ffmar['zero'] ?> , indexLabel: "<?php echo $ffmar['zero'] ?>"},
            { label: "Apr", y: <?php echo $ffapr['zero'] ?> , indexLabel: "<?php echo $ffapr['zero'] ?>"},
            { label: "May", y: <?php echo $ffmay['zero'] ?> , indexLabel: "<?php echo $ffmay['zero'] ?>"},
            { label: "Jun", y: <?php echo $ffjune['zero'] ?> , indexLabel: "<?php echo $ffjune['zero'] ?>"},
            { label: "Jul", y: <?php echo $ffjul['zero'] ?> , indexLabel: "<?php echo $ffjul['zero'] ?>"},
            { label: "Aug", y: <?php echo $ffaug['zero'] ?> , indexLabel: "<?php echo $ffaug['zero'] ?>"},
            { label: "Sep", y: <?php echo $ffsept['zero'] ?> , indexLabel: "<?php echo $ffsept['zero'] ?>"},
            { label: "Oct", y: <?php echo $ffoct['zero'] ?> , indexLabel: "<?php echo $ffoct['zero'] ?>"},
            { label: "Nov", y: <?php echo $ffnov['zero'] ?> , indexLabel: "<?php echo $ffnov['zero'] ?>"},
            { label: "Dec", y: <?php echo $ffdec['zero'] ?> , indexLabel: "<?php echo $ffdec['zero'] ?>"}
        ]
    }]
});
chart.render();

function toggleDataSeries(e) {
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    }
    else {
        e.dataSeries.visible = true;
    }
    chart.render();
}

}
</script>