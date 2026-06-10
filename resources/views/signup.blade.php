<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lexicon Librium - Access the Archive</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=JetBrains+Mono:wght@500&amp;family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#ece0dc",
                        "on-tertiary-fixed": "#201a18",
                        "outline-variant": "#d3c3c0",
                        "error": "#ba1a1a",
                        "on-primary-container": "#ae8d87",
                        "on-primary-fixed-variant": "#5b403c",
                        "primary-fixed": "#ffdad4",
                        "secondary": "#75584d",
                        "error-container": "#ffdad6",
                        "surface-container": "#efefd7",
                        "tertiary-container": "#322c29",
                        "surface-container-highest": "#e4e4cc",
                        "on-error": "#ffffff",
                        "surface-dim": "#dbdcc3",
                        "inverse-surface": "#303221",
                        "on-surface": "#1b1d0e",
                        "on-primary": "#ffffff",
                        "background": "#fbfbe2",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#5b4137",
                        "on-secondary-container": "#795c51",
                        "surface-tint": "#745853",
                        "on-secondary": "#ffffff",
                        "primary": "#271310",
                        "primary-container": "#3e2723",
                        "on-primary-fixed": "#2b1613",
                        "secondary-fixed-dim": "#e4beb2",
                        "secondary-container": "#fed7ca",
                        "on-tertiary-fixed-variant": "#4c4542",
                        "on-background": "#1b1d0e",
                        "tertiary-fixed-dim": "#cfc4c0",
                        "on-error-container": "#93000a",
                        "primary-fixed-dim": "#e3beb8",
                        "outline": "#827472",
                        "surface-variant": "#e4e4cc",
                        "surface-bright": "#fbfbe2",
                        "tertiary": "#1d1815",
                        "surface": "#fbfbe2",
                        "surface-container-low": "#f5f5dc",
                        "on-secondary-fixed": "#2b160f",
                        "inverse-primary": "#e3beb8",
                        "secondary-fixed": "#ffdbce",
                        "surface-container-high": "#eaead1",
                        "on-surface-variant": "#504442",
                        "surface-container-lowest": "#ffffff",
                        "inverse-on-surface": "#f2f2d9",
                        "on-tertiary-container": "#9c938f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "margin-desktop": "40px",
                        "gutter": "24px",
                        "base": "4px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Libre Caslon Text"],
                        "display-lg": ["Libre Caslon Text"],
                        "display-lg-mobile": ["Libre Caslon Text"],
                        "label-sm": ["JetBrains Mono"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
<style>
        .custom-shadow {
            box-shadow: 0 12px 32px -12px rgba(62, 39, 35, 0.15);
        }
        .btn-shadow {
            box-shadow: 0 2px 0 0 #271310;
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md antialiased selection:bg-secondary-container selection:text-on-secondary-container">
<!-- Minimal Header for Focused View (Login) -->
<header class="w-full px-margin-mobile md:px-margin-desktop py-6 flex items-center justify-between border-b border-surface-variant">
<a class="inline-flex items-center gap-2 text-on-surface hover:text-primary transition-colors group" href="{{ url('/') }}">
    <span class="material-symbols-outlined transition-transform group-hover:-translate-x-1" data-icon="arrow_back">arrow_back</span>
    <span class="font-body-md font-medium">Return</span>
</a>
<div class="flex items-center gap-3 text-primary">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="font-headline-md text-headline-md text-primary tracking-tight hidden sm:block">Lexicon Librium</h2>
</div>
<div class="w-24"></div> <!-- Spacer to center logo properly if needed, or just flex-between balances it if we assume visual weight is okay -->
</header>
<!-- Main Content -->
<main class="flex-grow flex items-center justify-center p-margin-mobile md:p-margin-desktop">
<!-- Login Card -->
<div class="w-full max-w-4xl bg-surface-container-lowest rounded-xl custom-shadow border border-outline-variant/50 overflow-hidden flex flex-col md:flex-row">
<!-- Left Side: Atmospheric Image -->
<div class="hidden md:block md:w-[45%] relative bg-surface-dim border-r border-outline-variant/30">
<div class="absolute inset-0 bg-cover bg-center" data-alt="A macro shot of a row of ancient, leather-bound books resting on a polished mahogany shelf inside a dimly lit traditional library. The lighting is warm and dramatic, highlighting the gold leaf embossing on the spines and the rich espresso and cocoa tones of the aged leather covers. Dust motes gently catch the amber light filtering from an off-screen reading lamp, creating a quiet, scholarly, and timeless academic mood that perfectly complements an antiquarian digital aesthetic." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCG_OMGDRJIHvuj3LU_QsYa3tT0wzQm1HWAyBlbza3xZuKfeteyocwWKZFB8PQsyx_fJNBEq5uvNP-1_F0dsGKbE0QC3K1YEp4ipG-lso4RJeaTioTu3oW-LZ6eDWqfXXXs9oqcaCZFw5XEOmfCaV-EepW4xy8nF8CsVh-pgsg_I2cbvKdWXVhRTIRTsNzZIOQxpXN1dsi2n0jgdwFthV0lHCfZf137koqVGKFED7D91FOW9bh__KBMDWdll3AfevODTAVH2xj5VpN2');">
</div>
<!-- Subtle overlay for text readability if needed, though this design keeps it purely decorative -->
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent"></div>
<div class="absolute bottom-8 left-8 right-8">
<p class="font-headline-md text-headline-md text-surface-bright italic">"A sanctuary for the preservation of thought."</p>
</div>
</div>
<!-- Right Side: Login Form -->
<div class="w-full md:w-[55%] p-8 md:p-12 lg:p-16 flex flex-col justify-center bg-surface-container-lowest">
<div class="mb-8">
<h1 class="font-headline-md text-[32px] leading-10 text-primary mb-3">Join the Archive</h1>
<p class="font-body-md text-on-surface-variant">Begin your stewardship of knowledge. Register below to access the repository.</p>
</div>
<form action="#" class="flex flex-col gap-6" method="POST">
<!-- Email Input -->
<div class="flex flex-col gap-2">
<label class="font-label-sm text-label-sm text-on-surface uppercase tracking-wider" for="full-name">Full Name</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]">person</span>
</div>
<input class="w-full pl-11 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-on-surface placeholder:text-outline focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors" id="full-name" name="full-name" placeholder="Scholar Name" required="" type="text"/>
</div>
</div><div class="flex flex-col gap-2">
<label class="font-label-sm text-label-sm text-on-surface uppercase tracking-wider" for="email">Email Address</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]" data-icon="mail">mail</span>
</div>
<input class="w-full pl-11 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-on-surface placeholder:text-outline focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors" id="email" name="email" placeholder="scholar@institution.edu" required="" type="email"/>
</div>
</div>
<!-- Password Input -->
<div class="flex flex-col gap-2">
<label class="font-label-sm text-label-sm text-on-surface uppercase tracking-wider" for="password">Password</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]" data-icon="lock">lock</span>
</div>
<input class="w-full pl-11 pr-11 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-on-surface placeholder:text-outline focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-colors" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button aria-label="Toggle password visibility" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-outline hover:text-on-surface transition-colors focus:outline-none" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="visibility">visibility</span>
</button>
</div>
<p class="text-label-sm text-on-surface-variant mt-1">Must be at least 8 characters long.</p></div>
<!-- Options Row -->
<!-- Submit Button -->
<button class="mt-4 w-full py-3.5 bg-primary-container hover:bg-primary text-on-primary rounded-lg font-body-md font-medium transition-colors btn-shadow flex items-center justify-center gap-2" type="submit">Create Account <span class="material-symbols-outlined text-[20px]">arrow_forward</span></button>
</form>
<!-- Footer Link -->
<div class="mt-8 pt-6 border-t border-surface-variant text-center"><p class="font-body-md text-on-surface-variant">
                        Already have an account? 
                        <a class="text-primary font-medium hover:underline underline-offset-4 transition-all decoration-primary/30 hover:decoration-primary" href="{{ url('signin') }}">Sign In</a>
</p></div>
</div>
</div>
</main>
</body></html>