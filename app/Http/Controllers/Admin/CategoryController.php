<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.list',['categories' =>$categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request){
        DB::beginTransaction();
        try{
            $data = $request->all();
            $category = new Category;
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->status = Category::DEFAULT_STATUS;
            if($request->hasFile('image')){
                $disk = 'public';
                $path = $request->file('image')->store('category', $disk);
                $category->image = $path;
            }
            $category->save();
            $request->session()->flash('success','Tạo danh mục mới thành công');
            DB::commit();
            return redirect()->route('admin.categories.list');
        } catch (\Exception $exception){
            DB::rollBack();
            \log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'user_id' => Auth::id(),
                'data' => $request->all()
            ]);
            $request->session()->flash('error','Tạo danh mục mới không thành công');
            return redirect()->route('admin.categories.list');
        }
    }
}
