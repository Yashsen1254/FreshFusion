<?php
require ('../../includes/init.php');
$Id = $_POST["Id"];
$roles = selectOne("SELECT * FROM roles WHERE Id = $Id");
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
                                <h4>Update Role</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <input class="form-control" type="hidden" id="Id" name="Id"
                                        value="<?= $roles['Id'] ?>">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Name" name="Name"
                                                value="<?= $roles['Name'] ?>" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success mb-2 me-2" onclick="updateData()"
                                type="submit">Update</button>
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

<script>
    function updateData() {
        var Id = $("#Id").val();
        var Name = $("#Name").val();

        $.ajax({
            url: "../../api/role/update",
            method: "POST",
            data: {
                Id: Id,
                Name: Name
            },
            success: function (response) {
                alert("Role Updated");
                window.location.href = './index';
            }
        })
    }
</script>