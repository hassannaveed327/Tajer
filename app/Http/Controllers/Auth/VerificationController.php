<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('signed')->only('verify');
//        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

//    public function otp_verify(Request $request)
//    {
//        $checkOTP = User::where('otp', $request->otp)->first();
//        if ($checkOTP) {
//            $checkOTP->otp_verified = 1;
//            $checkOTP->save();
//            return redirect()->route('login')->with(['success'=> true, 'info' => 'OTP verified successfully']);
//        } else {
//            return redirect()->back()->with(['error' => true, 'info' => 'OTP not matched']);
//        }
//    }
    public function otp_verification(Request $request)
    {
        $user = auth()->user();
        if ($user->otp == $request->otp) {
            $user->otp_verified = 1;
            $user->save();
            return redirect()->route('home');
        }
        return redirect()->back()->with(['error' => true, 'info' => 'Invalid OTP']);
    }

    public function regenerate_otp()
    {
        $user = auth()->user();
        $user->otp = rand(100000, 999999);
        $user->save();
        return redirect()->back()->with(['success' => true, 'info' => 'OTP Regenerated']);
    }
}
