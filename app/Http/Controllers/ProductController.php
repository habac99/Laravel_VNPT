<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Image;
//use Image;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    //
    public function getProduct(){
        $data['products'] = DB::table('products')->paginate(4);
        return view('products',$data);
    }
    function productJson(){
        $data['products'] = DB::table('products')->get();
        echo json_encode($data);
        exit;
    }
    public function addProduct(Request $request){
        if($request->product_name != null && $request->google_link != null &&
            $request->short_description != null && $request->apple_link != null && $request->fileUpload != null ) {
            $image = $request->fileUpload;

//            $img->resize(400,400,function ($constraint){
//                $constraint->aspectRatio();
//            });
            $file = $request->fileUpload;
            $extension = $file->getClientOriginalExtension();

            $storagePath =  Storage::disk('azure')->putFileAs('/',$file,$file->getClientOriginalName());
            $url = "https://vnptproject.blob.core.windows.net/imagecontainer/" . $storagePath;
            $width = Image::make($file)->width();
            $heigh = Image::make($file)->height();
            $img = Image::make($file)->fit(300,300,function ($constraint){
                $constraint->aspectRatio();
            })->encode($extension);

            $storagePath2 =  Storage::disk('azure')->put($storagePath,$img->__toString());

            DB::table('products')->insert([

                'product_name' => $request->product_name,
                'logo' => $url,
                'short_description' => $request->short_description,
                'google_link' => $request->google_link,
                'apple_link' => $request->apple_link,
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
    public function removeProduct(Request $request){
        DB::table('products')->where('id','=',$request->id)->delete();
        return json_encode(array(
            "statusCode"=>200
        ));
    }
    public function getOneProduct(Request $request){
        $data['products'] = DB::table('products')->where('id','=',$request->id)->get();
        echo json_encode($data);
        exit;
    }
    public function saveEditProduct(Request $request){

        if($request->edit_fileUpload != null) {
            $file = $request->edit_fileUpload;
            $storagePath = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $url = "https://vnptproject.blob.core.windows.net/imagecontainer/" . $storagePath;
//            $width = Image::make($file)->width();
//            $height = Image::make($file)->height();
//            if($width>1920) $width=1920;
//            if($height>1080) $height = 1080;
            $img = Image::make($file)->resize(300,300,function ($constraint){
                $constraint->aspectRatio();
            })->encode($extension);

            Storage::disk('azure')->put($storagePath,$img->__toString());
        }else{
            $logo = DB::table('products')->where('id', '=', $request->id)->get();
            $url =$logo[0]->logo;
        }

            DB::table('products')->where('id', '=', $request->id)->update([

                'product_name' => $request->product_name,
                'logo' => $url,
                'short_description' => $request->short_description,
                'google_link' => $request->google_link,
                'apple_link' => $request->apple_link,

                'updated_at' => Carbon::now(),
            ]);
            return json_encode(array(
                "statusCode" => 200
            ));

    }
}
