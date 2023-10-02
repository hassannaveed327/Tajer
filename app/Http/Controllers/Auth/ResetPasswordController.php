<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendForgetPasswordEmail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function forget_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
        ], ['required' => 'This field is required', 'email' => 'invalid']);

        $email = $request->email;
        $user = User::where('email', $email)->first();
        if($user && ($user->type != 1 || $user->type != 4)) {

            $get_forget_code_expires_at = $user->forget_code_expires_at;

            if($get_forget_code_expires_at != null){
                //dd($get_forget_code_expires_at.'--'.Carbon::now());
                if($get_forget_code_expires_at > Carbon::now()){
                    return redirect()->back()->with([
                        'error' => true,
                        'info' => 'Email Already Sent! Please check you email or try again later.'
                    ]);
                }
            }
            $forget_code = rand(100000, 999999);

            $var2 = [
                'forget_code' => $forget_code,
                'email' => $email
            ];
            try {
                $user->forget_code = $forget_code;
                $user->forget_code_expires_at = Carbon::now()->addMinutes(10);
                $user->save();
                Mail::to($email)->send(new SendForgetPasswordEmail($var2));
                return redirect()->back()->with([
                    'success' => true,
                    'info' => 'Email Sent Successfully! Please check you email.'
                ]);
            }catch (\Exception $e) {
                return redirect()->back()->with([
                    'error' => true,
                    'info' => 'Something went wrong, try again later.!'
                ]);
            }
        }
        return redirect()->back()->with([
            'error' => true,
            'info' => 'Email Not Found!'
        ]);
    }


    public function reset_password(Request $request){

        if (Auth::check()) {
            return redirect('/');
        }

        $email = User::decode($request->route('email'));
        $forget_code = User::decode($request->route('forget_code'));

        if($email == '' || $email == false || $forget_code == '' || $forget_code == false){
            return redirect('password/reset')->with([
                'error' => true,
                'info' => 'Invalid Link!'
            ]);
        }

        //dd($email. '--'. $forget_code);
        $check_email_exist = User::select('email')->where('email',$email)->first();

        if($check_email_exist){

            $verify_email = User::where('email',$email)->where('forget_code', $forget_code)->first();
            if($verify_email){
                $get_forget_code_expires_at = $verify_email->forget_code_expires_at;

                if($get_forget_code_expires_at != null){
                    //dd($get_forget_code_expires_at.'--'.Carbon::now());
                    if($get_forget_code_expires_at <= Carbon::now()){
                        return redirect('password/reset')->with([
                            'error' => true,
                            'info' => 'The Link You Followed Has Expired'
                        ]);
                    }
                }
                Session::put('email', $request->route('email'));
                Session::put('forget_code', $request->route('forget_code'));

                return view('auth.passwords.reset');
            }

        }else{
            return redirect('password/reset')->with([
                'error' => true,
                'info' => 'Email Not Found!'
            ]);
        }
        return redirect('password/reset')->with([
            'error' => true,
            'info' => 'Invalid Link!'
        ]);
    }


    public function set_new_password(Request $request){

       /* $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);*/

        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.confirmed' => 'The passwords do not match.',
        ]);

        $email = User::decode(Session::get('email'));
        $forget_code = User::decode(Session::get('forget_code'));
        $user = User::where('email',$email)->where('forget_code',$forget_code)->first();

        //dd($user);
        if($user){
            $user->password = Hash::make($request->password);
            $user->forget_code = null;
            $user->forget_code_expires_at = null;
            $user->updated_at = Carbon::now();
            $user->save();

            Session::remove('email');
            Session::remove('forget_code');
            return redirect('/login')->with([
                'success' => true,
                'info' => 'Password updated successfully!'
            ]);
        }else{
            return redirect('/login')->with([
                'error' => true,
                'info' => 'Try again later.'
            ]);
        }
    }

}
