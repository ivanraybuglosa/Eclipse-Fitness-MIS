<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$exe = $conn->query("SELECT TLS_Exercise, COUNT(*) as total FROM traininglogsession WHERE year = '$year' GROUP BY TLS_Exercise ORDER BY COUNT(*) DESC LIMIT 5") or die(mysqli_error());
?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("exercise", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Top Exercises for the Year <?php echo $year ?>"
    },
    axisY: {
        title: "Reserves(MMbbl)"
    },
    data: [{        
        type: "column",
        dataPoints: [      
        <?php

        while($fexe = $exe->fetch_array())
         { ?>
            { y: <?php echo $fexe["total"] ?>, label: "<?php echo $fexe["TLS_Exercise"] ?>"},
         <?php
        } ?>
        ]
    }]
});
chart.render();

}
</script>