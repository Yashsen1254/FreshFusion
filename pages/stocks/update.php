<?php
require ('../../includes/init.php');
$UserId = $_SESSION['UserId'];
$permissions = authenticate('Stocks', $UserId);
if ($stocksPermission['EditPermission'] != 1)
    header("Location:./index");
$Id = $_POST["Id"];
$stocks = selectOne("SELECT * FROM stocks WHERE Id = $Id");
$branchDetails = select("SELECT * FROM BranchDetails");
$products = select("SELECT * FROM Products");
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
                                <h4>Update Stocks</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                <input class="form-control" type="hidden" id="Id" name="Id"
                                        value="<?= $stocks['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Branch</label>
                                        <div class="col-md-10">
                                        <select class="form-select" id="branchId" autofocus>
                                                <?php foreach ($branchDetails as $branchDetail): ?>
                                                    <option value="<?= $branchDetail['Id'] ?>"
                                                    <?= $stocks['BranchId'] == $branchDetail['Id'] ? 'selected' :'' ?>>
                                                    <?= $branchDetail['OwnerName'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">QTY</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?= $stocks['CurrentQuantity'] ?>"
                                                id="CurrentQuantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Product</label>
                                        <div class="col-md-10">
                                        <select class="form-select" id="productId">
                                                <?php foreach ($products as $product): ?>
                                                    <option value="<?= $product['Id'] ?>"
                                                    <?= $stocks['ProductId'] == $product['Id'] ? 'selected' : '' ?>>
                                                    <?= $product['Name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-success mb-2 me-2" onclick="sendData()">Add</button>
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
            branchId: $("#branchId").val(),
            CurrentQuantity: $("#CurrentQuantity").val(),
            productId: $("#productId").val(),
        }

        $.ajax({
            url: "../../api/stocks/update",
            method: "POST",
            data: data,
            success: function (response) {
                alert("Stocks Updated");
                window.location.href = './index';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>