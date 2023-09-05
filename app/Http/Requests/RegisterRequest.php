<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
                    case 'add':
                        $rule = [
                            "name"=>"required",
                            "email"=>"required",
                            "phone"=>"required",
                            "address"=>"required",
                            'password' => 'required|min:4',
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
                    "name.required"=>"nhập đúng tên",
                    "email.required"=>"nhập đúng",
                    "phone.required"=>"nhập đúng",
                    
                    "address.required"=>"có nhập không ?",
                    'password.required' => 'Bạn bắt buộc phải nhập password',

                ];
            }
}
