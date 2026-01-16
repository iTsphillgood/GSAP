<?php
// Simulate WordPress environment
require_once 'inc/mock-db.php';
require_once 'inc/google-schema-generator.php';

$inventory = kihlstroms_get_inventory();
?>
<!DOCTYPE html>
<html lang="sv" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kihlströms NextGen | Agentic Commerce POC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        'neon-blue': '#00f3ff',
                        'deep-space': '#050510',
                        'glass': 'rgba(255, 255, 255, 0.05)'
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #050510; color: white; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .agent-widget {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>

    <!-- Google Vehicle Listing Schemas -->
    <?php foreach ($inventory as $vehicle): ?>
    <script type="application/ld+json">
    <?php echo Kihlströms_Google_Schema::generate_json_ld($vehicle); ?>
    </script>
    <?php endforeach; ?>
</head>
<body class="antialiased selection:bg-neon-blue selection:text-black">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-panel border-b-0">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-blue-600 to-neon-blue rounded-lg flex items-center justify-center font-bold text-xl">K</div>
                <span class="font-bold tracking-wider">KIHLSTRÖMS <span class="text-neon-blue text-xs align-top">2026</span></span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-slate-400">
                <a href="#" class="hover:text-white transition">Showroom</a>
                <a href="#" class="hover:text-white transition">Fastlane</a>
                <a href="#" class="hover:text-white transition">Service</a>
                <a href="#" class="text-neon-blue">AI Concierge</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1600712242805-5f78671b24da?q=80&w=2800&auto=format&fit=crop')] bg-cover bg-center opacity-40"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-deep-space via-transparent to-deep-space/80"></div>

        <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-6xl md:text-8xl font-bold leading-tight mb-6">
                    Future of <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-neon-blue">Logistics.</span>
                </h1>
                <p class="text-xl text-slate-400 mb-8 max-w-lg">
                    Experience the next generation of commercial transport. AI-optimized fleets, ready for delivery today.
                </p>
                <button onclick="window.agentStart()" class="bg-white text-black px-8 py-4 rounded-full font-bold hover:bg-neon-blue transition flex items-center gap-2">
                    <span>Talk to AI Agent</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Interactive Inventory Grid -->
    <section id="showroom" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-bold mb-2">Digital Showroom</h2>
                    <p class="text-slate-400">Live inventory synced with Google Merchant Center</p>
                </div>
                <div class="flex gap-2">
                    <span class="px-3 py-1 glass-panel rounded-full text-xs text-neon-blue">● Live</span>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($inventory as $item): ?>
                <div class="glass-panel rounded-2xl p-6 hover:border-neon-blue/50 transition duration-500 group cursor-pointer" data-tags="<?php echo implode(' ', $item['tags']); ?>">
                    <div class="h-48 bg-slate-800/50 rounded-xl mb-6 relative overflow-hidden">
                        <!-- Placeholder for car image -->
                        <div class="absolute inset-0 flex items-center justify-center text-slate-600">
                            [<?php echo $item['model']; ?> Image]
                        </div>
                        <div class="absolute top-4 right-4 bg-neon-blue text-black text-xs font-bold px-2 py-1 rounded">
                            <?php echo $item['fuel_type']; ?>
                        </div>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold"><?php echo $item['make'] . ' ' . $item['model']; ?></h3>
                            <p class="text-sm text-slate-400"><?php echo $item['body_type']; ?></p>
                        </div>
                        <p class="text-neon-blue font-bold"><?php echo number_format($item['price'], 0, ',', ' '); ?> kr</p>
                    </div>

                    <div class="grid grid-cols-3 gap-2 mb-6 text-xs text-slate-300">
                        <div class="bg-white/5 rounded p-2 text-center">
                            <span class="block text-slate-500">Last</span>
                            <?php echo $item['specs']['payload']; ?>
                        </div>
                        <div class="bg-white/5 rounded p-2 text-center">
                            <span class="block text-slate-500">Drag</span>
                            <?php echo $item['specs']['towing']; ?>
                        </div>
                        <div class="bg-white/5 rounded p-2 text-center">
                            <span class="block text-slate-500">Lev</span>
                            Direct
                        </div>
                    </div>

                    <button class="w-full py-3 border border-white/20 rounded-xl hover:bg-white hover:text-black transition font-medium">
                        View Details
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- AI Agent Interface (Hidden by default) -->
    <div id="ai-agent" class="fixed bottom-8 right-8 w-96 glass-panel rounded-3xl p-6 hidden flex-col shadow-2xl z-50 border-neon-blue/30 border">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-neon-blue rounded-full flex items-center justify-center text-black font-bold animate-pulse">
                    AI
                </div>
                <div>
                    <h4 class="font-bold">Kihlströms Assistant</h4>
                    <p class="text-xs text-neon-blue">Online</p>
                </div>
            </div>
            <button onclick="window.agentClose()" class="text-slate-400 hover:text-white">✕</button>
        </div>

        <div id="chat-history" class="h-64 overflow-y-auto mb-4 space-y-4 text-sm scrollbar-hide">
            <div class="bg-white/10 rounded-xl p-3 rounded-tl-none">
                Hello! I'm your virtual vehicle expert. I can help you find the perfect transport solution based on your cargo and license type.
            </div>
            <div class="bg-white/10 rounded-xl p-3 rounded-tl-none">
                Are you looking for a <strong>Pickup</strong> or a <strong>Van</strong>?
            </div>
        </div>

        <div class="flex gap-2" id="quick-replies">
            <button onclick="window.agentReply('Pickup')" class="bg-white/5 hover:bg-neon-blue/20 border border-white/10 rounded-full px-4 py-2 text-xs transition">Pickup</button>
            <button onclick="window.agentReply('Van')" class="bg-white/5 hover:bg-neon-blue/20 border border-white/10 rounded-full px-4 py-2 text-xs transition">Van</button>
        </div>
    </div>

    <!-- Toggle Button -->
    <button id="agent-toggle" onclick="window.agentStart()" class="fixed bottom-8 right-8 w-16 h-16 bg-gradient-to-r from-blue-600 to-neon-blue rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition agent-widget z-40">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
    </button>

    <script src="assets/js/commerce-agent.js"></script>
</body>
</html>
