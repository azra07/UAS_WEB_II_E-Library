<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Loan - Lexicon Librum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F6F4E8] text-[#3A2A22] h-screen flex overflow-hidden">

    <aside class="w-64 bg-[#F6F4E8] border-r border-[#E8E4D5] flex flex-col justify-between hidden md:flex shrink-0">
        </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <header class="flex items-center justify-between px-8 py-6 border-b border-[#E8E4D5] bg-[#F6F4E8]">
            <div class="flex items-center gap-4">
                <a href="{{ route('transactions.index') }}" class="text-[#7A6A5E] hover:text-[#3A2A22] flex items-center gap-2 text-sm font-medium transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Ledger
                </a>
            </div>
        </header>

        <div class="p-8 max-w-3xl mx-auto w-full mt-8">
            <div class="mb-8">
                <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Process New Loan</h2>
                <p class="text-sm text-[#7A6A5E]">Issue a book to a registered library patron.</p>
            </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-8 shadow-sm">
                <form action="{{ route('transactions.store') }}" method="POST">
                    @csrf
                    
                    <div class="space-y-6">
                        
                        <div>
                            <label for="user_id" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Select Patron (Borrower)</label>
                            <select name="user_id" id="user_id" required class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white appearance-none">
                                <option value="" disabled selected>Select a registered member...</option>
                                @foreach($members as $member)
                                    <option value="{{ $member->id }}">{{ $member->name }} ({{ $member->email }})</option>
                                @endforeach
                            </select>
                            @error('user_id') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="book_id" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Select Material (Book)</label>
                            <select name="book_id" id="book_id" required class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white appearance-none">
                                <option value="" disabled selected>Select an available book...</option>
                                @foreach($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->judul }} (ISBN: {{ $book->isbn }})</option>
                                @endforeach
                            </select>
                            <p class="text-[10px] text-[#7A6A5E] mt-1.5">*Only currently available books are shown.</p>
                            @error('book_id') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-[#E8E4D5]">
                            <div>
                                <label for="tanggal_pinjam" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Issue Date</label>
                                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ now()->format('Y-m-d') }}" required
                                    class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white text-[#3A2A22] font-mono">
                                @error('tanggal_pinjam') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>
                            
                            <div>
                                <label for="due_date" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Return Due Date</label>
                                <input type="date" name="due_date" id="due_date" value="{{ now()->addDays(14)->format('Y-m-d') }}" required
                                    class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white text-[#3A2A22] font-mono">
                                @error('due_date') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>
                        </div>

                    </div>

                    <div class="mt-10 flex items-center justify-end gap-4 border-t border-[#E8E4D5] pt-6">
                        <button type="submit" class="bg-[#4A3B32] text-[#F6F4E8] px-6 py-3 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Confirm Loan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>