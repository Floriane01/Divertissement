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
            'theme' => ['nullable', 'string'],
            'date_debut' => ['required', 'date_format:Y-m-d'],
            'date_fin' => ['required', 'date_format:Y-m-d'],
            'date_limite' => ['required', 'date_format:Y-m-d'],
            'lieu' => ['required', 'string'],
            'heure_debut' => ['required', 'date_format:H:i'],
            'description' => ['required', 'string'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statut' => ['boolean'],
            'organisateur' => ['nullable', 'array'],
            'sponsors' => ['nullable', 'array']
        ];
    }
}
