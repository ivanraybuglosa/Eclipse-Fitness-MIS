<?php


$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$qjan = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Jan' && year = '$year' ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Feb' && year = '$year' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Mar' && year = '$year' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Apr' && year = '$year' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'May' && year = '$year' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Jun' && year = '$year' ") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Jul' && year = '$year' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Aug' && year = '$year' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Sep' && year = '$year' ") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Oct' && year = '$year' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Nov' && year = '$year' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT  COUNT(*) as total FROM `client` WHERE `month` = 'Dec' && year = '$year' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();


?>


<script>
window.onload = function () {
    
var chart = new CanvasJS.Chart("uniqueclient", {
    animationEnabled: true,
    exportEnabled: true,
    title:{
        text:"New Clients for the Year <?php echo $year ?>"
    },
    axisX:{
        interval: 1
    },
    data: [{
        type: "column",
        name: "months",
        axisYType: "primary",
        color: "#014D65",
        dataPoints: [
            { y: <?php echo $fjan["total"]?>, label: "January", indexLabel: "<?php echo $fjan['total']  ?>"},
            { y: <?php echo $ffeb["total"]?>, label: "February", indexLabel: "<?php echo $ffeb['total']  ?>" },
            { y: <?php echo $fmar["total"]?>, label: "March", indexLabel: "<?php echo $fmar['total']  ?>" },
            { y: <?php echo $fapr["total"]?>, label: "April", indexLabel: "<?php echo $fapr['total']  ?>" },
            { y: <?php echo $fmay["total"]?>, label: "May", indexLabel: "<?php echo $fmay['total']  ?>" },
            { y: <?php echo $fjune["total"]?>, label: "June", indexLabel: "<?php echo $fjune['total']  ?>" },
            { y: <?php echo $fjul["total"]?>, label: "July", indexLabel: "<?php echo $fjul['total']  ?>" },
            { y: <?php echo $faug["total"]?>, label: "August", indexLabel: "<?php echo $faug['total']  ?>" },
            { y: <?php echo $fsept["total"]?>, label: "September", indexLabel: "<?php echo $fsept['total']  ?>" },
            { y: <?php echo $foct["total"]?>, label: "October", indexLabel: "<?php echo $foct['total']  ?>" },
            { y: <?php echo $fnov["total"]?>, label: "November", indexLabel: "<?php echo $fnov['total']  ?>" },
            { y: <?php echo $fdec["total"]?>, label: "December", indexLabel: "<?php echo $fdec['total']  ?>" },
        ]
    }]
});
chart.render();

}
</script>