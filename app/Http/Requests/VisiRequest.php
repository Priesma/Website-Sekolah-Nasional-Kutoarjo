<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'isi' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'isi.required' => 'Isi visi wajib diisi',
            'isi.string' => 'Isi visi harus berupa teks',
        ];
    }
}
