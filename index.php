<?php
require ('./includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<!-- Page Content -->
<div class="flapt-top-menu-page-content">
    <!-- Main Content Area -->
    <div class="main-content introduction-farm">
        <div class="content-wraper-area">
            <div class="dashboard-area">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="dashboard-header-title">
                                    <h5 class="mb-0">Congratulations</h5>
                                    <p class="mb-0">You have earns <span class="text-success">$785</span> today.
                                    </p>
                                </div>

                                <div class="dashboard-infor-mation">
                                    <div class="dashboard-btn-group d-flex align-items-center">
                                        <a href="#" class="dash-btn ms-2"><i class="ti-settings"></i></a>
                                        <a href="#" class="dash-btn ms-2"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                            <div class="card ">
                                <div class="card-body" data-intro="New Orders">
                                    <div class="single-widget d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="widget-icon">
                                                <i class='bx bx-mouse-alt'></i>
                                            </div>
                                            <div class="widget-desc">
                                                <h5>35 new orders</h5>
                                                <p class="mb-0">Awating Processing</p>
                                            </div>
                                        </div>
                                        <div class="progress-report" data-title="progress"
                                            data-intro="And this is the last step!">
                                            <p>+ 3.56%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                            <div class="card">
                                <div class="card-body" data-intro="New Customers">
                                    <div class="single-widget d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="widget-icon">
                                                <i class='bx bx-user-voice'></i>
                                            </div>
                                            <div class="widget-desc">
                                                <h5>Customers</h5>
                                                <p class="mb-0">Awating Processing</p>
                                            </div>
                                        </div>
                                        <div class="progress-report" data-title="progress">
                                            <p>+ 4.56%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                            <div class="card">
                                <div class="card-body" data-intro="Revenue">
                                    <div class="single-widget d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="widget-icon">
                                                <i class='bx bx-wallet'></i>
                                            </div>
                                            <div class="widget-desc">
                                                <h5>Revenue</h5>
                                                <p class="mb-0">Awating Processing</p>
                                            </div>
                                        </div>
                                        <div class="progress-report" data-title="progress"
                                            data-intro="And this is the last step!">
                                            <p>- 2.56%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xxl-3">
                            <div class="card">
                                <div class="card-body" data-intro="Growth">
                                    <div class="single-widget d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="widget-icon">
                                                <i class='bx bx-bar-chart-alt-2'></i>
                                            </div>
                                            <div class="widget-desc">
                                                <h5>Growth</h5>
                                                <p class="mb-0">Awating Processing</p>
                                            </div>
                                        </div>
                                        <div class="progress-report" data-title="progress"
                                            data-intro="And this is the last step!">
                                            <p>+ 2.56%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="revenue-card text-center">
                                        <div class="offer-img"><img src="img/bg-img/offer.jpg" alt=""></div>
                                        <h6>Total Revenue</h6>
                                        <h2>$40,000.00</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae,
                                            tempore.
                                        </p>
                                        <a class="btn btn-primary btn-lg" href="#">Withdraw Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-30 d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Revenue Status</h6>
                                        <div class="dashboard-dropdown">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dashboardDropdown53" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="ti-more"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dashboardDropdown53">
                                                    <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-eraser"></i>
                                                        Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-area">
                                        <div id="OrderStatistics"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body pb-4">
                                    <div class="card-title">
                                        <h4> Monthly Earnings </h4>
                                        <h6 class="text-success">$6,820</h6>
                                    </div>

                                    <div id="most-visited"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Revenue Updates</h4>
                                        <p class="mb-0">Overview of Profit</p>
                                    </div>

                                    <div id="revenue-updates"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Sales Overview</h4>
                                        <p class="mb-0">Overview of Profit</p>
                                    </div>
                                    <div id="sales-overview"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-30 d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Top Product</h6>
                                        <div class="dashboard-dropdown">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dashboardDropdown54" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="ti-more"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dashboardDropdown54">
                                                    <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-eraser"></i>
                                                        Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-list-area" id="product">
                                        <!-- Product List -->
                                        <div class="top-product-list d-flex align-items-center justify-content-between">
                                            <div class="product-meta-info d-flex align-items-center">
                                                <div class="product-img"><img src="img/shop-img/1.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <span>Sound Spekar</span>
                                                    <p class="mb-0">$365</p>
                                                </div>
                                            </div>
                                            <div class="product-number alert alert-primary rounded-pill px-3 py-1 mb-0">
                                                36k</div>
                                        </div>
                                        <!-- Product List -->
                                        <div class="top-product-list d-flex align-items-center justify-content-between">
                                            <div class="product-meta-info d-flex align-items-center">
                                                <div class="product-img"><img src="img/shop-img/2.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <span>New Camera</span>
                                                    <p class="mb-0">$879</p>
                                                </div>
                                            </div>
                                            <div class="product-number alert alert-primary rounded-pill px-3 py-1 mb-0">
                                                21k</div>
                                        </div>
                                        <!-- Product List -->
                                        <div class="top-product-list d-flex align-items-center justify-content-between">
                                            <div class="product-meta-info d-flex align-items-center">
                                                <div class="product-img"><img src="img/shop-img/3.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <span>Head Phone</span>
                                                    <p class="mb-0">$402</p>
                                                </div>
                                            </div>
                                            <div class="product-number alert alert-primary rounded-pill px-3 py-1 mb-0">
                                                110</div>
                                        </div>
                                        <!-- Product List -->
                                        <div class="top-product-list d-flex align-items-center justify-content-between">
                                            <div class="product-meta-info d-flex align-items-center">
                                                <div class="product-img"><img src="img/shop-img/4.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <span>Sound Phone</span>
                                                    <p class="mb-0">$365</p>
                                                </div>
                                            </div>
                                            <div class="product-number alert alert-primary rounded-pill px-3 py-1 mb-0">
                                                162</div>
                                        </div>
                                        <!-- Product List -->
                                        <div class="top-product-list d-flex align-items-center justify-content-between">
                                            <div class="product-meta-info d-flex align-items-center">
                                                <div class="product-img"><img src="img/shop-img/1.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <span>Sound Spekar</span>
                                                    <p class="mb-0">$748</p>
                                                </div>
                                            </div>
                                            <div class="product-number alert alert-primary rounded-pill px-3 py-1 mb-0">
                                                988</div>
                                        </div>
                                        <!-- Product List -->
                                        <div class="top-product-list d-flex align-items-center justify-content-between">
                                            <div class="product-meta-info d-flex align-items-center">
                                                <div class="product-img"><img src="img/shop-img/5.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <span>New Watch</span>
                                                    <p class="mb-0">$365</p>
                                                </div>
                                            </div>
                                            <div class="product-number alert alert-primary rounded-pill px-3 py-1 mb-0">
                                                397</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-30 d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Order Stats</h6>
                                        <div class="dashboard-dropdown">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dashboardDropdown55" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="ti-more"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dashboardDropdown55">
                                                    <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-eraser"></i>
                                                        Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chart-area">
                                        <div id="chart-donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-30 d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Shopping Cart</h6>
                                        <div class="dashboard-dropdown">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dashboardDropdown56" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="ti-more"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dashboardDropdown56">
                                                    <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-eraser"></i>
                                                        Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shiping-cart-meta-area" id="shiping">
                                        <!-- Single Progress -->
                                        <div
                                            class="shipping-cart-area d-flex align-items-center justify-content-between">
                                            <div class="shipping-progress">
                                                <label class="lable-text">Initiated</label>
                                                <div class="progress h-6" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar " style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="shipping-progress-details">
                                                <p><i class='bx bx-up-arrow'></i> 46.25%</p>
                                                <span>Session:5487</span>
                                            </div>
                                        </div>
                                        <!-- Single Progress -->
                                        <div
                                            class="shipping-cart-area d-flex align-items-center justify-content-between">
                                            <div class="shipping-progress">
                                                <label class="lable-text">Revenue
                                                    Rate</label>
                                                <div class="progress h-6" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar bg-info" style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="shipping-progress-details">
                                                <p><i class='bx bx-up-arrow'></i> 46.25%</p>
                                                <span>Session:5487</span>
                                            </div>
                                        </div>
                                        <!-- Single Progress -->
                                        <div
                                            class="shipping-cart-area d-flex align-items-center justify-content-between">
                                            <div class="shipping-progress">
                                                <label class="lable-text">Total
                                                    Product</label>
                                                <div class="progress h-6" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar bg-warning" style="width: 75%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shipping-progress-details">
                                                <p><i class='bx bx-up-arrow'></i> 46.25%</p>
                                                <span>Session:5487</span>
                                            </div>
                                        </div>
                                        <!-- Single Progress -->
                                        <div
                                            class="shipping-cart-area d-flex align-items-center justify-content-between">
                                            <div class="shipping-progress">
                                                <label class="lable-text">Revenue
                                                    Rate</label>
                                                <div class="progress h-6" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar bg-info" style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="shipping-progress-details">
                                                <p><i class='bx bx-up-arrow'></i> 46.25%</p>
                                                <span>Session:5487</span>
                                            </div>
                                        </div>
                                        <!-- Single Progress -->
                                        <div
                                            class="shipping-cart-area d-flex align-items-center justify-content-between">
                                            <div class="shipping-progress">
                                                <label class="lable-text">Initiated</label>
                                                <div class="progress h-6" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar bg-danger" style="width: 75%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shipping-progress-details">
                                                <p><i class='bx bx-up-arrow'></i> 46.25%</p>
                                                <span>Session:5487</span>
                                            </div>
                                        </div>
                                        <!-- Single Progress -->
                                        <div
                                            class="shipping-cart-area d-flex align-items-center justify-content-between">
                                            <div class="shipping-progress">
                                                <label class="lable-text">Revenue
                                                    Rate</label>
                                                <div class="progress h-6" role="progressbar"
                                                    aria-label="Example with label" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <div class="progress-bar bg-info" style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="shipping-progress-details">
                                                <p><i class='bx bx-up-arrow'></i> 46.25%</p>
                                                <span>Session:5487</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="card-title border-bootom-none mb-30 d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Top Selling Products</h6>
                                        <div class="dashboard-dropdown">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dashboardDropdown57" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="ti-more"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dashboardDropdown57">
                                                    <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-eraser"></i>
                                                        Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Sold</th>
                                                    <th>Total Sale</th>
                                                    <th>Stutas</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="d-flex align-items-center"><img class="shop-img"
                                                            src="img/shop-img/1.png" alt="">
                                                        <span>Sound Box</span>
                                                    </td>
                                                    <td>$88.49</td>
                                                    <td>$125</td>
                                                    <td class="text-success">In stock</td>
                                                    <td><a class="table-btn" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="d-flex align-items-center"><img class="shop-img"
                                                            src="img/shop-img/3.png" alt="">
                                                        <span>Head Phone</span>
                                                    </td>
                                                    <td>$88.49</td>
                                                    <td>$125</td>
                                                    <td class="text-success">In stock</td>
                                                    <td><a class="table-btn" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="d-flex align-items-center"><img class="shop-img"
                                                            src="img/shop-img/4.png" alt="">
                                                        <span>New Sound</span>
                                                    </td>
                                                    <td>$88.49</td>
                                                    <td>$125</td>
                                                    <td class="badges text-danger">Stock out</td>
                                                    <td><a class="table-btn" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="d-flex align-items-center"><img class="shop-img"
                                                            src="img/shop-img/1.png" alt="">
                                                        <span>Sound Box</span>
                                                    </td>
                                                    <td>$88.49</td>
                                                    <td>$125</td>
                                                    <td class="text-success">In stock</td>
                                                    <td><a class="table-btn" href="#">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-30 d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">User Activity</h6>
                                        <div class="dashboard-dropdown">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dashboardDropdown60" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="ti-more"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dashboardDropdown60">
                                                    <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-eraser"></i>
                                                        Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-trash"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chart-area">
                                        <div id="pie-chart"></div>
                                    </div>
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
        include pathOf('includes/pageEnd.php');
        ?>