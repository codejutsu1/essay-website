<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class SettingsController extends Controller
{
    public function adminSettings()
    {
        $settings = Setting::first();

        return Inertia('Admin/Settings', compact('settings'));
    }

    public function updateSite(Request $request)
    {
        $request->validate([
            'site_name' => ['required', 'string'],
            'site_email' => ['required', 'string'],
            'site_phone' => ['required', 'string'],
        ]);

        Setting::findOrFail(auth()->user()->id)->update([
            'site_name' => $request->site_name,
            'site_email' => $request->site_email,
            'site_phone' => $request->site_phone
        ]);

        return redirect()->back()
                ->with('message', 'Your site details have been successfully updated');
    }

    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'confirmed']
        ]);

        User::findOrFail(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()
                ->with('message', 'You have successfully updated your password');
    }
}
