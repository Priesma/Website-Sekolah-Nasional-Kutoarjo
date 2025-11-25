<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MitraRequest extends FormRequest
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
            'nama_mitra' => 'required|string|max:200',
            'logo' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nama_mitra.required' => 'Nama mitra wajib diisi',
            'nama_mitra.string' => 'Nama mitra harus berupa string',
            'nama_mitra.max' => 'Nama mitra maksimal 200 karakter',
            'logo.string' => 'Logo harus berupa string',
            'logo.max' => 'Logo maksimal 255 karakter',
            'deskripsi.string' => 'Deskripsi harus berupa string',
        ];
    }
}
