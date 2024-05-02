<?php
require ('../../includes/init.php');
$purchases = select("SELECT Purchase.Id, Purchase.Quantity, BranchDetails.Id AS 'BranchDetailsId', Products.Id AS 'ProductId' FROM Purchase INNER JOIN BranchDetails ON Purchase.BranchId = BranchDetails.Id INNER JOIN Products ON Purchase.ProductId = Products.Id");
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
                                    <h4 class="mb-0">Purchase</h4>
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
                                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Branch</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Modify</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php foreach ($purchases as $purchase): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $purchase['BranchDetailsId'] ?></td>
                                                <td><?= $purchase['ProductId'] ?></td>
                                                <td><?= $purchase['Quantity'] ?></td>
                                                <form action="./update.php" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $purchase['Id'] ?>">
                                                        <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-circle mb-2"
                                                        onclick="deletePurchase(<?= $purchase['Id'] ?>)">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

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
        function deletePurchase(Id) {
            if (confirm("sure you want to delete this branch"));
            $.ajax({
                url: "../../api/purchase/delete.php",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    alert('BranchDetails Deleted');
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageEnd.php');
    ?>