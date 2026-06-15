<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Borrow extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_pinjam',
        'due_date',
        'tanggal_kembali'
    ];

    // Relasi ke User/Anggota yang meminjam
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
