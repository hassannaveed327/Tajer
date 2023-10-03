@extends('layouts.app')

@section('content')
    <style>
        input{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    <div class="container" style="padding:50px 0px; height: 100VH; margin-top: 100px">
        @if(session('success'))
            <div class="alert alert-success text-white mb-4 mt-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger text-white mb-4 mt-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @endif
            <div class="holder mt-0">
            <div class="user-cover" style="height: 200px;
            background-image:  url('app/images/sunset-mist-desert-4k-iq-1920x1080.jpg') ;
            background-size: cover !important;background-position: center;">
            </div>
            <div class="container">

                <main class="main account" style="background:#FFF;	">


                    <div class="page-content" style="padding-top:10px;">
                        <div class="container">
                            <div class="tab tab-vertical gutter-lg">
                                <div class="mb-4 col-lg-3 col-md-4" style="max-width: 280px;margin-top:-100px;">
                                    <div class="box-user-tab">
                                        <div class="user-image">
                                            <img src="{{asset('app/images/profile/noimage.png')}}" alt="">
                                            <div class="user-name" style="color: black;padding: 10px;font-weight: 600">{{auth()->user()->name}}</div>
                                            <!--<div class="user-name">hassantanker78@gmail.com</div>-->
                                            @if(auth()->user()->user_type == 2 && auth()->user()->verify_badge == 1 )
                                            <div class="verify-or-not">
                                                <div class="verify"><img src="{{asset('app/images/verified.png')}}" alt=""> Verified</div>
                                            </div>
                                            @endif
                                        </div>
                                        <ul class="nav nav-tabs" role="tablist" style="margin-top:0px;">
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile.php">Account details</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="products.php">Product Management</a>
                                            </li>


                                            <li class="nav-item">
                                                <a class="nav-link" href="my-orders.php">Orders</a>
                                            </li>
                                            <!--    <li class="nav-item">
                                                    <a class="nav-link" href="#downloads">Downloads</a>
                                                </li>
                                               -->

                                            <li class="nav-item">
                                                <a class="nav-link" href="logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">

                                    <div class=" active" id="account">
                                        <h2 class="title  mb-5">About</h2>
                                        <div style=""><a href={{url('/profile/'.base64_encode(auth()->user()->id))}}     style="color:#0033CC;font-weight:bold;">{{url('/profile/'.base64_encode(auth()->user()->id))}}</a></div>
                                        <p></p>
                                        <h4>Products</h4>
                                        <div class="row">
                                            <p>No Poducts has been added yet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>

        </div>
@stop
@section('extra_js')
@stop
