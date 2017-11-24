<?php 
$table1 = "receptionist";
$table2 = "users";
$id = "userID";
$column = "username";
$var = "sample3";
$data = array(
             
            'Rec_lastName' => "sample",
            'Rec_firstName' => "sample",
            'Rec_contact' => "sample",
            'Rec_emailAdd' => "sample",
            'Rec_gender' => "sample",
            'userID' => "(SELECT ".$id." FROM ".$table2." WHERE ".$column. " = ".$var.")"
        );
            $columnString = implode(',', array_keys($data));
            $valueString = ":".implode(',:', array_keys($data));
		 	$sql = "INSERT INTO ".$table1." (".$columnString.") VALUES (".$valueString.")";
		 	foreach($data as $key=>$val){
                 $query->bindValue(':'.$key, $val);
            }
       		echo $query;
?>