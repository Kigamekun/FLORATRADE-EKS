@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css"
        integrity="sha512-0p3K0H3S6Q4bEWZ/WmC94Tgit2ular2/n0ESdfEX8l172YyQj8re1Wu9s/HT9T/T2osUw5Gx/6pAZNk3UKbESw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('assets/css/detail-request.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }
    </style>

    <div class="contentMain">
        <h2 class="pageNameContent">Detail Request</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            {{-- <li class="breadcrumb-item"><a href="/admin/seePengajuan">Request</a></li> --}}
            <li class="breadcrumb-item active">Detail Request </li>
        </ol>
        <h5 class="requestCode">Detail Request<a style="margin-left: .4rem;text-decoration:none;"
                href="{{ route('seeTanamanPengajuan', ['id' => $pengajuan->id]) }}"
                class="numberCode">{{ $pengajuan->pengajuan_id }}</a>
        </h5>

        <div class="wrapperDetailRequest">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td class="labelNameDetail">Kode Request</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->pengajuan_id }}</td>
                                    <td class="labelNameDetail">Date Request</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->date }} </td>
                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Module Catagory</td>
                                    <td>:</td>
                                    <td>Hortikultura</td>
                                    <td class="labelNameDetail">Date Verification</td>
                                    <td>:</td>
                                    <td>
                                        @if (is_null($pengajuan->transaction_time))
                                            -
                                        @else
                                            {{ $pengajuan->transaction_time }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Module</td>
                                    <td>:</td>
                                    <td>Pengeluaran Benih Hortikultura</td>
                                    <td class="labelNameDetail">Status</td>
                                    <td>:</td>
                                    <td>


                                        @if ($pengajuan->status == 0)
                                            <div class="status status-warning">Menunggu Approve</div>
                                        @elseif ($pengajuan->status < 0)
                                            <div class="status status-danger">Pengajuan Ditolak</div>
                                        @elseif ($pengajuan->status >= 1 && $pengajuan->status <= 3)
                                            <div class="status status-warning">Progress ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 4)
                                            <div class="status status-warning">Pending ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 5)
                                            <div class="status status-info">Success ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 6)
                                            <div class="status status-info">Progress ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 7)
                                            <div class="status status-info">Progress ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 8)
                                            <div class="status status-success">Selesai</div>
                                        @endif
                                    </td>

                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Pengiriman</td>
                                    <td>:</td>
                                    <td>

                                        @if ($pengajuan->status >= 4)

                                            @if ($pengajuan->status >= 7)
                                                @if ($pengajuan->courier == 'DHL')
                                                    <a href="https://www.dhl.com/id-en/home/tracking.html?tracking-id={{ $pengajuan->no_resi }}"
                                                        target="_blank" class="btn btn-primary me-2">Track
                                                        {{ $pengajuan->courier }}</a>
                                                @elseif($pengajuan->courier == 'UPS')
                                                    <a href="https://www.ups.com/WebTracking/processInputRequest?tracknum={{ $pengajuan->no_resi }}&loc=en_ID&requester=ST/trackdetails"
                                                        target="_blank" class="btn btn-primary me-2">Track
                                                        {{ $pengajuan->courier }}</a>
                                                @elseif($pengajuan->courier == 'KARGO')
                                                    <a class="btn btn-primary me-2">{{ $pengajuan->airplane }} -
                                                        {{ $pengajuan->no_resi }}</a>
                                                @endif
                                            @else
                                                <a target="_blank" class="btn btn-danger me-2">Belum Terkirim</a>
                                            @endif
                                        @else
                                            <a target="_blank" class="btn btn-danger me-2">Belum Terkirim</a>
                                        @endif

                                    </td>

                                    <td class="labelNameDetail">Phytosanitary</td>
                                    <td>:</td>
                                    <td>
                                        @if ($pengajuan->file_resi != '')
                                            <a href="{{ route('downloadPhyto', ['id' => $pengajuan->id]) }}"
                                                class="btn btn-primary me-2">Download File</a>
                                        @else
                                            <button class="btn btn-danger me-2">Belum Tersedia</button>
                                        @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td class="labelNameDetail">Status Pembayaran</td>
                                    <td>:</td>
                                    <td>

                                        @if ($pengajuan->status == 4)
                                            <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
                                        @elseif($pengajuan->status > 4)
                                            <button class="btn btn-primary" id="">Sukses</button>
                                        @endif

                                    </td>


                                </tr>





                            </tbody>
                        </table>
                    </div>


                </div>





            </div>

            <br>
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td class="labelNameDetail">Nama</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->nama_penerima }}</td>
                                    <td class="labelNameDetail">Email Penerima</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->email_penerima }} </td>
                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Phone</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->notelp_penerima }}</td>
                                    <td class="labelNameDetail">Nama Pemohon</td>
                                    <td>:</td>
                                    <td>
                                        {{ DB::table('users')->where('id', $pengajuan->user_id)->first()->name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="labelNameDetail">Nama Penerima</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->nama_penerima }}</td>
                                    <td class="labelNameDetail">Alamat Penerima</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->alamat_penerima }} </td>
                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Negara Tujuan</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->negara_tujuan }}</td>
                                    <td class="labelNameDetail">Courier</td>
                                    <td>:</td>
                                    <td>
                                        {{ $pengajuan->courier }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="labelNameDetail">File Lisensi</td>
                                    <td>:</td>
                                    <td>
                                        @if (Auth::user()->role == 0)
                                            @if (DB::table('countries')->where('country_name', $pengajuan->negara_tujuan)->first()->file_lisensi == 1)
                                                @if ($pengajuan->file_lisensi != '')
                                                    <a href="{{ route('downloadLicense', ['id' => $pengajuan->id]) }}"
                                                        class="btn btn-success me-2">Download Lisensi</a>
                                                @else
                                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#uploadLicense">
                                                        Upload Lisensi
                                                    </button>
                                                @endif
                                            @else
                                                -
                                            @endif
                                        @else
                                            @if (DB::table('countries')->where('country_name', $pengajuan->negara_tujuan)->first()->file_lisensi == 1)
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#uploadLicense">
                                                    Upload Lisensi
                                                </button>
                                            @else
                                                -
                                            @endif
                                        @endif



                                    </td>


                                    @if (!is_null($pengajuan->ongkir) && !is_null($pengajuan->biaya_karantina))
                                        <td class="labelNameDetail">
                                            Biaya Karantina
                                            (Rp.{{ number_format($pengajuan->biaya_karantina, 0, ',', '.') }})
                                            <br>
                                            Biaya Pengiriman (Rp.{{ number_format($pengajuan->ongkir, 0, ',', '.') }})
                                            <br>
                                            Total
                                            (Rp.{{ number_format($pengajuan->biaya_karantina + $pengajuan->ongkir, 0, ',', '.') }})
                                        </td>

                                        <td>:</td>
                                        <td>
                                            @if (!is_null($pengajuan->status_ongkir))
                                                <button class="btn btn-primary"
                                                    id="pay-ongkir-button">{{ $pengajuan->status_ongkir }}</button>
                                            @else
                                                <button class="btn btn-primary" id="pay-ongkir-button">Bayar
                                                    Sekarang</button>
                                            @endif
                                        </td>
                                    @endif
                                </tr>


                            </tbody>
                        </table>
                    </div>


                </div>





            </div>


            <br>

            {{-- <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td class="labelNameDetail">Kode Request</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->pengajuan_id }}</td>
                                    <td class="labelNameDetail">Date Request</td>
                                    <td>:</td>
                                    <td>{{ $pengajuan->date }} </td>
                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Module Catagory</td>
                                    <td>:</td>
                                    <td>Hortikultura</td>
                                    <td class="labelNameDetail">Date Verification</td>
                                    <td>:</td>
                                    <td>
                                        @if (is_null($pengajuan->transaction_time))
                                            -
                                        @else
                                            {{ $pengajuan->transaction_time }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Module</td>
                                    <td>:</td>
                                    <td>Pengeluaran Benih Hortikultura</td>
                                    <td class="labelNameDetail">Status</td>
                                    <td>:</td>
                                    <td>


                                        @if ($pengajuan->status == 0)
                                            <div class="status status-warning">Menunggu Approve</div>
                                        @elseif ($pengajuan->status < 0)
                                            <div class="status status-danger">Pengajuan Ditolak</div>

                                        @elseif ($pengajuan->status >= 1 && $pengajuan->status <= 3)
                                            <div class="status status-warning">Progress ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 4)
                                            <div class="status status-warning">Pending ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 5)
                                            <div class="status status-info">Success ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 6)
                                            <div class="status status-info">Progress ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 7)
                                            <div class="status status-info">Progress ({{ $pengajuan->status }})</div>
                                        @elseif ($pengajuan->status == 8)
                                            <div class="status status-success">Selesai</div>


                                        @endif
                                    </td>

                                </tr>
                                <tr>
                                    <td class="labelNameDetail">Pengiriman</td>
                                    <td>:</td>
                                    <td>

                                        @if ($pengajuan->status >= 4)

                                            @if ($pengajuan->status >= 7)
                                                @if ($pengajuan->courier == 'DHL')
                                                    <a href="https://www.dhl.com/id-en/home/tracking.html?tracking-id={{ $pengajuan->no_resi }}"
                                                        target="_blank" class="btn btn-primary me-2">Track
                                                        {{ $pengajuan->courier }}</a>
                                                @elseif($pengajuan->courier == 'UPS')
                                                    <a href="https://www.ups.com/WebTracking/processInputRequest?tracknum={{ $pengajuan->no_resi }}&loc=en_ID&requester=ST/trackdetails"
                                                        target="_blank" class="btn btn-primary me-2">Track
                                                        {{ $pengajuan->courier }}</a>
                                                @elseif($pengajuan->courier == 'POS')
                                                    <a href="https://www.dhl.com/id-en/home/tracking.html?tracking-id={{ $pengajuan->no_resi }}"
                                                        target="_blank" class="btn btn-primary me-2">Track DHL</a>
                                                @endif

                                            @else
                                                <a target="_blank" class="btn btn-danger me-2">Belum Terkirim</a>
                                            @endif


                                        @else
                                            <a target="_blank" class="btn btn-danger me-2">Belum Terkirim</a>
                                        @endif

                                    </td>

                                    <td class="labelNameDetail">PhytoSanitary</td>
                                    <td>:</td>
                                    <td>
                                        <a href="{{ route('downloadPhyto', ['id' => $pengajuan->id]) }}"
                                            class="btn btn-primary me-2">Download File</a>

                                    </td>
                                </tr>


                                <tr>
                                    <td class="labelNameDetail">Status Pembayaran</td>
                                    <td>:</td>
                                    <td>

                                        @if ($pengajuan->status == 4)
                                            <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
                                        @elseif($pengajuan->status > 4)


                                            <button class="btn btn-primary" id="">Sukses</button>

                                        @endif

                                    </td>


                                </tr>





                            </tbody>
                        </table>
                    </div>


                </div>





            </div> --}}


        </div>

        <div class="wrapperTimeLine">

            @php
                $status = [];
                $status[0] = 'Waiting for approval';
                $status[1] = 'Application accepted';
                $status[2] = 'Document verification';
                $status[3] = 'Document has been approved';
                $status[4] = 'Waiting payment';

                $status[5] = 'Payment accepted';
                $status[6] = 'Quarantine process';
                $status[7] = 'In-Delivery';
                $status[8] = 'Done';

                $detailStatus = [];
                $detailStatus[0] = 'Your request has been submitted, please wait a moment.';
                $detailStatus[1] = 'Your request has been received, please wait for the next process.';
                $detailStatus[2] = 'Your request is currently being checked by us, please wait a moment.';
                $detailStatus[3] = 'Your request is in the process of waiting for approval from the director general.';
                $detailStatus[4] = 'Your request has been received, please complete the payment process, to continue.';

                $detailStatus[5] = 'Yeay, your payment has been received, please wait for the next process.';
                $detailStatus[6] = 'Your plants is in quarantine, please wait a moment.';
                $detailStatus[7] = 'Yeay, your plants are on their way. please wait for the next process.';
                $detailStatus[8] = 'Your request its finished. Thank you for being late using our service.';

            @endphp
            <div class="headTimeline">
                <h2>Timeline</h2>
            </div>
            <div class="bodyTimeLine">
                <ul class="timelineWrapper">
                    @foreach ($status as $key => $item)
                        @if ($pengajuan->status < 0)
                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">{{ $key + 1 }}. {{ $item }}</h1>
                                    <p class="descriptionTimeline">{{ $detailStatus[$key] }}</p>
                                    <div class="badge-timeline decline">
                                        <ion-icon name="close-outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                            @php
                                break;
                            @endphp
                        @elseif($key == $pengajuan->status && $key == 8)
                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">{{ $key + 1 }}. {{ $item }}</h1>
                                    <p class="descriptionTimeline">{{ $detailStatus[$key] }}</p>
                                    <div class="badge-timeline success">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                        @elseif ($key < $pengajuan->status)
                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">{{ $key + 1 }}. {{ $item }}</h1>
                                    <p class="descriptionTimeline">{{ $detailStatus[$key] }}</p>
                                    <div class="badge-timeline success">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                        @elseif($key == $pengajuan->status)
                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">{{ $key + 1 }}. {{ $item }}</h1>
                                    <p class="descriptionTimeline">{{ $detailStatus[$key] }}</p>
                                    <div class="badge-timeline process">
                                        <ion-icon name="hourglass-outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="uploadLicense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="uploadLicenseLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadLicenseLabel">Add File Lisensi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('uploadLisensi', ['id' => $pengajuan->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        @if ($pengajuan->file_lisensi != '')
                            <input type="file" name="file" id="file"
                                data-default-file="/fileLisensi/{{ $pengajuan->file_lisensi }}" class="dropify" required>
                        @else
                            <input type="file" name="file" id="file" class="dropify" required>
                        @endif

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection



@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Script Inline for this pages-->
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>

    @if ($pay)
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"
            integrity="sha512-lOrm9FgT1LKOJRUXF3tp6QaMorJftUjowOWiDcG5GFZ/q7ukof19V0HKx/GWzXCdt9zYju3/KhBNdCLzK8b90Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>

        <script>
            const payButton = document.querySelector('#pay-button');
            payButton.addEventListener('click', function(e) {
                e.preventDefault();

                snap.pay('{{ $snapToken }}', {
                    // Optional
                    onSuccess: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(result);


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/cst",
                            method: "POST",
                            data: {
                                pengajuan: @json($pengajuan->id),
                                status: 'success',
                                result: result
                            },
                            success: function(data) {

                                new Noty({

                                    text: 'Payment Success',
                                    type: 'success',
                                    theme: 'sunset',
                                    animation: {
                                        open: function(promise) {
                                            var n = this;
                                            var Timeline = new mojs.Timeline();
                                            var body = new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    500: 0,
                                                    delay: 0,
                                                    duration: 500,
                                                    easing: 'elastic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            });

                                            var parent = new mojs.Shape({
                                                parent: n.barDom,
                                                width: 200,
                                                height: n.barDom
                                                    .getBoundingClientRect()
                                                    .height,
                                                radius: 0,
                                                x: {
                                                    [150]: -150
                                                },
                                                duration: 1.2 * 500,
                                                isShowStart: true
                                            });

                                            n.barDom.style['overflow'] = 'visible';
                                            parent.el.style['overflow'] = 'hidden';

                                            var burst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 10,
                                                top: n.barDom
                                                    .getBoundingClientRect()
                                                    .height + 75,
                                                degree: 90,
                                                radius: 75,
                                                angle: {
                                                    [-90]: 40
                                                },
                                                children: {
                                                    fill: '#EBD761',
                                                    delay: 'stagger(500, -50)',
                                                    radius: 'rand(8, 25)',
                                                    direction: -1,
                                                    isSwirl: true
                                                }
                                            });

                                            var fadeBurst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 2,
                                                degree: 0,
                                                angle: 75,
                                                radius: {
                                                    0: 100
                                                },
                                                top: '90%',
                                                children: {
                                                    fill: '#EBD761',
                                                    pathScale: [.65, 1],
                                                    radius: 'rand(12, 15)',
                                                    direction: [-1, 1],
                                                    delay: .8 * 500,
                                                    isSwirl: true
                                                }
                                            });

                                            Timeline.add(body, burst, fadeBurst,
                                                parent);
                                            Timeline.play();
                                        },
                                        close: function(promise) {
                                            var n = this;
                                            new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    0: 500,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                skewY: {
                                                    0: 10,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            }).play();
                                        }
                                    }
                                }).show();

                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        });
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(result);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/cst",
                            method: "POST",
                            data: {
                                pengajuan: @json($pengajuan->id),
                                status: 'pending',
                            },
                            success: function(data) {


                                new Noty({

                                    text: 'Payment Pending',
                                    type: 'warning',
                                    theme: 'sunset',
                                    animation: {
                                        open: function(promise) {
                                            var n = this;
                                            var Timeline = new mojs.Timeline();
                                            var body = new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    500: 0,
                                                    delay: 0,
                                                    duration: 500,
                                                    easing: 'elastic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            });

                                            var parent = new mojs.Shape({
                                                parent: n.barDom,
                                                width: 200,
                                                height: n.barDom
                                                    .getBoundingClientRect()
                                                    .height,
                                                radius: 0,
                                                x: {
                                                    [150]: -150
                                                },
                                                duration: 1.2 * 500,
                                                isShowStart: true
                                            });

                                            n.barDom.style['overflow'] = 'visible';
                                            parent.el.style['overflow'] = 'hidden';

                                            var burst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 10,
                                                top: n.barDom
                                                    .getBoundingClientRect()
                                                    .height + 75,
                                                degree: 90,
                                                radius: 75,
                                                angle: {
                                                    [-90]: 40
                                                },
                                                children: {
                                                    fill: '#EBD761',
                                                    delay: 'stagger(500, -50)',
                                                    radius: 'rand(8, 25)',
                                                    direction: -1,
                                                    isSwirl: true
                                                }
                                            });

                                            var fadeBurst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 2,
                                                degree: 0,
                                                angle: 75,
                                                radius: {
                                                    0: 100
                                                },
                                                top: '90%',
                                                children: {
                                                    fill: '#EBD761',
                                                    pathScale: [.65, 1],
                                                    radius: 'rand(12, 15)',
                                                    direction: [-1, 1],
                                                    delay: .8 * 500,
                                                    isSwirl: true
                                                }
                                            });

                                            Timeline.add(body, burst, fadeBurst,
                                                parent);
                                            Timeline.play();
                                        },
                                        close: function(promise) {
                                            var n = this;
                                            new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    0: 500,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                skewY: {
                                                    0: 10,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            }).play();
                                        }
                                    }
                                }).show();


                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        });
                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(result)


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/cst",
                            method: "POST",
                            data: {
                                pengajuan: @json($pengajuan->id),
                                status: 'error',
                            },
                            success: function(data) {
                                new Noty({

                                    text: 'Payment Error',
                                    type: 'danger',
                                    theme: 'sunset',
                                    animation: {
                                        open: function(promise) {
                                            var n = this;
                                            var Timeline = new mojs.Timeline();
                                            var body = new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    500: 0,
                                                    delay: 0,
                                                    duration: 500,
                                                    easing: 'elastic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            });

                                            var parent = new mojs.Shape({
                                                parent: n.barDom,
                                                width: 200,
                                                height: n.barDom
                                                    .getBoundingClientRect()
                                                    .height,
                                                radius: 0,
                                                x: {
                                                    [150]: -150
                                                },
                                                duration: 1.2 * 500,
                                                isShowStart: true
                                            });

                                            n.barDom.style['overflow'] = 'visible';
                                            parent.el.style['overflow'] = 'hidden';

                                            var burst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 10,
                                                top: n.barDom
                                                    .getBoundingClientRect()
                                                    .height + 75,
                                                degree: 90,
                                                radius: 75,
                                                angle: {
                                                    [-90]: 40
                                                },
                                                children: {
                                                    fill: '#EBD761',
                                                    delay: 'stagger(500, -50)',
                                                    radius: 'rand(8, 25)',
                                                    direction: -1,
                                                    isSwirl: true
                                                }
                                            });

                                            var fadeBurst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 2,
                                                degree: 0,
                                                angle: 75,
                                                radius: {
                                                    0: 100
                                                },
                                                top: '90%',
                                                children: {
                                                    fill: '#EBD761',
                                                    pathScale: [.65, 1],
                                                    radius: 'rand(12, 15)',
                                                    direction: [-1, 1],
                                                    delay: .8 * 500,
                                                    isSwirl: true
                                                }
                                            });

                                            Timeline.add(body, burst, fadeBurst,
                                                parent);
                                            Timeline.play();
                                        },
                                        close: function(promise) {
                                            var n = this;
                                            new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    0: 500,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                skewY: {
                                                    0: 10,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            }).play();
                                        }
                                    }
                                }).show();
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        });
                    }
                });
            });
        </script>


    @endif



    @isset($payOngkir)

        <script>
            const payOngkir = document.querySelector('#pay-ongkir-button');
            payOngkir.addEventListener('click', function(e) {
                e.preventDefault();

                snap.pay('{{ $snapTokenOngkir }}', {
                    // Optional
                    onSuccess: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);




                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/bayar_ongkir",
                            method: "POST",
                            data: {
                                pengajuan: @json($pengajuan->id),
                                result: result,
                            },
                            success: function(data) {

                                new Noty({

                                    text: 'Payment Success',
                                    type: 'success',
                                    theme: 'sunset',
                                    animation: {
                                        open: function(promise) {
                                            var n = this;
                                            var Timeline = new mojs.Timeline();
                                            var body = new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    500: 0,
                                                    delay: 0,
                                                    duration: 500,
                                                    easing: 'elastic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            });

                                            var parent = new mojs.Shape({
                                                parent: n.barDom,
                                                width: 200,
                                                height: n.barDom
                                                    .getBoundingClientRect()
                                                    .height,
                                                radius: 0,
                                                x: {
                                                    [150]: -150
                                                },
                                                duration: 1.2 * 500,
                                                isShowStart: true
                                            });

                                            n.barDom.style['overflow'] = 'visible';
                                            parent.el.style['overflow'] = 'hidden';

                                            var burst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 10,
                                                top: n.barDom
                                                    .getBoundingClientRect()
                                                    .height + 75,
                                                degree: 90,
                                                radius: 75,
                                                angle: {
                                                    [-90]: 40
                                                },
                                                children: {
                                                    fill: '#EBD761',
                                                    delay: 'stagger(500, -50)',
                                                    radius: 'rand(8, 25)',
                                                    direction: -1,
                                                    isSwirl: true
                                                }
                                            });

                                            var fadeBurst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 2,
                                                degree: 0,
                                                angle: 75,
                                                radius: {
                                                    0: 100
                                                },
                                                top: '90%',
                                                children: {
                                                    fill: '#EBD761',
                                                    pathScale: [.65, 1],
                                                    radius: 'rand(12, 15)',
                                                    direction: [-1, 1],
                                                    delay: .8 * 500,
                                                    isSwirl: true
                                                }
                                            });

                                            Timeline.add(body, burst, fadeBurst,
                                                parent);
                                            Timeline.play();
                                        },
                                        close: function(promise) {
                                            var n = this;
                                            new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    0: 500,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                skewY: {
                                                    0: 10,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            }).play();
                                        }
                                    }
                                }).show();
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        });
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/bayar_ongkir",
                            method: "POST",
                            data: {
                                pengajuan: @json($pengajuan->id),
                                result: result,
                            },
                            success: function(data) {
                                new Noty({

                                    text: 'Payment Pending',
                                    type: 'warning',
                                    theme: 'sunset',
                                    animation: {
                                        open: function(promise) {
                                            var n = this;
                                            var Timeline = new mojs.Timeline();
                                            var body = new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    500: 0,
                                                    delay: 0,
                                                    duration: 500,
                                                    easing: 'elastic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            });

                                            var parent = new mojs.Shape({
                                                parent: n.barDom,
                                                width: 200,
                                                height: n.barDom
                                                    .getBoundingClientRect()
                                                    .height,
                                                radius: 0,
                                                x: {
                                                    [150]: -150
                                                },
                                                duration: 1.2 * 500,
                                                isShowStart: true
                                            });

                                            n.barDom.style['overflow'] = 'visible';
                                            parent.el.style['overflow'] = 'hidden';

                                            var burst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 10,
                                                top: n.barDom
                                                    .getBoundingClientRect()
                                                    .height + 75,
                                                degree: 90,
                                                radius: 75,
                                                angle: {
                                                    [-90]: 40
                                                },
                                                children: {
                                                    fill: '#EBD761',
                                                    delay: 'stagger(500, -50)',
                                                    radius: 'rand(8, 25)',
                                                    direction: -1,
                                                    isSwirl: true
                                                }
                                            });

                                            var fadeBurst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 2,
                                                degree: 0,
                                                angle: 75,
                                                radius: {
                                                    0: 100
                                                },
                                                top: '90%',
                                                children: {
                                                    fill: '#EBD761',
                                                    pathScale: [.65, 1],
                                                    radius: 'rand(12, 15)',
                                                    direction: [-1, 1],
                                                    delay: .8 * 500,
                                                    isSwirl: true
                                                }
                                            });

                                            Timeline.add(body, burst, fadeBurst,
                                                parent);
                                            Timeline.play();
                                        },
                                        close: function(promise) {
                                            var n = this;
                                            new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    0: 500,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                skewY: {
                                                    0: 10,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            }).play();
                                        }
                                    }
                                }).show();


                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        });

                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/bayar_ongkir",
                            method: "POST",
                            data: {
                                pengajuan: @json($pengajuan->id),
                                result: result,
                            },
                            success: function(data) {
                                new Noty({

                                    text: 'Payment Error',
                                    type: 'danger',
                                    theme: 'sunset',
                                    animation: {
                                        open: function(promise) {
                                            var n = this;
                                            var Timeline = new mojs.Timeline();
                                            var body = new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    500: 0,
                                                    delay: 0,
                                                    duration: 500,
                                                    easing: 'elastic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            });

                                            var parent = new mojs.Shape({
                                                parent: n.barDom,
                                                width: 200,
                                                height: n.barDom
                                                    .getBoundingClientRect()
                                                    .height,
                                                radius: 0,
                                                x: {
                                                    [150]: -150
                                                },
                                                duration: 1.2 * 500,
                                                isShowStart: true
                                            });

                                            n.barDom.style['overflow'] = 'visible';
                                            parent.el.style['overflow'] = 'hidden';

                                            var burst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 10,
                                                top: n.barDom
                                                    .getBoundingClientRect()
                                                    .height + 75,
                                                degree: 90,
                                                radius: 75,
                                                angle: {
                                                    [-90]: 40
                                                },
                                                children: {
                                                    fill: '#EBD761',
                                                    delay: 'stagger(500, -50)',
                                                    radius: 'rand(8, 25)',
                                                    direction: -1,
                                                    isSwirl: true
                                                }
                                            });

                                            var fadeBurst = new mojs.Burst({
                                                parent: parent.el,
                                                count: 2,
                                                degree: 0,
                                                angle: 75,
                                                radius: {
                                                    0: 100
                                                },
                                                top: '90%',
                                                children: {
                                                    fill: '#EBD761',
                                                    pathScale: [.65, 1],
                                                    radius: 'rand(12, 15)',
                                                    direction: [-1, 1],
                                                    delay: .8 * 500,
                                                    isSwirl: true
                                                }
                                            });

                                            Timeline.add(body, burst, fadeBurst,
                                                parent);
                                            Timeline.play();
                                        },
                                        close: function(promise) {
                                            var n = this;
                                            new mojs.Html({
                                                el: n.barDom,
                                                x: {
                                                    0: 500,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                skewY: {
                                                    0: 10,
                                                    delay: 10,
                                                    duration: 500,
                                                    easing: 'cubic.out'
                                                },
                                                isForce3d: true,
                                                onComplete: function() {
                                                    promise(function(
                                                        resolve
                                                    ) {
                                                        resolve
                                                            ();
                                                    })
                                                }
                                            }).play();
                                        }
                                    }
                                }).show();

                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        });

                    }
                });
            });
        </script>
        @endif
    @endsection
