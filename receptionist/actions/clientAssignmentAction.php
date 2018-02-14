<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$column1 = 'CA_Code';
$firstname = 'CLIENT_FirstName';
$lastname = 'CLIENT_LastName';
$fullname = $firstname. " " .$lastname;
$column2 = $fullname;
$column3 = 'SCS_Code';
$tblName1 = 'clientassignment';
$tblName2 = 'client';
$tblName3 = 'studioclasssession';
$tblName4 = 'activitylog';
$id = 'CLIENT_ID';
$id2 = 'SCS_Code';


$date = date('Y-m-d');
$year = date('Y');
$month = date('M');


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        
        $scname = $_POST['scname'];
        $sccapacity = $_POST['sccapacity'];
        $count = $pdo->countParticipant($_POST['SCS_Code']);
        $userData = array(
            'CLIENT_ID' => $_POST['clientname'],
            'SCS_Code' => $_POST['SCS_Code'],   
            'CA_RegDate' => $date,
            'year' => $year,
            'month' => $month
        );

        $userData3 = array(
            'CA_Remaining' => ($_POST['sccapacity'] - $count) - 1
        );

        $checks = $pdo->checkParticipants($_POST['SCS_Code'], array("order_by" => "CA_Code ASC"));
            if(!empty($checks)){ 
            $count = 0;
                foreach($checks as $check){
                    $count++;

                    if($sccapacity > $check['Participants']){
                        $participant = $pdo->singleParticipant($_POST['clientname'],$_POST['SCS_Code']);
                        if($participant <> $_POST['clientname']){
                            $insert1 = $pdo->insert($tblName1,$userData);
                            $condition = array('SCS_Code' => $_POST['SCS_Code']);
                            $update = $pdo->update($tblName1,$userData3,$condition);
                                $id = $_POST['SCS_Code'];
                                    echo "<script>alert('Client Successfully Assigned! ');window.location.href='../StudioClass-Schedule.php?id=".$id."';</script>";
                                

                            $classDate = $pdo->classDate($_POST['SCS_Code']);
                            $classStartTime = $pdo->classStartTime($_POST['SCS_Code']);
                            $classEndTime = $pdo->classEndTime($_POST['SCS_Code']);
                            $coach = $pdo->classCoach($_POST['SCS_Code']);
                            $userData2 = array(
                                'CLIENT_ID' => $_POST['clientname'],
                                'COACH_ID' => $coach,
                                'Activity' => 'Studio Class Session',
                                'AL_Date' => $classDate,
                                'AL_StartTime' => $classStartTime,
                                'AL_EndTime' => $classEndTime
                            );  
                    
                            $insert1 = $pdo->insert($tblName4,$userData2);
                        }else{
                            $id = $_POST['SCS_Code'];
                            echo "<script>alert('Client has already been registered for this session! ');window.location.href='../StudioClass-Schedule.php?id=".$id."';</script>";
                        }
                        
                    
                    }else{
                        $id = $_POST['SCS_Code'];
                        echo "<script>alert('Studio Class Session Capacity Exceeded! Client assignment Failed! ');window.location.href='../StudioClass-Schedule.php?id=".$id."';</script>";
                    }

            }
        }


        
        
    
    }elseif($_REQUEST['action_type'] == 'delete'){
            if(!empty($_POST['CA_Code'])){
            $condition = array('CA_Code' => $_POST['CA_Code']);
            $delete = $pdo->delete($tblName1,$condition);
            $id = $_POST['SCS_Code'];
                        echo "<script>alert('Participant successfully removed from the list! ');window.location.href='../StudioClass-Schedule.php?id=".$id."';</script>";
                    
            }
        }
}

//Dont touch this code//


