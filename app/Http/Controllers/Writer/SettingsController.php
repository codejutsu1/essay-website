<?php

namespace App\Http\Controllers\Writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class SettingsController extends Controller
{
    public function writerSettings()
    {
        $writer = User::query()
                    ->where('id', auth()->user()->id)
                    ->first(['name', 'email']);

        return Inertia('Writer/Settings', compact('writer'));
    }

    public function updateWriter(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'password' => ['required', 'confirmed', new MatchOldPassword],
        ]);

        User::findOrFail(auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()
                ->with('message', 'Your details have been successfully updated');
    }

    public function updateWriterPassword(Request $request)
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
