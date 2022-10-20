<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Rules\System\MatchOldPassword;
use App\Rules\System\EmailValidated;
use App\Rules\System\UrlValidate;
use Illuminate\Http\Request;
use App\Models\Pf_details;
use App\Models\Pf_address;
use App\Models\Pf_social;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $pf = Profile::where('user_id', auth()->user()->id)->first();
        $pf_details = Pf_details::where('profile_id', $pf->id)->first();
        $pf_address = Pf_address::where('pf_details_id', $pf_details->id)->first();
        $pf_social = Pf_social::where('pf_details_id', $pf_details->id)->first();

        return view('pages.profile.index', compact('pf', 'pf_details', 'pf_address', 'pf_social'));
    }

    public function edit()
    {
        $pfs = DB::table('profiles')
            ->join('pf_details', 'profiles.id', '=', 'pf_details.profile_id')
            ->join('pf_addresses', 'pf_details.id', '=', 'pf_addresses.pf_details_id')
            ->join('pf_socials', 'pf_details.id', '=', 'pf_socials.pf_details_id')
            ->join('pf_segurities', 'profiles.id', '=', 'pf_segurities.profile_id')
            ->where('profiles.user_id', auth()->user()->id)
            ->first();

        return view('pages.profile.edit', compact('pfs'));
    }

    public function update(Request $request){

        if($request->has('name')) {
            $request->validate([
                #table users
                'name' => 'required|max:50',
                'email' => ['required', 'email', 'max:75', new EmailValidated],
                #table pf_details
                'birthday' => 'nullable|date',
                'bio' => 'nullable|max:255',
                'phone' => 'nullable|numeric',
                'phone' => 'nullable|max:15|min:10',
                #table addresses
                'zip' => 'nullable|numeric',
                'zip' => 'nullable|max:6|min:4',
                'city' => 'nullable|max:65|min:5',
                'country' => 'nullable|max:65|min:5',
                'state' => 'nullable|max:50|min:5',
                'address' => 'nullable|max:65|min:5',
            ]);

            $datos = [
                #tabel users
                'name' => $request->name,
                'email' => $request->email,
                #table details
                'birthday' => $request->birthday,
                'about' => $request->bio,
                'phone' => $request->phone,
                #table addresses
                'zip' => $request->zip,
                'city' => $request->city,
                'country' => $request->country,
                'state' => $request->state,
                'address' => $request->address
            ];

            DB::table('users')
                ->join('profiles', 'profiles.user_id', 'users.id')
                ->join('pf_details', 'pf_details.profile_id', 'profiles.id')
                ->join('pf_addresses', 'pf_addresses.pf_details_id', 'pf_details.id')
                ->where('users.id',auth()->user()->id)
                ->select('users.*','profiles.id','pf_details.*','pf_addresses.*')
                ->update($datos);

            return back()->with('success', 'Profile updated successfully');
        }

        if($request->has('facebook')){
            $request->validate([
                'facebook' => [new UrlValidate('facebook')],
                'twitter' => [new UrlValidate('twitter')],
                'instagram' => [new UrlValidate('instagram')],
                'github' => [new UrlValidate('github')],
            ]);

            $datos = [
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'github' => $request->github,
            ];

            Pf_social::where('pf_details_id', auth()->user()->id)->firstOrFail()->update($datos);
            return back()->with('success', 'Social updated successfully');
        }

        if($request->has('current_password')){
            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['required','same:new_password'],
            ]);

            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            return back()->with('success', 'Password updated successfully');
        }

        if($request->has('avatar')){
            $request->validate([
                $request->avatar = 'require|mimes:jpg,jpeg,png,gif,svg|max:400x400'
            ]);
            return back()->with('success', 'This action is temporality disabled.');
        }

        if($request->has('cover')){
            $request->validate([
                $request->cover = 'require|mimes:jpg,jpeg,png,gif,svg|max:1200x1200'
            ]);
            return back()->with('success', 'This action is temporality disabled.');
        }

        return back()->withErrors('Your don\'t have permission to execute this action.');
    }

    public function destroy(){
        User::where('id', auth()->user()->id)->delete();
        return redirect('/')->with('success', 'Profile deleted successfully');
    }
}
