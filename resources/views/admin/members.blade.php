<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Directory - Lexicon Librum</title>
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
                    Dashboard
                </a>
                <a href="{{ url('admin/catalog') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Catalog
                </a>
                <a href="{{ url('admin/members') }}" class="flex items-center gap-3 px-4 py-3 bg-[#4A3B32] text-[#F6F4E8] rounded-md text-sm font-medium shadow-sm">
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
            <div class="flex items-center gap-4">
                <button class="text-[#7A6A5E] hover:text-[#3A2A22]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></button>
                <button class="text-[#7A6A5E] hover:text-[#3A2A22]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></button>
                <div class="w-8 h-8 rounded-full bg-[#4A3B32] overflow-hidden border-2 border-[#E8E4D5]">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=4A3B32&color=fff" alt="Profile" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        <div class="p-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Member Directory</h2>
                    <p class="text-sm text-[#7A6A5E]">Manage library patrons, view loan histories, and update account statuses.</p>
                </div>
                <button class="bg-[#4A3B32] text-[#F6F4E8] px-5 py-2.5 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition whitespace-nowrap shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                    Add New Member
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1">Total Members</p>
                        <h3 class="font-serif text-3xl font-bold">4,821</h3>
                    </div>
                    <div class="bg-[#DDF0D6] text-[#3B6A2E] text-xs font-bold px-2 py-1 rounded-full flex items-center gap-1">
                        ↗ +12%
                    </div>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1">New This Month</p>
                        <h3 class="font-serif text-3xl font-bold">145</h3>
                    </div>
                    <div class="text-[#7A6A5E]">
                        <svg class="w-8 h-8 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                    </div>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-1">Active Today</p>
                        <h3 class="font-serif text-3xl font-bold">312</h3>
                    </div>
                    <div class="text-[#7A6A5E]">
                        <svg class="w-8 h-8 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                </div>
            </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg shadow-sm overflow-hidden mb-8">
                
                <div class="p-5 border-b border-[#E8E4D5] flex flex-col md:flex-row md:items-center justify-between gap-4 bg-[#F9F8F3]">
                    <div class="relative w-full md:w-96">
                        <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <input type="text" placeholder="Search by name, ID, or email..." class="w-full pl-9 pr-4 py-2 border border-[#E8E4D5] bg-white rounded-md text-sm focus:outline-none focus:ring-1 focus:ring-[#4A3B32]">
                    </div>
                    <div class="flex items-center gap-3">
                        <select class="px-4 py-2 border border-[#E8E4D5] bg-white rounded-md text-sm focus:outline-none text-[#5A4A42]">
                            <option>All Statuses</option>
                            <option>Active</option>
                            <option>Suspended</option>
                            <option>Expired</option>
                        </select>
                        <button class="p-2 border border-[#E8E4D5] bg-white rounded-md text-[#7A6A5E] hover:text-[#3A2A22] transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm whitespace-nowrap">
                        <thead class="bg-[#F2F0E6] text-[#7A6A5E] text-[10px] uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-4 font-semibold">Member Info</th>
                                <th class="px-6 py-4 font-semibold">Member ID</th>
                                <th class="px-6 py-4 font-semibold">Join Date</th>
                                <th class="px-6 py-4 font-semibold text-center">Loans</th>
                                <th class="px-6 py-4 font-semibold">Status</th>
                                <th class="px-6 py-4 font-semibold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E8E4D5]">
                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#EAD4C8] text-[#8C5D42] flex items-center justify-center font-serif font-bold text-lg relative">
                                            EV
                                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 border-2 border-white rounded-full"></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-[#3A2A22]">Eleanor Vance</p>
                                            <p class="text-[11px] text-[#7A6A5E]">e.vance@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42] font-mono text-xs">MEM-2023-0842</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Oct 12, 2023</td>
                                <td class="px-6 py-4 text-center font-bold text-[#3A2A22]">3</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#DDF0D6] text-[#3B6A2E]">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#3B6A2E]"></span> Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-[#7A6A5E] hover:text-[#4A3B32] transition font-medium text-[11px] uppercase tracking-wider">Manage</button>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#EAE6D7] text-[#5A4A42] flex items-center justify-center font-serif font-bold text-lg relative">
                                            JT
                                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-orange-500 border-2 border-white rounded-full"></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-[#3A2A22]">Julian Thorne</p>
                                            <p class="text-[11px] text-[#7A6A5E]">j.thorne@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42] font-mono text-xs">MEM-2021-1105</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Mar 04, 2021</td>
                                <td class="px-6 py-4 text-center font-bold text-[#A53A3A]">8</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#FCE8D5] text-[#A56A3A]">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#A56A3A]"></span> Suspended
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-[#7A6A5E] hover:text-[#4A3B32] transition font-medium text-[11px] uppercase tracking-wider">Manage</button>
                                </td>
                            </tr>

                            <tr class="hover:bg-[#FAF8F2] transition opacity-75">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#D5D0C5] text-[#7A6A5E] flex items-center justify-center font-serif font-bold text-lg relative">
                                            AP
                                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-gray-400 border-2 border-white rounded-full"></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-[#5A4A42]">Arthur Pendelton</p>
                                            <p class="text-[11px] text-[#7A6A5E]">arthur.p@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-[#7A6A5E] font-mono text-xs">MEM-2018-0021</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Jan 15, 2018</td>
                                <td class="px-6 py-4 text-center font-bold text-[#7A6A5E]">0</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#EAE6D7] text-[#7A6A5E]">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#7A6A5E]"></span> Expired
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-[#7A6A5E] hover:text-[#4A3B32] transition font-medium text-[11px] uppercase tracking-wider">Manage</button>
                                </td>
                            </tr>
                            
                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-[#EAD4C8] text-[#8C5D42] flex items-center justify-center font-serif font-bold text-lg relative">
                                            MR
                                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 border-2 border-white rounded-full"></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-[#3A2A22]">Maria Rossi</p>
                                            <p class="text-[11px] text-[#7A6A5E]">m.rossi@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42] font-mono text-xs">MEM-2024-0112</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Feb 28, 2024</td>
                                <td class="px-6 py-4 text-center font-bold text-[#3A2A22]">1</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#DDF0D6] text-[#3B6A2E]">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#3B6A2E]"></span> Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-[#7A6A5E] hover:text-[#4A3B32] transition font-medium text-[11px] uppercase tracking-wider">Manage</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-[#E8E4D5] flex items-center justify-between text-xs text-[#7A6A5E] bg-[#FCFBFA]">
                    <p>Showing 1 to 4 of 4,821 entries</p>
                    <div class="flex items-center gap-1">
                        <button class="px-2.5 py-1 border border-[#E8E4D5] rounded hover:bg-[#EAE6D7] disabled:opacity-50">&lt;</button>
                        <button class="px-2.5 py-1 border border-[#4A3B32] bg-[#4A3B32] text-white rounded">1</button>
                        <button class="px-2.5 py-1 border border-[#E8E4D5] rounded hover:bg-[#EAE6D7]">2</button>
                        <button class="px-2.5 py-1 border border-[#E8E4D5] rounded hover:bg-[#EAE6D7]">3</button>
                        <span class="px-1">...</span>
                        <button class="px-2.5 py-1 border border-[#E8E4D5] rounded hover:bg-[#EAE6D7]">&gt;</button>
                    </div>
                </div>

            </div>

        </div>
    </main>

</body>
</html>