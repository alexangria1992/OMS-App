<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMS</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/custom.css">

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OMS </a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#Services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#Registration" class="nav-link">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="#Login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron back-image" style="background-image:url(images/Banner1.jpeg);">
    <div>
        <div class="myClass mainHeading">
        <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OMS</h1>
        <p class="font-italic">Customer's Happiness is our Aim</p>
        <a href="" class="btn btn-success mr-4">Login</a>
        <a href="" class="btn btn-danger mr-4">Sign Up</a>

    </div>
    </header>
    

    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">OSM</h3>
            <p>
            OSMS Services is India’s leading chain of multi-brand Electronics and Electrical service
            workshops offering
            wide array of services. We focus on enhancing your uses experience by offering world-class
            Electronic
            Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
            services to
            keep the devices fit and healthy and customers happy and smiling”.

            With well-equipped Electronic Appliances service centres and fully trained mechanics, we
            provide quality
            services with excellent packages that are designed to offer you great savings.

            Our state-of-art workshops are conveniently located in many cities across the country. Now you
            can book
            your service online by doing Registration.
            </p>
        </div>
    </div>

    <div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Applicances</h4>
            </div>
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <h2 class="text-center">Create An Account</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="" class="shadow-lg p-4" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">
                            Name
                        </label>
                        <input type="text" class="form-control" placeholder="Name" name="rName">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">
                            email
                        </label>
                        <input type="email" class="form-control" placeholder="Email" name="rEmail">
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">
                            New Password
                        </label>
                        <input type="password" class="form-control" placeholder="Password" name="rPassword">
                    </div>
                    <button type="submit" class="btn btn-danger mt-5 btn-block">Sign Up</button>
                    <em style="font-size: 10px;">Note - By clicking Sign Up, you agree to our terms, data policy and cookie policy</em>
                </form>
            </div>
        </div>
    </div>

    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-shadow-lg-mb-2" style="background-color: white;">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                            <h4 class="card-title">Rahul Kumar</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptasnesciunt debitis numquam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-shadow-lg-mb-2" style="background-color: white;">
                        <div class="card-body text-center">
                            <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt2">
                            <h4 class="card-title">Sonam Sharma</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptasnesciunt debitis numquam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-shadow-lg-mb-2" style="background-color: white;">
                        <div class="card-body text-center">
                            <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt3">
                            <h4 class="card-title">Sumit Vyas</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptasnesciunt debitis numquam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-shadow-lg-mb-2" style="background-color: white;">
                        <div class="card-body text-center">
                            <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;" alt="avt">
                            <h4 class="card-title">Jyoti Sinha</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, adducimus voluptasnesciunt debitis numquam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-8">
                    <form action="" method="POST">
                        <input type="text" name="name" class="form-control" placeholder="Name"><br>
                        <input type="text" name="subject" class="form-control" placeholder="Subject"><br>
                        <input type="email" name="email" class="form-control" placeholder="email"><br>
                        <textarea class="form-control" name="message" placeholder="How can we help you?"
                        style="height: 150px;"></textarea><br>
                        <input type="submit" class="btn btn-primary" value="Send"><br><br>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <strong>Headquarter:</strong><br>OMS pvt Ltd, <br> Ashok Nagar, Ranchi <br> Jharkhand - 434567 <br> Phone: +00000000 <br>
                    <a href="" target="_blank">www.osms.com</a><br>
                    <br><br>
                    <strong>Branch:</strong><br>OMS pvt Ltd, <br> New Ashok Nagar, Delhi <br> Delhi - 564567 <br> Phone: +00000000 <br>
                    <a href="" target="_blank">www.osms.com</a><br>

                </div>
            </div>
        </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>


</body>
</html>