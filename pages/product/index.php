<?php
require ('../../includes/init.php');
$products = select("SELECT Products.Id, Products.Name, Products.Details, Products.Price, Products.ImageFileName, Categories.Id AS 'CategoryId' FROM Products INNER JOIN Categories ON Products.CategoryId = Categories.Id");
$index = 0;
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>
<div class="main-content">
    <div class="content-wraper-area">
        <div class="data-table-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body card-breadcrumb">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Product</h4>
                                    <div class="page-title-right"> 
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"> <a href="./add.php"
                                                    class="btn btn-success mb-2 me-2">Add</a> </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                 <?php foreach ($products as $product): ?>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="card">
                                                        <div class="card-body p-lg-4">
                                                            <!-- Single Card -->
                                                            <div class="single-product-card">
                                                                <div class="single-product-img">
                                                                    <img src="<?= urlOf('assets/img/uploads/') .$product['ImageFileName'] ?>"
                                                                        id="Image" alt="" class="imagedisplay">
                                                                </div>
                                                                <div class="single-product-meta">
                                                                    <a class="product-title"><?= $product['Name'] ?></a>
                                                                    <ul class="product-det-info">
                                                                        <li><i class="fa fa-circle"></i>
                                                                            <?= $product['CategoryId'] ?>
                                                                        </li>
                                                                        <li><i class="fa fa-circle"></i>
                                                                            <?= $product['Details'] ?></li>
                                                                    </ul>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center mt-4">
                                                                        <h4 class="product-price"><?= $product['Price'] ?></h4>
                                                                        <form action="./update.php" method="post">
                                                                            <input type="hidden" name="Id" id="Id"
                                                                                value="<?= $product['Id'] ?>">
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-circle mb-2">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                        </form>
                                                                        <button type="button"
                                                                            class="btn btn-danger btn-circle mb-2"
                                                                            onclick="deleteProducts(<?= $product['Id'] ?>)">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endforeach; ?>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
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
        function deleteProducts(Id) {
            if (confirm("sure you want to delete this branch"));
            $.ajax({
                url: "../../api/product/delete.php",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    alert('Products Deleted');
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageEnd.php');
    ?>