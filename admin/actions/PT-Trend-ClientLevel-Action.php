<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$beg = $conn->query("SELECT COUNT(TL_ClientPerformance) as total FROM `traininglog` WHERE `TL_ClientPerformance` = 'Beginner' ") or die(mysqli_error());
$fbeg = $beg->fetch_array();

$int = $conn->query("SELECT COUNT(TL_ClientPerformance) as total FROM `traininglog` WHERE `TL_ClientPerformance` = 'Intermediate' ") or die(mysqli_error());
$fint = $int->fetch_array();

$adv = $conn->query("SELECT COUNT(TL_ClientPerformance) as total FROM `traininglog` WHERE `TL_ClientPerformance` = 'Advance' ") or die(mysqli_error());
$fadv = $adv->fetch_array();
?>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("clientlevel", {
    animationEnabled: true,
    title: {
        text: "Frequency of Different Client Levels"
    },
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "- ###",
        indexLabel: "{label} {y}",
        dataPoints: [
            {y: <?php echo $fbeg['total'] ?>, label: "Beginner"},
            {y: <?php echo $fint['total'] ?>, label: "Intermediate"},
            {y: <?php echo $fadv['total'] ?>, label: "Advance"},
        ]
    }]
});
chart.render();

}
</script>