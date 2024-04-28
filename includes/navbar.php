<!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
<div class="flapt-page-wrapper">
    <!-- Top Header Area -->
    <div class="container">
        <header class="top-header-area top-menu-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Top Logo -->
                    <div class="top-logo">
                        <a href="index-2.html"><img src="<?= urlOf('assets/img/core-img/small-logo.png') ?>"
                                alt="Top Logo"></a>

                    </div>

                    <!-- Left Side Nav -->
                    <ul class="left-side-navbar d-flex align-items-center">
                        <b>FreshFusion</b>
                    </ul>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger me-0" id="rightSideTrigger">
                        <i class='bx bx-menu-alt-right'></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img
                                    src="<?= urlOf('assets/img/bg-img/person_1.jpg') ?>" alt=""></button>
                            <div class="dropdown-menu profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="#" class="dropdown-item"><i class="bx bx-user font-15"
                                            aria-hidden="true"></i>Users</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-power-off font-15"
                                            aria-hidden="true"></i> Sign-out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-top my-3"></div>

            <!-- Classy Nav -->
            <div class="classy-nav-container breakpoint-off">
                <nav class="classy-navbar justify-content-between" id="classyNav">
                    <div class="classy-navbar-toggler">
                        <i class="fa fa-bars me-2" aria-hidden="true"></i>
                        <span>Menu</span>
                    </div>

                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="#">Shop</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= urlOf('pages/categories') ?>">Categorie</a></li>
                                        <li><a href="<?= urlOf('pages/product') ?>">Products</a></li>
                                        <li><a href="<?= urlOf('pages/purchase') ?>">Purchase</a></li>
                                        <li><a href="<?= urlOf('pages/sales') ?>">Sales</a></li>
                                        <li><a href="<?= urlOf('pages/stocks') ?>">Stocks</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= urlOf('pages/expanses') ?>">Expanses</a></li>
                                <li><a href="<?= urlOf('pages/user') ?>">Users</a></li>
                                <li><a href="<?= urlOf('pages/modules') ?>">Modules</a></li>
                                <li><a href="<?= urlOf('pages/city') ?>">City</a></li>
                                <li><a href="<?= urlOf('pages/branchdetails') ?>">BranchDetails</a></li>
                                <li><a href="<?= urlOf('pages/role') ?>">Roles</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>