<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book; // Import model Book di atas

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'deskripsi'
    ];

    /**
     * RELASI PENTING: Satu Kategori memiliki banyak Buku (One to Many)
     */
    public function books()
    {
        return $this->hasMany(Book::class, 'category_id');
    }
}
