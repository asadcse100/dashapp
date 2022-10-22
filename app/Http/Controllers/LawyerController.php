<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use Auth;

class LawyerController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['lawyer'] = Lawyer::get();
        return view('common.lawyer.lawyer_setup.index', $data);
    }

    public function store(Request $request)
    {
        Lawyer::updateOrInsert(
            [
                'id' => $request->id
            ],
            [

                'userid' => Auth::user()->id,
                'name' => $request->name,
                'email' => $request->email,
                'mobile_no' => $request->mobile_no,
                'description' => $request->description,

            ]
        );
        return back();
    }
}
