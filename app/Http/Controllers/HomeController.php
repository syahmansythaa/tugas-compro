<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders=Slider::get();
        $services=Services::get();
        $blogs=Blogs::get();

        return view('home',[
            'sliders' =>$sliders,
            'services' =>$services,
            'blogs'=>$blogs
        ]);
    }
}
