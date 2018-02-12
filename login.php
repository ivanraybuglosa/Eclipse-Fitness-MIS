<?php
    require_once('dbConnectLogin.php');
    require_once('dbConnect.php');
    

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Eclipse GYM MIS</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #000f22;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-6">
                <img src="bg.png" style="width: 100%; height: 100%;">
            </div>
            <div class="col-md-6">
    <div class="login-box login-page" style="background-color: #000f22; text-align:center">
        <div class="logo">
            <a href="login.php" style="color:green;">
                <img src="logo.png" style="width: 80%; height: 80%;"></a>
            <small style="color:#c9fb5d;"><label>FITNESS MANAGEMENT INFORMATION SYSTEM</label></small>
        </div>
        <div class="card">
            <div class="body">
               <?php
                    session_start();
                    if(isset($_POST['username'])&& isset($_POST['password'])){
                        
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        $stmt = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
                        $stmt->bindParam(1, $username);
                        $stmt->bindParam(2, $password);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $user = $row['username'];
                        $pass = $row['password'];
                        $id = $row['userID'];
                        $type = $row['userType'];
                        if($username==$user && $password==$pass){
                            
                            
                            $_SESSION['username'] = $user;
                            $_SESSION['password'] = $pass;
                            $_SESSION['userID'] = $id;
                            $_SESSION['userType'] = $type;
                            $_SESSION['loggedIn'] = TRUE;

                            
                            
                            $pdo = new dbConnect();
                                        $expire = $pdo->membershipExpire();
                                        
                                        $userData = array(
                                            'M_membershipstatus' => "Expired"
                                        );
                                        if($expire === date("Y-m-d")){
                                            $condition = array('M_expiryDate' => date("Y-m-d"));
                                            $update = $pdo->update('membershiptype',$userData,$condition);
                                        }


                                        $expiry = $pdo->expire(date("Y-m-d"));

                                        $userData2 = array(
                                            'TL_TrainingStatus' => "Expired"
                                        );

                                        if($expiry === date("Y-m-d")){
                                            $condition = array("TL_Expiry" => date("Y-m-d"));
                                            $update =$pdo->update('traininglog',$userData2,$condition);
                                            session_start();
                                        }
                                        
                                if($type =="admin"){
                                   
                                ?>


                                <script>alert('Successful Login!');window.location.href='admin/index.php';</script>
                                       
                                    <?php } 
                                        else($type =="coach") 
                                    ?>
                                <script>alert('Successful Login!');window.location.href='coach/index.php';</script>
                        <?php 
                        } else 
                        { ?>

                        <script>alert('Login Failed!Incorrect information!');window.location.href='login.php';</script>
                <?php     }
                } 
                ?>

                <!-- Scripts for expiry checking of membership and personal training -->
                
                <form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 pull-right">
                            <button class="btn btn-block bg-green waves-effect" name="btn-login" type="submit" data-type="success">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
    

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script src="assets/js/pages/ui/dialogs.js"></script>

    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>