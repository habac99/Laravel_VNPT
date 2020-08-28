<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RecruitmentController extends Controller
{
    //
    public function policy(){
        return view('HR_policy');
    }
    public function recruitmentPost (){
        $data['posts'] = DB::table('recruitment')->get();
        return view('Recruitment',$data);
    }
    public function Index(){
        return view('admin.RecruitmentManager');
    }
    public function getAll(){
        $data['RecruitmentPost'] = DB::table('recruitment')->get();
        echo json_encode($data);
        exit;
    }
    public function addnew(Request $request){
        if($request->fileUpload != null){
            $file = $request->fileUpload;
            $extension = $file->getClientOriginalExtension();
            $storagePath = Carbon::now()->toDateString().$file->getClientOriginalName();
            $url = 'storage/img/'. $storagePath;
//            $width = Image::make($file)->width();
//            $height = Image::make($file)->height();
//            if($width>1920) $width=1920;
//            if($height>1080) $height = 1080;
            $img = Image::make($file)->resize(900,600)->encode($extension);


            Storage::disk('local')->put('public/img/'.$storagePath,$img->__toString());
            DB::table('recruitment')->insert([
                'job_name'=>$request->job_name,
                'type'=>$request->type,
                'salary'=>$request->salary,
                'experience'=>$request->exp,
                'expire_on'=>$request->expire_on,
                'details'=>$request->details,
                'image'=>$url,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            return json_encode(array(
                "statusCode" => 200
            ));

        }else{
            return json_encode(array(
                "statusCode" => 201
            ));
        }

    }
    public function removePost(Request $request){
        DB::table('recruitment')->where('id','=',$request->id)->delete();
        return json_encode(array(
            "statusCode"=>200
        ));
    }
    public function editPost(Request $request){
        if($request->edit_fileUpload != null) {
            $file = $request->edit_fileUpload;

            $extension = $file->getClientOriginalExtension();
            $storagePath = Carbon::now()->toDateString().$file->getClientOriginalName();
            $url = 'storage/img/'. $storagePath;
            $width = Image::make($file)->width();
            $height = Image::make($file)->height();
            if($width>1920) $width=1920;
            if($height>1080) $height = 1280;
            $height = $width/1.5;
            $img = Image::make($file)->resize($width,$height
               )->encode($extension);

            Storage::disk('local')->put('pubic/img'.$storagePath,$img->__toString());
        }else{
            $image = DB::table('recruitment')->where('id', '=', $request->id)->get();
            $url =$image[0]->image;
        }
        DB::table('recruitment')->where('id','=', $request->id)->update([
            'job_name'=>$request->job_name,
            'type'=>$request->type,
            'salary'=>$request->salary,
            'experience'=>$request->exp,
            'expire_on'=>$request->expire_on,
            'details'=>$request->details,
            'image'=>$url,

            'updated_at' => Carbon::now(),
        ]);
        return json_encode(array(
            "statusCode" => 200
        ));
    }
    public function jobDetails(Request $request){
        $name = str_replace('-', ' ', $request->job_name);
        $data['details'] = DB::table('recruitment')->where('job_name', '=', $name)->get();
        return view('jobDetails',$data);
    }
}
