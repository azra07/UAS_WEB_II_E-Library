<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog Holdings - Lexicon Librum</title>
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
                <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Overview
                </a>
                <a href="/admin/catalog" class="flex items-center gap-3 px-4 py-3 bg-[#4A3B32] text-[#F6F4E8] rounded-md text-sm font-medium shadow-sm">
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
        

        <div class="p-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Catalog Holdings</h2>
                    <p class="text-sm text-[#7A6A5E]">Browse and manage the library's physical and digital collection.</p>
                </div>
                <a href="{{ route('buku.create') }}" class="bg-[#4A3B32] text-[#F6F4E8] px-5 py-2.5 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition whitespace-nowrap">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Add New Book
                </a>
            </div>

            <form action="{{ route('buku.index') }}" method="GET" class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 mb-8 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Search Title/ISBN</label>
                        <div class="relative">
                            <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." onchange="this.form.submit()" class="w-full pl-9 pr-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32]">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Category</label>
                        <select name="category" onchange="this.form.submit()" class="w-full px-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32] bg-white appearance-none">
                            <option value="All">All Categories</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Availability</label>
                        <select name="status" onchange="this.form.submit()" class="w-full px-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32] bg-white appearance-none">
                            <option value="All">Any Status</option>
                            <option value="Available" {{ request('status') == 'Available' ? 'selected' : '' }}>Available</option>
                            <option value="On Loan" {{ request('status') == 'On Loan' ? 'selected' : '' }}>On Loan</option>
                            <option value="Reserved" {{ request('status') == 'Reserved' ? 'selected' : '' }}>Reserved</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Language</label>
                        <select name="language" onchange="this.form.submit()" class="w-full px-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32] bg-white appearance-none">
                            <option value="All">All Languages</option>
                            <option value="English" {{ request('language') == 'English' ? 'selected' : '' }}>English</option>
                            <option value="Indonesian" {{ request('language') == 'Indonesian' ? 'selected' : '' }}>Indonesian</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-[#E8E4D5]">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="text-xs text-[#7A6A5E]">Active Filters:</span>
                        
                        @if(request('search'))
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#EAE6D7] text-[#4A3B32] text-xs font-medium">Search: {{ request('search') }}</span>
                        @endif
                        
                        @if(request('category') && request('category') !== 'All')
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#EAE6D7] text-[#4A3B32] text-xs font-medium">Category Filtered</span>
                        @endif

                        @if(request('status') && request('status') !== 'All')
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#EAE6D7] text-[#4A3B32] text-xs font-medium">{{ request('status') }}</span>
                        @endif

                        @if(request('language') && request('language') !== 'All')
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#EAE6D7] text-[#4A3B32] text-xs font-medium">{{ request('language') }}</span>
                        @endif

                        @if(!request('search') && (!request('category') || request('category') == 'All') && (!request('status') || request('status') == 'All') && (!request('language') || request('language') == 'All'))
                            <span class="text-xs text-[#7A6A5E] italic">None</span>
                        @endif
                    </div>
                    
                    @if(request()->hasAny(['search', 'category', 'status', 'language']))
                        <a href="{{ route('buku.index') }}" class="text-[11px] font-bold uppercase tracking-wider text-[#7A6A5E] hover:text-[#4A3B32]">Clear All</a>
                    @endif
                </div>
            </form>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @forelse ($books as $book)
                    <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg overflow-hidden shadow-sm flex flex-col">
                        <div class="h-64 bg-[#EAE6D7] relative p-4 flex items-center justify-center">
                            
                            @php
                                $statusColors = [
                                    'Available' => 'bg-[#DDF0D6] text-[#3B6A2E]',
                                    'On Loan'   => 'bg-[#FADCDC] text-[#A53A3A]',
                                    'Reserved'  => 'bg-[#EAE6D7] text-[#5A4A42]'
                                ];
                                $badgeColor = $statusColors[$book->status] ?? $statusColors['Available'];
                            @endphp
                            <span class="absolute top-3 right-3 {{ $badgeColor }} text-[10px] px-2 py-0.5 rounded-full font-bold uppercase tracking-wide z-10 shadow-sm">
                                {{ $book->status }}
                            </span>
                            
                            <div class="w-32 h-48 bg-[#2A3A32] rounded shadow-lg border-l-4 border-[#1E2A24] flex items-center justify-center text-center text-white font-serif overflow-hidden relative">
                                @if($book->cover_image)
                                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->judul }}" class="w-full h-full object-cover">
                                @else
                                    <div class="p-2">{{ substr($book->judul, 0, 3) }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="p-5 flex-1 flex flex-col">
                            <p class="text-[10px] text-[#7A6A5E] uppercase tracking-widest font-semibold mb-1">
                                {{ $book->category->nama_kategori ?? 'Uncategorized' }}
                            </p>
                            <h3 class="font-serif text-xl font-bold leading-tight mb-1">{{ $book->judul }}</h3>
                            <p class="text-sm text-[#7A6A5E] mb-4">{{ $book->penulis }}</p>
                            
                            <div class="mt-auto pt-4 border-t border-[#E8E4D5] flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] text-[#7A6A5E] uppercase tracking-wider">ISBN:</p>
                                    <p class="text-xs font-bold font-mono">{{ $book->isbn }}</p>
                                </div>
                                
                                <div class="flex gap-2 text-[#7A6A5E]">
                                    <a href="{{ route('buku.show', $book->id) }}" class="hover:text-[#4A3B32]" title="View Details">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </a>
                                    
                                    <a href="{{ route('buku.edit', $book->id) }}" class="hover:text-[#4A3B32]" title="Edit Book">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>

                                    <form action="{{ route('buku.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book? This cannot be undone.');" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="hover:text-[#A53A3A] transition" title="Delete Book">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 py-12 text-center text-[#7A6A5E]">
                        <p>No books currently in the catalog. Time to add some!</p>
                    </div>
                @endforelse
            </div>               
 
            <div class="flex justify-center mb-8">
                <button class="bg-transparent border border-[#E8E4D5] text-[#5A4A42] px-6 py-2.5 rounded text-xs font-bold uppercase tracking-widest hover:bg-[#EAE6D7] transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    Load More Titles
                </button>
            </div>

        </div>
    </main>

</body>
</html>
