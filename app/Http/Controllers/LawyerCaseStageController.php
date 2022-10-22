<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LawyerCaseStage;

class LawyerCaseStageController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['lawyer_case_stage'] = LawyerCaseStage::get();
        return view('common.lawyer.case.case_stage');
    }

    public function store(Request $request)
    {
        LawyerAct::updateOrInsert(
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

