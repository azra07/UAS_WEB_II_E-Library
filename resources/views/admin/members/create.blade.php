<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Member - Lexicon Librum</title>
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
                <a href="{{ route('members.index') }}" class="text-[#7A6A5E] hover:text-[#3A2A22] flex items-center gap-2 text-sm font-medium transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Directory
                </a>
            </div>
        </header>

        <div class="p-8 max-w-3xl mx-auto w-full mt-8">
            <div class="mb-8">
                <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Register Patron</h2>
                <p class="text-sm text-[#7A6A5E]">Create a new library account for a member.</p>
            </div>

            <div class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg p-8 shadow-sm">
                <form action="{{ route('members.store') }}" method="POST">
                    @csrf
                    
                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Full Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white">
                            @error('name') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Email Address</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white">
                            @error('email') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-[11px] text-[#7A6A5E] uppercase tracking-wider font-bold mb-2">Temporary Password</label>
                            <input type="password" name="password" id="password" required
                                class="w-full px-4 py-3 border border-[#E8E4D5] rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#4A3B32] bg-white">
                            <p class="text-[10px] text-[#7A6A5E] mt-1">Must be at least 8 characters.</p>
                            @error('password') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mt-10 flex items-center justify-end gap-4 border-t border-[#E8E4D5] pt-6">
                        <button type="submit" class="bg-[#4A3B32] text-[#F6F4E8] px-6 py-3 rounded text-xs font-semibold uppercase tracking-wider flex items-center gap-2 hover:bg-[#342923] transition shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>