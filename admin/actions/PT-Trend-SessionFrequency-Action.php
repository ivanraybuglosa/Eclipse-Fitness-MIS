<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}


$qjan = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Jan' && year = '$year' ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Feb' && year = '$year' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Mar' && year = '$year' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Apr' && year = '$year' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'May' && year = '$year' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Jun' && year = '$year' ") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Jul' && year = '$year' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Aug' && year = '$year' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Sep' && year = '$year' ") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Oct' && year = '$year' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Nov' && year = '$year' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `month` = 'Dec' && year = '$year' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();

?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("sessionfrequency", {
    animationEnabled: true,
    theme: "light1",
    title:{
        text: "Monthly Session Counts for the Year <?php echo $year ?>"
    },
    axisX:{
        interval: 1
    },
    axisY:{
        includeZero: false
    },
    data: [{        
        type: "line",
        lineColor: "red",       
        dataPoints: [
            { y: <?php echo $fjan['total'] ?>, label: "Jan"},
            { y: <?php echo $ffeb['total'] ?>, label: "Feb"},
            { y: <?php echo $fmar['total'] ?>, label: "Mar"},
            { y: <?php echo $fapr['total'] ?>, label: "Apr"},
            { y: <?php echo $fmay['total'] ?>, label: "May"},
            { y: <?php echo $fjune['total'] ?>, label: "Jun"},
            { y: <?php echo $fjul['total'] ?>, label: "Jul"},
            { y: <?php echo $faug['total'] ?>, label: "Aug"},
            { y: <?php echo $fsept['total'] ?>, label: "Sep"},
            { y: <?php echo $foct['total'] ?>, label: "Oct"},
            { y: <?php echo $fnov['total'] ?>, label: "Nov"},
            { y: <?php echo $fdec['total'] ?>, label: "Dec"}
        ]
    }]
});
chart.render();

}
</script>