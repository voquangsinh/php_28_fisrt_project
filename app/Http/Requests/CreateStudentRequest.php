<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|max:255',
            'address' => 'string',
            'phone_number' => 'required|regex:/0[0-9]{9}/',
        ];
    }


    public function messages()
    {
        return [
            'full_name.required' => 'Ten hoc vien la bat buoc',
            'full_name.max' => 'Ten hoc vien chieu dai toi da la 255 ky tu',
            'address.string' => 'Kieu du lieu phai la chuoi',
            'phone_number.required' => 'SDT la bat buoc',
            'phone_number.regex' => 'Format sdt khong dung',
        ];
    }
}
