<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-meta', [
        'title' => 'Hardware Products | The Locads',
        'description' => 'Browse commercial hardware products from The Locads including displays, media players, and signage equipment.',
        'keywords' => 'digital signage hardware, commercial displays, media players, The Locads products'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .page-sections > section {
            padding-bottom: 3rem;
        }

        .page-sections > section + section {
            margin-top: 3rem;
        }

        @media (min-width: 1024px) {
            .page-sections > section {
                padding-bottom: 0;
            }

            .page-sections > section + section {
                margin-top: 4rem;
            }
        }
    </style>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-white flex justify-center font-[Inter] overflow-x-hidden">

    <!-- ================= MAIN WRAPPER ================= -->
    <div class="page-sections w-full max-w-[1387px] bg-white">

        <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 4])

        <!-- ================= HERO ================= -->
        <!-- FULL WIDTH HERO -->
        <section class="w-screen min-h-[593.45px] relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">

            <!-- BACKGROUND -->
            <img src="{{ asset('icons/backgroundimage.jpg') }}" class="w-full h-full object-cover absolute inset-0" />

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- CENTER CONTENT -->
            <div class="absolute inset-0 flex justify-center">

                <div class="w-full max-w-[1280px] min-h-[440px] mt-12 sm:mt-16 lg:mt-[76.72px] pt-16 sm:pt-20 lg:pt-[80px] px-4 sm:px-6 lg:px-[48px] flex flex-col items-center">

                    <!-- HEADING -->
                    <h1 class="text-[36px] leading-[44px] sm:text-[48px] sm:leading-[56px] lg:text-[60px] lg:leading-[72px] tracking-[-1.5px] font-bold text-white text-center">
                        Our <span class="text-red-500">Products</span>
                    </h1>

                    <!-- PARA -->
                    <p class="w-full max-w-[768px] mt-[24px] text-[18px] leading-[30px] sm:text-[22px] sm:leading-[34px] lg:text-[24px] lg:leading-[39px] text-white text-center">
                        A perfectly synchronized ecosystem of robust hardware and intuitive software.
                    </p>

                    <!-- TOGGLE -->
                    <div class="w-full max-w-[432px] min-h-[58px] mt-[36px] sm:mt-[48px] bg-[#E5E7EB] rounded-full flex flex-col sm:flex-row items-stretch sm:items-center p-[4px]">

                        <!-- ACTIVE TAB -->
                        <a
                            href="{{ route('products.index') }}"
                            class="w-full sm:w-[208px] h-[50px] bg-[#2563EB] rounded-full flex items-center justify-center shadow-[0px_4px_12px_rgba(37,99,235,0.35)]">
                            <span class="text-white text-[16px] font-semibold">
                                Hardware Solutions
                            </span>
                        </a>

                        <!-- INACTIVE TAB -->
                        <a href="{{ route('products.index-b') }}" class="w-full sm:w-[208px] h-[50px] flex items-center justify-center">
                            <span class="text-[#6B7280] text-[16px] font-semibold">
                                Software Platform
                            </span>
                        </a>

                    </div>
                </div>

            </div>

        </section>

        <section class="w-full max-w-[1184px] px-4 sm:px-6 lg:px-0 mx-auto mt-[64px] mb-[94px] flex flex-col sm:flex-row sm:flex-wrap xl:flex-nowrap gap-[24px] lg:gap-[32px]">
            @foreach (($dynamicProducts ?? collect()) as $product)
            <div class="w-full max-w-[373.33px] min-h-[624px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] overflow-hidden flex flex-col">
                <div class="w-full h-[256px] bg-[#F3F4F6]">
                    @if (!empty($product['image_path']))
                    <img src="{{ asset($product['image_path']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" />
                    @else
                    <div class="w-full h-full flex items-center justify-center">
                        <svg width="58" height="58" fill="none" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="13" rx="2" stroke="#155DFC" stroke-width="1.5"/><path d="M8 21h8M12 17v4" stroke="#155DFC" stroke-width="1.5" stroke-linecap="round"/></svg>
                    </div>
                    @endif
                </div>

                <div class="flex flex-col px-6 sm:px-8 pt-[32px]">
                    <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                        {{ $product['name'] }}
                    </h3>

                    <p class="text-[14px] leading-[20px] font-semibold text-[#1447E6] mt-[8px]">
                        Best for: {{ $product['best_for'] ?: $product['category'] }}
                    </p>

                    <div class="flex flex-col gap-[12px] mt-[16px]">
                        @foreach (array_slice($product['features'] ?? [], 0, 4) as $feature)
                        <div class="flex items-start gap-[8px]">
                            <img src="{{ asset('icons/maindiv.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                            <p class="text-[14px] leading-[20px] text-[#364153]">{{ $feature }}</p>
                        </div>
                        @endforeach

                        @if (empty($product['features']))
                        @foreach (array_slice($product['specifications'] ?? [], 0, 4) as $specification)
                        <div class="flex items-start gap-[8px]">
                            <img src="{{ asset('icons/maindiv.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                            <p class="text-[14px] leading-[20px] text-[#364153]">{{ $specification }}</p>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>

                <div class="mt-auto px-6 sm:px-8 pb-[32px]">
                    <a href="{{ route('products.detail', $product['slug']) }}" class="w-full h-[50px] border border-[#D1D5DC] rounded-[14px] flex items-center justify-center">
                        <span class="text-[16px] leading-[24px] font-medium text-[#101828]">
                            View Specs
                        </span>
                    </a>
                </div>
            </div>
            @endforeach

        </section>
        <!-- 🔷 THIRD DIV (FOOTER) -->
        <div
            class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

            <!-- 🔷 FOOTER INNER -->
            <div class="w-full max-w-[1280px] px-4 sm:px-6 lg:px-[48px] py-10 sm:py-14 lg:py-[81px] flex flex-col">

                <!-- 🔷 TOP GRID -->
                <div
                    class="w-full lg:w-[1184px] min-h-[176px] flex flex-col sm:flex-row sm:flex-wrap xl:flex-nowrap justify-between gap-8 lg:gap-10">

                    <!-- 🔷 COLUMN 1 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[24px]">

                        <!-- LOGO -->
                        <div class="w-[144.5px] h-[40.33px] flex items-center">
                            <img src="{{ asset('icons/logosmall.svg') }}" alt="Logo" class="max-w-full h-auto">
                        </div>

                        <!-- TEXT -->
                        <p class="w-full max-w-[260px] text-[14px] leading-[22.75px] text-[#4A5565]">
                            Transforming spaces with smart, cloud-powered digital signage
                            solutions for every industry.
                        </p>

                    </div>

                    <!-- 🔷 COLUMN 2 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <a href="{{ route('products.index-d') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Retail Displays</a>
                        <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Hospitality Signage</a>
                        <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Corporate Communications</a>
                        <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Healthcare Boards</a>

                    </div>

                    <!-- 🔷 COLUMN 3 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <a href="{{ route('about') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">About Us</a>
                        <a href="{{ route('services') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Our Services</a>
                        <a href="{{ route('signage') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Franchise Program</a>
                        <a href="{{ route('contact.alt') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Contact</a>

                    </div>

                    <!-- 🔷 COLUMN 4 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <p class="text-[14px] leading-[20px] text-[#4A5565]">
                            hello@pixelwave.demo
                        </p>

                        <p class="text-[14px] leading-[20px] text-[#4A5565]">
                            +1 (555) 123-4567
                        </p>

                        <p class="text-[14px] leading-[20px] text-[#4A5565] w-full max-w-[260px]">
                            100 Tech Hub Boulevard, Suite 500<br>
                            San Francisco, CA 94105
                        </p>

                    </div>

                </div>

                <!-- 🔷 BOTTOM BAR -->
                <div
                    class="w-full lg:w-[1184px] min-h-[49px] border-t border-[#E5E7EB] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 pt-[24px] sm:pt-[32px] mt-[24px]">

                    <!-- COPYRIGHT -->
                    <p class="text-[12px] leading-[16px] text-[#6A7282]">
                        © 2026 TheLocads Solutions. All rights reserved.
                    </p>

                    <!-- LINKS -->
                    <div class="flex flex-wrap gap-[24px] text-[12px] text-[#6A7282]">
                        <a href="{{ route('faq') }}" class="transition hover:text-[#E7000B]">Privacy Policy</a>
                        <a href="{{ route('services') }}" class="transition hover:text-[#E7000B]">Terms of Service</a>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <a href="{{ route('contact.alt') }}" class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]" aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </a>

</body>

</html>
