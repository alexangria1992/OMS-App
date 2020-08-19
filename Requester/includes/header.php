
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="http-equiv" content="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/custom.css">
    <title><?php echo TITLE ?></title>
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
                            <a class="nav-link <?php if(PAGE == 'RequesterProfile'){echo 'active';} ?>"  href="RequesterProfile.php"><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'SubmitRequest'){echo 'active';} ?>"  href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i> Submit Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'CheckStatus'){echo 'active';} ?>"  href="CheckStatus.php"><i class="fas fa-align-center"></i> Service Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'Requesterchangepass'){echo 'active';} ?>"  href="Requesterchangepass.php"><i class="fas fa-key"></i> Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"   href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>  
