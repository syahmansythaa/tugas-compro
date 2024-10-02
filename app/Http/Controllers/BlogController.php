<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blogs::orderBy('id','desc')->get();
        $blog_terbaru = Blogs::orderBy('id','desc')->limit(2)->get();
        $blog_lainnya = Blogs::orderBy('id','desc')->get();
        return view('blog', [
            'blogs' =>$blogs,
            'blog_terbaru' =>$blog_terbaru,'blog_lainnya'=>$blog_lainnya,
        ]);
    }
    public function detail(){
        return view('blog_detail');
    }
}
