<?php
$conn = mysqli_connect('localhost', 'root', '', 'eclipse_db');

$tables = array();
$result = mysqli_query($conn, "SHOW TABLES");
while ($row = mysqli_fetch_row($result)){
    $tables[] = $row[0];
}

$return = '';

foreach ($tables as $table) {
    $result = mysqli_query($conn, "SELECT * FROM ". $table);
    $num_fields = mysqli_num_fields($result);

    $return .= 'DROP TABLE '.$table.';';
    $row2 = mysqli_fetch_row(mysqli_query($conn, 'SHOW CREATE TABLE '.$table));
    $return .= "\n\n".$row2[1].";\n\n";

    for ($i=0;$i<$num_fields;$i++){
        while ($row = mysqli_fetch_row($result)){
            $return .= 'INSERT INTO '.$table.' VALUES(';
            for ($j=0;$j<$num_fields;$j++){
                $row[$j] = addslashes($row[$j]);
                if(isset($row[$j])){$return .= '"' .$row[$j]. '"';} else {$return .= '""';}
                if($j<$num_fields-1){$return .= ',';}
            }
            $return .="); \n";
        }
    }

    $return .="\n\n\n";
}


$handle = fopen('backup.sql', 'w+');
fwrite($handle, $return);
fclose($handle);
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');
$time = date('g:i A');

    $conn->query("INSERT INTO `backuphistory` VALUES('', 'Export', '$date', '$time')") or die(mysqli_error());


echo "<script> alert ('Successfully backed up Eclipse database!')</script>";

echo "<script>document.location='../Maintenance-BackupAndRestore.php'</script>";
?>
