<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member - Lexicon Librum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F6F4E8] text-[#3A2A22] h-screen flex overflow-hidden">

    <main class="flex-1 flex flex-col overflow-y-auto">
        <header class="flex items-center justify-between px-8 py-6 border-b border-[#E8E4D5] bg-[#F6F4E8]">
            <h2 class="font-serif text-xl font-bold">Lexicon Librum</h2>
            <a href="{{ route('members.index') }}" class="text-sm font-medium text-[#7A6A5E] hover:text-[#3A2A22] transition">← Back to Directory</a>
        </header>

        <div class="p-8 max-w-3xl mx-auto w-full">
            <div class="mb-8">
                <h2 class="font-serif text-4xl font-bold tracking-tight mb-2">Edit Member</h2>
                <p class="text-sm text-[#7A6A5E]">Update profile details or change account passwords.</p>
            </div>

            <form action="{{ route('members.update', $member->id) }}" method="POST" class="bg-[#FCFBFA] border border-[#E8E4D5] rounded-lg shadow-sm p-8 mb-8">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-[#5A4A42] mb-2">Full Name</label>
                        <input type="text" name="name" value="{{ old('name', $member->name) }}" required class="w-full px-4 py-2 border border-[#E8E4D5] bg-white rounded-md focus:outline-none focus:ring-1 focus:ring-[#4A3B32]">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#5A4A42] mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ old('email', $member->email) }}" required class="w-full px-4 py-2 border border-[#E8E4D5] bg-white rounded-md focus:outline-none focus:ring-1 focus:ring-[#4A3B32]">
                    </div>

                    <div class="p-4 bg-[#F9F8F3] border border-[#E8E4D5] rounded-md">
                        <label class="block text-sm font-bold text-[#5A4A42] mb-2">Reset Password</label>
                        <p class="text-[11px] text-[#7A6A5E] mb-3">Leave this blank if you do not want to change the member's current password.</p>
                        <input type="password" name="password" placeholder="Enter new password (optional)..." class="w-full px-4 py-2 border border-[#E8E4D5] bg-white rounded-md focus:outline-none focus:ring-1 focus:ring-[#4A3B32]">
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit" class="bg-[#4A3B32] text-[#F6F4E8] px-6 py-2.5 rounded font-semibold tracking-wide hover:bg-[#342923] transition shadow-sm">
                        Save Changes
                    </button>
                </div>
            </form>

            <div class="bg-white border border-[#E8E4D5] rounded-lg shadow-sm p-8 flex items-center justify-between">
                <div>
                    <h4 class="font-bold text-[#A53A3A] mb-1">Danger Zone</h4>
                    <p class="text-xs text-[#7A6A5E]">Permanently delete this member and all associated non-financial data.</p>
                </div>
                <form action="{{ route('members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member? This action cannot be undone.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border border-[#A53A3A] text-[#A53A3A] px-4 py-2 rounded text-xs font-bold uppercase tracking-wider hover:bg-[#FADCDC] transition">
                        Delete Account
                    </button>
                </form>
            </div>

        </div>
    </main>
</body>
</html>