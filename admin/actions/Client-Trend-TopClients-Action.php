<?php

$year = date('Y'); 
$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$qc1 = $conn->query("SELECT SUM(TR_Bill) as total, client.CLIENT_FirstName as fname, client.CLIENT_MiddleName as mname, client.CLIENT_LastName as lname FROM transaction INNER JOIN client ON transaction.CLIENT_ID = client.CLIENT_ID GROUP BY client.CLIENT_ID ORDER BY SUM(TR_Bill) DESC LIMIT 5") or die(mysqli_error());

?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("topclients", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Yearly Top Clients"
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
        <?php 

        while($fc1 = $qc1->fetch_array())  
        { ?>
            { y: <?php echo $fc1["total"]?> , label: "<?php echo $fc1["fname"]?> " + "<?php echo $fc1["mname"]?> " + "<?php echo $fc1["lname"] ?>", indexLabel: "<?php echo $fc1["total"]?>"},
            <?php
        } ?>
            
        ]
    }]
});
chart.render();

}
</script>