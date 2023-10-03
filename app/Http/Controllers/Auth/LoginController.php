<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function username()
    {
        return 'name';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login_old(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/app/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        if (Auth::validate($request->only('email', 'password'))) {
            $user = Auth::getLastAttempted();
                if ($user->status == 0) {
                    return redirect()->back()->withInput($request->only('email'))->with([
                        'info' => 'Your account has been suspended or disabled! Please contact at support.',
                        'error' => true,
                        'success' => false,
                    ]);
                }
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->intended(route('home'));
            }
        }
        return redirect()->back()->withInput($request->only('email'))->with([
            'info' => 'Credentials do not match!',
            'error' => true,
            'success' => false,
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
