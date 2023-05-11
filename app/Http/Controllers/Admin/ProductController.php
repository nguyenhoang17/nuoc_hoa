<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        try {
            $products = Product::with(['category', 'brand'])->paginate(15);
            return view('admin.products.list', ['products' => $products]);
        } catch (\Exception $exception) {
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
            $request->session()->flash('error','hiển thị sản phẩm không thành công');
            return redirect()->route('admin.products.list');
        }
    }

    public function create(Request $request)
    {
        try {
            $categories = Category::get();
            $brands = Brand::get();
            return view('admin.products.create', [
                'categories' => $categories,
                'brands' => $brands
            ]);
        } catch (\Exception $exception) {
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
            $request->session()->flash('error','Chuyển hướng tạo sản phẩm không thành công');
            return redirect()->route('admin.products.list');
        }
    }

    public function store(StoreProductRequest $request)
    {
        try {
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
                $product -> sale_price = $data['output_price'];
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
        } catch (\Exception $exception) {
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
            $request->session()->flash('error','Tạo sản phẩm không thành công');
            return redirect()->route('admin.products.list');
        }
    }

    public function edit(Request $request, $id)
    {
        try {
            $categories=Category::get();
            $brands=Brand::get();
            $product = Product::find($id);

            return view('admin.products.edit')-> with([
                'product'=> $product,
                'categories'=>$categories,
                'brands'=>$brands
            ]);
        } catch (\Exception $exception) {
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
            $request->session()->flash('error','Chuyển hướng cập nhật sản phẩm không thành công');
            return redirect()->route('admin.products.list');
        }
    }

    public function update(UpdateProductRequest $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            $data = $request-> all();
            $product -> name = $data['name'];
            $product -> category_id = $data['category_id'];
            $product -> description = $data['description'];
            $product -> quantity = $data['quantity'];
            $product -> input_price = $data['input_price'];
            $product -> output_price = $data['output_price'];
            if($data['sale_price']) {
                $product -> sale_price = $data['sale_price'];
            } else {
                $product -> sale_price = $data['output_price'];
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
            $request->session()->flash('success', 'Cập nhật sản phẩm thành công');
            return redirect()->route('admin.products.list');

        } catch (\Exception $exception) {
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
            $request->session()->flash('error','Cập nhật sản phẩm không thành công');
            return redirect()->route('admin.products.list');
        }
    }

    public function delete(Request $request, $id)
    {
        try{
            Product::destroy($id);
            return redirect()-> route('admin.products.list')->with('success', 'Xoá sản phẩm thành công');
        } catch (\Exception $exception) {
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
            $request->session()->flash('error','Xoá sản phẩm không thành công');
            return redirect()->route('admin.products.list');
        }
    }
}
