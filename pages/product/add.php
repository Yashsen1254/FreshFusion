<?php
require ('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
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
                                <h4>Add Product</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Categorie</label>
                                        <div class="col-md-10">
                                            <select class="form-select">
                                                <option>Select</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="Hello World"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Details</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="Hello World"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="42"
                                                id="example-number-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input"
                                            class="col-md-2 col-form-label">ImageName</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file">
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
include pathOf('includes/footer.php');
include pathOf('includes/script.php');
include pathOf('includes/pageEnd.php');
?>