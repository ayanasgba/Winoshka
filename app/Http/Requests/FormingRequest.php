<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required',
            'group'=> 'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required|min:15|max:200'
        ];
    }
    public function attributes()
        {
            return [
                'name'=> 'имя',
                'group'=> 'группа',
                'email'=>'адрес почты',
                'subject'=>'предмет',
                'message'=>'сообщение'
            ];
        }

    public function messages()
    {
        return [
        'name.required' =>'Поле имя обязательно для заполнения' ,
        'group.required' =>'Поле группа обязательно для заполнения' ,
        'email.required' =>'Поле почта является обязательным для заполнения',
        'subject.required' =>'Поле предмет обязательно для заполнения' ,
        'message.required' =>'Поле сообщение является обязательным для заполнения'
        ];
    }
}
