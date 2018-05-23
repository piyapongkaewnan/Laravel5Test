<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomersRequest extends FormRequest
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
            'cust_name' => 'required',
            'cust_email' => 'required|email',
            'cust_birthdate' => 'required|date',
            'cust_phone' => 'required'
        ];
    }

    public function messages() {
        return [
           'cust_name.required' => 'กรุณากรอกชื่อลูกค้า',
           'cust_email.required' => 'กรุณากรอก E-Mail ลูกค้า',
           'cust_birthdate.required' => 'กรุณากรอกวันเกิดลูกค้า',
           'cust_phone.required' => 'กรุณากรอกเบอร์โทรลูกค้า'
            ];
   }
}
