<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
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
            'judul' => 'required|string|max:200',
            'kategori' => 'required|string|max:100',
            'gambar' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul wajib diisi',
            'judul.string' => 'Judul harus berupa string',
            'judul.max' => 'Judul maksimal 200 karakter',
            'kategori.required' => 'Kategori wajib diisi',
            'kategori.string' => 'Kategori harus berupa string',
            'kategori.max' => 'Kategori maksimal 100 karakter',
            'gambar.required' => 'Gambar wajib diisi',
            'gambar.string' => 'Gambar harus berupa string',
            'gambar.max' => 'Gambar maksimal 255 karakter',
        ];
    }
}
