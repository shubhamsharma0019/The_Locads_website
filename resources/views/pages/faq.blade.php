<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @include('partials.seo-meta', [
        'title' => 'FAQ | The Locads Digital Signage Questions',
        'description' => 'Find answers to common The Locads questions about digital signage products, pricing, installation, licensing, and support.',
        'keywords' => 'The Locads FAQ, digital signage questions, signage pricing, signage support'
    ])

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden bg-white">

    <div class="w-full flex flex-col items-center">

        <!-- ================= HEADER ================= -->
        @include('partials.signage-header', ['currentPage' => 18])

        <!-- hero section -->
        <div
            class="mt-[79px] flex h-[312px] w-full justify-center bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] px-[53.5px] pt-[80px] pb-[80px] max-[1280px]:px-[24px] max-[1024px]:mt-[48px] max-[1024px]:h-auto max-[1024px]:pt-[56px] max-[1024px]:pb-[56px] max-[767px]:px-[16px]">

            <!-- INNER -->
            <div class="flex h-full w-[1280px] max-w-[1280px] items-end justify-center px-[48px] max-[1280px]:w-full max-[1280px]:px-0 max-[1024px]:h-auto max-[1024px]:items-center">

                <!-- CONTENT -->
                <div class="signage18-hero-content mx-auto flex max-w-[729px] flex-col items-center text-center max-[1024px]:w-full">

                    <!-- HEADING -->
                    <h1
                        class="text-center text-[60px] font-bold leading-[72px] tracking-[-1.5px] text-[#101828] max-[1024px]:text-[42px] max-[1024px]:leading-[1.15] max-[767px]:text-[34px] max-[767px]:leading-[1.2]">
                        Frequently Asked
                        <span
                            class="bg-gradient-to-r from-[#7F56D9] to-[#2E90FA] bg-clip-text text-transparent tracking-[-1.8px]">
                            Insights
                        </span>
                    </h1>

                    <!-- PARA -->
                    <p
                        class="mt-[23.5px] max-w-[672px] text-center text-[20px] leading-[28px] text-[#364153] max-[767px]:text-[17px] max-[767px]:leading-[1.6]">
                        Find answers to common questions about our digital signage solutions,
                        pricing, and services.
                    </p>

                </div>

            </div>

        </div>
        <!-- ================= FAQ CONTENT ================= -->
        <section
            class="flex w-full flex-col items-center gap-[48px] px-[293.5px] pt-[64px] pb-[112px] max-[1280px]:px-[24px] max-[1024px]:gap-[32px] max-[1024px]:pt-[48px] max-[1024px]:pb-[64px] max-[767px]:px-[16px]">


            <!-- ================= CATEGORY ================= -->
            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full 
                /* h-[312px] */">

                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                    <h3 class="text-[24px] font-bold text-[#101828]">General</h3>
                </div>

                <div class="flex flex-col gap-[16px]">
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What is digital signage?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What industries do you serve?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Do you offer support?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>
                </div>
            </div>


            <!-- ================= CATEGORY2 ================= -->
            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full">

                <!-- HEADING -->
                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px] flex items-end">
                    <h3 class="text-[24px] leading-[32px] font-bold text-[#101828]">
                        Products & Hardware
                    </h3>
                </div>


                <!-- ITEMS WRAPPER -->
                <div class="w-full flex flex-col gap-[16px]">


                    <!-- ================= OPEN ITEM ================= -->
                    <div
                        class="flex w-full flex-col gap-[12px] rounded-[14px] border border-[#E5E7EB] bg-white px-[24px] py-[20px]">

                        <!-- QUESTION ROW -->
                        <div class="flex w-full items-center justify-between gap-3">

                            <!-- TEXT -->
                            <p class="min-w-0 flex-1 text-[18px] leading-[28px] font-semibold text-[#101828]">
                                What types of displays do you offer?
                            </p>

                            <!-- ICON -->
                            <div class="ml-auto flex h-[24px] w-[24px] shrink-0 items-center justify-center rotate-360">
                                <span class="text-[#155DFC] text-[18px]"><img src="{{ asset('icons/upperarrow.svg') }}"></span>
                            </div>

                        </div>

                        <!-- ANSWER -->
                        <div class="w-full">
                            <p class="text-[16px] leading-[26px] text-[#364153]">
                                We offer Pro Series 4K Displays (43”-85”), High-Bright Window Displays for direct
                                sunlight,
                                Video Wall solutions, and Edge Media Players. All our hardware is commercial-grade and
                                rated
                                for 24/7 operation.
                            </p>
                        </div>

                    </div>


                    <!-- ================= CLOSED ITEM ================= -->
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[24px] py-[20px]">

                        <p class="min-w-0 flex-1 text-[18px] leading-[28px] font-semibold text-[#101828]">
                            Can I use my existing screens?
                        </p>

                        <div class="ml-auto flex h-[24px] w-[24px] shrink-0 items-center justify-center">
                            <span class="text-[#155DFC] text-[18px]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                        </div>

                    </div>


                    <!-- ================= CLOSED ITEM ================= -->
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[24px] py-[20px]">

                        <p class="min-w-0 flex-1 text-[18px] leading-[28px] font-semibold text-[#101828]">
                            What is the difference between indoor and outdoor displays?
                        </p>

                        <div class="ml-auto flex h-[24px] w-[24px] shrink-0 items-center justify-center">
                            <span class="text-[#155DFC] text-[18px]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                        </div>

                    </div>


                </div>

            </div>


            <!-- ================= CATEGORY3 ================= -->
            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full 
                /* h-[398px] */">

                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                    <h3 class="text-[24px] font-bold text-[#101828]">Software & Content Management</h3>
                </div>

                <div class="flex flex-col gap-[16px]">
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">How do I update content on my screens?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Can I schedule different content for different times?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Does the system work offline?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What is Unicast, Multicast, and Broadcast?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>
                </div>
            </div>

            <!-- category 4 -->

            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full 
                /* h-[398px] */">

                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                    <h3 class="text-[24px] font-bold text-[#101828]">Pricing & Plans</h3>
                </div>

                <div class="flex flex-col gap-[16px]">
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">How much does digital signage cost?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What is Hardware as a Service (HaaS)?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Are there any hidden fees?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Do you offer screen rental services?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>
                </div>
            </div>

            <!-- 5 -->

            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full 
                /* h-[310px] */">

                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                    <h3 class="text-[24px] font-bold text-[#101828]">Installation & Setup</h3>
                </div>

                <div class="flex flex-col gap-[16px]">
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Do you provide installation services?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">How long does installation take?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">Can I install the hardware myself?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>


                </div>
            </div>

            <!-- 6 -->

            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full 
                /* h-[310px] */">

                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                    <h3 class="text-[24px] font-bold text-[#101828]">Licensing & Activation</h3>
                </div>

                <div class="flex flex-col gap-[16px]">
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">How do I activate my software license?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">How many devices can I use with one license?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What happens if my license expires?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>


                </div>
            </div>

            <!-- 7 -->

            <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full 
                /* h-[300px] */">

                <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                    <h3 class="text-[24px] font-bold text-[#101828]">Franchise & Partnership</h3>
                </div>

                <div class="flex flex-col gap-[16px]">
                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What franchise opportunities do you offer?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What territories are available?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>

                    <div
                        class="flex w-full items-center justify-between gap-3 rounded-[14px] border border-[#E5E7EB] bg-white px-[20px] py-[20px]">
                        <p class="min-w-0 flex-1 text-[18px] font-semibold">What kind of support do franchisees receive?</p>
                        <span class="ml-auto shrink-0 text-[#155DFC]"><img src="{{ asset('icons/lowerarrow.svg') }}"></span>
                    </div>


                </div>
            </div>

        </section>
        <!-- ================= CTA ================= -->
        <section class="flex h-[296px] w-full justify-center bg-[#F9FAFB] px-[53.5px] pt-[64px] max-[1280px]:px-[24px] max-[1024px]:h-auto max-[1024px]:pt-[48px] max-[1024px]:pb-[48px] max-[767px]:px-[16px]">

            <!-- INNER CONTAINER (1280) -->
            <div class="flex h-full w-[1280px] max-w-[1280px] justify-center max-[1280px]:w-full max-[1024px]:h-auto">

                <!-- CONTENT WRAPPER (1184) -->
                <div class="flex w-[1184px] max-w-[1184px] flex-col items-center text-center max-[1280px]:w-full">

                    <!-- HEADING -->
                    <div class="w-full flex justify-center">
                        <h2 class="text-[30px] leading-[36px] font-bold text-[#101828]">
                            Still have questions?
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="w-full flex justify-center mt-[16px]">
                        <p class="text-[18px] leading-[28px] text-[#364153] max-w-[550px]">
                            Our team is here to help. Contact us for personalized assistance.
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <div class="w-full flex justify-center mt-[32px]">
                        <a href="{{ route('contact') }}" class="bg-[#E7000B] text-white px-[32px] py-[16px] rounded-full text-[16px] font-bold
                               shadow-[0_4px_6px_-4px_rgba(0,0,0,0.1),0_10px_15px_-3px_rgba(0,0,0,0.1)]">
                            Contact Support
                        </a>
                    </div>

                </div>

            </div>

        </section>
    </div>

    <!-- ****************** -->

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

    <a href="{{ route('contact.alt') }}"
        class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]"
        aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </a>



</body>

</html>
