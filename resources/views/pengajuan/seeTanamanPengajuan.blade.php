@extends('layouts.admin')


{{-- @section('css')
    <link rel="stylesheet" href="{{ url('assets/css/dashboard_user.css') }}">

@endsection --}}


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
            <li class="list-menu active">
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
                <a href="/dashboard" class="sidebar-menu">My Dashboard User</a>
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
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="leaf"></ion-icon>
                </div>
                <a href="{{ route('requestTanaman') }}" class="sidebar-menu">Request New Plant</a>
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
    <div class="contentMain">
        <h2 class="pageNameContent">Request</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/historyPengajuan">Request</a></li>
            <li class="breadcrumb-item active">List Plant in Request</li>
        </ol>
        @if ($pengajuan->status == 0)
            <!-- Button trigger modal -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Plant to Request
                </button>

            </div>
            <br>
        @endif
        <div class="wrapperTable table-responsive">
            <table id="requestTable" class="tables" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Request Code</th>

                        <th>Plant Name (Indonesia)</th>
                        <th>Plant Name (Latin)</th>
                        <th>Varietas</th>
                        <th>Quantity</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $key => $item)

                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ DB::table('submissions')->where('id', $item->pengajuan_id)->first()->pengajuan_id }}
                            </td>

                            <td>{{ DB::table('base_plants')->where('id', $item->tanaman_id)->first()->name_indonesia }}
                            </td>
                            <td>{{ DB::table('base_plants')->where('id', $item->tanaman_id)->first()->name_latin }}</td>
                            <td>{{ $item->varietas }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>
                                @if (DB::table('submissions')->where('id', $item->pengajuan_id)->first()->status == 0)
                                    <div class="buttonAction">
                                        <button type="button" data-id="{{ $item->id }}" data-bs-toggle="modal"
                                            data-bs-target="#updateTanaman" class="buttons success text-white me-2"
                                            data-jumlah="{{ $item->jumlah }}" data-varietas="{{ $item->varietas }}">
                                            {{-- <img src="{{ url('assets/img/close_icon.svg') }}" alt=""> --}}
                                            <img width="20" height="20"
                                                src="{{ url('assets/img/create-outline 1.svg') }}" alt="">
                                        </button>

                                        <a href="{{ route('deleteTanamanPengajuan', ['id' => $item->id]) }}"
                                            class="buttons danger text-white">
                                            <img width="20" height="20" src="{{ url('assets/img/trash-outline 1.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                @endif


                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add plants to request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('addTanamanToPengajuanPost', ['id' => $pengajuan->id]) }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <select name="plants" id="plants" class="form-select" aria-label="Default select example">
                            <option selected>Select your plants</option>
                            @foreach (DB::table('base_plants')->orderBy('name_indonesia', 'ASC')->get()
        as $item)
                                <option data-varietas="{{ $item->name_latin }}" value="{{ $item->id }}">
                                    {{ $item->name_indonesia }} - {{ $item->name_latin }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="Quantity Plants">Quantity Plants</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah">
                        <br>
                        <label for="Quantity Plants">Varietas</label>
                        <input type="text" class="form-control" name="varietas" id="varietas">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Understood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="updateTanaman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="updateTanamanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="modal-content" class="modal-content">
                <div class="modal-body">
                    Loading ...
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script>
        $(document).ready(function() {

            $('#requestTable').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>



    <script>
        $('#updateTanaman').on('shown.bs.modal', function(e) {


            var html = `
        <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add plants to request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/editTanamanPengajuanPost/${$(e.relatedTarget).data('id')}" method="post">
                    @csrf
                    <div class="modal-body">


                        <br>
                        <label for="Quantity Plants">Quantity Plants</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah" value="${$(e.relatedTarget).data('jumlah')}">
                        <br>
                        <label for="Quantity Plants">Varietas</label>
                        <input type="text" class="form-control" name="varietas" value="${$(e.relatedTarget).data('varietas')}" id="varietas" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Understood</button>
                    </div>
                </form>
`;

            $('#modal-content').html(html);

        })
    </script>

@endsection
