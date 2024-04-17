<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LNHS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <?php if (isset($_SESSION['username'])) :  ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['username'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" id="login-btn" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-btn" href="#">Register</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </nav>
    <div class="content container">
        <div class="home row justify-content-left">
            <div class="col-md-6">
                <div class="card">
                    content
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    content
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modal fade" id="RegisterModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="RegisterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-center mb-4">Register User</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="login-form" action="#" method="post">
                        <div class="modal-body">
                            <div class="container">
                                <div class="justify-content-center">
                                    <div>

                                        <div class="form-group">
                                            <label for="fname">Firstname</label>
                                            <input type="text" class="form-control" name="fname" placeholder="Enter Firstname">
                                        </div>
                                        <div class="form-group">
                                            <label for="mname">Middlename(Optional)</label>
                                            <input type="text" class="form-control" name="mname" placeholder="Enter Middlename">
                                        </div>
                                        <div class="form-group">
                                            <label for="lname">Lastname</label>
                                            <input type="text" class="form-control" name="lname" placeholder="Enter Lastname">
                                        </div>
                                        <div class="form-group">
                                            <label for="lrn-no">LRN Number</label>
                                            <input type="text" class="form-control" name="lnr_no" placeholder="Enter LRN Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        <div class="modal fade" id="LoginModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-center mb-4">Login User</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="login-form" action="#" method="post">
                        <div class="modal-body">
                            <div class="container">
                                <div class="justify-content-center">
                                    <div>

                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="OtpModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="OtpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="text-center mb-4">OTP Verification</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">We sent 5 digits OTP to <span id="email_display"></span>, please check.</p>
                        OTP
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery script to open the modal -->
    <script>
        var base_url = '<?= base_url() ?>';
        $(document).ready(function() {
            $(document).on('click', '#login-btn', function() {
                $('#LoginModal').modal('toggle');
            })
            $(document).on('click', '#register-btn', function() {
                $('#RegisterModal').modal('toggle');
            })
            $(document).on('submit', '#login-form', function(e) {
                e.preventDefault();

                $.ajax({
                    url: base_url + 'email_otp',
                    type: 'POST',
                    data: $('#login-form').serialize(),
                    dataType: 'json',
                    success: function(response) {

                        if (response.code == 1) {
                            $('#RegisterModal').modal('hide');
                            $('#email_display').html(`<b>${response.email}</b>`)
                            $('#OtpModal').modal('toggle');
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                })

            })
        });
    </script>
</body>

</html>