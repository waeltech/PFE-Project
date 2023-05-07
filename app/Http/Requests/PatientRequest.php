<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'sexe' => 'required|string|max:255',
            'dateNaiss' => 'required|date',
            'lieuNaiss' => 'required|string|max:255',
            'age' => 'required|integer',
            'etatcivil' => 'required|string|max:255',
            'addresse' => 'required|string|max:255',
            'mutuelle' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:patients',
            'tel' => 'required|string|max:255',
            'observations' => 'required|string|max:255',
        ];
    }
}
