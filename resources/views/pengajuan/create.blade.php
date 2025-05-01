@extends('layouts.base')


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


    <div class="container">

        <center>
            <h1>Form Pengajuan</h1>
        </center>


        <form autocomplete="off" action="{{ route('pengajuanPost') }}" method="post">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Plants</label>
            <select name="plants" id="plants" class="form-select" aria-label="Default select example">
                <option selected>Select your plants</option>
                @foreach (DB::table('tanaman_master')->orderBy('name_indonesia', 'ASC')->get()
        as $item)
                    <option data-varietas="{{ $item->name_latin }}" value="{{ $item->id }}">
                        {{ $item->name_indonesia }} - {{ $item->name_latin }}</option>
                @endforeach
            </select>
            <br>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Varietas</label>
                <input id="varietas" name="varietas" type="text" class="form-control">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Count</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>

            <br>
            <div class="autocomplete">
                <label for="exampleFormControlInput1" class="form-label">Country</label>
                <input id="country" type="text" name="country" class="form-control" placeholder="country">
            </div>
            <br>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Name</label>
                <input id="name" name="nama_penerima" type="text" value="{{ Auth::user()->name }}" class="form-control">
            </div>



            <br>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">User Address</label>
                <textarea class="form-control" name="alamat_penerima" id="exampleFormControlTextarea1"
                    rows="3">{{ Auth::user()->address }}</textarea>
            </div>

            <br>




            <button class="btn btn-success w-100">Kirim</button>
        </form>

    </div>




@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

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
