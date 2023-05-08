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
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Elkanawi Schools</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <img src="../images/logo.png" class="image mr-auto image-responsive" alt="Elkanawi Schools" height="5%" width="5%">
            <button class="navbar-toggler ml-auto" type="button"
                data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"
                id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <i class="fa fa-user"></i> Profile
                        </a>
                    </li>
                    <li class="active nav-item">
                        <a class="nav-link" href="../login.php">
                            <i class="fa fa-sign-in"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container">
            <h1 class="h1">Welcome Back</h1>
            <h3 class="h3">Secure Login to the Arewa Premier Ltd eNaira Onboarding App</h3>
            <form action="#" class="form" id="loginForm">
                <div class="form-group">
                    <label for="firstname" class="form-label">Choose Title:</label>
                    <select name="user_type" id="select" required class="form-control
                    input-medium"
                    placeholder="Choose Title">
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
                        input-medium"
                        placeholder="First Name" name="firstname">
                </div>

                <div class="form-group">
                    <label for="middlename" class="form-label">Middle Name:</label>
                    <i class="optional">(Optional)</i>
                    <input type="text" class="form-control
                        input-medium"
                        placeholder="Middle Name" name="middlename">
                </div>

                <div class="form-group">
                    <label for="lastname" class="form-label">Last Name:</label>
                    <input type="text" required class="form-control
                        input-medium" placeholder="Last Name" name="lastname">
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="number" required class="form-control
                        input-medium" maxlength="11" minlength="11" placeholder="Phone Number" name="phone">
                </div>

                <div class="form-group">
                    <label for="firstname" class="form-label">State of Origin:</label>
                    <select name="state" id="select" required class="form-control
                    input-medium"
                    placeholder="State of Origin">
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
                    <label for="firstname" class="form-label">Local Government Area:</label>
                    <select name="lga" id="select" required class="form-control
                    input-medium"
                    placeholder="Local Government Area">
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
                    <label for="nin" class="form-label">National Iddentification Number (NIN):</label>
                    <input type="text" required class="form-control
                        input-medium" placeholder="National Iddentification Number (NIN)" name="nin">
                </div>

                <div class="form-group">
                    <label for="wallet" class="form-label">Wallet @alias:</label>
                    <input type="text" required class="form-control
                        input-medium" placeholder="Wallet @alias" name="wallet">
                </div>

                <div class="form-group">
                    <label for="wallet" class="form-label">Address:</label>
                    <textarea name="address" cols="5" rows="5" placeholder="Address"></textarea>
                </div>

                <div class="form-group">
                    <label for="organization" class="form-label">Select Organization:</label>
                    <select name="organization" id="select" required class="form-control
                    input-medium"
                    placeholder="Select Organization">
                        <option value="">Select Organization</option>
                        <option value="Chief">Chief</option>
                        <option value="Ben Grace Agro Ltd">Ben Grace Agro Ltd</option>
                        <option value="AMCIN">AMCIN</option>
                        <option value="SUS Consultancy Services Ltd">SUS Consultancy Services Ltd</option>
                        <option value="Binda International Farms">Binda International Farms</option>
                        <option value="Wakili Communication Share Agent Network Limited">Wakili Communication Share Agent Network Limited</option>
                        <option value="Powerline Technology Ltd">Powerline Technology Ltd</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo" class="form-label">Photo:</label>
                    <input type="file" required class="form-control
                        input-medium" placeholder="Photo" name="photo">
                </div>

                <img src="../images/f.png" class="image-responsive" alt="Photo" width="10%" height="10%">

                <div class="form-group">
                    <div class="btnDiv">
                        <a href="dashboard.php" class="btn btn-success">Continue</a>
                    </div>
                </div>
            </form>
            <?php include_once '../footer.php'; ?>