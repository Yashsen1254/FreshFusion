<?php
require ('../../includes/init.php');

$UserId = $_SESSION['UserId'];
$permissions = authenticate('Products', $UserId);
if ($productPermission['EditPermission'] != 1)
    header("Location:./index");

$categories = select("SELECT * FROM Categories");
$Id = $_POST["Id"];
$products = selectOne("SELECT * FROM Products WHERE Id = $Id");
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
                                <h4>Update Product</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <input class="form-control" type="hidden" id="Id" name="Id"
                                        value="<?= $products['Id'] ?>">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Categorie</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="categoryId" autofocus>
                                                <?php foreach ($categories as $category): ?>
                                                    <option value="<?= $category['Id'] ?>"
                                                        <?= $products['CategoryId'] == $category['Id'] ? 'selected' : '' ?>>
                                                        <?= $category['Name'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?= $products['Name'] ?>"
                                                id="Name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Details</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?= $products['Details'] ?>"
                                                id="Details">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">Price</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?= $products['Price'] ?>"
                                                id="Price">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input"
                                            class="col-md-2 col-form-label">ImageName</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" id="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success mb-2 me-2" type="button"
                                onclick="updateData()">Update</button>
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

        var form = new FormData();
        form.append('Id', $('#Id').val());
        form.append('categoryId', $('#categoryId').val());
        form.append('Name', $('#Name').val());
        form.append('Details', $('#Details').val());
        form.append('Price', $('#Price').val());
        form.append('Image', $('#Image')[0].files[0]);
        
        $.ajax({
            url: '../../api/product/update',
            method: 'POST',
            data: form,
            processData: false,
            contentType: false,
            success: function (response) {
                alert("Product Updated");
                window.location.href = './index';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>