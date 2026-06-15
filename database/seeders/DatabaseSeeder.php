<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat User Admin
        User::create([
            'name' => 'Admin Perpustakaan',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Akbar',
            'email' => 'akbar@admin.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Tima',
            'email' => 'tima@user.com',
            'password' => bcrypt('12345678'),
            'role' => 'user',
        ]);

        // 2. Buat 5 Kategori
        $categories = ['Teknologi', 'Sains', 'Sejarah', 'Fiksi', 'Agama'];
        foreach ($categories as $cat) {
            Category::create(['nama_kategori' => $cat]);
        }

        // 3. Buat Penerbit
        Publisher::create(['nama_penerbit' => 'Gramedia', 'alamat' => 'Jakarta']);
        Publisher::create(['nama_penerbit' => 'Erlangga', 'alamat' => 'Bandung']);

        // 4. Buat Buku Contoh
        Book::create([
            'judul' => 'Pemrograman Web Laravel',
            'penulis' => 'Louis R. Lampard',
            'isbn' => '978-602-000-1',
            'category_id' => 1,
            'publisher_id' => 1,
        ]);
        
        Book::create([
            'judul' => 'Sejarah Dunia Modern',
            'penulis' => 'Sejarawan Hebat',
            'isbn' => '978-602-000-2',
            'category_id' => 3,
            'publisher_id' => 2,
        ]);
    }
}
