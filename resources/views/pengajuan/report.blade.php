@extends('layouts.admin')


@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/dashboard-user.css') }}">
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
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="airplane"></ion-icon>
                </div>
                <a href="{{ route('countryLicense') }}" class="sidebar-menu">Country License</a>
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
            <li class="list-menu active">
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
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="repeat"></ion-icon>
            </div>
            <a href="{{ route('historyPengajuan') }}" class="sidebar-menu">Request</a>
        </li>
        <li class="list-menu active">
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
        <h2 class="pageNameContent">Report Requests</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Report</li>
        </ol>



        <div class="wrapperListRequest">



            <div class="wrapperFilter">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('filterReport') }}">

                            <div class="input-form">
                                <input type="date" class="form-control" name="start" placeholder="From Date">
                            </div>
                            <div class="input-form">
                                <input type="date" class="form-control" name="end" placeholder="Arrival Date">
                            </div>
                            <div class="input-form">
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
                                    <th class="table-text">Payment Amount</th>
                                    <th class="table-text">Payment Method</th>

                                    <th class="table-text">Status Message</th>
                                    <th class="table-text">Status</th>

                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                @foreach ($data as $key => $item)

                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td><a
                                                href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}" style="text-decoration: none; color: #2DB878;">{{ $item->pengajuan_id }}</a>
                                        </td>
                                        <td>{{ $item->jumlah_pembayaran }}</td>
                                        <td>{{ $item->payment_type }}</td>
                                        <td>{{ $item->payment_status_message }}</td>
                                        <td>
                                            @if ($item->payment_status == 1)
                                            <div class="status-content p-2 yellow">
                                                Pending
                                            </div>

                                            @elseif($item->payment_status == 2)
                                            <div class="status-content p-2 green">
                                                Success
                                            </div>

                                            @else
                                            <div class="status-content p-2 red">
                                                Failed
                                            </div>



                                            @endif

                                        </td>
                                        {{-- <td> <a class="btn btn-primary d-flex a
                                            lign-items-center w-100">
                                                <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Plants
                                            </a></td> --}}

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

        </div>
    </div>












@endsection


@section('js')
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
    </script>

@endsection
