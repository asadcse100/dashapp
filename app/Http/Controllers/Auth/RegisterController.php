<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\Address;
use App\Models\UserRole;
use App\Models\UserProfile;
use App\Models\ReferralCode;
use App\Services\ReferralService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Session;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function referral(Request $request, ReferralService $referral)
    {
        if ($request->has('ref')) {
            $referral->setReferrer($request->get('ref'));
        }
// dd(\session::get('referby'));
        // $redirect = sys_settings('referral_invite_redirect', 'register');
        // if ($redirect == 'home' && gss('front_page_enable', 'yes') == 'yes') {
        //     return redirect()->route('welcome');
        // }

        return redirect()->route('register');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('frontend.default.user_sign_up');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(!empty($data['refer'])){
            $referCode = ReferralCode::where('code', $data['refer'])->first();

            if(empty($referCode)){
                return false;
            }
        }

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'refer' => $data['refer'],
            'user_name' =>Str::slug($data['name'], '-').time(),
            'password' => Hash::make($data['password']),
        ]);

        // Removed in future
        if (in_array('freelancer', $data['user_types'])) {
            $user->user_type = 'freelancer';
        }
        if(in_array('client', $data['user_types'])) {
            $user->user_type = 'client';
        }

        // if(session::get('refercode')){
        //     $user->refer = session::get('refercode');
        // }

        $user->save();

        // $address = new Address;
        // $user->address()->save($address);

        $user_profile = new UserProfile;
        $user_profile->user_id = $user->id;
        $user_profile->save();

        if (!empty($user->refer)) {
            ReferralService::createReferral($user);
        }

        return $user;
    }

}
