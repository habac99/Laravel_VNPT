<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        echo (asset('https://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp'));
    }
}
