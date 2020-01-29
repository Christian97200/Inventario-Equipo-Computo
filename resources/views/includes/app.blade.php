<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventario Jovenes Arriba</title>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('asssets/images/favicon.ico') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    .text-overflow-dynamic-container {
        position: relative;
        max-width: 100%;
        padding: 0 !important;
        display: -webkit-flex;
        display: -moz-flex;
        display: flex;
        vertical-align: text-bottom !important;
    }
    .text-overflow-dynamic-ellipsis {
        position: absolute;
        white-space: nowrap;
        overflow-y: visible;
        overflow-x: hidden;
        text-overflow: ellipsis;
        -ms-text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
        max-width: 100%;
        min-width: 0;
        width:100%;
        top: 0;
        left: 0;
    }
    .text-overflow-dynamic-container:after,
    .text-overflow-dynamic-ellipsis:after {
        content: '-';
        display: inline;
        visibility: hidden;
        width: 0;
    }
</style>
<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <a href="index.html">
                <img class="logo" src="../assets/images/logo.svg" alt="">
                <img class="logo-mini" src="../assets/images/logo_mini.svg" alt="">
            </a>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"
                            autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                    </div>
                </form>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-bell-outline mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                            aria-labelledby="notificationDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Notifications</h6>
                                <p class="dropdown-title-text">You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                        <i class="mdi mdi-alert"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Storage Full</small>
                                        <small class="content-text">Server storage almost full</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                        <i class="mdi mdi-cloud-upload"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Upload Completed</small>
                                        <small class="content-text">3 Files uploded successfully</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                        <i class="mdi mdi-security"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Authentication Required</small>
                                        <small class="content-text">Please verify your password to continue using cloud
                                            services</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-message-outline mdi-1x"></i>
                            <span
                                class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                            aria-labelledby="messageDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Messages</h6>
                                <p class="dropdown-title-text">You have 4 unread messages</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img" src="../assets/images/profile/male/image_1.png"
                                            alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Clifford Gordon</small>
                                        <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img" src="../assets/images/profile/female/image_2.png"
                                            alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Rachel Doyle</small>
                                        <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img" src="../assets/images/profile/male/image_3.png"
                                            alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-warning"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Lewis Guzman</small>
                                        <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-apps mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Apps</h6>
                                <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                            </div>
                            <div class="dropdown-body border-top pt-0">
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                                    <span class="grid-tittle">Jira</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                                    <span class="grid-tittle">Trello</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                                    <span class="grid-tittle">Artstation</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                                    <span class="grid-tittle">Bitbucket</span>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="{{ asset('assets/images/profile/male/image_1.png') }}"
                        alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name">Christian Valley</p>
                    <h6 class="display-income">Admin</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MENU</li>
                <li>
                    <a href="{{ route('index') }}">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('laptops') }}">
                        <span class="link-title">Laptops</span>
                        <i class="mdi mdi-laptop link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="pages/charts/chartjs.html">
                        <span class="link-title">Marcas</span>
                        <i class="mdi mdi-apple-keyboard-command link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="pages/charts/chartjs.html">
                        <span class="link-title">Procesadores</span>
                        <i class="mdi mdi-chip link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('becados') }}">
                        <span class="link-title">Becados</span>
                        <i class="mdi mdi-account link-icon"></i>
                    </a>
                </li>
                <li class="nav-category-divider">PRESTAMOS</li>
                <li>
                    <a href="../docs/docs.html">
                        <span class="link-title">Préstamo</span>
                        {{-- <i class="mdi mdi-note-text link-icon"></i> --}}
                        <i class="fas fa-handshake link-icon" style="font-size: 13px"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
 
                    @yield('content')

                </div>
            </div>
            <!-- content viewport ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                        <small class="text-muted d-block">Copyright © 2019. All rights reserved</small>
                        <small class="text-gray mt-2">Christian Developer</small>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>

    <!--ajax cdn -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    <!--page body ends -->
    <script src="{{ asset('assets/vendors/js/core.js') }}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/dashboard.js"></script>

    
    
    <!-- endbuild -->
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        function saveData(){
            var nombres = $('#nombres').val();
            var apellidos = $('#apellidos').val();

            $.ajax({
                type: 'POST', 
                url: '/store',
                dataType: 'json',
                data: {nombre:nombres},
                success: function(result){
                    window.console.log(result);
                }
            })
        }
    </script>
</body>

</html>