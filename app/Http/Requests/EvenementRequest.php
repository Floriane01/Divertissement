<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvenementRequest extends FormRequest
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
            'nom' => ['required', 'string'],
            'date' => ['required', 'max:191', 'date'],
            'lieu' => ['required', 'string'],
            'prix' => ['required', 'integer'],
            'horaire' => ['required', 'time'],
            'description' => ['required', 'string'],
            'image' => ['required', 'string'],
            'statut' => ['required', 'boolean'],
        ];
    }
}
