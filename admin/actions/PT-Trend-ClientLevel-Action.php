<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$beg = $conn->query("SELECT COUNT(TL_clientLevel) as total FROM `traininglog` WHERE `TL_clientLevel` = 'Beginner' ") or die(mysqli_error());
$fbeg = $beg->fetch_array();

$int = $conn->query("SELECT COUNT(TL_clientLevel) as total FROM `traininglog` WHERE `TL_clientLevel` = 'Intermediate' ") or die(mysqli_error());
$fint = $int->fetch_array();

$adv = $conn->query("SELECT COUNT(TL_clientLevel) as total FROM `traininglog` WHERE `TL_clientLevel` = 'Advance' ") or die(mysqli_error());
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
        yValueFormatString: "##0.00'%'",
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