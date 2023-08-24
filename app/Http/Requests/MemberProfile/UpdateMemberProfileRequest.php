<?php

namespace App\Http\Requests\MemberProfile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,'.auth()->id()],
            'phone_number' => ['required'],
            'new_password' => ['max:255'],
            'bank' => ['max:255'],
            'bank_account_number' => ['max:25'],
        ];
    }
}
