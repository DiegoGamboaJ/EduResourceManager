<?php

namespace App\Http\Requests\schedule;

use App\Models\Schedule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAndStoreScheduleRequest extends FormRequest
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
            'cycle' => ['required', 'string', 'max:10', 'unique:' . Schedule::class, 'regex:/^[1-9]° ciclo$/'],
        ];
    }
}
