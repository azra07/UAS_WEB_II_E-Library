<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->judul }} - Lexicon Librum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F6F4E8] text-[#3A2A22] h-screen flex overflow-hidden">

<aside class="w-64 bg-[#F6F4E8] border-r border-[#E8E4D5] flex flex-col justify-between hidden md:flex shrink-0">
        <div>
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 bg-[#4A3B32] rounded-md flex items-center justify-center text-white font-serif font-bold text-xl">L</div>
                <div>
                    <h1 class="font-serif text-xl font-bold leading-tight">Admin<br>Portal</h1>
                    <p class="text-[10px] tracking-widest text-[#7A6A5E] uppercase mt-1">Central Library System</p>
                </div>
            </div>

            <nav class="px-4 space-y-1">
                <a href="{{ url('admin/dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Overview
                </a>
                <a href="{{ route('buku.index') }}" class="flex items-center gap-3 px-4 py-3 bg-[#4A3B32] text-[#F6F4E8] rounded-md text-sm font-medium shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Catalog
                </a>
                <a href="{{ url('admin/members') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Members
                </a>
                 <a href="{{ url('admin/transactions') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                 Loans & Transactions
                </a>               
            </nav>
        </div>

        <div class="p-6 border-t border-[#E8E4D5] space-y-2">
            <!-- Secure Laravel Logout -->
            <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                @csrf
                <button type="submit" class="flex items-center gap-3 text-sm text-[#7A6A5E] hover:text-[#3A2A22] transition w-full text-left bg-transparent border-none cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <header class="flex items-center justify-between px-8 py-6 border-b border-[#E8E4D5] bg-[#F6F4E8]">
            <a href="{{ route('buku.index') }}" class="text-[#7A6A5E] hover:text-[#3A2A22] flex items-center gap-2 text-sm font-medium transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Catalog
            </a>
        </header>

        <div class="p-8 max-w-5xl mx-auto w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                
                <div class="space-y-6">
                    <div class="w-full aspect-[2/3] bg-[#EAE6D7] rounded-lg shadow-lg border-l-8 border-[#4A3B32] overflow-hidden flex items-center justify-center">
                        @if($book->cover_image)
                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->judul }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-6xl text-[#7A6A5E] font-serif">?</span>
                        @endif
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('buku.edit', $book->id) }}" class="flex-1 text-center bg-[#4A3B32] text-[#F6F4E8] py-3 rounded text-xs font-bold uppercase tracking-wider hover:bg-[#342923] transition">Edit Details</a>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div>
                        <span class="text-[10px] text-[#7A6A5E] uppercase tracking-widest font-bold">{{ $book->category->nama_kategori ?? 'Uncategorized' }}</span>
                        <h2 class="font-serif text-5xl font-bold tracking-tight text-[#3A2A22] mt-2">{{ $book->judul }}</h2>
                        <p class="text-xl text-[#5A4A42] mt-2 italic font-serif">by {{ $book->penulis }}</p>
                    </div>

                    <div class="grid grid-cols-2 gap-8 border-t border-b border-[#E8E4D5] py-6">
                        <div>
                            <p class="text-[10px] text-[#7A6A5E] uppercase tracking-wider font-bold">ISBN</p>
                            <p class="font-mono text-sm mt-1">{{ $book->isbn }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-[#7A6A5E] uppercase tracking-wider font-bold">Language</p>
                            <p class="text-sm mt-1">{{ $book->language }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-[#7A6A5E] uppercase tracking-wider font-bold">Publisher</p>
                            <p class="text-sm mt-1">{{ $book->publisher->nama_penerbit ?? 'Unknown' }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-[#7A6A5E] uppercase tracking-wider font-bold">Current Status</p>
                            <span class="inline-block mt-1 px-3 py-1 text-xs font-bold rounded-full bg-[#E8E4D5] text-[#3A2A22]">
                                {{ $book->status }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
