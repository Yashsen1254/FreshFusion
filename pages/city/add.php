<?php
require ('../../includes/init.php');

$permissions = authenticate('City', 1);
if ($permissions['AddPermission'] != 1)
    header('Location: ./index');

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
                                <h4>Add City</h4>
                            </div>

                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="name" name="name" autofocus>
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
        var name = $("#name").val();

        $.ajax({
            url: "../../api/city/add",
            method: "POST",
            data: {
                name: name,
            },
            success: function (response) {
                alert("City Added");
                window.location.href = './index';
            }
        })
    }
</script>

<?php
include pathOf('includes/pageEnd.php');
?>