<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LawyerCaseAct;

class LawyerActController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['lawyer_act'] = LawyerCaseAct::get();

        return view('common.lawyer.act.index', $data);
    }

    public function store(Request $request)
    {
        LawyerCaseAct::updateOrInsert(
            [
                'id' => $request->id
            ],
            [
                'case_id' => $request->case_id,
                'acts_id' => $request->acts_id,
                'actstatus' => $request->actstatus
            ]
        );
    }
}
