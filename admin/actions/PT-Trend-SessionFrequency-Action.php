<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$qjan = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Jan' ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Feb' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Mar' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Apr' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'May' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Jun' ") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Jul' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Aug' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Sep' ") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Oct' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Nov' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT  COUNT(TLS_Code) as total FROM `traininglogsession` WHERE `TLS_regMONTH` = 'Dec' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();

?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("sessionfrequency", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Monthly Session Counts"
    },
    axisX:{
        interval: 1
    },
    axisY:{
        includeZero: false
    },
    data: [{        
        type: "line",       
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