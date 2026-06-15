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
        
        <header class="flex items-center justify-between px-8 py-6">
            <div class="invisible md:visible"></div> <div class="flex items-center gap-6">
                <div class="flex items-center gap-4">
                </div>
            </div>
        </header>

        <div class="px-8 pb-8">
            
            <div class="flex justify-between items-end mb-8">
                <h2 class="font-serif text-4xl font-bold tracking-tight">Dashboard Overview</h2>
            </div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm relative overflow-hidden">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Total Books</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">{{ number_format($totalBooks) }}</h3>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm relative overflow-hidden">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Total Members</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">{{ number_format($totalMembers) }}</h3>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Active Loans</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">{{ number_format($activeLoans) }}</h3>
                </div>
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm border-l-4 {{ $lateReturns > 0 ? 'border-l-[#A53A3A]' : 'border-l-[#3B6A2E]' }}">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Late Returns</p>
                    <h3 class="font-serif text-3xl font-bold {{ $lateReturns > 0 ? 'text-[#A53A3A]' : 'text-[#3A2A22]' }} mb-1">{{ $lateReturns }}</h3>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

            <div class="lg:col-span-2 bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-6 shadow-sm min-h-[300px] flex flex-col">
                    <h4 class="font-serif text-lg font-bold mb-4">Weekly Borrowing Trends</h4>
                    
                    <div class="w-full flex-1 border-b border-[#E8E4D5] border-dashed relative mt-4 flex items-end justify-between px-4 pb-1 h-48">
                        @foreach($weeklyData as $data)
                            @php 
                                // Calculate bar height percentage (min 5% so it's visible even at 0)
                                $height = max(($data['count'] / $maxBorrows) * 100, 5); 
                            @endphp
                            
                            <div class="w-[8%] h-full flex flex-col justify-end items-center group">
                                
                                <div class="w-full bg-[#6D5A4E] rounded-t-sm transition-all duration-500 hover:bg-[#4A3B32] relative flex justify-center" style="height: {{ $height }}%;">
                                    <span class="opacity-0 group-hover:opacity-100 transition-opacity text-[10px] font-bold text-[#4A3B32] bg-[#EAE6D7] px-2 py-1 rounded absolute -top-8">
                                        {{ $data['count'] }}
                                    </span>
                                </div>
                                
                                <span class="text-[10px] text-[#7A6A5E] font-medium mt-2">{{ $data['day'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-6 shadow-sm">
                    <h4 class="font-serif text-lg font-bold mb-6">Book Categories</h4>
                    
                    @php
                        // Array of academia-themed colors for the chart
                        $colors = ['#4A3B32', '#8E7C6F', '#D5D0C5', '#A53A3A', '#3B6A2E'];
                        $gradientString = '';
                        $cumulativePercent = 0;
                        
                        foreach($categories as $index => $cat) {
                            $percent = ($cat->books_count / $totalCategorizedBooks) * 100;
                            $color = $colors[$index % count($colors)];
                            $gradientString .= "{$color} {$cumulativePercent}% " . ($cumulativePercent + $percent) . "%, ";
                            $cumulativePercent += $percent;
                        }
                        $gradientString = rtrim($gradientString, ', ');
                    @endphp

                    <div class="flex justify-center mb-6">
                        <div class="w-32 h-32 rounded-full flex items-center justify-center shadow-inner" style="background: conic-gradient({{ $gradientString ?: '#EAE6D7 0% 100%' }});">
                           <div class="w-16 h-16 bg-[#FCFBFA] rounded-full shadow-sm"></div>
                        </div>
                    </div>

                    <div class="space-y-3 mt-8 max-h-[120px] overflow-y-auto pr-2">
                        @foreach($categories as $index => $cat)
                            <div class="flex justify-between items-center text-sm">
                                <span class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full" style="background-color: {{ $colors[$index % count($colors)] }}"></span> 
                                    {{ Str::limit($cat->nama_kategori, 15) }}
                                </span>
                                <span class="font-bold text-xs">{{ round(($cat->books_count / $totalCategorizedBooks) * 100) }}%</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>  

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg shadow-sm overflow-hidden">
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg shadow-sm overflow-hidden">
                <div class="flex justify-between items-center p-6 border-b border-[#E8E4D5]">
                    <h4 class="font-serif text-lg font-bold">Recent Transactions</h4>
                    <a href="{{ url('admin/transactions') }}" class="text-[11px] font-bold uppercase tracking-wider text-[#4A3B32] hover:underline">View All →</a>
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
                            @forelse($recentTransactions as $trx)
                                @php
                                    $book = $trx->details->first()->book ?? null;
                                    $isOverdue = is_null($trx->tanggal_kembali) && $trx->due_date && $trx->due_date->isPast();
                                @endphp
                                <tr class="hover:bg-[#FAF8F2] transition">
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-[#EAD4C8] text-[#8C5D42] flex items-center justify-center text-xs font-bold">
                                            {{ strtoupper(substr($trx->user->name, 0, 2)) }}
                                        </div>
                                        <span class="font-medium">{{ $trx->user->name }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-[#5A4A42]">{{ $book ? Str::limit($book->judul, 30) : 'Unknown' }}</td>
                                    <td class="px-6 py-4 text-[#7A6A5E]">{{ $trx->tanggal_pinjam->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 text-right">
                                        @if($trx->tanggal_kembali)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#DDF0D6] text-[#3B6A2E]">Returned</span>
                                        @elseif($isOverdue)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#FADCDC] text-[#A53A3A]">Late</span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#E8E4D5] text-[#5A4A42]">On Loan</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-sm text-[#7A6A5E]">No recent transactions.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
