<?php

namespace App\Http\Requests\Job;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobRequest extends FormRequest
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
            'title' => 'required|string',
            'date_scheduling' => 'required|date',
            'user' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->input('user_id') === null;
                }),
            ],
            'patient' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->input('patient_id') === null;
                }),
            ],
            'address' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->input('address_id') === null;
                }),
            ],
        ];
    }
}
