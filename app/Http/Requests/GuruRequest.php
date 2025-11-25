<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruRequest extends FormRequest
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
            'jabatan' => 'required|string|max:100',
            'jenjang' => 'required|in:TK,SD',
            'moto' => 'nullable|string',
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
            'jabatan.required' => 'Jabatan wajib diisi',
            'jabatan.string' => 'Jabatan harus berupa string',
            'jabatan.max' => 'Jabatan maksimal 100 karakter',
            'jenjang.required' => 'Jenjang wajib diisi',
            'jenjang.in' => 'Jenjang harus TK atau SD',
            'moto.string' => 'Moto harus berupa string',
            'foto.string' => 'Foto harus berupa string',
            'foto.max' => 'Foto maksimal 255 karakter',
        ];
    }
}
