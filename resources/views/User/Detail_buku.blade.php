<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->judul }} - Lexicon Librium</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #F5F2DE;
            font-family: 'Inter', sans-serif;
            color: #2F1C17;
        }

        .font-judul {
            font-family: 'Cormorant Garamond', serif;
        }

        .card-shadow {
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
    </style>
</head>

<body>

    <!-- NAVBAR (Disamakan Persis dengan Halaman Home) -->
    <nav class="border-b border-[#D8D2C0] bg-[#FAF8F0] sticky top-0 z-50 shadow-sm">
      <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

        <!-- Sisi Kiri: Logo -->
        <div class="flex-1 flex justify-start">
          <h1 class="font-judul text-5xl font-bold">
            <a href="{{ url('/') }}" class="hover:opacity-90 transition-opacity text-[#2F1C17]">Lexicon Librium</a>
          </h1>
        </div>

        <!-- Sisi Tengah: Menu Navigasi -->
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

        <!-- Sisi Kanan: Profil User / Tombol Login -->
        <div class="flex-1 flex justify-end items-center">
          @auth
            <!-- Lingkaran Inisial Nama User Dinamis dari Database -->
            <div class="relative group">
              <button class="w-11 h-11 bg-[#2F1C17] text-[#F5F2DE] rounded-full flex items-center justify-center font-bold text-lg shadow-md hover:bg-[#4A241C] transition-all focus:outline-none">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
              </button>
              
              <!-- Dropdown Menu saat Hover Profile -->
              <div class="absolute right-0 mt-2 w-48 bg-[#FAF8F0] border border-[#BDAF9C] rounded-lg shadow-lg py-2 hidden group-hover:block z-50">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2.5 text-sm text-[#2F1C17] hover:bg-[#D8D2C0]/30 transition-colors font-medium border-b border-[#D8D2C0]">
                  Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2.5 text-sm text-red-700 hover:bg-[#D8D2C0]/20 transition-colors">
                    Logout
                  </button>
                </form>
              </div>
            </div>
          @else
            <!-- Jika Belum Login -->
            <div class="flex items-center gap-4">
              <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-[#2F1C17] transition-colors">Login</a>
              <a href="{{ route('register') }}" class="bg-[#2F1C17] text-[#F5F2DE] px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#4A241C] transition-colors">Register</a>
            </div>
          @endauth
        </div>

      </div>
    </nav>

    <!-- CONTENT -->
    <section class="max-w-[1600px] mx-auto px-8 py-10">

        <!-- BREADCRUMB (Kategori & Judul Dinamis dari DB) -->
        <p class="uppercase tracking-[4px] text-xs text-[#7A6D61] mb-8">
            Archives > {{ $book->category->nama_kategori ?? 'General' }} > {{ $book->judul }}
        </p>

        <!-- GRID -->
        <div class="grid grid-cols-12 gap-10">

            <!-- BAGIAN KIRI -->
            <div class="col-span-4">

                <!-- GAMBAR BUKU DINAMIS -->
                <div class="overflow-hidden rounded-lg card-shadow">
                    <img
                        src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?auto=format&fit=crop&q=80&w=400' }}"
                        alt="{{ $book->judul }}"
                        class="w-full h-[620px] object-cover"
                    >
                </div>

                <!-- TOMBOL PINJAM & FAVORIT -->
                <div class="mt-6 space-y-4">

                    <!-- 1. KONDISI TOMBOL PINJAM BUKU (BERDASARKAN AKUN USER AKTIF) -->
                    @php
                        // Cek apakah user yang sedang login saat ini sudah meminjam buku ini dan belum mengembalikannya
                        $isBorrowedByUser = \App\Models\DetailPeminjaman::where('book_id', $book->id)
                            ->whereHas('borrow', function($query) {
                                $query->where('user_id', Auth::id())
                                      ->whereNull('tanggal_kembali');
                            })->exists();
                    @endphp

                    @if($isBorrowedByUser)
                        <!-- Tampilan jika USER INI sudah meminjam buku ini (Warna abu-abu & disabled hanya untuk akun ini) -->
                        <button disabled 
                                class="w-full bg-[#DDD7C0] text-[#2F1C17]/60 py-5 rounded-md text-2xl font-semibold cursor-not-allowed shadow-inner border border-[#C5BDAA]">
                            Borrowed
                        </button>
                    @else
                        <!-- Tampilan jika USER INI belum meminjam buku ini (Tombol cokelat aktif siap dipinjam) -->
                        <form action="{{ route('buku.borrow', $book->id) }}" method="POST">
                            @csrf
                            <button type="submit" 
                                    class="w-full bg-[#4B2A24] hover:bg-[#311813] transition-all text-white py-5 rounded-md text-2xl font-semibold shadow-md active:scale-95 duration-200">
                                Borrow Book
                            </button>
                        </form>
                    @endif

                    <!-- 2. KONDISI TOMBOL DAFTAR BACAAN (READING LIST) -->
                    <form action="{{ route('buku.reading_list', $book->id) }}" method="POST">
                        @csrf
                        @if(session('reading_list') && in_array($book->id, session('reading_list')))
                            <button type="submit" 
                                    class="w-full bg-[#EADBCB] border border-[#B7A693] py-5 rounded-md hover:bg-[#D8C7B7] transition text-lg font-semibold text-[#2F1C17] shadow-sm">
                                ✓ Added to Reading List
                            </button>
                        @else
                            <button type="submit" 
                                    class="w-full border border-[#B7A693] py-5 rounded-md hover:bg-[#EEE6D6] transition text-lg font-medium text-[#2F1C17]">
                                Add to Reading List
                            </button>
                        @endif
                    </form>

                </div>

                <!-- DETAIL / SPESIFIKASI BUKU (Dinamis dari DB) -->
                <div class="mt-8 border border-[#D8D2C0] rounded-lg p-6 bg-[#FAF8F0]/50">
                    <h3 class="uppercase tracking-[3px] text-xs text-[#7A6D61] font-semibold mb-5">
                        Book Specifications
                    </h3>

                    <div class="space-y-4 text-[17px]">
                        <div class="flex justify-between border-b border-[#D8D2C0]/50 pb-3">
                            <span class="text-gray-600">Publisher</span>
                            <span class="font-medium">{{ $book->publisher->nama_penerbit ?? 'Unknown Publisher' }}</span>
                        </div>

                        <div class="flex justify-between border-b border-[#D8D2C0]/50 pb-3">
                            <span class="text-gray-600">Category</span>
                            <span class="font-medium">{{ $book->category->nama_kategori ?? 'Uncategorized' }}</span>
                        </div>

                        <div class="flex justify-between border-b border-[#D8D2C0]/50 pb-3">
                            <span class="text-gray-600">Language</span>
                            <span class="font-medium">{{ $book->language }}</span>
                        </div>

                        <div class="flex justify-between border-b border-[#D8D2C0]/50 pb-3">
                            <span class="text-gray-600">Status</span>
                            <span class="font-semibold text-green-700 uppercase text-sm">{{ $book->status }}</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- BAGIAN KANAN -->
            <div class="col-span-8">

                <!-- BADGE KATEGORI -->
                <div class="inline-block bg-[#EADBCB] px-4 py-2 rounded uppercase tracking-[3px] text-xs font-semibold text-[#2F1C17]">
                    {{ $book->category->nama_kategori ?? 'General Holding' }}
                </div>

                <!-- JUDUL DINAMIS -->
                <h1 class="mt-5 text-6xl font-bold leading-tight font-judul text-[#2F1C17]">
                    {{ $book->judul }}
                </h1>

                <!-- PENULIS DINAMIS -->
                <p class="mt-4 text-4xl italic text-[#7A675A] font-judul">
                    By {{ $book->penulis }}
                </p>

                <!-- RATING & STATUS -->
                <div class="flex items-center gap-6 border-y border-[#D8D2C0] py-6 mt-8">
                    @php
                        $ratingVal = round($book->ratings->avg('rating') ?? 5);
                    @endphp
                    <div class="flex items-center gap-3 text-xl">
                        <span class="text-yellow-600">{{ str_repeat('★', $ratingVal) }}{{ str_repeat('☆', 5 - $ratingVal) }}</span>
                        <span class="font-semibold text-[#2F1C17]">{{ number_format($book->ratings->avg('rating') ?? 5, 1) }}</span>
                    </div>

                    <div class="text-[#D8D2C0]">|</div>

                    <div class="uppercase tracking-[2px] text-sm text-[#7A6D61]">
                        {{ $book->ratings->count() }} Reviews
                    </div>

                    <div class="text-[#D8D2C0]">|</div>

                    <div class="text-green-700 uppercase text-sm font-semibold">
                        {{ $book->status === 'Available' ? 'Available For Loan' : 'Borrowed' }}
                    </div>
                </div>

                <!-- DESKRIPSI (Dinamis Otomatis Menyesuaikan Judul & Penulis) -->
                <div class="mt-10">
                    <h2 class="text-5xl font-bold border-b-2 border-[#2F1C17] inline-block pb-2 font-judul">
                        Book Summary
                    </h2>

                    <div class="mt-8 text-[21px] leading-[44px] text-[#40342E] text-justify">
                        This exquisite manuscript titled <strong class="text-[#2F1C17]">{{ $book->judul }}</strong> is a masterful work written by <strong class="text-[#2F1C17]">{{ $book->penulis }}</strong>. It is cataloged under the <strong class="text-[#2F1C17]">{{ $book->category->nama_kategori ?? 'General' }}</strong> archives and printed in <strong class="text-[#2F1C17]">{{ $book->language }}</strong>. This volume stands as a remarkable contribution to its field, preserved carefully within the Lexicon Librium archives.
                    </div>
                </div>

                <!-- QUOTE ESTETIK -->
                <div class="mt-10 border-l-4 border-[#D8B8AA] pl-8 italic text-3xl text-[#7A5B4D] font-judul">
                    "A room without books is like a body without a soul." — Cicero
                </div>

                <!-- ULASAN PEMBACA -->
                <div class="mt-16">
                    <div class="flex justify-between items-center">
                        <h2 class="text-5xl font-bold font-judul text-[#2F1C17]">
                            Reader Reviews
                        </h2>
                        <button onclick="openReviewModal()" class="border border-[#B7A693] px-6 py-3 rounded-md hover:bg-[#EEE6D6] font-medium transition">
                            Write a Review
                        </button>
                    </div>

                    <!-- CARD REVIEW -->
                    <div class="mt-10 space-y-8">
                        @forelse($book->ratings as $rating)
                            <div class="bg-[#FAF8F0]/40 border border-[#D8D2C0] rounded-xl p-8 shadow-sm">
                                <div class="flex justify-between">
                                    <div class="flex gap-5">
                                        <div class="w-14 h-14 rounded-full bg-[#EADBCB] flex items-center justify-center font-bold text-lg text-[#2F1C17]">
                                            {{ strtoupper(substr($rating->user->name ?? 'A', 0, 1)) }}
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-xl text-[#2F1C17]">{{ $rating->user->name ?? 'Anonymous Reader' }}</h3>
                                            <p class="text-sm text-[#7A6D61]">{{ $rating->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="text-xl text-yellow-600">
                                        {{ str_repeat('★', $rating->rating) }}{{ str_repeat('☆', 5 - $rating->rating) }}
                                    </div>
                                </div>
                                
                                <!-- PERBAIKAN DI SINI: ubah $rating->review menjadi $rating->ulasan -->
                                <p class="mt-6 text-[18px] leading-9 text-[#40342E]">
                                    {{ $rating->ulasan ?? 'No review text provided.' }}
                                </p>
                                
                            </div>
                        @empty
                            <div class="bg-[#FAF8F0]/20 border border-dashed border-[#D8D2C0] rounded-xl p-8 text-center text-gray-500">
                                No reviews yet. Be the first to share your thoughts on this holding!
                            </div>
                        @endforelse
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER (Disamakan Persis dengan Halaman Home dalam Bahasa Inggris) -->
    <footer class="bg-[#3A1F19] text-[#C5AFA3] pt-16 pb-12 border-t border-[#4A241C]">
      <div class="max-w-[1600px] mx-auto px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-left">
          
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

    <!-- PEMANGGILAN GABUNGAN KOMPONEN RATING (TOAST & MODAL) -->
    @include('components.rating')

</body>
</html>
