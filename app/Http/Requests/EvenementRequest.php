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
        if(request()->routeIs('admin.evenements.store')){
            $coverRule = 'required|mimes:jpeg|max:500000';
        }elseif(request()->routeIs('admin.evenements.update')){
            $coverRule = 'sometimes|image|max:500000';
        }


        return [
            'nom' => ['required', 'string'],
            'theme' => ['nullable', 'string'],
            'date_debut' => ['required', 'date_format:Y-m-d'],
            'date_fin' => ['required', 'date_format:Y-m-d'],
            'date_limite' => ['required', 'date_format:Y-m-d'],
            'lieu' => ['required', 'string'],
            'heure_debut' => ['required', 'date_format:H:i'],
            'description' => ['required', 'string'],
            'cover' => $coverRule,
            'statut' => ['boolean'],
            'organisateur' => ['nullable', 'array'],
            'sponsors' => ['nullable', 'array']
        ];
    }
}
