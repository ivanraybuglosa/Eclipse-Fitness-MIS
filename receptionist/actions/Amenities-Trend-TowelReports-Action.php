<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

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

?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("towel", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light2",
    title:{
        text: "Monthly Towel Usage for the Year <?php echo $year ?>"
    },
    axisX: {
        interval: 1,
    },
    axisY:{
        includeZero: true
    },
    
    data: [{        
        type: "column",       
        dataPoints: [   
            { label: "Jan", y: <?php echo $fjan["zero"]?> , indexLabel: "<?php echo $fjan['zero'] ?>"},
            { label: "Feb", y: <?php echo $ffeb["zero"]?> , indexLabel: "<?php echo $ffeb['zero'] ?>"},
            { label: "Mar", y: <?php echo $fmar["zero"]?> , indexLabel: "<?php echo $fmar['zero'] ?>"},
            { label: "Apr", y: <?php echo $fapr["zero"]?> , indexLabel: "<?php echo $fapr['zero'] ?>"},
            { label: "May", y: <?php echo $fmay["zero"]?> , indexLabel: "<?php echo $fmay['zero'] ?>"},
            { label: "Jun", y: <?php echo $fjune["zero"]?> , indexLabel: "<?php echo $fjune['zero'] ?>"},
            { label: "Jul", y: <?php echo $fjul["zero"]?> , indexLabel: "<?php echo $fjul['zero'] ?>"},
            { label: "Aug", y: <?php echo $faug["zero"]?> , indexLabel: "<?php echo $faug['zero'] ?>"},
            { label: "Sep", y: <?php echo $fsept["zero"]?> , indexLabel: "<?php echo $fsept['zero'] ?>"},
            { label: "Oct", y: <?php echo $foct["zero"]?> , indexLabel: "<?php echo $foct['zero'] ?>"},
            { label: "Nov", y: <?php echo $fnov["zero"]?> , indexLabel: "<?php echo $fnov['zero'] ?>"},
            { label: "Dec", y: <?php echo $fdec["zero"]?> , indexLabel: "<?php echo $fdec['zero'] ?>"}
            
            
        ]
    }]
});
chart.render();

}
</script>