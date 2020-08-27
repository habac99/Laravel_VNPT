<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        DB::table('service_request')->insert([
            'c_name'=>$request->your_name,
            'c_email'=>$request->your_email,
            'c_phone'=>$request->your_phone,
            'c_company'=>$request->your_company,
            'c_address'=>$request->your_address,
            'service_name'=>$request->service_name,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
//       dd($request);
//        return back()->withInput()->with('success','Gửi yêu cầu thành công');
        return json_encode(array(
            "statusCode" => 200
        ));
    }
    public function serviceType(Request $request){
        $data['id']= DB::table('services')->where('alt_name','=', $request->name)->get();
        $data['services'] = DB::table('sub_services')->where('service_id','=', $data['id'][0]->id)->paginate(4);
//        dd($data);
        return view('serviceDetails',$data);

    }
}
