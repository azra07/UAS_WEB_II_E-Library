<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\DetailPeminjaman;

class Borrow extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_pinjam',
        'due_date',
        'tanggal_kembali'
    ];

    // TELL LARAVEL THESE COLUMNS ARE DATES, NOT STRINGS
    protected $casts = [
        'tanggal_pinjam' => 'datetime',
        'due_date' => 'datetime',
        'tanggal_kembali' => 'datetime',
    ];

    // Relasi ke User/Anggota yang meminjam
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Detail Peminjaman (Buku)
    public function details()
    {
        return $this->hasMany(DetailPeminjaman::class, 'borrow_id');
    }
}