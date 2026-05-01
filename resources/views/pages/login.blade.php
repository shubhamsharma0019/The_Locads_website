<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('partials.seo-meta', [
        'title' => 'The Locads Login | Dashboard Access',
        'description' => 'Secure login for The Locads dashboard and internal management tools.',
        'keywords' => 'The Locads login, dashboard login, admin access',
        'robots' => 'noindex,nofollow'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #6c3fc5 0%, #5b2fa8 30%, #7b3fcf 60%, #8b45d4 100%);
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
        }

        .sign-in-btn {
            background: linear-gradient(90deg, #6c3fc5 0%, #9b59e0 100%);
        }

        .sign-in-btn:hover {
            background: linear-gradient(90deg, #5a30b0 0%, #8748cc 100%);
        }

        /* Logo text colors */
        .logo-the {
            color: #cc1414;
        }

        .logo-loc {
            color: #1a1a1a;
        }

        .logo-ads {
            color: #2563eb;
        }

        .logo-tagline {
            color: #888;
            font-size: 10px;
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }
    </style>
</head>

<body class="min-h-screen flex">

    <!-- LEFT PANEL -->
    <div class="hero-gradient w-1/2 min-h-screen flex flex-col justify-center px-14 py-16 relative overflow-hidden">

        <!-- Subtle decorative blobs -->
        <div class="absolute top-0 right-0 w-72 h-72 rounded-full opacity-20"
            style="background:radial-gradient(circle, #fff 0%, transparent 70%); transform:translate(40%,-40%);"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 rounded-full opacity-10"
            style="background:radial-gradient(circle, #fff 0%, transparent 70%); transform:translate(-40%,40%);"></div>

        <!-- Heading -->
        <h1 class="text-white text-4xl font-extrabold leading-tight mb-4">
            Smart Digital <span class="text-blue-300">Signage</span><br />Management
        </h1>
        <p class="text-white/75 text-base mb-12 max-w-sm leading-relaxed">
            Control, schedule and monitor all your screens from one intelligent platform built for modern businesses.
        </p>

        <!-- Feature Cards -->
        <div class="space-y-4">
            <!-- Real-time Sync -->
            <div class="feature-card rounded-2xl px-5 py-4 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full flex items-center justify-center"
                    style="background:rgba(255,255,255,0.18);">
                    <svg class="w-5 h-5 text-green-300" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm">Real-time Sync</p>
                    <p class="text-white/60 text-xs mt-0.5">Instantly update content across all screens</p>
                </div>
            </div>

            <!-- Smart Scheduling -->
            <div class="feature-card rounded-2xl px-5 py-4 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full flex items-center justify-center"
                    style="background:rgba(255,255,255,0.18);">
                    <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" />
                        <path stroke-linecap="round" d="M12 6v6l4 2" />
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm">Smart Scheduling</p>
                    <p class="text-white/60 text-xs mt-0.5">Automate content delivery with precision timing</p>
                </div>
            </div>

            <!-- Cloud Media Control -->
            <div class="feature-card rounded-2xl px-5 py-4 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full flex items-center justify-center"
                    style="background:rgba(255,255,255,0.18);">
                    <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 15a4 4 0 004 4h10a4 4 0 001.5-7.7A5 5 0 006.1 9.4 4 4 0 003 15z" />
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm">Cloud Media Control</p>
                    <p class="text-white/60 text-xs mt-0.5">Manage and distribute media from anywhere</p>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="w-1/2 min-h-screen bg-gray-50 flex flex-col items-center justify-center px-12 py-16">

        <!-- Logo -->
        <div class="mb-10 text-center">
            <div class="text-3xl font-extrabold tracking-tight">
                <span class="logo-the">The</span><span class="logo-loc">Loc</span><span class="logo-ads">ads</span>
            </div>
            <p class="logo-tagline mt-1">Outdoor Advertising Simplified</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-lg px-10 py-10 w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-900 text-center mb-1">Welcome Back</h2>
            <p class="text-gray-500 text-sm text-center mb-8">Login to your dashboard</p>

            <!-- ERROR MESSAGE -->
            @if(session('error'))
                <p class="text-red-500 text-sm text-center mb-4">{{ session('error') }}</p>
            @endif

            <!-- FORM START -->
            <form method="POST" action="{{ url('/login') }}" autocomplete="off">
                @csrf

                <input type="text" name="fake_email" class="hidden" autocomplete="off" tabindex="-1" aria-hidden="true">
                <input type="password" name="fake_password" class="hidden" autocomplete="new-password" tabindex="-1" aria-hidden="true">

                <!-- Email -->
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <div
                        class="flex items-center border border-gray-200 rounded-lg px-3 py-2.5 bg-white focus-within:ring-2 focus-within:border-transparent transition">
                        <input type="email" name="email" value="" autocomplete="off" autocapitalize="off" spellcheck="false" placeholder="Enter your email"
                            class="flex-1 text-sm outline-none" required />
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div
                        class="flex items-center border border-gray-200 rounded-lg px-3 py-2.5 bg-white focus-within:ring-2 focus-within:ring-purple-400 focus-within:border-transparent transition">
                        <input type="password" name="password" value="" autocomplete="new-password" placeholder="Enter your password"
                            class="flex-1 text-sm text-gray-700 outline-none bg-transparent placeholder-gray-400"
                            required />
                    </div>
                </div>

                <!-- Remember me -->
                <div class="flex items-center justify-between mb-7">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember"
                            class="w-4 h-4 rounded border-gray-300 accent-purple-600" />
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3.5 rounded-xl bg-purple-600 text-white font-bold text-base tracking-wide shadow hover:bg-purple-700 transition-all duration-200">
                    Sign In →
                </button>

            </form>

            <!-- Footer -->
            <p class="text-center text-gray-400 text-xs mt-6">Secure login powered by Thelocads</p>
        </div>
    </div>
</body>

</html>
