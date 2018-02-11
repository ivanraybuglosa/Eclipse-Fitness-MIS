<?php

$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

//SUPPLY QUERIES
$order = $conn->query("SELECT COUNT(EI_Code) as total FROM equipmentinventory WHERE year = '$year' ") or die(mysqli_error());
$forder = $order->fetch_array();

$eqcount = $conn->query("SELECT IFNULL(total,0) as final FROM (SELECT SUM(EI_Quantity) as total FROM equipmentinventory WHERE EI_Activity = 'Restock' AND year = '$year') as initial ") or die(mysqli_error());
$frestock = $eqcount->fetch_array();

$types = $conn->query("SELECT COUNT(*) as total FROM (SELECT COUNT(E_Code) as old FROM equipmentinventory WHERE year = '$year' GROUP BY E_Code) as older") or die(mysqli_error());
$ftypes = $types->fetch_array();

$discard = $conn->query("SELECT IFNULL(total,0) as final FROM (SELECT SUM(EI_Quantity) as total FROM equipmentinventory WHERE EI_Activity = 'Discard' AND year = '$year') as initial ") or die(mysqli_error());
$fdiscard = $discard->fetch_array();
?>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("equipment", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light2",
    title:{
        text: "Equipment Summary for the Year <?php echo $year ?>"
    },
    axisX: {
        interval: 1,
    },
    axisY:{
        includeZero: true
    },
    
    data: [{        
        type: "column",       
        dataPoints: [   
            { label: "Transactions", y: <?php echo $forder["total"]; ?> , indexLabel: "<?php echo $forder["total"]; ?>"},
            { label: "Equipment", y: <?php echo $ftypes["total"]; ?>  , indexLabel: "<?php echo $ftypes["total"]; ?>"},
            { label: "Equipment Restocks", y: <?php echo $frestock["final"]?> , indexLabel: "<?php echo $frestock["final"]?>"},
            { label: "Equipment Discards", y: <?php echo $fdiscard["final"]; ?> , indexLabel: "<?php echo $fdiscard["final"]; ?>"}
        ]
    }]
});
chart.render();

}
</script>