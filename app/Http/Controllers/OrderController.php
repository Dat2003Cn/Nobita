<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Session;
class OrderController extends Controller
{
    public function order(){
        $orders = Order::all();
        return view('order.order', compact('orders'));
    }
    public function add_order(OrderRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            // dd(122);
       
            $orders = Order::create($params);
            if($orders->id){
                
                return redirect()->route('order');
            }
            
        }
        return view('order.add');
    }
    public function update_order(OrderRequest $request, $id){
        $orders = Order::find($id);

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
            $result = Order::where('id', $id)->update($params);

            if ($result) {
                
                return redirect()->route('order', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }

        return view('order.update', compact('orders'));
    
    }
    public function delete($id){
        Order::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('order');
    }
    
}
