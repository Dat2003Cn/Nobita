<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
                    case 'add_order':
                        $rule = [
                            "user_id"=>"required",
                            "orderdate"=>"required",
                            "totalamount"=>"required",
                            "status"=>"required",
                       
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
                    "orderdate.required"=>"nhập đúng",
                    "totalamount.required"=>"nhập đúng",
                    
                    "status.required"=>"có nhập không ?",
                

                ];
            }
    }

