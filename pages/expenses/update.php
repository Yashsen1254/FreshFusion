<?php
require ('../../includes/init.php');
$branchDetails = select("SELECT * FROM BranchDetails");
$Id = $_POST["Id"];
$expanses = selectOne("SELECT * FROM expenses WHERE Id = $Id");
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
                                <h4>Add Expenses</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                <input class="form-control" type="Hidden" id="Id" name="Id"
                                        value="<?= $expanses['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Add Branch</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="BranchId">
                                                <?php foreach ($branchDetails as $branchDetail): ?>
                                                    <option value="<?= $branchDetail['Id'] ?>"><?= $branchDetail['Id'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Name" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Amount</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="hunter2"
                                                id="Amount">
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
    function updateData() {
        let data = {
            BranchId: $("#BranchId").val(),
            Name: $("#Name").val(),
            Amount: $("#Amount").val(),
        }

        $.ajax({
            url: "../../api/expenses/update.php",
            method: "POST",
            data: data,
            success: function (response) {
                alert("BranchDetails Added");
                window.location.href = './index.php';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>