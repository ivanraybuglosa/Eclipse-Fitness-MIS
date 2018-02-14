<?php
$month = date('M');

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$qjan = $conn->query("SELECT COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Aqua Zumba' ") or die(mysqli_error());
$fjan = $qjan->fetch_array();

$qfeb = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Spinning' ") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();

$qmar = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'HIIT' ") or die(mysqli_error());
$fmar = $qmar->fetch_array();

$qapr = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Yoga' ") or die(mysqli_error());
$fapr = $qapr->fetch_array();

$qmay = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'F360' ") or die(mysqli_error());
$fmay = $qmay->fetch_array();

$qjune = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'TRX' ") or die(mysqli_error());
$fjune = $qjune->fetch_array();

$qjul = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Dance Aero' ") or die(mysqli_error());
$fjul = $qjul->fetch_array();

$qaug = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Pound Fit' ") or die(mysqli_error());
$faug = $qaug->fetch_array();

$qsept = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Pilates' ") or die(mysqli_error());
$fsept = $qsept->fetch_array();

$qoct = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Swimming' ") or die(mysqli_error());
$foct = $qoct->fetch_array();

$qnov = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Zumba' ") or die(mysqli_error());
$fnov = $qnov->fetch_array();

$qdec = $conn->query("SELECT  COUNT(clientassignment.CAssignment_Code) as total FROM `clientassignment` INNER JOIN studioclasssession ON clientassignment.SCS_Code = studioclasssession.SCS_Code INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SC_Name = 'Abs Clinic' ") or die(mysqli_error());
$fdec = $qdec->fetch_array();


?>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("participants", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Monthly Class Participants"
    },
    axisX: {
        interval: 1,
        labelAngle: -40
    },
    axisY: {
        title: "Participants"
    },
    data: [{        
        type: "column",
        dataPoints: [      
            { y: <?php echo $fjan["total"]?>, label: "Aqua Zumba" },
            { y: <?php echo $ffeb["total"]?>,  label: "Spinning" },
            { y: <?php echo $fmar["total"]?>,  label: "HIIT" },
            { y: <?php echo $fapr["total"]?>,  label: "Yoga" },
            { y: <?php echo $fmay["total"]?>,  label: "F360" },
            { y: <?php echo $fjune["total"]?>, label: "TRX" },
            { y: <?php echo $fjul["total"]?>,  label: "Dance Aero" },
            { y: <?php echo $faug["total"]?>,  label: "Pound Fit" },
            { y: <?php echo $fsept["total"]?>,  label: "Pilates" },
            { y: <?php echo $foct["total"]?>,  label: "Swimming" },
            { y: <?php echo $fnov["total"]?>,  label: "Zumba" },
            { y: <?php echo $fdec["total"]?>,  label: "Abs Clinic" }
        ]
    }]
});
chart.render();

}
</script>