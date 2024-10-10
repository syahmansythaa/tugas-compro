<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $service=Services::get();  
        return view('backend.layanan.index',['service'=>$service]);
    }
}
