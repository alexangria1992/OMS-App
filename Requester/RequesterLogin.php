<?php
 include ("../dbConnection.php"); 
 session_start();
 if(!isset($_SESSION['is_login'])){
 if(isset($_REQUEST['rEmail'])){
 $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
 $rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword']));
 $sql = "SELECT r_email, r_password FROM requesterLogin_tb WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";
 $result = $conn->query($sql);
        if($result->num_rows == 1)
        {  
            $_SESSION['is_login'] = true;
            $_SESSION['rEmail'] = $rEmail;
            echo "<script>
                    location.href='RequesterProfile.php'; 
                </script>";
            exit;
        }
        else 
        {
            $msg = '<div class="alert alert-warning mt-2">Enter Valid and Password</div>';
        }
    }
} 
else 
{
    echo "<script>
        location.href='RequesterProfile.php'; 
    </script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="http-equiv" content="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">

    <style>
        .custom-margin 
        {
            margin-top: 8vh;
        }
    </style>

    <title>Login</title>
</head>
<body>
    <div class="mb-3 mt-5 text-center" style="font-size: 30px;">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>
    <p class="text-center" style="font-size: 20px;"><i class="fas fa-user-secret text-danger"></i> fRequester Area(Demo)</p>
        <div class="container-fluid">
            <div class="row justify-content-center custom-margin">
                <div class="col-sm-6 col-md-4">
                    <form action="" class="shadow-lg p-4" method="POST">
                        <div class="form-group">
                            <i class="fas fa-user"></i><label class="font-weight-bold">Email</label>
                             <input class="form-control" placeholder="Email" name="rEmail" type="email">
                            <small class="form-text">We'll never shar eyour email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="rPassword" type="password">
                        </div>
                        <button type="submit" class="btn btn-outline-danger mt-3  shadow-sm font-weight-bold btn-block">Login</button>
                        <?php
                            if(isset($msg))
                            {
                                echo $msg;
                            }
                        ?>
                    </form>
                    <div class="text-center"><a class="btn btn-info mt-3 font-weight-bold shadow-sm" href="../index.php">Back to Home</a></div>
                </div>
            </div>
        </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>