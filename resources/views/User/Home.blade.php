<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lexicon Librium</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body{
      font-family: 'Inter', sans-serif;
      background: #F5F2DE;
      color: #2F1C17;
    }

    .title-font{
      font-family: 'Cormorant Garamond', serif;
    }

    .book-card:hover img{
      transform: scale(1.03);
    }

    .book-card img{
      transition: 0.3s;
    }

    .custom-shadow{
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="border-b border-[#D8D2C0] bg-[#FAF8F0] sticky top-0 z-50 shadow-sm">
  <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

    <!-- Sisi Kiri: Logo (Rata Kiri) -->
    <div class="flex-1 flex justify-start">
      <h1 class="title-font text-5xl font-bold">
        <a href="{{ url('/') }}" class="hover:opacity-90 transition-opacity">Lexicon Librium</a>
      </h1>
    </div>

    <!-- Sisi Tengah: Menu Navigasi (Diperbesar ke 19px, Direnggangkan dengan gap-16 & tracking-wider, serta Pas di Tengah) -->
    <div class="flex items-center justify-center gap-16 text-[19px] font-semibold tracking-wider">
      <a href="{{ url('/') }}" class="border-b-2 border-[#2F1C17] pb-1 text-[#2F1C17]">
        Catalog
      </a>
      <a href="#" class="text-[#2F1C17]/80 hover:text-[#2F1C17] pb-1 border-b-2 border-transparent hover:border-[#2F1C17] transition-all">
        Categories
      </a>
      <a href="#" class="text-[#2F1C17]/80 hover:text-[#2F1C17] pb-1 border-b-2 border-transparent hover:border-[#2F1C17] transition-all">
        Reading List
      </a>
    </div>

    <!-- Sisi Kanan: Profil User / Tombol Login (Rata Kanan) -->
    <div class="flex-1 flex justify-end items-center">
      @auth
        <!-- Lingkaran Inisial Nama User Dinamis dari Database -->
        <div class="relative group">
          
          <!-- Tombol bulat pemicu hover -->
          <button class="w-11 h-11 bg-[#2F1C17] text-[#F5F2DE] rounded-full flex items-center justify-center font-bold text-lg shadow-md hover:bg-[#4A241C] transition-all focus:outline-none">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
          </button>
          
          <!-- Jembatan transparan (-mt-2 dan pt-2) agar kursor tidak kehilangan fokus hover saat bergeser ke bawah -->
          <div class="absolute right-0 top-full -mt-2 pt-2 w-48 hidden group-hover:block z-50">
            <div class="bg-[#FAF8F0] border border-[#BDAF9C] rounded-lg shadow-lg overflow-hidden">
              
              <!-- FUNGSI 1: Menuju Halaman Profile -->
              <a href="{{ route('profile.edit') }}" class="block px-4 py-2.5 text-sm text-[#2F1C17] hover:bg-[#D8D2C0]/30 transition-colors font-medium border-b border-[#D8D2C0]">
                Profile
              </a>
              
              <!-- FUNGSI 2: Proses Logout -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2.5 text-sm text-red-700 hover:bg-[#D8D2C0]/30 transition-colors font-medium">
                  Logout
                </button>
              </form>

            </div>
          </div>

        </div>
        
      @else
        <!-- Jika Belum Login -->
        <div class="flex items-center gap-4">
          <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-[#6B4B3E] transition-colors">Login</a>
          <a href="{{ route('register') }}" class="bg-[#2F1C17] text-[#F5F2DE] px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#4A241C] transition-colors">Register</a>
        </div>
      @endauth
    </div>

  </div>
</nav>

<!-- HEADER -->
<section class="max-w-[1600px] mx-auto px-8 pt-10">
  
  <!-- Menggunakan items-start agar kolom kanan (pencarian) sejajar dengan baris paling atas kolom kiri (Archives) -->
  <div class="flex justify-between items-start">

    <!-- Kolom Kiri: Teks Informasi -->
    <div class="flex flex-col">
      <p class="text-sm text-[#8A7B6E] mb-4">
        Archives / Special Collections / The Reading Room
      </p>

      <h1 class="title-font text-6xl font-bold mb-2">
        The Scholar's Catalog
      </h1>

      <p class="text-[#5C5148] text-lg">
        {{ $books->total() }} digital manuscripts and leather-bound volumes available.
      </p>
    </div>

    <!-- Kolom Kanan: Pencarian & Filter (Disatukan dalam 1 Form agar pencarian genre & kata kunci saling sinkron) -->
    <form action="{{ url()->current() }}" method="GET" class="flex flex-col items-end gap-4">
      
      <!-- KOLOM PENCARIAN (Sejajar dengan Archives / Special Collections) -->
      <div class="relative w-[420px]">
        <!-- SVG Search Icon -->
        <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-[#8A7B6E]">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </span>

        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Search the leather-bound archives..."
          class="w-full bg-transparent border border-[#BDAF9C] rounded-lg py-3 pl-12 pr-5 outline-none focus:border-[#2F1C17] transition-all"
        >
      </div>

      <!-- BARIS FILTER: Hanya Genre/Kategori saja (Tombol 'Available Now' sudah dihapus) -->
      <div class="flex items-center gap-4">
        <select 
          name="category" 
          onchange="this.form.submit()" 
          class="border border-[#BDAF9C] bg-transparent px-5 py-3 rounded-lg outline-none cursor-pointer focus:border-[#2F1C17]"
        >
          <option value="all">All Genres</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
              {{ $category->nama_kategori }}
            </option>
          @endforeach
        </select>
      </div>

    </form>

  </div>

</section>


<!-- BOOK GRID -->
<section class="max-w-[1600px] mx-auto px-8 py-10">
  @if($books->isEmpty())
    <div class="text-center py-20">
      <p class="text-xl text-[#8A7B6E]">No manuscripts found matching your criteria.</p>
    </div>
  @else
    <div class="grid grid-cols-5 gap-8">
      @foreach($books as $book)
        <!-- BOOK CARD -->
        <div class="book-card">
          <div class="overflow-hidden rounded-lg custom-shadow">
            <!-- Menyesuaikan pemanggilan cover_image dari database -->
            <img
              src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?auto=format&fit=crop&q=80&w=400' }}"
              alt="{{ $book->judul }}"
              class="w-full h-[470px] object-cover"
            >
          </div>

          <!-- Menampilkan JUDUL buku (menggunakan 'judul') -->
          <h2 class="title-font text-3xl mt-5 font-semibold line-clamp-2 cursor-pointer hover:underline text-[#2F1C17]" title="{{ $book->judul }}">
            {{ $book->judul }}
          </h2>

          <!-- Menampilkan PENULIS buku (menggunakan 'penulis') -->
          <p class="text-[#6B5B50] mt-1 font-medium">
            By {{ $book->penulis }}
          </p>

          <!-- Menampilkan ISBN & STATUS buku langsung dari database Anda -->
          <div class="flex items-center justify-between text-xs text-[#8A7B6E] mt-2 border-t border-[#D8D2C0]/50 pt-2">
            <span>ISBN: {{ $book->isbn }}</span>
            <span class="px-2 py-0.5 bg-green-100 text-green-800 rounded font-semibold uppercase text-[10px]">
              {{ $book->status }}
            </span>
          </div>

          <!-- Bagian Rating Bintang -->
          <div class="flex items-center gap-2 mt-3 text-[#6E584D]">
            @php
              $ratingVal = round($book->ratings->avg('rating') ?? 5);
            @endphp
            <span>
              {{ str_repeat('★', $ratingVal) }}{{ str_repeat('☆', 5 - $ratingVal) }}
            </span>
            <span class="text-sm">({{ $book->ratings->count() }})</span>
          </div>
        </div>
      @endforeach
    </div>
  @endif
</section>

<!-- MEMBERSHIP -->
<section class="max-w-[1600px] mx-auto px-8 pb-16">

  <div class="bg-[#4A241C] rounded-xl p-10 flex justify-between items-center">

    <div>
      <h2 class="title-font text-4xl text-[#E6C8B8] font-semibold">
        @auth
          {{ Auth::user()->role === 'admin' ? 'Administrator Portal' : "Scholar's Tier Membership" }}
        @else
          Guest Access
        @endauth
      </h2>

      <p class="text-[#C9B0A2] mt-2">
        @auth
          Welcome back, {{ Auth::user()->name }}. You have full access to the Private Archival collection.
        @else
          Log in or register to get full access to the Private Archival collection.
        @endauth
      </p>
    </div>

    @guest
      <a href="{{ route('login') }}" class="bg-[#F5F2DE] px-8 py-4 rounded-lg font-medium hover:bg-[#EAE5CD] transition-colors">
        Login Now
      </a>
    @else
      <button class="bg-[#F5F2DE] px-8 py-4 rounded-lg font-medium hover:bg-[#EAE5CD] transition-colors">
        View Benefits
      </button>
    @endguest

  </div>

</section>

<!-- PAGINATION -->
<section class="pb-20">
  <div class="flex justify-center">
    <!-- Menggunakan sistem pagination dinamis bawaan Laravel -->
    {{ $books->links() }}
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-[#3A1F19] py-20 text-center text-[#C5AFA3]">

  <h2 class="title-font text-5xl font-bold mb-8">
    Lexicon Librium
  </h2>

  <div class="flex justify-center gap-10 mb-8">
    <a href="#" class="hover:underline">Terms</a>
    <a href="#" class="hover:underline">Privacy</a>
    <a href="#" class="hover:underline">Contact</a>
  </div>

  <p class="text-sm opacity-70">
    © {{ date('Y') }} Lexicon Librium. All Rights Reserved.
  </p>

</footer>

</body>
</html>
