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
            <div class="alert alert-danger text-white" role="alert">
                <button type="button" class="close " data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @endif
        <form id="register-form" method="post" action="{{route('otp_verify')}}">
            @csrf
            @method('post')
            <label for="otp">Verify OTP:</label>
            <input type="text" class="field" name="otp" id="name" required><br><br>
            <button type="submit" class="btn">Verify</button>
            <a type="button" href="{{route('regenerate_otp')}}" class="btn btn-dark">Resend OTP</a>
        </form>
    </div>
@stop
@section('extra_js')
@stop
