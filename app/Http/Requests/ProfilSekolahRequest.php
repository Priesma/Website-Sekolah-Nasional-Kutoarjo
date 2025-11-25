<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilSekolahRequest extends FormRequest
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
            'visi' => 'required|string',
            'misi' => 'required|string',
            'tujuan' => 'required|string',
            'deskripsi_yayasan' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'visi.required' => 'Visi wajib diisi',
            'visi.string' => 'Visi harus berupa string',
            'misi.required' => 'Misi wajib diisi',
            'misi.string' => 'Misi harus berupa string',
            'tujuan.required' => 'Tujuan wajib diisi',
            'tujuan.string' => 'Tujuan harus berupa string',
            'deskripsi_yayasan.string' => 'Deskripsi yayasan harus berupa string',
        ];
    }
}
