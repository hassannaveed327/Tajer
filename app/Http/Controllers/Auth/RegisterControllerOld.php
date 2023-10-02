<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class RegisterControllerOld extends Controller
{
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $validated = Validator::Make($request->all(), [
            'reg_name' => 'required',
            'reg_email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'reg_mobile' => 'required|numeric|digits:10',
            'usertype' => 'required|in:1,2',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        $otp = Str::random(6);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
             'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'type' => $request->type,
            'otp' => $otp,
        ]);
        if ($user) {
//            $user->notify(new SendOtp($otp));
            return redirect()->back()->with('success', 'OTP sent to your email');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
