@extends('layouts.admin')


@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/dashboard-user.css') }}">

    <!--Styling Index-->
    <link rel="stylesheet" href="../assets/css/request-user.css">
@endsection


@if (Auth::user()->role == 0)

    @section('menu')
        <div class="sidebar-menu-wrapper">
            <li class="listMenuName">
                <p>Admin Menu</p>
            </li>
            <li class="list-menu ">
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
                <a href="" class="sidebar-menu">Document</a>
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


            <li class="list-menu ">
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
            <li class="list-menu active">
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

@else


    @section('menu')
        <div class="sidebar-menu-wrapper">
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="grid"></ion-icon>
                </div>
                <a href="/dashboard" class="sidebar-menu">My Dashboard</a>
            </li>
            <li class="list-menu active">
                <div class="icon">
                    <ion-icon name="repeat"></ion-icon>
                </div>
                <a href="{{ route('historyPengajuan') }}" class="sidebar-menu">Request</a>
            </li>
            <li class="list-menu">
                <div class="icon">
                    <ion-icon name="documents"></ion-icon>
                </div>
                <a href="{{ route('seeReport') }}" class="sidebar-menu">Report</a>
            </li>
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="leaf"></ion-icon>
                </div>
                <a href="{{ route('requestTanaman') }}" class="sidebar-menu">Request New Plant</a>
            </li>
        </div>
    @endsection

@endif



@section('content')

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        .autocomplete {
            /*the container must be positioned relative:*/
            width: 100%;
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type=text] {
            background-color: #f1f1f1;
            width: 100%;
        }

        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

    </style>





    <div class="contentMain">
        <h2 class="pageNameContent">Requests User</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Request</li>
        </ol>



        <div class="wrapperListRequest">

            <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="my-request-tab" data-bs-toggle="pill" data-bs-target="#myRequestTab"
                        type="button" role="tab" aria-controls="myRequestTab" aria-selected="true">Done</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="add-request-tab" data-bs-toggle="pill"
                        data-bs-target="#addRequestTab" type="button" role="tab" aria-controls="addRequestTab"
                        aria-selected="false">Progress</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="add-request-tab" data-bs-toggle="pill" data-bs-target="#declineTab"
                        type="button" role="tab" aria-controls="declineTab" aria-selected="false">Decline</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="myRequestTab" role="tabpanel" aria-labelledby="my-request-tab">
                    {{-- <div class="wrapperFilter">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="input-form">
                                        <input type="date" class="form-control" placeholder="From Date">
                                    </div>
                                    <div class="input-form">
                                        <input type="date" class="form-control" placeholder="Arrival Date">
                                    </div>
                                    <div class="input-form">
                                        <select name="status" id="selectStatus" class="form-select">
                                            <option value="1">Status</option>
                                            <option value="1">Done</option>
                                            <option value="1">Decline</option>
                                        </select>
                                    </div>
                                    <div class="filterButton">
                                        <button class="btn btn-primary">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div class="wrapperTable table-responsive">
                        <table id="done" class="tables" style="width:100%">

                            <thead class="headTable">
                                <tr>
                                    <th class="table-text">#</th>
                                    <th class="table-text">Kode</th>
                                    <th class="table-text">Recipient's Name</th>
                                    <th class="table-text">Recipient Address</th>

                                    <th class="table-text">Date</th>

                                    <th class="table-text">Status</th>
                                    <th class="table-text">Action</th>

                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                @foreach ($done as $key => $item)

                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a style="text-decoration: none" class="numberCode"
                                                href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}" style="text-decoration: none">{{ $item->pengajuan_id }}</a>
                                        </td>
                                        <td>{{ $item->nama_penerima }}</td>
                                        <td>{{ $item->alamat_penerima }}</td>

                                        <td>{{ $item->date }}</td>

                                        <td>
                                            <div class="status">


                                                @if ($item->status == 0)
                                                    <span class="badge bg-warning">Menunggu Approve</span>
                                                @elseif ($item->status < 0)
                                                    <span class="badge bg-danger">Pengajuan Ditolak</span>

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


                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->status == 0)


                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Details
                                                </a>
                                            @elseif ($item->status < 0)

                                                <a class="btn btn-primary d-flex align-items-center w-100">
                                                    Why ?
                                                </a>
                                            @elseif ($item->status >= 1 && $item->status <= 3)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Track
                                                </a>




                                            @elseif ($item->status == 4)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Pay Now
                                                </a>

                                            @elseif ($item->status > 4 && $item->status <= 8)
                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Track
                                                </a>

                                            @endif

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="addRequestTab" role="tabpanel" aria-labelledby="add-request-tab">
                    {{-- <div class="wrapperFilter">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="input-form">
                                        <input type="date" class="form-control" placeholder="From Date">
                                    </div>
                                    <div class="input-form">
                                        <input type="date" class="form-control" placeholder="Arrival Date">
                                    </div>
                                    <div class="input-form">
                                        <select name="status" id="selectStatus" class="form-select">
                                            <option value="1">Status</option>
                                            <option value="1">Done</option>
                                            <option value="1">Decline</option>
                                        </select>
                                    </div>
                                    <div class="filterButton">
                                        <button class="btn btn-primary">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div class="wrapperTable table-responsive">
                        <table id="progress" class="tables" style="width:100%">

                            <thead class="headTable">
                                <tr>
                                    <th class="table-text">#</th>
                                    <th class="table-text">Kode</th>
                                    <th class="table-text">Recipient's Name</th>
                                    <th class="table-text">Recipient Address</th>

                                    <th class="table-text">Date</th>

                                    <th class="table-text">Status</th>
                                    <th class="table-text">Action</th>

                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                @foreach ($progress as $key => $item)

                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a style="text-decoration: none" class="numberCode"
                                                href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                        </td>
                                        <td>{{ $item->nama_penerima }}</td>
                                        <td>{{ $item->alamat_penerima }}</td>

                                        <td>{{ $item->date }}</td>

                                        <td>
                                            <div class="status">


                                                @if ($item->status == 0)
                                                    <span class="badge bg-warning">Menunggu Approve</span>
                                                @elseif ($item->status < 0)
                                                    <span class="badge bg-danger">Pengajuan Ditolak</span>

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


                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->status == 0)


                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Details
                                                </a>
                                            @elseif ($item->status < 0)

                                                <a class="btn btn-primary w-100">
                                                    Why ?
                                                </a>
                                            @elseif ($item->status >= 1 && $item->status <= 3)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Track
                                                </a>




                                            @elseif ($item->status == 4)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Pay Now
                                                </a>

                                            @elseif ($item->status > 4 && $item->status < 8)
                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Track
                                                </a>

                                            @endif

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>


                <div class="tab-pane fade" id="declineTab" role="tabpanel" aria-labelledby="add-request-tab">
                    {{-- <div class="wrapperFilter">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="input-form">
                                        <input type="date" class="form-control" placeholder="From Date">
                                    </div>
                                    <div class="input-form">
                                        <input type="date" class="form-control" placeholder="Arrival Date">
                                    </div>
                                    <div class="input-form">
                                        <select name="status" id="selectStatus" class="form-select">
                                            <option value="1">Status</option>
                                            <option value="1">Done</option>
                                            <option value="1">Decline</option>
                                        </select>
                                    </div>
                                    <div class="filterButton">
                                        <button class="btn btn-primary">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div class="wrapperTable table-responsive">
                        <table id="decline" class="tables" style="width:100%">

                            <thead class="headTable">
                                <tr>
                                    <th class="table-text">#</th>
                                    <th class="table-text">Kode</th>
                                    <th class="table-text">Recipient's Name</th>
                                    <th class="table-text">Recipient Address</th>

                                    <th class="table-text">Date</th>

                                    <th class="table-text">Status</th>
                                    <th class="table-text">Action</th>

                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                @foreach ($decline as $key => $item)

                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a style="text-decoration: none" class="numberCode"
                                                href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                        </td>
                                        <td>{{ $item->nama_penerima }}</td>
                                        <td>{{ $item->alamat_penerima }}</td>

                                        <td>{{ $item->date }}</td>

                                        <td>
                                            <div class="status">


                                                @if ($item->status == 0)
                                                    <span class="badge bg-warning">Menunggu Approve</span>
                                                @elseif ($item->status < 0)
                                                    <span class="badge bg-danger">Pengajuan Ditolak</span>

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


                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->status == 0)


                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Details
                                                </a>
                                            @elseif ($item->status < 0)

                                            <button type="button" class="btn btn-primary w-100" data-keterangan="{{ $item->keterangan }}"
                                                data-bs-toggle="modal" data-bs-target="#reasonModal"
                                                style="padding: .5rem 1rem;">
                                                Why ?
                                            </button>
                                            @elseif ($item->status >= 1 && $item->status <= 3)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Track
                                                </a>




                                            @elseif ($item->status == 4)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Pay Now
                                                </a>

                                            @elseif ($item->status > 4 && $item->status < 8)
                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary d-flex align-items-center w-100">
                                                    Track
                                                </a>

                                            @endif

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <div class="modal fade" id="reasonModal" tabindex="-1" aria-labelledby="reasonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reasonModalLabel">Reason</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modal-reason" class="modal-body">

                </div>
            </div>
        </div>
    </div>



@endsection


@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";

        $('#search').typeahead({
            source: function(query, process) {
                return $.get(route, {
                    query: query
                }, function(data) {

                    return process(data);
                });
            }
        });


        var routes = "{{ url('autocomplete-search-tanaman') }}";

        $('.search-tanaman').typeahead({
            source: function(query, process) {
                return $.get(routes, {
                    query: query
                }, function(data) {

                    return process(data.name);
                });
            },
            displayText: function(data) {
                var myarr = data.split('/');
                return myarr[0];
            },
            afterSelect: function(data) {
                var myarr = data.split('/');

                this.$element[0].previousElementSibling.value = myarr[1];
            }

        });


        function searchTanaman() {

            var routes = "{{ url('autocomplete-search-tanaman') }}";

            $('.search-tanaman').typeahead({
                source: function(query, process) {
                    return $.get(routes, {
                        query: query
                    }, function(data) {

                        return process(data.name);
                    });
                },
                displayText: function(data) {
                    var myarr = data.split('/');
                    return myarr[0];
                },
                afterSelect: function(data) {
                    var myarr = data.split('/');

                    this.$element[0].previousElementSibling.value = myarr[1];
                }

            });

        }
    </script>
    {{-- <script src="{{ url('assets/js/dashboard.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#done').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }]

            });

            $('#progress').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }]

            });

            $('#decline').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }]

            });
        });
    </script>

<script>

$('#reasonModal').on('shown.bs.modal', function(e) {

console.log('ad');
html = `

<p>${$(e.relatedTarget).data('keterangan')}</p>

`;



$('#modal-reason').html(html);

});
</script>
@endsection
