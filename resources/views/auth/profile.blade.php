@extends('layouts.admin')


@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/profile.css') }}">
@endsection




@if (Auth::user()->role == 0)

    @section('menu')
        <div class="sidebar-menu-wrapper">
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="grid"></ion-icon>
                </div>
                <a href="/admin" class="sidebar-menu">My Dashboard Admin</a>
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
            <li class="list-menu">
                <div class="icon">
                    <ion-icon name="grid"></ion-icon>
                </div>
                <a href="/dashboard" class="sidebar-menu">My Dashboard User</a>
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
            <li class="list-menu ">
                <div class="icon">
                    <ion-icon name="leaf"></ion-icon>
                </div>
                <a href="{{ route('requestTanaman') }}" class="sidebar-menu">Request New Plant</a>
            </li>
        </div>
    @endsection

@else


    @section('menu')
        <div class="sidebar-menu-wrapper">
            <li class="list-menu">
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
        <h2 class="pageNameContent">Profile</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Profile Setting</li>
        </ol>

        <div class="wrapperProfile">
            <div class="profile-detail">
                <p class="labelProfile">Info</p>
                <div class="card">
                    <div class="card-body">
                        <div class="profile-image">
                            <img src="./assets/img/faces.jpg" alt="">
                        </div>
                        <h4 class="nameUser text-center">{{ Auth::user()->name }}</h4>
                        <h5 class="emailUser text-center">{{ Auth::user()->email }}</h5>
                    </div>
                </div>
            </div>
            <div class="setting-profile">
                <p class="labelProfile">Account Data</p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateProfile') }}">
                            @csrf
                            <div class="wrapperInput">
                                <div class="input-group">
                                    <label for="firstName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="firstName"
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="input-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <br>
                            <div class="wrapperInput">
                                <div class="input-group">
                                    <label for="notelpn" class="form-label">No Telephone</label>
                                    <input type="text" name="phone" class="form-control" id="notelpn"
                                        value="{{ Auth::user()->phone }}">
                                </div>
                                <div class="input-group">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end w-100 mt-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="labelProfile">Change Password</p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('changePassword') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <label for="curretPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="curretPassword" name="old_pass">
                            </div>
                            <div class="input-group mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="new_pass">
                            </div>
                            <div class="input-group mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword"
                                    name="new_pass_confirmation">
                            </div>
                            <div class="d-flex justify-content-end w-100 mt-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
