<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Modal Examples - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-wizard.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/modal-create-app.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon"
                                data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                        href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                            English</a><a class="dropdown-item" href="#" data-language="fr"><i
                                class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"
                            data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                            href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span
                            class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                <div class="badge rounded-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="app-assets/images/pages/eCommerce/1.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Apple watch 5</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Google Home Mini</a></h6><small
                                            class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="3">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="2">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iMac Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> MacBook Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="app-assets/images/portrait/small/avatar-s-15.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                        </p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                                notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40"
                                width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                            Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50"
                                data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item"
                            href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a><a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a
                            class="dropdown-item" href="auth-login-cover.html"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i
                            data-feather="mail"></i><span class="menu-title text-truncate"
                            data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                            data-feather="message-square"></i><span class="menu-title text-truncate"
                            data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><i
                            data-feather="check-square"></i><span class="menu-title text-truncate"
                            data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i
                            data-feather="calendar"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i
                            data-feather="grid"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Kanban</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i
                            data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">File
                            Manager</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shield"></i><span
                            class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Roles &amp;
                            Permission</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-access-roles.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Roles">Roles</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-access-permission.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Permission">Permission</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="shopping-cart"></i><span class="menu-title text-truncate"
                            data-i18n="eCommerce">eCommerce</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Details">Details</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span
                            class="menu-title text-truncate" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="View">View</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="app-user-view-account.html"><span
                                            class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-security.html"><span
                                            class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-billing.html"><span
                                            class="menu-item text-truncate" data-i18n="Billing &amp; Plans">Billing
                                            &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-notifications.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-connections.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Account Settings">Account
                                    Settings</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-account-settings-account.html"><span
                                            class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-security.html"><span class="menu-item text-truncate"
                                            data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-billing.html"><span
                                            class="menu-item text-truncate" data-i18n="Billings &amp; Plans">Billings
                                            &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-notifications.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-connections.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-license.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="License">License</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-api-key.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="API Key">API Key</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span
                                            class="menu-item text-truncate" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span
                                            class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span
                                            class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Welcome">Welcome</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Reset Password">Reset Password</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Verify Email">Verify Email</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Deactivate Account">Deactivate Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Promotional">Promotional</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="user-check"></i><span class="menu-title text-truncate"
                            data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Login">Login</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-login-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-login-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Register">Register</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-register-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-multisteps.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Multi-Steps">Multi-Steps</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Forgot Password">Forgot
                                    Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-reset-password-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-reset-password-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-verify-email-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-verify-email-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Two Steps">Two Steps</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-two-steps-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-two-steps-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="active nav-item"><a class="d-flex align-items-center" href="modal-examples.html"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Modal Examples</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-typography.html"><i
                            data-feather="type"></i><span class="menu-title text-truncate"
                            data-i18n="Typography">Typography</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-feather.html"><i
                            data-feather="eye"></i><span class="menu-title text-truncate"
                            data-i18n="Feather">Feather</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="credit-card"></i><span class="menu-title text-truncate"
                            data-i18n="Card">Card</span><span
                            class="badge badge-light-success rounded-pill ms-auto me-1">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="briefcase"></i><span class="menu-title text-truncate"
                            data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="component-accordion.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Accordion">Accordion</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-alerts.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-avatar.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-badges.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-breadcrumbs.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-buttons.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-carousel.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-collapse.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-divider.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Divider">Divider</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-dropdowns.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-list-group.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-modals.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-navs-component.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-offcanvas.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Offcanvas">Offcanvas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pagination.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pill-badges.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pills-component.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-popovers.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-progress.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-spinner.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tabs-component.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-timeline.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-bs-toast.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tooltips.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span
                            class="menu-title text-truncate" data-i18n="Extensions">Extensions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="ext-component-sweet-alerts.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Sweet Alert">Sweet Alert</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-blockui.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Block UI">BlockUI</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-toastr.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Toastr">Toastr</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-sliders.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Sliders">Sliders</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-drag-drop.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tour.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-clipboard.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Clipboard">Clipboard</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-media-player.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Media player">Media Player</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-context-menu.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Context Menu">Context Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-swiper.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="swiper">Swiper</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tree.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tree">Tree</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-ratings.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-i18n.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="l18n">l18n</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span
                            class="menu-title text-truncate" data-i18n="Page Layouts">Page Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="layout-collapsed-menu.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-full.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Full">Layout Full</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-without-menu.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Without Menu">Without Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-empty.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Empty">Layout Empty</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-blank.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Blank">Layout Blank</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="copy"></i><span
                            class="menu-title text-truncate" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="form-input.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input">Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-groups.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-mask.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input Mask">Input Mask</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-textarea.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-checkbox.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-radio.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-custom-options.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Custom Options">Custom Options</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-switch.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-select.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Select">Select</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-number-input.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-file-uploader.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-quill-editor.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-layout.html"><i
                            data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Form Layout">Form
                            Layout</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><i
                            data-feather="package"></i><span class="menu-title text-truncate"
                            data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><i
                            data-feather="check-circle"></i><span class="menu-title text-truncate"
                            data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-repeater.html"><i
                            data-feather="rotate-cw"></i><span class="menu-title text-truncate"
                            data-i18n="Form Repeater">Form Repeater</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="table-bootstrap.html"><i
                            data-feather="server"></i><span class="menu-title text-truncate"
                            data-i18n="Table">Table</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                            class="menu-title text-truncate" data-i18n="Datatable">Datatable</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="table-datatable-basic.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="table-datatable-advanced.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Advanced">Advanced</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="pie-chart"></i><span class="menu-title text-truncate"
                            data-i18n="Charts">Charts</span><span
                            class="badge badge-light-danger rounded-pill ms-auto me-2">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="chart-apex.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="chart-chartjs.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><i
                            data-feather="map"></i><span class="menu-title text-truncate"
                            data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Misc">Misc</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                            class="menu-title text-truncate" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.1</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.2</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate"
                                            data-i18n="Third Level">Third Level 3.1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate"
                                            data-i18n="Third Level">Third Level 3.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="eye-off"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center"
                        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                        target="_blank"><i data-feather="folder"></i><span class="menu-title text-truncate"
                            data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/"
                        target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate"
                            data-i18n="Raise Support">Raise Support</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Modal Examples</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Modal Examples
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="modal-examples">
                    <div class="row">
                        <!-- share project card -->
                        <!-- edit user  -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i data-feather="user" class="font-large-2 mb-1"></i>
                                    <h5 class="card-title">Pricing</h5>
                                    <!-- modal trigger button -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editUser">Show</button>
                                </div>
                            </div>
                        </div>
                        <!-- / edit user  -->
                    </div>
                </section>
                <!-- share project modal -->
                <div class="modal fade" id="shareProject" tabindex="-1" aria-labelledby="shareProjectTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-4">
                                <h1 class="text-center mb-1" id="shareProjectTitle">Share Project</h1>
                                <p class="text-center">Share project with a team members</p>

                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">
                                    Add members </label>
                                <select class="select2 form-select" id="addMemberSelect">
                                    <option value="" label="Add project members by name or email..."></option>
                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson
                                    </option>
                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                    <option data-avatar="9-small.png" value="Sandy Vega">Sandy Vega</option>
                                    <option data-avatar="11-small.png" value="Cheryl May">Cheryl May</option>
                                </select>

                                <p class="fw-bolder pt-50 mt-2">12 Members</p>

                                <!-- member's list  -->
                                <ul class="list-group list-group-flush mb-2">
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Lester Palmer</h5>
                                                <span>pe@vogeiz.net</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can edit</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member1">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Mittie Blair</h5>
                                                <span>peromak@zukedohik.gov</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Owner</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member2">
                                                    <li><a class="dropdown-item active"
                                                            href="javascript:void(0)">Owner</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-5.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Marvin Wheeler</h5>
                                                <span>rumet@jujpejah.net</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can comment</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member3">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Nannie Ford</h5>
                                                <span>negza@nuv.io</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member4" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can view</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member4">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Julian Murphy</h5>
                                                <span>lunebame@umdomgu.net</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member5" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can edit</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member5">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-10.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Sophie Gilbert</h5>
                                                <span>ha@sugit.gov</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member6" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can view</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member6">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Chris Watkins</h5>
                                                <span>zokap@mak.org</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member7" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can comment</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member7">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-start border-0 px-0">
                                        <div class="avatar me-75">
                                            <img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="avatar"
                                                width="38" height="38" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="me-1">
                                                <h5 class="mb-25">Adelaide Nichols</h5>
                                                <span>ujinomu@jigo.com</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-flat-secondary dropdown-toggle" type="button"
                                                    id="member8" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="d-none d-lg-inline-block">Can edit</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="member8">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Owner</a>
                                                    </li>
                                                    <li><a class="dropdown-item active" href="javascript:void(0)">Can
                                                            edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can
                                                            comment</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Can view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ member's list  -->

                                <!-- project link -->
                                <div class="d-flex align-content-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center me-2">
                                        <i data-feather="users" class="font-medium-2 me-50"></i>
                                        <p class="fw-bolder mb-0">Public to Vuexy - Pixinvent</p>
                                    </div>

                                    <a href="javascript:void(0)" class="fw-bolder">
                                        <i data-feather="link" class="font-medium-2 me-50"></i>
                                        <span>Copy project link</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / share project modal -->
                <!-- add new card modal  -->
                <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <h1 class="text-center mb-1" id="addNewCardTitle">Add New Card</h1>
                                <p class="text-center">Add card for future billing</p>

                                <!-- form -->
                                <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false">
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddCardNumber">Card Number</label>
                                        <div class="input-group input-group-merge">
                                            <input id="modalAddCardNumber" name="modalAddCard"
                                                class="form-control add-credit-card-mask" type="text"
                                                placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2"
                                                data-msg="Please enter your credit card number" />
                                            <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                                <span class="add-card-type"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="modalAddCardName">Name On Card</label>
                                        <input type="text" id="modalAddCardName" class="form-control"
                                            placeholder="John Doe" />
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                                        <input type="text" id="modalAddCardExpiryDate"
                                            class="form-control add-expiry-date-mask" placeholder="MM/YY" />
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label class="form-label" for="modalAddCardCvv">CVV</label>
                                        <input type="text" id="modalAddCardCvv" class="form-control add-cvv-code-mask"
                                            maxlength="3" placeholder="654" />
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check form-switch form-check-primary me-25">
                                                <input type="checkbox" class="form-check-input" id="saveCard" checked />
                                                <label class="form-check-label" for="saveCard">
                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                </label>
                                            </div>
                                            <label class="form-check-label fw-bolder" for="saveCard">Save Card for
                                                future billing?</label>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ add new card modal  -->
                <!-- pricing modal  -->
                <div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <div id="pricing-plan">
                                    <!-- title text and switch button -->
                                    <div class="text-center">
                                        <h1 id="pricingModalTitle">Subscription Plan</h1>
                                        <p class="mb-3">
                                            All plans include 40+ advanced tools and features to boost your product.
                                            Choose the best plan to fit your
                                            needs.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-center mb-2 pb-50">
                                            <h6 class="me-1 mb-0">Monthly</h6>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="priceSwitch" />
                                                <label class="form-check-label" for="priceSwitch"></label>
                                            </div>
                                            <h6 class="ms-50 mb-0">Annually</h6>
                                        </div>
                                    </div>
                                    <!--/ title text and switch button -->

                                    <!-- pricing plan cards -->
                                    <div class="row pricing-card">
                                        <!-- basic plan -->
                                        <div class="col-12 col-lg-4">
                                            <div class="card basic-pricing border text-center shadow-none">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot1.svg" class="mb-2 mt-5"
                                                        alt="svg img" />
                                                    <h3>Basic</h3>
                                                    <p class="card-text">A simple start for everyone</p>
                                                    <div class="annual-plan my-2">
                                                        <div class="d-flex justify-content-center plan-price">
                                                            <sup
                                                                class="d-block font-medium-1 fw-bold text-primary mt-2">$</sup>
                                                            <span
                                                                class="pricing-basic-value fw-bolder text-primary font-large-3 lh-1">0</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold mt-3">/month</sub>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start fw-bold">
                                                        <li class="list-group-item">100 responses a month</li>
                                                        <li class="list-group-item">Unlimited forms and surveys</li>
                                                        <li class="list-group-item">Unlimited fields</li>
                                                        <li class="list-group-item">Basic form creation tools</li>
                                                        <li class="list-group-item">Up to 2 subdomains</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-success mt-2">Your current
                                                        plan</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ basic plan -->

                                        <!-- standard plan -->
                                        <div class="col-12 col-lg-4">
                                            <div class="card standard-pricing border-primary text-center shadow-none">
                                                <div class="card-body">
                                                    <div class="pricing-badge text-end">
                                                        <span
                                                            class="badge rounded-pill badge-light-primary">Popular</span>
                                                    </div>
                                                    <img src="app-assets/images/illustration/Pot2.svg" class="mb-1"
                                                        alt="svg img" />
                                                    <h3>Standard</h3>
                                                    <p class="card-text">For small to medium businesses</p>
                                                    <div class="annual-plan my-2">
                                                        <div class="d-flex justify-content-center plan-price">
                                                            <sup
                                                                class="d-block font-medium-1 fw-bold text-primary mt-2">$</sup>
                                                            <span
                                                                class="pricing-standard-value fw-bolder text-primary font-large-3 lh-1">49</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold mt-3">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start fw-bold">
                                                        <li class="list-group-item">Unlimited responses</li>
                                                        <li class="list-group-item">Unlimited forms and surveys</li>
                                                        <li class="list-group-item">Instagram profile page</li>
                                                        <li class="list-group-item">Google Docs integration</li>
                                                        <li class="list-group-item">Custom “Thank you” page</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ standard plan -->

                                        <!-- enterprise plan -->
                                        <div class="col-12 col-lg-4">
                                            <div class="card enterprise-pricing border text-center shadow-none">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan my-2">
                                                        <div class="d-flex justify-content-center plan-price">
                                                            <sup
                                                                class="d-block font-medium-1 fw-bold text-primary mt-2">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary font-large-3 lh-1">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold mt-3">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start fw-bold">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ enterprise plan -->
                                    </div>
                                    <!--/ pricing plan cards -->

                                    <!-- pricing free trial -->
                                    <div class="text-center">
                                        <p>Still not convinced? Start with a 14-day FREE trial!</p>
                                        <button class="btn btn-primary">Start your trial</button>
                                    </div>
                                    <!--/ pricing free trial -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing modal  -->
                <!-- refer and earn modal -->
                <div class="modal fade" id="referEarnModal" tabindex="-1" aria-labelledby="referEarnTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg modal-refer-earn">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-0">
                                <div class="px-sm-4 mx-50">
                                    <h1 class="text-center mb-1" id="referEarnTitle">Refer & Earn</h1>
                                    <p class="text-center mb-5">
                                        Invite your friend to vuexy, if thay sign up, you and
                                        <br />
                                        your friend will get 30 days free trial
                                    </p>

                                    <div class="row mb-4">
                                        <div class="col-12 col-lg-4">
                                            <div class="d-flex justify-content-center mb-1">
                                                <div class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  ">
                                                    <i data-feather="message-square"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h6 class="fw-bolder mb-1">Send Invitation 🤟🏻</h6>
                                                <p>Send your referral link to your friend</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="d-flex justify-content-center mb-1">
                                                <div class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  ">
                                                    <i data-feather="clipboard"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h6 class="fw-bolder mb-1">Registration 👩🏻‍💻</h6>
                                                <p>Let them register to our services</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="d-flex justify-content-center mb-1">
                                                <div class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  ">
                                                    <i data-feather="award"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h6 class="fw-bolder mb-1">Free Trial 🎉</h6>
                                                <p>Your friend will get 30 days free trial</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div class="px-sm-5 mx-50">
                                    <h4 class="fw-bolder mt-5 mb-1">Invite your friends</h4>
                                    <form class="row g-1" onsubmit="return false">
                                        <div class="col-lg-10">
                                            <label class="form-label" for="modalRnFEmail">
                                                Enter your friend’s email address and invite them to join Vuexy 😍
                                            </label>
                                            <input type="text" id="modalRnFEmail" class="form-control"
                                                placeholder="example@domain.com" aria-label="example@domain.com" />
                                        </div>
                                        <div class="col-lg-2 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary w-100">Send</button>
                                        </div>
                                    </form>

                                    <h4 class="fw-bolder mt-4 mb-1">Share the referral link</h4>
                                    <form class="row g-1" onsubmit="return false">
                                        <div class="col-lg-9">
                                            <label class="form-label" for="modalRnFLink">
                                                You can also copy and send it or share it on your social media. 🥳
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="modalRnFLink" class="form-control"
                                                    value="https://1.envato.market/vuexy_admin" />
                                                <a href="javascript:void(0)" class="input-group-text"
                                                    id="basic-addon33">Copy link</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 d-flex align-items-end">
                                            <div class="social-btns">
                                                <button type="button" class="btn btn-icon btn-facebook me-50">
                                                    <i data-feather="facebook" class="font-medium-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-twitter me-50">
                                                    <i data-feather="twitter" class="font-medium-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-linkedin">
                                                    <i data-feather="linkedin" class="font-medium-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / refer and earn modal -->
                <!-- add new address modal -->
                <div class="modal fade" id="addNewAddressModal" tabindex="-1" aria-labelledby="addNewAddressTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-4 mx-50">
                                <h1 class="address-title text-center mb-1" id="addNewAddressTitle">Add New Address</h1>
                                <p class="address-subtitle text-center mb-2 pb-75">Add address for billing address</p>

                                <form id="addNewAddressForm" class="row gy-1 gx-2" onsubmit="return false">
                                    <div class="col-12">
                                        <div class="row custom-options-checkable">
                                            <div class="col-md-6 mb-md-0 mb-2">
                                                <input class="custom-option-item-check" id="homeAddressRadio"
                                                    type="radio" name="newAddress" value="HomeAddress" checked />
                                                <label for="homeAddressRadio" class="custom-option-item px-2 py-1">
                                                    <span class="d-flex align-items-center mb-50">
                                                        <i data-feather="home" class="font-medium-4 me-50"></i>
                                                        <span
                                                            class="custom-option-item-title h4 fw-bolder mb-0">Home</span>
                                                    </span>
                                                    <span class="d-block">Delivery time (7am – 9pm)</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 mb-md-0 mb-2">
                                                <input class="custom-option-item-check" id="officeAddressRadio"
                                                    type="radio" name="newAddress" value="OfficeAddress" />
                                                <label for="officeAddressRadio" class="custom-option-item px-2 py-1">
                                                    <span class="d-flex align-items-center mb-50">
                                                        <i data-feather="briefcase" class="font-medium-4 me-50"></i>
                                                        <span
                                                            class="custom-option-item-title h4 fw-bolder mb-0">Office</span>
                                                    </span>
                                                    <span class="d-block">Delivery time (10am – 6pm)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddressFirstName">title</label>
                                        <input type="text" id="modalAddressFirstName" name="modalAddressFirstName"
                                            class="form-control" placeholder="John"
                                            data-msg="Please enter your first name" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddressLastName">Last Name</label>
                                        <input type="text" id="modalAddressLastName" name="modalAddressLastName"
                                            class="form-control" placeholder="Doe"
                                            data-msg="Please enter your last name" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddressCountry">Country</label>
                                        <select id="modalAddressCountry" name="modalAddressCountry"
                                            class="select2 form-select">
                                            <option value="">Select a Country</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
                                        <input type="text" id="modalAddressAddress1" name="modalAddressAddress1"
                                            class="form-control" placeholder="12, Business Park" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
                                        <input type="text" id="modalAddressAddress2" name="modalAddressAddress2"
                                            class="form-control" placeholder="Mall Road" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddressTown">Town</label>
                                        <input type="text" id="modalAddressTown" name="modalAddressTown"
                                            class="form-control" placeholder="Los Angeles" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddressState">State / Province</label>
                                        <input type="text" id="modalAddressState" name="modalAddressState"
                                            class="form-control" placeholder="California" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddressZipCode">Zip Code</label>
                                        <input type="text" id="modalAddressZipCode" name="modalAddressZipCode"
                                            class="form-control" placeholder="99950" />
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check form-switch form-check-primary me-25">
                                                <input type="checkbox" class="form-check-input" id="useAsBillingAddress"
                                                    checked />
                                                <label class="form-check-label" for="useAsBillingAddress">
                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                </label>
                                            </div>
                                            <label class="form-check-label fw-bolder" for="useAsBillingAddress">Use as a
                                                billing address?</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-1 mt-2">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / add new address modal -->
                <!-- create app modal -->
                <div class="modal fade" id="createAppModal" tabindex="-1" aria-labelledby="createAppTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-3 px-sm-3">
                                <h1 class="text-center mb-1" id="createAppTitle">Create App</h1>
                                <p class="text-center mb-2">Provide application data with this form</p>

                                <div class="bs-stepper vertical wizard-modern create-app-wizard">
                                    <div class="bs-stepper-header" role="tablist">
                                        <div class="step" data-target="#create-app-details" role="tab"
                                            id="create-app-details-trigger">
                                            <button type="button" class="step-trigger py-75">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="book" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Details</span>
                                                    <span class="bs-stepper-subtitle">Enter username</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="step" data-target="#create-app-frameworks" role="tab"
                                            id="create-app-frameworks-trigger">
                                            <button type="button" class="step-trigger py-75">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="package" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Frameworks</span>
                                                    <span class="bs-stepper-subtitle">Enter Information</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="step" data-target="#create-app-database" role="tab"
                                            id="create-app-database-trigger">
                                            <button type="button" class="step-trigger py-75">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="command" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Database</span>
                                                    <span class="bs-stepper-subtitle">Payment details</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="step" data-target="#create-app-billing" role="tab"
                                            id="create-app-billing-trigger">
                                            <button type="button" class="step-trigger py-75">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="credit-card" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Billing</span>
                                                    <span class="bs-stepper-subtitle">Payment details</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="step" data-target="#create-app-submit" role="tab"
                                            id="create-app-submit-trigger">
                                            <button type="button" class="step-trigger py-75">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="check" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Submit</span>
                                                    <span class="bs-stepper-subtitle">Submit your app</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- content -->
                                    <div class="bs-stepper-content shadow-none">
                                        <div id="create-app-details" class="content" role="tabpanel"
                                            aria-labelledby="create-app-details-trigger">
                                            <h5>Application Name</h5>
                                            <input class="form-control" type="text" placeholder="Vuexy Admin" />

                                            <h5 class="mt-2 pt-1">Category</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppCrm" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-info me-1">
                                                            <i data-feather="briefcase" class="font-medium-5"></i>
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">CRM
                                                                    Application</span>
                                                                <span>Scales with Any Business</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppCrm"
                                                                    type="radio" name="categoryRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppEcommerce" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-success me-1">
                                                            <i data-feather="shopping-cart" class="font-medium-5"></i>
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">Ecommerce
                                                                    Platforms</span>
                                                                <span>Grow Your Business With App</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppEcommerce"
                                                                    type="radio" name="categoryRadio" checked />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppOnlineLearning" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-danger me-1">
                                                            <i data-feather="award" class="font-medium-5"></i>
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">Online Learning
                                                                    platform</span>
                                                                <span>Start learning today</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input"
                                                                    id="createAppOnlineLearning" type="radio"
                                                                    name="categoryRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="create-app-frameworks" class="content" role="tabpanel"
                                            aria-labelledby="create-app-frameworks-trigger">
                                            <h5>Select Framework</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppReactNative" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-info me-1">
                                                            <img src="app-assets/images/icons/technology/react.png"
                                                                height="25" alt="react" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">React Native</span>
                                                                <span>Create truly native apps</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input"
                                                                    id="createAppReactNative" type="radio"
                                                                    name="frameworkRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppAngular" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-danger me-1">
                                                            <img src="app-assets/images/icons/technology/angular.png"
                                                                height="25" alt="angular" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">Angular</span>
                                                                <span>Most suited to your application</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppAngular"
                                                                    type="radio" name="frameworkRadio" checked />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppVue" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-success me-1">
                                                            <img src="app-assets/images/icons/technology/vue.png"
                                                                height="25" alt="vue" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">Vue</span>
                                                                <span>Progressive framework.</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppVue"
                                                                    type="radio" name="frameworkRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppLaravel" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-warning me-1">
                                                            <img src="app-assets/images/icons/technology/laravel.png"
                                                                height="25" alt="laravel" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">Laravel</span>
                                                                <span>PHP web framework</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppLaravel"
                                                                    type="radio" name="frameworkRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="create-app-database" class="content" role="tabpanel"
                                            aria-labelledby="create-app-database-trigger">
                                            <h5>Database Name</h5>

                                            <input class="form-control" type="text" name="database"
                                                placeholder="app_database" />

                                            <h5 class="mt-2 pt-1">Select Database Engine</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppFirebase" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-danger me-1">
                                                            <img src="app-assets/images/icons/google.png" height="25"
                                                                alt="google" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">Firebase</span>
                                                                <span>Cloud Firestore</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppFirebase"
                                                                    type="radio" name="databaseRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppDynamoDB" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-secondary me-1">
                                                            <img src="app-assets/images/icons/amazon.png" height="25"
                                                                alt="amazon" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">DynamoDB</span>
                                                                <span>Amazon Fast NoSQL Database</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppDynamoDB"
                                                                    type="radio" name="databaseRadio" checked />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <label for="createAppMysql" class="d-flex cursor-pointer">
                                                        <span class="avatar avatar-tag bg-light-info me-1">
                                                            <img src="app-assets/images/icons/database.png" height="25"
                                                                alt="database" />
                                                        </span>
                                                        <span
                                                            class="d-flex align-items-center justify-content-between flex-grow-1">
                                                            <span class="me-1">
                                                                <span class="h5 d-block fw-bolder">MySQL</span>
                                                                <span>Basic MySQL database</span>
                                                            </span>
                                                            <span>
                                                                <input class="form-check-input" id="createAppMysql"
                                                                    type="radio" name="databaseRadio" />
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="create-app-billing" class="content" role="tabpanel"
                                            aria-labelledby="create-app-billing-trigger">
                                            <h5 class="mb-1">Category</h5>

                                            <!-- form -->
                                            <form id="createAppBillingForm" class="row gy-1 gx-2"
                                                onsubmit="return false">
                                                <div class="col-12">
                                                    <label class="form-label" for="cardNumberBilling">Card
                                                        Number</label>
                                                    <div class="input-group input-group-merge">
                                                        <input id="cardNumberBilling" name="cardNumberBillingModal"
                                                            class="form-control create-app-card-mask" type="text"
                                                            value="5637817212901451" placeholder="1356 3215 6548 7898"
                                                            aria-describedby="cardNumberBillingModal1" />
                                                        <span class="input-group-text cursor-pointer p-25"
                                                            id="cardNumberBillingModal1">
                                                            <span class="credit-app-card-type"></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="nameOnCardBilling">Name On
                                                        Card</label>
                                                    <input type="text" id="nameOnCardBilling" class="form-control"
                                                        placeholder="John Doe" />
                                                </div>

                                                <div class="col-6 col-md-3">
                                                    <label class="form-label" for="expDateBilling">Exp. Date</label>
                                                    <input type="text" id="expDateBilling"
                                                        class="form-control create-app-expiry-date-mask"
                                                        placeholder="MM/YY" />
                                                </div>

                                                <div class="col-6 col-md-3">
                                                    <label class="form-label" for="cvvBilling">CVV</label>
                                                    <input type="text" id="cvvBilling"
                                                        class="form-control create-app-cvv-code-mask" maxlength="3"
                                                        placeholder="654" />
                                                </div>

                                                <div class="col-12">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check form-switch form-check-primary me-25">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="saveCardBilling" checked />
                                                            <label class="form-check-label" for="saveCardBilling">
                                                                <span class="switch-icon-left"><i
                                                                        data-feather="check"></i></span>
                                                                <span class="switch-icon-right"><i
                                                                        data-feather="x"></i></span>
                                                            </label>
                                                        </div>
                                                        <label class="form-check-label fw-bolder" for="saveCardBilling">
                                                            Save Card for future billing?
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="d-flex justify-content-between mt-5 pt-1">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="create-app-submit" class="content text-center" role="tabpanel"
                                            aria-labelledby="create-app-submit-trigger">
                                            <h3>Submit 🥳</h3>
                                            <p>Submit your app to kickstart your project.</p>
                                            <img src="app-assets/images/illustration/pricing-Illustration.svg"
                                                height="218" alt="illustration" />
                                            <div class="d-flex justify-content-between mt-3">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-success btn-submit">
                                                    <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                                    <i data-feather="check" class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / create app modal -->
                <!-- two factor auth modal -->
                <div class="modal fade" id="twoFactorAuthModal" tabindex="-1" aria-labelledby="twoFactorAuthTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 mx-50">
                                <h1 class="text-center mb-1" id="twoFactorAuthTitle">Select Authentication Method</h1>
                                <p class="text-center mb-3">
                                    you also need to select a method by which the proxy
                                    <br />
                                    authenticates to the directory serve
                                </p>

                                <div class="custom-options-checkable">
                                    <input class="custom-option-item-check" type="radio" name="twoFactorAuthRadio"
                                        id="twoFactorAuthApps" value="apps-auth" checked />
                                    <label for="twoFactorAuthApps"
                                        class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2 mb-2">
                                        <span><i data-feather="settings"
                                                class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                                        <span>
                                            <span class="custom-option-item-title h3">Authenticator Apps</span>
                                            <span class="d-block mt-75">
                                                Get codes from an app like Google Authenticator, Microsoft
                                                Authenticator, Authy or 1Password.
                                            </span>
                                        </span>
                                    </label>

                                    <input class="custom-option-item-check" type="radio" name="twoFactorAuthRadio"
                                        value="sms-auth" id="twoFactorAuthSms" />
                                    <label for="twoFactorAuthSms"
                                        class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2">
                                        <span><i data-feather="message-square"
                                                class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                                        <span>
                                            <span class="custom-option-item-title h3">SMS</span>
                                            <span class="d-block mt-75">We will send a code via SMS if you need to use
                                                your backup login method.</span>
                                        </span>
                                    </label>
                                </div>

                                <button id="nextStepAuth" class="btn btn-primary float-end mt-3">
                                    <span class="me-50">Continue</span>
                                    <i data-feather="chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / two factor auth modal -->

                <!-- add authentication apps modal -->
                <div class="modal fade" id="twoFactorAuthAppsModal" tabindex="-1"
                    aria-labelledby="twoFactorAuthAppsTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-apps">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 mx-50">
                                <h1 class="text-center mb-2 pb-50" id="twoFactorAuthAppsTitle">Add Authenticator App
                                </h1>

                                <h4>Authenticator Apps</h4>
                                <p>
                                    Using an authenticator app like Google Authenticator, Microsoft Authenticator,
                                    Authy, or 1Password, scan the
                                    QR code. It will generate a 6 digit code for you to enter below.
                                </p>

                                <div class="d-flex justify-content-center my-2 py-50">
                                    <img class="img-fluid" src="app-assets/images/icons/qrcode.png" width="122"
                                        alt="QR Code" />
                                </div>

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">ASDLKNASDA9AHS678dGhASD78AB</h4>
                                    <div class="alert-body fw-normal">
                                        If you having trouble using the QR code, select manual entry on your app
                                    </div>
                                </div>

                                <form class="row gy-1" onsubmit="return false">
                                    <div class="col-12">
                                        <input class="form-control" id="authenticationCode" type="text"
                                            placeholder="Enter authentication code" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="reset" class="btn btn-outline-secondary mt-2 me-1"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary mt-2">
                                            <span class="me-50">Continue</span>
                                            <i data-feather="chevron-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / add authentication apps modal-->

                <!-- add authentication sms modal-->
                <div class="modal fade" id="twoFactorAuthSmsModal" tabindex="-1" aria-labelledby="twoFactorAuthSmsTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-sms">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 mx-50">
                                <h1 class="text-center mb-2 pb-50" id="twoFactorAuthSmsTitle">`</h1>
                                <h4>Verify Your Mobile Number for SMS</h4>
                                <p>Enter your mobile phone number with country code and we will send you a verification
                                    code.</p>
                                <form class="row gy-1 mt-1" onsubmit="return false">
                                    <div class="col-12">
                                        <input class="form-control phone-number-mask" type="text"
                                            placeholder="Mobile number with country code" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="reset" class="btn btn-outline-secondary mt-1 me-1"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary mt-1">
                                            <span class="me-50">Continue</span>
                                            <i data-feather="chevron-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / add authentication sms modal-->
                <!-- Edit User Modal -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Edit User Information</h1>
                                    <p>Updating user details will receive a privacy audit.</p>
                                </div>
                                <form id="editUserForm" class="invoice-repeater row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="modalEditUserFirstName">Title</label>
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                            class="form-control" placeholder="Title" Placeholder="Title"
                                            data-msg="Title" />
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="modalEditUserLastName">Description</label>
                                        <input type="text" id="modalEditUserLastName" name="description"
                                            class="form-control" placeholder="Description" data-msg="Description" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserEmail">Monthly</label>
                                        <input type="number" id="modalEditUserEmail" name="monthly" class="form-control"
                                            placeholder="Monthly" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserEmail">Annualy</label>
                                        <input type="number" id="modalEditUserEmail" name="annualy" class="form-control"
                                            placeholder="Annualy" />
                                    </div>
                                                <!-- Invoice repeater -->
                                                <div class="col-12">
                                                            <form action="#" class="invoice-repeater">
                                                                <div data-repeater-list="invoice">
                                                                    <div data-repeater-item>
                                                                        <div class="row d-flex             align-items-end">
                                                                            <div class="col-md-10 col-12">
                                                                                <div class="mb-1">
                                                                                    <label class="form-label"
                                                                                        for="itemname">Points</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="itemname"
                                                                                        aria-describedby="itemname"
                                                                                        placeholder="Points" />
                                                                                </div>
                                                                            </div>

                                                                           

                                                                            <div class="col-md-2 col-12 mb-50">
                                                                                <div class="mb-1">
                                                                                    <button
                                                                                        class="btn btn-outline-danger text-nowrap px-1"
                                                                                        data-repeater-delete
                                                                                        type="button">
                                                                                        <i data-feather="x"
                                                                                            class="me-25"></i>
                                                                                        <span>Delete</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button class="btn btn-icon btn-primary"
                                                                            type="button" data-repeater-create>
                                                                            <i data-feather="plus" class="me-25"></i>
                                                                            <span>Add New</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                </div>
                                                <!-- /Invoice repeater -->
                                        

                                    <div class="col-12">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="form-check form-switch form-check-primary">
                                                <input type="checkbox" class="form-check-input" id="customSwitch10"
                                                    checked />
                                                <label class="form-check-label" for="customSwitch10">
                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                </label>
                                            </div>
                                            <label class="form-check-label fw-bolder" for="customSwitch10">Use as a
                                                billing address?</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/modal-add-new-cc.js"></script>
    <script src="app-assets/js/scripts/pages/page-pricing.js"></script>
    <script src="app-assets/js/scripts/pages/modal-add-new-address.js"></script>
    <script src="app-assets/js/scripts/pages/modal-create-app.js"></script>
    <script src="app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="app-assets/js/scripts/pages/modal-edit-user.js"></script>
    <script src="app-assets/js/scripts/pages/modal-share-project.js"></script>
    <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src="app-assets/js/scripts/forms/form-repeater.js"></script>

    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>