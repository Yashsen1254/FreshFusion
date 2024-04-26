<?php
require ('../../includes/init.php');
include pathOf('admin/includes/header.php');
include pathOf('admin/includes/navbar.php');
?>
<div class="main-content">
    <div class="content-wraper-area">
        <div class="data-table-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body card-breadcrumb">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Purchase</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"> <a href="./add.php" class="btn btn-success mb-2 me-2">Add</a> </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>BranchId</th>
                                            <th>ProductId</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>10000</td>
                                            <td>
                                            <a href="./update.php" class="btn btn-primary mb-2 me-2">Update</a>
                                            <a href="#" class="btn btn-danger mb-2 me-2">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>10000</td>
                                            <td>
                                            <a href="./update.php" class="btn btn-primary mb-2 me-2">Update</a>
                                            <a href="#" class="btn btn-danger mb-2 me-2">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>10000</td>
                                            <td>
                                            <a href="./update.php" class="btn btn-primary mb-2 me-2">Update</a>
                                            <a href="#" class="btn btn-danger mb-2 me-2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
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