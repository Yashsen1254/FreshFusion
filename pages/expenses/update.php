<?php
require ('../../includes/init.php');

$UserId = $_SESSION['UserId'];
$permissions = authenticate('Expenses', $UserId);
if ($expensesPermission['EditPermission'] != 1)
    header("Location:./index");

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
                                <h4>Update Expenses</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <input class="form-control" type="hidden" id="Id" name="Id"
                                        value="<?= $expanses['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Update Branch</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="BranchId" autofocus>
                                                <?php foreach ($branchDetails as $branchDetail): ?>
                                                    <option value="<?= $branchDetail['Id'] ?>">
                                                        <?= $branchDetail['OwnerName'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Name"
                                                value="<?= $expanses['Name'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Amount</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="Amount"
                                                value="<?= $expanses['Amount'] ?>">
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
            Id: $("#Id").val(),
            BranchId: $("#BranchId").val(),
            Name: $("#Name").val(),
            Amount: $("#Amount").val(),
        }

        $.ajax({
            url: "../../api/expenses/update",
            method: "POST",
            data: data,
            success: function (response) {
                alert("Expenses Updated");
                window.location.href = './index';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>