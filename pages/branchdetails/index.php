<?php
require ('../../includes/init.php');
$UserId = $_SESSION['UserId'];
$permissions = authenticate('BranchDetails', $UserId);
$branchDetails = select("SELECT BranchDetails.Id, BranchDetails.Address, BranchDetails.Squarefeet, BranchDetails.OwnerName, City.Name FROM BranchDetails INNER JOIN City ON BranchDetails.CityId = City.Id");
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
                                    <h4 class="mb-0">Branch Details</h4>
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
                                            <th>City</th>
                                            <th>Address</th>
                                            <th>Squarefeet</th>
                                            <th>OwnerName</th>
                                            <?php if ($permissions['EditPermission'] == 1) { ?>
                                                <th>Modify</th>
                                            <?php } ?>
                                            <?php if ($permissions['DeletePermission'] == 1) { ?>
                                                <th>Delete</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php if ($permissions['ViewPermission'] == 1) {
                                            foreach ($branchDetails as $branchDetail): ?>
                                                <tr>
                                                    <td><?= $index += 1 ?></td>
                                                    <td><?= $branchDetail['Name'] ?></td>
                                                    <td><?= $branchDetail['Address'] ?></td>
                                                    <td><?= $branchDetail['Squarefeet'] ?></td>
                                                    <td><?= $branchDetail['OwnerName'] ?></td>
                                                    <?php if ($permissions['EditPermission'] == 1) { ?>
                                                    <form action="./update" method="post">
                                                        <td>
                                                            <input type="hidden" name="Id" id="Id"
                                                                value="<?= $branchDetail['Id'] ?>">
                                                            <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </td>
                                                    </form>
                                                    <?php } ?>
                                                    <?php if ($permissions['DeletePermission'] == 1) { ?>
                                                    <td>
                                                        <button type="submit" class="btn btn-danger btn-circle mb-2"
                                                            onclick="deleteBranch(<?= $branchDetail['Id'] ?>)">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach;
                                        } ?>
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
        function deleteBranch(Id) {
            if (confirm("are you sure you want to delete this branch"));
            $.ajax({
                url: "../../api/branchdetails/delete",
                method: "POST",
                data: {
                    Id: Id
                },
                success: function (response) {
                    console.log(response);
                    if (response.success != true)
                        return alert('BranchDetails Deleted');

                    window.location.href = './index';
                }
            })
        }
    </script>

    <?php
    include pathOf('includes/pageEnd.php');
    ?>