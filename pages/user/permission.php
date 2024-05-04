<?php
require ('../../includes/init.php');
$id = $_POST['Id'];
$permissions = select("SELECT modules.Name, permissions.AddPermission, permissions.EditPermission, permissions.DeletePermission, permissions.ViewPermission FROM permissions INNER JOIN users ON users.Id = permissions.UserId INNER JOIN modules ON modules.Id = permissions.ModuleId WHERE permissions.UserId = ?", [$id]);
$index = 0;
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
                                    <h4 class="mb-0">User</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"> <a href="./add"
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
                                            <th>Modules</th>
                                            <th>Add Permission</th>
                                            <th>Edit Permission</th>
                                            <th>View Permission</th>
                                            <th>Delete Permission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($permissions as $permission): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $permission['Name'] ?></td>
                                                <td><input class="form-check-input me-1" <?= $permission['AddPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['EditPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['ViewPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['DeletePermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
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
    ?>
    <script>
        function deleteUser(Id) {
            if (confirm("sure you want to delete this branch"));
            $.ajax({
                url: "../../api/user/delete",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    alert('BranchDetails Deleted');
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageEnd.php');
    ?>