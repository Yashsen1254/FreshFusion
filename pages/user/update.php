<?php
require ('../../includes/init.php');
$roles = select("SELECT * FROM roles");
$Id = $_POST["Id"];
$users = selectOne("SELECT * FROM users WHERE Id = $Id");
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
                                <h4>Add Users</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <input class="form-control" type="hidden" id="Id" name="Id"
                                        value="<?= $users['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Select Role</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="roleId">
                                                <?php foreach ($users as $user): ?>
                                                    <option value="<?= $user['Id'] ?>"><?= $user['Id'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?= $user['Name'] ?>"
                                                id="Name" autofocus>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">Mobile</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?= $user['Mobile'] ?>"
                                                id="Mobile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="email" value="<?= $user['Email'] ?>"
                                                id="Email">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Address</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?= $user['Address'] ?>"
                                                id="Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success mb-2 me-2" onclick="updateData()">Update</button>
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
?>
<script>
    function sendData() {
        let data = {
            Id: $("#Id").val(),
            roleId: $("#roleId").val(),
            Name: $("#Name").val(),
            Mobile: $("#Mobile").val(),
            Email: $("#Email").val(),
            Address: $("#Address").val(),
        }

        $.ajax({
            url: "../../api/user/update",
            method: "POST",
            data: data,
            success: function (response) {
                alert("Users Updated");
                window.location.href = './index';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>