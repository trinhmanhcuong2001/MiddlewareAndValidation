<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserForm extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute không được để trống.',
            'name.string' => ':attribute phải là chuỗi ký tự.',
            'name.max' => ':attribute không được vượt quá 255 ký tự.',
            'email.required' => ':attribute không được để trống.',
            'email.email' => ':attribute phải có định dạng hợp lệ.',
            'email.unique' => ':attribute đã tồn tại trong hệ thống.',
            'password.min' => ':attribute phải có ít nhất 8 ký tự.',
            'password.regex' => ':attribute phải bao gồm chữ hoa, chữ thường.',
            'password.required' => ':attribute không được để trống.'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
        ];
    }
}
