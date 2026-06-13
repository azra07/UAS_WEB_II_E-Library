<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = ['user_id', 'tanggal_pinjam', 'due_date', 'tanggal_kembali'];

    protected $casts = [
        'tanggal_pinjam' => 'datetime',
        'due_date' => 'datetime',
        'tanggal_kembali' => 'datetime',
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function details() { return $this->hasMany(DetailPeminjaman::class); }
}
