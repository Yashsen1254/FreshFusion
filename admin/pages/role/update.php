<?php
require ('../../includes/init.php');
include pathOf('admin/includes/header.php');
include pathOf('admin/includes/navbar.php');
?>

<div class="main-content">
    <div class="content-wraper-area">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="nav flex-column nav-pills me-3 account-tab" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">General</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Notifications</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">Billing &
                                    Payments</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">Team
                                    Members</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="card mb-4">
                                <div class="card-header-cu">
                                    <h6 class="mb-0">Basic information</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                                            <div class="account-img">
                                                <img src="img/bg-img/per-3.jpg" alt="">
                                            </div>
                                            <div>
                                                <h6>
                                                    Ajoy Das
                                                </h6>
                                                <span class="fs-sm text-muted">
                                                    ( Upload a PNG or JPG, size limit is 15 MB. )
                                                </span>
                                                <div class="mt-3">
                                                    <a href="#!" class="btn btn-sm btn-primary">Upload</a>
                                                    <a href="#!" class="btn btn-sm btn-danger ms-md-2">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">First name</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input"
                                                        placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <input type="text" class="form-control" id="formrow-last-input"
                                                        placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="formrow-email-input"
                                                        placeholder="exple@98.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone number</label>
                                                    <input type="text" class="form-control" id="formrow-phone-input"
                                                        placeholder="+888 222 544">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Bio</label>
                                                    <textarea rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="submit" class="btn btn-primary" value="Save changes">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header-cu">
                                    <h6 class="mb-0">Change your password</h6>
                                </div>

                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Current password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm new password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2" value="Update password">
                                    </form>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header-cu">
                                    <h6 class="card-header-title text-danger">
                                        Delete your account
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <p><strong>Alert</strong>: Once you delete your account, there is no
                                            going back.
                                        </p>
                                        <input type="submit" class="btn btn-danger mt-2" value="Delete your account">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="card mb-25">
                                <div class="card-header-cu d-flex align-items-center justify-content-between">
                                    <h6>Account notifications</h6>
                                    <a href="#!" class="btn btn-primary">Disable all</a>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters border-bottom pb-4">
                                        <div class="col">
                                            jhon mentions me with a <span class="text-primary">@work</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="switch1">
                                                <label class="form-check-label" for="switch1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters border-bottom py-4">
                                        <div class="col">
                                            jhon mentions me with.
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="switch2" checked="">
                                                <label class="form-check-label" for="switch2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters border-bottom py-4">
                                        <div class="col">
                                            jhon mentions me with.
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="switch3" checked="">
                                                <label class="form-check-label" for="switch3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters pt-4">
                                        <div class="col">
                                            jhon mentions me with.
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="switch4">
                                                <label class="form-check-label" for="switch4"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header-cu d-flex align-items-center justify-content-between">
                                    <h6> Marketing notifications</h6>
                                    <a href="#!" class="btn btn-primary">Disable all</a>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters border-bottom pb-4">
                                        <div class="col">
                                            Suscribe to offers and discounts
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="switch5" checked="">
                                                <label class="form-check-label" for="switch5"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters align-items-center border-bottom py-4">
                                        <div class="col-8 col-md-9">
                                            Receive the newsletter
                                        </div>
                                        <div class="col-4 col-md-3">
                                            <select class="w-100">
                                                <option>Daily</option>
                                                <option>Weekly</option>
                                                <option>Monthly</option>
                                                <option>Unsubscribe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row no-gutters pt-4">
                                        <div class="col">
                                            Product updates
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="switch6">
                                                <label class="form-check-label" for="switch6"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab" tabindex="0">

                            <div class="card mb-25">
                                <div class="card-header-cu d-flex align-items-center justify-content-between">
                                    <h6>Present plan</h6>
                                    <a href="#!" class="btn btn-primary">Change Plan</a>
                                </div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="sub-plan-text">
                                        <h6>Premium suscription</h6>
                                        <h4 class="font-weigth-bold mb-0"><span class="text-primary">$49.00</span> per
                                            month</h4>
                                    </div>
                                    <p class="text-uppercase-xs mt-4 mb-0">
                                        <i class="fa fa-check-circle fa-lg text-success me-1"></i>
                                        Your plan renews on Nov 16, 2023
                                    </p>
                                </div>
                            </div>

                            <div class="card mb-25">
                                <div class="card-header-cu d-flex align-items-center justify-content-between">
                                    <h6>Payment methods</h6>
                                    <a href="#!" class="btn btn-primary">Add new</a>
                                </div>

                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div class="svg-icon svg-icon-xl me-2 relative-top--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500"
                                                    viewBox="0 0 141.732 141.732">
                                                    <g fill="#2566af">
                                                        <path
                                                            d="M62.935 89.571h-9.733l6.083-37.384h9.734zM45.014 52.187L35.735 77.9l-1.098-5.537.001.002-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s4.691.976 10.181 4.273l8.456 32.479h10.141l15.485-37.385H45.014zM121.569 89.571h8.937l-7.792-37.385h-7.824c-3.613 0-4.493 2.786-4.493 2.786L95.881 89.571h10.146l2.029-5.553h12.373l1.14 5.553zm-10.71-13.224l5.114-13.99 2.877 13.99h-7.991zM96.642 61.177l1.389-8.028s-4.286-1.63-8.754-1.63c-4.83 0-16.3 2.111-16.3 12.376 0 9.658 13.462 9.778 13.462 14.851s-12.075 4.164-16.06.965l-1.447 8.394s4.346 2.111 10.986 2.111c6.642 0 16.662-3.439 16.662-12.799 0-9.72-13.583-10.625-13.583-14.851.001-4.227 9.48-3.684 13.645-1.389z">
                                                        </path>
                                                    </g>
                                                    <path
                                                        d="M34.638 72.364l-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s7.373 1.528 14.445 7.253c6.762 5.472 8.967 12.292 8.967 12.292z"
                                                        fill="#e6a540"></path>
                                                    <path fill="none" d="M0 0h141.732v141.732H0z"></path>
                                                </svg>
                                            </div>
                                            <span class="badge text-bg-primary ms-3">DEFAULT</span>
                                        </div>
                                        <div
                                            class="col-md-6 d-flex justify-content-between align-items-center mt-3 mt-md-0">
                                            <span class="text-uppercase-xs">
                                                Expires 08/2028
                                            </span>

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
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header-cu">
                                    <h6 class="card-header-title text-darkblue">
                                        Invoice history
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex invoice-list-account">
                                            <a href="#!">
                                                Oct 26, 2023
                                            </a>
                                            <span class="ms-4">Premium Suscription</span>
                                            <span class="ms-auto text-primary">$36.00</span>
                                        </li>
                                        <li class="list-group-item d-flex invoice-list-account">
                                            <a href="#!">
                                                Aug 26, 2023
                                            </a>
                                            <span class="ms-4">Premium Suscription</span>
                                            <span class="ms-auto text-primary">$39.00</span>
                                        </li>
                                        <li class="list-group-item d-flex invoice-list-account">
                                            <a href="#!">
                                                Jul 26, 2023
                                            </a>
                                            <span class="ms-4">Premium Suscription</span>
                                            <span class="ms-auto text-primary">$29.00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <div class="card">
                                <div class="card-header-cu d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0">9 Members</h6>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">New
                                        User</button>

                                </div>

                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/person_1.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>

                                            <select class="form-select account">
                                                <option>Admin</option>
                                                <option>Staff</option>
                                                <option>Designer</option>
                                                <option>Developer</option>
                                            </select>

                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown1" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown1">
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
                                        </li>

                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/per-3.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>

                                            <select class="form-select account">
                                                <option>Admin</option>
                                                <option>Staff</option>
                                                <option>Designer</option>
                                                <option>Developer</option>
                                            </select>

                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown2" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown2">
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
                                        </li>

                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/per-2.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>

                                            <select class="form-select account">
                                                <option>Admin</option>
                                                <option>Staff</option>
                                                <option>Designer</option>
                                                <option>Developer</option>
                                            </select>

                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown4" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown4">
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
                                        </li>

                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/person_1.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>

                                            <select class="form-select account">
                                                <option>Admin</option>
                                                <option>Staff</option>
                                                <option>Designer</option>
                                                <option>Developer</option>
                                            </select>

                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown8" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown8">
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
                                        </li>

                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/per-3.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>

                                            <select class="form-select account">
                                                <option>Admin</option>
                                                <option>Staff</option>
                                                <option>Designer</option>
                                                <option>Developer</option>
                                            </select>

                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown5" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown5">
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
                                        </li>

                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/per-2.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>
                                            <select class="form-select account" data-display="Select">
                                                <option selected>Admin</option>
                                                <option value="1">Staff</option>
                                                <option value="4">Designer</option>
                                                <option value="5">Developer</option>
                                            </select>
                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown10" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown10">
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


                                        </li>
                                        <li
                                            class="list-group-item account-members-list d-md-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="account-member-img">
                                                    <img src="img/bg-img/person_1.jpg" alt="">
                                                </div>
                                                <div class="flex-1 mt-3 mt-md-0">
                                                    <div class="fw-bold">
                                                        Joan Didion
                                                    </div>
                                                    <span class="text-muted">
                                                        joan@foresight.com
                                                    </span>
                                                </div>
                                            </div>

                                            <select class="form-select account">
                                                <option>Admin</option>
                                                <option>Staff</option>
                                                <option>Designer</option>
                                                <option>Developer</option>
                                            </select>

                                            <div class="dashboard-dropdown">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button"
                                                        id="dashboardDropdown6" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="ti-more"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dashboardDropdown6">
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
                                        </li>

                                    </ul>
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