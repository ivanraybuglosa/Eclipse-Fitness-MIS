<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$exe = $conn->query("SELECT M_Classification, COUNT(*) as total FROM measurements INNER JOIN traininglog ON measurements.TL_Code = traininglog.TL_Code WHERE measurements.year = '$year' AND M_MeasurementType = 'Final' GROUP BY M_Classification ORDER BY total DESC") or die(mysqli_error());
?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("exercise", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Measurement Classifications for the Year <?php echo $year ?>"
    },
    axisY: { valueFormatString: "#,##0" },
    data: [{        
        type: "column",
        dataPoints: [      
        <?php

        while($fexe = $exe->fetch_array())
         { ?>
            { y: <?php echo $fexe["total"] ?>, label: "<?php echo $fexe["M_Classification"] ?>", indexLabel: "<?php echo $fexe["total"] ?>"},
         <?php
        } ?>
        ]
    }]
});
chart.render();

}
</script>