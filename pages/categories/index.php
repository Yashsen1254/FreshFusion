<?php
require ('../../includes/init.php');
$permissions = authenticate('Categories', 1);
$categories = select("SELECT * FROM categories");
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
                                    <h4 class="mb-0">Categories</h4>
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
                                            <th>Name</th>
                                            <th>Modify</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php foreach ($categories as $category): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $category['Name'] ?></td>
                                                <form action="./update" method="post">
                                                    <td>
                                                        <input type="hidden" name="Id" id="Id"
                                                            value="<?= $category['Id'] ?>">
                                                        <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="submit" class="btn btn-danger btn-circle mb-2"
                                                        onclick="deleteCategory(<?= $category['Id'] ?>)">
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
        function deleteCategory(Id) {
            if (confirm("sure you want to delete this category"));
            $.ajax({
                url: "../../api/categories/delete",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    alert('Category Deleted');
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageEnd.php');
    ?>