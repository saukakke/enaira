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
        <!--a href="#" class="navbar-brand mr-auto" style="font-size: medium;">Arewa Premier Ltd</a-->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="active nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-home"></i> Dashbaord
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i> Agents
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="agent.php">View Agents</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-building"></i> Partners
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="add_partners.php">Add Partner</a>
                        <a class="dropdown-item" href="partners.php">View Partners</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notify.php">
                        <i class="fa fa-bell"></i> Notify
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <h1 class="h1">Welcome Back</h1>
        <div class="row" style="text-align: center;">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="dashboard.php" style="font-size: medium; margin-bottom: 5%; padding: 10%;" class="btn btn-success">
                    <i class="fa fa-home fa-5x"></i>
                    <br>
                    Dashbaord
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="agent.php" style="font-size: medium; margin-bottom: 5%; padding: 10%;" class="btn btn-success">
                    <i class="fa fa-users fa-5x"></i>
                    <br>
                    500+ Agents
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="partners.php" style="font-size: medium; margin-bottom: 5%; padding: 10%;" class="btn btn-success">
                    <i class="fa fa-building fa-5x"></i>
                    <br>
                    500+ Partners
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="notify.php" style="font-size: medium; margin-bottom: 5%; padding: 10%;" class="btn btn-success">
                    <i class="fa fa-bell fa-5x"></i>
                    <br>
                    Notify
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="#" style="font-size: medium; margin-bottom: 5%; padding: 10%;" class="btn btn-success">
                    <i class="fa fa-sign-out fa-5x"></i>
                    <br>
                    Logout
                </a>
            </div>
        </div>

        <?php include_once '../footer.php' ?>