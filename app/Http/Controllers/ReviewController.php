<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Session;
class ReviewController extends Controller
{
    public function review(){
        $reviews = Review::all();
        return view('review.review', compact('reviews'));
    }
    public function add_review(ReviewRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            // dd(122);
       
            $reviews = Review::create($params);
            if($reviews->id){
           
                return redirect()->route('review');
            }
            
        }
        return view('review.add');
    }
    public function update_review(ReviewRequest $request, $id){
        $reviews = Review::find($id);

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
            $result = Review::where('id', $id)->update($params);

            if ($result) {
                
                return redirect()->route('review', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }

        return view('review.update', compact('reviews'));
    
    }
    public function delete($id){
        Review::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('review');
    }
}
