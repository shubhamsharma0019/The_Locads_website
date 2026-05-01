<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @include('partials.seo-meta', [
        'title' => 'Media Players | The Locads',
        'description' => 'Discover media players from The Locads built for reliable digital signage playback, control, and performance.',
        'keywords' => 'media players, signage media player, digital playback hardware, The Locads'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 overflow-x-hidden bg-white">

    <!-- ================= MAIN CONTAINER ================= -->
    <div class="signage12-shell w-full max-w-[1387px] mx-auto">

        <!-- ================= HEADER ================= -->
        @include('partials.signage-header', ['currentPage' => 12])

        <!-- ================= HERO SECTION ================= -->
        <section class="signage12-hero relative z-0 w-full max-w-[1387px] h-[394px] mx-auto mt-[80px] pt-[80px] px-[53.5px]
         bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#F9FAFB] before:to-[#EFF6FF] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[64px] max-lg:pb-[64px] max-md:mt-[40px] max-md:px-[16px] max-md:pt-[48px] max-md:pb-[48px]">

            <!-- INNER WRAPPER (1280px center align) -->
            <div class="signage12-hero-inner w-[1280px] max-w-full mx-auto text-center">

                <!-- ================= HEADING ================= -->
                <div class="signage12-hero-title w-[371px] h-[72px] mx-auto max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto">
                    <h1 class="text-[60px] leading-[72px] font-bold tracking-[-1.5px] text-[#111827] max-lg:text-[44px] max-lg:leading-[1.15] max-md:text-[34px]">
                        Our <span class="text-[#4F46E5] tracking-[-1.8px]">Products</span>
                    </h1>
                </div>

                <!-- ================= DESCRIPTION ================= -->
                <div class="signage12-hero-copy w-[768px] h-[56px] mx-auto mt-[24px] max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto">
                    <p class="text-[20px] leading-[28px] text-[#364153] font-normal max-md:text-[17px] max-md:leading-[1.6]">
                        Commercial-grade digital signage hardware and software solutions. Buy or rent to fit your
                        budget.
                    </p>
                </div>

                <!-- ================= BUTTON ================= -->
                <div class="signage12-hero-cta w-[320.88px] h-[50px] mx-auto mt-[32px] max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto max-md:max-w-full">

                    <button class="w-full h-full rounded-full border border-[#FFA2A2] bg-[#FFE2E2]
               flex items-center justify-center gap-[4px] max-md:min-h-[50px] max-md:px-[16px] max-md:py-[12px]">

                        <!-- ICON (SVG Laravel friendly) -->
                        <span class="w-[20px] h-[20px] flex items-center justify-center">
                            <!-- Clock icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#9F0712]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>

                        <!-- TEXT -->
                        <span class="text-[16px] leading-[24px] font-semibold text-[#9F0712] max-md:text-[14px] max-md:leading-[20px]">
                            All products available for rent!
                        </span>

                    </button>

                </div>

            </div>
        </section>
        @include('partials.product-filter', ['currentPage' => 12])

        <section class="signage12-products w-full max-w-[1387px] mx-auto px-[101.5px] pt-[64px] pb-[64px] max-[1387px]:px-[24px] max-md:px-[16px] max-md:pt-[40px] max-md:pb-[40px]">

            <!-- INNER WRAPPER -->
            <div class="signage12-products-grid w-[1184px] max-w-full mx-auto grid grid-cols-3 gap-[24px] max-[1387px]:grid-cols-2 max-md:grid-cols-1 max-md:gap-[16px]">
                <div class="signage12-card w-[373.33px] h-[600px] max-[1387px]:w-full max-[1387px]:h-auto bg-white rounded-[16px] border border-[#E5E7EB]">

                    <!-- IMAGE -->
                    <div class="signage12-card-image w-[371.33px] h-[224px] max-[1387px]:w-full max-[1387px]:h-auto max-[1387px]:aspect-[371.33/224] bg-[#F3F4F6] rounded-t-[16px]"><img class="rounded-[14px] max-[1387px]:block max-[1387px]:w-full max-[1387px]:h-full max-[1387px]:object-cover"
                            src="{{ asset('icons/mediaimage.jpg') }}"></div>

                    <!-- CONTENT -->
                    <div class="signage12-card-content w-full h-[343px] max-[1387px]:h-auto px-[24px] pt-[24px] max-md:pb-[16px]">

                        <!-- TITLE -->
                        <div class="signage12-card-title w-[323.33px] max-[1387px]:w-full mt-[24px] h-[28px]">
                            <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Edge Media Player - i5
                            </h3>
                        </div>

                        <!-- FEATURES -->
                        <div class="signage12-card-features w-[323.33px] max-[1387px]:w-full mt-[16px] flex flex-col gap-[8px]">

                            <!-- ITEM -->
                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565] leading-[20px]">
                                    43" 4K UHD
                                </span>
                            </div>

                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    500 nits brightness
                                </span>
                            </div>

                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    500 nits brightness
                                </span>
                            </div>

                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    Android OS
                                </span>
                            </div>

                        </div>

                        <!-- BOTTOM SECTION -->
                        <div
                            class="signage12-card-bottom w-[323.33px] max-[1387px]:w-full mt-[24px] pt-[17px] border-t border-[#E5E7EB] flex flex-col gap-[16px] max-[1387px]:h-auto">

                            <!-- ================= PRICE ROW ================= -->
                            <div class="w-full h-[52px] flex justify-between items-center">

                                <!-- LEFT (PURCHASE) -->
                                <div class="flex flex-col justify-between h-[52px]">
                                    <span class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Purchase
                                    </span>
                                    <span class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                        $899
                                    </span>
                                </div>

                                <!-- RIGHT (RENT) -->
                                <div class="flex flex-col justify-between items-end h-[52px]">
                                    <span class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Rent
                                    </span>
                                    <span class="text-[20px] leading-[28px] font-bold text-[#E7000B]">
                                        $49/month
                                    </span>
                                </div>

                            </div>

                            <!-- ================= ACTION ROW ================= -->
                            <div class="signage12-card-actions w-full h-[42px] flex items-center gap-[8px] max-md:h-auto max-md:flex-col max-md:items-stretch max-md:gap-[8px]">

                                <!-- BUTTON -->
                                <a href="{{ route('products.detail', 'edge-media-players') }}"
                                    class="w-[261.33px] max-md:w-full h-[42px] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
                                    <span class="text-white text-[14px] font-medium">
                                        View Details
                                    </span>
                                </a>

                                <!-- CART BUTTON -->
                                <a href="{{ route('contact.alt') }}"
                                    class="signage12-card-cart w-[54px] h-[42px] border-[2px] border-[#D1D5DC] rounded-[14px] flex items-center justify-center max-md:mt-[8px]">

                                    <!-- SVG ICON -->
                                    <img src="{{ asset('icons/carticon.svg') }}" class="w-[18px] h-[18px]"
                                        alt="cart icon">

                                </a>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- ================= CARD ================= -->
                <div class="signage12-card w-[373.33px] h-[600px] max-[1387px]:w-full max-[1387px]:h-auto bg-white rounded-[16px] border border-[#E5E7EB]">

                    <!-- IMAGE -->
                    <div class="signage12-card-image w-[371.33px] h-[224px] max-[1387px]:w-full max-[1387px]:h-auto max-[1387px]:aspect-[371.33/224] bg-[#F3F4F6] rounded-t-[16px]"><img class="rounded-[14px] max-[1387px]:block max-[1387px]:w-full max-[1387px]:h-full max-[1387px]:object-cover"
                            src="{{ asset('icons/mediaimage.jpg') }}"></div>

                    <!-- CONTENT -->
                    <div class="signage12-card-content w-full h-[343px] max-[1387px]:h-auto px-[24px] pt-[24px] max-md:pb-[16px]">

                        <!-- TITLE -->
                        <div class="signage12-card-title w-[323.33px] max-[1387px]:w-full mt-[24px] h-[28px]">
                            <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Edge Media Player - i5
                            </h3>
                        </div>

                        <!-- FEATURES -->
                        <div class="signage12-card-features w-[323.33px] max-[1387px]:w-full mt-[16px] flex flex-col gap-[8px]">

                            <!-- ITEM -->
                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565] leading-[20px]">
                                    43" 4K UHD
                                </span>
                            </div>

                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    500 nits brightness
                                </span>
                            </div>

                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    500 nits brightness
                                </span>
                            </div>

                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    Android OS
                                </span>
                            </div>

                        </div>

                        <!-- BOTTOM SECTION -->
                        <div
                            class="signage12-card-bottom w-[323.33px] max-[1387px]:w-full mt-[24px] pt-[17px] border-t border-[#E5E7EB] flex flex-col gap-[16px] max-[1387px]:h-auto">

                            <!-- ================= PRICE ROW ================= -->
                            <div class="w-full h-[52px] flex justify-between items-center">

                                <!-- LEFT (PURCHASE) -->
                                <div class="flex flex-col justify-between h-[52px]">
                                    <span class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Purchase
                                    </span>
                                    <span class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                        $899
                                    </span>
                                </div>

                                <!-- RIGHT (RENT) -->
                                <div class="flex flex-col justify-between items-end h-[52px]">
                                    <span class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Rent
                                    </span>
                                    <span class="text-[20px] leading-[28px] font-bold text-[#E7000B]">
                                        $49/month
                                    </span>
                                </div>

                            </div>

                            <!-- ================= ACTION ROW ================= -->
                            <div class="signage12-card-actions w-full h-[42px] flex items-center gap-[8px] max-md:h-auto max-md:flex-col max-md:items-stretch max-md:gap-[8px]">

                                <!-- BUTTON -->
                                <a href="{{ route('products.detail', 'edge-media-player-i5-rent') }}"
                                    class="w-[261.33px] max-md:w-full h-[42px] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
                                    <span class="text-white text-[14px] font-medium">
                                        View Details
                                    </span>
                                </a>

                                <!-- CART BUTTON -->
                                <a href="{{ route('contact.alt') }}"
                                    class="signage12-card-cart w-[54px] h-[42px] border-[2px] border-[#D1D5DC] rounded-[14px] flex items-center justify-center max-md:mt-[8px]">

                                    <!-- SVG ICON -->
                                    <img src="{{ asset('icons/carticon.svg') }}" class="w-[18px] h-[18px]"
                                        alt="cart icon">

                                </a>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section>
        @include('partials.public-product-grid', [
            'products' => $mediaProducts ?? collect(),
            'title' => 'Created Media Products',
            'description' => 'Media Player category me create kiye gaye products is section me show honge.',
        ])
        <!-- ================= CTA SECTION ================= -->
        <section class="signage12-cta relative z-0 w-full max-w-[1387px] h-[296px] mx-auto mt-[64px] px-[53.5px] pt-[64px] bg-[#F9FAFB] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[56px] max-lg:pb-[56px] max-md:mt-[48px] max-md:px-[16px] max-md:pt-[48px] max-md:pb-[48px] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-[#F9FAFB]">

            <!-- INNER CONTAINER -->
            <div class="signage12-cta-inner w-[1280px] h-[168px] max-w-full mx-auto flex flex-col items-center max-md:h-auto">

                <!-- HEADING -->
                <div class="signage12-cta-heading w-[1184px] h-[36px] max-[1387px]:w-full flex justify-center">
                    <h2 class="text-[30px] leading-[36px] font-bold text-[#101828] text-center max-md:text-[28px] max-md:leading-[1.2]">
                        Need Help Choosing?
                    </h2>
                </div>

                <!-- DESCRIPTION -->
                <div class="signage12-cta-copy w-[1184px] max-[1387px]:w-full mt-[16px] flex justify-center">
                    <p class="w-[682px] max-w-full max-md:w-full text-[18px] leading-[28px] text-[#364153] text-center max-md:text-[16px] max-md:leading-[26px]">
                        Our team can help you select the perfect digital signage solution for your needs.
                    </p>
                </div>

                <!-- BUTTON -->
                <div class="w-[1184px] mt-[24px] flex justify-center">

                    <a href="{{ route('contact.alt') }}" class="w-[241.4px] h-[56px] bg-[#E7000B] rounded-full flex items-center justify-center
               shadow-[0_4px_6px_rgba(0,0,0,0.1),0_10px_15px_rgba(0,0,0,0.1)]">

                        <span class="text-white text-[16px] leading-[24px] font-bold">
                            Schedule Consultation
                        </span>

                    </a>

                </div>

            </div>
        </section>
        <!-- ================= FOOTER ================= -->
        <div
            class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] mt-[92px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

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

    <a href="{{ route('contact.alt') }}"
        class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]"
        aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </a>

</body>

</html>
