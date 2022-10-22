<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawyerCourtCategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['lawyer_court_categories'] = LawyerCourtCategory::get();
        return view('common.lawyer.court.court_category',$data);
    }

    public function store(Request $request)
    {
        LawyerCourtCategory::updateOrInsert(
            [
                'id' => $request->id
            ],
            [
                'userid' => $request->userid,
                'name' => $request->name,
                'description' => $request->description
            ]
        );
    }
}
