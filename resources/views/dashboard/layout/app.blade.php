
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Cefmedics Dashboard</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="Cefmedics" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="Cefmedics" />
        <meta property="og:type" content="Cefmedics" />
        <meta property="og:url" content="Cefmedics" />
        <meta property="og:image" content="Cefmedics" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Template CSS -->
        <link href="{{ app()->environment('production') ? asset('public/dashboard/assets/css/main.css?v=1.0') : asset('dashboard/assets/css/main.css?v=1.0') }}" rel="stylesheet" type="text/css" />
        <link href="{{ app()->environment('production') ? asset('public/dashboard/assets/css/extra.css') : asset('dashboard/assets/css/extra.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="screen-overlay"></div>
        <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="{{url('/')}}" class="brand-wrap">
                    <img alt="Porto" width="143" height="40" src="{{asset('assets/img/logo/logo.png')}}">
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="{{route('userdashboard')}}">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('appointment')}}">
                            <i class="icon material-icons md-comment"></i>
                            <span class="text">Schedule an Appointment</span>
                        </a>
                    </li>
                @if(auth()->user()->user_type == 'admin')
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('payments')}}">
                            <i class="icon material-icons md-monetization_on"></i>
                            <span class="text">Payments</span>
                        </a>
                    </li>
                @endif
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('appointments')}}">
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
           
            {{ $slot }}
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
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/vendors/jquery-3.6.0.min.js') : asset('dashboard/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/vendors/bootstrap.bundle.min.js') : asset('dashboard/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/vendors/select2.min.js') : asset('dashboard/assets/js/vendors/select2.min.js') }}"></script>
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/vendors/perfect-scrollbar.js') : asset('dashboard/assets/js/vendors/perfect-scrollbar.js') }}"></script>
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/vendors/jquery.fullscreen.min.js') : asset('dashboard/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/vendors/chart.js') : asset('dashboard/assets/js/vendors/chart.js') }}"></script>
        <!-- Main Script -->
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/main.js?v=1.0') : asset('dashboard/assets/js/main.js?v=1.0') }}" type="text/javascript"></script>
        <script src="{{ app()->environment('production') ? asset('public/dashboard/assets/js/custom-chart.js') : asset('dashboard/assets/js/custom-chart.js') }}" type="text/javascript"></script>
    </body>
</html>
