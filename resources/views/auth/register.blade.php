@extends('layouts.app')

@section('content')
    <style>
        .field{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    <div class="container" style="padding:50px 0px; height: 100VH; margin-top: 200px">
        <h1>Register</h1>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @endif
        <form id="register-form" method="post" action="{{route('register')}}">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" value="1" name="usertype"
                 style="-webkit-appearance:radio;display:inline-block !important;" checked="checked"> I Am a Buyer</div>
                <div class="col-md-4"><input type="radio" name="usertype" value="2" style="-webkit-appearance:radio;display:inline-block !important;"> I Am a Seller</div>

            </div>
            <label for="reg_name">Name:</label>
            <input type="text" class="field" name="name" id="name" required><br><br>

            <label for="reg_email">Email:</label>
            <input type="email" class="field" name="email" id="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" class="field" name="password" id="password" required><br><br>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" class="field" name="confirm_password" id="confirm_password" required><br><br>
            <label for="reg_mobile">Phone:</label>
            <input type="text" class="field" name="phone" id="reg_mobile" required><br><br>

            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>
@stop
@section('extra_js')
@stop
