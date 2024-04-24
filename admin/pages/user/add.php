<?php
require ('../../includes/init.php');
include pathOf('admin/includes/header.php');
?>

<div class="main-content- h-100vh">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card-body">
                        <div class="log-header-area card p-4 mb-4 text-center">
                            <h5>Free Register</h5>
                            <p class="mb-0">Get your free Flapt account now.</p>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <form action="https://demo.riktheme.com/fojota/top-menu/index.html">
                                    <div class="form-group mb-3">
                                        <label class="text-muted" for="fullname">Full Name</label>
                                        <input class="form-control" type="text" id="fullname"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="text-muted" for="fullname">Username</label>
                                        <input class="form-control" type="text" id="username" placeholder="Username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="text-muted" for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress"
                                            placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="text-muted" for="password">Password</label>
                                        <input class="form-control" type="password" id="password"
                                            placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary w-100 btn-lg" type="submit">Sign Up</button>
                                    </div>

                                    <div class="text-center">
                                        <span class="me-1">Already have an
                                            account?</span>
                                        <a class="fw-bold" href="login.html">Sign
                                            in</a>
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
include pathOf('admin/includes/script.php');
?>