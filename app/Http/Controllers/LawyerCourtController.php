<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LawyerCourt;
use Auth;

class LawyerCourtController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['lawyer_court'] = LawyerCourt::get();
        return view('common.lawyer.court.index',$data);
    }

    public function store(Request $request)
    {
        LawyerCourt::updateOrInsert(
            [
                'id' => $request->id
            ],
            [
                'userid' => Auth::user()->id,
                'name' => $request->name,
                'email' => $request->email,
                'location' => $request->location,
                'room_number' => $request->room_number,
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'court_category_id' => $request->court_category_id,
                'description' => $request->description,
                
            ]
        );
        return back();
    }

}
