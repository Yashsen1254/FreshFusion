<?php
require ('../../includes/init.php');
$cities = select("SELECT * FROM City");
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
                                <h4>Add Branch Details</h4>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Select City</label>
                                        <div class="col-md-10">
                                            <select class="form-select" id="cityId" autofocus>
                                                <?php foreach ($cities as $city): ?>
                                                    <option value="<?= $city['Id'] ?>"><?= $city['Name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Address</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="Address">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-number-input"
                                            class="col-md-2 col-form-label">SquareFeet</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="Squarefeet">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-2 col-form-label">Owner</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="OwnerName">
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
            cityId: $("#cityId").val(),
            Address: $("#Address").val(),
            Squarefeet: $("#Squarefeet").val(),
            OwnerName: $("#OwnerName").val(),
        }

        $.ajax({
            url: "../../api/branchdetails/add",
            method: "POST",
            data: data,
            success: function (response) {
                alert("BranchDetails Added");
                window.location.href = './index';
            }
        })
    }
</script>
<?php
include pathOf('includes/pageEnd.php');
?>