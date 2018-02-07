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

$eqcount = $conn->query("SELECT COUNT(EI_Quantity) as total FROM equipmentinventory WHERE year = '$year' ") or die(mysqli_error());
$feqcount = $eqcount->fetch_array();

$types = $conn->query("SELECT COUNT(*) as total FROM (SELECT COUNT(E_Code) as old FROM equipmentinventory WHERE year = '$year' GROUP BY E_Code) as older") or die(mysqli_error());
$ftypes = $types->fetch_array();

$supps = $conn->query("SELECT COUNT(*) as total FROM (SELECT COUNT(EI_Supplier) as old FROM equipmentinventory WHERE year = '$year' GROUP BY EI_Supplier) as older") or die(mysqli_error());
$fsupps = $supps->fetch_array();
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
            { label: "Equipment Types", y: <?php echo $ftypes["total"]; ?>  , indexLabel: "<?php echo $ftypes["total"]; ?>"},
            { label: "Equipment Quantity", y: <?php echo $feqcount["total"]?> , indexLabel: "<?php echo $feqcount["total"]?>"},
            { label: "Suppliers", y: <?php echo $fsupps["total"]; ?> , indexLabel: "<?php echo $fsupps["total"]; ?>"}
        ]
    }]
});
chart.render();

}
</script>