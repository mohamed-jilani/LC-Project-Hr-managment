<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        //dd($request);
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        //dd($input);
        if(auth()->attempt(array('email' => $input['email'], 'password' =>$input['password']))){
            //User::where('id', auth()->user()->id)->update(['email_verified_at' => null]);
            if(auth()->user()->role === "manager"){
                return redirect()->route('manager.home');
            }
            if(auth()->user()->role === "hr") {
                return redirect()->route('hr.home');
            }
            if(auth()->user()->role === "user"){
                return redirect()->route('home');
            }
            return redirect()->route('login')->with('error','Input proper email/password.');
        }else{
            return redirect()->route('login')->with('error','Input proper email/password.');
        }
    }}