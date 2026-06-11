<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kategori Buku</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>

        body{
            background:#F5F2DE;
            color:#2B1813;
            font-family:'Inter',sans-serif;
        }

        .font-title{
            font-family:'Cormorant Garamond',serif;
        }

    </style>

</head>

<body>

<!-- NAVBAR -->
<nav class="border-b border-[#D8CFBE] bg-[#F5F2DE] sticky top-0 z-50">

    <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

        <div class="flex items-center gap-12">

            <h1 class="text-6xl font-bold font-title">
                Lexicon Librium
            </h1>

            <div class="flex gap-8 text-[17px]">

                <a href="/catalog"
                   class="font-semibold border-b-2 border-[#2B1813] pb-1">
                    Catalog
                </a>

                <a href="/kategori"
                   class="hover:text-[#7A5C4D] transition">
                    Categories
                </a>

                <a href="#"
                   class="hover:text-[#7A5C4D] transition">
                    Collections
                </a>

                <a href="#"
                   class="hover:text-[#7A5C4D] transition">
                    Archives
                </a>

            </div>

        </div>

        <div class="flex items-center gap-5">

            <div class="relative">

                <input
                    type="text"
                    placeholder="Search the archives..."
                    class="w-[320px]
                           bg-transparent
                           border
                           border-[#CFC3B1]
                           rounded-md
                           py-3
                           pl-12
                           pr-4
                           outline-none">

                <span class="absolute left-4 top-3.5">
                    🔍
                </span>

            </div>

            <button class="text-xl">
                👤
            </button>

        </div>

    </div>

</nav>

<!-- HEADER -->
<section class="max-w-[1600px] mx-auto px-8 pt-10">

    <p class="uppercase tracking-[3px] text-xs text-[#7B6C63]">

        Home > Categories > Philosophy

    </p>

    <h1 class="font-title text-7xl font-bold mt-5">

        Philosophy Collection

    </h1>

    <p class="text-2xl text-[#655B53] mt-4">

        Exploring the depths of human reason, ethics,
        and the nature of existence.

    </p>

</section>

<!-- FILTER -->
<section class="max-w-[1600px] mx-auto px-8 mt-10">

    <div class="border border-[#D8CFBE]
                rounded-md
                px-6
                py-5
                flex
                items-center
                justify-between">

        <div class="flex items-center gap-5">

            <p class="uppercase tracking-[3px] text-xs">

                Sort By

            </p>

            <select class="bg-transparent
                           border
                           border-[#D0C5B6]
                           rounded-md
                           px-5
                           py-3
                           outline-none">

                <option>Publication Date</option>
                <option>Highest Rating</option>
                <option>Newest</option>

            </select>

        </div>

        <div class="flex items-center gap-6">

            <p class="uppercase tracking-[3px] text-xs">

                Showing 1-12 of 144 results

            </p>

            <button class="border border-[#D0C5B6]
                           px-4 py-3 rounded-md">
                ☷
            </button>

        </div>

    </div>

</section>

<!-- DAFTAR BUKU -->
<section class="max-w-[1600px] mx-auto px-8 py-10">

    <div class="grid grid-cols-4 gap-8">

        <!-- CARD -->
        <a href="/detail-buku"
           class="group">

            <div class="relative overflow-hidden rounded-md">

                <img
                    src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1000"
                    class="h-[520px] w-full object-cover group-hover:scale-105 transition duration-500">

                <span class="absolute top-4 right-4
                             bg-[#F5F2DE]
                             px-3 py-1
                             text-[11px]
                             tracking-[2px]
                             uppercase">

                    Available

                </span>

            </div>

            <h2 class="font-title text-5xl font-bold mt-5">

                Meditations

            </h2>

            <p class="italic text-xl text-[#655B53] mt-2">

                Marcus Aurelius

            </p>

            <div class="flex items-center gap-3 mt-5">

                <div class="text-[#5E4338]">
                    ★★★★★
                </div>

                <span>
                    4.8
                </span>

            </div>

        </a>

        <!-- CARD -->
        <a href="/detail-buku"
           class="group">

            <div class="relative overflow-hidden rounded-md">

                <img
                    src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1000"
                    class="h-[520px] w-full object-cover group-hover:scale-105 transition duration-500">

                <span class="absolute top-4 right-4
                             bg-[#8A3F3F]
                             text-white
                             px-3 py-1
                             text-[11px]
                             tracking-[2px]
                             uppercase">

                    On Loan

                </span>

            </div>

            <h2 class="font-title text-5xl font-bold mt-5">

                The Republic

            </h2>

            <p class="italic text-xl text-[#655B53] mt-2">

                Plato

            </p>

            <div class="flex items-center gap-3 mt-5">

                <div class="text-[#5E4338]">
                    ★★★★★
                </div>

                <span>
                    5.0
                </span>

            </div>

        </a>

        <!-- CARD -->
        <a href="/detail-buku"
           class="group">

            <div class="relative overflow-hidden rounded-md">

                <img
                    src="https://images.unsplash.com/photo-1495640388908-05fa85288e61?q=80&w=1000"
                    class="h-[520px] w-full object-cover group-hover:scale-105 transition duration-500">

                <span class="absolute top-4 right-4
                             bg-[#F5F2DE]
                             px-3 py-1
                             text-[11px]
                             tracking-[2px]
                             uppercase">

                    Available

                </span>

            </div>

            <h2 class="font-title text-5xl font-bold mt-5">

                Beyond Good and Evil

            </h2>

            <p class="italic text-xl text-[#655B53] mt-2">

                Friedrich Nietzsche

            </p>

            <div class="flex items-center gap-3 mt-5">

                <div class="text-[#5E4338]">
                    ★★★★★
                </div>

                <span>
                    4.2
                </span>

            </div>

        </a>

        <!-- CARD -->
        <a href="/detail-buku"
           class="group">

            <div class="relative overflow-hidden rounded-md">

                <img
                    src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1000"
                    class="h-[520px] w-full object-cover group-hover:scale-105 transition duration-500">

                <span class="absolute top-4 right-4
                             bg-[#F5F2DE]
                             px-3 py-1
                             text-[11px]
                             tracking-[2px]
                             uppercase">

                    Available

                </span>

            </div>

            <h2 class="font-title text-5xl font-bold mt-5">

                Thus Spoke Zarathustra

            </h2>

            <p class="italic text-xl text-[#655B53] mt-2">

                Friedrich Nietzsche

            </p>

            <div class="flex items-center gap-3 mt-5">

                <div class="text-[#5E4338]">
                    ★★★★★
                </div>

                <span>
                    4.9
                </span>

            </div>

        </a>

    </div>

</section>

<!-- PAGINATION -->
<section class="pb-24">

    <div class="flex justify-center items-center gap-4">

        <button class="border border-[#D0C5B6]
                       w-12 h-12 rounded-md">
            <
        </button>

        <button class="bg-[#3B2019]
                       text-white
                       w-12 h-12 rounded-md">
            1
        </button>

        <button class="border border-[#D0C5B6]
                       w-12 h-12 rounded-md">
            2
        </button>

        <button class="border border-[#D0C5B6]
                       w-12 h-12 rounded-md">
            3
        </button>

        <button class="border border-[#D0C5B6]
                       w-12 h-12 rounded-md">
            >
        </button>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-[#3B2019] text-[#C9B1A5] py-20">

    <div class="text-center">

        <h2 class="font-title text-5xl font-bold">

            Lexicon Librium

        </h2>

        <div class="flex justify-center gap-10 mt-10">

            <a href="#" class="hover:text-white transition">
                Terms of Access
            </a>

            <a href="#" class="hover:text-white transition">
                Privacy Policy
            </a>

            <a href="#" class="hover:text-white transition">
                Archival Standards
            </a>

            <a href="#" class="hover:text-white transition">
                Contact Librarian
            </a>

        </div>

        <div class="w-[400px] h-[1px] bg-[#6E4D42] mx-auto my-10">

        </div>

        <p class="uppercase tracking-[5px] text-xs">

            © MMXXIV Lexicon Librium. All Rights Reserved.

        </p>

    </div>

</footer>

</body>
</html>