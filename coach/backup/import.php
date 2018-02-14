<?php
                    $conn = mysqli_connect('localhost', 'root', '', 'eclipse_db');
                    $date = date("Y-m-d H:i:s");

                    $file = 'backup.sql';
                    $handle = fopen($file, "r+");
                    $contents = fread($handle, filesize($file));

                    $sql = explode(';', $contents);
                    foreach ($sql as $query){
                     $result = mysqli_query($conn, $query);
                    }

                    fclose($handle);
                    date_default_timezone_set('Asia/Manila');
                    $day = date('Y-m-d');
                    $time = date('g:i A');

                    $conn->query("INSERT INTO `backuphistory` VALUES('', 'Import', '$day', '$time') ") or die(mysqli_error());

                    echo "<script>alert('Successfully imported database!')</script>";
                    echo "<script>document.location='../Maintenance-BackupAndRestore.php'</script>";
            ?>