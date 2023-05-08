<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Arewa Premier Ltd</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <img src="images/logo.png" class="image mr-auto image-responsive" alt="Arewa Premier Ltd" height="5%" width="5%">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        <i class="fa fa-user"></i> About Us
                    </a>
                </li>
                <li class="active nav-item">
                    <a class="nav-link" href="contact.php">
                        <i class="fa fa-phone"></i> Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <i class="fa fa-sign-in"></i> Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <h1 class="h1">Contact Us</h1>
        <form action="#">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="" cols="30" placeholder="Your Message..." rows="10" style="font-size: medium;"></textarea>
            </div>

            <div class="form-group">
                <div class="btnDiv">
                    <button class="btn btn-success">Send Message</button>
                </div>
            </div>
        </form>

        <?php include_once 'footer.php' ?>