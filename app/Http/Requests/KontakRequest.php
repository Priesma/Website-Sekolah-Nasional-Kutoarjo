<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KontakRequest extends FormRequest
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
            'alamat' => 'required|string',
            'email' => 'required|email|max:100',
            'telepon' => 'required|string|max:20',
            'link_media_sosial' => 'nullable|string',
            'embed_google_maps' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'alamat.required' => 'Alamat wajib diisi',
            'alamat.string' => 'Alamat harus berupa string',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus berupa format email yang valid',
            'email.max' => 'Email maksimal 100 karakter',
            'telepon.required' => 'Telepon wajib diisi',
            'telepon.string' => 'Telepon harus berupa string',
            'telepon.max' => 'Telepon maksimal 20 karakter',
            'link_media_sosial.string' => 'Link media sosial harus berupa string',
            'embed_google_maps.string' => 'Embed Google Maps harus berupa string',
        ];
    }
}
