<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FormValReq extends FormRequest
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
        return [
            'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
            'email' => ['required', 'email',Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:100'],
            // 'photo' => ['nullable','image','mimes:jpeg,jpg,png,gif'],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'كسسسسسسسسسسسسسسسمك  حط كسم اسم ',
            'name.min' => 'كسسسسسسسسسسسسسسسمك  كبرو شويه ',
            'name.max' => 'كسسسسسسسسسسسسسسسمك صغرو شويه',
            'name.unique' => 'كسسسسسسسسسسسسسسسمك  و خلاص ',
        ];
    }
}
