<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YayasanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama yayasan wajib diisi',
            'nama.string' => 'Nama yayasan harus berupa string',
            'nama.max' => 'Nama yayasan maksimal 200 karakter',
            'deskripsi.string' => 'Deskripsi harus berupa teks',
            'gambar.string' => 'Gambar harus berupa string (nama file/path)',
            'gambar.max' => 'Gambar maksimal 255 karakter',
        ];
    }
}
