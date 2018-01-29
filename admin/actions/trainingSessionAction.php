<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$table1 = "traininglogsession";
$table2 = "traininglog";

$id = "TLS_Code";
$st = $_POST["st"];
$et = $_POST["et"];
$date = $_POST['date'];
$tl = $_POST['TL_Code'];
$client = $_POST['client'];
$table3 = "activitylog";
$packageType = $_POST['packageType'];

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){

        $userData = array(
            'TLS_StartTime' => $st,
            'TLS_EndTime' => $et,
            'TLS_Date' => $date,
            'TLS_Exercise' => $_POST["exercise"],
            'TLS_Sets' => $_POST["sets"],
            'TLS_Reps' => $_POST["reps"],
            'TL_Code' => $_POST['TL_Code']
        );

        $checks = $pdo->checkTrainingSessions($_POST['TL_Code'],array("order_by" => "TLS_Code ASC"));
        if(!empty($checks)){ 
            $count = 0;
                foreach($checks as $check){
                    $count++;

                    if($packageType > $check['Sessions']){
                        $insert = $pdo->insert($table1,$userData);
                        $compare = $pdo->status($tl,array("order_by" => "TL_Code ASC"));
                            if(!empty($compare)){ 
                                $count = 0;
                                    foreach($compare as $com){
                                        $count++;

                                        if($date > $com['TL_Expiry']){
                                            $status = "Expired";
                                        }elseif($com['Sessions'] == $com['TP_PackageType'] && $com['TL_Expiry'] > $date){
                                            $status = "Completed";
                                        }elseif($com['Sessions'] < $com['TP_PackageType'] && $com['TL_Expiry'] > $date){
                                            $status = "On-Going";
                                        }else{
                                            $status = "Undefined";
                                        }

                                }
                            }
           
        $userData2 = array(
            'TL_TrainingStatus' => $status 
        );


        $userData3 = array(
            'CLIENT_ID' => $client,
            'COACH_ID' => $_POST['coach'],
            'Activity' => 'Personal Training Session',
            'AL_Date' => $date,
            'AL_StartTime' => $st,
            'AL_EndTime' => $et,
        );

        
        $condition1 = array('TL_Code' => $_POST['TL_Code']);
        $update = $pdo->update($table2,$userData2,$condition1);
        $insert2 = $pdo->insert($table3,$userData3);
        $statusMsg = $insert?'Training Log data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        $id = $_POST['TL_Code'];
        header("Location:../PT-ContractsInfo.php?id=".$id."");
    }
        }
                }
                else{
                    
                    }

            }
        }

