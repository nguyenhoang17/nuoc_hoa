@extends('admin.layouts.master')
@section('title')
    <title>Danh sách sản phẩm</title>
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
        <table class="table text-nowrap">
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
            @if(count($products) > 0)
                @foreach($products as $key => $product)
                <tr>
                    <td>{{$key}}</td>
                    <td style= "color: blue"><a href ="">{{$product->name}}</a></td>
                    <td>
                        <img style="width: 100px;
                            object-fit: cover;
                            height: 50px;
                            background-size: cover;" src="{{url(Storage::url($product->image))}}">
                    </td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{number_format($product->input_price)}}đ</td>
                    <td>{{number_format($product->output_price)}}đ</td>
                    <td>{{number_format((($product->output_price - $product->sale_price)/$product->output_price)*100 , 2)}}%</td>
                    <td>{{$product->status_text}}</td>
                    <td class="text-center">
                        <a href="{{route('admin.products.edit',$product->id)}}" type="button" class= "btn-edit text-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{route('admin.products.delete',$product->id)}}" method="POST" style="display: inline-block">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button id="delete" onclick="deleteBorder()" style="margin-left:10px; border: none" type="submit" class= "btn-delete text-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <div class="text-danger">Chưa có sản phẩm nào để hiển thị, vui lòng thêm danh mục!!!</div>
            @endif
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
