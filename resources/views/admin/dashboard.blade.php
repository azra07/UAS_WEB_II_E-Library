<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Lexicon Librum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F6F4E8] text-[#3A2A22] h-screen flex overflow-hidden">

    <aside class="w-64 bg-[#F6F4E8] border-r border-[#E8E4D5] flex flex-col justify-between hidden md:flex">
        <div>
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 bg-[#4A3B32] rounded-md flex items-center justify-center text-white font-serif font-bold text-xl">
                    L
                </div>
                <div>
                    <h1 class="font-serif text-xl font-bold leading-tight">Admin<br>Portal</h1>
                    <p class="text-[10px] tracking-widest text-[#7A6A5E] uppercase mt-1">Central Library System</p>
                </div>
            </div>


            <nav class="px-4 space-y-1">
                <a href="{{ url('admin/dashboard') }}" class="flex items-center gap-3 px-4 py-3 bg-[#4A3B32] text-[#F6F4E8] rounded-md text-sm font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Overview
                </a>
                
                <a href="{{ url('admin/catalog') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
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
        
        <header class="flex items-center justify-between px-8 py-6">
            <div class="invisible md:visible"></div> <div class="flex items-center gap-6">
                <div class="relative">
                    <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Search catalog..." class="pl-9 pr-4 py-2 border border-[#E8E4D5] bg-transparent rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] w-64">
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

        <div class="px-8 pb-8">
            
            <div class="flex justify-between items-end mb-8">
                <h2 class="font-serif text-4xl font-bold tracking-tight">Dashboard Overview</h2>
                <p class="text-xs text-[#7A6A5E] uppercase tracking-wider font-medium">Last Updated: Today, 09:41 AM</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm relative overflow-hidden">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Total Books</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">12,450</h3>
                    <p class="text-xs text-green-700 font-medium flex items-center gap-1">↗ +124 this month</p>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm relative overflow-hidden">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Total Members</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">3,200</h3>
                    <p class="text-xs text-green-700 font-medium flex items-center gap-1">↗ +45 this month</p>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Active Loans</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">450</h3>
                    <p class="text-xs text-[#7A6A5E] font-medium">Steady activity</p>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm border-l-4 border-l-[#A53A3A]">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Late Returns</p>
                    <h3 class="font-serif text-3xl font-bold text-[#A53A3A] mb-1">24</h3>
                    <p class="text-xs text-[#A53A3A] font-medium">Action required</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <div class="lg:col-span-2 bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-6 shadow-sm min-h-[300px]">
                    <h4 class="font-serif text-lg font-bold mb-4">Monthly Borrowing Trends</h4>
                    <div class="w-full h-48 border-b border-[#E8E4D5] border-dashed relative mt-8">
                        <div class="absolute bottom-0 left-[10%] w-[8%] h-[40%] bg-[#D5D0C5] rounded-t-sm"></div>
                        <div class="absolute bottom-0 left-[25%] w-[8%] h-[60%] bg-[#D5D0C5] rounded-t-sm"></div>
                        <div class="absolute bottom-0 left-[40%] w-[8%] h-[90%] bg-[#6D5A4E] rounded-t-sm"></div>
                        <div class="absolute bottom-0 left-[55%] w-[8%] h-[55%] bg-[#D5D0C5] rounded-t-sm"></div>
                        <div class="absolute bottom-0 left-[70%] w-[8%] h-[70%] bg-[#D5D0C5] rounded-t-sm"></div>
                        <div class="absolute bottom-0 left-[85%] w-[8%] h-[45%] bg-[#D5D0C5] rounded-t-sm"></div>
                    </div>
                </div>

                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-6 shadow-sm">
                    <h4 class="font-serif text-lg font-bold mb-6">Book Categories</h4>
                    <div class="flex justify-center mb-6">
                        <div class="w-32 h-32 rounded-xl bg-[#6D5A4E] border-[12px] border-[#4A3B32] flex items-center justify-center">
                           <div class="w-16 h-16 bg-[#FCFBFA] rounded-md"></div>
                        </div>
                    </div>
                    <div class="space-y-3 mt-8">
                        <div class="flex justify-between items-center text-sm">
                            <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-[#4A3B32]"></span> Academic</span>
                            <span class="font-bold">60%</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-[#8E7C6F]"></span> Fiction</span>
                            <span class="font-bold">40%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg shadow-sm overflow-hidden">
                <div class="flex justify-between items-center p-6 border-b border-[#E8E4D5]">
                    <h4 class="font-serif text-lg font-bold">Recent Transactions</h4>
                    <a href="#" class="text-[11px] font-bold uppercase tracking-wider text-[#4A3B32] hover:underline">View All →</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-[#F2F0E6] text-[#7A6A5E] text-[10px] uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-3 font-semibold">Borrower</th>
                                <th class="px-6 py-3 font-semibold">Book Title</th>
                                <th class="px-6 py-3 font-semibold">Date</th>
                                <th class="px-6 py-3 font-semibold text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E8E4D5]">
                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-[#EAD4C8] text-[#8C5D42] flex items-center justify-center text-xs font-bold">JS</div>
                                    <span class="font-medium">John Smith</span>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42]">The Architecture of Happiness</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Oct 24, 2023</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#E8E4D5] text-[#5A4A42]">On Loan</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-[#4A3B32] text-[#FCFBFA] flex items-center justify-center text-xs font-bold">ED</div>
                                    <span class="font-medium">Eleanor Dashwood</span>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42]">Principia Mathematica</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Oct 23, 2023</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#DDF0D6] text-[#3B6A2E]">Returned</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-[#3A2A22] text-[#FCFBFA] flex items-center justify-center text-xs font-bold">MR</div>
                                    <span class="font-medium">Marcus Reed</span>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42]">History of the Peloponnesian War</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Oct 21, 2023</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#E8E4D5] text-[#5A4A42]">On Loan</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-[#FAF8F2] transition">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-[#8E6C5F] text-[#FCFBFA] flex items-center justify-center text-xs font-bold">AW</div>
                                    <span class="font-medium">Alice Walker</span>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42]">Introduction to Algorithms, 3rd Edition</td>
                                <td class="px-6 py-4 text-[#7A6A5E]">Oct 20, 2023</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#FADCDC] text-[#A53A3A]">Late</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</body>
</html>