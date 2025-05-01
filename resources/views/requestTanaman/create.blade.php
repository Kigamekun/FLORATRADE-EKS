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
            <li class="list-menu active">
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
        <h2 class="pageNameContent">Request New Plant</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Request New Plant</li>
        </ol>

        <br>

        <div class="wrapperListRequest">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('requestTanamanPost') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="name_indonesia">Nama Indonesia</label>
                            <input type="text" name="name_indonesia" id="name_indonesia" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="name_latin">Nama Latin</label>
                            <input type="text" name="name_latin" id="name_latin" class="form-control">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">Kirim</button>
                        </div>
                    </form>

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

        $(document).ready(function() {
            $('#addRow').on('click', function() {
                let $cloned = $('.lines').eq(0).clone();

                $cloned.find('.remove').on('click', function() {
                    if ($('.lines').length != 1) {
                        $(this).parent().remove();

                    }
                });
                $cloned.appendTo($(".wrapperInputplant"));

                searchTanaman();
            });
            $('.remove').on('click', function() {

                if ($('.lines').length != 1) {
                    $(this).parent().remove();

                }
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
