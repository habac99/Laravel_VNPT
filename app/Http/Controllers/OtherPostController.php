<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherPostController extends Controller
{
    //
    public function policy(){
        return view('HR_policy');
    }
    public function recruitmentPost (){
        $data['posts'] = DB::table('recruitment')->get();
        return view('Recruitment',$data);
    }
}
