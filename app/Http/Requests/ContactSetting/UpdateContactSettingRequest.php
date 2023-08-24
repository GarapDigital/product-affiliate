<?php

namespace App\Http\Requests\ContactSetting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactSettingRequest extends FormRequest
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
            'email_subject_format' => ['required', 'string', 'max:255'],
            'customer_service_email' => ['required', 'email'],
            'company_email' => ['required', 'email'],
            'customer_service_whatsapp' => ['required']
        ];
    }
}
