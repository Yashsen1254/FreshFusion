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
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Multi item selection</h4>
                                    <p>
                                        This example shows the multi option. Note how a click on a row will
                                        toggle
                                        its selected state without effecting other rows,
                                        unlike the os and single options shown in other examples.
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary mb-2 me-2"> <a
                                        href="./add.php">Add</a></button>
                                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Detail</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Yash</td>
                                            <td>Details</td>
                                            <td>
                                                <button type="button" class="btn btn-primary mb-2 me-2"><a
                                                        href="./Update.php">Edit</a></button>
                                                <button type="button" class="btn btn-danger mb-2 me-2">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
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