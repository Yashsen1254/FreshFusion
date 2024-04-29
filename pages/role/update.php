<?php
require ('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<?php

$id = $_GET["id"];
$querry = "SELECT * FROM roles WHERE Id = $id";
$rows = selectOne($querry);

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
                                <h4>Add Role</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Id</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Id" name="Id" readonly value="<?= $rows['Id'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Name" name="Name" value="<?= $rows['Name'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success mb-2 me-2" onclick="updateData()" type="submit">Update</button>
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
                url: "../../api/role/update.php",
                method: "POST",
                data: {
                    Id:Id,
                    Name: Name
                },
                success: function (response) {
                    alert("Role Updated");
                    window.location.href = './index.php';
                }
            })
        }
    </script>