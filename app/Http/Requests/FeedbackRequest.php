<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
                    case 'add_feedback':
                        $rule = [
                            "name"=>"required",
                            "email"=>"required",
                            "subject"=>"required",
                            "message"=>"required",
                            'submissiondate' => 'required|min:4',
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
                    "subject.required"=>"nhập đúng",
                    
                    "message.required"=>"có nhập không ?",
                    'submissiondate.required' => 'Bạn bắt buộc phải nhập ',

                ];
            }
    }

