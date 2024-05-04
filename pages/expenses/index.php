<?php
require ('../../includes/init.php');
$permissions = authenticate('Expenses', 1);
$expenses = select("SELECT Expenses.Id, Expenses.Name, Expenses.Amount, BranchDetails.OwnerName AS 'BranchDetailsOwnerName' FROM Expenses INNER JOIN BranchDetails ON Expenses.BranchId = BranchDetails.Id");
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
                                    <h4 class="mb-0">Expenses</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <?php if ($permissions['AddPermission'] == 1) { ?>
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
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Modify</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php foreach ($expenses as $expense): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $expense['BranchDetailsOwnerName'] ?></td>
                                                <td><?= $expense['Name'] ?></td>
                                                <td><?= $expense['Amount'] ?></td>
                                                <form action="./update" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $expense['Id'] ?>">
                                                        <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-circle mb-2"
                                                        onclick="deleteExpense(<?= $expense['Id'] ?>)">
                                                        <i class="fa fa-trash"></i>
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
        function deleteExpense(Id) {
            if (confirm("sure you want to delete this expenses"));
            $.ajax({
                url: "../../api/expenses/delete",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    alert('Expenses Deleted');
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageEnd.php');
    ?>