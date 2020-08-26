<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    function getService(Request $request){

        $data['service'] = DB::table('sub_services')->where('alt_name','=',$request->name)->get();

        if($data['service'][0]->type==0){

            return view('one_service_with_request',$data);
        }
        else if($data['service'][0]->type == 1){

            return view('one_service_no_request',$data);
        }


    }
    public function request_service(Request $request){
       dd($request);
//        return back()->withInput()->with('success','test');
    }
    public function serviceType(Request $request){
        $data['id']= DB::table('services')->where('alt_name','=', $request->name)->get();
        $data['services'] = DB::table('sub_services')->where('service_id','=', $data['id'][0]->id)->paginate(4);
//        dd($data);
        return view('serviceDetails',$data);

    }
}
