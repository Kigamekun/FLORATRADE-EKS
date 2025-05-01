@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/index.css') }}">
@endsection
@section('menu')
    <div class="sidebar-menu-wrapper">
        <li class="listMenuName">
            <p>Admin Menu</p>
        </li>
        <li class="list-menu active">
            <div class="icon">
                <ion-icon name="grid"></ion-icon>
            </div>
            <a href="/admin" class="sidebar-menu">Dashboard Admin</a>
        </li>
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="repeat"></ion-icon>
            </div>
            <a href="{{ route('seePengajuan') }}" class="sidebar-menu">Request</a>
        </li>
        <li class="list-menu">
            <div class="icon">
                <ion-icon name="documents"></ion-icon>
            </div>
            <a href="{{ route('seeDocument') }}" class="sidebar-menu">Document</a>
        </li>
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="people"></ion-icon>
            </div>
            <a href="{{ route('listUser') }}" class="sidebar-menu">Manage User</a>
        </li>
        <li class="list-menu">
            <div class="icon">
                <ion-icon name="airplane"></ion-icon>
            </div>
            <a href="{{ route('countryLicense') }}" class="sidebar-menu">Country License</a>
        </li>

        <li class="list-menu">
            <div class="icon">
                <ion-icon name="rose"></ion-icon>
            </div>
            <a href="{{ route('listPlants') }}" class="sidebar-menu">List Plants</a>
        </li>

        <li class="list-menu">
            <div class="icon">
                <ion-icon name="checkmark-done-outline"></ion-icon>
            </div>
            <a href="{{ route('listRealisation') }}" class="sidebar-menu">Realisation</a>
        </li>


        <li class="list-menu">
            <div class="icon">
                <ion-icon name="wallet"></ion-icon>
            </div>
            <a href="{{ route('listPricing') }}" class="sidebar-menu">Pricing Management</a>
        </li>
        <li class="listMenuName">
            <p>User Menu</p>
        </li>
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="grid"></ion-icon>
            </div>
            <a href="/dashboard" class="sidebar-menu">Dashboard User</a>
        </li>
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="repeat"></ion-icon>
            </div>
            <a href="{{ route('historyPengajuan') }}" class="sidebar-menu">Request User</a>
        </li>


        <li class="list-menu">
            <div class="icon">
                <ion-icon name="documents"></ion-icon>
            </div>
            <a href="{{ route('seeReport') }}" class="sidebar-menu">Report</a>
        </li>

    </div>
@endsection


@section('content')
    <div class="contentMain">
        <h2 class="pageNameContent">Dashboard</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="wrapper-statistic-card">
            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="{{ url('assets/img/computermoney-icon.svg') }}" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Total Income</h3>
                    <h2 class="value-statistic">
                        Rp.{{ DB::table('submissions')->where('status', 8)->sum('jumlah_pembayaran') }}</h2>
                </div>
            </div>

            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="{{ url('assets/img/approvalDocument.svg') }}" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Total Request</h3>
                    <h2 class="value-statistic">{{ DB::table('submissions')->count() }}</h2>
                </div>
            </div>

            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="{{ url('assets/img/destination-icon.svg') }}" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Total Destination</h3>
                    <h2 class="value-statistic">{{ DB::table('submissions')->groupBy('negara_tujuan')->count() }}</h2>
                </div>
            </div>

            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="{{ url('assets/img/peopleIcon.svg') }}" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Total User</h3>
                    <h2 class="value-statistic">{{ DB::table('users')->count() }}</h2>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 detail">
                                {{-- <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                  <button class="nav-link active" id="nav-today-tab" data-bs-toggle="tab" data-bs-target="#nav-today" type="button" role="tab" aria-controls="nav-today" aria-selected="true">Today</button>
                                  <button class="nav-link" id="nav-week-tab" data-bs-toggle="tab" data-bs-target="#nav-week" type="button" role="tab" aria-controls="nav-week" aria-selected="false">Week</button>
                                  <button class="nav-link" id="nav-month-tab" data-bs-toggle="tab" data-bs-target="#nav-month" type="button" role="tab" aria-controls="nav-month" aria-selected="false">Month</button>
                                </div> --}}
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-today" role="tabpanel"
                                        aria-labelledby="nav-today-tab">
                                        <div class="valueRequest">
                                            <h2>{{ DB::table('submissions')->get()->count() }}</h2>
                                        </div>
                                        <p>Export Destination Country</p>
                                        <div class="wrapperProgres">

                                            @foreach ($negara as $key => $item)
                                                @if ($key < 6)
                                                    <div class="form-group">
                                                        <label class="label">{{ $item }}
                                                            <span class="valueNumber"></span>
                                                        </label>
                                                        <div class="progress" style="height: 2px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-week" role="tabpanel"
                                        aria-labelledby="nav-week-tab">
                                        <div class="valueRequest">
                                            <h2>831</h2>
                                        </div>
                                        <p>Request Operating System</p>
                                        <div class="wrapperProgres">
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-month" role="tabpanel"
                                        aria-labelledby="nav-month-tab">
                                        <div class="valueRequest">
                                            <h2>831</h2>
                                        </div>
                                        <p>Request Operating System</p>
                                        <div class="wrapperProgres">
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>

                                            </div>
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="label">America
                                                    <span class="valueNumber">77%</span>
                                                </label>
                                                <div class="progress" style="height: 2px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 maps">
                                <div id="world-map-markers" class="v_locations jvector-map main-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row statistic">
            <div class="col-12 mb-5 col-lg-8 mb-lg-0">
                <h3>Last Request</h3>
                <div class="wrapperTable table-responsive">
                    <table id="lasRequest" class="tables" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Request</th>
                                <th>Recipient's Name</th>
                                <th>Country Destination </th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lastPengajuan as $key => $item)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        <div class="code"><a style="text-decoration: none"
                                                class="numberCode"
                                                href="{{ route('detailRequest', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="detailName">
                                            <p class="name">{{ $item->nama_penerima }}</p>
                                            <p class="phoneNumber">
                                                {{ DB::table('users')->where('id', $item->user_id)->first()->phone }}</p>
                                        </div>
                                    </td>
                                    <td>{{ $item->negara_tujuan }}</td>
                                    <td>
                                            @if ($item->status == 0)
                                                <span class="badge bg-warning">Waiting Approve</span>
                                            @elseif ($item->status < 0)
                                                <span class="badge bg-danger">Decline</span>

                                            @elseif ($item->status >= 1 && $item->status <= 3)
                                                <span class="badge bg-warning">Progress ({{ $item->status }})</span>
                                            @elseif ($item->status == 4)
                                                <span class="badge bg-warning">Pending ({{ $item->status }})</span>
                                            @elseif ($item->status == 5)
                                                <span class="badge bg-info">Success ({{ $item->status }})</span>
                                            @elseif ($item->status == 6)
                                                <span class="badge bg-info">Progress ({{ $item->status }})</span>
                                            @elseif ($item->status == 7)
                                                <span class="badge bg-info">Progress ({{ $item->status }})</span>
                                            @elseif ($item->status == 8)
                                                <span class="badge bg-success">Selesai</span>


                                            @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <h3>Most Popular Plant</h3>
                <div class="wrapperChart">
                    <canvas id="mostPopularPlant"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/knob.bundle.js') }}"></script>

    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ url('assets/vendor/jvectormap.bundle.js') }}"></script>
    <!--Datatable By Bootstrap-->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <!--Chart Js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--App JS-->
    {{-- <script src="{{ url('assets/js/app.js') }}"></script> --}}

    <script>
        const labels = [
            'Anggrek',
            'Clarinervium',
            'Amydrium',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255 , 99 ,0)',
                    'rgb(255 , 99 ,200)',

                ],
                borderColor: 'rgb(2555, 255, 255)',
                data: [10, 10, 5],

            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };


        const myChart = new Chart(
            document.getElementById('mostPopularPlant'),
            config
        );
    </script>

    <script>
        $(document).ready(function() {
            $('#lasRequest').DataTable({
                "info": false,
                "paging": false,
                "ordering": false,
                "bSort": false,
            });
        });
    </script>

    <script>
        $(function() {

            var country = @json($country);
            var regla = @json($regions);

            console.log(country, regla);
            if ($('#world-map-markers').length > 0) {

                $('#world-map-markers').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: 'transparent',
                    borderColor: '#fff',
                    borderOpacity: 0.25,
                    borderWidth: 0,
                    color: '#e6e6e6',
                    regionStyle: {
                        initial: {
                            fill: '#6c757d'
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 5,
                            'fill': '#fff',
                            'fill-opacity': 1,
                            'stroke': '#000',
                            'stroke-width': 1,
                            'stroke-opacity': 0.4
                        },
                    },

                    markers: country,

                    series: {
                        regions: [{
                            values: regla,
                            attribute: 'fill'
                        }]
                    },

                    hoverOpacity: null,
                    normalizeFunction: 'linear',
                    zoomOnScroll: false,
                    scaleColors: ['#000000', '#000000'],
                    selectedColor: '#000000',
                    selectedRegions: [],
                    enableZoom: false,
                    hoverColor: '#fff',
                });
            }
        });
    </script>
@endsection
