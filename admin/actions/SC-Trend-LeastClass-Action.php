<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$least = $conn->query("SELECT SC_Code, COUNT(*) as total FROM studioclasssession WHERE year = '$year' GROUP BY SC_Code ORDER BY total ASC LIMIT 5") or die(mysqli_error());
 ?>

 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("leastclass", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Least 5 Classes for the Year <?php echo $year ?>"
    },
    axisX: {
        interval: 1,
    },
    axisY: {
        title: "Participants",
        valueFormatString: "#,##0"
    },
    data: [{        
        type: "column",
        dataPoints: [
        <?php 
        while($fleast = $least->fetch_array()) { 
            $code = $fleast['SC_Code'];
            $name = $conn->query("SELECT * FROM studioclass WHERE SC_Code = '$code' ") or die(mysqli_error());
            $fetchname = $name->fetch_array();
            ?>
            { y: <?php echo $fleast['total'] ?>,  label: "<?php echo $fetchname['SC_Name'] ?>", indexLabel: "<?php echo $fleast['total'] ?>" },
        <?php 
        }
        ?>

            ]
    }]
});
chart.render();

}
</script>