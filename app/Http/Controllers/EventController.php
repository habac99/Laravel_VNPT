<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function getAllEvent(){
        $data['events'] = DB::table('events')->paginate(4);
        return view('allEvent',$data);


    }
    public function getOneEvent(Request $request){
        $name = str_replace('-',' ',$request->event_name);
        $data['event'] = DB::table('events')->where('name','=',$name)->get();
//        dd($request->event_name);
        if(count($data['event'])>0)
            return view('oneEvent',$data);
//            dd(count($data['event']));
        else return view('errors.404');
    }
}
