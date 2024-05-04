<?php
require ('../includes/init.php');
include pathOf('includes/header.php');
?>

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
                                <form action="https://demo.riktheme.com/fojota/top-menu/index.html">
                                    <div class="form-group mb-3">
                                        <label class="text-muted" for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress"
                                            placeholder="Enter your email" autofocus>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="text-muted" for="password">Password</label>
                                        <input class="form-control" type="password" id="password"
                                            placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary btn-lg w-100" type="submit">Sign Up</button>
                                    </div>

                                    <div class="text-center">
                                        <span class="me-1">Don't have an account?</span>
                                        <a class="fw-bold" href="register.html">Sign up</a>
                                    </div>
                                </form>
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
include pathOf('includes/pageEnd.php');
?>