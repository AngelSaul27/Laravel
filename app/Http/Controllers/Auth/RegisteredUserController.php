<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Pf_details;
use App\Models\Pf_address;
use App\Models\Pf_social;
use App\Models\Pf_segurity;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        $user->profile()->create();
        $user->notifys()->create();

        $profile = Profile::latest('user_id')->first();
        $profile->pf_details()->create();
        $profile->pf_details->pf_address()->create();
        $profile->pf_details->pf_social()->create();
        $profile->pf_segurity()->create();

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
