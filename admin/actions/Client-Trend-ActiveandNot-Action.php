<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$todate = date('Y-m-d');
$fromdate = date('Y-m-d', strtotime("-1 months"));

if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$ac = $conn->query("SELECT COUNT(*) AS total FROM (SELECT COUNT(CLIENT_ID) as total FROM `attendance` WHERE `A_fdate` BETWEEN '$fromdate' AND '$todate' GROUP BY CLIENT_ID) as sub ") or die(mysqli_error());
$fac = $ac->fetch_array();

$inac = $conn->query("SELECT COUNT(*) as total FROM `client` ") or die(mysqli_error());
$finac = $inac->fetch_array();

?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("activeandnot", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light2",
    title:{
        text: "Client Status"
    },
    axisY:{
        includeZero: true,
    },
    data: [{        
        type: "bar",
        dataPoints: [
            { y: <?php $inactive = $finac['total'] - $fac['total']; echo $inactive ?>, label: "Inactive Clients", indexLabel: '<?php echo $inactive ?>'},
            { y: <?php echo $fac['total'] ?>, label: "Active Clients", indexLabel: '<?php echo $fac['total'] ?>' }
        ]
    }]
});
chart.render();

}
</script>