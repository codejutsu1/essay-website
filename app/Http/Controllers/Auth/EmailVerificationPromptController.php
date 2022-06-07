<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        if($request->user()->hasVerifiedEmail())
        {
            if(Auth::check()  && Auth::user()->role_id == 1){
                return redirect()->intended(RouteServiceProvider::ADMIN);
            }elseif(Auth::check() && Auth::user()->role_id == 2) {
                return redirect()->intended(RouteServiceProvider::USER);
            }else{
                return redirect()->intended(RouteServiceProvider::WRITER);
            }
    
        }else{
            return Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
        }

        // return $request->user()->hasVerifiedEmail()
        //             ? redirect()->intended(RouteServiceProvider::HOME)
        //             : Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
    }
}
