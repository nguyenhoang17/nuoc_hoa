@extends('admin.layouts.master')
@section('title')
    <title>Danh sách danh mục</title>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card-body">
        <a href="{{route('admin.categories.create')}}" class="btn-primary px-2 py-2 mb-3 border-0 float-right text-white " style="cursor: pointer">Thêm mới</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">STT</th>
                <th style="width: 200px">Ảnh</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th style="width: 100px">trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($categories))
                @foreach($categories as $key => $category)
            <tr>
                <td>{{$key}}</td>
                <td>
                    <img src="" alt="">
                </td>
                <td style="width: 200px">{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td></td>
            </tr>
                @endforeach
            @else
            <h1>Chưa có danh mục nào để hiển thị</h1>
            @endif
            </tbody>
        </table>
    </div>
@endsection
