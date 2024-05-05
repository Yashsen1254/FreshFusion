<?php
require ('../includes/init.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fojota - Admin Dashboard Template</title>
    <link rel="icon" href="<?= urlOf('assets/img/core-img/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/classynav.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/introjs.min.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/dataTables.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/buttons.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/select.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/spectrum.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/jquery.bootstrap-touchspin.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/style.css') ?>">
</head>
<div class="main-content- h-100vh">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card-body">
                        <div class="log-header-area card p-4 mb-4 text-center">
                            <h5>Welcome Back !</h5>
                            <p class="mb-0">Sign in to continue.</p>
                        </div>

                        <div class="card">
                            <div class="card-body p-4">

                                <div class="form-group mb-3">
                                    <label class="text-muted" for="Name">Name</label>
                                    <input class="form-control" type="text" id="Name" placeholder="Enter your Name"
                                        autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-muted" for="password">Password</label>
                                    <input class="form-control" type="password" id="Password"
                                        placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <button class="btn btn-primary btn-lg w-100" type="button" onclick="sendData()">Sign
                                        In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include pathOf('includes/script.php');
?>
<script>
    function sendData() {
        var data = {
            Name: $('#Name').val(),
            Password: $('#Password').val()
        }

        $.post('../api/login.php', data, function (response) {
            console.log(response);
            if (response.success !== true)
                return;

            window.location.href = '../index';
        });
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>