<?php
require ('../../includes/init.php');
$cities = select("SELECT * FROM City");
$Id = $_POST["Id"];
$result = selectOne("SELECT * FROM branchdetails WHERE Id = $Id");
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
                                <h4>Add Branch Details</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <input class="form-control" type="Hidden" id="Id" name="Id"
                                        value="<?= $result['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">City</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="cityId">
                                                <?php foreach ($cities as $city): ?>
                                                    <option value="<?= $city['Id'] ?>"><?= $city['Name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Address</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Address">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-number-input"
                                            class="col-md-2 col-form-label">SquareFeet</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="Squarefeet">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Owner</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="OwnerName">
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
include pathOf('includes/pageEnd.php');
?>

<script>
    function updateData() {
        let data = {
            Id: $("#Id").val(),
            cityId: $("#cityId").val(),
            Address: $("#Address").val(),
            Squarefeet: $("#Squarefeet").val(),
            OwnerName: $("#OwnerName").val(),
        }

        $.ajax({
            url: "../../api/branchdetails/update.php",
            method: "POST",
            data: data,
            success: function (response) {
                alert("BranchDetails Updated");
                window.location.href = './index.php';
            }
        })
    }
</script>