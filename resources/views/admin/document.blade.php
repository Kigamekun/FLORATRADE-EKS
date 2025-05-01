@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/country-license.css') }}">
@endsection



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
        <li class="list-menu active">
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
        <li class="list-menu ">
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
        <h2 class="pageNameContent">Document Manager</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Document Manager</li>
        </ol>

        <div class="wrapperTable table-responsive">
            <table id="countryList" class="tables" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Pengajuan</th>
                        <th>PhytoSanitary</th>
                        <th>File License</th>

                        <th>File Pengajuan</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <div class="code"><a style="text-decoration: none" class="numberCode"
                                        href="{{ route('detailRequest', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                </div>
                            </td>
                            <td>
                                @if ($item->file_resi != '')
                                    <a href="{{ route('downloadPhyto', ['id' => $item->id]) }}"
                                        class="btn btn-primary me-2">Download File</a>

                                @else
                                    <button class="btn btn-danger me-2">Belum Tersedia</button>
                                @endif
                            </td>
                            <td>
                                @if ($item->file_lisensi != '')
                                    <a href="{{ route('downloadLicense', ['id' => $item->id]) }}"
                                        class="btn btn-primary me-2">Download Lisensi</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <div class="buttonAction">
                                    <a href="{{ route('cetakPengajuan', ['id' => $item->id]) }}" class="buttons success">
                                        <img width="20" height="20" src="{{ url('assets/img/download-icon.svg') }}"
                                            alt="">
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $('#countryList').DataTable({
                "info": false,
                "bSort": false,
            });
        });
    </script>
@endsection
