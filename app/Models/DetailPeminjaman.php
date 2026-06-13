<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $table = 'detail_peminjaman'; // Explicitly state the table name
    protected $fillable = ['borrow_id', 'book_id'];

    public function book() {
        return $this->belongsTo(Book::class);
    }
}
