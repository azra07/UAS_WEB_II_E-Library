<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lexicon Librium - Welcome to the Archives of Knowledge</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Libre+Caslon+Text:wght@400;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config injected from system prompt -->
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
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "margin-mobile": "16px",
                      "base": "4px",
                      "gutter": "24px",
                      "margin-desktop": "40px",
                      "container-max": "1280px"
              },
              "fontFamily": {
                      "display-lg": [
                              "Libre Caslon Text"
                      ],
                      "headline-md": [
                              "Libre Caslon Text"
                      ],
                      "body-lg": [
                              "Inter"
                      ],
                      "display-lg-mobile": [
                              "Libre Caslon Text"
                      ],
                      "label-sm": [
                              "JetBrains Mono"
                      ],
                      "body-md": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "display-lg": [
                              "48px",
                              {
                                      "lineHeight": "56px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "headline-md": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "400"
                              }
                      ],
                      "display-lg-mobile": [
                              "32px",
                              {
                                      "lineHeight": "40px",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-sm": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "500"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
                              }
                      ]
              }
      },
          },
        }
    </script>
<style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #efefd7; 
        }
        ::-webkit-scrollbar-thumb {
            background: #8d6e63; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3e2723; 
        }

        body {
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            opacity: 0.4;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100' height='100' filter='url(%23noise)' opacity='0.08'/%3E%3C/svg%3E");
            pointer-events: none;
        }

        .hero-blend {
            background: linear-gradient(to right, rgba(245, 245, 220, 0.95) 0%, rgba(245, 245, 220, 0.7) 50%, rgba(245, 245, 220, 0.1) 100%);
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .float-subtle {
            animation: float 6s ease-in-out infinite;
        }
        
        .vintage-border {
            border: 1px solid #d3c3c0; /* outline-variant */
            position: relative;
        }
        .vintage-border::before, .vintage-border::after {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            border: 1px solid #827472; /* outline */
        }
        .vintage-border::before { top: -4px; left: -4px; border-right: none; border-bottom: none; }
        .vintage-border::after { bottom: -4px; right: -4px; border-left: none; border-top: none; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">
<!-- TopAppBar JSON Component -->
<header class="w-full top-0 sticky z-50 border-b border-outline-variant dark:border-outline bg-background dark:bg-surface-dim transition-all duration-200" id="topAppBar">
<div class="flex justify-between items-center h-16 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<!-- Brand -->
<div class="flex items-center gap-2 cursor-pointer transition-all duration-200 group">
<span class="material-symbols-outlined text-primary dark:text-primary-fixed group-hover:scale-110 transition-transform" style="font-variation-settings: 'FILL' 1;">
                    menu_book
                </span>
<span class="font-display-lg text-headline-md text-primary dark:text-primary-fixed tracking-tight">Lexicon Librium</span>
</div>
<!-- Global Nav (Hidden on mobile) -->
<nav class="hidden md:flex items-center h-full">
<ul class="flex h-full">
</li>
</ul>
</nav>
<!-- Trailing Actions -->
<div class="flex items-center gap-4">
<button aria-label="Notifications" class="text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
<span class="material-symbols-outlined">notifications</span>
</button>
<button aria-label="Settings" class="text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="w-8 h-8 rounded-full bg-surface-container-high border border-outline-variant overflow-hidden cursor-pointer hover:shadow-md transition-shadow">
<img alt="Administrator Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5BahKF4zD660A0xworPDmYpp_cVoDA-Uw38_Z0L50JhspkYgwD928No2VlNW5T9-6nQusHHcGtgxE-jhucMk6HdXjYEWNrCpe77GHA20Ur15m8K_t2_8XjCNRIzgUP0ch0f092euKntY5jxsW5QffzluSat1jaxo6KxPBl5MphEVyhjGsxe-SC8a2Ce62aUAU6OgjbWZXUqQv8_MHVs5gFISNSUP8CN59Klv2EcRyLF_x48r_2r-mswvy0Pg0olmumuA_0djuV2Tv"/>
</div>
</div>
</div>
</header>
<main class="flex-grow flex flex-col items-center">
<!-- Hero Section -->
<section class="w-full relative min-h-[819px] flex items-center overflow-hidden border-b border-outline-variant">
<!-- Background Image -->
<div class="absolute inset-0 w-full h-full z-0">
<img alt="Grand Library Interior" class="w-full h-full object-cover object-right" data-alt="A grand, classic library interior featuring towering dark wooden bookshelves filled with old leather-bound books. Soft, warm sunlight streams through tall arched windows, casting long dramatic shadows across a polished parquet floor. Dust motes dance in the light rays. The atmosphere is quiet, scholarly, and timeless, embodying an Antiquarian Digital aesthetic with rich deep browns, amber lighting, and cream highlights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDn2u2t3ROX7WR4H3H4KefmdLgZeexZGf7mL5n5PxQjQjRtVCgVYjWKia0LW9oV72DUtgs3HF7SEiCPQcJOh6gskMRNoMThkc8dqeD4v2v_vWb9A4bR599Lfls0Cjs-YSOb9GRb5Nsz8jWei6Y_WfrnizpGL9rJUTyB8Bd65l18FheMt0TMxeEMlVZN6RO5oi7rGkUkeVuXVrgZJivJb6W6-J3bZggRZeZDDqtm1lAJgB1hJLKJ_sCNBxKA0MWN4fzi_OCWrag_BQeB"/>
<div class="absolute inset-0 bg-surface-container-low/90 md:bg-transparent md:hero-blend"></div>
</div>
<!-- Content Container -->
<div class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-16 md:py-24 flex flex-col md:w-2/3 lg:w-1/2 items-start">
    
    <div class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container-high border border-outline-variant rounded-full mb-6">
        <span class="material-symbols-outlined text-sm text-on-surface-variant" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant tracking-widest uppercase">E-Library Management System</span>
    </div>

    <div class="bg-surface-container-low/85 backdrop-blur-md border border-outline-variant p-6 md:p-8 rounded-xl shadow-lg w-full mb-8">
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4">
            Welcome to the Archives of Knowledge
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
            Lexicon Librium bridges the tactile heritage of classic libraries with the efficiency of modern digital systems. Manage vast collections, oversee patron circulation, and preserve intellectual history with an interface designed for scholars and bibliophiles alike.
        </p>
    </div>

    <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mb-8">
        <a href="{{ url('admin/dashboard') }}" class="bg-primary-container text-on-primary font-label-sm text-label-sm uppercase tracking-widest px-8 py-4 rounded flex justify-center items-center gap-2 hover:bg-primary transition-colors shadow-[0_4px_12px_rgba(62,39,35,0.15)] hover:translate-y-[-2px] duration-200">
            <span class="material-symbols-outlined">search</span>
            Explore Catalog
        </a>
    </div>
<!-- Quick Stats -->
<div class="mt-16 bg-surface-container-low/90 backdrop-blur-sm border border-outline-variant rounded p-6 flex flex-wrap gap-8 md:gap-16 w-full shadow-sm">
    <div class="flex flex-col">
        <span class="font-display-lg text-headline-md text-primary">24k+</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Volumes</span>
    </div>
    <div class="flex flex-col">
        <span class="font-display-lg text-headline-md text-primary">1.2k</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Active Patrons</span>
    </div>
    <div class="flex flex-col">
        <span class="font-display-lg text-headline-md text-primary">3</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Branches</span>
    </div>
</div>
</div>
</section>
<!-- Features Section: Library at a Glance -->
<section class="w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-24">
<div class="text-center mb-16">
<h2 class="font-display-lg-mobile md:font-display-lg text-headline-md md:text-display-lg-mobile text-primary mb-4">Library at a Glance</h2>
<div class="w-24 h-1 bg-outline-variant mx-auto mb-6"></div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                    A comprehensive suite of tools designed to maintain the order, accessibility, and prestige of your institution's collections.
                </p>
</div>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Feature 1: Large Card -->
<div class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-lg p-8 relative overflow-hidden group hover:shadow-[0_12px_24px_rgba(62,39,35,0.08)] transition-all duration-300">
<div class="absolute top-0 right-0 p-8 opacity-10 group-hover:scale-110 transition-transform duration-500">
<span class="material-symbols-outlined text-[120px] text-primary" style="font-variation-settings: 'FILL' 1;">menu_book</span>
</div>
<div class="relative z-10 h-full flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 border border-outline-variant">
<span class="material-symbols-outlined text-primary">library_books</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">Curated Collections</h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                                Organize digital and physical assets with meticulous precision. Utilize custom taxonomies, MARC record integration, and high-fidelity archival metadata structures to keep your catalog impeccable.
                            </p>
</div>
<div class="mt-8">
<a class="inline-flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-widest text-primary hover:text-on-secondary-container transition-colors group/link" href="#">
                                View Cataloging Tools
                                <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
<!-- Feature 2: Small Card -->
<div class="md:col-span-4 bg-surface-container border border-outline-variant rounded-lg p-8 group hover:shadow-[0_8px_16px_rgba(62,39,35,0.08)] transition-all duration-300 vintage-border">
<div class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center mb-6 border border-outline-variant">
<span class="material-symbols-outlined text-primary">sync_alt</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">Seamless Circulation</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">
                        Streamline loans, returns, and holds. Automated notifications and grace period management ensure materials flow smoothly between the stacks and the patrons.
                    </p>
<a class="inline-flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-widest text-primary hover:text-on-secondary-container transition-colors group/link" href="#">
                        Manage Loans
                        <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<!-- Feature 3: Small Card -->
<div class="md:col-span-4 bg-surface-container-high border border-outline-variant rounded-lg p-8 group hover:shadow-[0_8px_16px_rgba(62,39,35,0.08)] transition-all duration-300">
<div class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center mb-6 border border-outline-variant">
<span class="material-symbols-outlined text-primary">group</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">Patron Empowerment</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">
                        Provide members with a self-service portal to review loan history, place holds, and explore curated reading lists tailored to their academic interests.
                    </p>
<a class="inline-flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-widest text-primary hover:text-on-secondary-container transition-colors group/link" href="#">
                        View Member Directory
                        <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<!-- Feature 4: Medium Horizontal Card with Image -->
<div class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col md:flex-row group hover:shadow-[0_12px_24px_rgba(62,39,35,0.08)] transition-all duration-300">
<div class="md:w-1/2 p-8 flex flex-col justify-center">
<div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mb-6 border border-outline-variant">
<span class="material-symbols-outlined text-primary">analytics</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">Insightful Reporting</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">
                            Generate detailed ledgers on circulation trends, collection vitality, and patron engagement. Data is presented in clean, classic formats ready for administrative review.
                        </p>
<a class="inline-flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-widest text-primary hover:text-on-secondary-container transition-colors group/link" href="#">
                            Generate Reports
                            <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="md:w-1/2 relative min-h-[200px] md:min-h-full border-t md:border-t-0 md:border-l border-outline-variant">
<img alt="Library Analytics Ledger" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A close up of a vintage wooden desk in a library. Resting on the desk are antique ledgers, a brass magnifying glass, and a fountain pen. The lighting is warm and directional, casting soft shadows across the textured cream paper of the open ledger. The overall tone is academic, organized, and historical." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcrivFVBrPWV17XK28QBQ3B3ELkhgN1p0ffCfP8U8MHibXlKdWgPK6QmL0jvpoX8HoD06ucnCTLqBWFo8w67yeU6NjNDsw9iJ97OYoIZM78-csEQU6VHoBaAS0KEkjOBtwu4lw-jzn1-1JVy0YzwuJRUph27n1EDucILWAQpNiipu_lpdo_lxbYaqgvnx_ozfpBkoJ3mBP00w86wGiw9vZ9aRB8nuVlQnvrBXj6XQPsUAaE2xvmj5Ndpf1xIHvI4bHSlS_8v4PWmA_"/>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="w-full bg-surface-container border-y border-outline-variant py-20 mt-12">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center flex flex-col items-center">
<span class="material-symbols-outlined text-4xl text-primary mb-4" style="font-variation-settings: 'FILL' 1;">account_balance</span>
<h2 class="font-display-lg-mobile md:font-display-lg text-headline-md md:text-display-lg-mobile text-primary mb-6 max-w-2xl">
                    Begin Your Stewardship
                </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mb-10">
                    Join institutions worldwide that rely on Lexicon Librium to maintain the dignity and accessibility of their literary assets.
                </p>
<a href="{{ url('login') }}" class="text-sm font-semibold text-[#F6F4E8] bg-[#4A3B32] px-5 py-2.5 rounded-md hover:bg-[#342923] transition shadow-sm">
    Sign In
</a>
</a>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full bg-surface-container-lowest border-t border-outline-variant py-12 mt-auto">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2 opacity-80">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">
                    menu_book
                </span>
<span class="font-display-lg text-body-lg text-primary tracking-tight">Lexicon Librium</span>
</div>
<div class="flex gap-6">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="#">Terms of Service</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="#">Support</a>
</div>
<div class="font-label-sm text-label-sm text-on-surface-variant opacity-60">
                © 2024 Lexicon Systems. All rights reserved.
            </div>
</div>
</footer>
<script>
        // Simple scroll effect for TopAppBar shadow
        window.addEventListener('scroll', () => {
            const topAppBar = document.getElementById('topAppBar');
            if (window.scrollY > 10) {
                topAppBar.classList.add('shadow-sm');
            } else {
                topAppBar.classList.remove('shadow-sm');
            }
        });
    </script>
</body></html>