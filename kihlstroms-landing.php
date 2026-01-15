<?php
/**
 * Template Name: Kihlströms B2B Landing Advanced
 * Description: Strategic B2B landing page for Isuzu/Iveco with market analysis and TCO tools.
 */
?>
<!DOCTYPE html>
<html lang="sv" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kihlströms Transport & Lastbilscenter | Strategisk Fordonspartner Stockholm</title>
    <meta name="description" content="Auktoriserad återförsäljare av Isuzu och Iveco. Vi erbjuder marknadsledande transportlösningar baserade på djupgående marknadsanalys och TCO-optimering för Stockholms företag.">
    <meta name="keywords" content="Isuzu D-Max XRX, Iveco Daily Fastlane, Transportbilar Stockholm, TCO kalkyl, Företagsleasing, CNG lastbil">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-pattern { background-color: #0f172a; background-image: radial-gradient(#1e293b 1px, transparent 1px); background-size: 30px 30px; }
        .glass-panel { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); }
        .swot-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
        .pestel-card { border-left: 4px solid #3b82f6; }
    </style>

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AutoDealer",
        "name": "Kihlströms Transport & Lastbilscenter",
        "description": "Strategisk partner för transportfordon i Stockholm.",
        "url": "https://www.kihlstroms.se",
        "telephone": "+46-8-12345678",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Segeltorp",
            "postalCode": "141 72",
            "streetAddress": "Smista Allé 19"
        },
        "makesOffer": [
            { "@type": "Offer", "itemOffered": { "@type": "Vehicle", "name": "Isuzu D-Max XRX" } },
            { "@type": "Offer", "itemOffered": { "@type": "Vehicle", "name": "Iveco Daily Van" } },
            { "@type": "Offer", "itemOffered": { "@type": "Vehicle", "name": "Iveco Daily Fastlane" } }
        ]
    }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-100 selection:text-blue-900">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center text-white font-bold text-xl">K</div>
                    <div>
                        <div class="font-bold text-slate-900 leading-none">Kihlströms</div>
                        <div class="text-[10px] uppercase tracking-wider text-slate-500 font-medium">Transport & Lastbilscenter</div>
                    </div>
                </div>
                <div class="hidden lg:flex items-center gap-8 text-sm font-medium">
                    <a href="#analys" class="text-slate-600 hover:text-blue-700">Marknadsanalys</a>
                    <a href="#fordon" class="text-slate-600 hover:text-blue-700">Fordon</a>
                    <a href="#tco" class="text-slate-600 hover:text-blue-700">TCO-Kalkyl</a>
                    <a href="#kontakt" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg transition shadow-lg shadow-blue-600/20">Begär Offert</a>
                </div>
                <!-- Mobile menu toggle -->
                <button id="mobileMenuBtn" class="lg:hidden p-2 text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-slate-100 absolute w-full left-0 top-20 shadow-xl p-4 space-y-4">
            <a href="#analys" class="block text-slate-600 font-medium">Marknadsanalys</a>
            <a href="#fordon" class="block text-slate-600 font-medium">Fordon</a>
            <a href="#tco" class="block text-slate-600 font-medium">TCO-Kalkyl</a>
            <a href="#kontakt" class="block w-full text-center bg-blue-600 text-white px-5 py-3 rounded-lg font-bold">Begär Offert</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-pattern min-h-[85vh] flex items-center pt-20 relative text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-400/20 px-3 py-1 rounded-full text-blue-300 text-sm font-medium mb-6">
                        <span class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></span>
                        Auktoriserad Isuzu & Iveco Partner
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6">
                        Strategiska <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Transportlösningar</span> för Stockholm
                    </h1>
                    <p class="text-xl text-slate-300 mb-8 leading-relaxed max-w-lg">
                        Vi kombinerar 50 års erfarenhet med modern marknadsanalys för att leverera fordon som optimerar din TCO och säkrar din verksamhet för framtiden.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#fordon" class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-xl font-bold text-lg text-center transition shadow-[0_0_20px_rgba(37,99,235,0.3)]">
                            Utforska Sortimentet
                        </a>
                        <a href="#tco" class="bg-slate-800 hover:bg-slate-700 border border-slate-700 text-white px-8 py-4 rounded-xl font-bold text-lg text-center transition">
                            Beräkna Besparing
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <!-- Stats Card Floating -->
                    <div class="absolute -left-12 top-10 bg-slate-800/90 backdrop-blur border border-slate-700 p-6 rounded-2xl shadow-2xl z-20 max-w-xs animate-fade-in-up">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="p-3 bg-green-500/20 rounded-lg text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm text-slate-400">Marknadstillväxt</p>
                                <p class="text-xl font-bold text-white">+1.3% <span class="text-xs font-normal text-slate-500">Prognos 2025</span></p>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 border-t border-slate-700 pt-3 mt-2">
                            Stockholms e-handelssektor driver efterfrågan på lätta lastbilar.
                        </p>
                    </div>

                    <!-- Main Visual Placeholder -->
                    <div class="bg-gradient-to-tr from-slate-800 to-slate-700 rounded-3xl aspect-[4/3] flex items-center justify-center border border-white/10 shadow-2xl relative z-10">
                        <div class="text-center p-8">
                            <div class="w-24 h-24 bg-blue-600/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Premium Lagerbilar</h3>
                            <p class="text-slate-400">Leveransklara fordon för omgående driftstart.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Strategic Analysis Section (SWOT & PESTEL) -->
    <section id="analys" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-sm">Marknadsinsikt</span>
                <h2 class="text-4xl font-bold text-slate-900 mt-2 mb-4">Strategisk Analys av Transportmarknaden</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Vi bevakar ständigt marknadens drivkrafter för att erbjuda rätt fordon vid rätt tidpunkt. Här är vår analys av det nuvarande läget.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 mb-20">
                <!-- SWOT Analysis -->
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-8 flex items-center gap-3">
                        <span class="w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center text-sm">01</span>
                        SWOT-analys
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100">
                            <h4 class="font-bold text-blue-900 mb-3">Styrkor (Strengths)</h4>
                            <ul class="text-sm text-slate-700 space-y-2">
                                <li class="flex items-start gap-2">✓ 50+ års erfarenhet i branschen</li>
                                <li class="flex items-start gap-2">✓ Dubbla anläggningar (Smista & Spånga)</li>
                                <li class="flex items-start gap-2">✓ Unikt lager av "Fastlane"-fordon</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-6 rounded-2xl border border-red-100">
                            <h4 class="font-bold text-red-900 mb-3">Svagheter (Weaknesses)</h4>
                            <ul class="text-sm text-slate-700 space-y-2">
                                <li class="flex items-start gap-2">• Beroende av dieselpriser</li>
                                <li class="flex items-start gap-2">• Begränsat antal el-modeller i lager</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 p-6 rounded-2xl border border-green-100">
                            <h4 class="font-bold text-green-900 mb-3">Möjligheter (Opportunities)</h4>
                            <ul class="text-sm text-slate-700 space-y-2">
                                <li class="flex items-start gap-2">↗ Växande e-handel i Stockholm</li>
                                <li class="flex items-start gap-2">↗ HVO100 som övergångslösning</li>
                                <li class="flex items-start gap-2">↗ Efterfrågan på "Last Mile"-logistik</li>
                            </ul>
                        </div>
                        <div class="bg-orange-50 p-6 rounded-2xl border border-orange-100">
                            <h4 class="font-bold text-orange-900 mb-3">Hot (Threats)</h4>
                            <ul class="text-sm text-slate-700 space-y-2">
                                <li class="flex items-start gap-2">! Snabba skatteförändringar (Malus)</li>
                                <li class="flex items-start gap-2">! Komponentbrist globalt</li>
                                <li class="flex items-start gap-2">! Räntehöjningar påverkar leasing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- PESTEL Analysis -->
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-8 flex items-center gap-3">
                        <span class="w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center text-sm">02</span>
                        PESTEL-faktorer
                    </h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white p-5 rounded-xl border-l-4 border-blue-500 shadow-sm">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">Politiskt</h4>
                            <p class="text-xs text-slate-600">Bonus-Malus systemet och miljözoner i Stockholm styr fordonsvalet mot Euro 6 och CNG.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border-l-4 border-green-500 shadow-sm">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">Ekonomiskt</h4>
                            <p class="text-xs text-slate-600">Riksbankens räntebesked påverkar leasingkostnader. Vi erbjuder räntesäkring.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border-l-4 border-purple-500 shadow-sm">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">Socialt</h4>
                            <p class="text-xs text-slate-600">Förarbrist ökar kravet på komfort och automatlådor (Hi-Matic) för att attrahera personal.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border-l-4 border-yellow-500 shadow-sm">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">Teknologiskt</h4>
                            <p class="text-xs text-slate-600">Telematik och uppkopplade fordon är standard för att optimera rutter och bränsle.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border-l-4 border-teal-500 shadow-sm">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">Miljö</h4>
                            <p class="text-xs text-slate-600">Krav på fossilfria transporter ökar. Vi satsar på Biogas och HVO100-kompatibilitet.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border-l-4 border-red-500 shadow-sm">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">Legalt</h4>
                            <p class="text-xs text-slate-600">Nya krav på färdskrivare och GDPR-hantering i fleet-system. Vi säkrar regelefterlevnad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Use Cases -->
    <section class="py-24 bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Lösningar för din Bransch</h2>
                <p class="text-slate-600">Skräddarsydda fordonspaket för specifika yrkesgrupper.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Case 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                    <div class="text-4xl mb-4">🏗️</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Bygg & Anläggning</h3>
                    <p class="text-sm text-slate-600 mb-4">Kräver hög dragvikt och terrängframkomlighet.</p>
                    <div class="text-blue-600 font-semibold text-sm">Rekommenderas: Isuzu D-Max XRX</div>
                </div>
                <!-- Case 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                    <div class="text-4xl mb-4">📦</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">E-handel & Bud</h3>
                    <p class="text-sm text-slate-600 mb-4">Många stopp och trånga stadsmiljöer.</p>
                    <div class="text-blue-600 font-semibold text-sm">Rekommenderas: Iveco Daily Van</div>
                </div>
                <!-- Case 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                    <div class="text-4xl mb-4">🛋️</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Möbel & Flytt</h3>
                    <p class="text-sm text-slate-600 mb-4">Behov av volymskåp och bakgavellyft på B-kort.</p>
                    <div class="text-blue-600 font-semibold text-sm">Rekommenderas: Iveco Daily Fastlane</div>
                </div>
                <!-- Case 4 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                    <div class="text-4xl mb-4">🥦</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Livsmedel</h3>
                    <p class="text-sm text-slate-600 mb-4">Temperaturkänsligt och hygienkrav. Biogas-drift.</p>
                    <div class="text-blue-600 font-semibold text-sm">Rekommenderas: Daily Chassi + Kylskåp</div>
                </div>
                <!-- Case 5 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                    <div class="text-4xl mb-4">🔧</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Service & Hantverk</h3>
                    <p class="text-sm text-slate-600 mb-4">Mobil verkstad med inredning och verktyg.</p>
                    <div class="text-blue-600 font-semibold text-sm">Rekommenderas: Daily Van / D-Max</div>
                </div>
                <!-- Case 6 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300">
                    <div class="text-4xl mb-4">🏢</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Kommun & Park</h3>
                    <p class="text-sm text-slate-600 mb-4">Miljökrav och mångsidighet året runt.</p>
                    <div class="text-blue-600 font-semibold text-sm">Rekommenderas: Isuzu D-Max CNG</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TCO Calculator -->
    <section id="tco" class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">TCO Kalkylator</h2>
                    <p class="text-slate-400 mb-8 text-lg">
                        Jämför ägandekostnaden mellan en standard diesel-pickup och vår Isuzu D-Max CNG. Se hur mycket du kan spara på skatt (Malus) och bränsle över 3 år.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Lägre fordonsskatt (år 1-3)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Möjlighet till miljözonspassage</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Lägre drivmedelskostnad (Biogas)</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white text-slate-900 p-8 rounded-3xl shadow-2xl">
                    <h3 class="text-xl font-bold mb-6 border-b pb-4">Besparingskalkyl</h3>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-600 mb-2">Årlig körsträcka (mil)</label>
                            <input type="range" id="mileage" min="1000" max="6000" step="500" value="3000" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                            <div class="flex justify-between text-sm mt-1">
                                <span>1000</span>
                                <span id="mileageDisplay" class="font-bold text-blue-600">3000 mil</span>
                                <span>6000</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 p-4 bg-slate-50 rounded-xl">
                            <div>
                                <p class="text-xs text-slate-500 uppercase">Standard Diesel</p>
                                <p class="text-lg font-bold">Ca 24.000 kr</p>
                                <p class="text-xs text-slate-400">Skatt år 1-3</p>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 uppercase text-green-600">Isuzu CNG</p>
                                <p class="text-lg font-bold text-green-600">Ca 1.300 kr</p>
                                <p class="text-xs text-slate-400">Skatt år 1-3</p>
                            </div>
                        </div>

                        <div class="text-center pt-4">
                            <p class="text-sm text-slate-500 mb-1">Din totala besparing på 3 år</p>
                            <p id="totalSavings" class="text-4xl font-extrabold text-blue-600">71 750 kr</p>
                            <p class="text-xs text-slate-400 mt-2">*Inkluderar skatteskillnad och genomsnittligt bränslepris</p>
                        </div>

                        <button onclick="document.getElementById('kontakt').scrollIntoView({behavior: 'smooth'})" class="w-full bg-slate-900 text-white py-4 rounded-xl font-bold hover:bg-slate-800 transition">
                            Kontakta säljare för exakt offert
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vehicle Details (Reused structure with enhancements) -->
    <section id="fordon" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Våra Spetsmodeller</h2>
                <p class="text-slate-600">Utvalda för att maximera effektiviteten i din verksamhet.</p>
            </div>

            <!-- Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Vehicle 1 -->
                <div class="border border-slate-200 rounded-3xl overflow-hidden card-hover">
                    <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-400">Isuzu D-Max Bild</div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-2">Isuzu D-Max XRX</h3>
                        <p class="text-sm text-slate-500 mb-6">Pickup 4x4 • 3500kg Dragvikt</p>
                        <ul class="space-y-3 mb-8 text-sm text-slate-700">
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Lastvikt</span>
                                <span class="font-bold">1 060 kg</span>
                            </li>
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Motor</span>
                                <span class="font-bold">163 hk / 360 Nm</span>
                            </li>
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Skatt (CNG)</span>
                                <span class="font-bold text-green-600">Låg</span>
                            </li>
                        </ul>
                        <button onclick="openModal('Isuzu D-Max')" class="w-full btn-primary bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700">Begär Offert</button>
                    </div>
                </div>

                <!-- Vehicle 2 -->
                <div class="border border-slate-200 rounded-3xl overflow-hidden card-hover">
                    <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-400">Iveco Daily Bild</div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-2">Iveco Daily Van 12m³</h3>
                        <p class="text-sm text-slate-500 mb-6">Skåpbil • B-Körkort</p>
                        <ul class="space-y-3 mb-8 text-sm text-slate-700">
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Lastvolym</span>
                                <span class="font-bold">12 m³</span>
                            </li>
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Vändradie</span>
                                <span class="font-bold">Bäst i klassen</span>
                            </li>
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Växellåda</span>
                                <span class="font-bold">Hi-Matic Automat</span>
                            </li>
                        </ul>
                        <button onclick="openModal('Iveco Daily Van')" class="w-full btn-primary bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700">Begär Offert</button>
                    </div>
                </div>

                <!-- Vehicle 3 -->
                <div class="border border-slate-200 rounded-3xl overflow-hidden card-hover">
                    <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-400">Fastlane Bild</div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-2">Iveco Fastlane</h3>
                        <p class="text-sm text-slate-500 mb-6">Chassi + Skåp + Lift</p>
                        <ul class="space-y-3 mb-8 text-sm text-slate-700">
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Lastvikt</span>
                                <span class="font-bold">ca 1 000 kg</span>
                            </li>
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Liftkapacitet</span>
                                <span class="font-bold">750 kg</span>
                            </li>
                            <li class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Leverans</span>
                                <span class="font-bold text-green-600">Omgående</span>
                            </li>
                        </ul>
                        <button onclick="openModal('Iveco Fastlane')" class="w-full btn-primary bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700">Begär Offert</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-white font-bold mb-4">Kihlströms Transport & Lastbilscenter</h4>
                    <p class="text-sm leading-relaxed text-slate-400">
                        Vi är experter på transportbilar och erbjuder helhetslösningar för företag i Storstockholm. Från försäljning och finansiering till service och eftermarknad.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Snabblänkar</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#fordon" class="hover:text-blue-400">Fordon i lager</a></li>
                        <li><a href="#tco" class="hover:text-blue-400">TCO Kalkyl</a></li>
                        <li><a href="#analys" class="hover:text-blue-400">Marknadsinsikter</a></li>
                        <li><a href="#kontakt" class="hover:text-blue-400">Boka Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Öppettider</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li>Mån-Fre: 07:00 - 17:00</li>
                        <li>Lör-Sön: Stängt</li>
                        <li class="pt-2 text-xs">Jour dygnet runt för avtalskunder</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Kontakt</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li>Smista Allé 19, 141 72 Segeltorp</li>
                        <li>Spånga (Filial)</li>
                        <li class="font-bold text-white pt-2">08-123 45 67</li>
                        <li>info@kihlstroms.se</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
                <p>&copy; <?php echo date("Y"); ?> Kihlströms Transport & Lastbilscenter AB</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white">Integritetspolicy</a>
                    <a href="#" class="hover:text-white">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Quote Modal -->
    <div id="quoteModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[60] hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl w-full max-w-lg shadow-2xl overflow-hidden">
            <div class="p-6 border-b flex justify-between items-center">
                <h3 class="text-xl font-bold text-slate-900" id="modalTitle">Begär Offert</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600">✕</button>
            </div>
            <div class="p-6">
                <form class="space-y-4">
                    <input type="text" placeholder="Företagsnamn" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none">
                    <input type="email" placeholder="E-postadress" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none">
                    <input type="tel" placeholder="Telefonnummer" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none">
                    <select class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none">
                        <option>1-2 fordon</option>
                        <option>3-5 fordon</option>
                        <option>5+ fordon (Flotta)</option>
                    </select>
                    <textarea placeholder="Meddelande / Specifika önskemål" rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700">Skicka Förfrågan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // TCO Calculator Logic
        const mileageInput = document.getElementById('mileage');
        const mileageDisplay = document.getElementById('mileageDisplay');
        const totalSavings = document.getElementById('totalSavings');

        function calculateTCO() {
            const miles = parseInt(mileageInput.value);
            mileageDisplay.innerText = miles + " mil";

            // Simplified Logic for Demo:
            // Diesel tax diff approx 22000 over 3 years
            // Fuel saving approx 2 kr/mil * miles * 3 years
            const taxSaving = 22700; // Fixed approx diff for 3 years
            const fuelSaving = miles * 3 * 2.5; // Approx 2.5kr saving per mil

            const total = taxSaving + fuelSaving;
            totalSavings.innerText = total.toLocaleString('sv-SE') + " kr";
        }

        mileageInput.addEventListener('input', calculateTCO);

        // Modal Logic
        function openModal(vehicleName) {
            document.getElementById('modalTitle').innerText = "Offert: " + vehicleName;
            document.getElementById('quoteModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('quoteModal').classList.add('hidden');
        }

        // Close on backdrop click
        document.getElementById('quoteModal').addEventListener('click', (e) => {
            if(e.target === document.getElementById('quoteModal')) closeModal();
        });

        // Mobile Menu
        document.getElementById('mobileMenuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
