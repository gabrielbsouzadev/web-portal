<x-app-layout>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">

                <!-- Menu -->

                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="index.html" class="app-brand-link">
                            <span class="app-brand-logo demo">
                                <img src="../../assets/img/branding/logo.png" />
                            </span>

                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                            <i class="bx menu-toggle-icon fs-4 d-none d-xl-block align-middle"></i>
                            <i class="bx bx-x bx-sm d-xl-none d-block align-middle"></i>
                        </a>
                    </div>

                    <div class="menu-divider mt-0"></div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">
                        <!-- Dashboards -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                <div data-i18n="VueJs Project">VueJs Projects</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="/cookinup-home" class="menu-link">
                                        <div data-i18n="CookinUp APP">CookinUp APP</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
                <!-- / Menu -->
                <!-- Layout container -->

                <div class="layout-page">
                    <!-- Navbar -->
                    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                        <div class="container-fluid">
                            <div class="layout-menu-toggle navbar-nav d-xl-none align-items-xl-center me-3 me-xl-0">
                                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                    <i class="bx bx-menu bx-sm"></i>
                                </a>
                            </div>

                            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                                <!-- Search -->
                                <div class="navbar-nav align-items-center">
                                    <div class="nav-item navbar-search-wrapper mb-0">
                                        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                            <i class="bx bx-search-alt bx-sm"></i>
                                            <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /Search -->

                                <ul class="navbar-nav flex-row align-items-center ms-auto">
                                    <!-- Language -->
                                    <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="flag-icon flag-icon-us flag-icon-squared fs-3 rounded-circle me-1"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                                    <i class="flag-icon flag-icon-us flag-icon-squared fs-4 rounded-circle me-1"></i>
                                                    <span class="align-middle">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                                    <i class="flag-icon flag-icon-fr flag-icon-squared fs-4 rounded-circle me-1"></i>
                                                    <span class="align-middle">French</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                                    <i class="flag-icon flag-icon-de flag-icon-squared fs-4 rounded-circle me-1"></i>
                                                    <span class="align-middle">German</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                                    <i class="flag-icon flag-icon-pt flag-icon-squared fs-4 rounded-circle me-1"></i>
                                                    <span class="align-middle">Portuguese</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--/ Language -->

                                    <!-- Style Switcher -->
                                    <li class="nav-item me-2 me-xl-0">
                                        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                            <i class="bx bx-sm"></i>
                                        </a>
                                    </li>
                                    <!--/ Style Switcher -->

                                    <!-- Quick links  -->
                                    <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bx bx-grid-alt bx-sm"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end py-0">
                                            <div class="dropdown-menu-header border-bottom">
                                                <div class="dropdown-header d-flex align-items-center py-3">
                                                    <h5 class="text-body me-auto mb-0">Shortcuts</h5>
                                                    <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="dropdown-shortcuts-list scrollable-container">
                                                <div class="row row-bordered overflow-visible g-0">
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-calendar fs-4"></i>
                                                        </span>
                                                        <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                                        <small class="text-muted mb-0">Appointments</small>
                                                    </div>
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-food-menu fs-4"></i>
                                                        </span>
                                                        <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                                        <small class="text-muted mb-0">Manage Accounts</small>
                                                    </div>
                                                </div>
                                                <div class="row row-bordered overflow-visible g-0">
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-user fs-4"></i>
                                                        </span>
                                                        <a href="app-user-list.html" class="stretched-link">User App</a>
                                                        <small class="text-muted mb-0">Manage Users</small>
                                                    </div>
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-check-shield fs-4"></i>
                                                        </span>
                                                        <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                                        <small class="text-muted mb-0">Permission</small>
                                                    </div>
                                                </div>
                                                <div class="row row-bordered overflow-visible g-0">
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                                        </span>
                                                        <a href="index.html" class="stretched-link">Dashboard</a>
                                                        <small class="text-muted mb-0">User Profile</small>
                                                    </div>
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-cog fs-4"></i>
                                                        </span>
                                                        <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                                        <small class="text-muted mb-0">Account Settings</small>
                                                    </div>
                                                </div>
                                                <div class="row row-bordered overflow-visible g-0">
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-help-circle fs-4"></i>
                                                        </span>
                                                        <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                                                        <small class="text-muted mb-0">FAQs & Articles</small>
                                                    </div>
                                                    <div class="dropdown-shortcuts-item col">
                                                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                            <i class="bx bx-window-open fs-4"></i>
                                                        </span>
                                                        <a href="modal-examples.html" class="stretched-link">Modals</a>
                                                        <small class="text-muted mb-0">Useful Popups</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Quick links -->

                                    <!-- Notification -->
                                    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bx bx-bell bx-sm"></i>
                                            <span class="badge rounded-pill badge-notifications bg-danger">5</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end py-0">
                                            <li class="dropdown-menu-header border-bottom">
                                                <div class="dropdown-header d-flex align-items-center py-3">
                                                    <h5 class="text-body me-auto mb-0">Notification</h5>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                                </div>
                                            </li>
                                            <li class="dropdown-notifications-list scrollable-container">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                                <p class="mb-0">Won the monthly best seller gold badge</p>
                                                                <small class="text-muted">1h ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <span class="avatar-initial bg-label-danger rounded-circle">CF</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Charles Franklin</h6>
                                                                <p class="mb-0">Accepted your connection</p>
                                                                <small class="text-muted">12hr ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">New Message ✉️</h6>
                                                                <p class="mb-0">You have new message from Natalie</p>
                                                                <small class="text-muted">1h ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <span class="avatar-initial bg-label-success rounded-circle"><i class="bx bx-cart"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                                                                <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                                <small class="text-muted">1 day ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Application has been approved 🚀</h6>
                                                                <p class="mb-0">Your ABC project application has been approved.</p>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <span class="avatar-initial bg-label-success rounded-circle"><i class="bx bx-pie-chart-alt"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Monthly report is generated</h6>
                                                                <p class="mb-0">July monthly financial report is generated</p>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Send connection request</h6>
                                                                <p class="mb-0">Peter sent you connection request</p>
                                                                <small class="text-muted">4 days ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">New message from Jane</h6>
                                                                <p class="mb-0">Your have new message from Jane</p>
                                                                <small class="text-muted">5 days ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-error"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">CPU is running high</h6>
                                                                <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                                <small class="text-muted">5 days ago</small>
                                                            </div>
                                                            <div class="dropdown-notifications-actions flex-shrink-0">
                                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-menu-footer border-top">
                                                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                                    View all notifications
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--/ Notification -->

                                    <!-- User -->
                                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <div class="avatar avatar-online">
                                                <img src="../../assets/img/avatars/0.png" alt class="rounded-circle" />
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar avatar-online">
                                                                <img src="../../assets/img/avatars/0.png" alt class="rounded-circle" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <span class="lh-1 d-block fw-semibold">John Doe</span>
                                                            <small>Admin</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages-profile-user.html">
                                                    <i class="bx bx-user me-2"></i>
                                                    <span class="align-middle">My Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                                    <i class="bx bx-cog me-2"></i>
                                                    <span class="align-middle">Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages-account-settings-billing.html">
                                                    <span class="d-flex align-items-center align-middle">
                                                        <i class="bx bx-credit-card flex-shrink-0 me-2"></i>
                                                        <span class="flex-grow-1 align-middle">Billing</span>
                                                        <span class="badge badge-center rounded-pill w-px-20 h-px-20 flex-shrink-0 bg-danger">4</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages-help-center-landing.html">
                                                    <i class="bx bx-support me-2"></i>
                                                    <span class="align-middle">Help</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages-faq.html">
                                                    <i class="bx bx-help-circle me-2"></i>
                                                    <span class="align-middle">FAQ</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="pages-pricing.html">
                                                    <i class="bx bx-dollar me-2"></i>
                                                    <span class="align-middle">Pricing</span>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                                    <i class="bx bx-power-off me-2"></i>
                                                    <span class="align-middle">Log Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--/ User -->
                                </ul>
                            </div>

                            <!-- Search Small Screens -->
                            <div class="navbar-search-wrapper search-input-wrapper d-none">
                                <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search..." />
                                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                            </div>
                        </div>
                    </nav>
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row">

                            </div>
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-fluid d-flex flex-column flex-md-row flex-wrap justify-content-between py-2">
                                <div class="mb-2 mb-md-0">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>

                                </div>

                            </div>
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../../assets/vendor/libs/popper/popper.js"></script>
        <script src="../../assets/vendor/js/bootstrap.js"></script>
        <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
        <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
        <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

        <script src="../../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../../assets/js/dashboards-analytics.js"></script>
    </body>

</x-app-layout>