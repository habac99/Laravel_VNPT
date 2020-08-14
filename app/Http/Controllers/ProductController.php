<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function getProduct(){
        $data['products'] = DB::table('products')->get();
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

            $file = $request->fileUpload;
            $storagePath =  Storage::disk('azure')->putFileAs('/',$file,$file->getClientOriginalName());
            $url = "https://vnptproject.blob.core.windows.net/imagecontainer/" . $storagePath;
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
            $storagePath = Storage::disk('azure')->putFileAs('/', $file, $file->getClientOriginalName());
            $url = "https://vnptproject.blob.core.windows.net/imagecontainer/" . $storagePath;
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
