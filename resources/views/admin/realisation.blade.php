@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/request.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('assets/css/table.css') }}">
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

        <li class="list-menu active">
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
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }

        option {
            color: black;
        }

    </style>
    <div class="contentMain">
        <h2 class="pageNameContent">Realisation</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Realisation</li>
        </ol>

        <div class="wrapperFilter">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('filterRealisation') }}">
                        <div class="row align-items-end">
                            <div class="input-form col-12 col-lg-5 mb-3 mb-lg-0">
                                <label for="dateStart" class="form-label">Start Date</label>
                                <input id="dateStart" type="date" class="form-control" name="start" placeholder="From Date">
                            </div>
                            <div class="input-form col-12 col-lg-6 mb-3 mb-lg-0">
                                <label for="dateEnd" class="form-label">End Date</label>
                                <input id="dateEnd" type="date" class="form-control" name="end" placeholder="Arrival Date">
                            </div>
                            <div class="filterButton col-12 col-lg-1">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="wrapperTable table-responsive">

            <table id="requestTable" class="tables" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>

                        <th>Nama</th>
                        <th>Negara</th>
                        <th>No SIP</th>
                        <th>Tgl realisasi</th>
                        <th>No Phytosanitary</th>
                        <th>SIP</th>
                        <th>Terealisasi</th>
                        <th>Invoice</th>
                        <th>Action</th>

                    </tr>



                </thead>
                <tbody>

                    @foreach ($data as $key => $item)
                        <tr>

                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama_penerima }}</td>
                            <td>{{ $item->negara_tujuan }}</td>
                            <td>{{ $item->no_sip }}</td>
                            <td>{{ $item->date_pyhto }}</td>
                            <td>{{ $item->no_pyhto }}</td>
                            <td>{{ $item->total_tanaman }}</td>
                            <td>{{ $item->terealisasi }}</td>
                            <td>{{ $item->invoice_usd }}</td>
                            <td>
                                <div class="buttonAction">


                                    <button type="button" class="buttons success" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop" data-id="{{ $item->id }}"
                                        data-no_sip="{{ $item->no_sip }}" data-no_pyhto="{{ $item->no_pyhto }}"
                                        data-date_pyhto="{{ $item->date_pyhto }}"
                                        data-invoice_usd="{{ $item->invoice_usd }}"
                                        data-total_tanaman="{{ $item->total_tanaman }}"
                                        data-terealisasi="{{ $item->terealisasi }}">
                                        <img width="20" height="20" src="{{ url('assets/img/file-tray-outline 1.svg') }}"
                                            alt="">
                                    </button>

                                </div>

                            </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>











    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="modal-content" class="modal-content">

            </div>
        </div>
    </div>






@endsection



@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Script Inline for this pages-->
    <script>
        $(document).ready(function() {

            $('#requestTable').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }]
            });
            $('#newRequestTable').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }]
            });
        });
    </script>



    <script>
        $('#exampleModal').on('shown.bs.modal', function(e) {
            $('#idDecline').val($(e.relatedTarget).data('id'));

        });
    </script>

    <script>
        $('#staticBackdrop').on('shown.bs.modal', function(e) {
            var html = `
            <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Realisation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/editRealisation/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="formResi${$(e.relatedTarget).data('id')}">


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No SIP</label>
                            <input type="text"   name="no_sip" value="${$(e.relatedTarget).data('no_sip')}" class="courier form-control">

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NO PyhtoSanitary</label>
                            <input type="text"   name="no_pyhto" value="${$(e.relatedTarget).data('no_pyhto')}" class="courier form-control">

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Invoice USD</label>
                            <input type="number"   name="invoice_usd" value="${$(e.relatedTarget).data('invoice_usd')}" class="courier form-control">

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Tanaman</label>
                            <input type="number" name="total_tanaman" value="${$(e.relatedTarget).data('total_tanaman')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 1234567890 or JJD0099999999" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Terealisasi</label>
                            <input type="number" name="terealisasi" value="${$(e.relatedTarget).data('terealisasi')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12345" required>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>`;

            $('#modal-content').html(html);


        });
    </script>


@endsection
