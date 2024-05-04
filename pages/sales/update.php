<?php
require ('../../includes/init.php');
$branchDetails = select("SELECT * FROM BranchDetails");
$products = select("SELECT * FROM Products");
$Id = $_POST["Id"];
$sales = selectOne("SELECT * FROM sales WHERE Id = $Id");
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
                                <h4>Add Sales</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                <input class="form-control" type="hidden" id="Id" name="Id"
                                        value="<?= $sales['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Branch</label>
                                        <div class="col-md-10">
                                        <select class="form-select" id="branchId">
                                                <?php foreach ($branchDetails as $branchDetail): ?>
                                                    <option value="<?= $branchDetail['Id'] ?>"><?= $branchDetail['OwnerName'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Product</label>
                                        <div class="col-md-10">
                                        <select class="form-select" id="productId">
                                                <?php foreach ($products as $product): ?>
                                                    <option value="<?= $product['Id'] ?>"><?= $product['Name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-number-input"
                                            class="col-md-2 col-form-label">Quantity</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?= $sales['Quantity'] ?>"
                                                id="Quantity">
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
            Quantity: $("#Quantity").val(),
            productId: $("#productId").val(),
        }

        $.ajax({
            url: "../../api/sales/update.php",
            method: "POST",
            data: data,
            success: function (response) {
                alert("Purchase Added");
                window.location.href = './index.php';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>