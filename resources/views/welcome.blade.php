<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lexicon Librium - The Academic Digital Archive</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&family=Libre+Caslon+Text:wght@400;700&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-container-lowest": "#ffffff",
                      "outline-variant": "#d3c3c0",
                      "error": "#ba1a1a",
                      "on-secondary": "#ffffff",
                      "primary-fixed": "#ffdad4",
                      "secondary-fixed-dim": "#e4beb2",
                      "secondary-fixed": "#ffdbce",
                      "on-primary-fixed-variant": "#5b403c",
                      "surface-variant": "#e4e4cc",
                      "surface-container-high": "#eaead1",
                      "on-tertiary-container": "#9c938f",
                      "on-tertiary": "#ffffff",
                      "on-primary-container": "#ae8d87",
                      "surface-bright": "#fbfbe2",
                      "on-primary": "#ffffff",
                      "surface-container-highest": "#e4e4cc",
                      "primary": "#271310",
                      "background": "#fbfbe2",
                      "surface-container": "#efefd7",
                      "on-secondary-fixed": "#2b160f",
                      "surface-container-low": "#f5f5dc",
                      "primary-fixed-dim": "#e3beb8",
                      "on-tertiary-fixed-variant": "#4c4542",
                      "error-container": "#ffdad6",
                      "on-secondary-container": "#795c51",
                      "tertiary-fixed-dim": "#cfc4c0",
                      "inverse-on-surface": "#f2f2d9",
                      "on-error-container": "#93000a",
                      "on-surface-variant": "#504442",
                      "on-error": "#ffffff",
                      "on-primary-fixed": "#2b1613",
                      "on-background": "#1b1d0e",
                      "secondary-container": "#fed7ca",
                      "outline": "#827472",
                      "primary-container": "#3e2723",
                      "inverse-surface": "#303221",
                      "on-surface": "#1b1d0e",
                      "surface-tint": "#745853",
                      "tertiary-container": "#322c29",
                      "on-secondary-fixed-variant": "#5b4137",
                      "on-tertiary-fixed": "#201a18",
                      "surface": "#fbfbe2",
                      "secondary": "#75584d",
                      "inverse-primary": "#e3beb8",
                      "tertiary": "#1d1815",
                      "surface-dim": "#dbdcc3",
                      "tertiary-fixed": "#ece0dc"
              },
              "fontFamily": {
                      "display-lg": ["Libre Caslon Text"],
                      "headline-md": ["Libre Caslon Text"],
                      "body-lg": ["Inter"],
                      "display-lg-mobile": ["Libre Caslon Text"],
                      "label-sm": ["JetBrains Mono"],
                      "body-md": ["Inter"]
              }
            }
          }
        }
    </script>
<style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #efefd7; }
        ::-webkit-scrollbar-thumb { background: #8d6e63; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #3e2723; }

        body { position: relative; }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            opacity: 0.4;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100' height='100' filter='url(%23noise)' opacity='0.08'/%3E%3C/svg%3E");
            pointer-events: none;
        }

        .hero-blend { background: linear-gradient(to right, rgba(245, 245, 220, 0.95) 0%, rgba(245, 245, 220, 0.7) 50%, rgba(245, 245, 220, 0.1) 100%); }
        
        .vintage-border {
            border: 1px solid #d3c3c0;
            position: relative;
        }
        .vintage-border::before, .vintage-border::after {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            border: 1px solid #827472;
        }
        .vintage-border::before { top: -4px; left: -4px; border-right: none; border-bottom: none; }
        .vintage-border::after { bottom: -4px; right: -4px; border-left: none; border-top: none; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">

<header class="w-full top-0 sticky z-50 border-b border-outline-variant dark:border-outline bg-background transition-all duration-200" id="topAppBar">
<div class="flex justify-between items-center h-16 px-4 md:px-10 max-w-7xl mx-auto">
    <div class="flex items-center gap-2 cursor-pointer transition-all duration-200 group">
        <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform" style="font-variation-settings: 'FILL' 1;">menu_book</span>
        <span class="font-display-lg text-2xl font-bold text-primary tracking-tight">Lexicon Librium</span>
    </div>

    <div class="flex items-center gap-4">
        @auth
            <a href="{{ Auth::user()->role === 'admin' ? url('/admin/dashboard') : route('user.dashboard') }}" class="font-label-sm text-xs font-semibold uppercase tracking-widest text-primary hover:text-on-surface-variant transition-colors">
                Enter Portal →
            </a>
        @else
            <a href="{{ route('login') }}" class="font-label-sm text-xs font-semibold uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors">
                Log In
            </a>
            <a href="{{ route('register') }}" class="bg-primary text-on-primary px-5 py-2 rounded font-label-sm text-xs font-semibold uppercase tracking-widest hover:bg-[#4A3B32] transition-colors shadow-sm">
                Register
            </a>
        @endauth
    </div>
</div>
</header>

<main class="flex-grow flex flex-col items-center">
<section class="w-full relative min-h-[800px] flex items-center overflow-hidden border-b border-outline-variant">
    <div class="absolute inset-0 w-full h-full z-0">
        <img alt="Grand Library Interior" class="w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2000&auto=format&fit=crop"/>
        <div class="absolute inset-0 bg-surface-container-low/90 md:bg-transparent md:hero-blend"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 md:px-10 py-16 flex flex-col md:w-2/3 lg:w-1/2 items-start">
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container-high border border-outline-variant rounded-full mb-6">
            <span class="material-symbols-outlined text-sm text-on-surface-variant" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
            <span class="font-label-sm text-xs font-bold text-on-surface-variant tracking-widest uppercase">Academic Digital Archive</span>
        </div>

        <div class="bg-surface-container-low/85 backdrop-blur-md border border-outline-variant p-6 md:p-8 rounded-xl shadow-lg w-full mb-8">
            <h1 class="font-display-lg text-4xl md:text-5xl font-bold text-primary mb-4 leading-tight">
                Welcome to the Archives of Knowledge
            </h1>
            <p class="font-body-lg text-lg text-on-surface-variant max-w-xl leading-relaxed">
                Lexicon Librium bridges the tactile heritage of classic libraries with the efficiency of modern digital systems. Explore vast collections, borrow rare manuscripts, and curate your personal reading list in a space designed for scholars and bibliophiles alike.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mb-8">
            <a href="{{ Auth::check() ? (Auth::user()->role === 'admin' ? url('/admin/dashboard') : route('user.dashboard')) : route('login') }}" class="bg-primary-container text-on-primary font-label-sm text-xs font-bold uppercase tracking-widest px-8 py-4 rounded flex justify-center items-center gap-2 hover:bg-primary transition-colors shadow-md hover:translate-y-[-2px] duration-200">
                <span class="material-symbols-outlined">search</span>
                Explore Catalog
            </a>
        </div>

        <div class="mt-8 bg-surface-container-low/90 backdrop-blur-sm border border-outline-variant rounded p-6 flex flex-wrap gap-8 md:gap-16 w-full shadow-sm">
            <div class="flex flex-col">
                <span class="font-display-lg text-3xl font-bold text-primary">24k+</span>
                <span class="font-label-sm text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Volumes</span>
            </div>
            <div class="flex flex-col">
                <span class="font-display-lg text-3xl font-bold text-primary">1.2k</span>
                <span class="font-label-sm text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Active Readers</span>
            </div>
            <div class="flex flex-col">
                <span class="font-display-lg text-3xl font-bold text-primary">3</span>
                <span class="font-label-sm text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Disciplines</span>
            </div>
        </div>
    </div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 md:px-10 py-24">
    <div class="text-center mb-16">
        <h2 class="font-display-lg text-4xl font-bold text-primary mb-4">Discover Your Library</h2>
        <div class="w-24 h-1 bg-outline-variant mx-auto mb-6"></div>
        <p class="font-body-md text-lg text-on-surface-variant max-w-2xl mx-auto">
            A comprehensive sanctuary designed to support your academic research, intellectual growth, and passion for literature.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <div class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-lg p-8 relative overflow-hidden group hover:shadow-lg transition-all duration-300">
            <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:scale-110 transition-transform duration-500">
                <span class="material-symbols-outlined text-[150px] text-primary" style="font-variation-settings: 'FILL' 1;">menu_book</span>
            </div>
            <div class="relative z-10 h-full flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">library_books</span>
                    </div>
                    <h3 class="font-display-lg text-2xl font-bold text-primary mb-3">Expansive Archives</h3>
                    <p class="font-body-md text-on-surface-variant max-w-md">
                        Navigate through a meticulously organized catalog of digital and physical assets. Filter by specific academic taxonomies to find exactly the manuscript or journal you need for your research.
                    </p>
                </div>
            </div>
        </div>

        <div class="md:col-span-4 bg-surface-container border border-outline-variant rounded-lg p-8 group hover:shadow-lg transition-all duration-300 vintage-border">
            <div class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center mb-6 border border-outline-variant">
                <span class="material-symbols-outlined text-primary">bookmark</span>
            </div>
            <h3 class="font-display-lg text-2xl font-bold text-primary mb-3">Your Reading List</h3>
            <p class="font-body-md text-on-surface-variant mb-6">
                Curate your personal collection of must-read titles. Save books for later, organize your academic sources, and never lose track of a citation again.
            </p>
        </div>

        <div class="md:col-span-4 bg-surface-container-high border border-outline-variant rounded-lg p-8 group hover:shadow-lg transition-all duration-300">
            <div class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center mb-6 border border-outline-variant">
                <span class="material-symbols-outlined text-primary">schedule</span>
            </div>
            <h3 class="font-display-lg text-2xl font-bold text-primary mb-3">Seamless Borrowing</h3>
            <p class="font-body-md text-on-surface-variant mb-6">
                Check out books with a single click. Our system automatically tracks your return dates and provides a clean history of every volume you've studied.
            </p>
        </div>

        <div class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col md:flex-row group hover:shadow-lg transition-all duration-300">
            <div class="md:w-1/2 p-8 flex flex-col justify-center">
                <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 border border-outline-variant">
                    <span class="material-symbols-outlined text-primary">forum</span>
                </div>
                <h3 class="font-display-lg text-2xl font-bold text-primary mb-3">Scholarly Community</h3>
                <p class="font-body-md text-on-surface-variant mb-6">
                    Join a vibrant community of academics and bibliophiles. Share your insights by writing reviews, rate the manuscripts you've read, and discover hidden gems recommended by your peers.
                </p>
            </div>
            <div class="md:w-1/2 relative min-h-[250px] md:min-h-full border-t md:border-t-0 md:border-l border-outline-variant">
                <img alt="Reading a book" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?q=80&w=1000&auto=format&fit=crop"/>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-surface-container border-y border-outline-variant py-20 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center flex flex-col items-center">
        <span class="material-symbols-outlined text-5xl text-primary mb-4" style="font-variation-settings: 'FILL' 1;">account_balance</span>
        <h2 class="font-display-lg text-4xl font-bold text-primary mb-6 max-w-2xl">
            Begin Your Academic Journey
        </h2>
        <p class="font-body-md text-lg text-on-surface-variant max-w-xl mb-10">
            Join thousands of scholars and readers who rely on Lexicon Librium to expand their minds and access world-class literary assets.
        </p>
        <a href="{{ route('register') }}" class="text-sm font-bold tracking-widest uppercase text-[#F6F4E8] bg-[#4A3B32] px-8 py-4 rounded hover:bg-[#342923] transition shadow-md hover:scale-105 duration-200">
            Create Free Account
        </a>
    </div>
</section>
</main>

<footer class="w-full bg-surface-container-lowest border-t border-outline-variant py-12 mt-auto">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center gap-2 opacity-80">
            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">menu_book</span>
            <span class="font-display-lg text-xl font-bold text-primary tracking-tight">Lexicon Librium</span>
        </div>
        <div class="flex gap-6">
            <a class="font-label-sm text-xs font-bold text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="#">Privacy Policy</a>
            <a class="font-label-sm text-xs font-bold text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="#">Terms of Service</a>
            <a class="font-label-sm text-xs font-bold text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="#">Help Desk</a>
        </div>
        <div class="font-label-sm text-xs font-bold text-on-surface-variant opacity-60">
            © {{ date('Y') }} Lexicon Systems. All rights reserved.
        </div>
    </div>
</footer>

<script>
    // Simple scroll effect for TopAppBar shadow
    window.addEventListener('scroll', () => {
        const topAppBar = document.getElementById('topAppBar');
        if (window.scrollY > 10) {
            topAppBar.classList.add('shadow-md');
        } else {
            topAppBar.classList.remove('shadow-md');
        }
    });
</script>
</body></html>
