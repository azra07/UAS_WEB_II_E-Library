<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History - Lexicon Librum</title>
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
                <a href="{{ url('admin/catalog') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Catalog
                </a>
                <a href="{{ url('admin/members') }}" class="flex items-center gap-3 px-4 py-3 text-[#5A4A42] hover:bg-[#EAE6D7] rounded-md text-sm font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Members
                </a>
                <a href="{{ url('admin/transactions') }}" class="flex items-center gap-3 px-4 py-3 bg-[#4A3B32] text-[#F6F4E8] rounded-md text-sm font-medium shadow-sm">
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
                    <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Loan Ledger</h2>
                    <p class="text-sm text-[#7A6A5E]">Monitor active book circulation, process returns, and track overdue materials.</p>
                </div>
                <a href="{{ route('transactions.create') }}" class="bg-[#4A3B32] text-[#F6F4E8] px-5 py-2.5 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition shadow-sm whitespace-nowrap">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Process New Loan
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-5 shadow-sm">
                    <p class="text-[11px] text-[#7A6A5E] uppercase tracking-wider font-semibold mb-2">Active Loans</p>
                    <h3 class="font-serif text-3xl font-bold mb-1">{{ $activeLoans }}</h3>
                </div>
                </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg shadow-sm overflow-hidden mb-8">
                
                    <form action="{{ route('transactions.index') }}" method="GET" class="p-5 border-b border-[#E8E4D5] flex flex-col md:flex-row md:items-center justify-between gap-4 bg-[#F9F8F3]">
                    
                    <div class="relative w-full md:w-96 flex shadow-sm">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}" 
                               placeholder="Search by borrower, book title, or ID..." 
                               class="w-full pl-4 pr-4 py-2 border border-[#E8E4D5] bg-white rounded-l-md text-sm focus:outline-none focus:border-[#4A3B32] focus:ring-1 focus:ring-[#4A3B32]">
                        
                        <button type="submit" class="bg-[#4A3B32] text-white px-4 py-2 rounded-r-md hover:bg-[#3A2A22] transition flex items-center justify-center border border-[#4A3B32]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </div>

                    <div class="flex items-center gap-3">
                        <select name="status" onchange="this.form.submit()" class="px-4 py-2 border border-[#E8E4D5] bg-white rounded-md text-sm focus:outline-none text-[#5A4A42]">
                            <option value="All Statuses" {{ request('status') == 'All Statuses' ? 'selected' : '' }}>All Statuses</option>
                            <option value="On Loan" {{ request('status') == 'On Loan' ? 'selected' : '' }}>On Loan</option>
                            <option value="Returned" {{ request('status') == 'Returned' ? 'selected' : '' }}>Returned</option>
                            <option value="Overdue" {{ request('status') == 'Overdue' ? 'selected' : '' }}>Overdue</option>
                        </select>
                        
                        <input type="date" name="date" value="{{ request('date') }}" onchange="this.form.submit()" class="px-4 py-2 border border-[#E8E4D5] bg-white rounded-md text-sm focus:outline-none text-[#5A4A42]">
                        
                        @if(request()->hasAny(['search', 'status', 'date']) && (request('search') || request('status') != 'All Statuses' || request('date')))
                            <a href="{{ route('transactions.index') }}" class="text-[11px] font-bold uppercase tracking-wider text-[#A53A3A] hover:underline ml-2">Clear</a>
                        @endif
                    </div>
                </form>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm whitespace-nowrap">
                        <thead class="bg-[#F2F0E6] text-[#7A6A5E] text-[10px] uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-4 font-semibold">Transaction ID</th>
                                <th class="px-6 py-4 font-semibold">Borrower</th>
                                <th class="px-6 py-4 font-semibold">Book Material</th>
                                <th class="px-6 py-4 font-semibold">Issue Date</th>
                                <th class="px-6 py-4 font-semibold">Due Date</th>
                                <th class="px-6 py-4 font-semibold text-center">Status</th>
                                <th class="px-6 py-4 font-semibold text-right">Action</th>
                            </tr>
                        </thead>
                    <tbody class="divide-y divide-[#E8E4D5]">
                        @forelse ($transactions as $trx)
                                 @php
                                // Use the DB due_date if it exists. If it's an old record (null), default to +14 days.
                                $dueDate = $trx->due_date ?? $trx->tanggal_pinjam->copy()->addDays(14);
                                
                                // Now $dueDate is guaranteed to be a date object, so this logic is safe!
                                $isOverdue = is_null($trx->tanggal_kembali) && $dueDate->isPast();
                                
                                $firstDetail = $trx->details->first();
                                $book = $firstDetail ? $firstDetail->book : null;
                            @endphp
                            <tr class="hover:bg-[#FAF8F2] transition {{ $isOverdue ? 'bg-red-50/30' : '' }}">
                                <td class="px-6 py-4 text-[#7A6A5E] font-mono text-xs">TRX-{{ str_pad($trx->id, 5, '0', STR_PAD_LEFT) }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-[#EAD4C8] text-[#8C5D42] flex items-center justify-center font-bold text-xs">
                                            {{ strtoupper(substr($trx->user->name, 0, 2)) }}
                                        </div>
                                        <span class="font-bold text-[#3A2A22]">{{ $trx->user->name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-medium text-[#3A2A22]">{{ $book ? $book->judul : 'Book Data Missing' }}</p>
                                    <p class="text-[10px] text-[#7A6A5E] uppercase tracking-wider">ISBN: {{ $book ? $book->isbn : 'N/A' }}</p>
                                </td>
                                <td class="px-6 py-4 text-[#5A4A42]">{{ $trx->tanggal_pinjam->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 {{ $isOverdue ? 'text-[#A53A3A] font-bold' : 'text-[#5A4A42] font-medium' }}">
                                        {{ $dueDate->format('M d, Y') }}
                                    </td>
                                <td class="px-6 py-4 text-center">
                                    @if($trx->tanggal_kembali)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#DDF0D6] text-[#3B6A2E]">
                                            Returned
                                        </span>
                                    @elseif($isOverdue)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#FADCDC] text-[#A53A3A]">
                                            Overdue ({{ $dueDate->diffInDays(today()) }} Days)
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#E8E4D5] text-[#5A4A42]">
                                            On Loan
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    @if(is_null($trx->tanggal_kembali))
                                       <form action="{{ route('transactions.return', $trx->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="text-[#7A6A5E] hover:text-[#3A2A22] transition font-medium text-[11px] uppercase tracking-wider border border-[#E8E4D5] bg-white px-3 py-1.5 rounded shadow-sm">
                                                Process Return
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-[#7A6A5E] text-[11px] uppercase tracking-wider">Closed</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-[#7A6A5E]">
                                    No loan transactions found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    </table>
                </div>
                    {{ $transactions->links() }}
                </div>  
                </div>

            </div>

        </div>
    </main>

</body>
</html>
