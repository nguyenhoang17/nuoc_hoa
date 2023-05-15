<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function store(Request $request){
        try{
            $data=$request-> all();
            $products = Cart::content();
            DB::beginTransaction();
            $order = new Order();
            $order-> user_id = auth()->guard('web')->user()->id;
            $order -> total = Cart::total();
            $order->note=$data['note'];
            $order->save();
            foreach($products as $item){
                $data = Product::where('id','=',$item->id)->get();
                $data[0]->sell_count = $data[0]->sell_count + $item->qty ;
                $data[0]->quantity = $data[0]->quantity - $item->qty ;
                $data[0]->save();

                $order->products()->attach($item->id,
                    ['quantity'=>$item->qty ,
                        'price'=>$item->price]
                );

            }
            Cart::destroy();
            DB::commit();
//        return redirect()->route('user.orders.placed',auth()->user()->id);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $e->getMessage(),
                'data' => $request->all()
            ]);
            $request->session()->flash('error','Cập nhật danh mục mới không thành công');
            return redirect()->route('admin.categories.list');
        }



    }
}
