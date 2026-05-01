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
    @include('partials.seo-meta', [
        'title' => 'About The Locads | Digital Signage Experts',
        'description' => 'Learn about The Locads, our mission, vision, and experience in building cloud-powered digital signage solutions for businesses.',
        'keywords' => 'about The Locads, digital signage experts, signage company, visual communication'
    ])
</head>

<body class="bg-white flex justify-center overflow-x-hidden">

    <!-- ================= TOP LEVEL ================= -->
    <div class="page-sections w-full max-w-[1387px]">

        <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 2])



        <!-- ================= HERO SECTION ================= -->
        <section class="w-full min-h-[667.33px] pt-16 sm:pt-24 lg:pt-[128px] px-4 sm:px-6 lg:px-[53.5px]">

            <!-- INNER CONTAINER -->
            <div class="w-full max-w-[1280px] min-h-[411.33px] mx-auto flex flex-col lg:flex-row justify-between items-center gap-10 lg:gap-12">

                <!-- LEFT CONTENT -->
                <div class="w-full max-w-[616px] min-h-[273.5px] flex flex-col gap-[24px] lg:mt-[68.91px]">

                    <!-- HEADING -->
                    <div class="w-full max-w-[503px] min-h-[144px]">
                        <h1 class="font-[Inter] font-bold text-[40px] leading-[48px] sm:text-[50px] sm:leading-[60px] lg:text-[60px] lg:leading-[72px] tracking-[-1.5px] text-black">
                            Redefining Visual
                            <span class="text-red-500 tracking-[-1.8px]"> Communication</span>
                        </h1>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="w-full max-w-[616px] min-h-[98px]">
                        <p class="font-[Inter] text-[20px] leading-[32.5px] text-[#4A5565]">
                            We are PixelWave, a pioneer in cloud-based digital signage.
                            Since 2018, we've helped thousands of businesses transform
                            their physical spaces into dynamic digital experiences.
                        </p>
                    </div>

                </div>

                <!-- RIGHT IMAGE -->
                <div
                    class="w-full max-w-[616px] h-[280px] sm:h-[360px] lg:h-[411.33px] rounded-[24px] overflow-hidden border border-[#8EC5FF] shadow-[0_0_50px_rgba(37,99,235,0.3)]">

                    <img src="{{ asset('icons/about1.jpg') }}" class="w-full h-full object-cover" alt="">

                </div>

            </div>
        </section>

        <!-- ================= STATS SECTION ================= -->
        <!-- ================= STATS SECTION ================= -->
        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[366px] bg-[#F9FAFB] pt-14 sm:pt-16 lg:pt-[80px] px-4 sm:px-6 lg:px-[101.5px]">

            <!-- INNER CONTAINER -->
            <div class="w-full max-w-[1184px] min-h-[206px] mx-auto grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-[24px]">

                <!-- CARD 1 -->
                <div class="w-full max-w-[272px] h-[206px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] relative">

                    <!-- ICON -->
                    <div
                        class="w-[48px] h-[48px] bg-[#DBEAFE] rounded-full absolute top-[33px] left-[112px] flex items-center justify-center">
                        <img src="{{ asset('icons/40plusicon.svg') }}">
                    </div>

                    <!-- NUMBER -->
                    <div class="w-[77px] h-[40px] absolute top-[105px] left-[98px] text-center">
                        <h2 class="text-[36px] leading-[40px] font-black text-[#101828]">40+</h2>
                    </div>

                    <!-- LABEL -->
                    <div class="w-[150px] h-[20px] absolute top-[153px] left-[60px] text-center">
                        <p class="text-[14px] leading-[20px] tracking-[0.7px] uppercase font-medium text-[#4A5565]">
                            Countries Served
                        </p>
                    </div>

                </div>

                <!-- CARD 2 -->
                <div class="w-full max-w-[272px] h-[206px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[48px] h-[48px] bg-[#DBEAFE] rounded-full absolute top-[33px] left-[112px] flex items-center justify-center">
                        <img src="{{ asset('icons/happyicon.svg') }}">
                    </div>

                    <div class="w-[77px] h-[40px] absolute top-[105px] left-[98px] text-center">
                        <h2 class="text-[36px] leading-[40px] font-black text-[#101828]">10k+</h2>
                    </div>

                    <div class="w-[150px] h-[20px] absolute top-[153px] left-[60px] text-center">
                        <p class="text-[14px] leading-[20px] tracking-[0.7px] uppercase font-medium text-[#4A5565]">
                            Happy Clients
                        </p>
                    </div>

                </div>

                <!-- CARD 3 -->
                <div class="w-full max-w-[272px] h-[206px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[48px] h-[48px] bg-[#DBEAFE] rounded-full absolute top-[33px] left-[112px] flex items-center justify-center">
                        <img src="{{ asset('icons/screenicon.svg') }}">
                    </div>

                    <div class="w-[77px] h-[40px] absolute top-[105px] left-[98px] text-center">
                        <h2 class="text-[36px] leading-[40px] font-black text-[#101828]">50k+</h2>
                    </div>

                    <div class="w-[150px] h-[20px] absolute top-[153px] left-[60px] text-center">
                        <p class="text-[14px] leading-[20px] tracking-[0.7px] uppercase font-medium text-[#4A5565]">
                            Screens Deployed
                        </p>
                    </div>

                </div>

                <!-- CARD 4 -->
                <div class="w-full max-w-[272px] h-[206px] mx-auto bg-white rounded-[16px] border border-[#E5E7EB] relative">

                    <div
                        class="w-[48px] h-[48px] bg-[#DBEAFE] rounded-full absolute top-[33px] left-[112px] flex items-center justify-center">
                        <img src="{{ asset('icons/uptimeivon.svg') }}">
                    </div>

                    <div class="w-[77px] h-[40px] absolute top-[105px] left-[98px] text-center">
                        <h2 class="text-[36px] leading-[40px] font-black text-[#101828]">99.9%</h2>
                    </div>

                    <div class="w-[150px] h-[20px] absolute top-[153px] left-[60px] text-center">
                        <p class="text-[14px] leading-[20px] tracking-[0.7px] uppercase font-medium text-[#4A5565]">
                            Uptime SLA
                        </p>
                    </div>

                </div>

            </div>
        </section>


        <!-- ================= MISSION / VISION ================= -->
        <section class="w-full max-w-[1280px] mx-auto mt-[24px] pt-8 sm:pt-10 lg:pt-0 px-4 sm:px-6 lg:px-[48px] flex flex-col gap-14 lg:gap-[96px]">

            <!-- ================= MISSION ================= -->
            <div class="w-full max-w-[1184px] min-h-[402px] flex flex-col lg:flex-row justify-between items-center lg:items-start gap-10 lg:gap-12">

                <!-- LEFT CONTENT -->
                <div class="w-full max-w-[568px] min-h-[151.75px] flex flex-col items-center lg:items-start gap-[24px] lg:mt-[125.13px]">

                    <!-- HEADING -->
                    <div class="w-full max-w-[212px] min-h-[40px] text-center lg:text-left">
                        <h2 class="text-[36px] leading-[40px] font-bold text-[#101828]">
                            Our Mission
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="w-full max-w-[568px] min-h-[88px] text-center lg:text-left">
                        <p class="text-[18px] leading-[29.25px] text-[#4A5565]">
                            To democratize digital signage by providing scalable,
                            easy-to-use, and affordable solutions that empower
                            businesses of all sizes to communicate more effectively
                            with their audience.
                        </p>
                    </div>

                </div>

                <!-- RIGHT IMAGE -->
                <div
                    class="w-full max-w-[568px] h-[280px] sm:h-[360px] lg:h-[402px] rounded-[24px] overflow-hidden border border-[#BEDBFF] shadow-[0_0_40px_rgba(37,99,235,0.2)]">
                    <img src="{{ asset('icons/about1.jpg') }}" class="w-full h-full object-cover" />
                </div>

            </div>


            <!-- ================= VISION ================= -->
            <div class="w-full max-w-[1184px] min-h-[402px] flex flex-col lg:flex-row justify-between items-center lg:items-start gap-10 lg:gap-12">

                <!-- LEFT IMAGE -->
                <div
                    class="w-full max-w-[568px] h-[280px] sm:h-[360px] lg:h-[402px] rounded-[24px] overflow-hidden border border-[#AD46FF]/20 shadow-[0_0_40px_rgba(168,85,247,0.2)]">
                    <img src="{{ asset('icons/about1.jpg') }}" class="w-full h-full object-cover" />
                </div>

                <!-- RIGHT CONTENT -->
                <div class="w-full max-w-[568px] min-h-[151.75px] flex flex-col items-center lg:items-start gap-[24px] lg:mt-[125.13px]">

                    <!-- HEADING -->
                    <div class="w-full max-w-[212px] min-h-[40px] text-center lg:text-left">
                        <h2 class="text-[36px] leading-[40px] font-bold text-[#101828]">
                            Our Vision
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="w-full max-w-[568px] min-h-[88px] text-center lg:text-left">
                        <p class="text-[18px] leading-[29.25px] text-[#4A5565]">
                            A world where every physical space is dynamically connected,
                            delivering context-aware, hyper-personalized information and
                            experiences in real-time.
                        </p>
                    </div>

                </div>

            </div>

        </section>

        <!-- ================= FOOTER ================= -->
        <div
            class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] mt-[91px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

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
