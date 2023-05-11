<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('admin.brands.list',['brands' =>$brands]);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(StoreBrandRequest $request){
        DB::beginTransaction();
        try{
            $data = $request->all();
            $brands = new Brand;
            $brands->name = $data['name'];
            $brands->description = $data['description'];
            $brands->status = Brand::DEFAULT_STATUS;
            if($request->hasFile('image')){
                $disk = 'public';
                $path = $request->file('image')->store('brand', $disk);
                $brands->image = $path;
            }
            $brands->save();
            $request->session()->flash('success','Tạo nhãn hiệu mới thành công');
            DB::commit();
            return redirect()->route('admin.brands.list');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'data' => $request->all()
            ]);
            $request->session()->flash('error','Tạo nhãn hiệu mới không thành công');
            return redirect()->route('admin.brands.list');
        }
    }
    public function edit($id)
    {
        try{
            $brand = Brand::findOrFail($id);
            return view('admin.brands.edit',['brand' =>$brand]);
        } catch (\Exception $exception){
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
            ]);
        }
    }
    public function update(UpdateBrandRequest $request, $id)
    {
        DB::beginTransaction();
        try{
            $data = $request->all();
            $brand = Brand::findOrFail($id);
            $brand->name = $data['name'];
            $brand->description = $data['description'];
            $brand->status = Brand::DEFAULT_STATUS;
            if($request->hasFile('image')){
                $disk = 'public';
                $path = $request->file('image')->store('category', $disk);
                $brand->image = $path;
            }
            $brand->save();
            $request->session()->flash('success','Cập nhật nhãn hiệu mới thành công');
            DB::commit();
            return redirect()->route('admin.brands.list');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'data' => $request->all()
            ]);
            $request->session()->flash('error','Cập nhật nhãn hiệu mới không thành công');
            return redirect()->route('admin.brands.list');
        }
    }

    public function delete($id)
    {
        try {
            Brand::destroy($id);
            return redirect()-> route('admin.brands.list')->with('success', 'Xoá nhãn hiệu thành công');
        }catch (\Exception $exception){
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'data' => $id
            ]);
            return redirect()-> route('admin.brands.list')->with('success', 'Xoá nhãn hiệu không thành công');
        }
    }
}
