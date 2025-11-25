<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FasilitasRequest extends FormRequest
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
            'nama_fasilitas' => 'required|string|max:200',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nama_fasilitas.required' => 'Nama fasilitas wajib diisi',
            'nama_fasilitas.string' => 'Nama fasilitas harus berupa string',
            'nama_fasilitas.max' => 'Nama fasilitas maksimal 200 karakter',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'deskripsi.string' => 'Deskripsi harus berupa string',
            'foto.string' => 'Foto harus berupa string',
            'foto.max' => 'Foto maksimal 255 karakter',
        ];
    }
}
