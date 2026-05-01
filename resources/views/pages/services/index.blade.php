<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-meta', [
        'title' => 'Services | The Locads',
        'description' => 'Explore The Locads services including NOC monitoring, content strategy, HaaS, integrations, and installation support.',
        'keywords' => 'digital signage services, NOC monitoring, signage installation, HaaS, The Locads services'
    ])
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

        @media (max-width: 767px) {
            .signage3-service-card {
                height: auto !important;
                min-height: 356px;
                padding: 32px !important;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .signage3-service-card > div {
                position: static !important;
                width: 100% !important;
                height: auto !important;
            }

            .signage3-service-card > div:first-child {
                width: 56px !important;
                flex-shrink: 0;
            }

            .signage3-service-card h3,
            .signage3-service-card p {
                width: 100% !important;
            }
        }
    </style>
</head>

<body class="flex justify-center bg-white overflow-x-hidden">

    <div class="page-sections w-full max-w-[1387px]">

        <!-- ================= HEADER ================= -->
        <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 3])


        <!-- ================= HERO ================= -->
        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[639.09px] bg-[#A3A3A3]">

            <!-- BACKGROUND IMAGE -->
            <img src="{{ asset('icons/backgroundimage.jpg') }}" class="absolute top-0 left-0 w-full h-full object-cover" onerror="this.remove()" />

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-black/40"></div>

            <!-- CONTENT WRAPPER -->
            <div class="absolute w-full max-w-[768px] min-h-[312px] top-[147.55px] left-1/2 -translate-x-1/2 px-4 sm:px-6 text-center">

                <!-- BADGE -->
                <div
                    class="w-[203.95px] h-[42px] mx-auto rounded-full border border-[#8EC5FF] bg-[#DBEAFE] flex items-center justify-center">
                    <span class="text-[16px] font-bold text-[#1447E6]">
                        Professional Services
                    </span>
                </div>

                <!-- HEADING -->
                <div class="w-full max-w-[768px] min-h-[144px] mt-[24px]">
                    <h1 class="text-white text-[38px] leading-[46px] sm:text-[50px] sm:leading-[60px] lg:text-[60px] lg:leading-[72px] font-bold tracking-[-1.5px]">
                        End - to - End
                        <span class="text-red-500 tracking-[-1.5px]">
                            <div>Services</div>
                        </span>
                    </h1>
                </div>

                <!-- PARAGRAPH -->
                <div class="w-full max-w-[768px] min-h-[78px] mt-[24px]">
                    <p class="text-white text-[18px] leading-[30px] sm:text-[22px] sm:leading-[34px] lg:text-[24px] lg:leading-[39px] font-normal">
                        We don’t just sell software. We provide comprehensive solutions
                        to ensure your digital signage network operates flawlessly.
                    </p>
                </div>

            </div>

        </section>

        <!-- ================= SERVICES GRID ================= -->
        <section class="w-full pt-16 lg:pt-[97px] px-4 sm:px-6 lg:px-[53.5px] mt-16 lg:mt-[92px] bg-white">

            <div class="w-full max-w-[1184px] min-h-[770px] mx-auto grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-[24px]">

                <!-- CARD 1 -->
                <div class="signage3-service-card w-full max-w-[373.33px] h-[356px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[56px] h-[56px] absolute top-[33px] left-[33px] rounded-[16px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center">
                        <img src="{{ asset('icons/networkicon.svg') }}">
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[113px] left-[33px]">
                        <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                            Network Operations Center (NOC)
                        </h3>
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[193px] left-[33px]">
                        <p class="text-[16px] leading-[26px] text-[#4A5565]">
                            Our state-of-the-art NOC monitors your entire digital signage network 24/7. We detect and
                            resolve issues before they affect your business.
                        </p>
                    </div>

                </div>


                <!-- CARD 2 -->
                <div class="signage3-service-card w-full max-w-[373.33px] h-[356px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[56px] h-[56px] absolute top-[33px] left-[33px] rounded-[16px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center">
                         <img src="{{ asset('icons/contenticon.svg') }}">
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[113px] left-[33px]">
                        <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                            Content Management Strategy
                        </h3>
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[193px] left-[33px]">
                        <p class="text-[16px] leading-[26px] text-[#4A5565]">
                            Our creative and strategy teams work with you to develop dynamic content calendars, design
                            templates, and ensure your messaging is fresh and engaging.
                        </p>
                    </div>

                </div>


                <!-- CARD 3 -->
                <div class="signage3-service-card w-full max-w-[373.33px] h-[356px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[56px] h-[56px] absolute top-[33px] left-[33px] rounded-[16px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center">
                         <img src="{{ asset('icons/hardwareicon.svg') }}">
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[113px] left-[33px]">
                        <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                            Hardware as a Service (HaaS)
                        </h3>
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[193px] left-[33px]">
                        <p class="text-[16px] leading-[26px] text-[#4A5565]">
                            Eliminate massive upfront capital costs. Our HaaS model provides premium displays, media
                            players, and mounts for a predictable monthly fee.
                        </p>
                    </div>

                </div>


                <!-- CARD 4 -->
                <div class="signage3-service-card w-full max-w-[373.33px] h-[356px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[56px] h-[56px] absolute top-[33px] left-[33px] rounded-[16px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center">
                         <img src="{{ asset('icons/customicon.svg') }}">
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[113px] left-[33px]">
                        <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                            Custom Software Integration
                        </h3>
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[193px] left-[33px]">
                        <p class="text-[16px] leading-[26px] text-[#4A5565]">
                            Need your screens to display live inventory, emergency alerts, or POS data? Our engineering
                            team builds custom API integrations.
                        </p>
                    </div>

                </div>


                <!-- CARD 5 -->
                <div class="signage3-service-card w-full max-w-[373.33px] h-[356px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[56px] h-[56px] absolute top-[33px] left-[33px] rounded-[16px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center">
                        <img src="{{ asset('icons/whiteicon.svg') }}">
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[113px] left-[33px]">
                        <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                            White-Glove Installation
                        </h3>
                    </div>

                    <div class="w-[calc(100%-66px)] absolute top-[193px] left-[33px]">
                        <p class="text-[16px] leading-[26px] text-[#4A5565]">
                            From site surveys to mounting and configuration, our certified installation teams handle the
                            entire deployment process seamlessly.
                        </p>
                    </div>

                </div>

            </div>
        </section>
       
        <!-- ================= NOC SECTION ================= -->
        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[519px] bg-[#F9FAFB] border-t border-[#E5E7EB] mt-[96px] pt-16 lg:pt-[97px] px-4 sm:px-6 lg:px-[53.5px]">

            <!-- ================= INNER ================= -->
            <div class="w-full max-w-[1280px] mx-auto">

                <!-- ================= HEADING BLOCK ================= -->
                <div class="w-full max-w-[768px] mx-auto flex flex-col items-center gap-[24px]">

                    <!-- HEADING -->
                    <div class="w-full min-h-[48px] text-center">
                        <h2 class="text-[36px] leading-[40px] sm:text-[42px] sm:leading-[44px] lg:text-[48px] lg:leading-[48px] font-bold text-[#101828]">
                            How Our NOC Works
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="w-full min-h-[28px] text-center">
                        <p class="text-[18px] leading-[28px] text-[#4A5565]">
                            Proactive monitoring means zero downtime for your critical communications.
                        </p>
                    </div>

                </div>


                <!-- ================= STEPS ================= -->
                <div class="w-full max-w-[1024px] min-h-[162px] mx-auto mt-[48px] lg:mt-[64px] relative flex flex-col lg:flex-row justify-between gap-[32px] lg:gap-0">

                    <!-- CONNECTING LINE -->
                    <div class="hidden lg:block absolute top-[81px] left-0 w-full h-[2px] bg-[#E5E7EB]"></div>


                    <!-- STEP 1 -->
                    <div
                        class="w-full max-w-[320px] h-[162px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.08)] relative">

                        <!-- NUMBER -->
                        <div
                            class="absolute top-[-23px] left-[136px] w-[48px] h-[48px] rounded-full bg-[#155DFC] text-white flex items-center justify-center border-[2px] border-white shadow-[0_0_20px_rgba(37,99,235,0.6)]">
                            1
                        </div>

                        <!-- CONTENT -->
                        <div class="absolute top-[49px] left-[33px] w-[254px] text-center">

                            <h4 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Continuous Monitoring
                            </h4>

                            <p class="text-[14px] leading-[20px] text-[#4A5565] mt-[12px]">
                                Heartbeat checks every 30 seconds to all connected screens globally.
                            </p>

                        </div>

                    </div>


                    <!-- STEP 2 -->
                    <div
                        class="w-full max-w-[320px] h-[162px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.08)] relative">

                        <div
                            class="absolute top-[-23px] left-[136px] w-[48px] h-[48px] rounded-full bg-[#155DFC] text-white flex items-center justify-center border-[2px] border-white shadow-[0_0_20px_rgba(37,99,235,0.6)]">
                            2
                        </div>

                        <div class="absolute top-[49px] left-[33px] w-[254px] text-center">

                            <h4 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Automated Alerts
                            </h4>

                            <p class="text-[14px] leading-[20px] text-[#4A5565] mt-[12px]">
                                AI-driven detection of issues ensures faster resolution before downtime.
                            </p>

                        </div>

                    </div>


                    <!-- STEP 3 -->
                    <div
                        class="w-full max-w-[320px] h-[162px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.08)] relative">

                        <div
                            class="absolute top-[-23px] left-[136px] w-[48px] h-[48px] rounded-full bg-[#155DFC] text-white flex items-center justify-center border-[2px] border-white shadow-[0_0_20px_rgba(37,99,235,0.6)]">
                            3
                        </div>

                        <div class="absolute top-[49px] left-[33px] w-[254px] text-center">

                            <h4 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Rapid Resolution
                            </h4>

                            <p class="text-[14px] leading-[20px] text-[#4A5565] mt-[12px]">
                                Issues are resolved quickly to minimize downtime and ensure seamless operations.
                            </p>

                        </div>

                    </div>

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

    <a href="{{ route('contact.alt') }}" class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]" aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </a>

</body>

</html>
