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
        <h2 class="pageNameContent">Request</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Request</li>
        </ol>

        <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="new-request-tab" data-bs-toggle="pill" data-bs-target="#newRequestTab"
                    type="button" role="tab" aria-controls="newRequestTab" aria-selected="true">New Request</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="list-request-tab" data-bs-toggle="pill" data-bs-target="#listRequestTab"
                    type="button" role="tab" aria-controls="listRequestTab" aria-selected="false">List Request</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="newRequestTab" role="tabpanel" aria-labelledby="new-request-tab">

                <div class="wrapperTable table-responsive">
                    <table id="newRequestTable" class="tables" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Request Code</th>

                                <th>Recipient's Name</th>
                                <th>Country Destination</th>
                                <th>Recipient's Address</th>
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                                <th class="no-sort"></th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($newData as $key => $item)

                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>
                                        <div class="code"><a style="text-decoration: none" class="numberCode"
                                                href="{{ route('detailRequest', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="detailName">
                                            <p class="name">{{ $item->nama_penerima }}</p>
                                            <p class="phoneNumber">
                                                {{ $item->notelp_penerima }}</p>
                                        </div>
                                    </td>
                                    <td>{{ $item->negara_tujuan }}</td>
                                    <td class="address">{{ $item->alamat_penerima }}</td>

                                    <td id="status-{{ $item->id }}">
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

                                    <td>
                                        @if ($item->status == 0)

                                            <div class="buttonAction">
                                                <a href="{{ route('approvePengajuan', ['id' => $item->id]) }}"
                                                    class="buttons success">
                                                    <img src="{{ url('assets/img/approveIcon.svg') }}" alt="">
                                                </a>
                                                <button type="button" data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" class="buttons danger">
                                                    <img src="{{ url('assets/img/close_icon.svg') }}" alt="">
                                                </button>
                                            </div>
                                        @elseif($item->status >= 1)

                                            @php
                                                $status = [];
                                                $status[0] = 'Menunggu Approval';
                                                $status[1] = 'Approved';
                                                $status[2] = 'Verifikasi Teknis';
                                                $status[3] = 'Persetujuan Dirjen';
                                                $status[4] = 'Permohonan Diterima Menunggu Pembayaran';

                                                $status[5] = 'Pembayaran Diterima';
                                                $status[6] = 'Proses Karantina';
                                                $status[7] = 'Pengiriman';
                                                $status[8] = 'Selesai';

                                            @endphp

                                            {{-- <label for="">ubah status</label> --}}
                                            <select name="status" class="form-control" data-id="{{ $item->id }}">
                                                @foreach ($status as $key => $st)


                                                    @if ($key == $item->status)
                                                        <option value="{{ $key }}" selected>{{ $st }}
                                                        </option>
                                                    @else
                                                        @if ($item->status < 5 && $key >= 5)
                                                            <option value="{{ $key }}" disabled>
                                                                {{ $st }}
                                                            </option>
                                                        @else

                                                            <option value="{{ $key }}">{{ $st }}
                                                            </option>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </select>

                                        @endif

                                    </td>

                                    <td>
                                        @if ($item->status == 7)
                                            <div class="buttonAction">

                                                @if ($item->no_resi == '')

                                                    <button type="button" class="buttons success" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop" data-id="{{ $item->id }}"
                                                        data-file="{{ $item->file_resi }}"
                                                        data-no="{{ $item->no_resi }}">
                                                        <img width="20" height="20"
                                                            src="{{ url('assets/img/approvalDocument.svg') }}" alt="">
                                                    </button>
                                                @else

                                                    <button type="button" class="buttons success" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop" data-id="{{ $item->id }}"
                                                        data-file="{{ $item->file_resi }}"
                                                        data-no="{{ $item->no_resi }}">
                                                        <img width="20" height="20"
                                                            src="{{ url('assets/img/approvalDocument.svg') }}" alt="">
                                                    </button>

                                                @endif
                                            </div>

                                        @endif
                                    </td>

                                    <td>
                                        <div class="buttonAction">

                                            <button type="button" class="buttons success" data-id="{{ $item->id }}"
                                                data-bs-toggle="modal" data-bs-target="#downloadModal"
                                                style="padding: .5rem 1rem;">
                                                <img width="20" height="20"
                                                    src="{{ url('assets/img/download-icon.svg') }}" alt="">
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>



            </div>

            <div class="tab-pane fade" id="listRequestTab" role="tabpanel" aria-labelledby="list-request-tab">

                <div class="wrapperTable table-responsive">
                    <table id="requestTable" class="tables" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Request Code</th>

                                <th>Recipient's Name</th>
                                <th>Country Destination</th>
                                <th>Recipient's Address</th>
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                                <th class="no-sort"></th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $key => $item)

                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>
                                        <div class="code">
                                            <a style="text-decoration: none" class="numberCode"
                                                href="{{ route('detailRequest', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="detailName">
                                            <p class="name">{{ $item->nama_penerima }}</p>
                                            <p class="phoneNumber">
                                                {{ $item->notelp_penerima }}
                                                </p>
                                        </div>
                                    </td>
                                    <td>{{ $item->negara_tujuan }}</td>
                                    <td class="address">{{ $item->alamat_penerima }}</td>

                                    <td id="status-{{ $item->id }}">
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
                                            <span class="badge bg-success">Done</span>


                                        @endif

                                    </td>

                                    <td>
                                        @if ($item->status == 0)

                                            <div class="buttonAction">
                                                <a href="{{ route('approvePengajuan', ['id' => $item->id]) }}"
                                                    class="buttons success">
                                                    <img src="{{ url('assets/img/approveIcon.svg') }}" alt="">
                                                </a>
                                                <button type="button" data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" class="buttons danger">
                                                    <img src="{{ url('assets/img/close_icon.svg') }}" alt="">
                                                </button>
                                            </div>
                                        @elseif($item->status >= 1)

                                            @php
                                                $status = [];
                                                $status[0] = 'Waiting For Approval';
                                                $status[1] = 'Approved';
                                                $status[2] = 'Verifikasi Teknis';
                                                $status[3] = 'Approval Director General';
                                                $status[4] = 'Your Request Is Accepted, Please Complete Payment';

                                                $status[5] = 'Payment Accepted';
                                                $status[6] = 'Quarantine Process';
                                                $status[7] = 'Delivery';
                                                $status[8] = 'Done';

                                            @endphp

                                            {{-- <label for="">ubah status</label> --}}
                                            <select name="status" class="stts form-control" data-id="{{ $item->id }}">
                                                @foreach ($status as $key => $st)


                                                    @if ($key == $item->status)
                                                        <option value="{{ $key }}" selected>{{ $st }}
                                                        </option>
                                                    @else
                                                        @if ($item->status < 5 && $key >= 5)
                                                            <option value="{{ $key }}" disabled>
                                                                {{ $st }}
                                                            </option>
                                                        @else

                                                            <option value="{{ $key }}">{{ $st }}
                                                            </option>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </select>

                                        @endif

                                    </td>

                                    <td id="act-{{ $item->id }}">
                                        @if ($item->status == 7)
                                            <div class="buttonAction">

                                                @if ($item->no_resi == '')

                                                    <button type="button" class="buttons success" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop" data-id="{{ $item->id }}"
                                                        data-file="{{ $item->file_resi }}"
                                                        data-no="{{ $item->no_resi }}"
                                                        data-courier="{{ $item->courier }}"
                                                        data-no_pyhto="{{ $item->no_pyhto }}"
                                                        data-ongkir="{{ $item->ongkir }}"
                                                         data-biaya_karantina="{{ $item->biaya_karantina }}"
                                                        data-airplane="{{ $item->airplane }}">
                                                        <img width="20" height="20"
                                                            src="{{ url('assets/img/file-tray-outline 1.svg') }}" alt="">
                                                    </button>
                                                @else

                                                    <button type="button" class="buttons success" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop" data-id="{{ $item->id }}"
                                                        data-file="{{ $item->file_resi }}"
                                                        data-no="{{ $item->no_resi }}"
                                                        data-courier="{{ $item->courier }}"
                                                        data-no_pyhto="{{ $item->no_pyhto }}"
                                                        data-ongkir="{{ $item->ongkir }}"
                                                         data-biaya_karantina="{{ $item->biaya_karantina }}"
                                                        data-airplane="{{ $item->airplane }}">
                                                        <img width="20" height="20"
                                                            src="{{ url('assets/img/file-tray-full-outline 1.svg') }}"
                                                            alt="">
                                                    </button>

                                                @endif
                                            </div>

                                        @endif
                                    </td>

                                    <td>
                                        <div class="buttonAction">
                                            <button type="button" class="buttons success" data-id="{{ $item->id }}"
                                                data-bs-toggle="modal" data-bs-target="#downloadModal"
                                                style="padding: .5rem 1rem;">
                                                <img width="20" height="20"
                                                    src="{{ url('assets/img/download-icon.svg') }}" alt="">
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>









    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Decline Requests</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('declinePengajuan') }}" method="post">

                        @csrf
                        <input type="hidden" name="idPengajuan" id="idDecline">
                        <div class="mb-3 w-80">
                            <label class="form-label" for="">Reason</label>
                            <textarea name="alasan" id="" class="form-control" cols="5" rows="5"></textarea>
                        </div>


                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success">Submit Reason</button>
                        </div>
                    </form>

                </div>
            </div>
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




    <!-- Modal -->
    <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="downloadModalLabel">Download Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modal-download" class="modal-body">

                </div>
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



        $('.stts').change(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/admin/changeStatus",
                method: "POST",
                data: {
                    status: $(this).val(),
                    id: $(this).data('id'),
                },
                success: function(data) {


                    $('#status-' + data.id).html(
                        '<span class="badge bg-' + data.bg + '">' + data.status + '</span>'
                    );
                    if (data.data.status == 7) {

                        $('#act-' + data.id).html(

                            `
                            <button type="button" style="margin-right: .5rem;
  background: #2DB878;display: flex;
  align-items: center;
  justify-content: center;
  padding: .5rem;
  border: none;
  border-radius: 6px;
  transition: .2s;" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop" data-id="${data.id}"
                                                        data-file="${data.data.file_resi}"
                                                        data-no="${data.data.no_resi}" data-no_pyhto="${data.data.no_pyhto}" data-ongkir="${data.data.ongkir}" data-courier="${data.data.courier}">
                                                        <img width="20" height="20"
                                                            src="{{ url('assets/img/file-tray-outline 1.svg') }}" alt="">
                                                    </button>
                            `
                        );
                    }

                    $.ajax({
                        url: "/admin/sendNotif",
                        method: "POST",
                        data: {

                            id: data.id,
                        }

                    });



                },
                error: function(data) {
                    console.log(data);


                }

            });
        });
    </script>

    <script>
        $('#staticBackdrop').on('shown.bs.modal', function(e) {
            if ($(e.relatedTarget).data('file') == '') {
                var html = `
<div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Receipt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/addResi/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="formResi${$(e.relatedTarget).data('id')}">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Courier | On Selected (${$(e.relatedTarget).data('courier')})</label>

                            <select   name="courier" class="courier form-select" required>
                                <option value="" selected>Select Courier</option>
                                    <option value="DHL">DHL</option>
                                    <option value="UPS">UPS</option>
                                    <option value="KARGO">KARGO</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Airplane</label>
                            <input type="text"   name="airplane" value="${$(e.relatedTarget).data('airplane')}" class="courier form-control">

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Number Receipt</label>
                            <input type="text" name="no_resi" value="${$(e.relatedTarget).data('no')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 1234567890 or JJD0099999999" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Number PhytoSanitary</label>
                            <input type="text" name="no_pyhto" value="${$(e.relatedTarget).data('no_pyhto')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12345" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ongkir</label>
                            <input type="number" name="ongkir" value="${$(e.relatedTarget).data('ongkir')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12000" required>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Biaya karantina</label>
                            <input type="number" name="biaya_karantina" value="${$(e.relatedTarget).data('biaya_karantina')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12000" required>
                        </div>

                        <input type="file" name="file" id="file" class="dropify" required>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>
`;
            } else {
                var html = `
<div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Receipt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/addResi/${$(e.relatedTarget).data('id')}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="formResi${$(e.relatedTarget).data('id')}">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Courier | On Selected (${$(e.relatedTarget).data('courier')})</label>
                            <select   name="courier" class="courier form-select">
                                <option value="" selected>Select Courier</option>
                                    <option value="DHL">DHL</option>
                                    <option value="UPS">UPS</option>
                                    <option value="KARGO">KARGO</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Airplane</label>
                            <input type="text"   name="airplane" value="" class="courier form-control">

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Number Receipt</label>
                            <input type="text" name="no_resi" value="${$(e.relatedTarget).data('no')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 1234567890 or JJD0099999999">
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Number PhytoSanitary</label>
                            <input type="text" name="no_pyhto" value="${$(e.relatedTarget).data('no_pyhto')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12345" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ongkir</label>
                            <input type="number" name="ongkir" value="${$(e.relatedTarget).data('ongkir')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12000" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Biaya karantina</label>
                            <input type="number" name="biaya_karantina" value="${$(e.relatedTarget).data('biaya_karantina')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="Examples: 12000" required>
                        </div>


                        <input type="file" name="file" data-default-file="/fileResi/${$(e.relatedTarget).data('file')}" id="file" class="dropify">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>
`;
            }

            $('#modal-content').html(html);
            $('.dropify').dropify();
        });




        $('#downloadModal').on('shown.bs.modal', function(e) {


            html = `


<div class="row mb-3">
    <div class="col-10">
        <p>Document Pengajuan</p>
    </div>
    <div class="col-2">
        <a href="/cetakPengajuan/${$(e.relatedTarget).data('id')}"
                                                class="btn btn-primary">
                                                <img width="20" height="20"
                                                    src="{{ url('assets/img/download-icon.svg') }}" alt="">
                                            </a>
    </div>
</div>
<div class="row mb-3">
    <div class="col-10">
        <p>Kebenaran Document</p>
    </div>
    <div class="col-2">
        <a href="/admin/cetakkebenaranDokumen/${$(e.relatedTarget).data('id')}"
                                                class="btn btn-primary">
                                                <img width="20" height="20"
                                                    src="{{ url('assets/img/download-icon.svg') }}" alt="">
                                            </a>
    </div>
</div>
<div class="row mb-3">
    <div class="col-10">
        <p>Informasi Tanaman</p>
    </div>
    <div class="col-2">
        <a href="/admin/informasiTanaman/${$(e.relatedTarget).data('id')}"
                                                class="btn btn-primary">
                                                <img width="20" height="20"
                                                    src="{{ url('assets/img/download-icon.svg') }}" alt="">
                                            </a>
    </div>
</div>

<div class="row mb-3">
    <div class="col-10">
        <p>Invoice</p>
    </div>
    <div class="col-2">
        <a href="/cetakInvoice/${$(e.relatedTarget).data('id')}"
                                                class="btn btn-primary">
                                                <img width="20" height="20"
                                                    src="{{ url('assets/img/download-icon.svg') }}" alt="">
                                            </a>
    </div>
</div>

            `;



            $('#modal-download').html(html);

        });
    </script>


@endsection
