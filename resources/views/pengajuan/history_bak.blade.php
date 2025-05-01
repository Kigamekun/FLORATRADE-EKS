@extends('layouts.base')


@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/dashboard_user.css') }}">

@endsection


@section('headerName')
    Your Request
@endsection

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


    <!-- Navtabs -->
    <div class="navtabs d-flex justify-content-center">
        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Done</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Progress</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-decline-tab" data-bs-toggle="pill" data-bs-target="#pills-decline"
                    type="button" role="tab" aria-controls="pills-decline" aria-selected="false">Decline</button>
            </li>
        </ul>
    </div>
    <div class="tab-content container" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="blog-head text-center mb-5">
                <h2>Done Request</h2>
            </div>

            <div class="cardd mb-3">
                <div class="cardd-content">

                    <form action="">
                        <div class="row">

                            <div class="col-12 col-md-4">
                                <label for="exampleInputEmail1" class="form-label">From Date</label>
                                <input type="date" class="form-control" id="from-date" aria-describedby="from-date">
                            </div>
                            <div class="col-12 col-md-4 mt-3 mt-md-0">
                                <label for="exampleInputEmail1" class="form-label">Arrival Date</label>
                                <input type="date" class="form-control" id="arrival-date" aria-describedby="arrival-date">
                            </div>
                            <div class="col-12 col-md-3 mt-3 mt-md-0">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-1">
                                <label for="exampleInputEmail1" class="form-label text-white">.</label><br>
                                <button class="btn green w-100">Filter</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <div class="cardd">
                <div class="cardd-content">
                    <table id="done" class="table" style="width:100%">

                        <thead class="headTable">
                            <tr>
                                <th class="table-text">#</th>
                                <th class="table-text">Kode</th>
                                <th class="table-text">Recipient's Name</th>
                                <th class="table-text">Recipient Address</th>
                                {{-- <th class="table-text">Plants</th> --}}
                                <th class="table-text">Date</th>

                                <th class="table-text">Status</th>

                            </tr>
                        </thead>
                        <tbody class="bodyTable">
                            @foreach ($done as $key => $item)

                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td><a
                                            href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                    </td>
                                    <td>{{ $item->nama_penerima }}</td>
                                    <td>{{ $item->alamat_penerima }}</td>
                                    {{-- <td> <a class="btn btn-primary d-flex align-items-center w-100">
                                            <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Plants
                                        </a></td> --}}
                                    <td>{{ $item->date }}</td>

                                    <td>
                                        <div class="status">


                                                <div class="status-content p-2 green">
                                                    Done
                                                </div>


                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="blog-head text-center mb-5">
                <h2>Progress</h2>
            </div>

            <div class="cardd mb-3">
                <div class="cardd-content">

                    <form action="">
                        <div class="row">

                            <div class="col-12 col-md-4">
                                <label for="exampleInputEmail1" class="form-label">From Date</label>
                                <input type="date" class="form-control" id="from-date" aria-describedby="from-date">
                            </div>
                            <div class="col-12 col-md-4 mt-3 mt-md-0">
                                <label for="exampleInputEmail1" class="form-label">Arrival Date</label>
                                <input type="date" class="form-control" id="arrival-date" aria-describedby="arrival-date">
                            </div>
                            <div class="col-12 col-md-3 mt-3 mt-md-0">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-1">
                                <label for="exampleInputEmail1" class="form-label text-white">.</label><br>
                                <button class="btn green w-100">Filter</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <div class="cardd mb-3">
                <div class="cardd-content">

                    <table id="progress" class="table" style="width:100%">

                        <thead class="headTable">
                            <tr>
                                <th class="table-text">#</th>
                                <th class="table-text">Kode</th>
                                <th class="table-text">Recipient's Name</th>
                                <th class="table-text">Recipient Address</th>
                                {{-- <th class="table-text">Plants</th> --}}
                                <th class="table-text">Date</th>

                                <th class="table-text">Status</th>
                                <th class="table-text">Action</th>

                            </tr>
                        </thead>
                        <tbody class="bodyTable">
                            @foreach ($progress as $key => $item)

                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td><a
                                            href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                    </td>
                                    <td>{{ $item->nama_penerima }}</td>
                                    <td>{{ $item->alamat_penerima }}</td>
                                    {{-- <td> <a class="btn btn-primary d-flex align-items-center w-100">
                                            <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Plants
                                        </a></td> --}}
                                    <td>{{ $item->date }}</td>

                                    <td>
                                        <div class="status">



                                                <div class="status-content p-2 yellow">
                                                    Progress
                                                </div>


                                        </div>
                                    </td>
                                    <td>
                                        @if ($item->status == 0)


                                            <a class="btn btn-primary d-flex align-items-center w-100">
                                                <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Details
                                            </a>
                                        @elseif ($item->status < 0)

                                            <a class="btn btn-primary d-flex align-items-center w-100">
                                                <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>See Reason
                                            </a>
                                        @elseif ($item->status == 1)

                                            <a href="{{ route('pay', ['id' => $item->id]) }}"
                                                class="btn btn-primary d-flex align-items-center w-100">
                                                Pay Now
                                            </a>


                                        @elseif ($item->status == 2)
                                            <a href="{{ route('seeTrackingStatus', ['id' => $item->id]) }}"
                                                class="btn btn-primary d-flex align-items-center w-100">
                                                <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Track
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



        <div class="tab-pane fade" id="pills-decline" role="tabpanel" aria-labelledby="pills-decline-tab">

            <div class="blog-head text-center mb-5">
                <h2>Decline Request</h2>
            </div>

            <div class="cardd mb-3">
                <div class="cardd-content">

                    <form action="">
                        <div class="row">

                            <div class="col-12 col-md-4">
                                <label for="exampleInputEmail1" class="form-label">From Date</label>
                                <input type="date" class="form-control" id="from-date" aria-describedby="from-date">
                            </div>
                            <div class="col-12 col-md-4 mt-3 mt-md-0">
                                <label for="exampleInputEmail1" class="form-label">Arrival Date</label>
                                <input type="date" class="form-control" id="arrival-date" aria-describedby="arrival-date">
                            </div>
                            <div class="col-12 col-md-3 mt-3 mt-md-0">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-1">
                                <label for="exampleInputEmail1" class="form-label text-white">.</label><br>
                                <button class="btn green w-100">Filter</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <div class="cardd mb-3">
                <div class="cardd-content">

                    <table id="decline" class="table" style="width:100%">

                        <thead class="headTable">
                            <tr>
                                <th class="table-text">#</th>
                                <th class="table-text">Kode</th>
                                <th class="table-text">Recipient's Name</th>
                                <th class="table-text">Recipient Address</th>
                                {{-- <th class="table-text">Plants</th> --}}
                                <th class="table-text">Date</th>

                                <th class="table-text">Status</th>
                                <th class="table-text">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bodyTable">
                            @foreach ($decline as $key => $item)

                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td><a
                                            href="{{ route('seeTanamanPengajuan', ['id' => $item->id]) }}">{{ $item->pengajuan_id }}</a>
                                    </td>
                                    <td>{{ $item->nama_penerima }}</td>
                                    <td>{{ $item->alamat_penerima }}</td>
                                    {{-- <td> <a class="btn btn-primary d-flex align-items-center w-100">
                                            <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Plants
                                        </a></td> --}}
                                    <td>{{ $item->date }}</td>

                                    <td>
                                        <div class="status">


                                                <div class="status-content p-2 red">
                                                    Declined
                                                </div>


                                        </div>
                                    </td>
                                    <td>



                                            <a class="btn btn-primary d-flex align-items-center w-100">
                                                <ion-icon name="eye" class="ps-2 pe-1"></ion-icon>Details

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>
    <!-- End Navtabs -->

@endsection


@section('js')
    {{-- <script src="{{ url('assets/js/dashboard.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#done').DataTable({
                scrollX: true,
                "columns": [{
                        "width": "5%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "20%"
                    },
                    {
                        "width": "25%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "20%"
                    },


                ],
            });


            $('#progress').DataTable({
                scrollX: true,
                "columns": [{
                        "width": "5%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "20%"
                    },
                    {
                        "width": "25%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "10%"
                    },
                    {
                        "width": "10%"
                    },

                ],
            });



            $('#decline').DataTable({
                scrollX: true,
                "columns": [{
                        "width": "5%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "20%"
                    },
                    {
                        "width": "25%"
                    },
                    {
                        "width": "15%"
                    },
                    {
                        "width": "10%"
                    },
                    {
                        "width": "10%"
                    },

                ],
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
