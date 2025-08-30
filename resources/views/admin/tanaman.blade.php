@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/country-license.css') }}">
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
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="airplane"></ion-icon>
            </div>
            <a href="{{ route('countryLicense') }}" class="sidebar-menu">Country License</a>
        </li>

        <li class="list-menu active">
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

        <li class="list-menu">
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
        <h2 class="pageNameContent">Plants List</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Plants List</li>
        </ol>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add plants
            </button>
        </div>
        <div class="wrapperTable table-responsive">
            <table id="countryList" class="tables" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Indonesia</th>
                        <th>Nama Latin</th>
                        <th>Harga - USD</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <div class="detailName">
                                    <p class="name">{{ $item->name_indonesia }}</p>
                                </div>
                            </td>

                            <td>
                                <div class="detailName">
                                    <p class="name">{{ $item->name_latin }}</p>
                                </div>
                            </td>

                            <td>
                                <div class="detailName">
                                    <p class="name">{{ $item->price }}</p>
                                </div>
                            </td>
                            <td>

                                <div class="buttonAction">
                                    <button type="button" data-id="{{ $item->id }}" data-bs-toggle="modal"
                                        data-bs-target="#updateTanaman" class="buttons success text-white me-2"
                                        data-nama-indonesia="{{ $item->name_indonesia }}"
                                        data-nama-latin="{{ $item->name_latin }}" data-price="{{ $item->price }}">

                                        <img width="20" height="20" src="{{ url('assets/img/create-outline 1.svg') }}"
                                            alt="">
                                    </button>

                                    <a href="{{ route('deleteTanaman', ['id' => $item->id]) }}"
                                        class="buttons danger text-white">
                                        <img width="20" height="20" src="{{ url('assets/img/trash-outline 1.svg') }}"
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






    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add plants to request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('createTanaman') }}" method="post" id="formCreateTanaman">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="name_indonesia" class="form-label">Name Indonesia</label>
                        <input type="text" class="form-control" name="name_indonesia" id="name_indonesia" required>
                        <div class="invalid-feedback">Please enter Indonesian name.</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name_latin" class="form-label">Name Latin</label>
                        <input type="text" class="form-control" name="name_latin" id="name_latin" required>
                        <div class="invalid-feedback">Please enter Latin name.</div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control only-number" name="price" id="price" required>
                        <div class="invalid-feedback">Please enter a valid price.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updateTanaman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="updateTanamanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div id="modal-content" class="modal-content">
            <div class="modal-body">
                Loading ...
            </div>
        </div>
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





        $('.file-lisensi').change(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/admin/changeLicenseCountry",
                method: "POST",
                data: {
                    file_lisensi: $(this).prop('checked') ? 1 : 0,
                    country_id: $(this).attr('data-id')

                },
                success: function(data) {

                    console.log(data);


                },
                error: function(data) {
                    console.log(data);


                }

            });
        });
    </script>





<script>
    // modal update isi konten
    $('#updateTanaman').on('shown.bs.modal', function(e) {
        var html = `
            <div class="modal-header">
                <h5 class="modal-title">Update Plant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/editTanaman/${$(e.relatedTarget).data('id')}" method="post" id="formUpdateTanaman">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="form-label" for="name_indonesia">Name Indonesia</label>
                        <input type="text" class="form-control" name="name_indonesia" id="name_indonesia"
                            value="${$(e.relatedTarget).data('nama-indonesia')}" required>
                        <div class="invalid-feedback">Please enter Indonesian name.</div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="name_latin">Name Latin</label>
                        <input type="text" class="form-control" name="name_latin" id="name_latin"
                            value="${$(e.relatedTarget).data('nama-latin')}" required>
                        <div class="invalid-feedback">Please enter Latin name.</div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="price">Price</label>
                        <input type="number" class="form-control only-number" name="price" id="price"
                            value="${$(e.relatedTarget).data('price')}" required>
                        <div class="invalid-feedback">Please enter a valid price.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        `;
        $('#modal-content').html(html);
    });

    // delegated input validation
    $(document).on('input', '.only-number', function () {
        let val = $(this).val();
        if (!/^\d*$/.test(val)) {
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // validate before submit
    $(document).on('submit', 'form[id^="form"]', function (e) {
        let valid = true;
        $(this).find('input[required]').each(function () {
            if (!$(this).val().trim()) {
                $(this).addClass('is-invalid');
                valid = false;
            } else {
                $(this).removeClass('is-invalid').addClass('is-valid');
            }
        });
        if (!valid) e.preventDefault();
    });
</script>
@endsection
