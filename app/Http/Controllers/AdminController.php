<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        else return redirect()->intended('/admin');
    }
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $remember = true;
        if(Auth::attempt(['email'=>strtolower($request->email),'password'=>$request->password],$remember)){
            if(Auth::User()->level == 1){
                return redirect()->intended('/admin');
            }else{
                return redirect()->intended('/admin/full-dashboard');

            }
        }
            else{
            return back()->withInput()->with('error', 'Email or Password is incorrect');
        }

    }

}
