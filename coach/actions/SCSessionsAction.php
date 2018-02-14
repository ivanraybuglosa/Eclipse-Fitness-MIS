<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName1 = 'studioclasssession';
$tblName2 = 'coach';
$id = "COACH_ID";
$tblName3 = 'studioclass';
$id2 = "SC_Code";
$column1 = "SCS_Code";
$firstname = 'Coach_FirstName';
$lastname = 'Coach_LastName';
$fullname = $firstname. " " .$lastname;
$column2 = $fullname;
$column3 =  "SC_Name";
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));
$stime = $_POST['sessionSTime'];
$etime = $_POST['sessionETime'];


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        
       
        $userData = array(
            'SC_Code' => $_POST['SCName'],
            'COACH_ID' => $_POST['Coach'],
            'SCS_StartTime' => $stime,
            'SCS_EndTime' => $etime,
            'SCS_Date' => $_POST['sessionDate'],
            'month' => $month,
            'year' => $year
            

        );  


        $startTime= $pdo->checkStartTime($_POST['Coach'],$_POST['sessionDate']);
        $endTime= $pdo->checkEndTime($_POST['Coach'],$_POST['sessionDate']);

                if(
                    (($stime > $startTime && $etime > $endTime) ||
                    ($stime < $startTime && $etime < $endTime) ||
                    (empty($startTime) && empty($endTime)))
                ){
                    $userData2 = array(

                        'COACH_ID' => $_POST['Coach'],
                        'Activity' => 'Studio Class Session',
                        'AL_Date' => $_POST['sessionDate'],
                        'AL_StartTime' => $stime,
                        'AL_EndTime' => $etime
                    );
                    $insert = $pdo->insert('activitylog', $userData2);
                    $insert = $pdo->insert($tblName1,$userData);
                    echo "<script>alert('Studio Class Successfully Scheduled');window.location.href='../StudioClass-Sessions.php';</script>";


                            
                                    
                }else{
                    echo "<script>alert('Studio Class Schedule Failed! ');window.location.href='../StudioClass-Sessions.php';</script>";
                                    
                }
                $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;           
        
        
        //edit feature not working yet//
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'SC_Code' => $_POST['SCName'],
            'COACH_ID' => $_POST['Coach'],
            'SCS_StartTime' => $_POST['sessionSTime'],
            'SCS_EndTime' => $_POST['sessionETime'],
            'SCS_Date' => $_POST['sessionDate'],

            );
            $condition1 = array('SCS_Code' => $_POST['SCS_Code']);
            $update1 = $pdo->update('studioclasssession',$userData,$condition1);
            $id = $_POST['SCS_Code'];
            echo "<script>alert('Studio Class Session Information Successfully Modified! ');window.location.href='../StudioClass-Schedule.php?id=".$id. "';</script>";
                                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
                                    $_SESSION['statusMsg'] = $statusMsg;
                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        }
}