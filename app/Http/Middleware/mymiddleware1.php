<?php

namespace App\Http\Middleware;
// use Illuminate\Http\Request;
use Closure;
// use Auth;
use Illuminate\Support\Facades\Auth;

use App\User;


class mymiddleware1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
                // return $next($request);
        
        // if (Auth::check()) {
        //     print_r("sdfsd");die;
        // }
        // die;
            // throw new \Exception("Error Processing Request", 1);
            // throw new \Exception("Error:".Auth()->user(), 1);
            // throw new \Exception("Error:".Auth::user()->role, 1);


        // print_r(Auth::user());die;
        // dd(Auth);
        
        if(Auth::check())
         {
                // dd($next($request));
                // dd($request->all());

            if(Auth::user()->role == 0)
            {
                // dd("hfhgf");
                return $next($request);
            }
            else
            {
                // dd('asd');
                // return response()->view('layouts.admin.app');
                echo "not user";
            }
        }
        else
        {
           // throw new \Exception("Error Processing Request", 1);
            return redirect('login');
        }
    }
}
