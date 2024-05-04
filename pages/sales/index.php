<?php
require ('../../includes/init.php');
$sales = select("SELECT Sales.Id, Sales.Quantity, BranchDetails.OwnerName AS 'BranchDetailsOwnerName', Products.Name AS 'ProductName' FROM Sales INNER JOIN BranchDetails ON Sales.BranchId = BranchDetails.Id INNER JOIN Products ON Sales.ProductId = Products.Id");
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
                                    <h4 class="mb-0">Sales</h4>
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
                                    <?php foreach ($sales as $sale): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $sale['BranchDetailsOwnerName'] ?></td>
                                                <td><?= $sale['ProductName'] ?></td>
                                                <td><?= $sale['Quantity'] ?></td>
                                                <form action="./update.php" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $sale['Id'] ?>">
                                                        <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-circle mb-2"
                                                        onclick="deleteSales(<?= $sale['Id'] ?>)">
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
        function deleteSales(Id) {
            if (confirm("sure you want to delete this branch"));
            $.ajax({
                url: "../../api/sales/delete.php",
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