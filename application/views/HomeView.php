<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LNHS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/lnhs_logo.jpg">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('<?php echo base_url("assets/images/Home-Background.jpg"); ?>');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            /* Blend the two images */
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo base_url("assets/images/Home-Background.jpg"); ?>');
            background-size: cover;
            filter: blur(4px);
            /* Adjust the blur radius */
            opacity: 0.8;
            /* Adjust the opacity level */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="<?= base_url() ?>assets/images/lnhs_logo.jpg" height="25" alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 0) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>maintenance">Maintenance</a>
                        </li>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Grades</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <?php if (isset($_SESSION['username'])) : ?>
                    <!-- Notifications -->
                    <div class="dropdown">
                        <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Some news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                            <?= $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url() ?>logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <a class="btn btn-outline-dark btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#LoginModal">Login</a>&nbsp;
                    <a class="btn btn-outline-dark btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#RegisterModal">Register</a>
                <?php endif; ?>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="content container">
        <div class="home row justify-content-center mt-5">
            <?php foreach ($home_content as $key => $content) :  ?>
                <div class="<?= $key % 2 == 0 && end($home_content)['id'] == $content['id'] ? 'col-md-10 m-3' : 'col-md-5 m-1' ?> ">
                    <div class="card shadow-lg">
                        <h5 class="card-header"><?= $content['HeaderTitle']  ?></h5>
                        <div class="card-body">
                            <h5 class="card-title"><?= $content['BodyTitle']  ?></h5>
                            <p class="card-text"><?= $content['Body']  ?></p>
                            <a href="<?= empty($content['Link']) ? '#' :  $content['Link'] ?>" class="btn btn-primary" data-mdb-ripple-init>Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div>
        <div class="modal fade" id="RegisterModal" data-mdb-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="RegisterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-center mb-4">Register User</h2>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="register-form" action="#" method="post">
                        <div class="modal-body">
                            <div class="container">
                                <div class="justify-content-center">
                                    <div class="m-2">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="fname"><span class="text-danger">*</span> Firstname</label>
                                                <input type="text" class="form-control" name="fname" placeholder="Enter Firstname">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="mname">Middlename(Optional)</label>
                                                <input type="text" class="form-control" name="mname" placeholder="Enter Middlename">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="lname"><span class="text-danger">*</span> Lastname</label>
                                                <input type="text" class="form-control" name="lname" placeholder="Enter Lastname">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="lrn-no"><span class="text-danger">*</span> LRN Number</label>
                                                <input type="text" class="form-control" name="lnr_no" placeholder="Enter LRN Number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="email"><span class="text-danger">*</span> Email Address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div>
        <!-- Modal -->
        <div class="modal fade" id="LoginModal" data-mdb-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-center mb-4">Login User</h2>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="login-form" action="#" method="post">
                        <div class="modal-body">
                            <div class="container">
                                <div class="justify-content-center">
                                    <div>

                                        <div class="form-group">
                                            <label for="username">Username or Mobile Number(for Parent)</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="OtpModal" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="OtpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-center mb-4">OTP Verification</h2>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">We sent 5 digits OTP to <span id="email_display"></span>, please check.</p>
                        OTP
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
    <script>  var base_url = '<?= base_url() ?>'; </script>
    <script src="<?= base_url() ?>assets/js/register.js"></script>
    <script src="<?= base_url() ?>assets/js/login.js"></script>
    <script src="<?= base_url() ?>assets/js/home.js"></script>
   
</body>

</html>