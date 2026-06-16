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

<nav class="border-b border-[#D8D2C0] bg-[#FAF8F0] sticky top-0 z-50 shadow-sm">
  <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

    <div class="flex-1 flex justify-start">
      <h1 class="title-font text-5xl font-bold">
        <a href="{{ url('/') }}" class="hover:opacity-90 transition-opacity text-[#2F1C17]">Lexicon Librium</a>
      </h1>
    </div>

    <div class="flex items-center justify-center gap-16 text-[19px] font-semibold tracking-wider">
      <a href="{{ route('user.dashboard') }}" class="text-[#2F1C17]/80 hover:text-[#2F1C17] pb-1 border-b-2 border-transparent hover:border-[#2F1C17] transition-all">
        Catalog
      </a>
      <a href="{{ route('user.categories') }}" class="text-[#2F1C17]/80 hover:text-[#2F1C17] pb-1 border-b-2 border-transparent hover:border-[#2F1C17] transition-all">
        Categories
      </a>
      <a href="{{ route('user.reading_list_view') }}" class="text-[#2F1C17]/80 hover:text-[#2F1C17] pb-1 border-b-2 border-transparent hover:border-[#2F1C17] transition-all">
        Reading List
      </a>
    </div>

    <div class="flex-1 flex justify-end items-center">
      @auth
        <div class="relative group">
          
          <button class="w-11 h-11 bg-[#2F1C17] text-[#F5F2DE] rounded-full flex items-center justify-center font-bold text-lg shadow-md hover:bg-[#4A241C] transition-all focus:outline-none">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
          </button>
          
          <div class="absolute right-0 top-full -mt-2 pt-2 w-48 hidden group-hover:block z-50">
            <div class="bg-[#FAF8F0] border border-[#BDAF9C] rounded-lg shadow-lg overflow-hidden">
              
              <a href="{{ route('profile.edit') }}" class="block px-4 py-2.5 text-sm text-[#2F1C17] hover:bg-[#D8D2C0]/30 transition-colors font-medium border-b border-[#D8D2C0]">
                Profile
              </a>
              
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
        <div class="flex items-center gap-4">
          <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-[#2F1C17] transition-colors">Login</a>
          <a href="{{ route('register') }}" class="bg-[#2F1C17] text-[#F5F2DE] px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#4A241C] transition-colors">Register</a>
        </div>
      @endauth
    </div>

  </div>
</nav>

<section class="max-w-[1600px] mx-auto px-8 pt-10">
  
  <div class="flex justify-between items-start">

    <div class="flex flex-col">
      <p class="text-sm text-[#8A7B6E] mb-4">
        Archives / Special Collections / The Reading Room
      </p>

       <h1 class="title-font text-6xl font-bold mb-2 text-[#2F1C17]">
        {{ $title ?? "The Scholar's Catalog" }}
      </h1>

      <p class="text-[#5C5148] text-lg">
        {{ $books->total() }} digital manuscripts and leather-bound volumes available.
      </p>
    </div>

    <form action="{{ url()->current() }}" method="GET" class="flex flex-col items-end gap-4">
      
      <div class="relative w-[420px]">
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
          class="w-full bg-transparent border border-[#BDAF9C] rounded-lg py-3 pl-12 pr-12 outline-none focus:border-[#2F1C17] transition-all"
        >

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </a>
        @endif
      </div>

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

<section class="max-w-[1600px] mx-auto px-8 py-10">
  @if($books->isEmpty())
    <div class="text-center py-20">
      <p class="text-xl text-[#8A7B6E]">No manuscripts found matching your criteria.</p>
    </div>
  @else
    <div class="grid grid-cols-5 gap-8">
      @foreach($books as $book)
        <div class="book-card flex flex-col justify-between">
          
          <a href="{{ route('buku.user.show', $book->id) }}" class="block overflow-hidden rounded-lg custom-shadow">
            <img
              src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?auto=format&fit=crop&q=80&w=400' }}"
              alt="{{ $book->judul }}"
              class="w-full h-[470px] object-cover hover:scale-103 transition-transform duration-300"
            >
          </a>

          <div class="flex flex-col mt-5">
            
            <h2 class="title-font text-3xl font-semibold line-clamp-2 hover:underline text-[#2F1C17] h-[72px] flex items-center" title="{{ $book->judul }}">
              <a href="{{ route('buku.user.show', $book->id) }}">{{ $book->judul }}</a>
            </h2>

            <p class="text-[#6B5B50] mt-1 font-medium truncate">
              By {{ $book->penulis }}
            </p>

            <div class="flex items-center justify-between text-xs text-[#8A7B6E] mt-2 border-t border-[#D8D2C0]/50 pt-2">
              <span>ISBN: {{ $book->isbn }}</span>
              <span class="px-2 py-0.5 bg-green-100 text-green-800 rounded font-semibold uppercase text-[10px]">
                {{ $book->status }}
              </span>
            </div>

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

        </div>
      @endforeach
    </div>
  @endif
</section>

<section class="pb-20">
  <div class="flex justify-center">
    {{ $books->links() }}
  </div>
</section>

<footer class="bg-[#3A1F19] text-[#C5AFA3] pt-16 pb-12 border-t border-[#4A241C]">
  <div class="max-w-[1600px] mx-auto px-8">
    
      <div class="flex flex-col gap-4">
        <h3 class="title-font text-3xl font-bold text-[#E6C8B8] tracking-wide">
          Lexicon Librium
        </h3>
        <p class="text-sm opacity-80 leading-relaxed">
          An academic digital library platform providing thousands of rare manuscripts, scholarly journals, and modern literary collections to support academic research, intellectual growth, and student literacy.
        </p>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="font-semibold text-xs text-[#E6C8B8] tracking-widest uppercase">
          Quick Links
        </h4>
        <ul class="space-y-2.5 text-sm opacity-80">
          <li>
            <a href="{{ url('/') }}" class="hover:text-[#E6C8B8] transition-colors flex items-center gap-2">
              <span>›</span> Book Catalog
            </a>
          </li>
          <li>
            <a href="#" class="hover:text-[#E6C8B8] transition-colors flex items-center gap-2">
              <span>›</span> Library Categories
            </a>
          </li>
          <li>
            <a href="#" class="hover:text-[#E6C8B8] transition-colors flex items-center gap-2">
              <span>›</span> Reading Room Regulations
            </a>
          </li>
          <li>
            <a href="#" class="hover:text-[#E6C8B8] transition-colors flex items-center gap-2">
              <span>›</span> Frequently Asked Questions (FAQs)
            </a>
          </li>
        </ul>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="font-semibold text-xs text-[#E6C8B8] tracking-widest uppercase">
          Operational Hours
        </h4>
        <ul class="space-y-2.5 text-sm opacity-80">
          <li class="flex justify-between border-b border-[#4A241C] pb-1.5">
            <span>Monday - Friday:</span>
            <span class="font-medium text-[#E6C8B8]">08:00 AM - 06:00 PM</span>
          </li>
          <li class="flex justify-between border-b border-[#4A241C] pb-1.5">
            <span>Saturday:</span>
            <span class="font-medium text-[#E6C8B8]">09:00 AM - 03:00 PM</span>
          </li>
          <li class="flex justify-between">
            <span>Sunday & Holidays:</span>
            <span class="text-red-400 font-medium">Closed</span>
          </li>
          <li class="text-[11px] italic text-[#C9B0A2] mt-1">
            *Our digital library services (E-Books) remain accessible 24/7.
          </li>
        </ul>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="font-semibold text-xs text-[#E6C8B8] tracking-widest uppercase">
          Library Contact
        </h4>
        <ul class="space-y-3.5 text-sm opacity-80">
          <li class="flex items-start gap-3">
            <span class="text-[#E6C8B8]">📍</span>
            <span>Central Library Building, 2nd-3rd Floor. 10th University Street.</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="text-[#E6C8B8]">✉️</span>
            <a href="mailto:library@lexicon.ac.id" class="hover:underline">library@lexicon.ac.id</a>
          </li>
          <li class="flex items-center gap-3">
            <span class="text-[#E6C8B8]">📞</span>
            <span>+62 (21) 1234-5678</span>
          </li>
        </ul>
      </div>

    </div>

    <div class="border-t border-[#4A241C] mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-xs opacity-60">
      <p>
        © {{ date('Y') }} LEXICON LIBRIUM. ALL RIGHTS RESERVED.
      </p>
      <div class="flex gap-6 mt-4 md:mt-0">
        <a href="#" class="hover:text-[#E6C8B8] transition-colors">Terms of Service</a>
        <a href="#" class="hover:text-[#E6C8B8] transition-colors">Privacy Policy</a>
      </div>
    </div>

  </div>
</footer>

</body>
</html>
