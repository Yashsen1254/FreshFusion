<?php
require ('../../includes/init.php');
$modules = select("SELECT * FROM Modules");
$index = 0;
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
                                <h4>Add Details</h4>
                            </div>

                            <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Module</th>
                                        <th>Add Permission</th>
                                        <th>Edit Permission</th>
                                        <th>View Permission</th>
                                        <th>Delete Permission</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($modules as $module) : ?>
                                    <tr>
                                        <td><?= $index += 1 ?></td>
                                        <td><?= $module['Name'] ?></td>
                                        <td><input class="form-check-input me-1" type="checkbox" value=""
                                                id="firstCheckbox"></td>
                                        <td><input class="form-check-input me-1" type="checkbox" value=""
                                                id="firstCheckbox"></td>
                                        <td><input class="form-check-input me-1" type="checkbox" value=""
                                                id="firstCheckbox"></td>
                                        <td><input class="form-check-input me-1" type="checkbox" value=""
                                                id="firstCheckbox"></td>
                                    </tr>
                                    <?php endforeach; ?>    
                                </tbody>
                            </table>



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