<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil User</title>

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
                    Reading List
                </a>

            </div>

        </div>

        <div class="flex items-center gap-5">

            <button class="text-xl">
                👤
            </button>

        </div>

    </div>

</nav>

<!-- PROFILE HEADER -->
<section class="max-w-[1600px] mx-auto px-8 mt-10">

    <div class="border border-[#D8CFBE]
                rounded-md
                p-8
                flex
                items-center
                justify-between">

        <div class="flex items-center gap-6">

            <img
                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1000"
                class="w-24 h-24 rounded-md object-cover">

            <div>

                <h1 class="font-title text-5xl font-bold">
                    Scholar's Study
                </h1>

                <p class="text-[#7A6B63] mt-2">
                    Lexicon Member since 1892
                </p>

            </div>

        </div>

        <button class="bg-[#3B2019]
                       hover:bg-[#4C2B23]
                       transition
                       text-white
                       px-8 py-4 rounded-md font-semibold">

            Renew Membership

        </button>

    </div>

</section>

<!-- INFORMASI PROFIL -->
<section class="max-w-[1600px] mx-auto px-8 mt-10">

    <div class="bg-[#F9F7F0]
                border border-[#D8CFBE]
                rounded-md
                p-8">

        <div class="flex justify-between items-center border-b border-[#BFAF9D] pb-5">

            <div>

                <p class="uppercase tracking-[3px]
                          text-xs text-[#7A6B63]">

                    Account Metadata

                </p>

                <h2 class="font-title text-5xl font-bold mt-3">

                    Personal Archivist Details

                </h2>

            </div>

            <button class="border border-[#BFAF9D]
                           px-6 py-3
                           rounded-md
                           hover:bg-[#EFE7D8]
                           transition">

                ✎ Edit Profil

            </button>

        </div>

        <div class="grid grid-cols-2 gap-8 mt-8">

            <!-- NAMA -->
            <div>

                <label class="uppercase tracking-[3px]
                              text-xs text-[#7A6B63]">

                    Full Name

                </label>

                <input
                    type="text"
                    value="Dr. Alistair H. Sterling"
                    class="w-full
                           mt-3
                           border border-[#CDBEA9]
                           bg-[#F5F2DE]
                           px-5 py-4
                           outline-none">

            </div>

            <!-- MEMBER -->
            <div>

                <label class="uppercase tracking-[3px]
                              text-xs text-[#7A6B63]">

                    Membership ID

                </label>

                <input
                    type="text"
                    value="LL-1892-X9"
                    class="w-full
                           mt-3
                           border border-[#CDBEA9]
                           bg-[#F5F2DE]
                           px-5 py-4
                           outline-none">

            </div>

            <!-- EMAIL -->
            <div>

                <label class="uppercase tracking-[3px]
                              text-xs text-[#7A6B63]">

                    Primary Email

                </label>

                <input
                    type="email"
                    value="a.sterling@lexicon.edu"
                    class="w-full
                           mt-3
                           border border-[#CDBEA9]
                           bg-[#F5F2DE]
                           px-5 py-4
                           outline-none">

            </div>

            <!-- INSTITUSI -->
            <div>

                <label class="uppercase tracking-[3px]
                              text-xs text-[#7A6B63]">

                    Institutional Affiliation

                </label>

                <input
                    type="text"
                    value="Society of Antiquarian Researchers"
                    class="w-full
                           mt-3
                           border border-[#CDBEA9]
                           bg-[#F5F2DE]
                           px-5 py-4
                           outline-none">

            </div>

        </div>

    </div>

</section>

<!-- BUKU DIPINJAM -->
<section class="max-w-[1600px] mx-auto px-8 mt-14">

    <div class="flex items-center gap-5">

        <h2 class="font-title text-5xl font-bold">

            Buku Sedang Dipinjam

        </h2>

        <div class="h-[1px] flex-1 bg-[#D9CFBF]">

        </div>

    </div>

    <div class="grid grid-cols-2 gap-8 mt-8">

        <!-- CARD -->
        <div class="border border-[#D8CFBE]
                    p-6
                    rounded-md
                    bg-[#F8F5E8]">

            <div class="flex justify-between items-start">

                <div>

                    <p class="uppercase tracking-[3px]
                              text-xs text-[#8B7A70]">

                        Rare Manuscript

                    </p>

                    <h3 class="font-title text-4xl font-bold mt-3">

                        The Chronicles of Aethelgard

                    </h3>

                </div>

                <span class="bg-[#3B2019]
                             text-white
                             text-xs
                             px-4 py-2">

                    DUE_7_DAYS

                </span>

            </div>

            <div class="mt-8 text-[#6F5F56]">

                <p>
                    Borrowed : Oct 12
                </p>

                <p class="text-red-600 font-semibold mt-2">
                    Return by : Nov 01
                </p>

            </div>

        </div>

        <!-- CARD -->
        <div class="border border-[#D8CFBE]
                    p-6
                    rounded-md
                    bg-[#F8F5E8]">

            <div class="flex justify-between items-start">

                <div>

                    <p class="uppercase tracking-[3px]
                              text-xs text-[#8B7A70]">

                        Reference Vol.

                    </p>

                    <h3 class="font-title text-4xl font-bold mt-3">

                        Etymological Roots: Vol IV

                    </h3>

                </div>

                <span class="bg-[#7A5C4D]
                             text-white
                             text-xs
                             px-4 py-2">

                    DUE_24_HRS

                </span>

            </div>

            <div class="mt-8 text-[#6F5F56]">

                <p>
                    Borrowed : Oct 20
                </p>

                <p class="text-red-600 font-semibold mt-2">
                    Return by : Oct 26
                </p>

            </div>

        </div>

    </div>

</section>

<!-- FAVORIT -->
<section class="max-w-[1600px] mx-auto px-8 mt-16">

    <div class="flex justify-between items-center">

        <h2 class="font-title text-5xl font-bold">

            Buku Favorit

        </h2>

        <button class="uppercase tracking-[3px]
                       text-sm text-[#7B6C63]">

            View All Collection

        </button>

    </div>

    <div class="grid grid-cols-5 gap-6 mt-8">

        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?q=80&w=1000"
             class="h-[380px] w-full object-cover rounded-md">

        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1000"
             class="h-[380px] w-full object-cover rounded-md">

        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1000"
             class="h-[380px] w-full object-cover rounded-md">

        <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?q=80&w=1000"
             class="h-[380px] w-full object-cover rounded-md">

        <img src="https://images.unsplash.com/photo-1495640388908-05fa85288e61?q=80&w=1000"
             class="h-[380px] w-full object-cover rounded-md">

    </div>

</section>

<!-- RIWAYAT -->
<section class="max-w-[1600px] mx-auto px-8 mt-16 pb-24">

    <div class="flex items-center gap-5">

        <h2 class="font-title text-5xl font-bold">

            Riwayat Peminjaman

        </h2>

        <div class="h-[1px] flex-1 bg-[#D9CFBF]">

        </div>

    </div>

    <div class="overflow-x-auto mt-8 border border-[#D8CFBE] rounded-md">

        <table class="w-full">

            <thead class="bg-[#ECE6D3]">

                <tr class="text-left">

                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">
                        Log ID
                    </th>

                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">
                        Judul Buku
                    </th>

                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">
                        Tanggal Pinjam
                    </th>

                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">
                        Status
                    </th>

                    <th class="px-5 py-5 uppercase tracking-[3px] text-xs">
                        Rating
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-t border-[#DDD2C1]">

                    <td class="px-5 py-5">
                        #BH-4421
                    </td>

                    <td class="px-5 py-5 font-semibold">
                        Meditations on First Philosophy
                    </td>

                    <td class="px-5 py-5">
                        Aug 15, 2023
                    </td>

                    <td class="px-5 py-5">

                        <span class="bg-[#EACFC8]
                                     text-[#7A3D33]
                                     px-4 py-2 text-xs">

                            Returned

                        </span>

                    </td>

                    <td class="px-5 py-5">
                        ★★★★★
                    </td>

                </tr>

                <tr class="border-t border-[#DDD2C1]">

                    <td class="px-5 py-5">
                        #BH-3908
                    </td>

                    <td class="px-5 py-5 font-semibold">
                        The Alchemist's Compendium
                    </td>

                    <td class="px-5 py-5">
                        July 02, 2023
                    </td>

                    <td class="px-5 py-5">

                        <span class="bg-[#EACFC8]
                                     text-[#7A3D33]
                                     px-4 py-2 text-xs">

                            Returned

                        </span>

                    </td>

                    <td class="px-5 py-5">
                        ★★★★☆
                    </td>

                </tr>

                <tr class="border-t border-[#DDD2C1]">

                    <td class="px-5 py-5">
                        #BH-2811
                    </td>

                    <td class="px-5 py-5 font-semibold">
                        Elements of Geometry
                    </td>

                    <td class="px-5 py-5">
                        May 21, 2023
                    </td>

                    <td class="px-5 py-5">

                        <span class="bg-[#EACFC8]
                                     text-[#7A3D33]
                                     px-4 py-2 text-xs">

                            Returned

                        </span>

                    </td>

                    <td class="px-5 py-5">
                        ★★★★★
                    </td>

                </tr>

            </tbody>

        </table>

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