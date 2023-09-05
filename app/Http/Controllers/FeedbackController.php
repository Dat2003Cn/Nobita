<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Session;
class FeedbackController extends Controller
{
    public function feedback(){
        $feedbacks = Feedback::all();
        return view('feedback.feedback', compact('feedbacks'));
    }
    public function add_feedback(FeedbackRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            // dd(122);
       
            $feedbacks = Feedback::create($params);
            if($feedbacks->id){
                
                return redirect()->route('feedback');
            }
            
        }
        return view('feedback.add');
    }
    public function update_feedback(FeedbackRequest $request, $id){
        $feedbacks = Feedback::find($id);

        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
            $result = Feedback::where('id', $id)->update($params);

            if ($result) {
                
                return redirect()->route('feedback', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }

        return view('feedback.update', compact('feedbacks'));
    
    }
    public function delete($id){
        Feedback::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('feedback');
    }
}
