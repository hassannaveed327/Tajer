<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


   /* public function showRegistrationForm()
    {
        return view('web.auth.register');
//        return redirect('/'); //to stop going anywhere
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //
    }


    public function register(Request $request)
    {
        $valid =  Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'confirm_password' => 'required|same:password',
        'phone' => 'required|numeric ',
        'usertype' => 'required|in:1,2',
    ],['required'=>'This filed is required','email'=>'Please enter valid email','unique'=>'Email already exist',
            'same'=>'Password and confirm password not matched','numeric'=>'Please enter valid phone number','in'=>'Please select user type']);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid->messages()->toArray())->with(['error' => true, 'info' => 'Validation Error ' ])->withInput();
        }
        $otp = rand(100000, 999999);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'user_type' => $request->usertype,
            'otp' => $otp,
        ]);
//        }
        if ( $user   ){
            Auth::login($user);
            return redirect()->route('otp.verify')->with(['success' => true,
                'info'=>'Account Registered Successfully','email'=>$request->email]);
            }
            else {
                return redirect()->back()->with(['error' => true, 'info' => 'Something Went Wrong ' ])->withInput()->withErrors($valid);
            }
    }

    public function check_email_valid(Request $request){
        $email = User::decode($request->route('email'));
        $verify_code = User::decode($request->route('verify_code'));

        if($email == '' || $email == false || $verify_code == '' || $verify_code == false){
            return redirect('/login')->with([
                'info' => 'Invalid URL',
                'error' => true,
                'success' => false,
            ]);
        }
        $check_email_exist = User::select('email')->where('email',$email)->first();

        if($check_email_exist){

            $verify_email = User::where('email',$email)->where('verify_code', $verify_code)->first();
            if($verify_email){
                $verify_email->email_verified = 1;
                $verify_email->verify_code = null;
                $verify_email->email_verified_at = Carbon::now();
                $verify_email->updated_at = Carbon::now();
                $verify_email->save();

                return redirect('/login')->with([
                    'info' => 'Email Verified Successfully. You can now login.',
                    'error' => false,
                    'success' => true,
                ]);
            }else{
                return redirect('/login')->with([
                    'info' => 'Invalid URL',
                    'error' => true,
                    'success' => false,
                ]);
            }

        }else{
            return redirect('/login')->with([
                'info' => 'Email Not Found.',
                'error' => true,
                'success' => false,
            ]);
        }
    }


    public function resend_verify_email(Request $request){

        if(isset($request->email)) {
            $email = User::where('email', $request->email)->where('email_verified', 0)->first();
            if ($email) {
                $verify_code = rand(100000, 999999);
                $email->verify_code = $verify_code;
                $email->save();
                $var2 = [
                    'verify_code' => $verify_code,
                    'email' => $request->email
                ];
                Mail::to($request->email)->send(new SendEmailVerification($var2));
                return redirect()->back()->with([
                    'info' => 'Verification Email Resend Successfully!',
                    'error' => false,
                    'success' => true,
                ]);
            }
            return redirect()->back()->with([
                'info' => 'Sorry! Try Again.',
                'error' => true,
                'success' => false,
            ]);
        }
    }
}
