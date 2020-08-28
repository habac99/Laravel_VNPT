<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    //
    public function home(){
        $data['service'] =  DB::table('sub_services')->count('id');
        $data['news'] = DB::table('news')->count('id');
        $data['event'] = DB::table('events')->count('id');
        $data['request'] = DB::table('service_request')->count('id');
        $data['product'] = DB::table('products')->count('id');
        $data['recruitment'] = DB::table('recruitment')->count('id');
        $data['other'] = DB::table('other_posts')->count('id');
        return view('admin.dashboard',$data);

    }
    public function SuperAdmin(){
        if(Auth::User()->level==2)
        echo('this is super admin home');
        else
            return redirect()->intended('/admin');
    }
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $remember = true;
        if(Auth::attempt(['email'=>strtolower($request->email),'password'=>$request->password],$remember)){
//            if(Auth::User()->level == 1){
                return redirect()->intended('/admin');
//            }else{
//                return redirect()->intended('/admin/full-dashboard');

//            }
        }
            else{
            return back()->withInput()->with('error', 'Email or Password is incorrect');
        }

    }
    public function serviceIndex(){
        $data['service_type'] = DB::table('services')->where('type','=',2)->get();
        return view('admin.services');
    }
    public function getService(){
        $data['count'] = DB::table('sub_services')->count('id');
        $data['services'] = DB::table('sub_services')->orderBy('updated_at','desc')->limit(5)->get();
        echo json_encode($data);
//        dd($data);

        exit;
    }
    public function serviceRefetch(Request $request){
        $data1['all'] = DB::table('sub_services')->orderBy('updated_at','desc')->get();

        $start = $request->start;
        $end = $start+5;
        if ($end>$data1['all']->count()){
            $end = $data1['all']->count();
        }
        $data['select']=DB::table('sub_services')->where('id','=','xxx')->get();

        for ($i=$start;$i<$end;$i++) {
            $data['select']->push($data1['all'][$i]);
        }
        echo json_encode($data);

        exit;



    }
    public function addService(Request $request){

        if($request->service_id != null && $request->service_name != null &&
            $request->short_description != null && $request->full_description != null &&
            $request->fileUpload != null && $request->alt_name != null) {

            $file = $request->fileUpload;
            $extension = $file->getClientOriginalExtension();
            $storagePath = Carbon::now()->toDateString().$file->getClientOriginalName();
            $url = 'storage/img/'. $storagePath;
            $width = Image::make($file)->width();
            $height = Image::make($file)->height();
            if($width>1920) $width=1920;
            if($height>1080) $height = 1080;
            $img = Image::make($file)->resize($width,$height,function ($constraint){
                $constraint->aspectRatio();
            })->encode($extension);


            Storage::disk('local')->put('public/img/'.$storagePath,$img->__toString());
            DB::table('sub_services')->insert([
                'service_id' => $request->service_id,
                'service_name' => $request->service_name,
                'logo' => $url,
                'image_link' => $url,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description,
                'alt_name' => $request->alt_name,
                'type' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            return json_encode(array(
                "statusCode" => 200
            ));
        }else {
            return json_encode(array(
                "statusCode" => 201
            ));
        }


    }
    public function removeService(Request $request){
        DB::table('sub_services')->where('id','=',$request->id)->delete();
        return json_encode(array(
            "statusCode"=>200
        ));
    }
    public function logout(){

        Auth::logout();
        return redirect()->intended('/admin');
    }
    public function getOneService(Request $request){
        $data['service'] = DB::table('sub_services')->where('id','=',$request->id)->get();
        echo json_encode($data);
        exit;

    }
    public function editService(Request $request){

        if($request->edit_fileUpload != null){
            $file = $request->edit_fileUpload;
            $storagePath = Carbon::now()->toDateString().$file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $url = 'storage/img/'. $storagePath;
            $width = Image::make($file)->width();
            $height = Image::make($file)->height();
            if($width>1920) $width=1920;
            if($height>1080) $height = 1080;
            $img = Image::make($file)->resize($width,$height,function ($constraint){
                $constraint->aspectRatio();
            })->encode($extension);

            Storage::disk('local')->put('public/img/'.$storagePath,$img->__toString());

        }
        else{
            $logo = DB::table('sub_services')->where('id', '=', $request->id)->get();
            $url =$logo[0]->logo;
        }
        DB::table('sub_services')->where('id', '=', $request->id)->update([
                    'service_name' => $request->service_name,
                    'logo' => $url,
                    'image_link' => $url,
                    'short_description' => $request->short_description,
                    'full_description' => $request->full_description,
                    'alt_name' => $request->alt_name,
                    'type' => 1,
    //
                    'updated_at' => Carbon::now(),
                ]);
                return json_encode(array(
                    "statusCode" => 200
                ));
    }
    public function getProduct(){
        return view('admin.products');
    }






}
