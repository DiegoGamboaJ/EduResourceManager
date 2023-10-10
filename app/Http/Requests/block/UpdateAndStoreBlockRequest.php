<?php

namespace App\Http\Requests\block;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAndStoreBlockRequest extends FormRequest
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
            'start_time' => ['require', 'after_or_equal:07:00', 'before_or_equal:17:00'],
            'end_time' => ['require', 'after_or_equal:07:00', 'before_or_equal:17:00'],
            'schedule_id' => ['require'],
        ];
    }
}
