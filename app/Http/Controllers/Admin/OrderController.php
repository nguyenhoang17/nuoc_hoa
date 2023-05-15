<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Statistical;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();
        if($request->input('status')) {
            $query->where('status', (int)$request->input('status'));
        }
        $orders = $query->orderBy('created_at','desc')->paginate(10);
        return view('admin.orders.list')->with(['orders' => $orders]);
    }

    public function confirmed($id){
        $order=Order::find($id);
        $order->status = 2;
        $order->save();
        return redirect()->route('admin.orders.list')->with('success', 'Đổi trạng thái thành công');
    }
    public function shipping($id){
        $order=Order::find($id);
        $order->status = 3;
        $order->save();
        return redirect()->route('admin.orders.list')->with('success', 'Đổi trạng thái thành công');
    }
    public function delivered($id){
        $order=Order::find($id);
        $order->status = 4;
        $order->save();
        $date= $order->created_at->format('Y-m-d');
        $data_static = Statistical::where('order_date',$date)->get();


        if(count($data_static) > 0){
            $data_static[0]->sales+=$order->total;
            foreach($order->products as $product){
                $data_static[0]->profit+= ($product->pivot->price * $product->pivot->quantity)-($product->price_input*$product->pivot->quantity);
                $data_static[0]->quantity+=$product->pivot->quantity;
            }
            $data_static[0]->total_order+=1;
            $data_static[0]->save();
        }else{
            $statistical = new Statistical();
            $statistical->order_date= $order->created_at->format('Y-m-d');
            $statistical->profit=0;
            $statistical->quantity=0;
            foreach($order->products as $product){
                $statistical->profit+= ($product->pivot->price * $product->pivot->quantity)-($product->price_input*$product->pivot->quantity);
                $statistical->quantity+=$product->pivot->quantity;
            }
            $statistical->sales = $order->total;
            $statistical->total_order=1;
            $statistical->save();
        }


        return redirect()->route('admin.orders.list')->with('success', 'Đổi trạng thái thành công');
    }
    public function cancelled($id){
        $order=Order::find($id);
        $order->status = 6;
        $order->save();
        return redirect()->route('admin.orders.list')->with('success', 'Đổi trạng thái thành công');
    }
}
