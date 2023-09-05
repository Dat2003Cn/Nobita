<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    public function product(){
        $products = Product::all();
        return view('product.product', compact('products'));
    }
    public function add_product(ProductRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
      
            if($request->hasFile('image') && $request->file('image')->isValid()){
          
               
                $params['image'] = uploadFile("hinh", $request->file('image'));
            }
       
            $products = Product::create($params);
            if($products->id){
           
                return redirect()->route('product');
            }
            
        }
        return view('product.add');
    }
    public function update_product(ProductRequest $request, $id){
        $products = Product::find($id);

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
            $result = Product::where('id', $id)->update($params);

            if ($result) {
                
                return redirect()->route('product', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }

        return view('product.update', compact('products'));
    
    }
    public function delete($id){
        Product::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('product');
    }

}
