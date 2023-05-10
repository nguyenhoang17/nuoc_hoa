@extends('admin.layouts.master')
@section('title')
    <title>Tạo sản phẩm</title>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card-body">
        <a href="{{route('admin.products.create')}}" class="btn-primary px-2 py-2 mb-3 border-0 float-right text-white " style="cursor: pointer">Thêm mới</a>
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>Stt</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Danh mục</th>
                <th>Nhãn Hiệu</th>
                <th>Số lượng</th>
                <th>Giá nhập vào</th>
                <th>Giá bán</th>
                <th>% giảm giá</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td> </td>
                    <td style= "color: blue"><a href =""></a></td>
                    <td>
                        <img src=""width="100px" height="80px">

                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tbody>
        </table>
    </div>
    <style>
        #delete:focus{
            outline: unset;
        }
    </style>
@endsection
@section('js')
    <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
