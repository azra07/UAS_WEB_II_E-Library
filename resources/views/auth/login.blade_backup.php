<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lexicon Librium - Access the Archive</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Libre+Caslon+Text:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        .custom-shadow { box-shadow: 0 12px 32px -12px rgba(62, 39, 35, 0.15); }
    </style>
</head>
<body class="bg-[#fbfbe2] text-[#1b1d0e] min-h-screen flex items-center justify-center font-['Inter']">

<main class="w-full max-w-4xl p-4">
    <div class="bg-white rounded-xl custom-shadow border border-gray-200 overflow-hidden flex flex-col md:flex-row">
        
        <!-- Left Side: Image -->
        <div class="hidden md:block md:w-[45%] bg-gray-200" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCG_OMGDRJIHvuj3LU_QsYa3tT0wzQm1HWAyBlbza3xZuKfeteyocwWKZFB8PQsyx_fJNBEq5uvNP-1_F0dsGKbE0QC3K1YEp4ipG-lso4RJeaTioTu3oW-LZ6eDWqfXXXs9oqcaCZFw5XEOmfCaV-EepW4xy8nF8CsVh-pgsg_I2cbvKdWXVhRTIRTsNzZIOQxpXN1dsi2n0jgdwFthV0lHCfZf137koqVGKFED7D91FOW9bh__KBMDWdll3AfevODTAVH2xj5VpN2'); background-size: cover; background-position: center;">
        </div>

        <!-- Right Side: Login Form -->
        <div class="w-full md:w-[55%] p-12 bg-white">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-[#271310] mb-3">Access the Archive</h1>
                <p class="text-gray-600">Sign in to your Lexicon Librium account.</p>
            </div>

            <!-- Pesan Error -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- FORM UTAMA -->
            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-6">
                @csrf

                <!-- Email -->
                <div class="flex flex-col gap-2">
                    <label class="uppercase tracking-wider text-xs font-bold" for="email">Email Address</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}" 
                           class="w-full py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brown-500">
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-2">
                    <label class="uppercase tracking-wider text-xs font-bold" for="password">Password</label>
                    <input type="password" name="password" id="password" required 
                           class="w-full py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brown-500">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3 bg-[#3e2723] text-white rounded-lg font-medium hover:bg-[#271310] transition">
                    Sign In to Archive
                </button>
            </form>

            <div class="mt-8 text-center border-t pt-6">
                <p class="text-gray-600">New User? <a href="{{ url('signup') }}" class="text-[#3e2723] font-bold underline">Create an Account</a></p>
            </div>
        </div>
    </div>
</main>

</body>
</html>