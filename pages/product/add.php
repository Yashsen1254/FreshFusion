<?php
require ('../../includes/init.php');
$categories = select("SELECT * FROM Categories");
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
                                <h4>Add Product</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Select Categorie</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="categoryId" autofocus>
                                                <?php foreach ($categories as $category): ?>
                                                    <option value="<?= $category['Id'] ?>"><?= $category['Name'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Details</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Details">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">Price</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="Price">
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
        var form = new FormData();
        form.append('categoryId', $('#categoryId').val());
        form.append('Name', $('#Name').val());
        form.append('Details', $('#Details').val());
        form.append('Price', $('#Price').val());
        form.append('Image', $('#Image')[0].files[0]);

        $.ajax({
            url: '../../api/product/add',
            method: 'POST',
            data: form,
            processData: false,
            contentType: false,
            success: function (response) {
                alert("Product Added");
                window.location.href = './index';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>