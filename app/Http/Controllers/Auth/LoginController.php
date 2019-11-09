<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
// use Auth;
use Illuminate\Support\Facades\Auth;

use DB;

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
    //  public function showLoginForm()
    // {
    //     return view('login');
    // }


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     public function showLoginForm()
    {
        return view('mylogin');
    }

     public function login(Request $request)
    {
        
        // $this->validate($request,[
        //     'email' => 'required',
        //     'password' => 'required'],
        //     ['email.required' => 'You must have enter valide email address',
        //      'password.required' => 'Password can not be empty']);

        // $user = new User;       //User is model name
        // $email = $request->email;
        // $password = $request->password;

        // $checklogin = db::table('users')->where(['email'=>$email,'password'=>$password])->get();

        // if(count($checklogin) > 0)
        // {
        //     return redirect('/');
        // }
        // else
        // {
        //     /*return/ view('user.user');*/
        //     echo "not login";
        // }

        $user = $request->only('email','password');
        // dd(Auth::attempt($user));
        if(Auth::attempt($user))
        {
            // throw new \Exception("Error Processing Request".Auth()->user()->id, 1);
            // dd(Auth::user()->role);
            // throw new \Exception("Error Processing Request", 1);
            

        // return Auth::user();
        
            return redirect('/');
        }
        else
        {
            return "Not Login";
        }

    }

    

   
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }


    protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
}
