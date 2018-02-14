<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$exe = $conn->query("SELECT M_Classification, COUNT(*) as total FROM measurements WHERE year = '$year' GROUP BY M_Classification ORDER BY total DESC LIMIT 5") or die(mysqli_error());
?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("exercise", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Common Client Classifications for the Year <?php echo $year ?>"
    },
    axisY: { valueFormatString: "#,##0" },
    data: [{        
        type: "column",
        dataPoints: [      
        <?php

        while($fexe = $exe->fetch_array())
         { ?>
            { y: <?php echo $fexe["total"] ?>, label: "<?php echo $fexe["M_Classification"] ?>"},
         <?php
        } ?>
        ]
    }]
});
chart.render();

}
</script>