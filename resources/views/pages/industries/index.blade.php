<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-meta', [
        'title' => 'Industries | The Locads Digital Signage',
        'description' => 'See how The Locads digital signage solutions serve retail, healthcare, restaurants, corporate offices, transit, and education.',
        'keywords' => 'digital signage industries, retail signage, healthcare signage, corporate signage'
    ])

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white flex justify-center overflow-x-hidden">

    <!-- ================= MAIN WRAPPER ================= -->
    <div class="w-full max-w-[1387px] bg-white">

        <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 6])

        <!-- ================= HERO ================= -->
        <section
            class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[547.8px] bg-[#A3A3A3] flex justify-center">

            <div class="w-full max-w-[1387px] h-full relative bg-[#A3A3A3]">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- MAIN INNER CONTAINER -->
                <div class="absolute inset-0 w-full max-w-[1280px] mx-auto pt-16 sm:pt-20 lg:pt-[96px] px-4 sm:px-6 lg:px-[48px] flex justify-center">

                    <!-- CONTENT WRAPPER -->
                    <div class="w-full max-w-[1184px] mx-auto flex flex-col items-center gap-[20px] sm:gap-[24px]">

                        <!-- HEADING -->
                        <h1
                            class="w-full max-w-[672px] text-[36px] leading-[44px] sm:text-[48px] sm:leading-[56px] lg:text-[60px] lg:leading-[72px] tracking-[-1.5px] font-bold text-white text-center">
                            Tailored for <br>
                            <span class="text-red-500">Every Space</span>
                        </h1>

                        <!-- PARAGRAPH -->
                        <p class="w-full max-w-[672px] text-[18px] leading-[30px] sm:text-[22px] sm:leading-[34px] lg:text-[24px] lg:leading-[39px] text-white text-center">
                            Explore how PixelWave transforms environments across different sectors.
                        </p>

                    </div>

                </div>

            </div>

        </section>
        <!-- ================= CARDS ================= -->
        <section class="w-full max-w-[1184px] px-4 sm:px-6 lg:px-0 mx-auto mt-14 sm:mt-20 lg:mt-[96px] mb-14 sm:mb-20 lg:mb-[92px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[24px] lg:gap-[32px]">

            <!-- CARD -->
            <div class="w-full max-w-[373.33px] min-h-[444.25px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] 
              shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.1),0px_20px_25px_-5px_rgba(0,0,0,0.1)] overflow-hidden">

                <!-- IMAGE -->
                <img src="{{ asset('icons/firstdivimg.jpg') }}"
                    class="w-[calc(100%-2px)] h-[224px] object-cover m-[1px] rounded-t-[24px]" />



                <!-- CONTENT -->
                <div class="w-auto mx-6 sm:mx-8 mt-[17px] mb-6 flex flex-col">

                    <!-- HEADING -->
                    <h3 class="text-[24px] leading-[32px] font-semibold text-[#101828]">
                        Retail & Malls
                    </h3>

                    <!-- PARAGRAPH -->
                    <p class="mt-[20px] flex-1 text-[14px] leading-[22.75px] text-[#4A5565]">
                        Drive foot traffic, promote seasonal offers instantly, and provide interactive wayfinding for
                        massive retail complexes.
                    </p>

                    <!-- BUTTON -->
                    <a href="{{ route('products.index') }}" class="mt-[20px] self-start w-[179.07px] h-[46px] 
               rounded-[9999px] border border-[#8EC5FF] 
               bg-[#EFF6FF] flex items-center justify-center">

                        <span class="text-[16px] leading-[24px] font-medium text-[#1447E6]">
                            View Solutions →
                        </span>

                    </a>

                </div>

            </div>

            <!-- COPY SAME CARD (5 MORE TIMES) -->

            <!-- CARD 2 -->
            <div class="w-full max-w-[373.33px] min-h-[444.25px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] 
              shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.1),0px_20px_25px_-5px_rgba(0,0,0,0.1)] overflow-hidden">

                <img src="{{ asset('icons/seconddivimg.jpg') }}"
                    class="w-[calc(100%-2px)] h-[224px] object-cover m-[1px] rounded-t-[24px]" />
                <div class="w-auto mx-6 sm:mx-8 mt-[17px] mb-6 flex flex-col">

                    <h3 class="text-[24px] leading-[32px] font-semibold text-[#101828]">
                        Healthcare
                    </h3>

                    <p class="mt-[20px] flex-1 text-[14px] leading-[22.75px] text-[#4A5565]">
                        Modernize patient check-in with kiosks, manage queues efficiently, and broadcast emergency alerts network-wide instantly.
                    </p>

                    <a href="{{ route('products.index') }}" class="mt-[20px] self-start w-[179.07px] h-[46px] 
               rounded-[9999px] border border-[#8EC5FF] 
               bg-[#EFF6FF] flex items-center justify-center">

                        <span class="text-[16px] leading-[24px] font-medium text-[#1447E6]">
                            View Solutions →
                        </span>

                    </a>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="w-full max-w-[373.33px] min-h-[444.25px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] 
              shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.1),0px_20px_25px_-5px_rgba(0,0,0,0.1)] overflow-hidden">

                <img src="{{ asset('icons/thirddivimg.jpg') }}"
                    class="w-[calc(100%-2px)] h-[224px] object-cover m-[1px] rounded-t-[24px]" />

                <div class="w-auto mx-6 sm:mx-8 mt-[17px] mb-6 flex flex-col">

                    <h3 class="text-[24px] leading-[32px] font-semibold text-[#101828]">
                        Restaurants & QSR
                    </h3>

                    <p class="mt-[20px] flex-1 text-[14px] leading-[22.75px] text-[#4A5565]">
                        Update prices remotely, manage dynamic digital menu boards, and run day-parting promotions to increase average ticket size.
                    </p>

                    <a href="{{ route('products.index') }}" class="mt-[20px] self-start w-[179.07px] h-[46px] 
               rounded-[9999px] border border-[#8EC5FF] 
               bg-[#EFF6FF] flex items-center justify-center">

                        <span class="text-[16px] leading-[24px] font-medium text-[#1447E6]">
                            View Solutions →
                        </span>

                    </a>

                </div>

            </div>

            <!-- ROW 2 -->

            <div class="w-full max-w-[373.33px] min-h-[444.25px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] 
              shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.1),0px_20px_25px_-5px_rgba(0,0,0,0.1)] overflow-hidden">

                <img src="{{ asset('icons/fourthdivimg.jpg') }}"
                    class="w-[calc(100%-2px)] h-[224px] object-cover m-[1px] rounded-t-[24px]" />

                <div class="w-auto mx-6 sm:mx-8 mt-[17px] mb-6 flex flex-col">

                    <h3 class="text-[24px] leading-[32px] font-semibold text-[#101828]">
                        Corporate Offices
                    </h3>

                    <p class="mt-[20px] flex-1 text-[14px] leading-[22.75px] text-[#4A5565]">
                        Improve internal communications, display real-time KPI dashboards, and streamline meeting room booking with digital door signs.
                    </p>

                    <a href="{{ route('products.index') }}" class="mt-[20px] self-start w-[179.07px] h-[46px] 
               rounded-[9999px] border border-[#8EC5FF] 
               bg-[#EFF6FF] flex items-center justify-center">

                        <span class="text-[16px] leading-[24px] font-medium text-[#1447E6]">
                            View Solutions →
                        </span>

                    </a>

                </div>

            </div>

            <div class="w-full max-w-[373.33px] min-h-[444.25px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] 
              shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.1),0px_20px_25px_-5px_rgba(0,0,0,0.1)] overflow-hidden">

                <img src="{{ asset('icons/fifthdivimg.jpg') }}"
                    class="w-[calc(100%-2px)] h-[224px] object-cover m-[1px] rounded-t-[24px]" />

                <div class="w-auto mx-6 sm:mx-8 mt-[17px] mb-6 flex flex-col">

                    <h3 class="text-[24px] leading-[32px] font-semibold text-[#101828]">
                        Transit & Airports
                    </h3>

                    <p class="mt-[20px] flex-1 text-[14px] leading-[22.75px] text-[#4A5565]">
                       Display FIDS (Flight Information), provide multi-lingual wayfinding, and generate massive ad revenue through programmatic DOOH.
                    </p>

                    <a href="{{ route('products.index') }}" class="mt-[20px] self-start w-[179.07px] h-[46px] 
               rounded-[9999px] border border-[#8EC5FF] 
               bg-[#EFF6FF] flex items-center justify-center">

                        <span class="text-[16px] leading-[24px] font-medium text-[#1447E6]">
                            View Solutions →
                        </span>

                    </a>

                </div>

            </div>

            <div class="w-full max-w-[373.33px] min-h-[444.25px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] 
              shadow-[0px_8px_10px_-6px_rgba(0,0,0,0.1),0px_20px_25px_-5px_rgba(0,0,0,0.1)] overflow-hidden">

                <img src="{{ asset('icons/sixthdivimg.jpg') }}"
                    class="w-[calc(100%-2px)] h-[224px] object-cover m-[1px] rounded-t-[24px]" />

                <div class="w-auto mx-6 sm:mx-8 mt-[17px] mb-6 flex flex-col">

                    <h3 class="text-[24px] leading-[32px] font-semibold text-[#101828]">
                        Education
                    </h3>

                    <p class="mt-[20px] flex-1 text-[14px] leading-[22.75px] text-[#4A5565]">
                        Connect sprawling campuses with synchronized announcements, event schedules, and critical emergency broadcast overrides.
                    </p>

                    <a href="{{ route('products.index') }}" class="mt-[20px] self-start w-[179.07px] h-[46px] 
               rounded-[9999px] border border-[#8EC5FF] 
               bg-[#EFF6FF] flex items-center justify-center">

                        <span class="text-[16px] leading-[24px] font-medium text-[#1447E6]">
                            View Solutions →
                        </span>

                    </a>

                </div>

            </div>

        </section>
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
                            <a href="{{ route('home') }}" class="flex items-center">
                                <img src="{{ asset('icons/logosmall.svg') }}" alt="Logo" class="max-w-full h-auto">
                            </a>
                        </div>

                        <!-- TEXT -->
                        <p class="w-full max-w-[260px] text-[14px] leading-[22.75px] text-[#4A5565]">
                            Transforming spaces with smart, cloud-powered digital signage
                            solutions for every industry.
                        </p>

                    </div>

                    <!-- 🔷 COLUMN 2 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <a href="{{ route('products.index-d') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Retail Displays</a>
                        <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Hospitality Signage</a>
                        <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Corporate Communications</a>
                        <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Healthcare Boards</a>

                    </div>

                    <!-- 🔷 COLUMN 3 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <a href="{{ route('about') }}" class="text-[14px] leading-[20px] text-[#4A5565]">About Us</a>
                        <a href="{{ route('services') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Our Services</a>
                        <a href="{{ route('signage') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Franchise Program</a>
                        <a href="{{ route('contact.alt') }}" class="text-[14px] leading-[20px] text-[#4A5565]">Contact</a>

                    </div>

                    <!-- 🔷 COLUMN 4 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <a href="mailto:hello@pixelwave.demo" class="text-[14px] leading-[20px] text-[#4A5565]">
                            hello@pixelwave.demo
                        </a>

                        <a href="tel:+15551234567" class="text-[14px] leading-[20px] text-[#4A5565]">
                            +1 (555) 123-4567
                        </a>

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
                        <a href="{{ route('faq') }}">Privacy Policy</a>
                        <a href="{{ route('services') }}">Terms of Service</a>
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
