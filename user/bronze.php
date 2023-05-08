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
                <li class="active nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="fa fa-user"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">
                        <i class="fa fa-sign-in"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <h1 class="h1">Bronze</h1>
        <form action="#" class="form" id="loginForm">
            <div class="form-group">
                <label for="firstname" class="form-label">Choose Title:</label>
                <select name="user_type" id="select" required class="form-control
                    input-medium" placeholder="Choose Title">
                    <option value="">Choose Title</option>
                    <option value="Chief">Chief</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Miss">Miss</option>
                    <option value="">Choose Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>
            </div>

            <div class="form-group">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" required class="form-control
                        input-medium" placeholder="First Name" name="firstname">
            </div>

            <div class="form-group">
                <label for="middlename" class="form-label">Middle Name:</label>
                <i class="optional">(Optional)</i>
                <input type="text" class="form-control
                        input-medium" placeholder="Middle Name" name="middlename">
            </div>

            <div class="form-group">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" required class="form-control
                        input-medium" placeholder="Last Name" name="lastname">
            </div>

            <div class="form-group">
                <label for="dateofbirth" class="form-label">Date of Birth:</label>
                <input type="date" required class="form-control
                        input-medium" placeholder="Date of Birth" name="dateofbirth">
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="number" required class="form-control
                        input-medium" maxlength="11" minlength="11" placeholder="Phone Number" name="phone">
            </div>

            <div class="form-group">
                <label for="country_origin" class="form-label">Country of Origin:</label>
                <select name="country_origin" id="select" required class="form-control
                    input-medium" placeholder="Country of Origin">
                    <option value="">Country of Origin</option>
                    <option value="Chief">Chief</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Miss">Miss</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Prof">Proffessor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="state" class="form-label">State of Origin:</label>
                <select name="state" id="select" required class="form-control
                    input-medium" placeholder="State of Origin">
                    <option value="">State of Origin</option>
                    <option value="Chief">Chief</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Miss">Miss</option>
                    <option value="">Choose Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lga" class="form-label">Local Government Area:</label>
                <select name="lga" id="select" required class="form-control
                    input-medium" placeholder="Local Government Area">
                    <option value="">Local Government Area</option>
                    <option value="Chief">Chief</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Miss">Miss</option>
                    <option value="">Choose Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>
            </div>

            <div class="form-group">
                <label for="c_residence" class="form-label">Country of Residence:</label>
                <select name="c_residence" id="select" required class="form-control
                    input-medium" placeholder="Country of Residence">
                    <option value="">Country of Residence</option>
                    <option value="Chief">Chief</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Miss">Miss</option>
                    <option value="">Choose Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>
            </div>

            <div class="form-group">
                <label for="c_state" class="form-label">State of Residence:</label>
                <select name="c_state" id="select" required class="form-control
                    input-medium" placeholder="State of Residence">
                    <option value="">State of Residence</option>
                    <option value="Chief">Chief</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Miss">Miss</option>
                    <option value="">Choose Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>
            </div>

            <div class="form-group">
                <label for="wallet" class="form-label">Contact Address:</label>
                <textarea name="address" cols="5" rows="5" style="font-size: medium" placeholder="Contact Address"></textarea>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" required class="form-control
                        input-medium" placeholder="Password" name="password">
            </div>

            <div class="form-group">
                <div class="btnDiv">
                    <button class="btn btn-success">Create Wallet</button>
                </div>
            </div>
        </form>
        <?php include_once '../footer.php'; ?>