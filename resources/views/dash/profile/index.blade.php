@extends('dash.master')

@section('title')
    Dashbored
@endsection
<link rel="stylesheet" href={{ asset('assets/css/stylee.css') }}>
@section('content')
    <div class="row gutters-sm userprofile">
        <div class="col-md-8 userprofile-two">
            <div class="card mb-3">
                <div class="card-body">
                    <div>
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="./assets/img/avaters/mohammad 2.jpg" alt="Admin" class="rounded-circle"
                                    width="150">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">First Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Mohammad
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Last Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            alghzawi
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Mohammad@gmail.com
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            0797060670
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Irbid,Jordan
                        </div>
                    </div>
                    <hr>
                    <div>
                        <ul class="btns_group ul_li">
                            <li>
                                <button type="submit"
                                        class="bg_green">
                                        <i class="fas fa-edit"></i>
                                    </button>
                            </li>
                        </ul>
                    </div>




                </div>
            </div>

        </div>
    </div>
@endsection
