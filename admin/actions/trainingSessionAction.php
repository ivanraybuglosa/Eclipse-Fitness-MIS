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
$client = $_POST['client'];
$table3 = "activitylog";
$packageType = $_POST['packageType'];
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){

        $userData = array(
            'TLS_StartTime' => $st,
            'TLS_EndTime' => $et,
            'TLS_Date' => $date,
            'TLS_Exercise' => $_POST["exercise"],
            'TLS_Sets' => $_POST["sets"],
            'TLS_Reps' => $_POST["reps"],
            'TL_Code' => $_POST['TL_Code'],
            'month' => $month,
            'year' => $year
        );

        

                    
                $compare = $pdo->status($_POST['TL_Code'],array("order_by" => "TLS_Code ASC"));
                    if(!empty($compare)){   
                        $count = 0;
                            foreach($compare as $com){
                                $count++;
                                if($packageType > $com['Sessions'] || empty($com['Sessions'])){
                                        
                                        if(date("Y-m-d") > $com['TL_Expiry']){
                                            $status = "Expired";   
                                        }elseif($com['Sessions'] < $packageType){
                                            $status = "Going";
                                        }elseif($com['Sessions'] == $packageType){
                                            $status = "Completed";
                                        }else{

                                        }
                                    $userData2 = array(
                                        'TL_TrainingStatus' => $status
                                        );
                                        $condition1 = array('TL_Code' => $_POST['TL_Code']);
                                        $update = $pdo->update($table2,$userData2,$condition1);

                                    $userData3 = array(
                                        'CLIENT_ID' => $client,
                                        'COACH_ID' => $_POST['coach'],
                                        'Activity' => 'Personal Training Session',
                                        'AL_Date' => $date,
                                        'AL_StartTime' => $st,
                                        'AL_EndTime' => $et,
                                    );

                                    $insert = $pdo->insert($table1,$userData);
                                    $insert2 = $pdo->insert($table3,$userData3);
                                    $id = $_POST['TL_Code'];
                                    echo "<script>alert('Client Personal Training Session successfully saved');window.location.href='../PT-ContractsInfo.php?id=".$id." '</script>";
                                    
                       
                    
                                }else{
                                    $id = $_POST['TL_Code'];
                                    echo "<script>alert('Client Personal Training Session cannot be saved!');window.location.href='../PT-ContractsInfo.php?id=".$id." ';</script>";
                                    }


                                    }
                                
                                }
                            }
                        }

                        
                            
                

