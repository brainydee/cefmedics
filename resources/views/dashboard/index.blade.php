
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Cefmedics Dashboard</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link href="{{asset('dashboard/assets/css/main.css?v=1.0')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="screen-overlay"></div>
        <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="index.html" class="brand-wrap">
                    <img alt="Porto" width="143" height="40" src="{{asset('assets/img/logo/logo.png')}}">
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="index.html">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-transactions-1.html">
                            <i class="icon material-icons md-monetization_on"></i>
                            <span class="text">Transactions</span>
                        </a>
                        <div class="submenu">
                            <a href="page-transactions-1.html">Transaction 1</a>
                            <a href="page-transactions-2.html">Transaction 2</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="page-reviews.html">
                            <i class="icon material-icons md-comment"></i>
                            <span class="text">Appointments</span>
                        </a>
                    </li>
                </ul>
                <hr />
                <br />
                <br />
            </nav>
        </aside>
        <main class="main-wrap">
            <header class="main-header navbar">
                <div class="col-search">
                 
                </div>
                <div class="col-nav">
                    <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
                    <ul class="nav">
                        <li class="dropdown nav-item">
                            
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{asset('dashboard/assets/imgs/people/avatar-2.png')}}" alt="User" /></a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Dashboard</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Earnings</h6>
                                    <span>$13,456.5</span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Appointments</h6>
                                    <span>9.856</span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Earning</h6>
                                    <span>$6,982</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
             
            </section>
            <!-- content-main end// -->
            <footer class="main-footer font-xs">
                <div class="row pb-30 pt-15">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        ©, Cefmedics.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end">All rights reserved</div>
                    </div>
                </div>
            </footer>
        </main>
        <script src="{{ asset('dashboard/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/vendors/select2.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/vendors/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/vendors/chart.js') }}"></script>
        <!-- Main Script -->
        <script src="{{ asset('dashboard/assets/js/main.js?v=1.0') }}" type="text/javascript"></script>
        <script src="{{ asset('dashboard/assets/js/custom-chart.js') }}" type="text/javascript"></script>

    </body>
</html>
