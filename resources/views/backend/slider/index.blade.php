@extends('backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
    </div>
    <div class="card-body">
        <a href="tambah_blog.html" class="btn btn-primary mb-2">Tambah Slider</a>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($slider as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td><img src="{{asset($item->file)}}" width="100" alt=""></td>
                        <td>
                            <a href="edit_slider.html?id=1" class="btn btn-warning">Edit</a>
                            @csrf
                            <form action="delete_slider.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
      
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection