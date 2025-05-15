@extends('layouts.admin')


@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/dashboard-user.css') }}">

    <!--Styling Index-->
    <link rel="stylesheet" href="../assets/css/request-user.css">
    <link rel="stylesheet" href="{{ url('assets/css/table.css') }}">
    
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
                <a href="{{ route('seePengajuan') }}" class="sidebar-menu">Manage Request</a>
            </li>
            <li class="list-menu">
                <div class="icon">
                    <ion-icon name="documents"></ion-icon>
                </div>
                <a href="" class="sidebar-menu">Manage Document</a>
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
                <a href="{{ route('countryLicense') }}" class="sidebar-menu"> Manage Country License</a>
            </li>
            <li class="list-menu">
                <div class="icon">
                    <ion-icon name="rose"></ion-icon>
                </div>
                <a href="{{ route('listPlants') }}" class="sidebar-menu">Manage Plants</a>
            </li>

            <li class="list-menu">
                <div class="icon">
                    <ion-icon name="checkmark-done-outline"></ion-icon>
                </div>
                <a href="{{ route('listRealisation') }}" class="sidebar-menu">Manage Realisation</a>
            </li>


            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="wallet"></ion-icon>
                </div>
                <a href="{{ route('listPricing') }}" class="sidebar-menu">Manage Pricing</a>
            </li>
            <li class="listMenuName">
                <p>User Menu</p>
            </li>
            <li class="list-menu active">
                <div class="icon">
                    <ion-icon name="grid"></ion-icon>
                </div>
                <a href="/dashboard" class="sidebar-menu">Dashboard User</a>
            </li>
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="repeat"></ion-icon>
                </div>
                <a href="{{ route('historyPengajuan') }}" class="sidebar-menu">Manage Request User</a>
            </li>
            <li class="list-menu">
                <div class="icon">
                    <ion-icon name="documents"></ion-icon>
                </div>
                <a href="{{ route('seeReport') }}" class="sidebar-menu">Manage Report User</a>
            </li>

        </div>
    @endsection

@else


    @section('menu')
        <div class="sidebar-menu-wrapper">
            <li class="list-menu active">
                <div class="icon">
                    <ion-icon name="grid"></ion-icon>
                </div>
                <a href="/dashboard" class="sidebar-menu">My Dashboard</a>
            </li>
            <li class="list-menu ">
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
        <h2 class="pageNameContent">Dashboard User</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="wrapper-statistic-card">
            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="../assets/img/computermoney-icon.svg" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Total Request</h3>
                    <h2 class="value-statistic">{{DB::table('submissions')->where('user_id',Auth::user()->id)->count()}}</h2>
                </div>
            </div>

            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="../assets/img/approvalDocument.svg" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Request Done</h3>
                    <h2 class="value-statistic">{{DB::table('submissions')->where(['user_id'=>Auth::user()->id,'status'=>8])->count()}}</h2>
                </div>
            </div>

            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="../assets/img/destination-icon.svg" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Total Paid</h3>
                    <h2 class="value-statistic">Rp.{{ DB::table('submissions')->where('user_id',Auth::user()->id)->where('status','<',5)->sum('jumlah_pembayaran') }}</h2>
                </div>
            </div>

            <div class="statistic-card">
                <div class="icon-statistic-card">
                    <img src="../assets/img/peopleIcon.svg" alt="">
                </div>
                <div class="statistic-info">
                    <h3 class="label-statistic">Request Progress</h3>
                    <h2 class="value-statistic">{{DB::table('submissions')->where(['user_id'=>Auth::user()->id])->where('status','!=',8)->count()}}</h2>
                </div>
            </div>
        </div>

        <div class="wrapperListRequest">

            <ul class="nav nav-pills mb-3 tabsMenu" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="my-request-tab" data-bs-toggle="pill" data-bs-target="#myRequestTab"
                        type="button" role="tab" aria-controls="myRequestTab" aria-selected="true">My Request</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="add-request-tab" data-bs-toggle="pill"
                        data-bs-target="#addRequestTab" type="button" role="tab" aria-controls="addRequestTab"
                        aria-selected="false">Add Request</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="myRequestTab" role="tabpanel" aria-labelledby="my-request-tab">
                    <div class="wrapperFilter">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('filterRequest') }}">

                                    <div class="input-form">
                                        <label for="dateStart" class="form-label">Start Date</label>
                                        <input id="dateStart" type="date" class="form-control" name="start" placeholder="From Date">
                                    </div>
                                    <div class="input-form">
                                        <label for="dateEnd" class="form-label">End Date</label>
                                        <input id="dateEnd" type="date" class="form-control" name="end" placeholder="Arrival Date">
                                    </div>
                                    <div class="input-form">
                                        <label for="selectStatus" class="form-label">Status</label>
                                        <select name="status" id="selectStatus" class="form-select">
                                            <option value="">Status</option>
                                            <option value="1">Done</option>
                                            <option value="2">Progress</option>
                                            <option value="3">Decline</option>
                                        </select>
                                    </div>
                                    <div class="filterButton">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="wrapperTable table-responsive">
                        <table id="tableBri" class="tables" style="width:100%">

                            <thead class="headTable">
                                <tr>
                                    <th class="table-text">#</th>
                                    <th class="table-text">Kode</th>
                                    <th class="table-text">Nama Penerima</th>
                                    <th class="table-text">Alamat Penerima</th>

                                    <th class="table-text">Date</th>

                                    <th class="table-text">Status</th>
                                    <th class="table-text">Action</th>

                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                @foreach ($data as $key => $item)

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
                                        </td>
                                        <td>
                                            @if ($item->status == 0)


                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Details
                                                </a>
                                            @elseif ($item->status < 0)

                                            <button type="button" class="btn btn-primary w-100" data-keterangan="{{ $item->keterangan }}"
                                                data-bs-toggle="modal" data-bs-target="#reasonModal"
                                                style="padding: .5rem 1rem;">
                                                Why ?
                                            </button>
                                            @elseif ($item->status >= 1 && $item->status <= 3)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Track
                                                </a>




                                            @elseif ($item->status == 4)

                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Bayar Sekarang
                                                </a>

                                            @elseif ($item->status > 4 && $item->status < 8)
                                                <a href="{{ route('detailRequest', ['id' => $item->id]) }}"
                                                    class="btn btn-primary w-100">
                                                    Manage
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
                    <div class="wrapperAddRequest">
                        <form autocomplete="off" action="{{ route('pengajuanPost') }}" method="post">
                            @csrf

                            <div class="card">
                                <div class="card-body">
                                    <div class="wrapperInputAddRequst">
                                        <div class="column">
                                            <div class="input-form">
                                                <label for="name" class="form-label">Recipient's Name</label>
                                                <input type="text" name="nama_penerima" id="name" class="form-control" required>
                                            </div>
                                            <div class="input-form">
                                                <label for="Varietas" class="form-label">Phone Number</label>
                                                <input type="number" name="notelp_penerima" id="Varietas" class="form-control" required>
                                            </div>
                                            <div class="input-form">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email_penerima" id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="input-form">
                                                <label for="country" class="form-label">Country</label>
                                                <input type="text" id="search" name="country" placeholder="Search"
                                                    class="form-control" required/>
                                            </div>
                                            <div class="input-form">
                                                <label for="address" class="form-label">Recipient's Address</label>
                                                <textarea class="form-control" name="alamat_penerima" id="address"
                                                    cols="30" rows="4" placeholder="Fill your address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="buttonAddRows d-flex justify-content-end">
                                        <button class="btn btn-primary" type="button" id="addRow">Add</button>
                                    </div>
                                    <div class="wrapperInputplant">
                                        <div class="lines">
                                            <div class="wrapperInput">
                                                <div class="input-form">
                                                    <label for="plantName" class="form-label">Plant Name</label>
                                                    <input type="hidden" name="plants[]">
                                                    <input type="text" name="plantsName[]" id="plantName"
                                                        class="form-control search-tanaman" required>
                                                </div>
                                                <div class="input-form">
                                                    <label for="varietas" class="form-label">Varietas</label>
                                                    <input type="text" name="varietas[]" id="varietas"
                                                        class="form-control" required>
                                                </div>
                                                <div class="input-form">
                                                    <label for="count" class="form-label">Count</label>
                                                    <input type="number" name="jumlah[]" id="count" class="form-control" required>
                                                </div>
                                            </div>
                                            <button class="btn btn-danger remove" type="button">Delete</button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center w-100 mt-5">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
            $('#tableBri').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }]

            });
        });

        // $(document).ready(function() {
        //     $('#addRow').on('click', function() {
        //         // let $cloned = $('.lines').eq(0).clone();

        //         // $cloned.find('.remove').on('click', function() {
        //         //     if ($('.lines').length != 1) {
        //         //     $(this).parent().remove();

        //         //     }
        //         // });
        //         // $cloned.appendTo($(".wrapperInputplant"));
        //         $(".wrapperInputplant").append(`<div class="lines">
        //                                     <div class="wrapperInput">
        //                                         <div class="input-form">
        //                                             <label for="plantName" class="form-label">Plant Name</label>
        //                                             <input type="hidden" name="plants[]">
        //                                             <input type="text" name="plantsName[]" id="plantName"
        //                                                 class="form-control search-tanaman" required>
        //                                         </div>
        //                                         <div class="input-form">
        //                                             <label for="varietas" class="form-label">Varietas</label>
        //                                             <input type="text" name="varietas[]" id="varietas"
        //                                                 class="form-control" required>
        //                                         </div>
        //                                         <div class="input-form">
        //                                             <label for="count" class="form-label">Count</label>
        //                                             <input type="number" name="jumlah[]" id="count" class="form-control" required>
        //                                         </div>
        //                                     </div>
        //                                     <button class="btn btn-danger remove" type="button">Delete</button>
        //                                 </div>`
        //                             );


        //         searchTanaman();
        //     });
        //     $('.remove').on('click', function() {

        //         if ($('.lines').length != 1) {
        //         $(this).parent().remove();

        //         }
        //     });
        // });
        $(document).ready(function() {
            $("#addRow").on("click", function() {
                $(".wrapperInputplant").append('<div class="lines"><div class="wrapperInput"><div class="input-form"><label for="plantName" class="form-label">Plant Name</label><input type="hidden" name="plants[]"><input type="text" name="plantsName[]" id="plantName" class="form-control search-tanaman"></div><div class="input-form"><label for="varietas" class="form-label">Varietas</label><input type="text" name="varietas[]" id="varietas" class="form-control"></div><div class="input-form"><label for="count" class="form-label">Count</label><input type="text" name="jumlah[]" id="count" class="form-control"></div></div><button class="btn btn-danger remove" type="button">Delete</button></div>');
                searchTanaman();
            });
            $("body").on("click", ".remove", function () {
                $(this).closest(".lines").remove();
            });


            if ($('.lines').length < 2) {
                $('.remove').addClass('disabled');
            } else {
                $('.remove').removeClass('disabled');
            }
        });
    </script>

    <script>
        function autocomplete(inp, arr) {

            var currentFocus;

            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }






        $(document).ready(function() {

            $('#country').keyup(function() {
                var query = $(this).val();
                if (query != '') {
                    $.ajax({
                        url: "https://restcountries.com/v3.1/name/" + query,
                        method: "GET",

                        success: function(data) {
                            var countries = [];

                            for (let i = 0; i < data.length; i++) {
                                countries.push(data[i].name.common);
                            }

                            autocomplete(document.getElementById("country"), countries);

                        }
                    });
                }
            });




            $('#plants').change(function() {

                $('#varietas').val($('#plants option:selected').data('varietas'));
            });





        });



        $('#reasonModal').on('shown.bs.modal', function(e) {

            console.log('ad');
html = `

            <p>${$(e.relatedTarget).data('keterangan')}</p>

`;



$('#modal-reason').html(html);

});
    </script>

@endsection


{{-- <div class="wrapperAddRequest">
    <div class="card">
        <div class="card-body">
            <form autocomplete="off" action="{{ route('pengajuanPost') }}" method="post">
                @csrf

                <div class="wrapperInputAddRequst">
                    <div class="column">

                        <input type="text" id="search" name="search" placeholder="Search"
                            class="form-control" />
                        <div class="input-form">
                            <label for="plantName" class="form-label">Plant Name</label>
                            <select name="plants" id="plants" class="form-select"
                                aria-label="Default select example">
                                <option selected>Select your plants</option>
                                @foreach (DB::table('base_plants')->orderBy('name_indonesia', 'ASC')->get()
    as $item)
                                    <option data-varietas="{{ $item->name_latin }}"
                                        value="{{ $item->id }}">
                                        {{ $item->name_indonesia }} - {{ $item->name_latin }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-form">
                            <label for="country" class="form-label">Country Destination</label>
                            <select id="country" name="country" class="form-select">
                                @foreach (DB::table('countries')->get() as $item)
                                    <option value="{{ $item->country_name }}">
                                        {{ $item->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-form">
                            <label for="count" class="form-label">Count</label>
                            <input type="number" class="form-control" id="count" name="jumlah"
                                aria-describedby="count">
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-form">
                            <label for="Varietas" class="form-label">Varietas</label>
                            <input type="text" name="varietas" id="Varietas" class="form-control">
                        </div>
                        <div class="input-form">
                            <label for="name" class="form-label">Recipient's Name</label>
                            <input type="text" name="nama_penerima" value="{{ Auth::user()->name }}"
                                class="form-control" id="recipient-name"
                                aria-describedby="recipient-name">
                        </div>
                        <div class="input-form">
                            <label for="address" class="form-label">Recipient's Address</label>
                            <textarea class="form-control" name="alamat_penerima" id="address"
                                cols="30" rows="5"
                                placeholder="Fill your address">{{ Auth::user()->address }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="buttonSubmit w-100 d-flex justify-content-end">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
