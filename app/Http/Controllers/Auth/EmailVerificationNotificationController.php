<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            if(Auth::check() && Auth::user()->role_id == 1){
                return redirect()->intended(RouteServiceProvider::ADMIN);
            }elseif(Auth::check() && Auth::user()->role_id == 2) {
                return redirect()->intended(RouteServiceProvider::USER);
            }else{
                return redirect()->intended(RouteServiceProvider::WRITER);
            }
    
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
