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
                                <h4>Update Expanses</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Id</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="Hello World"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">BranchId</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="42"
                                                id="example-number-input">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text"
                                                id="example-email-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Amount</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="hunter2"
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