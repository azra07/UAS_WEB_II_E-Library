<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User - Lexicon Librium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { background:#F5F2DE; color:#2B1813; font-family:'Inter',sans-serif; }
        .font-title { font-family:'Cormorant Garamond',serif; }
    </style>
</head>
<body>

<nav class="border-b border-[#D8CFBE] bg-[#F5F2DE] sticky top-0 z-50">
    <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">
        <div class="flex items-center gap-12">
            <h1 class="text-5xl font-bold font-title">
                <a href="{{ url('/') }}">Lexicon Librium</a>
            </h1>
            <div class="flex gap-8 text-[17px]">
                <a href="{{ route('user.dashboard') }}" class="hover:text-[#7A5C4D] transition">Catalog</a>
                <a href="{{ route('user.categories') }}" class="hover:text-[#7A5C4D] transition">Categories</a>
                <a href="{{ route('user.reading_list_view') }}" class="hover:text-[#7A5C4D] transition">Reading List</a>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm font-semibold text-red-800 hover:underline">Logout</button>
            </form>
        </div>
    </div>
</nav>

<section class="max-w-[1600px] mx-auto px-8 mt-10">
    <!-- Changed the div to a form pointing to our new route -->
    <form action="{{ route('profile.update_basic') }}" method="POST" class="bg-[#F9F7F0] border border-[#D8CFBE] rounded-md p-8">
        @csrf
        @method('PATCH')

        <!-- Success Message Banner -->
        @if(session('success'))
            <div class="mb-6 bg-[#DDF0D6] border border-[#3B6A2E] text-[#3B6A2E] px-4 py-3 rounded-md font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center border-b border-[#BFAF9D] pb-5">
            <div>
                <p class="uppercase tracking-[3px] text-xs text-[#7A6B63]">Account Metadata</p>
                <h2 class="font-title text-5xl font-bold mt-3">Personal Archivist Details</h2>
            </div>
            
            <!-- Added Save Changes Button -->
            <button type="submit" class="bg-[#3B2019] text-[#F5F2DE] px-8 py-3 rounded hover:bg-[#5A382D] transition font-semibold uppercase tracking-wider text-sm shadow-sm">
                Save Changes
            </button>
        </div>
        
        <div class="grid grid-cols-2 gap-8 mt-8">
            <!-- Name Input: Removed readonly, added name="name", changed background to white so it looks editable -->
            <div>
                <label class="uppercase tracking-[3px] text-xs text-[#7A6B63]">Full Name</label>
                <input type="text" name="name" value="{{ $user->name }}" required class="w-full mt-3 border border-[#CDBEA9] bg-white px-5 py-4 outline-none text-[#2B1813] focus:border-[#3B2019] transition">
            </div>
            
            <div>
                <label class="uppercase tracking-[3px] text-xs text-[#7A6B63]">Membership ID</label>
                <input type="text" value="MEM-{{ str_pad($user->id, 4, '0', STR_PAD_LEFT) }}" readonly class="w-full mt-3 border border-[#CDBEA9] bg-[#E8E4D5] px-5 py-4 outline-none text-[#7A6B63] font-mono cursor-not-allowed">
            </div>
            
            <!-- Email Input: Removed readonly, added name="email", changed background to white -->
            <div>
                <label class="uppercase tracking-[3px] text-xs text-[#7A6B63]">Primary Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required class="w-full mt-3 border border-[#CDBEA9] bg-white px-5 py-4 outline-none text-[#2B1813] focus:border-[#3B2019] transition">
            </div>
            
            <!-- Role Input: Kept readonly -->
            <div>
                <label class="uppercase tracking-[3px] text-xs text-[#7A6B63]">Account Clearance</label>
                <input type="text" value="{{ ucfirst($user->role) }}" readonly class="w-full mt-3 border border-[#CDBEA9] bg-[#E8E4D5] px-5 py-4 outline-none text-[#7A6B63] cursor-not-allowed">
            </div>
        </div>
    </form>
</section>

<section class="max-w-[1600px] mx-auto px-8 mt-14">
    <div class="flex items-center gap-5">
        <h2 class="font-title text-5xl font-bold">Currently Borrowed</h2>
        <div class="h-[1px] flex-1 bg-[#D9CFBF]"></div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        @forelse($activeLoans as $loan)
            @php
                $book = $loan->details->first()->book ?? null;
                $dueDate = $loan->due_date;
                $isOverdue = $dueDate && $dueDate->isPast();
            @endphp
            <div class="border border-[#D8CFBE] p-6 rounded-md bg-[#F8F5E8]">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="uppercase tracking-[3px] text-xs text-[#8B7A70]">{{ $book->category->nama_kategori ?? 'General' }}</p>
                        <h3 class="font-title text-4xl font-bold mt-3"><a href="{{ route('buku.user.show', $book->id) }}" class="hover:underline">{{ $book->judul }}</a></h3>
                    </div>
                    @if($isOverdue)
                        <span class="bg-[#7A3D33] text-white text-xs px-4 py-2 uppercase tracking-wider">OVERDUE</span>
                    @else
                        <span class="bg-[#3B2019] text-white text-xs px-4 py-2 uppercase tracking-wider">DUE IN {{ now()->diffInDays($dueDate) }} DAYS</span>
                    @endif
                </div>
                <div class="mt-8 text-[#6F5F56]">
                    <p>Borrowed : {{ $loan->tanggal_pinjam->format('M d, Y') }}</p>
                    <p class="{{ $isOverdue ? 'text-red-700' : 'text-[#8B7A70]' }} font-semibold mt-2">
                        Return by : {{ $dueDate ? $dueDate->format('M d, Y') : 'Unknown' }}
                    </p>
                </div>
            </div>
        @empty
            <p class="text-[#7A6B63] italic">You have no active loans at the moment.</p>
        @endforelse
    </div>
</section>

<section class="max-w-[1600px] mx-auto px-8 mt-16 pb-24">
    <div class="flex items-center gap-5">
        <h2 class="font-title text-5xl font-bold">Borrowing History</h2>
        <div class="h-[1px] flex-1 bg-[#D9CFBF]"></div>
    </div>
    
    <div class="overflow-x-auto mt-8 border border-[#D8CFBE] rounded-md">
        <table class="w-full">
            <thead class="bg-[#ECE6D3]">
                <tr class="text-left">
                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">Log ID</th>
                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">Book Title</th>
                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">Borrowed On</th>
                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">Returned On</th>
                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pastLoans as $loan)
                    @php $book = $loan->details->first()->book ?? null; @endphp
                    <tr class="border-t border-[#DDD2C1] hover:bg-[#F9F7F0] transition">
                        <td class="px-5 py-5 font-mono text-xs text-[#7A6B63]">#TRX-{{ str_pad($loan->id, 4, '0', STR_PAD_LEFT) }}</td>
                        <td class="px-5 py-5 font-semibold text-[#3B2019]">
                            @if($book)
                                <a href="{{ route('buku.user.show', $book->id) }}" class="hover:underline">{{ $book->judul }}</a>
                            @else
                                Book Data Removed
                            @endif
                        </td>
                        <td class="px-5 py-5 text-[#7A6B63]">{{ $loan->tanggal_pinjam->format('M d, Y') }}</td>
                        <td class="px-5 py-5 text-[#7A6B63]">{{ $loan->tanggal_kembali->format('M d, Y') }}</td>
                        <td class="px-5 py-5">
                            <span class="bg-[#EACFC8] text-[#7A3D33] px-4 py-2 text-xs font-bold uppercase tracking-wider">Returned</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-5 py-10 text-center text-[#7A6B63] italic">No borrowing history found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

</body>
</html>