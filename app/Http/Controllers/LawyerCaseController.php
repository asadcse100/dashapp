<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LawyerCasesLawyer;

class LawyerCaseController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['lawyer_case'] = LawyerCasesLawyer::get();
        return view('common.lawyer.case.index', $data);
    }

    public function store(Request $request)
    {
        LawyerCasesLawyer::updateOrInsert(
            [
                'id' => $request->id
            ],
            [
                'title' =>$request->title,
                'email' => $request->email,
                'type' => 'referral'
            ]
        );
    }

}
