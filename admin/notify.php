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
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <img src="../images/logo.png" class="image mr-auto image-responsive" alt="Arewa Premier Ltd" height="5%" width="5%">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-home"></i> Dashbaord
                    </a>
                </li>
                <li class="active nav-item">
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
                <li class="active nav-item">
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
        <h1 class="h1">Push Notification</h1>
        <div class="col-lg-6 col-md-6">
            <h1 class="h1">Send By Mail</h1>
            <form action="">
                <div class="form-group">
                    <label for="from">From:</label>
                    <input type="text" class="form-control" required placeholder="From" value="mytsone.network@gmail.com" name="from">
                </div>

                <div class="form-group">
                    <label for="from">To:</label>
                    <input type="text" class="form-control" required placeholder="someone@gmail.com" name="to">
                </div>

                <div class="form-group">
                    <label for="from">Subject:</label>
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>

                <div class="form-group">
                    <label for="from">Message:</label>
                    <textarea name="message" class="form-control" placeholder="Notification to be sent..." style="font-size: medium;" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <div class="btnDiv">
                        <button class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-6 col-md-6">
            <h1 class="h1">Send by Phone Number</h1>
            <form action="">
                <div class="form-group">
                    <label for="from">From:</label>
                    <input type="text" class="form-control" required placeholder="From" value="081******20" name="from">
                </div>

                <div class="form-group">
                    <label for="from">To:</label>
                    <input type="text" class="form-control" required placeholder="081******20" name="to">
                </div>

                <div class="form-group">
                    <label for="from">Message:</label>
                    <textarea name="message" class="form-control" placeholder="Notification to be sent..." style="font-size: medium;" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <div class="btnDiv">
                        <button class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include_once '../footer.php'; ?>