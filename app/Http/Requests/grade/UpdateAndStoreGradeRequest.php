<?php

namespace App\Http\Requests\grade;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAndStoreGradeRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:6', 'unique:' . Grade::class, 'regex:/^[1-8]°[A-F]$/'],
            'schedule' => ['required'],
        ];
    }
}
