<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniReviewRequest extends FormRequest
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
            'nama_alumni' => 'required|string|max:100',
            'tahun_lulus' => 'required|integer|min:1900|max:' . (date('Y') + 10),
            'kesan' => 'required|string',
            'foto' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nama_alumni.required' => 'Nama alumni wajib diisi',
            'nama_alumni.string' => 'Nama alumni harus berupa string',
            'nama_alumni.max' => 'Nama alumni maksimal 100 karakter',
            'tahun_lulus.required' => 'Tahun lulus wajib diisi',
            'tahun_lulus.integer' => 'Tahun lulus harus berupa angka',
            'tahun_lulus.min' => 'Tahun lulus minimal 1900',
            'tahun_lulus.max' => 'Tahun lulus maksimal ' . (date('Y') + 10),
            'kesan.required' => 'Kesan wajib diisi',
            'kesan.string' => 'Kesan harus berupa string',
            'foto.string' => 'Foto harus berupa string',
            'foto.max' => 'Foto maksimal 255 karakter',
        ];
    }
}
