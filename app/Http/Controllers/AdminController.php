<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDatail;
use App\Models\Feedback;
use App\Models\Review;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    
    public function admin(){
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    public function add(RegisterRequest $request){
        if($request->isMethod('POST')){
          
            $params = $request->except('_token');
            $params['password'] = Hash::make($params['password']);
        
            $users = User::create($params);
            if($users->id){
                // Session::flash('success','them moi thanh cong');
                return redirect()->route('home');
            }
            
        }
        return view('admin.add');
    }
    public function delete($id){
        User::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('admin');
    }

    public function login(Request $request)
{
  
    if ($request->isMethod('post')) {
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
          
            $user = Auth::User();
            if ($user->role == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        } else {
           
            return redirect()->route('login');
        }
    }
    return view('MU.login');

}
public function logout(){
    
    Auth::logout();
    Session::flush();
    return redirect()->route('login');

}
















    
    public function Order(){
        $orders = Order::all();
        return view('order.order', compact('orders'));
    }
    
    public function orderdetail(){
        $orderdetails = OrderDatail::all();
        return view('orderdetail.orderdetail', compact('orderdetails'));
    }
   
   
    

}
