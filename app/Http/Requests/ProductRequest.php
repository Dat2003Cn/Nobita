<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                    case 'add_product':
                        $rule = [
                            "productname"=>"required",
                            "description"=>"required",
                            "price"=>"required",
                            "stockquantity"=>"required",
                       
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
                    "productname.required"=>"nhập đúng tên",
                    "description.required"=>"nhập đúng",
                    "price.required"=>"nhập đúng",
                    
                    "stockquantity.required"=>"có nhập không ?",
                

                ];
            }
    }

