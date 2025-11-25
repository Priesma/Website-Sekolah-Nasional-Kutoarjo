<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MisiRequest extends FormRequest
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
            'isi.required' => 'Isi misi wajib diisi',
            'isi.string' => 'Isi misi harus berupa teks',
        ];
    }
}
