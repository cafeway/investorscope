<!DOCTYPE html>
<html lang="en">

<!-- modules-datatables.html  Tue, 07 Jan 2020 03:38:57 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Modules &rsaquo; DataTables &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
                        <!-- Start app top navbar -->
                        <nav class="navbar navbar-expand-lg main-navbar">
                            <form class="form-inline mr-auto" action="{{ route('placeorder') }}" method="post">
                                @csrf
                                <ul class="navbar-nav mr-3">
                                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                                </ul>
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                    <div class="search-backdrop"></div>
                                    <div class="search-result">
                                        <div class="search-header">Histories</div>
                                        <div class="search-item">
                                            <a href="#">How to Used HTML in Laravel</a>
                                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="search-item">
                                            <a href="https://themeforest.net/user/admincraft/portfolio" target="_black">Admincraft Portfolio</a>
                                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="search-item">
                                            <a href="#">#CodiePie</a>
                                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="search-header">Result</div>
                                        <div class="search-item">
                                            <a href="#">
                                                <img class="mr-3 rounded" width="30" src="{{ URL::asset('assets/img/products/product-3-50.png') }}" alt="product">
                                                oPhone 11 Pro
                                            </a>
                                        </div>
                                        <div class="search-item">
                                            <a href="#">
                                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                                                Drone Zx New Gen-3
                                            </a>
                                        </div>
                                        <div class="search-item">
                                            <a href="#">
                                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                                                Headphone JBL
                                            </a>
                                        </div>
                                        <div class="search-header">Projects</div>
                                        <div class="search-item">
                                            <a href="https://themeforest.net/item/epice-laravel-admin-template-for-hr-project-management/24466729" target="_black">
                                                <div class="search-icon bg-danger text-white mr-3"><i class="fas fa-code"></i></div>
                                                Epice Laravel - Admin Template
                                            </a>
                                        </div>
                                        <div class="search-item">
                                            <a href="https://themeforest.net/item/soccer-project-management-admin-template-ui-kit/24646866" target="_black">
                                                <div class="search-icon bg-primary text-white mr-3"><i class="fas fa-laptop"></i></div>
                                                Soccer - Admin Template
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="navbar-nav navbar-right">
                                {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                    <div class="dropdown-header">Messages
                                        <div class="float-right">
                                            <a href="#">Mark All As Read</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-list-content dropdown-list-message">
                                        <a href="#" class="dropdown-item dropdown-item-unread">
                                            <div class="dropdown-item-avatar">
                                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                                                <div class="is-online"></div>
                                            </div>
                                            <div class="dropdown-item-desc">
                                                <b>Kusnaedi</b>
                                                <p>Hello, Bro!</p>
                                                <div class="time">10 Hours Ago</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer text-center">
                                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                    <div class="dropdown-header">Notifications
                                        <div class="float-right">
                                            <a href="#">Mark All As Read</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-list-content dropdown-list-icons">
                                        <a href="#" class="dropdown-item dropdown-item-unread">
                                            <div class="dropdown-item-icon bg-primary text-white">
                                                <i class="fas fa-code"></i>
                                            </div>
                                            <div class="dropdown-item-desc"> Template update is available now!
                                                <div class="time text-primary">2 Min Ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="dropdown-item-icon bg-info text-white">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="dropdown-item-desc">
                                                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                                <div class="time">10 Hours Ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="dropdown-item-icon bg-success text-white">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <div class="dropdown-item-desc">
                                                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                                <div class="time">12 Hours Ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="dropdown-item-icon bg-danger text-white">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </div>
                                            <div class="dropdown-item-desc">
                                                Low disk space. Let's clean it!
                                                <div class="time">17 Hours Ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="dropdown-item-icon bg-info text-white">
                                                <i class="fas fa-bell"></i>
                                            </div>
                                            <div class="dropdown-item-desc">
                                                Welcome to CodiePie template!
                                                <div class="time">Yesterday</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer text-center">
                                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                    </div>
                                </li> --}}
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                    <div class="d-sm-none d-lg-inline-block">Hello {{ Auth::user()->username }}</div></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-title">Logged in 5 min ago</div>
                                        <a href="{{ route('profile') }}" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                                        <a href="{{ route('timeline') }}" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="dropdown-item has-icon text-danger" type="submit">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                        <!-- Start main left sidebar menu -->
                        <div class="main-sidebar sidebar-style-3">
                            <aside id="sidebar-wrapper">
                                <div class="sidebar-brand">
                                    <a href="index-2.html">Trident</a>
                                </div>
                                <div class="sidebar-brand sidebar-brand-sm">
                                    <a href="index-2.html">CP</a>
                                </div>



                                <ul class="sidebar-menu">
                                    <li class="menu-header">UserPanel</li>
                                    <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> <span>Home</span></a></li>
                                    <li class="dropdown">
                                        <a href="{{ route('profile') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Profile</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link" href="{{ route('profile') }}">View Profile</a></li>

                                            <li><a class="nav-link" href="layout-top-navigation.html">Edit Profile</a></li>
                                            <li><a class="nav-link" href="{{ route('resetpassword')  }}">Change password</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Orders</span></a>

                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link" href="{{ route('manageorder') }}">Manage Orders</a></li>

                                            <li><a class="nav-link" href="{{ route('placeorder') }}">Place Order</a></li>
                                        </ul>
                                    </li>
                {{--
                                    <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                                            <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                                            <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                                            <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                                            <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                                            <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                                            <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                                            <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                                            <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                                            <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                                            <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                                            <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                                            <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                                            <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                                            <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                                            <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                                            <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                                            <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                                            <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                                            <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-university"></i> <span>Billing & Payments</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link"href="{{ route('fund') }}">Fund Account</a></li>
                                            {{-- <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Disburse Payments</a></li> --}}
                                            <li><a class="nav-link" href="components-chat-box.html">Request Refund</a></li>
                                            {{-- <li><a class="nav-link beep beep-sidebar" href="{{ route('chat') }}">Start chat</a></li> --}}
                                            {{-- <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                                            <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
                                            <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                                            <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
                                            <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
                                            <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                                            <li><a class="nav-link" href="components-table.html">Table</a></li>
                                            <li><a class="nav-link" href="components-user.html">User</a></li>
                                            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li> --}}
                                        </ul>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                                            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                                            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                                            <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                                            <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                                            <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                                            <li><a href="gmaps-marker.html">Marker</a></li>
                                            <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                                            <li><a href="gmaps-route.html">Route</a></li>
                                            <li><a href="gmaps-simple.html">Simple</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                                        <ul class="dropdown-menu">
                                            <li class="menu-sub-header">Apps</li>
                                            <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>

                                            <li class="menu-sub-header">Charts</li>
                                            <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                                            <li><a class="nav-link" href="modules-apex-charts.html">Apex Charts</a></li>
                                            <li><a class="nav-link" href="modules-e-charts.html">E Charts</a></li>
                                            <li><a class="nav-link" href="modules-c3-charts.html">C3 Charts</a></li>
                                            <li><a class="nav-link" href="modules-knob-charts.html">Knob Charts</a></li>
                                            <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                                            <li class="menu-sub-header">Tables</li>
                                            <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                                            <li><a class="nav-link" href="modules-table-more.html">More</a></li>
                                            <li class="menu-sub-header">Font Icons</li>
                                            <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                                            <li><a class="nav-link" href="modules-line-icons.html">Line Icons</a></li>
                                            <li><a class="nav-link" href="modules-feather-icons.html">Feather Icons</a></li>
                                            <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                                            <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                                            <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                                            <li class="menu-sub-header">Other</li>
                                            <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                                            <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                                            <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                                            <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                                            <li><a href="auth-login.html">Login</a></li>
                                            <li><a href="auth-register.html">Register</a></li>
                                            <li><a href="auth-reset-password.html">Reset Password</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link" href="errors-503.html">503</a></li>
                                            <li><a class="nav-link" href="errors-403.html">403</a></li>
                                            <li><a class="nav-link" href="errors-404.html">404</a></li>
                                            <li><a class="nav-link" href="errors-500.html">500</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                                            <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                                            <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                                            <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                                            <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                                            <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                                            <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="dropdown">
                                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-paper-plane"></i> <span>Contact Us</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('chat') }}">Start Chat</a></li>
                                            <li><a class="nav-link" href="utilities-invoice.html">Whatsapp</a></li>
                                            <li><a href="utilities-subscribe.html">Telegram</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link" href="credits.html"><i class="fa fa-mortar-board"></i> <span>Support Team</span></a></li>
                                </ul>
                                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fa fa-sign-out"></i>Logout</button>
                                    </form>
                                </div>
                            </aside>
                        </div>


        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1 style="padding:5px;">Orders</h1>
                    <a href="{{ route('placeorder') }}" class="btn btn-success" style="color: purple">Add Order</a>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item"><a href="#">Modules</a></div>
                        <div class="breadcrumb-item">Manage Your Orders</div>
                    </div>
                </div>

                <div class="section-body">
                    <p class="section-lead">View And Fund Your Orders here</p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="alert alert-danger" role="alert">
                                        <h4>Pending Orders</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th class="text-center">
                                                    Orderid
                                                </th>
                                                <th>PlacedAt<i class="fa fa-calendar" aria-hidden="true"></i></th>
                                                <th>Due<i class="fa fa-calendar" aria-hidden="true"></i></th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Cashout Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($orders ?? ''->count())
                                                    @foreach ($orders ?? '' as $order)
                                                    <tr>
                                                        <td>
                                                            {{ $order -> id }}
                                                        </td>
                                                        <td>{{ $order->created_at}}</td>
                                                            {{-- <td class="align-middle justify-content ">
                                                                    <a href="{{ route('editorders',[
                                                                        'id'=>$order->id
                                                                    ]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </td> --}}
                                                        <td>{{ $order->updated_at}}</td>
                                                        <td>{{ $order->principle}}</td>
                                                            @switch($order->status)
                                                                @case('pending')
                                                                <td><div class="badge badge-danger">{{ $order->status }}</div></td>
                                                                    @break
                                                                @case('verified')
                                                                <td><div class="badge badge-primary">{{ $order->status }}</div></td>
                                                                @break
                                                                @case('disputed')
                                                                <td><div class="badge badge-warning">{{ $order->status }}</div></td>
                                                                @break
                                                                @case('cancelled')
                                                                <td><div class="badge badge-danger">{{ $order->status }}</div></td>
                                                                @break
                                                                @case('completed')
                                                                <td><div class="badge badge-success">{{ $order->status }}</div></td>
                                                                @break
                                                                @default

                                                            @endswitch


                                                        <td><a href="#" class="btn btn-success">Cashout</a></td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="alert alert-success" role="alert">
                                        <h4>Complete Orders</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-2">
                                            <thead>
                                                <tr>
                                                <th class="text-center">
                                                    Orderid
                                                </th>
                                                <th>OrderTitle</th>
                                                <th>Invoice No</th>
                                                <th>Submitted At<i class="fa fa-calend" aria-hidden="true"></i></th>
                                                <th>Charges<i class="fa fa-dollar" aria-hidden="true"></i></th>
                                                <th>Fines</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($completed as $complete )
                                                 <tr>
                                                <td>{{  $complete->id}}</td>
                                                <td>{{ $complete->invoice  }}</td>
                                                <td>{{ $complete->submission_date  }}</td>
                                                <td>{{ $complete->amount_paid  }}</td>
                                                <td>{{ $complete->fines  }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Trident Writers</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/modules-datatables.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- modules-datatables.html  Tue, 07 Jan 2020 03:39:02 GMT -->
</html>
