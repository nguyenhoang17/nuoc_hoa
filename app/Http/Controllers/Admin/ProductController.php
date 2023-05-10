<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.list');
    }

    public function create()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.products.create', [
            'categories' => $categories,
            'brands' => $brands
            ]);
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request-> all();
        $product = new Product();
        $product -> name = $data['name'];
        $product -> category_id = $data['category_id'];
        $product -> description = $data['description'];
        $product -> quantity = $data['quantity'];
        $product -> input_price = $data['input_price'];
        $product -> output_price = $data['output_price'];
        if($data['sale_price']) {
            $product -> sale_price = $data['sale_price'];
        } else {
            $product -> sale_price = $data['input_price'];
        }
        $product->status = $data['status'];
        $product->staff_id = Auth::guard('admin')->user()->id;
        $product->brand_id = $data['brand_id'];
        if($request->hasFile('image')){
            $disk = 'public';
            $path = $request->file('image')->store('product', $disk);
            $product->image = $path;
        }
        $product-> save();
        $request->session()->flash('success', 'Tạo sản phẩm thành công');
        return redirect()->route('admin.products.list');
    }

    public function edit()
    {
        return view('admin.products.edit');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
