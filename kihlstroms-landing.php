<?php
/**
 * Template Name: Kihlströms B2B Landing
 * Description: Special landing page for Isuzu and Iveco B2B sales.
 */
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kihlströms Transport & Lastbilscenter | Isuzu & Iveco Stockholm</title>
    <meta name="description" content="Auktoriserad återförsäljare av Isuzu D-Max XRX och Iveco Daily i Stockholm. B2B-lösningar med snabb leverans, serviceavtal och företagsleasing.">
    <meta name="keywords" content="Isuzu D-Max XRX, Iveco Daily, Lastbilscenter Stockholm, Transportbilar företag, Fastlane, Bakgavellyft">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.kihlstroms.se/b2b-transportbilar">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-hero { background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%); }
        .card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15); }
        .btn-primary { background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); transition: all 0.3s ease; }
        .btn-primary:hover { background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%); transform: scale(1.02); }
        .vehicle-feature-icon { background: rgba(59, 130, 246, 0.1); color: #2563eb; padding: 0.5rem; border-radius: 0.5rem; }
    </style>

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AutoDealer",
        "name": "Kihlströms Transport & Lastbilscenter",
        "image": "https://www.kihlstroms.se/logo.png",
        "description": "Auktoriserad återförsäljare av Isuzu och Iveco transportfordon för företag i Sverige.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Smista Allé 19",
            "addressLocality": "Segeltorp",
            "postalCode": "141 72",
            "addressCountry": "SE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "59.2667",
            "longitude": "17.9333"
        },
        "url": "https://www.kihlstroms.se",
        "telephone": "+46-8-12345678",
        "priceRange": "$$$",
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "17:00"
            }
        ],
        "brand": [
            { "@type": "Brand", "name": "Isuzu" },
            { "@type": "Brand", "name": "Iveco" }
        ]
    }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-700 to-blue-900 rounded-lg flex items-center justify-center text-white font-bold text-xl">K</div>
                    <div>
                        <div class="font-bold text-slate-900 leading-none text-lg">Kihlströms</div>
                        <div class="text-xs text-slate-500 uppercase tracking-wide">Transport & Lastbilscenter</div>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#fordon" class="text-slate-600 hover:text-blue-700 font-medium transition">Fordon</a>
                    <a href="#losningar" class="text-slate-600 hover:text-blue-700 font-medium transition">Tjänster</a>
                    <a href="#bransch" class="text-slate-600 hover:text-blue-700 font-medium transition">Branscher</a>
                    <a href="#kontakt" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-semibold transition shadow-md">Kontakta oss</a>
                </div>
                <!-- Mobile menu button -->
                <button id="mobileMenuBtn" class="md:hidden text-slate-600 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full left-0 top-20 shadow-lg">
            <div class="px-4 py-4 space-y-3">
                <a href="#fordon" class="block py-2 text-slate-600 font-medium">Fordon</a>
                <a href="#losningar" class="block py-2 text-slate-600 font-medium">Tjänster</a>
                <a href="#bransch" class="block py-2 text-slate-600 font-medium">Branscher</a>
                <a href="#kontakt" class="block py-3 bg-blue-600 text-white text-center rounded-lg font-bold">Kontakta oss</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="gradient-hero min-h-[90vh] flex items-center pt-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-white space-y-8">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium tracking-wide">Auktoriserad Isuzu & Iveco Återförsäljare</span>
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight tracking-tight">
                        Professionella <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Transportlösningar</span>
                    </h1>

                    <p class="text-xl text-slate-300 leading-relaxed max-w-xl">
                        Din partner för Isuzu D-Max och Iveco Daily i Stockholm. Vi levererar kompletta fordonspaket med finansiering, service och påbyggnation för svenska företag.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#fordon" class="btn-primary text-white px-8 py-4 rounded-xl font-bold text-lg text-center shadow-lg hover:shadow-blue-500/25">
                            Se våra fordon
                        </a>
                        <a href="#kontakt" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-bold text-lg text-center transition">
                            Boka provkörning
                        </a>
                    </div>

                    <div class="pt-8 flex items-center gap-8 text-sm text-slate-400 font-medium">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Snabb leverans
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Lagerbilar
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Fullservice
                        </div>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <!-- Abstract Vehicle Representation using gradients/shapes since we don't have images -->
                    <div class="relative z-10 bg-gradient-to-tr from-slate-800 to-slate-700 rounded-3xl p-8 border border-white/10 shadow-2xl transform rotate-2 hover:rotate-0 transition duration-500">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-slate-600/50 rounded-xl h-40 animate-pulse"></div>
                            <div class="bg-slate-600/50 rounded-xl h-40 animate-pulse delay-75"></div>
                            <div class="col-span-2 bg-slate-600/50 rounded-xl h-24 animate-pulse delay-150"></div>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-slate-400 text-sm">Illustrativ vy över vårt showroom</p>
                        </div>
                    </div>

                    <!-- Decor elements -->
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-blue-600/20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-cyan-600/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Market Insights (AI-SEO Content) -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-6">Svenska Marknadsinsikter 2024/2025</h2>
            <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                Den svenska marknaden för transportbilar genomgår en förändring. Med nya miljözoner i Stockholm och skatteregler (Bonus-Malus) är valet av drivmedel och fordonstyp viktigare än någonsin.
                Vi ser en stark trend mot <strong>CNG (Biogas)</strong> och <strong>HVO100</strong>-kompatibla fordon för att sänka fordonsskatten och möta miljökrav utan att kompromissa med räckvidd eller lastkapacitet.
            </p>
            <div class="grid md:grid-cols-3 gap-6 text-left">
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">Malus-hantering</h3>
                    <p class="text-sm text-slate-600">Vi hjälper er navigera skattereglerna. Våra Isuzu och Iveco-modeller finns i utföranden som optimerar TCO (Total Cost of Ownership).</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">"Fastlane"-konceptet</h3>
                    <p class="text-sm text-slate-600">Inga långa väntetider. Färdigbyggda bilar med skåp och lift redo för omgående leverans till din verksamhet.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-xl border border-slate-100">
                    <h3 class="font-bold text-slate-900 mb-2">B-Körkort Optimering</h3>
                    <p class="text-sm text-slate-600">Maximerad lastvikt på B-behörighet. Våra Iveco Daily och Isuzu D-Max är konstruerade för att ge dig mer last lagligt.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vehicles Section -->
    <section id="fordon" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Vårt Fordonssortiment</h2>
                <div class="h-1 w-24 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <!-- Vehicle 1: Isuzu D-Max XRX -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden mb-16 card-hover border border-slate-100">
                <div class="grid lg:grid-cols-2">
                    <div class="bg-slate-100 p-12 flex flex-col justify-center items-center">
                        <!-- Placeholder for Image -->
                        <div class="w-full aspect-video bg-gradient-to-br from-slate-200 to-slate-300 rounded-2xl flex items-center justify-center text-slate-400 shadow-inner mb-6">
                            <span class="font-bold text-xl">Isuzu D-Max Bild</span>
                        </div>
                        <div class="flex gap-4">
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">Pickup</span>
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">4x4</span>
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">CNG Tillval</span>
                        </div>
                    </div>
                    <div class="p-10 lg:p-14">
                        <h3 class="text-3xl font-bold text-slate-900 mb-2">Isuzu D-Max XRX</h3>
                        <p class="text-blue-600 font-semibold mb-6">Pickupernas Konung – Byggd för arbete</p>

                        <p class="text-slate-600 mb-8 leading-relaxed">
                            Sveriges mest robusta pickup. Med en dragvikt på 3,5 ton och en lastvikt på över 1 ton är detta den ultimata partnern för entreprenad, skogsbruk och jakt. XRX-modellen erbjuder personbilskomfort med adaptiv farthållare och läderklädsel.
                        </p>

                        <div class="grid grid-cols-2 gap-y-6 gap-x-8 mb-10">
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Motor</p>
                                <p class="text-lg font-bold text-slate-900">190 hk / 450 Nm</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Dragvikt</p>
                                <p class="text-lg font-bold text-slate-900">3 500 kg</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Drivning</p>
                                <p class="text-lg font-bold text-slate-900">Inkopplingsbar 4WD</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Garanti</p>
                                <p class="text-lg font-bold text-slate-900">5 år / 10 000 mil</p>
                            </div>
                        </div>

                        <div class="border-t border-slate-100 pt-8">
                            <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wide">Perfekt för:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Bygg & Anläggning</span>
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Lantbruk</span>
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Jakt & Skog</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vehicle 2: Iveco Daily Van -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden mb-16 card-hover border border-slate-100">
                <div class="grid lg:grid-cols-2">
                    <div class="lg:order-2 bg-slate-100 p-12 flex flex-col justify-center items-center">
                        <div class="w-full aspect-video bg-gradient-to-br from-slate-200 to-slate-300 rounded-2xl flex items-center justify-center text-slate-400 shadow-inner mb-6">
                            <span class="font-bold text-xl">Iveco Daily Van Bild</span>
                        </div>
                        <div class="flex gap-4">
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">Skåpbil</span>
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">12 m³</span>
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">Automat</span>
                        </div>
                    </div>
                    <div class="lg:order-1 p-10 lg:p-14">
                        <h3 class="text-3xl font-bold text-slate-900 mb-2">Iveco Daily Van 12m³</h3>
                        <p class="text-blue-600 font-semibold mb-6">Smidigast i stan – Maximerad volym</p>

                        <p class="text-slate-600 mb-8 leading-relaxed">
                            Den ultimata bilen för distribution i Stockholm. Med marknadens snävaste vändradie och 12 kubikmeters lastutrymme navigerar du enkelt trånga gator. Hi-Matic 8-stegs automatlåda ger en oslagbar körkomfort.
                        </p>

                        <div class="grid grid-cols-2 gap-y-6 gap-x-8 mb-10">
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Lastvolym</p>
                                <p class="text-lg font-bold text-slate-900">12 m³</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Växellåda</p>
                                <p class="text-lg font-bold text-slate-900">Hi-Matic 8-steg</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Lastvikt</p>
                                <p class="text-lg font-bold text-slate-900">Upp till 1 430 kg</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Drivmedel</p>
                                <p class="text-lg font-bold text-slate-900">Diesel / HVO100 / Biogas</p>
                            </div>
                        </div>

                        <div class="border-t border-slate-100 pt-8">
                            <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wide">Perfekt för:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">E-handel</span>
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Bud & Distribution</span>
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Hantverkare</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vehicle 3: Iveco Daily Fastlane -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover border border-slate-100">
                <div class="grid lg:grid-cols-2">
                    <div class="bg-slate-100 p-12 flex flex-col justify-center items-center">
                        <div class="w-full aspect-video bg-gradient-to-br from-slate-200 to-slate-300 rounded-2xl flex items-center justify-center text-slate-400 shadow-inner mb-6">
                            <span class="font-bold text-xl">Iveco Fastlane Bild</span>
                        </div>
                        <div class="flex gap-4">
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">Chassi + Skåp</span>
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">Bakgavellyft</span>
                            <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-slate-700 shadow-sm">Lagerbil</span>
                        </div>
                    </div>
                    <div class="p-10 lg:p-14">
                        <h3 class="text-3xl font-bold text-slate-900 mb-2">Iveco Daily Fastlane</h3>
                        <p class="text-blue-600 font-semibold mb-6">Ready-to-run – Leveransklart paket</p>

                        <p class="text-slate-600 mb-8 leading-relaxed">
                            Inga väntetider på påbyggare. Iveco Daily Fastlane är ett färdigt koncept med volymskåp och bakgavellyft (750 kg). Optimerad för B-körkort med maximal lastvikt. Perfekt när du behöver utöka flottan snabbt.
                        </p>

                        <div class="grid grid-cols-2 gap-y-6 gap-x-8 mb-10">
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Skåpvolym</p>
                                <p class="text-lg font-bold text-slate-900">18-20 m³</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Bakgavellyft</p>
                                <p class="text-lg font-bold text-slate-900">750 kg Zepro</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Lastvikt</p>
                                <p class="text-lg font-bold text-slate-900">ca 1 000 kg</p>
                            </div>
                            <div>
                                <p class="text-sm text-slate-500 font-medium">Leverans</p>
                                <p class="text-lg font-bold text-green-600">Omgående</p>
                            </div>
                        </div>

                        <div class="border-t border-slate-100 pt-8">
                            <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wide">Perfekt för:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Flyttfirmor</span>
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Möbeltransport</span>
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Livsmedel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Comparison Table -->
    <section class="py-20 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Snabbjämförelse</h2>
                <p class="text-slate-500 mt-2">Hitta rätt modell för dina behov</p>
            </div>

            <div class="overflow-x-auto rounded-2xl border border-slate-200 shadow-lg">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900 text-white">
                            <th class="p-6 font-semibold">Specifikation</th>
                            <th class="p-6 font-semibold text-center border-l border-slate-700">Isuzu D-Max XRX</th>
                            <th class="p-6 font-semibold text-center border-l border-slate-700">Iveco Daily 12m³</th>
                            <th class="p-6 font-semibold text-center border-l border-slate-700">Iveco Fastlane</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        <tr class="hover:bg-slate-50 transition">
                            <td class="p-6 font-medium text-slate-900">Fordonstyp</td>
                            <td class="p-6 text-center text-slate-600 border-l">Pickup 4x4</td>
                            <td class="p-6 text-center text-slate-600 border-l">Skåpbil (Van)</td>
                            <td class="p-6 text-center text-slate-600 border-l">Chassi + Skåp + Lift</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="p-6 font-medium text-slate-900">Körkortskrav</td>
                            <td class="p-6 text-center text-slate-600 border-l">B</td>
                            <td class="p-6 text-center text-slate-600 border-l">B</td>
                            <td class="p-6 text-center text-slate-600 border-l">B (finns som C)</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="p-6 font-medium text-slate-900">Lastvolym</td>
                            <td class="p-6 text-center text-slate-600 border-l">Öppet flak</td>
                            <td class="p-6 text-center text-slate-600 border-l">12 m³</td>
                            <td class="p-6 text-center text-slate-600 border-l">18-20 m³</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="p-6 font-medium text-slate-900">Dragvikt</td>
                            <td class="p-6 text-center font-bold text-blue-600 border-l">3 500 kg</td>
                            <td class="p-6 text-center text-slate-600 border-l">3 500 kg</td>
                            <td class="p-6 text-center text-slate-600 border-l">3 500 kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- B2B Services -->
    <section id="losningar" class="py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold">Företagsleasing</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Flexibla finansieringslösningar anpassade för din likviditet. Välj mellan finansiell eller operationell leasing med garanterat restvärde.
                    </p>
                </div>
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold">Serviceavtal</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Undvik oförutsedda utgifter. Våra serviceavtal täcker underhåll och reparationer, vilket ger dig full kontroll över dina milkostnader.
                    </p>
                </div>
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold">Snabba Leveranser</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Tid är pengar. Vi lagerhåller de mest efterfrågade modellerna för att du ska kunna få din nya bil levererad när du behöver den.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontakt" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-4xl font-bold text-slate-900 mb-6">Kontakta oss</h2>
                    <p class="text-xl text-slate-600 mb-10">
                        Våra företagssäljare hjälper dig att skräddarsy en lösning som passar just din verksamhet.
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 text-lg">Ring säljare</h3>
                                <p class="text-slate-600">+46-8-123 456 78</p>
                                <p class="text-sm text-slate-400">Mån-Fre 08:00-17:00</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 text-lg">Besök oss</h3>
                                <p class="text-slate-600">Smista Allé 19</p>
                                <p class="text-slate-600">141 72 Segeltorp (Stockholm)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-200">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Företag</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Kontaktperson</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">E-post</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Intresserad av</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                                <option>Välj modell...</option>
                                <option>Isuzu D-Max XRX</option>
                                <option>Iveco Daily Van</option>
                                <option>Iveco Daily Fastlane</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Meddelande</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
                        </div>
                        <button type="submit" class="w-full btn-primary text-white py-4 rounded-xl font-bold text-lg shadow-lg">Skicka förfrågan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Kihlströms</h4>
                    <p class="text-sm">Din pålitliga partner för kommersiella fordon i Stockholm sedan 1972.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Fordon</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Isuzu D-Max</a></li>
                        <li><a href="#" class="hover:text-white transition">Iveco Daily</a></li>
                        <li><a href="#" class="hover:text-white transition">Lagerbilar</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Tjänster</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Verkstad</a></li>
                        <li><a href="#" class="hover:text-white transition">Reservdelar</a></li>
                        <li><a href="#" class="hover:text-white transition">Leasing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Kontakt</h4>
                    <ul class="space-y-2 text-sm">
                        <li>08-123 456 78</li>
                        <li>info@kihlstroms.se</li>
                        <li>Smista Allé 19, Segeltorp</li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-slate-800 text-center text-sm">
                &copy; <?php echo date("Y"); ?> Kihlströms Transport & Lastbilscenter AB. Alla rättigheter förbehållna.
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close menu when clicking a link
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });

        // Smooth Scroll (optional enhancement for older browsers)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                const target = document.querySelector(targetId);
                if(target){
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
