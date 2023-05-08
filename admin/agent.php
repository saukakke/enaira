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
    <link rel="stylesheet" href="../fonts/css/all.css">
    <link rel="stylesheet" href="../css/jquery.datatable.css">
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
        <h1 class="h1">List of all Agents</h1>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table class="table table-striped ">
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Yasin Muhammed Tukur</td>
                    <td>
                        <a href="view_agent.php?id=" class="btn btn-success" style="font-size: medium;">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Yasin Muhammed Tukur</td>
                    <td>
                        <a href="view_agent.php?id=" class="btn btn-success" style="font-size: medium;">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Yasin Muhammed Tukur</td>
                    <td>
                        <a href="view_agent.php?id=" class="btn btn-success" style="font-size: medium;">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Yasin Muhammed Tukur</td>
                    <td>
                        <a href="view_agent.php?id=" class="btn btn-success" style="font-size: medium;">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Yasin Muhammed Tukur</td>
                    <td>
                        <a href="view_agent.php?id=" class="btn btn-success" style="font-size: medium;">View Details</a>
                    </td>
                </tr>
            </table>
        </div>
        <?php include_once '../footer.php'; ?>