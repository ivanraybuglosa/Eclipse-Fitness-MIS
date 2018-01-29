<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$qjan = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Jan' && year = '$year' ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Feb' && year = '$year' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Mar' && year = '$year' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Apr' && year = '$year' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'May' && year = '$year' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjun = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Jun' && year = '$year' ") or die(mysqli_error());
$fjun = $qjun->fetch_array();

$qjul = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Jul' && year = '$year' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Aug' && year = '$year' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsep = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Sep' && year = '$year' ") or die(mysqli_error());
$fsep = $qsep->fetch_array();

$qoct = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Oct' && year = '$year' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Nov' && year = '$year' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT COUNT(*) as total FROM `clientassignment` WHERE month = 'Dec' && year = '$year' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();


?>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("monpart", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Monthly Participants for the Year <?php echo $year ?>"
    },
    axisX: {
        interval: 1,
    },
    axisY: {
        title: "Participants"
    },
    data: [{        
        type: "column",
        dataPoints: [      
            { y: <?php echo $fjan["total"]?>,  label: "Jan", indexLabel: "<?php echo $fjan["total"] ?>"},
            { y: <?php echo $ffeb["total"]?>,  label: "Feb", indexLabel: "<?php echo $ffeb["total"] ?>"},
            { y: <?php echo $fmar["total"]?>,  label: "Mar", indexLabel: "<?php echo $fmar["total"] ?>"},
            { y: <?php echo $fapr["total"]?>,  label: "Apr", indexLabel: "<?php echo $fapr["total"] ?>"},
            { y: <?php echo $fmay["total"]?>,  label: "May", indexLabel: "<?php echo $fmay["total"] ?>"},
            { y: <?php echo $fjun["total"]?>,  label: "Jun", indexLabel: "<?php echo $fjun["total"] ?>"},
            { y: <?php echo $fjul["total"]?>,  label: "Jul", indexLabel: "<?php echo $fjul["total"] ?>"},
            { y: <?php echo $faug["total"]?>,  label: "Aug", indexLabel: "<?php echo $faug["total"] ?>"},
            { y: <?php echo $fsep["total"]?>,  label: "Sep", indexLabel: "<?php echo $fsep["total"] ?>"},
            { y: <?php echo $foct["total"]?>,  label: "Oct", indexLabel: "<?php echo $foct["total"] ?>"},
            { y: <?php echo $fnov["total"]?>,  label: "Nov", indexLabel: "<?php echo $fnov["total"] ?>"},
            { y: <?php echo $fdec["total"]?>,  label: "Dec", indexLabel: "<?php echo $fdec["total"] ?>"}
        ]
    }]
});
chart.render();

}
</script>