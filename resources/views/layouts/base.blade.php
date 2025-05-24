<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Data Table-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/r-2.2.9/datatables.min.css" />

    <!-- Style Css -->

    <!-- Ionic Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/preloader.css') }}">
    <title>{{ env('APP_NAME') }} | Dashboard</title>
    @yield('css')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link aktif" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Request
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{-- <li><a class="dropdown-item" href="#">Add Request</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('requestTanaman') }}">Request New Plant</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('historyPengajuan') }}">Your Request</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Report
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('seeReport') }}">Your Report Payments</a>
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Report Realization</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b>{{ Auth::user()->name }}</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>

                                </form>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="header mb-5">
        <h1 class="page-heading">
            <span class="page-heading-primary">
                @yield('headerName')

            </span>
        </h1>
    </div>
    <!-- End Banner -->


    @yield('content')



    <!-- Footer -->
    <footer class="mt-5">
        <div class="footer-content text-center">
            © 2025 Floratrade Indonesia
        </div>
    </footer>
    <!-- End Footer -->




    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--DataTable-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/r-2.2.9/datatables.min.js">
    </script>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <!-- Script -->
    <script>
        $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    </script>
    @yield('js')

</body>

</html>
