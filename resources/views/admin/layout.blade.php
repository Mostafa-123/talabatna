<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Dec 2022 09:35:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Astra-Request</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('admin/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin//img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('admin/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('admin/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('admin/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('admin/vendors/simplebar/simplebar.min.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="assets/line.css">
    <link href="{{ asset('admin/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('admin/assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
                <script>
                    var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <!-- scrollbar removed-->
                    <div class="navbar-vertical-content">
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                            <!-- Start of side menu item -->

                            <p class="navbar-vertical-label">Home</p>
                            <hr class="navbar-vertical-line" />
                            <!-- parent pages-->
                            <span class="nav-item-wrapper">
                                <a class="nav-link label-1" href="{{ route('dashboard') }}" role="button" data-bs-toggle=""
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span data-feather="compass">
                                            </span>
                                        </span>
                                        <span class="nav-link-text-wrapper">
                                            <span class="nav-link-text">Dashboard</span>
                                        </span>
                                    </div>
                                </a>
                            </span>

                            <!-- End of side menu item -->

                            <!-- Start of side menu item -->
                            <li class="nav-item">
                                <!-- label-->
                                <p class="navbar-vertical-label">Main Structure</p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <span class="nav-item-wrapper">
                                    <a class="nav-link dropdown-indicator label-1" href="#project-management"
                                        role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="project-management">

                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon">
                                                <span class="fas fa-caret-right"></span>
                                            </div><span class="nav-link-icon">
                                                <span data-feather="clipboard"></span>
                                            </span><span class="nav-link-text">Head Count</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="project-management">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('showEmbloyee') }}" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Employees</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('showOfficeBoy') }}"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Office Boys</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('showUserStatus') }}"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Status</span></div>
                                                </a><!-- more inner pages-->
                                            </li>

                                        </ul>
                                    </div>
                                </span>
                                <!-- parent pages-->
                                <span class="nav-item-wrapper">
                                    <a class="nav-link dropdown-indicator label-1" href="#Organization-Structure" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="Organization-Structure">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span>
                                            </div>
                                            <span class="nav-link-icon"><span data-feather="Organization-Structure">
                                                </span>
                                            </span>
                                            <span class="nav-link-text">Organization Structure</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="Organization-Structure">
                                            <li class="nav-item"><a class="nav-link" href="{{route('showDepartments')}}"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Departments</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('showTitles') }}" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Titles</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </span>
                                <!-- parent pages-->
                                <!-- End of side menu item -->

                                <!-- Start of side menu item -->

                                <p class="navbar-vertical-label">Products</p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <span class="nav-item-wrapper">

                                    <a class="nav-link label-1" href="{{route('showCategories')}}" role="button"
                                       data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span data-feather="compass">
                                                </span>
                                            </span>
                                            <span class="nav-link-text-wrapper">
                                                <span class="nav-link-text">Products Categories</span>
                                            </span>
                                        </div>
                                    </a>


                                    <a class="nav-link label-1" href="{{route('showProducts')}}" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span data-feather="compass">
                                                </span>
                                            </span>
                                            <span class="nav-link-text-wrapper">
                                                <span class="nav-link-text">Products</span>
                                            </span>
                                        </div>
                                    </a>
                                </span>

                                <!-- End of side menu item -->

                                <!-- Start of side menu item -->

                                <p class="navbar-vertical-label">Requests</p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <span class="nav-item-wrapper">
                                    <a class="nav-link label-1" href="{{ route('showOrderStatus') }}" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span data-feather="compass">
                                                </span>
                                            </span>
                                            <span class="nav-link-text-wrapper">
                                                <span class="nav-link-text">Request status</span>
                                            </span>
                                        </div>
                                    </a>

                                    <a class="nav-link label-1" href="pages/starter.html" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span data-feather="compass">
                                                </span>
                                            </span>
                                            <span class="nav-link-text-wrapper">
                                                <span class="nav-link-text">All requests</span>
                                            </span>
                                        </div>
                                    </a>
                                </span>

                                <!-- End of side menu item -->

                                </span><!-- parent pages-->
                                </span>
                            </li>

                            <!-- End of side menu item -->

                            <div class="navbar-vertical-footer"><button
                                    class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                                        class="uil uil-left-arrow-to-left fs-0"></span><span
                                        class="uil uil-arrow-from-right fs-0"></span><span
                                        class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
            </nav>

            <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                            aria-controls="navbarVerticalCollapse" aria-expanded="false"
                            aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                    class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="index.html">
                            <div class="d-flex align-items-center">

                                <div class="d-flex align-items-center"><img src="{{ asset('admin/assets/img/icons/logo2.png') }}"
                                        alt="phoenix" width="50" />
                                    <p class="logo-text ms-2 d-none d-sm-block">Astra Request</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <ul class="navbar-nav navbar-nav-icons flex-row">

                        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                                href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle " src="{{ asset('admin/assets/img/team/57.png') }}" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                                aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="{{ asset('admin/assets/img/team/57.png') }}"
                                                    alt="" />
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900" data-feather="user"></span>Profile</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                                        class="me-2 text-900"
                                                        data-feather="pie-chart"></span>Dashboard</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <br />
                                        <div class="px-3"> <a
                                                class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                href="#!"> <span class="me-2" data-feather="log-out">
                                                </span>Sign out</a></div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                            aria-controls="navbarVerticalCollapse" aria-expanded="false"
                            aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                    class="toggle-line"></span></span></button>
                        <a class="navbar-brand navbar-brand" href="index.html">phoenix <span
                                class="text-1000">slim</span></a>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse"
                        aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                            class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

                </div>
                <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                    id="navbarToplCollapse">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="dashboards">Dashboard</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                                        href="index.html">E commerce</a><a class="dropdown-item fw-semi-bold"
                                        href="dashboard/project-management.html">Project management</a><a
                                        class="dropdown-item fw-semi-bold" href="landing.html">Landing</a><a
                                        class="dropdown-item fw-semi-bold" href="apps/social/feed.html">Social
                                        feed</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="appss">Apps</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Admin</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/add-product.html">Add product</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/products.html">Products</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/customers.html">Customers</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/customer-details.html">Customer
                                                        details</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/orders.html">Orders</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/order-details.html">Order
                                                        details</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/refund.html">Refund</a>
                                                    <p class="nav-link mb-0 fw-bold">Landing</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/homepage.html">Homepage</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/product-details.html">Product
                                                        details</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/products-filter.html">Products
                                                        filter</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/cart.html">Cart</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/checkout.html">Checkout</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/shipping-info.html">Shipping
                                                        info</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/profile.html">Profile</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/favourite-stores.html">Favourite
                                                        stores</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/order-tracking.html">Order
                                                        tracking</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Projects</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/project-management/create-new.html">Create new</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-list-view.html">Project
                                                        list view</a><a class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-card-view.html">Project
                                                        card view</a><a class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-board-view.html">Project
                                                        board view</a><a class="nav-link fw-semi-bold"
                                                        href="apps/project-management/todo-list.html">Todo list</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-details.html">Project
                                                        details</a>
                                                    <p class="nav-link mb-0 fw-bold">Email</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/email/inbox.html">Inbox</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/email/email-detail.html">Email detail</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/email/compose.html">Compose</a>
                                                    <p class="nav-link mb-0 fw-bold">Events</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/events/create-an-event.html">Create an event</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/events/event-detail.html">Event detail</a>
                                                    <p class="nav-link mb-0 fw-bold">Social</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/social/profile.html">Profile</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/social/settings.html">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="pagess">Pages</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                                        href="pages/starter.html">Starter</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/faq.html">Faq</a>
                                                    <p class="nav-link mb-0 fw-bold">Pricing</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/pricing/pricing-column.html">Pricing
                                                        column</a><a class="nav-link fw-semi-bold"
                                                        href="pages/pages/pricing/pricing-grid.html">Pricing grid</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/notifications.html">Notifications</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/members.html">Members</a>
                                                    <p class="nav-link mb-0 fw-bold">Split</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/sign-in.html">Sign in</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/sign-up.html">Sign up</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/sign-out.html">Sign out</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/forgot-password.html">Forgot
                                                        password</a><a class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/reset-password.html">Reset
                                                        password</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Errors</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/errors/404.html">404</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/errors/500.html">500</a>
                                                    <p class="nav-link mb-0 fw-bold">Simple</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/sign-in.html">Sign in</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/sign-up.html">Sign up</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/sign-out.html">Sign out</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/forgot-password.html">Forgot
                                                        password</a><a class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/reset-password.html">Reset
                                                        password</a><a class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="moduless">Modules</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/form-control.html">Form control</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/input-group.html">Input group</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/select.html">Select</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/checks.html">Checks</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/range.html">Range</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/floating-labels.html">Floating
                                                        labels</a><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/layout.html">Layout</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/advance-select.html">Advance
                                                        select</a><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/date-picker.html">Date picker</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/editor.html">Editor</a></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/file-uploader.html">File
                                                        uploader</a><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/rating.html">Rating</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/wizard.html">Wizard</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/icons/feather.html">Feather</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/icons/font-awesome.html">Font awesome</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/icons/unicons.html">Unicons</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/tables/basic-tables.html">Basic tables</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/tables/advance-tables.html">Advance tables</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/components/accordion.html">Accordion</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/components/avatar.html">Avatar</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Documentation</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                                        href="documentation/getting-started.html">Getting started</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/customization/styling.html">Styling</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/customization/plugin.html">Plugin</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/layouts/vertical-navbar.html">Vertical navbar</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/layouts/horizontal-navbar.html">Horizontal navbar</a><a
                                        class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/design-file.html">Design file</a><a
                                        class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a><a
                                        class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons flex-row">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-icon-wait px-2"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                    </li>



                </ul>
            </nav>

            <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew"
                style="display:none;">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse"
                        aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                            class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand navbar-brand" href="index.html">phoenix <span
                            class="text-1000">slim</span></a>
                </div>
                <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                    id="navbarToplCollapse">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="dashboards">Dashboard</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                                        href="index.html">E commerce</a><a class="dropdown-item fw-semi-bold"
                                        href="dashboard/project-management.html">Project management</a><a
                                        class="dropdown-item fw-semi-bold" href="landing.html">Landing</a><a
                                        class="dropdown-item fw-semi-bold" href="apps/social/feed.html">Social
                                        feed</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="appss">Apps</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Admin</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/add-product.html">Add product</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/products.html">Products</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/customers.html">Customers</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/customer-details.html">Customer
                                                        details</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/orders.html">Orders</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/order-details.html">Order
                                                        details</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/admin/refund.html">Refund</a>
                                                    <p class="nav-link mb-0 fw-bold">Landing</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/homepage.html">Homepage</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/product-details.html">Product
                                                        details</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/products-filter.html">Products
                                                        filter</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/cart.html">Cart</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/checkout.html">Checkout</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/shipping-info.html">Shipping
                                                        info</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/profile.html">Profile</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/favourite-stores.html">Favourite
                                                        stores</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/order-tracking.html">Order
                                                        tracking</a><a class="nav-link fw-semi-bold"
                                                        href="apps/e-commerce/landing/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Projects</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/project-management/create-new.html">Create new</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-list-view.html">Project
                                                        list view</a><a class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-card-view.html">Project
                                                        card view</a><a class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-board-view.html">Project
                                                        board view</a><a class="nav-link fw-semi-bold"
                                                        href="apps/project-management/todo-list.html">Todo list</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/project-management/project-details.html">Project
                                                        details</a>
                                                    <p class="nav-link mb-0 fw-bold">Email</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/email/inbox.html">Inbox</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/email/email-detail.html">Email detail</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/email/compose.html">Compose</a>
                                                    <p class="nav-link mb-0 fw-bold">Events</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/events/create-an-event.html">Create an event</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/events/event-detail.html">Event detail</a>
                                                    <p class="nav-link mb-0 fw-bold">Social</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/social/profile.html">Profile</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="apps/social/settings.html">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="pagess">Pages</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                                        href="pages/starter.html">Starter</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/faq.html">Faq</a>
                                                    <p class="nav-link mb-0 fw-bold">Pricing</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/pricing/pricing-column.html">Pricing
                                                        column</a><a class="nav-link fw-semi-bold"
                                                        href="pages/pages/pricing/pricing-grid.html">Pricing grid</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/notifications.html">Notifications</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/pages/members.html">Members</a>
                                                    <p class="nav-link mb-0 fw-bold">Split</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/sign-in.html">Sign in</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/sign-up.html">Sign up</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/sign-out.html">Sign out</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/forgot-password.html">Forgot
                                                        password</a><a class="nav-link fw-semi-bold"
                                                        href="pages/authentication/split/reset-password.html">Reset
                                                        password</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Errors</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/errors/404.html">404</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/errors/500.html">500</a>
                                                    <p class="nav-link mb-0 fw-bold">Simple</p><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/sign-in.html">Sign in</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/sign-up.html">Sign up</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/sign-out.html">Sign out</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/forgot-password.html">Forgot
                                                        password</a><a class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/reset-password.html">Reset
                                                        password</a><a class="nav-link fw-semi-bold"
                                                        href="pages/authentication/simple/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="moduless">Modules</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/form-control.html">Form control</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/input-group.html">Input group</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/select.html">Select</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/checks.html">Checks</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/range.html">Range</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/floating-labels.html">Floating
                                                        labels</a><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/basic/layout.html">Layout</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/advance-select.html">Advance
                                                        select</a><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/date-picker.html">Date picker</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/editor.html">Editor</a></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/file-uploader.html">File
                                                        uploader</a><a class="nav-link fw-semi-bold"
                                                        href="modules/forms/advance/rating.html">Rating</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/forms/wizard.html">Wizard</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/icons/feather.html">Feather</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/icons/font-awesome.html">Font awesome</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/icons/unicons.html">Unicons</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/tables/basic-tables.html">Basic tables</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/tables/advance-tables.html">Advance tables</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/components/accordion.html">Accordion</a><a
                                                        class="nav-link fw-semi-bold"
                                                        href="modules/components/avatar.html">Avatar</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Documentation</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                                        href="documentation/getting-started.html">Getting started</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/customization/styling.html">Styling</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/customization/plugin.html">Plugin</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/layouts/vertical-navbar.html">Vertical navbar</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/layouts/horizontal-navbar.html">Horizontal navbar</a><a
                                        class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a><a
                                        class="dropdown-item fw-semi-bold"
                                        href="documentation/design-file.html">Design file</a><a
                                        class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a><a
                                        class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a></div>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>

            <!-- Page Title -->
            <div class="content">
                <div class="pb-5">
                    <div class="row g-4">
                        <div class="col-12 col-xxl-6">
                            <div class="mb-8">

                                @yield('header')

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-y border-300">
                    <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
                        <div class="row align-items-end justify-content-between pb-5 g-3">

                            @yield('content')

                        </div>
                    </div>
                </div>

                <footer class="footer position-absolute">
                    <div class="row g-0 justify-content-between align-items-center h-100">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                                    class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br
                                    class="d-sm-none" />2022 &copy;<a class="ms-1"
                                    href="https://themewagon.com/">Themewagon</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.6.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
            var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTopNew = document.querySelector('#navbarTopNew');
            var navbarSlim = document.querySelector('#navbarSlim');
            var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault.remove();
                navbarTopNew.remove();
                navbarTopSlimNew.remove();
                navbarSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarVertical.remove();
                navbarTopNew.remove();
                navbarSlim.remove();
                navbarTopSlimNew.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarSlim.remove();
                navbarVertical.remove();
                navbarTopSlimNew.remove();
                navbarTopNew.removeAttribute('style');
                documentElement.classList.add('navbar-horizontal')

            } else {
                body.classList.remove('nav-slim');
                navbarSlim.remove();
                navbarTopNew.remove();
                navbarTopSlimNew.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('admin/vendors/popper/popper.min.j') }}s"></script>
    <script src="{{ asset('admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('admin/assets/polyfill.min58be.j') }}s"></script>
    <script src="{{ asset('admin/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('admin/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/index.min.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&amp;callback=revenueMapInit"
        async></script>
    <script src="{{ asset('admin/assets/js/ecommerce-dashboard.js') }}"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Dec 2022 09:36:07 GMT -->

</html>
