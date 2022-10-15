<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Address;
use App\Models\UserProfile;
use App\Models\Verification;
use App\Models\FreelancerAccount;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ProfileController extends Controller
{
    // Show admin profile
    public function admin_profile()
    {
        $user = Auth::user();
        return view('admin.default.profiles.index', compact('user'));
    }

    // Update admin profile
    public function update_admin_profile(Request $request, $id)
    {
        if(env("DEMO_MODE") == "On"){
            // flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if($request->new_password != null && ($request->new_password == $request->confirm_password)){
            $user->password = Hash::make($request->new_password);
        }

        if ($request->profile_photo != null) {
            $imageName = time().'.'.$request->profile_photo->extension();
            $request->profile_photo->move(public_path('profile/photos'), $imageName);
            $user->photo = $imageName;
        }

        if($user->save()){
            // flash(translate('Your Profile has been updated successfully!'))->success();
            return back();
        }
        // flash(translate('Sorry! Something went wrong.'))->error();
        return back();
    }

    //Redirect to user profile page to update profile
    public function user_profile()
    {
        $data = null;
        $data['freelancer_account'] = FreelancerAccount::where('user_id', Auth::user()->id)->first();
        $data['user_profile'] = UserProfile::where('user_id', Auth::user()->id)->first();
        $data['verification'] = Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();
        $data['address'] = Address::where('user_id', Auth::user()->id)->first();

        return view('frontend.default.user.freelancer.setting.profile', $data);

    }

    public function profile_show(){
        $data = null;
        $data['freelancer_account'] = FreelancerAccount::where('user_id', Auth::user()->id)->first();
        $data['user_profile'] = UserProfile::where('user_id', Auth::user()->id)->first();
        $data['verification'] = Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();

        return view('frontend.default.user.user-profile-show',$data);
    }

    public function user_account()
    {
        $data = null;
        $data['freelancer_account'] = FreelancerAccount::where('user_id', Auth::user()->id)->first();
        $data['user_profile'] = UserProfile::where('user_id', Auth::user()->id)->first();
        $data['verification'] = Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();

        return view('frontend.default.user.freelancer.setting.account', $data);
    }

    public function basic_info_update(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);
        if($request->new_password != null && ($request->new_password == $request->confirm_password)){
            $user->password = Hash::make($request->new_password);
        }
        $user->name = $request->name;
        if ($user->save()) {
            $user_profile = UserProfile::where('user_id', Auth::user()->id)->where('user_role_id', Session::get('role_id'))->first();
            $user_profile->gender = $request->gender;
            $user_profile->nationality = $request->nationality;
            $user_profile->specialist = $request->specialist;
            if ($request->hourly_rate != null) {
                $user_profile->hourly_rate = $request->hourly_rate;
            }
            if ($user_profile->save()) {
                $user_address =  Address::where('addressable_id', $user->id)->first();
                $user_address->street = $request->address;
                $user_address->country_id = $request->country_id;
                $user_address->city_id = $request->city_id;
                $user_address->postal_code = $request->postal_code;
                $user_address->phone = $request->phone;
                if ($user->address()->save($user_address)) {
                    // flash(translate('Your Info has been updated successfully'))->success();
                    return redirect()->route('user.profile');
                }
                else {
                    // flash(translate('Sorry! Something went wrong.'))->error();
                    return back();
                }
            }
            else {
                // flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        }
        else {
            // flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function user_update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if(!empty($request->photo)){
            $imageName = time().'.'.$request->photo->extension();                    // Public Folder
            $request->photo->move(public_path('profile/photos'), $imageName);
            $user->photo = $imageName;
        }
        $user->update($request->all());
        return back();
    }

    public function profile_update(Request $request)
    {
        // dd($request->toArray());

        // $user = User::find(Auth::user()->id);
        // $user_profile = UserProfile::where('user_id', $user->id)->first();

        // if ($request->skills != null) {
        //     $user_profile->skills = json_encode(array_slice($request->skills, 0, $user->userPackage->skill_add_limit));
        // }
        // if($user_profile){
        //     $user_profile->update($request->all());
        // }

        UserProfile::updateOrCreate([
            'user_id' => Auth::user()->id
          ],
          [
            'gender' => $request->gender,
            'bio' => $request->bio,
            'github' => $request->github,
            'facebook' => $request->facebook,
            'tweeter' => $request->tweeter,
            'linkedin' => $request->linkedin,
            'skills' => $request->skills,
            'hourly_rate' => $request->hourly_rate,
            'consultant_fee' => $request->consultant_fee,
            'created_at' => Carbon::now()
          ]);

        return back();
    }

    public function address_update(Request $request)
    {
        // dd($request->input());
        // $user = User::find(Auth::user()->id);
        // $user_address =  Address::updateOrCreate($request->except(['_token', '_method']));

        Address::updateOrCreate([
            'user_id' => Auth::user()->id
          ],
          [
            'village' => $request->village,
            'city_id' => $request->city_id,
            'postal_code' => $request->postal_code,
            'country_id' => $request->country_id,
            'created_at' => Carbon::now()
          ]);

        // if($user_address){
            // $user_address->updateOrCreate($request->all());
        // }
        return back();
    }

}
