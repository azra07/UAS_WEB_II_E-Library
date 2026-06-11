<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lexicon Librium</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body{
      font-family: 'Inter', sans-serif;
      background: #F5F2DE;
      color: #2F1C17;
    }

    .title-font{
      font-family: 'Cormorant Garamond', serif;
    }

    .book-card:hover img{
      transform: scale(1.03);
    }

    .book-card img{
      transition: 0.3s;
    }

    .custom-shadow{
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="border-b border-[#D8D2C0] bg-[#F5F2DE] sticky top-0 z-50">
  <div class="max-w-[1600px] mx-auto px-8 py-5 flex items-center justify-between">

    <div class="flex items-center gap-16">

      <h1 class="title-font text-5xl font-bold">
        Lexicon Librium
      </h1>

      <div class="flex gap-10 text-[17px]">

        <a href="#" class="font-semibold border-b-2 border-[#2F1C17] pb-1">
          Catalog
        </a>

        <a href="#" class="hover:text-[#6B4B3E]">
          Categories
        </a>

        <a href="#" class="hover:text-[#6B4B3E]">
          Reading List
        </a>

      </div>

    </div>

    <div class="flex items-center gap-6">

      <div class="relative">
        <input
          type="text"
          placeholder="Search the leather-bound archives..."
          class="w-[420px] bg-transparent border border-[#BDAF9C] rounded-lg py-3 px-5 outline-none"
        >
      </div>

      <button>
        👤
      </button>

    </div>

  </div>
</nav>

<!-- HEADER -->
<section class="max-w-[1600px] mx-auto px-8 pt-10">

  <p class="text-sm text-[#8A7B6E] mb-4">
    Archives / Special Collections / The Reading Room
  </p>

  <div class="flex justify-between items-center">

    <div>
      <h1 class="title-font text-6xl font-bold mb-2">
        The Scholar's Catalog
      </h1>

      <p class="text-[#5C5148] text-lg">
        12,402 digital manuscripts and leather-bound volumes available.
      </p>
    </div>

    <div class="flex items-center gap-4">

      <select class="border border-[#BDAF9C] bg-transparent px-5 py-3 rounded-lg">
        <option>All Genres</option>
      </select>

      <button class="border border-[#BDAF9C] px-5 py-3 rounded-lg">
        Available Now
      </button>

      <button class="border border-[#BDAF9C] px-5 py-3 rounded-lg">
        Sort : Date
      </button>

    </div>

  </div>

</section>

<!-- BOOK GRID -->
<section class="max-w-[1600px] mx-auto px-8 py-10">

  <div class="grid grid-cols-5 gap-8">

    <!-- BOOK -->
    <div class="book-card">

      <div class="overflow-hidden rounded-lg custom-shadow">
        <img
          src="https://images.unsplash.com/photo-1544947950-fa07a98d237f"
          class="w-full h-[470px] object-cover"
        >
      </div>

      <h2 class="title-font text-4xl mt-5 font-semibold">
        The Alchemist's Journal
      </h2>

      <p class="text-[#6B5B50] mt-1">
        Nicolas Flamel
      </p>

      <div class="flex items-center gap-2 mt-3 text-[#6E584D]">
        ★★★★★
        <span class="text-sm">(128)</span>
      </div>

    </div>

    <!-- BOOK -->
    <div class="book-card">

      <div class="overflow-hidden rounded-lg custom-shadow">
        <img
          src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
          class="w-full h-[470px] object-cover"
        >
      </div>

      <h2 class="title-font text-4xl mt-5 font-semibold">
        Observations on Nature
      </h2>

      <p class="text-[#6B5B50] mt-1">
        Alexander von Humboldt
      </p>

      <div class="flex items-center gap-2 mt-3 text-[#6E584D]">
        ★★★★★
        <span class="text-sm">(45)</span>
      </div>

    </div>

    <!-- BOOK -->
    <div class="book-card">

      <div class="overflow-hidden rounded-lg custom-shadow">
        <img
          src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da"
          class="w-full h-[470px] object-cover"
        >
      </div>

      <h2 class="title-font text-4xl mt-5 font-semibold">
        Principia Mathematica
      </h2>

      <p class="text-[#6B5B50] mt-1">
        Isaac Newton
      </p>

      <div class="flex items-center gap-2 mt-3 text-[#6E584D]">
        ★★★★★
        <span class="text-sm">(312)</span>
      </div>

    </div>

    <!-- BOOK -->
    <div class="book-card">

      <div class="overflow-hidden rounded-lg custom-shadow">
        <img
          src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d"
          class="w-full h-[470px] object-cover"
        >
      </div>

      <h2 class="title-font text-4xl mt-5 font-semibold">
        The Odyssey
      </h2>

      <p class="text-[#6B5B50] mt-1">
        Homer
      </p>

      <div class="flex items-center gap-2 mt-3 text-[#6E584D]">
        ★★★★★
        <span class="text-sm">(567)</span>
      </div>

    </div>

    <!-- BOOK -->
    <div class="book-card">

      <div class="overflow-hidden rounded-lg custom-shadow">
        <img
          src="https://images.unsplash.com/photo-1516979187457-637abb4f9353"
          class="w-full h-[470px] object-cover"
        >
      </div>

      <h2 class="title-font text-4xl mt-5 font-semibold">
        Flora of Highlands
      </h2>

      <p class="text-[#6B5B50] mt-1">
        Elizabeth Blackwell
      </p>

      <div class="flex items-center gap-2 mt-3 text-[#6E584D]">
        ★★★★★
        <span class="text-sm">(82)</span>
      </div>

    </div>

  </div>

</section>

<!-- MEMBERSHIP -->
<section class="max-w-[1600px] mx-auto px-8 pb-16">

  <div class="bg-[#4A241C] rounded-xl p-10 flex justify-between items-center">

    <div>

      <h2 class="title-font text-4xl text-[#E6C8B8] font-semibold">
        Scholar's Tier Membership
      </h2>

      <p class="text-[#C9B0A2] mt-2">
        You have full access to the Private Archival collection.
      </p>

    </div>

    <button class="bg-[#F5F2DE] px-8 py-4 rounded-lg font-medium">
      View Benefits
    </button>

  </div>

</section>

<!-- PAGINATION -->
<section class="pb-20">

  <div class="flex justify-center items-center gap-4">

    <button class="w-12 h-12 border border-[#D1C6B5] rounded-lg">
      <
    </button>

    <button class="w-12 h-12 bg-[#2F1C17] text-white rounded-lg">
      1
    </button>

    <button class="w-12 h-12 border border-[#D1C6B5] rounded-lg">
      2
    </button>

    <button class="w-12 h-12 border border-[#D1C6B5] rounded-lg">
      3
    </button>

    <button class="w-12 h-12 border border-[#D1C6B5] rounded-lg">
      >
    </button>

  </div>

</section>

<!-- FOOTER -->
<footer class="bg-[#3A1F19] py-20 text-center text-[#C5AFA3]">

  <h2 class="title-font text-5xl font-bold mb-8">
    Lexicon Librium
  </h2>

  <div class="flex justify-center gap-10 mb-8">

    <a href="#">Terms</a>
    <a href="#">Privacy</a>
    <a href="#">Contact</a>

  </div>

  <p class="text-sm opacity-70">
    © MMXXIV Lexicon Librium. All Rights Reserved.
  </p>

</footer>

</body>
</html>