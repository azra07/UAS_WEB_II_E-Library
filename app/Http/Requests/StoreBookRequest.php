<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function authorize(): bool
    {
        // Ubah ke true agar validasi ini aktif
        return true; 
    }

    public function rules(): array
    {
        return [
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books,isbn', // ISBN harus unik (tidak boleh sama)
            'category_id' => 'required|exists:categories,id', // Harus ada di tabel categories
            'publisher_id' => 'required|exists:publishers,id', // Harus ada di tabel publishers
        ];
    }

    // Opsional: Pesan error bahasa Indonesia
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul buku wajib diisi!',
            'isbn.unique' => 'ISBN ini sudah terdaftar.',
        ];
    }
}
