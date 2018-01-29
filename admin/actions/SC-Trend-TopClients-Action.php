<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$topc = $conn->query("SELECT CLIENT_ID, COUNT(*) as total FROM clientassignment WHERE year = '$year' GROUP BY CLIENT_ID ORDER BY total DESC LIMIT 10") or die(mysqli_error());
 ?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("activeclients", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1",
    title:{
        text: "Top Participants for the Year <?php echo $year ?>"
    },
    data: [{
        type: "pyramid",
        yValueFormatString: "#''",
        indexLabelFontColor: "black",
        indexLabelFontSize: 15,
        indexLabel: "{label} - {y}",
        //reversed: true, // Reverses the pyramid
        dataPoints: [
        <?php
        while($ftopc = $topc->fetch_array()) { 
            $cname = $ftopc['CLIENT_ID'];
            $client = $conn->query("SELECT * FROM client WHERE CLIENT_ID = '$cname' ") or die(mysqli_error());
            $fclient = $client->fetch_array();
            ?>
            { y: <?php echo $ftopc['total'] ?>, label: "<?php echo $fclient['CLIENT_FirstName'] ?> <?php echo $fclient['CLIENT_LastName'] ?> " },
        <?php
        }
        ?>
        ]
    }]
});
chart.render();

}
</script>

