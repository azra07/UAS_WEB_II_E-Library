<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - Lexicon Librium</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>

        body{
            background-color: #F5F2DE;
            font-family: 'Inter', sans-serif;
            color: #2B1813;
        }

        .font-judul{
            font-family: 'Cormorant Garamond', serif;
        }

        .card-shadow{
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="border-b border-[#D7CCBE] bg-[#F5F2DE] sticky top-0 z-50">

        <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

            <!-- KIRI -->
            <div class="flex items-center gap-16">

                <!-- LOGO -->
                <h1 class="font-judul text-5xl font-bold">
                    Lexicon Librium
                </h1>

                <!-- MENU -->
                <div class="flex items-center gap-10 text-[17px]">

                    <a href="#" class="font-semibold border-b-2 border-[#2B1813] pb-1">
                        Catalog
                    </a>

                    <a href="#" class="hover:text-[#6E4D3C] transition">
                        Categories
                    </a>

                    <a href="#" class="hover:text-[#6E4D3C] transition">
                        Collections
                    </a>

                    <a href="#" class="hover:text-[#6E4D3C] transition">
                        Archives
                    </a>

                </div>

            </div>

            <!-- KANAN -->
            <div class="flex items-center gap-5">

                <!-- SEARCH -->
                <input
                    type="text"
                    placeholder="Cari buku..."
                    class="w-[320px] border border-[#B9AA97]
                           rounded-md bg-transparent
                           px-5 py-3 outline-none"
                >

                <!-- ICON USER -->
                <button class="text-xl">
                    👤
                </button>

            </div>

        </div>

    </nav>

    <!-- CONTENT -->
    <section class="max-w-[1600px] mx-auto px-8 py-10">

        <!-- BREADCRUMB -->
        <p class="uppercase tracking-[4px] text-xs text-[#7A6D61] mb-8">

            Archives >
            Natural Sciences >
            The Alchemy of Form

        </p>

        <!-- GRID -->
        <div class="grid grid-cols-12 gap-10">

            <!-- BAGIAN KIRI -->
            <div class="col-span-4">

                <!-- GAMBAR BUKU -->
                <div class="overflow-hidden rounded-lg card-shadow">

                    <img
                        src="https://images.unsplash.com/photo-1544947950-fa07a98d237f"
                        class="w-full h-[720px] object-cover"
                    >

                </div>

                <!-- TOMBOL -->
                <div class="mt-6 space-y-4">

                    <!-- PINJAM -->
                    <button
                        class="w-full bg-[#4B2A24]
                               hover:bg-[#311813]
                               transition
                               text-white
                               py-5 rounded-md
                               text-2xl font-semibold">

                        Borrow Book

                    </button>

                    <!-- FAVORIT -->
                    <button
                        class="w-full border border-[#B7A693]
                               py-5 rounded-md
                               hover:bg-[#EEE6D6]
                               transition
                               text-lg font-medium">

                        Add to Reading List

                    </button>

                </div>

                <!-- DETAIL -->
                <div class="mt-8 border border-[#D7CCBE] rounded-lg p-6">

                    <h3 class="uppercase tracking-[3px]
                               text-xs text-[#7A6D61]
                               font-semibold mb-5">

                        Spesifikasi Buku

                    </h3>

                    <!-- ITEM -->
                    <div class="space-y-4 text-[17px]">

                        <div class="flex justify-between border-b pb-3">

                            <span>Penerbit</span>

                            <span>Gramedia</span>

                        </div>

                        <div class="flex justify-between border-b pb-3">

                            <span>Kategori</span>

                            <span>Filsafat</span>

                        </div>

                        <div class="flex justify-between border-b pb-3">

                            <span>Bahasa</span>

                            <span>Indonesia</span>

                        </div>

                        <div class="flex justify-between border-b pb-3">

                            <span>Stok</span>

                            <span>12 Buku</span>

                        </div>

                    </div>

                </div>

            </div>

            <!-- BAGIAN KANAN -->
            <div class="col-span-8">

                <!-- BADGE -->
                <div
                    class="inline-block bg-[#EADBCB]
                           px-4 py-2 rounded
                           uppercase tracking-[3px]
                           text-xs">

                    Rare Manuscript

                </div>

                <!-- JUDUL -->
                <h1
                    class="mt-5 text-7xl font-bold leading-tight font-judul">

                    The Alchemy of Form:
                    Observations on Geometry & Nature

                </h1>

                <!-- PENULIS -->
                <p class="mt-4 text-4xl italic text-[#7A675A] font-judul">

                    By Dr. Alistair H. Sterling

                </p>

                <!-- RATING -->
                <div
                    class="flex items-center gap-6
                           border-y border-[#D7CCBE]
                           py-6 mt-8">

                    <div class="flex items-center gap-3 text-xl">

                        ⭐⭐⭐⭐⭐

                        <span class="font-semibold">
                            4.8
                        </span>

                    </div>

                    <div>|</div>

                    <div class="uppercase tracking-[2px] text-sm">

                        242 Ulasan

                    </div>

                    <div>|</div>

                    <div class="text-green-700 uppercase text-sm font-semibold">

                        Available For Loan

                    </div>

                </div>

                <!-- DESKRIPSI -->
                <div class="mt-10">

                    <h2
                        class="text-5xl font-bold
                               border-b-2 border-[#2B1813]
                               inline-block pb-2
                               font-judul">

                        Ringkasan Buku

                    </h2>

                    <div
                        class="mt-8 text-[22px]
                               leading-[50px]
                               text-[#40342E]">

                        Buku ini membahas hubungan antara geometri,
                        matematika, dan pola alam dalam kehidupan.
                        Penulis menjelaskan bagaimana bentuk-bentuk
                        alami memiliki struktur matematis yang kompleks.

                        Selain itu, buku ini juga menjelaskan
                        bagaimana pola-pola tersebut digunakan dalam
                        arsitektur, seni, dan ilmu pengetahuan modern.

                    </div>

                </div>

                <!-- QUOTE -->
                <div
                    class="mt-10 border-l-4 border-[#D8B8AA]
                           pl-8 italic text-4xl
                           text-[#7A5B4D] font-judul">

                    "Nature does not build in straight lines."

                </div>

                <!-- ULASAN -->
                <div class="mt-16">

                    <!-- HEADER -->
                    <div class="flex justify-between items-center">

                        <h2 class="text-5xl font-bold font-judul">

                            Ulasan Pembaca

                        </h2>

                        <button
                            class="border border-[#B7A693]
                                   px-6 py-3 rounded-md
                                   hover:bg-[#EEE6D6]">

                            Tulis Ulasan

                        </button>

                    </div>

                    <!-- CARD REVIEW -->
                    <div class="mt-10 space-y-8">

                        <!-- REVIEW 1 -->
                        <div
                            class="bg-[#FBF7ED]
                                   border border-[#D7CCBE]
                                   rounded-xl p-8">

                            <div class="flex justify-between">

                                <div class="flex gap-5">

                                    <!-- AVATAR -->
                                    <div
                                        class="w-14 h-14 rounded-full
                                               bg-[#F2D1C4]
                                               flex items-center justify-center
                                               font-bold">

                                        A

                                    </div>

                                    <!-- NAMA -->
                                    <div>

                                        <h3 class="font-bold text-xl">

                                            Andi Saputra

                                        </h3>

                                        <p class="text-sm text-[#7A6D61]">

                                            12 Mei 2025

                                        </p>

                                    </div>

                                </div>

                                <!-- BINTANG -->
                                <div class="text-xl">

                                    ⭐⭐⭐⭐⭐

                                </div>

                            </div>

                            <!-- ISI -->
                            <p
                                class="mt-6 text-[18px]
                                       leading-9 text-[#40342E]">

                                Buku ini sangat bagus untuk memahami
                                hubungan antara matematika dan alam.
                                Penjelasannya detail dan mudah dipahami.

                            </p>

                        </div>

                        <!-- REVIEW 2 -->
                        <div
                            class="bg-[#FBF7ED]
                                   border border-[#D7CCBE]
                                   rounded-xl p-8">

                            <div class="flex justify-between">

                                <div class="flex gap-5">

                                    <div
                                        class="w-14 h-14 rounded-full
                                               bg-[#F2D1C4]
                                               flex items-center justify-center
                                               font-bold">

                                        S

                                    </div>

                                    <div>

                                        <h3 class="font-bold text-xl">

                                            Siti Rahma

                                        </h3>

                                        <p class="text-sm text-[#7A6D61]">

                                            20 Mei 2025

                                        </p>

                                    </div>

                                </div>

                                <div class="text-xl">

                                    ⭐⭐⭐⭐☆

                                </div>

                            </div>

                            <p
                                class="mt-6 text-[18px]
                                       leading-9 text-[#40342E]">

                                Desain bukunya menarik dan isi materinya
                                sangat mendalam. Cocok untuk mahasiswa
                                dan peneliti.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="bg-[#3B2019] mt-20 py-16 text-center text-[#C7B1A6]">

        <h2 class="text-5xl font-bold font-judul">

            Lexicon Librium

        </h2>

        <!-- MENU -->
        <div class="flex justify-center gap-10 mt-8 text-sm">

            <a href="#">Terms of Access</a>

            <a href="#">Privacy Policy</a>

            <a href="#">Archival Standards</a>

            <a href="#">Contact Librarian</a>

        </div>

        <!-- COPYRIGHT -->
        <p class="mt-8 text-xs tracking-[2px]">

            © MMXXIV Lexicon Librium.
            All Rights Reserved.

        </p>

    </footer>

</body>
</html>