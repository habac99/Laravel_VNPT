<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data['feature_services']= DB::table('services')->where('isHighlight','=',true)->get();
        $data['feature_customers']= DB::table('projects')->limit('10')->get();
        $data['comments']=DB::table('customer_comment')->get();
        $data['featured_news'] = DB::table('events')->where('is_highlight','=',true)->get();
//        $news = DB::table('news')->where('is_highlight','=',true)->get();

//        $data['featured_news']=$events->merge($news);
        return view('home',$data);
    }
    public function test(){
//        $data['featured_news']=DB::table('events')
//            ->join('news','events.is_highlight','=','news.is_highlight')
//            ->where('events.is_highlight','=',true)
//            ->select('events.*', 'news.name as news_name')
//            ->get();
//        dd($data);
        $events = DB::table('events')->where('is_highlight','=',true)->get();
        $news = DB::table('news')->where('is_highlight','=',true)->get();
        $data = $events->merge($news);
        dd($data);
    }

}
