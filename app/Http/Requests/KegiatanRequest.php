<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KegiatanRequest extends FormRequest
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
            'nama_kegiatan' => 'required|string|max:200',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nama_kegiatan.required' => 'Nama kegiatan wajib diisi',
            'nama_kegiatan.string' => 'Nama kegiatan harus berupa string',
            'nama_kegiatan.max' => 'Nama kegiatan maksimal 200 karakter',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'deskripsi.string' => 'Deskripsi harus berupa string',
            'tanggal.required' => 'Tanggal wajib diisi',
            'tanggal.date' => 'Tanggal harus berupa format tanggal yang valid',
            'foto.string' => 'Foto harus berupa string',
            'foto.max' => 'Foto maksimal 255 karakter',
        ];
    }
}
