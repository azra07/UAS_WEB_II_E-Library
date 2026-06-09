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
                    Dashboard
                </a>
                <a href="/admin/catalog" class="flex items-center gap-3 px-4 py-3 bg-[#4A3B32] text-[#F6F4E8] rounded-md text-sm font-medium shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Catalog
                </a>
                <a href="{{ url('admin/members') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Members
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-[#E8E4D5] space-y-2">
            <a href="#" class="flex items-center gap-3 text-sm text-[#7A6A5E] hover:text-[#3A2A22] transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Help Center
            </a>
            <a href="#" class="flex items-center gap-3 text-sm text-[#7A6A5E] hover:text-[#3A2A22] transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        
        <header class="flex items-center justify-between px-8 py-6 border-b border-[#E8E4D5] bg-[#F6F4E8]">
            <h2 class="font-serif text-xl font-bold">Lexicon Librum</h2>
            <div class="flex items-center gap-6">
                <div class="relative hidden md:block">
                    <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Quick search..." class="pl-9 pr-4 py-2 border border-[#E8E4D5] bg-[#FCFBFA] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] w-64">
                </div>
                <div class="flex items-center gap-4">
                    <button class="text-[#7A6A5E] hover:text-[#3A2A22]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></button>
                    <button class="text-[#7A6A5E] hover:text-[#3A2A22]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></button>
                    <div class="w-8 h-8 rounded-full bg-[#4A3B32] overflow-hidden border-2 border-[#E8E4D5]">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=4A3B32&color=fff" alt="Profile" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </header>

        <div class="p-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Catalog Holdings</h2>
                    <p class="text-sm text-[#7A6A5E]">Browse and manage the library's physical and digital collection.</p>
                </div>
                <button class="bg-[#4A3B32] text-[#F6F4E8] px-5 py-2.5 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition whitespace-nowrap">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Add New Book
                </button>
            </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 mb-8 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Search Title/ISBN</label>
                        <div class="relative">
                            <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <input type="text" placeholder="Search..." class="w-full pl-9 pr-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32]">
                        </div>
                    </div>
                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Category</label>
                        <select class="w-full px-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32] bg-white appearance-none">
                            <option>All Categories</option>
                            <option>Philosophy</option>
                            <option>History</option>
                            <option>Sciences</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Availability</label>
                        <select class="w-full px-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32] bg-white appearance-none">
                            <option>Any Status</option>
                            <option>Available</option>
                            <option>On Loan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1.5">Language</label>
                        <select class="w-full px-3 py-2 border border-[#E8E4D5] rounded text-sm focus:outline-none focus:border-[#4A3B32] bg-white appearance-none">
                            <option>All Languages</option>
                            <option>English</option>
                            <option>Indonesian</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-[#E8E4D5]">
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-[#7A6A5E]">Active Filters:</span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#EAE6D7] text-[#4A3B32] text-xs font-medium">Philosophy <button class="hover:text-black">×</button></span>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#EAE6D7] text-[#4A3B32] text-xs font-medium">Available <button class="hover:text-black">×</button></span>
                    </div>
                    <button class="text-[11px] font-bold uppercase tracking-wider text-[#7A6A5E] hover:text-[#4A3B32]">Clear All</button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="h-64 bg-[#EAE6D7] relative p-4 flex items-center justify-center">
                        <span class="absolute top-3 right-3 bg-[#DDF0D6] text-[#3B6A2E] text-[10px] px-2 py-0.5 rounded-full font-bold uppercase tracking-wide z-10 shadow-sm">Available</span>
                        <div class="w-32 h-48 bg-[#2A3A32] rounded shadow-lg border-l-4 border-[#1E2A24] flex items-center justify-center p-2 text-center">
                           <div class="w-16 h-16 border-2 border-[#D4AF37] opacity-50 transform rotate-45"></div>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <p class="text-[10px] text-[#7A6A5E] uppercase tracking-widest font-semibold mb-1">Philosophy</p>
                        <h3 class="font-serif text-xl font-bold leading-tight mb-1">Meditations</h3>
                        <p class="text-sm text-[#7A6A5E] mb-4">Marcus Aurelius</p>
                        
                        <div class="mt-auto pt-4 border-t border-[#E8E4D5] flex items-center justify-between">
                            <div>
                                <p class="text-[9px] text-[#7A6A5E] uppercase tracking-wider">Loc:</p>
                                <p class="text-xs font-bold font-mono">104.B2</p>
                            </div>
                            <div class="flex gap-2 text-[#7A6A5E]">
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="h-64 bg-[#EAE6D7] relative p-4 flex items-center justify-center">
                        <span class="absolute top-3 right-3 bg-[#FADCDC] text-[#A53A3A] text-[10px] px-2 py-0.5 rounded-full font-bold uppercase tracking-wide z-10 shadow-sm">On Loan</span>
                        <div class="w-32 h-48 bg-[#6D2121] rounded shadow-lg border-l-4 border-[#4A1616] flex items-center justify-center p-2 text-center text-white font-serif text-xs">
                           Vol. I
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <p class="text-[10px] text-[#7A6A5E] uppercase tracking-widest font-semibold mb-1">History</p>
                        <h3 class="font-serif text-xl font-bold leading-tight mb-1">The Decline and Fall of the Roman Empire</h3>
                        <p class="text-sm text-[#7A6A5E] mb-4">Edward Gibbon</p>
                        
                        <div class="mt-auto pt-4 border-t border-[#E8E4D5] flex items-center justify-between">
                            <div>
                                <p class="text-[9px] text-[#7A6A5E] uppercase tracking-wider">Due:</p>
                                <p class="text-xs font-bold font-mono">Oct 12</p>
                            </div>
                            <div class="flex gap-2 text-[#7A6A5E]">
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="h-64 bg-[#EAE6D7] relative p-4 flex items-center justify-center">
                        <span class="absolute top-3 right-3 bg-[#3A2A22] text-[#F6F4E8] text-[10px] px-2 py-0.5 rounded-full font-bold uppercase tracking-wide z-10 shadow-sm">Reserved</span>
                        <div class="w-32 h-48 bg-[#D4C3A3] rounded shadow-lg border-l-4 border-[#A89A7E] flex items-center justify-center p-2 text-center text-black font-serif text-xs opacity-90">
                           <div class="border border-black w-full h-full p-1">MATH</div>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <p class="text-[10px] text-[#7A6A5E] uppercase tracking-widest font-semibold mb-1">Sciences</p>
                        <h3 class="font-serif text-xl font-bold leading-tight mb-1">Principia Mathematica</h3>
                        <p class="text-sm text-[#7A6A5E] mb-4">Isaac Newton</p>
                        
                        <div class="mt-auto pt-4 border-t border-[#E8E4D5] flex items-center justify-between">
                            <div>
                                <p class="text-[9px] text-[#7A6A5E] uppercase tracking-wider">Hold:</p>
                                <p class="text-xs font-bold font-mono">2 Days</p>
                            </div>
                            <div class="flex gap-2 text-[#7A6A5E]">
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                                <button class="text-[#3B6A2E]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="h-64 bg-[#EAE6D7] relative p-4 flex items-center justify-center">
                        <span class="absolute top-3 right-3 bg-[#DDF0D6] text-[#3B6A2E] text-[10px] px-2 py-0.5 rounded-full font-bold uppercase tracking-wide z-10 shadow-sm">Available</span>
                        <div class="w-32 h-48 bg-[#1A365D] rounded shadow-lg border-l-4 border-[#0F1E36] flex flex-col justify-between p-2 text-center text-[#D4AF37] font-serif">
                           <div class="border-t border-b border-[#D4AF37] py-1 mt-4 text-[10px]">MOBY<br>DICK</div>
                           <div class="text-[8px] mb-2">MELVILLE</div>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <p class="text-[10px] text-[#7A6A5E] uppercase tracking-widest font-semibold mb-1">Classic Fiction</p>
                        <h3 class="font-serif text-xl font-bold leading-tight mb-1">Moby Dick</h3>
                        <p class="text-sm text-[#7A6A5E] mb-4">Herman Melville</p>
                        
                        <div class="mt-auto pt-4 border-t border-[#E8E4D5] flex items-center justify-between">
                            <div>
                                <p class="text-[9px] text-[#7A6A5E] uppercase tracking-wider">Loc:</p>
                                <p class="text-xs font-bold font-mono">813.M4</p>
                            </div>
                            <div class="flex gap-2 text-[#7A6A5E]">
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                                <button class="hover:text-[#4A3B32]"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

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