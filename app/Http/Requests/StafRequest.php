<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StafRequest extends FormRequest
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
            'nama' => 'required|string|max:100',
            'jabatan' => 'nullable|string|max:100',
            'departemen' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama harus berupa string',
            'nama.max' => 'Nama maksimal 100 karakter',
            'jabatan.string' => 'Jabatan harus berupa string',
            'jabatan.max' => 'Jabatan maksimal 100 karakter',
            'departemen.required' => 'Departemen wajib diisi',
            'departemen.string' => 'Departemen harus berupa string',
            'departemen.max' => 'Departemen maksimal 100 karakter',
            'deskripsi.string' => 'Deskripsi harus berupa string',
            'foto.string' => 'Foto harus berupa string',
            'foto.max' => 'Foto maksimal 255 karakter',
        ];
    }
}
