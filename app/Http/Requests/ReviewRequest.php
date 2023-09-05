<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule = [];

        $currentAction = $this->route()->getActionMethod();

        switch($this->method()):
            case'POST':
                 switch($currentAction) :
                    case 'add_review':
                        $rule = [
                            "user_id"=>"required",
                            "product_id"=>"required",
                            "rating"=>"required",
                            "comment"=>"required",
                            "reviewdate"=>"required",

                       
                        ];
                        break;
                    endswitch;
                endswitch;
                return $rule;
            }
            public function messages()
            {
                return [
                    //
                    "user_id.required"=>"nhập đúng tên",
                    "product_id.required"=>"nhập đúng",
                    "rating.required"=>"nhập đúng",
                    "comment.required"=>"nhập đúng",

                    
                    "reviewdate.required"=>"có nhập không ?",
                

                ];
            }
    }

