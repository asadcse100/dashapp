<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use DB;

class MatterShareController extends Controller
{
    public function index()
    {
        $data = [];
        return view('frontend.default.matter_share.index', $data);
    }
}
