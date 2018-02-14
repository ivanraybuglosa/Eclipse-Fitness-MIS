<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());


$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$performance = $conn->query("SELECT TL_ClientPerformance, COUNT(*) as total FROM `traininglog` WHERE year = '$year' GROUP BY TL_ClientPerformance") or die(mysqli_error());

?>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("clientlevel", {
    animationEnabled: true,
    title: {
        text: "Different Client Performances for the Year <?php echo $year ?>"
    },
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "- ###",
        indexLabel: "{label} {y}",
        dataPoints: [

            <?php 

            while($fper = $performance->fetch_array()) {
                ?>
            {y: <?php echo $fper['total'] ?>, label: "<?php echo $fper['TL_ClientPerformance'] ?>"},
            <?php
            }
            ?>
        ]
    }]
});
chart.render();

}
</script>