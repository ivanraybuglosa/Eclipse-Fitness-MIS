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

$scname = $_POST['scname'];
$sccapacity = $_POST['sccapacity'];

$date = date('Y-m-d');
$year = date('Y');
$month = date('M');


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        

        $userData = array(
            'CLIENT_ID' => $_POST['clientname'],
            'SCS_Code' => $_POST['SCS_Code'],   
            'CA_RegDate' => $date,
            'year' => $year,
            'month' => $month
        );

        $checks = $pdo->checkParticipants($_POST['SCS_Code'], array("order_by" => "CA_Code ASC"));
            if(!empty($checks)){ 
            $count = 0;
                foreach($checks as $check){
                    $count++;

                    if($sccapacity > $check['Participants']){
                        $insert1 = $pdo->insert($tblName1,$userData);
                        $id = $_POST['SCS_Code'];
                        echo "<script>alert('Client Successfully Assigned! ');window.location.href='../StudioClass-Schedule.php?id=".$id."';</script>";
                                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
                                    $_SESSION['statusMsg'] = $statusMsg;
                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';

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
                        echo "<script>alert('Client Studio Class Session Assignment Failed! ');window.location.href='../StudioClass-Schedule.php?id=".$id."';</script>";
                                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
                                    $_SESSION['statusMsg'] = $statusMsg;
                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
                    }

            }
        }


        
        
    
    }elseif($_REQUEST['action_type'] == 'delete'){
            if(!empty($_POST['CA_Code'])){
            $condition = array('CA_Code' => $_POST['CA_Code']);
            $delete = $pdo->delete($tblName1,$condition);
            $statusMsg = $delete?'Studio Class Session participant has been deleted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            $id = $_POST['SCS_Code'];
            header("Location:../StudioClass-Schedule.php?id=$id");
            }
        }
}

//Dont touch this code//


