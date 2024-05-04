<?php
require ('../../includes/init.php');
$permissions = authenticate('Stocks', 1);
$stocks = select("SELECT Stocks.Id, Stocks.CurrentQuantity, BranchDetails.OwnerName AS 'BranchDetailsName', Products.Name AS 'ProductName' FROM Stocks INNER JOIN BranchDetails ON Stocks.BranchId = BranchDetails.Id INNER JOIN Products ON Stocks.ProductId = Products.Id");
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
                                    <h4 class="mb-0">Stock</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <?php if($permissions['AddPermission'] == 1) { ?>
                                            <li class="breadcrumb-item active"> <a href="./add"
                                                    class="btn btn-success mb-2 me-2">Add</a> </li>
                                                    <?php } ?>
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
                                            <th>CurrentQuantity</th>
                                            <th>Modify</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php foreach ($stocks as $stock): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $stock['BranchDetailsOwnerName'] ?></td>
                                                <td><?= $stock['ProductName'] ?></td>
                                                <td><?= $stock['CurrentQuantity'] ?></td>
                                                <form action="./update" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $stock['Id'] ?>">
                                                        <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-circle mb-2"
                                                        onclick="deleteStocks(<?= $stock['Id'] ?>)">
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
        function deleteStocks(Id) {
            if (confirm("sure you want to delete this Stocks"));
            $.ajax({
                url: "../../api/stocks/delete",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    alert('Stock Deleted');
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageEnd.php');
    ?>