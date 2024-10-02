@extends('layouts.master')
@section('content')
 <!-- artikel -->
 <div class="container mt-4">
        <div class="row">
            <!-- Kolom 1 dengan col-8 dan border -->
            <div class="col-8 p-4">
                <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-5 my-2 ">
                        <img src="{{ $item->file }}" class="card-img-top border-radius" alt="...">
                    </div>
                    <div class="col-7 ">
                        <div class="card-body">
                            <h3 class="card-title">Skincare Scarlett </h3>
                            <h6 class="mb-0">10 september 2024</h6>
                            <a href="#" class="text-black"><b>Read More</b></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Kolom 2 dengan col-4 dan border -->
            <div class="col-4 p-4 ">
                <h3><b>Blog Terbaru</b></h3>
                @foreach ($blog_terbaru as $item)
                <div class="row p-2 my-2">
                    <div class="col-3">
                        <img src="3.jpg" class="border-radius w-100 h-100" alt="...">
                    </div>
                    <div class="col-9 ">
                        <div class="card-body">
                            <h5 class="card-title">Scarlett Toner</h5>
                            <h6 class="mb-0">11 september 2024</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h3><b>Blog Lainnya</b></h3>
        <div class="row m-2">
            @foreach ($blog_lainnya as $item)
            <div class="col-6 ">
                <div class="row">
                    <div class="col-5 ">
                        <img src="12.jpg" class="card-img-top border-radius " alt="...">
                    </div>
                    <div class="col-7 ">
                        <div class="card-body">
                            <h3 class="card-title">Body Lotion</h3>
                            <h6 class="mb-0">16 september 2024</h6>
                            <a class="text-black" link rel="stylesheet" href="{{route('blogdetail.index',$item->slug)}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection