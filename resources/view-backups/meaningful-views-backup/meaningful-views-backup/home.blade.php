<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .page-sections > section {
            padding-bottom: 3rem;
        }

        .page-sections > section + section {
            margin-top: 0;
        }

        @media (min-width: 1024px) {
            .page-sections > section {
                padding-bottom: 4rem;
            }

            .page-sections > section + section {
                margin-top: 0;
            }
        }
    </style>
    <title>TheLocads UI</title>
</head>

<body class="bg-white flex justify-center overflow-x-hidden">

    <!-- 🔷 TOP LEVEL CONTAINER -->
    <div class="page-sections w-full max-w-[1387px]">

        <!-- ================= HEADER ================= -->
        <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 1])

        <!-- ================= HERO SECTION ================= -->
        <section class="w-full min-h-[821.7px] bg-white flex flex-col lg:flex-row relative">

            <!-- OUTER WRAPPER (matches left: 53.5px) -->
            <div class="w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-[48px] mt-12 sm:mt-16 lg:mt-[86.09px] flex justify-between relative">

                <!-- INNER WRAPPER (1184px exact) -->
                <div class="w-full max-w-[1184px] mx-auto flex flex-col lg:flex-row justify-between items-center lg:items-start gap-10 lg:gap-0">

                    <!-- LEFT CONTENT (First Div) -->
                    <div class="w-full max-w-[464px] lg:mr-[39.5px] min-h-[649.5px] flex flex-col">

                        <!-- ✅ BADGE (exact size + border + color) -->
                        <div class="w-[249.61px] h-[38px] rounded-full bg-[#EFF6FF] border border-[#BEDBFF] 
            flex items-center gap-[8px] pl-[16px]">

                            <!-- DOT -->
                            <div class="w-[6px] h-[6px] bg-[#1447E6] rounded-full"></div>

                            <!-- TEXT -->
                            <span class="text-[14px] leading-[20px] font-medium text-[#1447E6]">
                                Next-Gen Display Technology
                            </span>

                        </div>

                        <!-- ✅ HEADING BLOCK -->
                        <div class="w-full max-w-[464px] min-h-[360px] mt-[32px] flex flex-col">

                            <!-- Top Text -->
                            <h1 class="text-[42px] leading-[52px] sm:text-[56px] sm:leading-[68px] lg:text-[72px] lg:leading-[90px] font-bold text-[#101828] tracking-[-1.8px]">
                                Transform Spaces with
                            </h1>

                            <!-- Gradient Text -->
                            <h1 class="text-[42px] leading-[52px] sm:text-[56px] sm:leading-[68px] lg:text-[72px] lg:leading-[90px] font-bold tracking-[-1.8px] 
               bg-gradient-to-r from-[#E7000B] to-[#155DFC] bg-clip-text text-transparent">
                                Smart Digital Signage
                            </h1>

                        </div>

                        <!-- ✅ PARAGRAPH BLOCK -->
                        <div class="w-full max-w-[464px] min-h-[97.5px] mt-[24px]">
                            <p class="text-[20px] leading-[32.5px] text-[#364153] font-normal">
                                Cloud-powered, scalable signage solutions for every industry.
                                Manage screens globally, update instantly, and engage your audience.
                            </p>
                        </div>

                        <!-- ✅ BUTTON GROUP -->
                        <div class="w-full max-w-[464px] min-h-[58px] flex flex-col sm:flex-row gap-[16px] mt-[40px]">

                            <!-- Primary Button -->
                            <button class="w-[191.23px] h-[56px] rounded-full bg-[#E7000B] text-white text-sm font-medium
                   shadow-[0_4px_6px_-4px_rgba(0,0,0,0.1),0_10px_15px_-3px_rgba(0,0,0,0.1)]">
                                Book a Demo →
                            </button>

                            <!-- Secondary Button -->
                            <button class="w-[198.74px] h-[58px] rounded-full border border-[#D1D5DC] 
                   px-[32px] py-[16px] text-sm font-medium text-black bg-white">
                                Explore Solutions
                            </button>

                        </div>

                    </div>

                    <!-- RIGHT IMAGE (matches 681px × 454px, radius 24px, left 503.5px) -->
                    <div class="w-full max-w-[681px] h-[320px] sm:h-[400px] lg:h-[454px] rounded-[24px] overflow-hidden">
                        <img src="{{ asset('icons/home1img.jpg') }}" class="w-full h-full object-cover" />
                    </div>

                </div>

            </div>

            <!-- SCROLL INDICATOR -->
            <div class="flex self-center mt-[16px] mb-[8px] w-[24px] h-[40px]
            rounded-full border-[2px] border-[#99A1AF]
            items-start justify-center pt-[8px] px-[8px] lg:absolute lg:left-[681.5px] lg:top-[751.65px] lg:mt-0">

                <!-- INNER DOT -->
                <div class="w-[4px] h-[4px] bg-[#155DFC] rounded-full"></div>

            </div>

        </section>

        <!-- ================= SECOND SECTION ================= -->
        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[686.25px] bg-[#F9FAFB] flex">

            <!-- OUTER WRAPPER -->
            <div class="w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-[48px] mt-16 lg:mt-[96px]">

                <!-- INNER WRAPPER -->
                <div class="w-full max-w-[1184px] mx-auto">

                    <!-- HEADING BLOCK -->
                    <div class="w-full max-w-[768px] mx-auto flex flex-col gap-[20px]">

                        <!-- HEADING -->
                        <div class="w-full min-h-[96px] flex items-center justify-center">
                            <h2 class="text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828] text-center">
                                Engineered for Scale & <div>Reliability</div>
                            </h2>
                        </div>

                        <!-- PARAGRAPH -->
                        <div class="w-full min-h-[56px] flex items-center justify-center">
                            <p class="text-[18px] leading-[28px] text-[#364153] text-center">
                                Our comprehensive ecosystem combines cutting-edge hardware
                                with intelligent cloud software.
                            </p>
                        </div>

                    </div>

                    <!-- CARDS WRAPPER -->
                    <div class="w-full max-w-[1184px] mt-[48px] lg:mt-[64px] grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-[24px]">

                        <!-- CARD 1 -->
                        <div class="w-full max-w-[278px] mx-auto h-[254.25px] bg-white rounded-[16px] border border-[#E5E7EB] 
            shadow-[0_2px_4px_-2px_rgba(0,0,0,0.1),0_4px_6px_-1px_rgba(0,0,0,0.1)] 
            relative">

                            <!-- ICON -->
                            <div class="absolute top-[33px] left-[33px] w-[56px] h-[56px] 
              rounded-[14px] border border-[#BEDBFF] bg-[#DBEAFE] 
              flex items-center justify-center">

                                <!-- Replace with your icon -->
                                <span class="text-blue-600 text-[20px]"> <img src="{{ asset('icons/24.svg') }}"></span>

                            </div>

                            <!-- HEADING -->
                            <div class="absolute top-[113px] left-[33px] w-[212px] h-[28px] flex items-center">
                                <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                    24/7 NOC Support
                                </h3>
                            </div>

                            <!-- PARAGRAPH -->
                            <div class="absolute top-[153px] left-[33px] w-[212px]">
                                <p class="text-[14px] leading-[22.75px] text-[#4A5565]">
                                    Network Operations Center monitoring your screens around the clock.
                                </p>
                            </div>

                        </div>

                        <!-- CARD 2 -->
                        <div class="w-full max-w-[278px] mx-auto h-[254.25px] bg-white rounded-[16px] border border-[#E5E7EB] 
            shadow-[0_2px_4px_-2px_rgba(0,0,0,0.1),0_4px_6px_-1px_rgba(0,0,0,0.1)] 
            relative">

                            <!-- ICON -->
                            <div class="absolute top-[33px] left-[33px] w-[56px] h-[56px] 
              rounded-[14px] border border-[#BEDBFF] bg-[#DBEAFE] 
              flex items-center justify-center">

                                <!-- Replace with your icon -->
                                <span class="text-blue-600 text-[20px]"> <img
                                        src="{{ asset('icons/cloud.svg') }}"></span>

                            </div>

                            <!-- HEADING -->
                            <div class="absolute top-[113px] left-[33px] w-[212px] h-[28px] flex items-center">
                                <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                    Cloud CMS
                                </h3>
                            </div>

                            <!-- PARAGRAPH -->
                            <div class="absolute top-[153px] left-[33px] w-[212px]">
                                <p class="text-[14px] leading-[22.75px] text-[#4A5565]">
                                    Manage content from anywhere. Schedule, deploy, and monitor easily.
                                </p>
                            </div>

                        </div>

                        <!-- CARD 3 -->
                        <div class="w-full max-w-[278px] mx-auto h-[254.25px] bg-white rounded-[16px] border border-[#E5E7EB] 
            shadow-[0_2px_4px_-2px_rgba(0,0,0,0.1),0_4px_6px_-1px_rgba(0,0,0,0.1)] 
            relative">

                            <!-- ICON -->
                            <div class="absolute top-[33px] left-[33px] w-[56px] h-[56px] 
              rounded-[14px] border border-[#BEDBFF] bg-[#DBEAFE] 
              flex items-center justify-center">

                                <!-- Replace with your icon -->
                                <span class="text-blue-600 text-[20px]"> <img
                                        src="{{ asset('icons/real.svg') }}"></span>

                            </div>

                            <!-- HEADING -->
                            <div class="absolute top-[113px] left-[33px] w-[212px] h-[28px] flex items-center">
                                <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                    Real-time Updates
                                </h3>
                            </div>

                            <!-- PARAGRAPH -->
                            <div class="absolute top-[153px] left-[33px] w-[212px]">
                                <p class="text-[14px] leading-[22.75px] text-[#4A5565]">
                                    Push critical information across thousands of screens instantly.
                                </p>
                            </div>

                        </div>

                        <!-- CARD 4 -->
                        <div class="w-full max-w-[278px] mx-auto h-[254.25px] bg-white rounded-[16px] border border-[#E5E7EB] 
            shadow-[0_2px_4px_-2px_rgba(0,0,0,0.1),0_4px_6px_-1px_rgba(0,0,0,0.1)] 
            relative">

                            <!-- ICON -->
                            <div class="absolute top-[33px] left-[33px] w-[56px] h-[56px] 
              rounded-[14px] border border-[#BEDBFF] bg-[#DBEAFE] 
              flex items-center justify-center">

                                <!-- Replace with your icon -->
                                <span class="text-blue-600 text-[20px]"> <img
                                        src="{{ asset('icons/analytics.svg') }}"></span>

                            </div>

                            <!-- HEADING -->
                            <div class="absolute top-[113px] left-[33px] w-[212px] h-[28px] flex items-center">
                                <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                    Analytics & ROI
                                </h3>
                            </div>

                            <!-- PARAGRAPH -->
                            <div class="absolute top-[153px] left-[33px] w-[212px]">
                                <p class="text-[14px] leading-[22.75px] text-[#4A5565]">
                                    Track viewer engagement and optimize your digital strategy.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </section>


        <!-- ********** -->
        <section class="w-full min-h-[864px] bg-white flex">

            <!-- OUTER WRAPPER -->
            <div class="w-full max-w-[1387px] pt-16 lg:pt-[96px] px-4 sm:px-6 lg:px-[101.5px] mx-auto flex flex-col gap-[48px] lg:gap-[64px]">

                <!-- ================= TOP ROW ================= -->
                <div class="w-full max-w-[1184px] min-h-[176px] mx-auto flex flex-col lg:flex-row justify-between items-center lg:items-start gap-6 lg:gap-10">

                    <!-- LEFT CONTENT -->
                    <div class="w-full max-w-[672px] flex flex-col gap-[24px]">

                        <!-- HEADING -->
                        <h2 class="text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828]">
                            Commercial-Grade <br /> Hardware
                        </h2>

                        <!-- PARAGRAPH -->
                        <p class="text-[18px] leading-[28px] text-[#364153]">
                            Built to run 24/7 in the most demanding environments. Crystal clear resolution,
                            robust build quality, and integrated media players.
                        </p>

                    </div>

                    <!-- RIGHT LINK -->
                    <div class="flex items-end lg:h-[176px]">
                        <a href="#"
                            class="text-[16px] leading-[24px] font-medium text-[#1447E6] flex items-center gap-[6px]">
                            View All Products →
                        </a>
                    </div>

                </div>

                <!-- ================= CARDS ================= -->
                <div class="w-full max-w-[1184px] min-h-[432px] mx-auto flex flex-col lg:flex-row gap-[24px] lg:gap-[32px]">

                    <!-- CARD 1 -->
                    <div class="w-full max-w-[576px] h-[320px] sm:h-[380px] lg:h-[432px] mx-auto rounded-[24px] overflow-hidden relative bg-[#F3F4F6]">

                        <img src="{{ asset('icons/commercial1.jpg') }}" class="w-full h-full object-cover" />

                        <!-- OVERLAY -->
                        <div class="absolute bottom-[24px] left-[24px] text-white">

                            <span class="text-[12px] bg-[#2563EB] px-[10px] py-[4px] rounded-full">
                                INDOOR SERIES
                            </span>

                            <h3 class="text-[22px] font-semibold mt-[10px]">
                                Ultra-Slim 4K Displays
                            </h3>

                            <p class="text-[14px] opacity-90 mt-[4px]">
                                Bezel-less design perfect for retail and corporate.
                            </p>

                        </div>

                    </div>

                    <!-- CARD 2 -->
                    <div class="w-full max-w-[576px] h-[320px] sm:h-[380px] lg:h-[432px] mx-auto rounded-[24px] overflow-hidden relative bg-[#F3F4F6]">

                        <img src="{{ asset('icons/commercial2.jpg') }}" class="w-full h-full object-cover" />

                        <!-- OVERLAY -->
                        <div class="absolute bottom-[24px] left-[24px] text-white">

                            <span class="text-[12px] bg-[#DC2626] px-[10px] py-[4px] rounded-full">
                                PROCESSING
                            </span>

                            <h3 class="text-[22px] font-semibold mt-[10px]">
                                Edge Media Players
                            </h3>

                            <p class="text-[14px] opacity-90 mt-[4px]">
                                Industrial-grade processing for seamless 8K playback.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ******* -->

        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[794px] bg-[#F9FAFB] flex">

            <!-- OUTER -->
            <div class="w-full max-w-[1387px] pt-16 lg:pt-[96px] px-4 sm:px-6 lg:px-[53.5px] mx-auto flex flex-col items-center">

                <!-- ================= HEADING ================= -->
                <div class="w-full max-w-[768px] flex flex-col items-center gap-[24px]">

                    <h2 class="text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828] text-center">
                        Built for Every Industry
                    </h2>

                    <p class="text-[18px] leading-[28px] text-[#4A5565] text-center">
                        Tailored solutions that drive engagement, provide information, and increase sales.
                    </p>

                </div>

                <!-- ================= CARDS ================= -->
                <div class="w-full max-w-[1184px] min-h-[438px] grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-[24px] mt-[48px] lg:mt-[64px]">

                    <!-- ===== CARD ===== -->
                    <div class="w-full max-w-[378.66px] h-[438px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">

                        <!-- IMAGE -->
                        <div class="w-full h-[192px]">
                            <img src="{{ asset('icons/retail.jpg') }}" class="w-full h-full object-cover" />
                        </div>

                        <!-- CONTENT -->
                        <div class="w-full h-[246px] pt-[32px] px-[32px] pb-[24px] flex flex-col">

                            <!-- HEADING -->
                            <div class="w-[312.66px] h-[32px]">
                                <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                    Retail & Malls
                                </h3>
                            </div>

                            <!-- FEATURES -->
                            <div class="w-[312.66px] mt-[24px] flex flex-col gap-[12px]">

                                <!-- ITEM -->
                                <div class="flex items-start gap-[8px]">

                                    <!-- ICON -->
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />

                                    <!-- TEXT -->
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Drive foot traffic
                                    </p>

                                </div>

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Promote offers instantly
                                    </p>
                                </div>

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Interactive wayfinding
                                    </p>
                                </div>

                            </div>

                            <!-- LEARN MORE -->
                            <div class="mt-auto flex items-center gap-[6px]">

                                <span class="text-[16px] leading-[24px] font-medium text-[#101828]">
                                    Learn more
                                </span>

                                <!-- ARROW -->
                                <img src="{{ asset('icons/arrow.svg') }}" class="w-[16px] h-[16px] mt-[4px]" />

                            </div>

                        </div>

                    </div>

                    <!-- ===== CARD 2 ===== -->
                    <div class="w-full max-w-[378.66px] h-[438px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">

                        <div class="w-full h-[192px]">
                            <img src="{{ asset('icons/healthcare.jpg') }}" class="w-full h-full object-cover" />
                        </div>

                        <div class="w-full h-[246px] pt-[32px] px-[32px] pb-[24px] flex flex-col">

                            <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                Healthcare
                            </h3>

                            <div class="mt-[24px] flex flex-col gap-[12px]">

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Patient check-in kiosks
                                    </p>
                                </div>

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Queue management
                                    </p>
                                </div>

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Emergency broadcasts
                                    </p>
                                </div>

                            </div>

                            <div class="mt-auto flex items-center gap-[6px]">
                                <span class="text-[16px] font-medium text-[#101828]">
                                    Learn more
                                </span>
                                <img src="{{ asset('icons/arrow.svg') }}" class="w-[16px] h-[16px] mt-[4px]" />
                            </div>

                        </div>

                    </div>

                    <!-- ===== CARD 3 ===== -->
                    <div class="w-full max-w-[378.66px] h-[438px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">

                        <div class="w-full h-[192px]">
                            <img src="{{ asset('icons/corporate.jpg') }}" class="w-full h-full object-cover" />
                        </div>

                        <div class="w-full h-[246px] pt-[32px] px-[32px] pb-[24px] flex flex-col">

                            <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                Corporate Offices
                            </h3>

                            <div class="mt-[24px] flex flex-col gap-[12px]">

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Internal communications
                                    </p>
                                </div>

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Meeting room booking
                                    </p>
                                </div>

                                <div class="flex items-start gap-[8px]">
                                    <img src="{{ asset('icons/commonicon.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Data dashboards
                                    </p>
                                </div>

                            </div>

                            <div class="mt-auto flex items-center gap-[6px]">
                                <span class="text-[16px] font-medium text-[#101828]">
                                    Learn more
                                </span>
                                <img src="{{ asset('icons/arrow.svg') }}" class="w-[16px] h-[16px] mt-[4px]" />
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- ******** -->

        <section class="w-full min-h-[866.25px] bg-white border-t border-b border-[#E5E7EB] flex">

            <!-- OUTER WRAPPER -->
            <div class="w-full max-w-[1387px] pt-16 lg:pt-[97px] px-4 sm:px-6 lg:px-[101.5px] mx-auto flex justify-center">

                <!-- INNER WRAPPER -->
                <div class="w-full max-w-[1184px] min-h-[672.25px] flex flex-col lg:flex-row justify-between items-center lg:items-start gap-10 lg:gap-16">

                    <!-- ================= LEFT ================= -->
                    <div class="w-full max-w-[560px] flex flex-col">

                        <!-- BADGE -->
                        <div class="w-[121.1px] h-[26px] rounded-full border border-[#2B7FFF33] 
                    bg-[#155DFC1A] flex items-center justify-center">
                            <span
                                class="text-[12px] leading-[16px] font-bold tracking-[0.6px] text-[#1447E6] uppercase">
                                Our Services
                            </span>
                        </div>

                        <!-- HEADING -->
                        <div class="mt-[24px]">
                            <h2 class="text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828]">
                                More than just screens.<br />
                                We provide full solutions.
                            </h2>
                        </div>

                        <!-- PARAGRAPH -->
                        <div class="mt-[24px]">
                            <p class="text-[18px] leading-[29.25px] text-[#364153]">
                                From initial consultation to installation and ongoing content
                                management, our team ensures your digital signage network
                                operates flawlessly.
                            </p>
                        </div>

                        <!-- FEATURES -->
                        <div class="mt-[24px] flex flex-col gap-[24px]">

                            <!-- ITEM -->
                            <div class="flex gap-[16px]">
                                <div class="w-[40px] h-[40px] rounded-full border border-[#2B7FFF4D] 
                        bg-[#155DFC33] flex items-center justify-center mt-[4px]">
                                     <img src="{{ asset('icons/ourservicecommonicon.svg') }}" class="w-[20px] h-[20px]" />
                                </div>

                                <div class="w-full max-w-[504px] flex flex-col gap-[4px]">
                                    <h4 class="text-[18px] leading-[28px] font-bold text-[#101828]">
                                        Hardware as a Service (HaaS)
                                    </h4>
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Pay a low monthly fee for premium hardware, software, and support without huge
                                        upfront capital.
                                    </p>
                                </div>
                            </div>

                            <!-- ITEM -->
                            <div class="flex gap-[16px]">
                                <div class="w-[40px] h-[40px] rounded-full border border-[#2B7FFF4D] 
                        bg-[#155DFC33] flex items-center justify-center mt-[4px]">
                                     <img src="{{ asset('icons/ourservicecommonicon.svg') }}" class="w-[20px] h-[20px]" />
                                </div>

                                <div class="w-full max-w-[504px] flex flex-col gap-[4px]">
                                    <h4 class="text-[18px] leading-[28px] font-bold text-[#101828]">
                                        Fully Managed Content
                                    </h4>
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Our creative team designs, schedules, and manages your content calendar.
                                    </p>
                                </div>
                            </div>

                            <!-- ITEM -->
                            <div class="flex gap-[16px]">
                                <div class="w-[40px] h-[40px] rounded-full border border-[#2B7FFF4D] 
                        bg-[#155DFC33] flex items-center justify-center mt-[4px]">
                                    <img src="{{ asset('icons/ourservicecommonicon.svg') }}" class="w-[20px] h-[20px]" />
                                </div>

                                <div class="w-full max-w-[504px] flex flex-col gap-[4px]">
                                    <h4 class="text-[18px] leading-[28px] font-bold text-[#101828]">
                                        White-Glove Installation
                                    </h4>
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Professional deployment anywhere in the country with zero disruption to your
                                        business.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="mt-[32px]">
                            <button class="w-[178.34px] h-[50px] rounded-full border border-[#E5E7EB] 
                         flex items-center justify-center">
                                <span class="text-[16px] leading-[24px] font-medium text-[#101828]">
                                    Explore Services
                                </span>
                            </button>
                        </div>

                    </div>

                    <!-- ================= RIGHT ================= -->
                    <div class="w-full max-w-[560px] max-h-[454px] lg:mt-[109.13px] rounded-[20px] bg-white 
            shadow-[0_10px_30px_rgba(0,0,0,0.1)] p-[24px]">

                        <!-- ================= HEADER ================= -->
                        <div
                            class="w-full min-h-[44px] flex justify-between items-center border-b border-[#E5E7EB] pb-[16px] gap-4">

                            <!-- HEADING -->
                            <div class="w-[216px] h-[27px] flex items-center">
                                <h4 class="text-[18px] leading-[27px] font-bold text-[#101828]">
                                    NOC Dashboard Preview
                                </h4>
                            </div>

                            <!-- DOTS -->
                            <div class="w-[52px] h-[12px] flex gap-[8px] items-center">
                                <div class="w-[12px] h-[12px] bg-[#FB2C36] rounded-full"></div>
                                <div class="w-[12px] h-[12px] bg-yellow-400 rounded-full"></div>
                                <div class="w-[12px] h-[12px] bg-green-500 rounded-full"></div>
                            </div>

                        </div>

                        <!-- ================= STATUS LIST ================= -->
                        <div class="w-full mt-[16px] flex flex-col gap-[16px]">

                            <!-- ROW -->
                            <div class="w-full h-[54px] rounded-[14px] border border-[#E5E7EB] bg-[#DDE9FF99] 
                px-[16px] flex justify-between items-center">

                                <div class="flex items-center gap-[12px]">
                                    <div class="w-[8px] h-[8px] bg-[#00C950] rounded-full"></div>
                                    <span class="text-[14px] font-medium text-[#101828]">
                                        NYC Flagship Store
                                    </span>
                                </div>

                                <span class="text-[12px] text-[#4A5565]">
                                    Online • Playing
                                </span>

                            </div>

                            <!-- ROW -->
                            <div class="w-full h-[54px] rounded-[14px] border border-[#E5E7EB] bg-[#DDE9FF99] 
                px-[16px] flex justify-between items-center">

                                <div class="flex items-center gap-[12px]">
                                    <div class="w-[8px] h-[8px] bg-[#00C950] rounded-full"></div>
                                    <span class="text-[14px] font-medium text-[#101828]">
                                        LA Airport Terminal B
                                    </span>
                                </div>

                                <span class="text-[12px] text-[#4A5565]">
                                    Online • Playing
                                </span>

                            </div>

                            <!-- ROW (ERROR) -->
                            <div class="w-full h-[54px] rounded-[14px] border border-red-300 bg-[#FEE2E2] 
                px-[16px] flex justify-between items-center">

                                <div class="flex items-center gap-[12px]">
                                    <div class="w-[8px] h-[8px] bg-red-500 rounded-full"></div>
                                    <span class="text-[14px] font-medium text-[#991B1B]">
                                        Chicago Mall Kiosk
                                    </span>
                                </div>

                                <span class="text-[12px] text-red-600">
                                    Offline • Alert Sent
                                </span>

                            </div>

                        </div>

                        <!-- ================= UPDATED STATS ================= -->
                        <div class="w-full mt-[16px] flex flex-col sm:flex-row gap-[16px]">

                            <!-- CARD 1 -->
                            <div class="w-full sm:w-[239px] h-[86px] rounded-[14px] border border-[#2B7FFF33] 
                bg-[#155DFC1A] px-[17px] pt-[17px] pb-[1px] flex flex-col gap-[4px]">

                                <div class="w-[205px] h-[32px]">
                                    <h5 class="text-[24px] leading-[32px] font-black text-[#1447E6]">
                                        99.9%
                                    </h5>
                                </div>

                                <div class="w-[205px] h-[16px]">
                                    <p class="text-[12px] leading-[16px] text-[#4A5565] uppercase">
                                        Network Uptime
                                    </p>
                                </div>

                            </div>

                            <!-- CARD 2 -->
                            <div class="w-full sm:w-[239px] h-[86px] rounded-[14px] border border-[#2B7FFF33] 
                bg-[#155DFC1A] px-[17px] pt-[17px] pb-[1px] flex flex-col gap-[4px]">

                                <div class="w-[205px] h-[32px]">
                                    <h5 class="text-[24px] leading-[32px] font-black text-[#1447E6]">
                                        2.4k
                                    </h5>
                                </div>

                                <div class="w-[205px] h-[16px]">
                                    <p class="text-[12px] leading-[16px] text-[#4A5565] uppercase">
                                        Active Screens
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        
        <!-- ******** -->

        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[678px] bg-[#F9FAFB] pt-16 lg:pt-[96px] px-4 sm:px-6 lg:px-[53.5px]">

            <!-- INNER CONTAINER -->
            <div class="w-full max-w-[1280px] min-h-[486px] mx-auto flex flex-col items-center">

                <!-- HEADING + PARA -->
                <div class="w-full max-w-[768px] min-h-[100px] flex flex-col items-center gap-[24px]">

                    <h2 class="w-full max-w-[515px] min-h-[48px] text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828] text-center">
                        Trusted by Innovators
                    </h2>

                    <p class="w-full max-w-[566px] min-h-[28px] text-[18px] leading-[28px] text-[#4A5565] text-center">
                        Hear what our clients have to say about the PixelWave experience.
                    </p>
                </div>

                <!-- CARDS -->
                <div class="w-full max-w-[1184px] min-h-[322px] mt-[48px] lg:mt-[64px] grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-[24px]">

                    <!-- CARD 1 -->
                    <div class="w-full max-w-[373.33px] h-[322px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB]">

                        <!-- STARS -->
                        <div
                            class="w-[307.33px] h-[16px] mt-[33px] ml-[33px] flex gap-[4px] text-[#2B7FFF] text-[13px] leading-none">
                            ★ ★ ★ ★ ★
                        </div>

                        <!-- TEXT -->
                        <p
                            class="w-[307.33px] h-[140px] mt-[24px] ml-[33px] text-[18px] leading-[28px] italic text-[#364153]">
                            "PixelWave completely transformed our lobby experience. The NOC support is incredible—they
                            usually fix issues before we even notice them."
                        </p>

                        <!-- AUTHOR -->
                        <div class="w-[307.33px] h-[44px] mt-[32px] ml-[33px] flex flex-col">

                            <span class="text-[16px] font-bold text-[#101828] leading-[24px]">
                                Sarah Jenkins
                            </span>

                            <span class="text-[14px] leading-[20px] text-[#6A7282]">
                                VP of Operations, Luxe Hotels
                            </span>

                        </div>               
                    </div>

                    <!-- CARD 2 -->
                    <div class="w-full max-w-[373.33px] h-[322px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB]">

                        <div
                            class="w-[307.33px] h-[16px] mt-[33px] ml-[33px] flex gap-[4px] text-[#2B7FFF] text-[13px] leading-none">
                            ★ ★ ★ ★ ★
                        </div>

                        <p
                            class="w-[307.33px] h-[140px] mt-[24px] ml-[33px] text-[18px] leading-[28px] italic text-[#364153]">
                            "Managing content across 400 stores used to take weeks. With PixelWave Cloud, we push global
                            campaigns in minutes. The ROI has been phenomenal."
                        </p>

                        <div class="w-[307.33px] h-[44px] mt-[32px] ml-[33px] flex flex-col">

                            <span class="text-[16px] font-bold text-[#101828] leading-[24px]">
                                David Chen
                            </span>

                            <span class="text-[14px] leading-[20px] text-[#6A7282]">
                                IT Director, Apex Retail
                            </span>

                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="w-full max-w-[373.33px] h-[322px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB]">

                        <div
                            class="w-[307.33px] h-[16px] mt-[33px] ml-[33px] flex gap-[4px] text-[#2B7FFF] text-[13px] leading-none">
                            ★ ★ ★ ★ ★
                        </div>

                        <p
                            class="w-[307.33px] h-[140px] mt-[24px] ml-[33px] text-[18px] leading-[28px] italic text-[#364153]">
                            "The stability and security of PixelWave's hardware and software ecosystem is unmatched.
                            It's the only solution we trust for our hospital networks."
                        </p>

                        <div class="w-[307.33px] h-[44px] mt-[32px] ml-[33px] flex flex-col">

                            <span class="text-[16px] font-bold text-[#101828] leading-[24px]">
                                Elena Rodriguez
                            </span>

                            <span class="text-[14px] leading-[20px] text-[#6A7282]">
                                CMO, Global Health
                            </span>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ******* -->

        <section class="w-full min-h-[765px] bg-white pt-16 lg:pt-[96px] px-4 sm:px-6 lg:px-[101.5px]">

            <!-- MAIN CONTAINER -->
            <div class="w-full max-w-[1200px] min-h-[573.25px] mx-auto relative rounded-[24px] overflow-hidden">

                <!-- BACKGROUND IMAGE -->
                <img src="https://images.unsplash.com/photo-1581091870622-1e7e2f7f6b9f"
                    class="w-full h-full object-cover" onerror="this.remove()" />

                <!-- DARK OVERLAY -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0B1B2B]/80 to-transparent"></div>

                <!-- CONTENT -->
                <div class="absolute top-0 left-0 w-full max-w-[672px] h-full">

                    <!-- FEATURED BADGE -->
                    <div
                        class="absolute top-[40px] sm:top-[60px] lg:top-[81.5px] left-[24px] sm:left-[40px] lg:left-[80px] w-[177.9px] h-[24px] bg-white rounded-[4px] flex items-center px-[12px]">
                        <span class="text-[12px] font-bold uppercase tracking-[0.6px] text-[#101828]">
                            Featured Case Study
                        </span>
                    </div>

                    <!-- HEADING -->
                    <div class="absolute top-[84px] sm:top-[110px] lg:top-[129.5px] left-[24px] sm:left-[40px] lg:left-[80px] w-[calc(100%-48px)] max-w-[512px] min-h-[96px]">
                        <h2 class="text-[32px] leading-[36px] sm:text-[40px] sm:leading-[42px] lg:text-[48px] lg:leading-[48px] font-bold text-white">
                            Revamping Transit Wayfinding
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="absolute top-[180px] sm:top-[220px] lg:top-[249.5px] left-[24px] sm:left-[40px] lg:left-[80px] w-[calc(100%-48px)] max-w-[512px] min-h-[88px]">
                        <p class="text-[18px] leading-[29.25px] text-white">
                            How Metro Airport increased passenger flow by 40% and generated $2M in new ad revenue
                            through a massive 500-screen PixelWave deployment.
                        </p>
                    </div>

                    <!-- STATS -->
                    <div class="absolute top-[320px] sm:top-[350px] lg:top-[369.25px] left-[24px] sm:left-[40px] lg:left-[80px] w-[calc(100%-48px)] max-w-[512px] min-h-[60px] flex flex-wrap gap-[24px] sm:gap-[32px]">

                        <!-- STAT 1 -->
                        <div class="flex flex-col gap-[4px] w-[105px]">
                            <span class="text-[24px] font-bold text-white">+40%</span>
                            <span class="text-[14px] text-white">Passenger Flow</span>
                        </div>

                        <!-- STAT 2 -->
                        <div class="flex flex-col gap-[4px] w-[105px]">
                            <span class="text-[24px] font-bold text-white">500+</span>
                            <span class="text-[14px] text-white">Screens Deployed</span>
                        </div>

                        <!-- STAT 3 -->
                        <div class="flex flex-col gap-[4px] w-[105px]">
                            <span class="text-[24px] font-bold text-white">$2M</span>
                            <span class="text-[14px] text-white">Ad Revenue</span>
                        </div>

                    </div>

                    <!-- CTA -->
                    <div class="absolute top-[430px] sm:top-[455px] lg:top-[469.25px] left-[24px] sm:left-[40px] lg:left-[80px]">
                        <a href="#" class="text-[16px] font-bold text-white flex items-center gap-[8px]">
                            Read Full Story →
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <!-- ****** -->


<section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[892px] bg-[#F9FAFB] pt-16 lg:pt-[96px] px-4 sm:px-6 lg:px-[101.5px]">

  <!-- INNER CONTAINER -->
  <div class="w-full max-w-[1184px] min-h-[700px] mx-auto flex flex-col lg:flex-row justify-between items-center lg:items-start gap-10 lg:gap-16">

    <!-- LEFT CONTENT -->
    <div class="w-full max-w-[560px] min-h-[462.5px] lg:mt-[118.75px] flex flex-col">

      <!-- HEADING -->
      <div class="w-full max-w-[560px] min-h-[48px]">
        <h2 class="text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828]">
          Why The Locads?
        </h2>
      </div>

      <!-- PARAGRAPH -->
      <div class="w-full max-w-[560px] min-h-[59px] mt-[24px]">
        <p class="text-[18px] leading-[29.25px] text-[#4A5565]">
          Unlike competitors who only offer software or basic hardware, we provide a unified ecosystem designed for reliability and scale.
        </p>
      </div>

      <!-- FEATURES -->
      <div class="w-full max-w-[560px] min-h-[292px] mt-[48px] flex flex-col gap-[32px]">

        <!-- ITEM 1 -->
        <div class="flex gap-[16px] items-start">

          <!-- ICON -->
          <div class="w-[48px] h-[48px] rounded-full border border-[#2B7FFF]/30 bg-[#155DFC]/20 flex items-center justify-center">
                <img  src="{{ asset('icons/dedicatedicon.svg') }}">
          </div>

          <!-- TEXT -->
          <div class="flex flex-col">

            <div class="w-full max-w-[496px] min-h-[28px]">
              <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                Dedicated 24/7 NOC
              </h3>
            </div>

            <div class="w-full max-w-[496px] min-h-[40px] mt-[4px]">
              <p class="text-[14px] leading-[20px] text-[#4A5565]">
                We proactively monitor your screens, resolving 85% of issues remotely before you even notice them.
              </p>
            </div>

          </div>
        </div>

        <!-- ITEM 2 -->
        <div class="flex gap-[16px] items-start">

          <div class="w-[48px] h-[48px] rounded-full border border-[#2B7FFF]/30 bg-[#155DFC]/20 flex items-center justify-center">
                    <img  src="{{ asset('icons/infiniteicon.svg') }}">
          </div>

          <div class="flex flex-col">

            <div class="w-full max-w-[496px] min-h-[28px]">
              <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                Infinite Scalability
              </h3>
            </div>

            <div class="w-full max-w-[496px] min-h-[40px] mt-[4px]">
              <p class="text-[14px] leading-[20px] text-[#4A5565]">
                Our cloud infrastructure scales instantly. Deploy content to 10 screens or 10,000 screens with the exact same latency.
              </p>
            </div>

          </div>
        </div>

        <!-- ITEM 3 -->
        <div class="flex gap-[16px] items-start">

          <div class="w-[48px] h-[48px] rounded-full border border-[#2B7FFF]/30 bg-[#155DFC]/20 flex items-center justify-center">
                   <img src="{{ asset('icons/enterpriseicon.svg') }}">
          </div>

          <div class="flex flex-col">

            <div class="w-full max-w-[496px] min-h-[28px]">
              <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                Enterprise-Grade Security
              </h3>
            </div>

            <div class="w-full max-w-[496px] min-h-[40px] mt-[4px]">
              <p class="text-[14px] leading-[20px] text-[#4A5565]">
                SOC2 certified, end-to-end encryption, and role-based access control to keep your network secure.
              </p>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="w-full max-w-[560px] h-[360px] sm:h-[520px] lg:h-[700px] mx-auto rounded-[24px] overflow-hidden">
      <img 
        src="{{ asset('icons/thelocads.jpg') }}"
        class="w-full h-full object-cover"
      />
    </div>

  </div>
</section>

<!-- ******** -->

<section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[441px] bg-[#EFF6FF] border-t border-[#BEDBFF] pt-16 lg:pt-[97px]">

  <!-- INNER CONTAINER -->
  <div class="w-full max-w-[1280px] min-h-[248px] mx-auto px-4 sm:px-6 lg:px-[53.5px]">

    <!-- CONTENT WRAPPER -->
    <div class="w-full max-w-[1184px] min-h-[248px] mx-auto">

      <!-- HEADING -->
      <div class="w-full max-w-[910px] min-h-[60px] mx-auto text-center">
        <h2 class="text-[38px] leading-[42px] sm:text-[50px] sm:leading-[52px] lg:text-[60px] lg:leading-[60px] font-black tracking-[-1.5px] text-[#101828]">
          Ready to transform your space?
        </h2>
      </div>

      <!-- PARAGRAPH -->
      <div class="w-full max-w-[672px] min-h-[56px] mx-auto mt-[24px] text-center">
        <p class="text-[20px] leading-[28px] text-[#364153]">
          Join thousands of businesses already using PixelWave to captivate their audience.
        </p>
      </div>

      <!-- BUTTON WRAPPER -->
      <div class="w-full max-w-[1184px] min-h-[68px] mt-[40px] lg:mt-[60px] flex justify-center">

        <!-- BUTTON -->
        <div class="w-[285.46px] h-[68px] bg-[#155DFC] rounded-full flex items-center justify-center shadow-[0_0_30px_rgba(37,99,235,0.5)]">

          <!-- BUTTON TEXT -->
          <span class="text-[18px] leading-[28px] font-bold text-white text-center">
            Get a Free Consultation
          </span>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ******** -->

<!-- 🔷 THIRD DIV (FOOTER) -->
        <div
            class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] mt-[87.55px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

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

                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Retail Displays</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Hospitality Signage</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Corporate Communications</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Healthcare Boards</p>

                    </div>

                    <!-- 🔷 COLUMN 3 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <p class="text-[14px] leading-[20px] text-[#4A5565]">About Us</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Our Services</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Franchise Program</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Contact</p>

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
                        <span>Privacy Policy</span>
                        <span>Terms of Service</span>
                    </div>

                </div>

            </div>
        </div>
<!-- ***** -->
    </div>

    <button class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]" aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </button>

</body>

</html>
