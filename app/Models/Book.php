<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Rating;

class Book extends Model
{
    // Daftarkan 'cover_image' di bawah agar aman saat proses penyimpanan massal di controller
    protected $fillable = [
        'judul', 
        'penulis', 
        'isbn', 
        'language', 
        'status', 
        'category_id', 
        'publisher_id',
        'cover_image' // <-- Tambahan penyesuaian penting
    ];
  
    // Relasi ke tabel categories
    public function category() 
    { 
        return $this->belongsTo(Category::class, 'category_id'); 
    }

    // Relasi ke tabel publishers
    public function publisher() 
    { 
        return $this->belongsTo(Publisher::class, 'publisher_id'); 
    }

    // Relasi ke tabel ratings
    public function ratings() 
    { 
        return $this->hasMany(Rating::class, 'book_id'); // pastikan foreign key di tabel rating sesuai
    }
}
