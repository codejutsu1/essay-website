<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class SettingsController extends Controller
{
    public function userSettings(){
        $user = User::query()
                    ->where('id', auth()->user()->id)
                    ->first('email');
        
        return Inertia('User/Setting', compact('user'));
    }

    public function updateUser(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'password' => ['required', 'confirmed', new MatchOldPassword],
        ]);

        User::findOrFail(auth()->user()->id)->update([
            'email' => $request->email,
        ]);

        return redirect()->back()
                ->with('message', 'You have successfully updated your email');
    }

    public function updatePassword(Request $request)
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
