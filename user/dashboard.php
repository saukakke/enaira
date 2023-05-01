<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/css/all.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js></script>
    <title>Elkanawi Schools</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <img src="../images/logo.png" class="image mr-auto image-responsive" alt="Elkanawi Schools" height="5%" width="5%">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="active nav-link" href="dashboard.php">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="fa fa-user"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        <i class="fa fa-phone"></i> About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <i class="fa fa-sign-in"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <h1 class="h1">Welcome Back</h1>
        <div class="buttons" style="margin-bottom: 2%;">
            <button class="btn btn-success" style="font-size: medium;">
                Customer 
                <div class="badge">
                    0
                </div>
            </button>

            <button class="btn btn-success" style="font-size: medium; margin-left: 2%;">
                Merchant 
                <div class="badge">
                    0
                </div>
            </button>
        </div>
        <div class="jumbotron">
            <div class="badge">
                <i class="fa fa-info"></i>
            </div>
            <b> Agent Task:</b>
            Onboarding users, activating users and training users on how to perform transactions using the eNaira wallet and USSD code.
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5%;">
                <div class="card" style="padding: 10%;">
                    <h2 class="h2">Bronze Wallet</h2>
                    <p class="p">
                        In this section be very sure that the phone number is very correct.
                    </p>
                    <div class="form-group">
                        <div class="btnDiv">
                            <a href="bronze.php" class="btn btn-success" style="background-color: green;">Continue</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5%;">
                <div class="card" style="padding: 10%;">
                    <h2 class="h2">Silver Wallet</h2>
                    <p class="p">
                        In this section be very sure that the phone number and  National Identification Number (NIN) are very correct.
                    </p>
                    <div class="form-group">
                        <div class="btnDiv">
                            <a href="silver.php" class="btn btn-success" style="background-color: green;">Continue</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5%;">
                <div class="card" style="padding: 10%;">
                    <h2 class="h2">Gold Wallet</h2>
                    <p class="p">
                        In this section be very sure that the phone number, Account Number and National Identification Number (NIN) are very correct.
                    </p>
                    <div class="form-group">
                        <div class="btnDiv">
                            <a href="gold.php" class="btn btn-success" style="background-color: green;">Continue</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5%;">
                <div class="card" style="padding: 10%;">
                    <h2 class="h2">Merchant Wallet</h2>
                    <p class="p">
                        In this section be very sure that the phone number, Account Number and National Identification Number (NIN) are very correct.
                    </p>
                    <div class="form-group">
                        <div class="btnDiv">
                            <a href="merchant.php" class="btn btn-success" style="background-color: green;">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include_once 'footer.php' ?>