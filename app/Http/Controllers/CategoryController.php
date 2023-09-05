<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
Use App\Models\Category;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    //
    public function category(){
        $categorys = Category::all();
        return view('category.index', compact('categorys'));
    }
    public function add_category(CategoryRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            // dd(122);
       
            $categorys = Category::create($params);
            if($categorys->id){
                Session::flash('success','them moi thanh cong');
                return redirect()->route('category');
            }
            
        }
        return view('category.add');
    }
    public function update_category(CategoryRequest $request, $id){
        $categorys = Category::find($id);

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
            $result = Category::where('id', $id)->update($params);

            if ($result) {
                
                return redirect()->route('category', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }

        return view('category.update', compact('categorys'));
    
    }
    public function delete_category($id){
        Category::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('category');
    }
}
