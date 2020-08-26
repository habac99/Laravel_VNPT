<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function doUpload(Request $request)
    {
        //xử lý upload ở đây
        $file = $request->filesTest;
//        $file->storeAs('/','azure');


        $storagePath =  Storage::disk('local')->putFileAs('public/img',$file,$file->getClientOriginalName());
        echo($storagePath);


//        $file->move('upload', $file->getClientOriginalName());
    }
    public function ckeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $file = $request->file('upload');

            //Upload File
//            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            $storagePath =  Storage::disk('azure')->putFileAs('/',$file,$file->getClientOriginalName());

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = "https://vnptproject.blob.core.windows.net/imagecontainer/" . $storagePath;
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;

        }
    }
    public function ckeditor_save(Request $request){
        DB::table('test table')->insert([
            'content'=>$request->summary_ckeditor
        ]);
    }

}
