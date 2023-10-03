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
    <div class="container" style="padding:50px 0px; height: 100VH; margin-top: 200px">
        <h1>Login</h1>
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
        <form id="register-form" action="{{route('login-submit')}}" method="post">
            @csrf

            <label for="email">Email:</label>
            <input type="email" class="@error('email')  is-invalid @enderror" name="email" value="{{old('email')}}" id="email" required><br><br>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                       </span>
            @enderror

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>

            <button type="submit" class="btn" >Login</button>
        </form>
    </div>
@stop
@section('extra_js')
@stop
