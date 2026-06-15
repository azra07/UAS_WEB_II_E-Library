<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Borrow;
use App\Models\Book;

class DetailPeminjaman extends Model
{
    // PERBAIKAN: Ganti 'detail_peminjamen' menjadi 'detail_peminjaman' sesuai database Anda
    protected $table = 'detail_peminjaman';

    protected $fillable = [
        'borrow_id',
        'book_id'
    ];

    public function borrow()
    {
        return $this->belongsTo(Borrow::class, 'borrow_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
