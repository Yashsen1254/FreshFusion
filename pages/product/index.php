<?php
require ('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
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
                                    <h4 class="mb-0">Product</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"> <a href="./add.php"
                                                    class="btn btn-success mb-2 me-2">Add</a> </li>
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
                                            <th>Sr No.</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Details</th>
                                            <th>Price</th>
                                            <th>ImageFileName</th>
                                            <th>Modify</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>Yash</td>
                                            <td>Details</td>
                                            <td>422222</td>
                                            <td>File</td>
                                            <td>
                                                <a class="btn btn-primary btn-circle mb-2" href="./update.php">
                                                    <div class="fa fa-edit">
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-circle mb-2" href="#">
                                                    <div class="fa fa-trash">
                                                    </div>
                                                </a>
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
    include pathOf('includes/footer.php');
    include pathOf('includes/script.php');
    include pathOf('includes/pageEnd.php');
    ?>