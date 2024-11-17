<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'max:255', 'string'],
            'last_name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'organization' => ['required', 'max:255', 'string'],
            'message' => ['required', 'max:255', 'string'],
            'image' => ['image', 'nullable'],
            'status' => ['nullable', 'in:unpaid,paid'],
        ];
    }
}