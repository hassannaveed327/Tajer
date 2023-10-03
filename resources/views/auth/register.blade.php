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
            <div class="alert alert-success text-white mb-3 mt-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger text-white mb-2 mt-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('info') }}
            </div>
        @endif
        <form id="register-form" method="post" action="{{route('register-submit')}}">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" value="1" name="usertype" class="mb-2 mt-2"
                 style="-webkit-appearance:radio;display:inline-block !important;" checked="checked"> I Am a Buyer</div>
                <div class="col-md-4"><input type="radio" class="mb-2 mt-2" name="usertype" value="2" style="-webkit-appearance:radio;display:inline-block !important;"> I Am a Seller</div>

            </div>
            <label for="reg_name">Name:</label>
            <input type="text" class="field @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="name" required><br><br>
            @error('name')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
               </span>
            @enderror

            <label for="reg_email">Email:</label>
            <input type="email" class="field @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="email" required><br><br>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                       </span>
            @enderror
            <label for="password">Password:</label>
            <input type="password" class="field @error('phone') is-invalid @enderror" name="password" id="password" required><br><br>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                       </span>
            @enderror
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" class="field" name="confirm_password" id="confirm_password" required><br><br>
            <label for="reg_mobile">Phone:</label>
            <input type="text" class="field @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}" id="reg_mobile" required><br><br>
            @error('phone')
            <span class="invalid-feedback " role="alert">
                                      <strong>{{ $message }}</strong>
                                       </span>
            @enderror
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>
@stop
@section('extra_js')
@stop
