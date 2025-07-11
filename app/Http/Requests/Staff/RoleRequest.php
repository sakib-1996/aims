<?php

namespace App\Http\Requests\Staff;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
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
            'name' => ['required','string','max:255',Rule::unique(Role::class)->ignore($this->route('role')?->id)],
            'description' => ['nullable','string','max:255'],
            'permissions' => ['nullable','array'],
            'permissions.*' => ['string'],
        ];
    }
}
