<?php
require ('../../includes/init.php');
$users = select("SELECT Users.Id, Users.Name, Users.Mobile, Users.Email, Users.Address, Roles.Name AS 'RolesName', BranchDetails.OwnerName AS 'BranchDetailsOwnerName' FROM Users INNER JOIN Roles ON Users.RoleId = Roles.Id INNER JOIN BranchDetails ON Users.BranchId = BranchDetails.Id");
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
                                            <th>Role</th>
                                            <th>Branch</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Permission</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php foreach ($users as $user): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $user['RolesName'] ?></td>
                                                <td><?= $user['BranchDetailsOwnerName'] ?></td>
                                                <td><?= $user['Name'] ?></td>
                                                <td><?= $user['Mobile'] ?></td>
                                                <td><?= $user['Email'] ?></td>
                                                <td><?= $user['Address'] ?></td>
                                                <form action="./permission" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $user['Id'] ?>">
                                                        <button type="submit" class="btn btn-success btn-circle mb-2">
                                                            <i class="fa fa-lock"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                <form action="./update" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $user['Id'] ?>">
                                                        <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </form>
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