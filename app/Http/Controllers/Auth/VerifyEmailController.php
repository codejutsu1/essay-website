<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\AdminNewUser;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            if(Auth::check() && Auth::user()->role_id == 3){
                return redirect()->intended(RouteServiceProvider::WRITER.'?verified=1');
            }else {
                return redirect()->intended(RouteServiceProvider::USER.'?verified=1');
            }
            // return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));

            $user = $request->user();
            Mail::to($request->user()->email)->send(new WelcomeMail($user));
            Mail::to('admin@admin.com')->send(new AdminNewUser($user));
        }

        // if(auth::check() && Auth::user()->role_id == 3){
        //     return redirect()->intended(RouteServiceProvider::WRITER.'?verified=1');
        // }else {
        //     return redirect()->intended(RouteServiceProvider::USER.'?verified=1');
        // }

        // return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
