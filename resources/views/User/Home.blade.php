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
<nav class="border-b border-[#D8D2C0] bg-[#F5F2DE] sticky top-0 z-50">
  <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

    <!-- Sisi Kiri: Logo (Rata Kiri) -->
    <div class="flex-1 flex justify-start">
      <h1 class="title-font text-5xl font-bold">
        <a href="{{ url('/') }}">Lexicon Librium</a>
      </h1>
    </div>

    <!-- Sisi Tengah: Menu Navigasi (Sama Rata & Presisi di Tengah) -->
    <div class="flex items-center justify-center gap-12 text-[17px] font-medium">
      <a href="{{ url('/') }}" class="font-semibold border-b-2 border-[#2F1C17] pb-1">
        Catalog
      </a>
      <a href="#" class="hover:text-[#6B4B3E] transition-colors">
        Categories
      </a>
      <a href="#" class="hover:text-[#6B4B3E] transition-colors">
        Reading List
      </a>
    </div>

    <!-- Sisi Kanan: Profil User / Tombol Login (Rata Kanan) -->
    <div class="flex-1 flex justify-end items-center">
      @auth
        <!-- Lingkaran Inisial Nama User Dinamis dari Database -->
        <div class="relative group">
          <button class="w-11 h-11 bg-[#2F1C17] text-[#F5F2DE] rounded-full flex items-center justify-center font-bold text-lg shadow-md hover:bg-[#4A241C] transition-all focus:outline-none">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
          </button>
          
          <!-- Dropdown Menu saat Hover Profile -->
          <div class="absolute right-0 mt-2 w-48 bg-[#F5F2DE] border border-[#BDAF9C] rounded-lg shadow-lg py-2 hidden group-hover:block z-50">
            <div class="px-4 py-2 border-b border-[#D8D2C0] text-sm text-[#2F1C17] font-semibold">
              {{ Auth::user()->name }}
            </div>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-[#D8D2C0]/20 transition-colors">
                Logout
              </button>
            </form>
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

  <p class="text-sm text-[#8A7B6E] mb-4">
    Archives / Special Collections / The Reading Room
  </p>

  <div class="flex justify-between items-end">

    <div>
      <h1 class="title-font text-6xl font-bold mb-2">
        The Scholar's Catalog
      </h1>

      <p class="text-[#5C5148] text-lg">
        {{ $books->total() }} digital manuscripts and leather-bound volumes available.
      </p>
    </div>

    <!-- Form & Filter (Ditumpuk ke Atas secara Vertikal) -->
    <div class="flex flex-col items-end gap-4">
      
      <!-- KOLOM PENCARIAN (Berada di atas filter dropdown, dilengkapi Icon Cari) -->
      <form action="{{ url()->current() }}" method="GET" class="relative w-[420px]">
        @if(request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        
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
      </form>

      <!-- BARIS FILTER (Dropdown Genre & Tombol pendukung) -->
      <div class="flex items-center gap-4">
        
        <form action="{{ url()->current() }}" method="GET" class="flex gap-4">
          @if(request('search'))
            <input type="hidden" name="search" value="{{ request('search') }}">
          @endif
          
          <select 
            name="category" 
            onchange="this.form.submit()" 
            class="border border-[#BDAF9C] bg-transparent px-5 py-3 rounded-lg outline-none cursor-pointer focus:border-[#2F1C17]"
          >
            <option value="all">All Genres</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
              </option>
            @endforeach
          </select>
        </form>

        <button class="border border-[#BDAF9C] px-5 py-3 rounded-lg hover:bg-[#BDAF9C]/10 transition-colors">
          Available Now
        </button>

      </div>

    </div>

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
            <img
              src="{{ $book->image ? asset('storage/' . $book->image) : 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?auto=format&fit=crop&q=80&w=400' }}"
              alt="{{ $book->title }}"
              class="w-full h-[470px] object-cover"
            >
          </div>

          <h2 class="title-font text-3xl mt-5 font-semibold line-clamp-2 cursor-pointer hover:underline" title="{{ $book->title }}">
            {{ $book->title }}
          </h2>

          <p class="text-[#6B5B50] mt-1">
            {{ $book->publisher->name ?? 'Unknown Publisher' }}
          </p>

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
