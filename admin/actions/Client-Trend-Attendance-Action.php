<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$qjan = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Jan' && A_Year = '$year' ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Feb' && A_Year = '$year' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Mar' && A_Year = '$year' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Apr' && A_Year = '$year' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'May' && A_Year = '$year' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Jun' && A_Year = '$year' ") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Jul' && A_Year = '$year' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Aug' && A_Year = '$year' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Sep' && A_Year = '$year' ") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Oct' && A_Year = '$year' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Nov' && A_Year = '$year' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT  COUNT(A_Code) as total FROM `attendance` WHERE `A_Month` = 'Dec' && A_Year = '$year' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();


?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("attendance", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light2",
    title:{
        text: "Monthly Attendance of the Year <?php echo $year ?>"
    },
    axisX:{
        interval: 1,
    },
    axisY:{
        includeZero: false
    },
    data: [{        
        type: "line",       
        dataPoints: [
            { y: <?php echo $fjan["total"]?>, label: "Jan", indexLabel: "<?php echo $fjan["total"]?>"},
            { y: <?php echo $ffeb["total"]?>, label: "Feb", indexLabel: "<?php echo $ffeb["total"]?>"},
            { y: <?php echo $fmar["total"]?>, label: "Mar", indexLabel: "<?php echo $fmar["total"]?>"},
            { y: <?php echo $fapr["total"]?>, label: "Apr", indexLabel: "<?php echo $fapr["total"]?>"},
            { y: <?php echo $fmay["total"]?>, label: "May", indexLabel: "<?php echo $fmay["total"]?>" },
            { y: <?php echo $fjune["total"]?>, label: "June", indexLabel: "<?php echo $fjune["total"]?>" },
            { y: <?php echo $fjul["total"]?>, label: "July", indexLabel: "<?php echo $fjul["total"]?>" },
            { y: <?php echo $faug["total"]?>, label: "Aug", indexLabel: "<?php echo $faug["total"]?>" },
            { y: <?php echo $fsept["total"]?>, label: "Sept", indexLabel: "<?php echo $fsept["total"]?>"},
            { y: <?php echo $foct["total"]?>, label: "Oct", indexLabel: "<?php echo $foct["total"]?>" },
            { y: <?php echo $fnov["total"]?>, label: "Nov", indexLabel: "<?php echo $fnov["total"]?>" },
            { y: <?php echo $fdec["total"]?>, label: "Dec", indexLabel: "<?php echo $fdec["total"]?>" }
        ]
    }]
});
chart.render();

}
</script>