<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mercury — Smart Restaurant Manager Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                    },
                    boxShadow: {
                        soft: '0 20px 50px -20px rgba(110,20,20,0.25)',
                    },
                    colors: {
                        primary: '#6e1414',
                        secondary: '#df6c66',
                        accent: '#fbfbfc',
                    }
                }
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const texts = [
                "Streamline operations, boost efficiency, and maximize restaurant revenue.",
                "Smart POS, inventory control, and real-time analytics in one platform.",
                "From kitchen to counter, manage your restaurant seamlessly."
            ];
            const el = document.getElementById("typed-text");
            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;

            function typeText() {
                const currentText = texts[textIndex];

                if (isDeleting) {
                    el.textContent = currentText.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    el.textContent = currentText.substring(0, charIndex + 1);
                    charIndex++;
                }

                if (!isDeleting && charIndex === currentText.length) {
                    isDeleting = true;
                    setTimeout(typeText, 2000);
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    setTimeout(typeText, 500);
                } else {
                    const speed = isDeleting ? 50 : 100;
                    setTimeout(typeText, speed);
                }
            }

            setTimeout(typeText, 1000);
        });
    </script>

    <!-- Inter -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        .typing-cursor {
            display: inline-block;
            margin-left: 2px;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 50%, 100% { opacity: 1; }
            25%, 75% { opacity: 0; }
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6e1414 0%, #df6c66 100%);
        }

        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(110,20,20,0.15);
        }

        .stat-card {
            background: linear-gradient(145deg, #fbfbfc 0%, #ffffff 100%);
            border: 1px solid rgba(223, 108, 102, 0.1);
        }
    </style>
</head>

<body class="bg-accent text-slate-900 antialiased font-sans">

<!-- ================= HEADER ================= -->
<header class="py-8 bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="relative z-50 flex justify-between">

            <!-- Left -->
            <div class="flex items-center md:gap-x-12">
                <a href="/" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg gradient-bg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">M</span>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-primary">Mercury</span>
                        <span class="text-sm text-secondary block -mt-1">Restaurant Manager</span>
                    </div>
                </a>

                <!-- Desktop nav -->
                <div class="hidden md:flex md:gap-x-8">
                    <a class="inline-block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:text-primary hover:bg-red-50" href="#features">Features</a>
                    <a class="inline-block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:text-primary hover:bg-red-50" href="#pos">Smart POS</a>
                    <a class="inline-block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:text-primary hover:bg-red-50" href="#testimonials">Testimonials</a>
                    <a class="inline-block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:text-primary hover:bg-red-50" href="#pricing">Pricing</a>
                    <a class="inline-block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:text-primary hover:bg-red-50" href="#contact">Contact</a>
                </div>
            </div>

            <!-- Right -->
            <div class="flex items-center gap-x-6">
                <div class="hidden md:block">
                    <a class="inline-block rounded-lg px-4 py-2 text-sm font-medium text-primary hover:bg-red-50" href="https://app.mymercuryapp.com/login">
                        Sign in
                    </a>
                </div>

                <a href="https://app.mymercuryapp.com/register"
                   class="group inline-flex items-center justify-center rounded-lg py-2.5 px-6 text-sm font-semibold gradient-bg text-white hover:shadow-lg transition-all duration-200">
                    Start Free Trial
                </a>

                <!-- Mobile toggle -->
                <button
                    onclick="document.getElementById('mobile-nav').classList.toggle('hidden')"
                    class="md:hidden relative z-10 flex h-10 w-10 items-center justify-center rounded-lg hover:bg-red-50"
                    aria-label="Toggle Navigation">
                    <svg aria-hidden="true" class="h-5 w-5 text-primary" fill="none"
                         stroke-width="2" stroke-linecap="round" stroke="currentColor">
                        <path d="M0 1H14M0 7H14M0 13H14" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile menu panel -->
        <div id="mobile-nav" class="hidden md:hidden mt-4 rounded-xl bg-white shadow-lg ring-1 ring-slate-900/10">
            <div class="flex flex-col space-y-1 p-4 text-sm font-medium text-slate-700">
                <a href="#features" class="rounded-lg px-4 py-3 hover:bg-red-50 hover:text-primary">Features</a>
                <a href="#pos" class="rounded-lg px-4 py-3 hover:bg-red-50 hover:text-primary">Smart POS</a>
                <a href="#testimonials" class="rounded-lg px-4 py-3 hover:bg-red-50 hover:text-primary">Testimonials</a>
                <a href="#pricing" class="rounded-lg px-4 py-3 hover:bg-red-50 hover:text-primary">Pricing</a>
                <a href="#contact" class="rounded-lg px-4 py-3 hover:bg-red-50 hover:text-primary">Contact</a>

                <div class="pt-4 mt-4 border-t border-slate-200">
                    <a href="https://app.mymercuryapp.com/login" class="block rounded-lg px-4 py-3 hover:bg-red-50">Sign in</a>
                    <a href="https://app.mymercuryapp.com/register"
                       class="mt-2 block rounded-lg gradient-bg px-4 py-3 text-center font-semibold text-white">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </div>

    </div>
</header>

<!-- ================= HERO ================= -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-red-50 to-accent"></div>
    <div class="relative mx-auto max-w-7xl px-6 pt-20 pb-24 lg:pt-32">
        <div class="text-center">
            <h1 class="text-4xl sm:text-6xl font-bold tracking-tight leading-[1.1]">
                The All-in-One
                <span class="text-primary">Restaurant Management</span>
                Platform
            </h1>

            <div class="mt-8 text-xl sm:text-2xl text-secondary font-medium h-20">
                <span id="typed-text"></span>
                <span class="typing-cursor">|</span>
            </div>

            <p class="mx-auto mt-8 max-w-3xl text-lg text-slate-600">
                Mercury combines smart POS, inventory management, staff scheduling, and real-time analytics
                into one seamless platform. Built for modern restaurants, cafes, and food businesses.
            </p>

            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center sm:gap-6">
                <a href="https://app.mymercuryapp.com/register"
                   class="w-full sm:w-auto rounded-lg gradient-bg px-8 py-4 text-sm font-semibold text-white shadow-soft hover-lift">
                    Start Free 14-Day Trial
                </a>

                <a href="https://calendar.app.google/9hnqNFbSwnRRkq1P8"
                   class="w-full sm:w-auto rounded-lg bg-white border border-primary px-8 py-4 text-sm font-semibold text-primary hover:bg-red-50 hover-lift">
                    Schedule Live Demo
                </a>
            </div>

            <!-- Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto">
                <div class="stat-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-primary">30%</div>
                    <div class="text-sm text-slate-600 mt-2">Avg. Efficiency Boost</div>
                </div>
                <div class="stat-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-primary">99.9%</div>
                    <div class="text-sm text-slate-600 mt-2">Uptime</div>
                </div>
                <div class="stat-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-primary">2.5x</div>
                    <div class="text-sm text-slate-600 mt-2">Faster Service</div>
                </div>
                <div class="stat-card rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold text-primary">24/7</div>
                    <div class="text-sm text-slate-600 mt-2">Support</div>
                </div>
            </div>

            <!-- Dashboard Preview -->
            <div class="mt-20">
                <div class="relative max-w-6xl mx-auto">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 blur-3xl opacity-30"></div>
                    <img
                        src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Mercury Restaurant Dashboard"
                        class="relative w-full rounded-2xl border-4 border-white shadow-2xl" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= TRUSTED BY ================= -->
<section class="py-20 bg-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-semibold text-slate-900">
                Trusted by leading restaurants
            </h3>
            <p class="mt-3 text-slate-600">
                From cozy cafes to multi-location restaurant chains
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
            <!-- Restaurant Logos -->
            <div class="flex justify-center">
                <div class="h-12 w-32 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center">
                    <span class="font-semibold text-primary">BistroOne</span>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-12 w-32 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center">
                    <span class="font-semibold text-primary">Cafe Royale</span>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-12 w-32 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center">
                    <span class="font-semibold text-primary">UrbanKitchen</span>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-12 w-32 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center">
                    <span class="font-semibold text-primary">TasteHub</span>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-12 w-32 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center">
                    <span class="font-semibold text-primary">FoodWorks</span>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-12 w-32 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center">
                    <span class="font-semibold text-primary">GrillHouse</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= SMART POS SECTION ================= -->
<section id="pos" class="py-24 bg-gradient-to-b from-white to-red-50">
    <div class="mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">
                Smart POS System
            </h2>
            <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">
                Lightning-fast point of sale designed for busy restaurants
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div>
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900">Fast & Intuitive</h3>
                            <p class="mt-2 text-slate-600">
                                Process orders in seconds with customizable layouts and quick keys
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900">Real-time Sync</h3>
                            <p class="mt-2 text-slate-600">
                                Kitchen display updates instantly as orders are placed
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg gradient-bg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900">Multi-payment</h3>
                            <p class="mt-2 text-slate-600">
                                Accept cash, card, mobile money, and digital wallets
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                         alt="Restaurant POS System"
                         class="w-full h-auto">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FEATURES ================= -->
<section id="features" class="py-24 bg-white" x-data="{ active: 'inventory' }">
    <div class="mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">
                Everything You Need to Run Your Restaurant
            </h2>
            <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">
                Comprehensive tools for front of house, back of house, and everything in between
            </p>
        </div>

        <!-- Feature Tabs -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button @click="active = 'inventory'"
                    :class="active === 'inventory' ? 'gradient-bg text-white' : 'bg-red-50 text-primary'"
                    class="px-6 py-3 rounded-lg font-medium transition-all hover-lift">
                Inventory Management
            </button>
            <button @click="active = 'staff'"
                    :class="active === 'staff' ? 'gradient-bg text-white' : 'bg-red-50 text-primary'"
                    class="px-6 py-3 rounded-lg font-medium transition-all hover-lift">
                Staff Management
            </button>
            <button @click="active = 'analytics'"
                    :class="active === 'analytics' ? 'gradient-bg text-white' : 'bg-red-50 text-primary'"
                    class="px-6 py-3 rounded-lg font-medium transition-all hover-lift">
                Analytics & Reporting
            </button>
            <button @click="active = 'online'"
                    :class="active === 'online' ? 'gradient-bg text-white' : 'bg-red-50 text-primary'"
                    class="px-6 py-3 rounded-lg font-medium transition-all hover-lift">
                Online Ordering
            </button>
        </div>

        <!-- Feature Content -->
        <div class="mt-12">
            <!-- Inventory Management -->
            <div x-show="active === 'inventory'" x-transition class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Smart Inventory Control</h3>
                    <p class="text-slate-600 mb-8">
                        Never run out of ingredients. Track stock levels in real-time, set automatic reorder points,
                        and reduce food waste with intelligent forecasting.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Real-time stock tracking</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Automated purchase orders</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Waste tracking and reporting</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                             alt="Inventory Management"
                             class="w-full h-auto">
                    </div>
                </div>
            </div>

            <!-- Staff Management -->
            <div x-show="active === 'staff'" x-transition class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="lg:order-2">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Effortless Staff Management</h3>
                    <p class="text-slate-600 mb-8">
                        Create schedules, track attendance, manage payroll, and empower your team with role-based access.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Automated scheduling</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Time and attendance tracking</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Performance analytics</span>
                        </li>
                    </ul>
                </div>
                <div class="lg:order-1">
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                             alt="Staff Management"
                             class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<section id="testimonials" class="py-24 bg-gradient-to-b from-red-50 to-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">
                Loved by Restaurant Owners
            </h2>
            <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">
                See how Mercury is transforming restaurant operations
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center text-white font-bold mr-4">
                        MB
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900">Michael Brown</h4>
                        <p class="text-sm text-slate-600">Owner, BistroOne</p>
                    </div>
                </div>
                <p class="text-slate-700">
                    "Mercury cut our order processing time by 40%. The inventory tracking alone saves us thousands monthly."
                </p>
                <div class="flex text-yellow-400 mt-4">
                    ★★★★★
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center text-white font-bold mr-4">
                        SC
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900">Sarah Chen</h4>
                        <p class="text-sm text-slate-600">Manager, UrbanKitchen</p>
                    </div>
                </div>
                <p class="text-slate-700">
                    "The staff scheduling feature revolutionized how we manage our team. No more spreadsheet headaches!"
                </p>
                <div class="flex text-yellow-400 mt-4">
                    ★★★★★
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center text-white font-bold mr-4">
                        RJ
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900">Robert Johnson</h4>
                        <p class="text-sm text-slate-600">CEO, FoodWorks Chain</p>
                    </div>
                </div>
                <p class="text-slate-700">
                    "Managing 5 locations used to be chaotic. Mercury gives us real-time visibility across all stores."
                </p>
                <div class="flex text-yellow-400 mt-4">
                    ★★★★★
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= PRICING ================= -->
<section id="pricing" class="py-24 bg-white" x-data="pricingToggle()">
    <div class="mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">
                Simple, Transparent Pricing
            </h2>
            <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">
                Choose the perfect plan for your restaurant. No hidden fees, no surprises.
            </p>
        </div>

        <!-- Billing Toggle -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex bg-red-50 rounded-lg p-1">
                <button @click="isYearly = false"
                        :class="!isYearly ? 'gradient-bg text-white' : 'text-primary'"
                        class="px-6 py-2 rounded-md font-medium transition-all">
                    Monthly
                </button>
                <button @click="isYearly = true"
                        :class="isYearly ? 'gradient-bg text-white' : 'text-primary'"
                        class="px-6 py-2 rounded-md font-medium transition-all">
                    Yearly (Save 20%)
                </button>
            </div>
        </div>

        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Starter -->
            <div class="bg-white rounded-2xl border border-slate-200 p-8 hover-lift">
                <h3 class="text-xl font-bold text-slate-900 mb-2">Starter</h3>
                <p class="text-slate-600 mb-6">Perfect for small cafes and food trucks</p>
                <div class="mb-8">
                    <span class="text-4xl font-bold text-primary">₦</span>
                    <span class="text-4xl font-bold text-primary" x-text="isYearly ? '278,400' : '29,000'"></span>
                    <span class="text-slate-600">/month</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Basic POS System</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Up to 2 devices</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Basic reporting</span>
                    </li>
                </ul>
                <a href="https://app.mymercuryapp.com/register"
                   class="block w-full text-center rounded-lg gradient-bg py-3 text-white font-semibold hover:shadow-lg transition-all">
                    Start Free Trial
                </a>
            </div>

            <!-- Professional -->
            <div class="bg-white rounded-2xl border-2 border-primary p-8 shadow-xl relative hover-lift">
                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-semibold">
                            Most Popular
                        </span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Professional</h3>
                <p class="text-slate-600 mb-6">Ideal for growing restaurants</p>
                <div class="mb-8">
                    <span class="text-4xl font-bold text-primary">₦</span>
                    <span class="text-4xl font-bold text-primary" x-text="isYearly ? '566,400' : '59,000'"></span>
                    <span class="text-slate-600">/month</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Advanced POS with KDS</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Up to 5 devices</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Full inventory management</span>
                    </li>
                </ul>
                <a href="https://app.mymercuryapp.com/register"
                   class="block w-full text-center rounded-lg gradient-bg py-3 text-white font-semibold hover:shadow-lg transition-all">
                    Start Free Trial
                </a>
            </div>

            <!-- Enterprise -->
            <div class="bg-white rounded-2xl border border-slate-200 p-8 hover-lift">
                <h3 class="text-xl font-bold text-slate-900 mb-2">Enterprise</h3>
                <p class="text-slate-600 mb-6">For multi-location chains</p>
                <div class="mb-8">
                    <span class="text-4xl font-bold text-primary">₦</span>
                    <span class="text-4xl font-bold text-primary" x-text="isYearly ? '142,800,400' : '119,000'"></span>
                    <span class="text-slate-600">/month</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Unlimited devices</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Multi-location management</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Custom API integration</span>
                    </li>
                </ul>
                <a href="https://app.mymercuryapp.com/register"
                   class="block w-full text-center rounded-lg gradient-bg py-3 text-white font-semibold hover:shadow-lg transition-all">
                    Contact Sales
                </a>
            </div>
        </div>
    </div>

    <script>
        function pricingToggle() {
            return {
                isYearly: true
            }
        }
    </script>
</section>

<!-- ================= CTA ================= -->
<section class="py-24 gradient-bg">
    <div class="mx-auto max-w-4xl px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-8">
            Ready to Transform Your Restaurant?
        </h2>
        <p class="text-xl text-white/90 mb-12">
            Join thousands of restaurants using Mercury to streamline operations and boost profits.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="https://app.mymercuryapp.com/register"
               class="inline-flex items-center justify-center rounded-lg bg-white px-8 py-4 text-sm font-semibold text-primary hover:bg-red-50 hover-lift">
                Start 14-Day Free Trial
            </a>
            <a href="https://calendar.app.google/9hnqNFbSwnRRkq1P8"
               class="inline-flex items-center justify-center rounded-lg border-2 border-white px-8 py-4 text-sm font-semibold text-white hover:bg-white/10 hover-lift">
                Schedule Demo
            </a>
        </div>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact" class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Left: Contact Info -->
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-8">
                    Get in Touch
                </h2>
                <div class="space-y-8">
                    <div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Email</h4>
                        <a href="mailto:info@fortranhouse.com" class="text-lg text-slate-700 hover:text-primary">
                            info@fortranhouse.com
                        </a>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Phone</h4>
                        <a href="tel:+2348090839412" class="text-lg text-slate-700 hover:text-primary">
                            +234 809 083 9412
                        </a>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Office</h4>
                        <p class="text-lg text-slate-700">
                            Garnet Plaza, Lekki-Epe Express way<br>
                            Lagos, Nigeria
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div>
                <div class="bg-red-50 rounded-2xl p-8">
                    <h3 class="text-xl font-semibold text-slate-900 mb-6">
                        Send us a message
                    </h3>
                    <form class="space-y-6">
                        <div>
                            <input type="text"
                                   placeholder="Your Name"
                                   class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
                        </div>
                        <div>
                            <input type="email"
                                   placeholder="Email Address"
                                   class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
                        </div>
                        <div>
                                <textarea
                                    placeholder="Your Message"
                                    rows="4"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition"></textarea>
                        </div>
                        <button type="submit"
                                class="w-full rounded-lg gradient-bg py-3 text-white font-semibold hover:shadow-lg transition-all">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-slate-900 text-slate-300">
    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="grid md:grid-cols-4 gap-12">
            <!-- Logo and Description -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-lg gradient-bg flex items-center justify-center">
                        <span class="text-white font-bold">M</span>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-white">Mercury</span>
                    </div>
                </div>
                <p class="text-sm text-slate-400">
                    Smart restaurant management platform for modern food businesses.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-sm font-semibold text-white uppercase mb-6">Platform</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#features" class="hover:text-white transition">Features</a></li>
                    <li><a href="#pos" class="hover:text-white transition">Smart POS</a></li>
                    <li><a href="#pricing" class="hover:text-white transition">Pricing</a></li>
                    <li><a href="#testimonials" class="hover:text-white transition">Testimonials</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="text-sm font-semibold text-white uppercase mb-6">Company</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="text-sm font-semibold text-white uppercase mb-6">Legal</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-white transition">Cookie Policy</a></li>
                    <li><a href="#" class="hover:text-white transition">GDPR</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-800 mt-12 pt-8 text-center text-sm text-slate-500">
            <p>© 2024 Mercury Restaurant Platform. All rights reserved.</p>
            <p class="mt-2">Built with ❤️ for restaurant owners worldwide</p>
        </div>
    </div>
</footer>

<!-- Floating CTA -->
<div class="fixed bottom-6 right-6 z-50">
    <a
        href="https://wa.me/2349165426799"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat with us on WhatsApp"
        class="flex h-14 w-14 items-center justify-center rounded-full bg-green-500 text-white shadow-lg hover:bg-green-600 focus:ring-4 focus:ring-green-300">
        <!-- WhatsApp icon -->
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 32 32"
            fill="currentColor"
            class="w-7 h-7">
            <path d="M19.11 17.44c-.28-.14-1.65-.81-1.9-.9-.26-.1-.45-.14-.64.14-.18.28-.73.9-.9 1.09-.17.18-.33.21-.61.07-.28-.14-1.18-.43-2.25-1.38-.83-.74-1.39-1.65-1.56-1.93-.16-.28-.02-.43.12-.57.12-.12.28-.33.42-.49.14-.17.18-.28.28-.47.09-.18.05-.35-.02-.49-.07-.14-.64-1.54-.88-2.11-.23-.56-.47-.49-.64-.5h-.55c-.18 0-.49.07-.74.35-.26.28-.97.95-.97 2.31 0 1.36 1 2.68 1.14 2.87.14.18 1.97 3.01 4.77 4.22.66.28 1.18.45 1.58.58.66.21 1.26.18 1.73.11.53-.08 1.65-.68 1.88-1.34.23-.66.23-1.22.16-1.34-.07-.12-.26-.18-.54-.32z" />
            <path d="M16.03 3C9.39 3 4 8.38 4 15c0 2.61.87 5.02 2.33 6.97L4 29l7.23-2.3A12.9 12.9 0 0 0 16.03 27C22.66 27 28 21.62 28 15S22.66 3 16.03 3zm0 22.08c-2.06 0-4.06-.56-5.79-1.61l-.41-.24-4.29 1.36 1.39-4.18-.27-.43A9.96 9.96 0 0 1 6.07 15c0-5.48 4.47-9.93 9.96-9.93 5.49 0 9.96 4.45 9.96 9.93 0 5.48-4.47 9.93-9.96 9.93z" />
        </svg>

    </a>
</div>

</body>
</html>
