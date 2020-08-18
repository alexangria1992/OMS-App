<?php
    include ("../dbConnection.php");
    session_start();
    if($_SESSION['is_login'])
    {
        $rEmail = $_SESSION['rEmail'];
    } 
    else 
    {
        echo "<script>location.href='RequesterLogin.php';</script>";
    }
    $sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email = '$rEmail' ";
    $result = $conn->query($sql);
    if($result->num_rows == 1)
    {
        $row = $result->fetch_assoc();
        $rName = $row['r_name'];
    }

    if(isset($_REQUEST['nameupdate']))
    {
        if($_REQUEST['rName'] == "")
        {
           $passmsg =  '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
        }
        else 
        {
          $rName =  $_REQUEST['rName'];
          $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
          if($conn->query($sql)== TRUE)
          {
              $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
          }
          else
          {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Updated Unsuccessfully</div>';
          }
        }
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
    <link rel="stylesheet" href="../CSS/custom.css">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
     <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">OMS</a>
 </nav>
     <!-- Side Bar -->
     <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="RequesterProfile.php"><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fab fa-accessible-icon"></i> Submit Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fas fa-align center"></i> Service Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fas fa-key"></i> Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>

         <!-- Start Profile Section -->
            <div class="col-sm-6" style="margin-top: 51px;">
                <form action="" method="POST" class="mx-5">
                    <div class="form-group">
                        <label  for="rEmail">Email</label>
                        <input class="form-control" type="email" name="rEmail" id="rEmail"
                        value="<?php echo $rEmail ?>"readonly>
                    </div>
                    <div class="form-group">
                         <label for="rName">Name</label> 
                         <input class="form-control" type="text" name="rName" id="rName"
                         value="<?php echo $rName ?>">
                    </div>
                    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
                    <?php if(isset($passmsg))
                    {
                        echo $passmsg;
                    }
                    ?>
                  
                </form>
            </div>

        </div> <!-- End Row -->
     </div> <!-- End Container -->

        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/all.min.js"></script>

</body>
</html>