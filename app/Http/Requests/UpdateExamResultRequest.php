<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExamResultRequest extends FormRequest
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
            //
            'student_id' => 'required|exists:students,student_id',
        'exam_name' => 'required|string|max:255',
        'exam_date' => 'required|date|date_format:Y-m-d',
        'subject' => 'required|string|max:255',
        'score' => 'required|integer|min:0',
        ];
    }
}
