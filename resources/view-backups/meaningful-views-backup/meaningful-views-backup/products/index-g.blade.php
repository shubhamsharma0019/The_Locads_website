<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden bg-white">

    <!-- ================= MAIN CONTAINER ================= -->
    <div class="w-full max-w-[1387px] mx-auto">

        <!-- ================= HEADER ================= -->
        @include('partials.signage-header', ['currentPage' => 13])

        <!-- ================= HERO SECTION ================= -->
        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] mt-10 sm:mt-[80px] min-h-[394px] bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] px-4 sm:px-6 lg:px-[53.5px] py-12 md:py-16 lg:pt-[80px]">

            <!-- INNER WRAPPER (1280px center align) -->
            <div class="w-full max-w-[1280px] mx-auto text-center">

                <!-- ================= HEADING ================= -->
                <div class="w-full max-w-[371px] mx-auto">
                    <h1 class="text-[34px] leading-[1.15] md:text-[44px] lg:text-[60px] lg:leading-[72px] font-bold tracking-[-1.5px] text-[#111827]">
                        Our <span class="text-[#4F46E5] tracking-[-1.8px]">Products</span>
                    </h1>
                </div>

                <!-- ================= DESCRIPTION ================= -->
                <div class="w-full max-w-[768px] mx-auto mt-[24px]">
                    <p class="text-[17px] leading-[1.6] md:text-[20px] md:leading-[28px] text-[#364153] font-normal">
                        Commercial-grade digital signage hardware and software solutions. Buy or rent to fit your
                        budget.
                    </p>
                </div>

                <!-- ================= BUTTON ================= -->
                <div class="w-full max-w-[320.88px] mx-auto mt-[32px]">

                    <button class="w-full min-h-[50px] rounded-full border border-[#FFA2A2] bg-[#FFE2E2] px-4 py-3
               flex items-center justify-center gap-[4px]">

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
                        <span class="text-[14px] leading-[20px] md:text-[16px] md:leading-[24px] font-semibold text-[#9F0712]">
                            All products available for rent!
                        </span>

                    </button>

                </div>

            </div>
        </section>
        @include('partials.product-filter', ['currentPage' => 13])

        <section class="w-full mx-auto px-4 sm:px-6 md:px-6 lg:px-[101.5px] pt-10 lg:pt-[64px] pb-10 lg:pb-[64px]">

            <!-- INNER WRAPPER -->
            <div class="w-full max-w-[1184px] mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 lg:gap-[24px]">
                <div
                    class="w-full max-w-[373.33px] h-auto bg-white rounded-[16px] border border-[#E5E7EB] mx-auto cursor-pointer transition hover:shadow-[0_12px_32px_rgba(15,23,42,0.12)]"
                    onclick="window.location='{{ route('products.show') }}'"
                    role="link"
                    tabindex="0"
                    onkeydown="if(event.key==='Enter' || event.key===' '){ event.preventDefault(); window.location='{{ route('products.show') }}'; }">

                    <!-- IMAGE -->
                    <div class="w-full aspect-[371.33/224] bg-[#F3F4F6] rounded-t-[16px]"><img class="w-full h-full object-cover rounded-[14px]"
                            src="{{ asset('icons/softwareimage.jpg') }}"></div>

                    <!-- CONTENT -->
                    <div class="w-full h-auto px-[24px] pt-[24px] pb-4 md:pb-6">

                        <!-- TITLE -->
                        <div class="w-full mt-[24px] min-h-[28px]">
                            <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Cloud CMS License (Annual)
                            </h3>
                        </div>

                        <!-- FEATURES -->
                        <div class="w-full mt-[16px] flex flex-col gap-[8px]">

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
                                    Android OS
                                </span>
                            </div>

                        </div>

                        <!-- BOTTOM SECTION -->
                        <div
                            class="w-full mt-[24px] pt-[17px] border-t border-[#E5E7EB] flex flex-col gap-[16px]">

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

                                </div>

                            </div>

                            <!-- ================= ACTION ROW ================= -->
                            <div class="w-full flex flex-col sm:flex-row items-stretch sm:items-center gap-[8px]">

                                <!-- BUTTON -->
                                <a
                                    href="{{ route('products.show') }}"
                                    class="w-full sm:w-[261.33px] h-[42px] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
                                    <span class="text-white text-[14px] font-medium">
                                        View Details
                                    </span>
                                </a>

                                <!-- CART BUTTON -->
                                <div
                                    class="w-full sm:w-[54px] h-[42px] border-[2px] border-[#D1D5DC] rounded-[14px] flex items-center justify-center">

                                    <!-- SVG ICON -->
                                    <img src="{{ asset('icons/carticon.svg') }}" class="w-[18px] h-[18px]"
                                        alt="cart icon">

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- ================= CARD ================= -->
                <div
                    class="w-full max-w-[373.33px] h-auto bg-white rounded-[16px] border border-[#E5E7EB] mx-auto cursor-pointer transition hover:shadow-[0_12px_32px_rgba(15,23,42,0.12)]"
                    onclick="window.location='{{ route('products.show-b') }}'"
                    role="link"
                    tabindex="0"
                    onkeydown="if(event.key==='Enter' || event.key===' '){ event.preventDefault(); window.location='{{ route('products.show-b') }}'; }">

                    <!-- IMAGE -->
                    <div class="w-full aspect-[371.33/224] bg-[#F3F4F6] rounded-t-[16px]"><img class="w-full h-full object-cover rounded-[14px]"
                            src="{{ asset('icons/softwareimage.jpg') }}"></div>

                    <!-- CONTENT -->
                    <div class="w-full h-auto px-[24px] pt-[24px] pb-4 md:pb-6">

                        <!-- TITLE -->
                        <div class="w-full mt-[24px] min-h-[28px]">
                            <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                Pen Drive Software Licence
                            </h3>
                        </div>

                        <!-- FEATURES -->
                        <div class="w-full mt-[16px] flex flex-col gap-[8px]">

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
                                    Android OS
                                </span>
                            </div>

                        </div>

                        <!-- BOTTOM SECTION -->
                        <div
                            class="w-full mt-[24px] pt-[17px] border-t border-[#E5E7EB] flex flex-col gap-[16px]">

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

                                </div>

                            </div>

                            <!-- ================= ACTION ROW ================= -->
                            <div class="w-full flex flex-col sm:flex-row items-stretch sm:items-center gap-[8px]">

                                <!-- BUTTON -->
                                <a
                                    href="{{ route('products.show-b') }}"
                                    class="w-full sm:w-[261.33px] h-[42px] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
                                    <span class="text-white text-[14px] font-medium">
                                        View Details
                                    </span>
                                </a>

                                <!-- CART BUTTON -->
                                <div
                                    class="w-full sm:w-[54px] h-[42px] border-[2px] border-[#D1D5DC] rounded-[14px] flex items-center justify-center">

                                    <!-- SVG ICON -->
                                    <img src="{{ asset('icons/carticon.svg') }}" class="w-[18px] h-[18px]"
                                        alt="cart icon">

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ================= CTA SECTION ================= -->
        <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[296px] mt-12 lg:mt-[64px] px-4 sm:px-6 lg:px-[53.5px] py-12 lg:pt-[64px] bg-[#F9FAFB]">

            <!-- INNER CONTAINER -->
            <div class="w-full max-w-[1280px] h-auto mx-auto flex flex-col items-center">

                <!-- HEADING -->
                <div class="w-full max-w-[1184px] min-h-[36px] flex justify-center">
                    <h2 class="text-[28px] leading-[1.2] lg:text-[30px] lg:leading-[36px] font-bold text-[#101828] text-center">
                        Need Help Choosing?
                    </h2>
                </div>

                <!-- DESCRIPTION -->
                <div class="w-full max-w-[1184px] mt-[16px] flex justify-center">
                    <p class="w-full max-w-[682px] text-[16px] leading-[26px] lg:text-[18px] lg:leading-[28px] text-[#364153] text-center">
                        Our team can help you select the perfect digital signage solution for your needs.
                    </p>
                </div>

                <!-- BUTTON -->
                <div class="w-[1184px] mt-[24px] flex justify-center">

                    <div class="w-[241.4px] h-[56px] bg-[#E7000B] rounded-full flex items-center justify-center
               shadow-[0_4px_6px_rgba(0,0,0,0.1),0_10px_15px_rgba(0,0,0,0.1)]">

                        <span class="text-white text-[16px] leading-[24px] font-bold">
                            Schedule Consultation
                        </span>

                    </div>

                </div>

            </div>
        </section>
        <!-- ================= FOOTER ================= -->
        <div
            class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] mt-[92px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

            <!-- ðŸ”· FOOTER INNER -->
            <div class="w-full max-w-[1280px] px-4 sm:px-6 lg:px-[48px] py-10 sm:py-14 lg:py-[81px] flex flex-col">

                <!-- ðŸ”· TOP GRID -->
                <div
                    class="w-full lg:w-[1184px] min-h-[176px] flex flex-col sm:flex-row sm:flex-wrap xl:flex-nowrap justify-between gap-8 lg:gap-10">

                    <!-- ðŸ”· COLUMN 1 -->
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

                    <!-- ðŸ”· COLUMN 2 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Retail Displays</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Hospitality Signage</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Corporate Communications</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Healthcare Boards</p>

                    </div>

                    <!-- ðŸ”· COLUMN 3 -->
                    <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

                        <p class="text-[14px] leading-[20px] text-[#4A5565]">About Us</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Our Services</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Franchise Program</p>
                        <p class="text-[14px] leading-[20px] text-[#4A5565]">Contact</p>

                    </div>

                    <!-- ðŸ”· COLUMN 4 -->
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

                <!-- ðŸ”· BOTTOM BAR -->
                <div
                    class="w-full lg:w-[1184px] min-h-[49px] border-t border-[#E5E7EB] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 pt-[24px] sm:pt-[32px] mt-[24px]">

                    <!-- COPYRIGHT -->
                    <p class="text-[12px] leading-[16px] text-[#6A7282]">
                        Â© 2026 TheLocads Solutions. All rights reserved.
                    </p>

                    <!-- LINKS -->
                    <div class="flex flex-wrap gap-[24px] text-[12px] text-[#6A7282]">
                        <span>Privacy Policy</span>
                        <span>Terms of Service</span>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <button
        class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]"
        aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </button>

</body>

</html>
