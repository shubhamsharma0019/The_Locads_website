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
        @include('partials.site-footer')

</body>

</html>
