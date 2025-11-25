<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SejarahRequest extends FormRequest
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
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|string|max:255',
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
            'isi.required' => 'Isi wajib diisi',
            'isi.string' => 'Isi harus berupa string',
            'tanggal.required' => 'Tanggal wajib diisi',
            'tanggal.date' => 'Tanggal harus berupa format tanggal yang valid',
            'gambar.string' => 'Gambar harus berupa string',
            'gambar.max' => 'Gambar maksimal 255 karakter',
        ];
    }
}
