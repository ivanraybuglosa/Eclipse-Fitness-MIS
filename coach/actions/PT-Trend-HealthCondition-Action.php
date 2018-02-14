<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$top = $conn->query("SELECT TOP(5) HC_Name, Count(*) as total FROM conditionassignment INNER JOIN healthcondition ON conditionassignment.HC_Code = healthcondition.HC_Code GROUP BY HC_Name ORDER BY COUNT(*) DESC ") or die(mysqli_error());
?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("hc", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Top Oil Reserves"
    },
    axisY: {
        title: "Reserves(MMbbl)"
    },
    data: [{        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "MMbbl = one million barrels",
        dataPoints: [      
        <?php 
            while($ftop = $top->fetch_array()) { ?>
            { y: <?php echo $top['total'] ?>, label: <?php echo $top['HC_Name'] ?> }

            <?php
        }
        ?>
        ]
    }]
});
chart.render();

}
</script>