<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book - Lexicon Librum</title>
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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
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
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <header class="flex items-center justify-between px-8 py-6 border-b border-[#E8E4D5] bg-[#F6F4E8]">
            <div class="flex items-center gap-4">
                <a href="{{ route('buku.index') }}" class="text-[#7A6A5E] hover:text-[#3A2A22] flex items-center gap-2 text-sm font-medium transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Catalog
                </a>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-[#4A3B32] overflow-hidden border-2 border-[#E8E4D5]">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=4A3B32&color=fff" alt="Profile" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        <div class="p-8 max-w-4xl mx-auto w-full">
            <div class="mb-8">
                <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Edit Book Details</h2>
                <p class="text-sm text-[#7A6A5E]">Update the information for <span class="font-bold italic">{{ $book->judul }}</span>.</p>
            </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-8 shadow-sm">
                <form action="{{ route('buku.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT') <div class="space-y-6">
                        <div>
                            <label for="judul" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Book Title</label>
                            <input type="text" name="judul" id="judul" value="{{ old('judul', $book->judul) }}" required
                                class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white">
                            @error('judul') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="penulis" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Author (Penulis)</label>
                                <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $book->penulis) }}" required
                                    class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white">
                                @error('penulis') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>
                            
                            <div>
                                <label for="isbn" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">ISBN</label>
                                <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $book->isbn) }}" required
                                    class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white font-mono">
                                @error('isbn') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="language" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Language</label>
                                <select name="language" id="language" required class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white appearance-none">
                                    <option value="English" {{ old('language', $book->language) == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Indonesian" {{ old('language', $book->language) == 'Indonesian' ? 'selected' : '' }}>Indonesian</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-[#E8E4D5]">
                            <div>
                                <label for="category_name" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Category</label>
                                <p class="text-[9px] text-[#7A6A5E] mb-1.5">Select existing or type a new one.</p>
                                
                                <input list="category_list" name="category_name" id="category_name" value="{{ old('category_name', $book->category->nama_kategori ?? '') }}" required autocomplete="off"
                                    class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white">
                                
                                <datalist id="category_list">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->nama_kategori }}">
                                    @endforeach
                                </datalist>
                                @error('category_name') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="publisher_id" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Publisher</label>
                                <p class="text-[9px] text-transparent mb-1.5 hidden md:block">Spacer</p>
                                <select name="publisher_id" id="publisher_id" required
                                    class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white appearance-none">
                                    @foreach($publishers as $publisher)
                                        <option value="{{ $publisher->id }}" {{ old('publisher_id', $book->publisher_id) == $publisher->id ? 'selected' : '' }}>
                                            {{ $publisher->nama_penerbit }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-[#E8E4D5]">
                            <label for="cover_image" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Replace Cover Image</label>
                            
                            <div class="flex items-center gap-6">
                                @if($book->cover_image)
                                    <div class="w-16 h-24 shrink-0 bg-[#EAE6D7] rounded border border-[#E8E4D5] overflow-hidden">
                                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Current Cover" class="w-full h-full object-cover">
                                    </div>
                                @endif
                                <div class="flex-1">
                                    <input type="file" name="cover_image" id="cover_image" accept="image/*"
                                        class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm bg-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-[#EAE6D7] file:text-[#4A3B32] hover:file:bg-[#D5D0C5]">
                                    <p class="text-[10px] text-[#7A6A5E] mt-1.5">Leave blank to keep the current image.</p>
                                    @error('cover_image') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-10 flex items-center justify-end gap-4 border-t border-[#E8E4D5] pt-6">
                        <a href="{{ route('buku.index') }}" class="text-sm font-medium text-[#7A6A5E] hover:text-[#3A2A22] transition">
                            Cancel
                        </a>
                        <button type="submit" class="bg-[#4A3B32] text-[#F6F4E8] px-6 py-3 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            Update Book
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>