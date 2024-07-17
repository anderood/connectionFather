<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(Request $request): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->input('email') === null;
                }),
                Rule::unique('users', 'email')->ignore($request->input('email'))
            ],
            'password' => 'required|string|min:6',
        ];
    }
}
