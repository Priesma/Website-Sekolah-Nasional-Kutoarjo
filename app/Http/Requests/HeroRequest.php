<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul wajib diisi',
            'judul.string' => 'Judul harus berupa string',
            'judul.max' => 'Judul maksimal 200 karakter',
            'deskripsi.string' => 'Deskripsi harus berupa teks',
            'gambar.string' => 'Gambar harus berupa string (nama file/path)',
            'gambar.max' => 'Gambar maksimal 255 karakter',
        ];
    }
}
