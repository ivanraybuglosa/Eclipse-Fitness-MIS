<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();


$user = $_SESSION['username'];
$pass = $_SESSION['password'];
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

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");

$userid = $pdo->getUserID($user,$pass);


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

                    
                    $first = $pdo->getSC($_POST['SCName']);
                    $desc = ' '.$first. ' session has been scheduled';
                    $log = array (
                        'userID' => $userid,
                        'log_activity' => 'Studio Class Scheduling',
                        'log_description' => $desc,
                        'log_date' => $date,
                        'log_time' => $time
                    );     
                    echo "<script>alert('Studio Class Successfully Scheduled');window.location.href='../StudioClass-Sessions.php';</script>";


                            
                                    
                }else{
                    echo "<script>alert('Studio Class Schedule Failed! ');window.location.href='../StudioClass-Sessions.php';</script>";
                                    
                }
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

            $first = $pdo->getSC($_POST['SCName']);
                    $desc = ' '.$first. ' session schedule has been modified';
                    $log = array (
                        'userID' => $userid,
                        'log_activity' => 'Studio Class Schedule Modification',
                        'log_description' => $desc,
                        'log_date' => $date,
                        'log_time' => $time
                    );     
                    $insert = $pdo->insert('log',$log);

            $id = $_POST['SCS_Code'];
            echo "<script>alert('Studio Class Session Information Successfully Modified! ');window.location.href='../StudioClass-Schedule.php?id=".$id. "';</script>";
                                 
}
}