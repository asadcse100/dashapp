<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \App\Models\Service;
use \App\Models\Skill;
use \App\Models\UserProfile;
use \App\Models\ProfessionalType;
use DB;

class MatterShareController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $skill = $request->skill;
        $category = $request->category_id;
        $service_or_provider = $request->service_or_provider;
        // dd($category);
        if($service_or_provider == 'service'){
            if($skill < 0){
                $data['type'] = 'service';
                $data['rating'] = $request->rating;
                $subcategory = $request->sub_category_id;

                if(!empty($category) && !empty($subcategory)){
                    if($subcategory > 0 ){
                    $data['services'] = Service::where('product_service_id', $subcategory);
                     }else{
                            $data['services'] = Service::where('product_category_id', $category);
                        }
                }

                if(isset($data['services'])){
                    $data['services'] = $data['services']->paginate(8)->appends($request->query());
                }else{
                    $data['services'] = [];
                }
                $data['skills'] = Skill::where('category_id', $category)->get();
                // dd($data);
                $data['skill_select'] = false;
            }else{
                $data['skill_select'] = true;
                $data['skills'] = Skill::where('category_id', $category)->get();
                $data['user_profile'] = UserProfile::where('skills', 'LIKE',"%{$skill}%")->get();
                // dd($data);
            }
        }else{
            $pfo_type = ProfessionalType::where('category_id', $category)->first();
            // dd($pfo_type);
            $data['skills'] = Skill::where('category_id', $category)->get();
            if(isset($pfo_type)){
                $data['user_profile'] = UserProfile::where('professional_type_id', $pfo_type->id)->get();
            }
// dd($data, $pfo_type, $category);
        }

        return view('frontend.default.matter_share.index', $data);
    }

    public function indexOnly(Request $request)
    {
        $data = [];
        $skill = $request->skill;
        $category = $request->category_id;
        $service_or_provider = $request->service_or_provider;
        // dd($category);
        if($service_or_provider == 'service'){
            if($skill < 0){
                $data['type'] = 'service';
                $data['rating'] = $request->rating;
                $subcategory = $request->sub_category_id;

                if(!empty($category) && !empty($subcategory)){
                    if($subcategory > 0 ){
                    $data['services'] = Service::where('product_service_id', $subcategory);
                    }else{
                            $data['services'] = Service::where('product_category_id', $category);
                        }
                }

                if(isset($data['services'])){
                    $data['services'] = $data['services']->paginate(8)->appends($request->query());
                }else{
                    $data['services'] = [];
                }
                $data['skills'] = Skill::where('category_id', $category)->get();
                // dd($data);
                $data['skill_select'] = false;
            }else{
                $data['skill_select'] = true;
                $data['skills'] = Skill::where('category_id', $category)->get();
                $data['user_profile'] = UserProfile::where('skills', 'LIKE',"%{$skill}%")->get();
                // dd($data);
            }
        }else{
            $pfo_type = ProfessionalType::where('category_id', $category)->first();
            // dd($pfo_type);
            $data['skills'] = Skill::where('category_id', $category)->get();
            if(isset($pfo_type)){
                $data['user_profile'] = UserProfile::where('professional_type_id', $pfo_type->id)->get();
            }
        }
// dd($data);
        return view('frontend.default.matter_share.index_matter', $data);
    }
}
