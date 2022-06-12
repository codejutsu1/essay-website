<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function adminSettings()
    {
        $settings = Setting::all();
        return Inertia('Admin/Settings', compact('settings'));
    }

    public function updateSite(Request $request)
    {
        $request->validate([
            'site_name' => ['required', 'string'],
            'site_email' => ['required', 'string'],
            'site_phone' => ['required', 'string'],
        ]);

        User::findOrFail(auth()->user()->id)->update([
            'site_name' => $request->site_name,
            'site_email' => $request->site_email,
            'site_phone' => $request->site_phone
        ]);

        return redirect()->back()
                ->with('message', 'Your site details have been successfully updated');
    }
}
