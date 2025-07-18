<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => $this->isMethod('POST') ? 'required' : 'nullable'.imageFileValidationRule(),
        ];
    }
}
