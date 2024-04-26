<?php
require ('../../includes/init.php');
include pathOf('admin/includes/header.php');
include pathOf('admin/includes/navbar.php');
?>

<div class="main-content">
    <div class="content-wraper-area">
        <!-- Basic Form area Start -->
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Update Users</h4>
                            </div>

                            
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Id</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="Hello World"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">RoleId</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="Hello World"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="Hello World"
                                                id="example-text-input">
                                        </div>
                                    </div>




                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Mobile</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="email" value="email@example.com"
                                                id="example-email-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="email" value="email@example.com"
                                                id="example-email-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Address</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="password" value="hunter2"
                                                id="example-password-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success mb-2 me-2">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include pathOf('admin/includes/footer.php');
include pathOf('admin/includes/script.php');
include pathOf('admin/includes/pageEnd.php');
?>