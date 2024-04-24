<?php
require ('...../includes/init.php');
include pathOf('admin/includes/header.php');
include pathOf('admin/includes/navbar.php');
?>
<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>Textual Inputs</h4>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Hello World" id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                            <div class="col-md-10">
                                <input class="form-control" type="search" value="Search Here" id="example-search-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" value="email@example.com"
                                    id="example-email-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" value="https://getbootstrap.com"
                                    id="example-url-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel" value="1-(222)-333-74444" id="example-tel-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" value="hunter2" id="example-password-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" value="42" id="example-number-input">
                            </div>
                        </div>
                        <div class="mb-3 mb-lg-0 row">
                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and
                                time</label>
                            <div class="col-md-10">
                                <input class="form-control" type="datetime-local" value="2023-05-16T05:07:00"
                                    id="example-datetime-local-input">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="row mb-3 mt-3 mt-xl-0">
                            <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="2023-08-20" id="example-date-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                            <div class="col-md-10">
                                <input class="form-control" type="month" value="2023-08" id="example-month-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                            <div class="col-md-10">
                                <input class="form-control" type="week" value="2023-W33" id="example-week-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                            <div class="col-md-10">
                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-color-input" class="col-md-2 col-form-label">Color
                                picker</label>
                            <div class="col-md-10">
                                <input type="color" class="form-control form-control-color mw-100"
                                    id="example-color-input" value="#038edc" title="Choose your color">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label">Select</label>
                            <div class="col-md-10">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="exampleDataList" class="col-md-2 col-form-label">Datalists</label>
                            <div class="col-md-10">
                                <input class="form-control" list="datalistOptions" id="exampleDataList"
                                    placeholder="Type to search...">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">
                                    </option>
                                    <option value="New York">
                                    </option>
                                    <option value="Seattle">
                                    </option>
                                    <option value="Los Angeles">
                                    </option>
                                    <option value="Chicago">
                                    </option>
                                </datalist>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php
include pathOf('admin/includes/footer.php');
include pathOf('admin/includes/script.php');
include pathOf('admin/includes/pageEnd.php');
?>