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
                        <a class="nav-link active" href="<?= base_url()  ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Patch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cron-Job</a>
                    </li>
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
<div class="container ">
    <div class="card m-2 p-2">
asdasdas
    </div>
</div>

    <!-- Add Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
    <script>  var base_url = '<?= base_url() ?>'; </script>
    <script src="<?= base_url() ?>assets/js/home.js"></script>
   
</body>

</html>