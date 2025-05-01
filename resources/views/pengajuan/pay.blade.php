@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css"
        integrity="sha512-0p3K0H3S6Q4bEWZ/WmC94Tgit2ular2/n0ESdfEX8l172YyQj8re1Wu9s/HT9T/T2osUw5Gx/6pAZNk3UKbESw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('assets/css/detail-request.css') }}">

@endsection


@section('content')


    <div class="contentMain">

        <div class="backMenu">
            <a href="request.html" class="text-anchor">
                <img src="../assets/img/back-icon.svg" alt="">
                Back
            </a>
        </div>
        <h5 class="requestCode">Detail Request<span style="margin-left: .4rem;"
                class="numberCode">{{ $pengajuan->pengajuan_id }}</span>
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
                                    <td>{{ $pengajuan->transaction_time }}</td>
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
                                    <td class="labelNameDetail">No Letter</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
            @if ($pengajuan->status >= 4)
            <div class="mt-4 d-flex justify-content-end">

                @if ($pengajuan->status >= 7)
                    <button class="btn btn-primary me-2" >Lihat Bukti</button>

            @endif

                @if ($pengajuan->status == 4)
                    <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
                @elseif($pengajuan->status > 4)

                    <button class="btn btn-primary" id="pay-button">Lihat Status</button>

                @endif

            </div>
            @endif
        </div>

        <div class="wrapperTimeLine">

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
            <div class="headTimeline">
                <h2>Timeline</h2>
            </div>
            <div class="bodyTimeLine">
                <ul class="timelineWrapper">
                    @foreach ($status as $key => $item)
                        @if ($pengajuan->status == 0)
                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">1. Request Accepted</h1>
                                    <p class="descriptionTimeline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus condimentum diam vehicula erat convallis, eget consectetur orci placerat.
                                        Morbi
                                        sollicitudin neque odio, eget mollis odio molestie malesuada. Mauris hendrerit elit
                                        quis
                                        mollis dapibus.</p>
                                    <div class="badge-timeline decline">
                                        <ion-icon name="close-outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                            @php
                                break;
                            @endphp

                        @elseif ($key < $pengajuan->status)

                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">{{ $key }}. {{ $item }}</h1>
                                    <p class="descriptionTimeline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus condimentum diam vehicula erat convallis, eget consectetur orci placerat.
                                        Morbi
                                        sollicitudin neque odio, eget mollis odio molestie malesuada. Mauris hendrerit elit
                                        quis
                                        mollis dapibus.</p>
                                    <div class="badge-timeline success">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                    </div>
                                </div>
                            </li>

                        @elseif($key == $pengajuan->status)

                            <li class="list-timeline">
                                <div class="body-timeline">
                                    <h1 class="titleTimeline">{{ $key }}. {{ $item }}</h1>
                                    <p class="descriptionTimeline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus condimentum diam vehicula erat convallis, eget consectetur orci placerat.
                                        Morbi
                                        sollicitudin neque odio, eget mollis odio molestie malesuada. Mauris hendrerit elit
                                        quis
                                        mollis dapibus.</p>
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


@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"
        integrity="sha512-lOrm9FgT1LKOJRUXF3tp6QaMorJftUjowOWiDcG5GFZ/q7ukof19V0HKx/GWzXCdt9zYju3/KhBNdCLzK8b90Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
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

                        }
                    });
                }
            });
        });
    </script>

@endsection
