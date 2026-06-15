<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxonomy of Thought - Lexicon Librium</title>

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

        .font-title {
            font-family: 'Cormorant Garamond', serif;
        }

        .custom-shadow {
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
    </style>
</head>

<body>

    <!-- NAVBAR (Disamakan Persis dengan Halaman Home - Kategori Aktif Bergaris Bawah) -->
    <nav class="border-b border-[#D8D2C0] bg-[#FAF8F0] sticky top-0 z-50 shadow-sm">
      <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

        <!-- Sisi Kiri: Logo -->
        <div class="flex-1 flex justify-start">
          <h1 class="font-title text-5xl font-bold">
            <a href="{{ url('/') }}" class="hover:opacity-90 transition-opacity text-[#2F1C17]">Lexicon Librium</a>
          </h1>
        </div>

        <!-- Sisi Tengah: Menu Navigasi (Categories Bergaris Bawah Aktif) -->
        <div class="flex items-center justify-center gap-16 text-[19px] font-semibold tracking-wider">
          <a href="{{ route('user.dashboard') }}" class="text-[#2F1C17]/80 hover:text-[#2F1C17] pb-1 border-b-2 border-transparent hover:border-[#2F1C17] transition-all">
            Catalog
          </a>
          <a href="{{ route('user.categories') }}" class="font-semibold border-b-2 border-[#2F1C17] pb-1 text-[#2F1C17]">
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

    <!-- HEADER (Taxonomy of Thought) -->
    <section class="max-w-[1600px] mx-auto px-8 pt-20 text-center">
        <p class="uppercase tracking-[4px] text-xs text-[#7A6D61] mb-4">
            Curated Knowledge
        </p>

        <h1 class="font-title text-7xl font-bold leading-tight text-[#2F1C17]">
            Taxonomy of Thought
        </h1>

        <p class="text-xl text-[#5C5148] max-w-2xl mx-auto mt-6 leading-relaxed">
            Journey through the structured realms of human inquiry. From the ethereal heights of philosophy to the empirical bedrock of science, discover our meticulously archived collections.
        </p>
    </section>

    <!-- DAFTAR KATEGORI / GENRE DINAMIS DARI DATABASE -->
    <section class="max-w-[1600px] mx-auto px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            @foreach($categories as $category)
                @php
                    // Logika mencocokkan nama kategori di DB dengan Icon Emoji yang sesuai secara otomatis
                    $icon = '📖'; 
                    $nameLower = strtolower($category->nama_kategori);
                    if (str_contains($nameLower, 'teknologi')) {
                        $icon = '💻';
                    } elseif (str_contains($nameLower, 'sain') || str_contains($nameLower, 'sains')) {
                        $icon = '🧪';
                    } elseif (str_contains($nameLower, 'sejarah')) {
                        $icon = '📜';
                    } elseif (str_contains($nameLower, 'fiksi')) {
                        $icon = '📚';
                    } elseif (str_contains($nameLower, 'agama')) {
                        $icon = '🕌';
                    }
                @endphp

                <!-- KARTU KATEGORI (Mengarah ke Home dengan Filter Kategori Terpilih) -->
                <a href="{{ route('user.dashboard', ['category' => $category->id]) }}" 
                   class="bg-[#FAF8F0]/40 border border-[#D8D2C0] rounded-lg p-8 flex flex-col justify-between hover:bg-[#EADBCB]/30 hover:border-[#2F1C17] transition-all group custom-shadow duration-300">
                    
                    <div class="flex items-center justify-between mb-8">
                        <span class="text-4xl filter grayscale group-hover:grayscale-0 transition-all duration-300">
                            {{ $icon }}
                        </span>
                        <span class="text-xs tracking-widest text-[#7A6D61] group-hover:text-[#2F1C17] font-semibold transition-colors uppercase">
                            View →
                        </span>
                    </div>

                    <div>
                        <h2 class="font-title text-3xl font-bold text-[#2F1C17] group-hover:text-[#4A241C] transition-colors">
                            {{ $category->nama_kategori }}
                        </h2>
                        <!-- Menghitung jumlah total buku di dalam kategori ini secara dinamis -->
                        <p class="text-xs text-[#7A6D61] tracking-wider uppercase mt-2 font-medium">
                            {{ $category->books()->count() }} Volumes
                        </p>
                    </div>

                </a>
            @endforeach

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

</body>
</html>
