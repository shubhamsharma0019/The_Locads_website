<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @include('partials.seo-meta', [
        'title' => 'Pen Drive Software License | The Locads',
        'description' => 'View The Locads Pen Drive Software License details for offline digital signage playback and secure environments.',
        'keywords' => 'offline signage software, pen drive license, USB signage software, The Locads'
    ])
</head>

<body class="m-0 overflow-x-hidden bg-white font-sans">

    <!-- ================== TOP LEVEL WRAPPER ================== -->
    <div class="signage15-shell w-full max-w-[1387px] mx-auto">

        <!-- ================== HEADER ================== -->
        @include('partials.signage-header', ['currentPage' => 15])

        <!-- *********** -->
        <!-- ================= BACK TO PRODUCTS BAR ================= -->
        <div class="signage15-backbar w-full h-[77.5px] border-b border-[#E5E7EB] pt-[24px] px-[53.5px] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[20px] max-lg:pb-[20px] max-md:px-[16px]">

            <!-- INNER CONTAINER -->
            <div class="w-full flex items-center">

                <!-- BACK LINK WRAPPER -->
                <a href="{{ route('products.index-g') }}" class="signage15-backlink flex items-center gap-[8px] pl-[48px] max-lg:pl-0">

                    <!-- ARROW -->
                    <div class="w-[20px] h-[20px] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] text-[#155DFC]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                    <!-- TEXT -->
                    <p class="text-[16px] leading-[24px] font-medium text-[#155DFC]">
                        Back to Products
                    </p>

                </a>

            </div>

        </div>


        <!-- ================== MAIN SECTION ================== -->
        <main class="signage15-main w-full max-w-[1387px] mx-auto px-[101.5px] py-[64px] flex flex-col gap-[64px] max-[1387px]:px-[24px] max-lg:py-[48px] max-lg:gap-[48px] max-md:px-[16px] max-md:py-[40px] max-md:gap-[40px]">

            <!-- ================= HERO SECTION ================= -->
            <div class="signage15-hero w-full flex gap-[32px] max-lg:flex-col max-lg:gap-[32px]">

                <!-- ========= DIV 1: IMAGE WRAPPER ========= -->
                <div class="signage15-hero-media w-1/2 h-[568px] bg-[#F3F4F6] rounded-[24px] overflow-hidden max-lg:w-full max-lg:h-auto max-lg:aspect-square">
                    <img src="{{ asset('icons/14pageimg.jpg') }}" class="w-full h-full object-cover" />
                </div>


                <!-- ========= DIV 2: CONTENT WRAPPER ========= -->
                <div class="signage15-hero-content w-1/2 h-[568px] flex flex-col max-lg:w-full max-lg:h-auto">

                    <!-- ===== DIV 2.1: TITLE + DESCRIPTION BLOCK ===== -->
                    <div class="w-full flex flex-col gap-[16px]">

                        <!-- ---- HEADING DIV ---- -->
                        <div class="signage15-title-wrap w-[568px] h-[96px] max-[1387px]:w-full max-[1387px]:max-w-full max-lg:h-auto">
                            <h1 class="text-[40px] leading-[48px] font-medium text-[#101828] max-lg:text-[34px] max-lg:leading-[1.15] max-md:text-[30px]">
                                Pen Drive Software <div>License</div>
                            </h1>
                        </div>

                        <!-- ---- PARAGRAPH DIV ---- -->
                        <div class="signage15-desc-wrap w-[568px] h-[88px] max-[1387px]:w-full max-[1387px]:max-w-full max-lg:h-auto">
                            <p class="text-[18px] leading-[29.25px] text-[#364153] max-md:text-[16px] max-md:leading-[26px]">
                              Offline digital signage solution that plays content directly from a USB drive. Perfect for locations without internet connectivity or areas requiring air-gapped security. Plug-and-play simplicity.
                            </p>
                        </div>

                    </div>


                    <!-- ===== DIV 2.2: PRICE CARD ===== -->
                    <div
                        class="signage15-price-card w-[568px] h-[110px] max-[1387px]:w-full max-[1387px]:max-w-full mt-[32px] bg-[#F9FAFB] border border-[#E5E7EB] rounded-[16px] px-[25px] pt-[25px] max-lg:h-auto max-lg:pb-[24px]">

                        <!-- INNER PRICE WRAPPER -->
                        <div class="flex flex-col gap-[4px]">

                            <!-- LABEL -->
                            <p class="text-sm text-gray-500">Price</p>

                            <!-- PRICE TEXT -->
                            <h2 class="text-[30px] leading-[36px] font-medium text-[#101828]">
                              ₹149/year
                            </h2>

                        </div>
                    </div>


                    <!-- ===== DIV 2.3: BUTTON GROUP ===== -->
                    <div class="signage15-button-group w-[568px] h-[60px] max-[1387px]:w-full max-[1387px]:max-w-full flex gap-[16px] mt-[32px] max-lg:h-auto max-lg:flex-col">

                        <!-- ===== BUTTON 1: PURCHASE ===== -->
                        <a href="{{ route('contact') }}" class="w-[274px] h-[60px] max-lg:w-full bg-[#155DFC] text-white rounded-[14px] 
                 flex items-center justify-center gap-[8px]
                 shadow-[0_4px_6px_rgba(0,0,0,0.1),0_10px_15px_rgba(0,0,0,0.1)]">

                            <!-- ICON -->
                            <span class="w-[20px] h-[20px] flex items-center justify-center">
                                <img src="{{ asset('icons/cartpurchase.svg') }}">
                            </span>

                            <!-- TEXT -->
                            <span class="text-[16px] leading-[24px] font-bold">
                                Purchase Now
                            </span>

                        </a>


                        <!-- ===== BUTTON 2: REQUEST QUOTE ===== -->
                        <a href="{{ route('contact.alt') }}" class="w-[278px] h-[60px] max-lg:w-full border-[2px] border-[#D1D5DC] rounded-[14px] 
                 flex items-center justify-center">

                            <!-- TEXT -->
                            <span class="text-[16px] leading-[24px] font-bold text-[#101828]">
                                Request Quote
                            </span>

                        </a>

                    </div>

                    <!-- ===== DIV 2.4: FEATURES ===== -->
                    <!-- ===== DIV 2.4: FEATURES ===== -->
                    <div class="signage15-feature-strip w-[568px] h-[82px] max-[1387px]:w-full max-[1387px]:max-w-full mt-[32px] flex gap-[16px] max-lg:h-auto max-lg:flex-wrap">

                        <!-- FEATURE 1 -->
                        <div class="w-[178.66px] h-[82px] max-lg:w-[calc(50%_-_8px)] max-md:w-full border border-[#E5E7EB] rounded-[14px] 
                  p-[16px] flex flex-col items-center gap-[8px] bg-white">

                            <div class="w-[24px] h-[24px] flex items-center justify-center">
                                <img src="{{ asset('icons/warranty.svg') }}">
                            </div>

                            <p class="text-[12px] leading-[16px] font-bold text-[#364153] text-center">
                                3 Year Warranty
                            </p>

                        </div>


                        <!-- FEATURE 2 -->
                        <div class="w-[178.66px] h-[82px] max-lg:w-[calc(50%_-_8px)] max-md:w-full border border-[#E5E7EB] rounded-[14px] 
                  p-[16px] flex flex-col items-center gap-[8px] bg-white">

                            <div class="w-[24px] h-[24px] flex items-center justify-center">
                                <img src="{{ asset('icons/shipping.svg') }}">
                            </div>

                            <p class="text-[12px] leading-[16px] font-bold text-[#364153] text-center">
                                Free Shipping
                            </p>

                        </div>


                        <!-- FEATURE 3 -->
                        <div class="w-[178.66px] h-[82px] max-lg:w-[calc(50%_-_8px)] max-md:w-full border border-[#E5E7EB] rounded-[14px] 
                  p-[16px] flex flex-col items-center gap-[8px] bg-white">

                            <div class="w-[24px] h-[24px] flex items-center justify-center">
                                <img src="{{ asset('icons/stock.svg') }}">
                            </div>

                            <p class="text-[12px] leading-[16px] font-bold text-[#364153] text-center">
                                In Stock
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ===== DIV 2 : KEY FEATURES ===== -->
            <div class="w-full flex flex-col gap-[32px]">

                <!-- ===== HEADING DIV ===== -->
                <div class="w-full h-[36px]">
                    <h2 class="text-[30px] leading-[36px] font-medium text-[#101828]">
                        Key Features
                    </h2>
                </div>


                <!-- ===== FEATURES GRID WRAPPER ===== -->
                <div class="signage15-feature-grid w-full grid grid-cols-3 gap-[24px] max-[1387px]:grid-cols-2 max-lg:grid-cols-1 max-lg:gap-[16px] max-[1387px]:[&>div]:w-full">

                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <!-- ICON -->
                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <!-- TEXT WRAPPER -->
                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                                Offline content playback
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                                No internet connection required
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                               Plug-and-play operation
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                                Auto-loop playback
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                               Supports all major media formats
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                                Works with any USB drive
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                               Instant content updates
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                                Perfect for secure environments
                            </p>
                        </div>

                    </div>


                    <!-- ===== FEATURE ITEM ===== -->
                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                               Zero cloud dependency
                            </p>
                        </div>

                    </div>


                    <div class="w-[384px] h-[56px] bg-[#F9FAFB] rounded-[14px] 
                flex items-center px-[16px] gap-[12px]">

                        <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                            <img src="{{ asset('icons/rightsign14.svg') }}">
                        </div>

                        <div class="flex-1">
                            <p class="text-[16px] leading-[24px] text-[#364153]">
                                Simple to manage
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- ===== DIV 3 : TECH SPECS ===== -->
            <div class="w-full flex flex-col gap-[32px]">

                <!-- ===== HEADING DIV ===== -->
                <div class="w-full h-[36px]">
                    <h2 class="text-[30px] leading-[36px] font-medium text-[#101828]">
                        Technical Specifications
                    </h2>
                </div>


                <!-- ===== TABLE WRAPPER ===== -->
                <div class="w-full border border-[#E5E7EB] rounded-[16px] overflow-hidden bg-white">

                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">

                        <!-- LEFT TEXT -->
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            License Type
                        </p>

                        <!-- RIGHT TEXT -->
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            Annual subscription
                        </p>

                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            Internet Required
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            No
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            Supported Formats
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                           MP4, AVI, MOV, JPG, PNG, PDF
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            USB Compatibility
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                           USB 2.0/3.0 drives
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                          Playback Mode
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            Loop continuous
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            Max File Size
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            Limited by USB capacity
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                           Auto-Detection
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            Yes
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            Updates
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            Manual via USB
                        </p>
                    </div>


                    <!-- ===== ROW ===== -->
                    <div class="signage15-spec-row w-full h-[73px] flex items-center justify-between px-[24px] border-b border-[#E5E7EB] max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                        <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                            Support
                        </p>
                        <p class="text-[16px] leading-[24px] text-[#364153]">
                            Email support included
                        </p>
                    </div>


                    

                </div>

            </div>

        </main>

        <!-- ================== CTA SECTION ================== -->
        <section class="signage15-cta relative z-0 w-full h-[296px] px-[53.5px] pt-[64px] text-[#EFF6FF]
                bg-gradient-to-b from-[#EFF6FF] to-[#F9FAFB] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[56px] max-lg:pb-[56px] max-md:mt-[48px] max-md:px-[16px] max-md:pt-[48px] max-md:pb-[48px] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#EFF6FF] before:to-[#F9FAFB]">

            <!-- ===== INNER WRAPPER ===== -->
            <div class="signage15-cta-inner w-full max-w-[1184px] mx-auto flex flex-col items-center text-center max-[1387px]:w-full">

                <!-- ===== HEADING DIV ===== -->
                <div class="signage15-cta-heading w-full h-[36px]">
                    <h2 class="text-[30px] leading-[36px] font-medium text-[#101828] max-md:text-[28px] max-md:leading-[1.2]">
                        Ready to Get Started?
                    </h2>
                </div>

                <!-- ===== PARAGRAPH DIV ===== -->
                <div class="signage15-cta-copy w-[681px] h-[28px] mt-[16px] max-lg:w-full max-lg:max-w-[681px] max-lg:h-auto">
                    <p class="text-[18px] leading-[28px] text-[#364153] max-md:text-[16px] max-md:leading-[26px]">
                        Contact our team to discuss your digital signage needs and get a custom quote.
                    </p>
                </div>

                <!-- ===== BUTTON DIV ===== -->
                <div class="signage15-cta-button mt-[32px]">

                    <a href="{{ route('contact') }}" class="w-[219px] h-[56px] bg-[#E7000B] text-white min-w-[219px] max-md:w-auto max-md:px-[24px]
                     rounded-full flex items-center justify-center
                     shadow-[0_4px_6px_rgba(0,0,0,0.1),0_10px_15px_rgba(0,0,0,0.1)]">

                        <span class="text-[16px] leading-[24px] font-bold text-white">
                            Contact Sales Team
                        </span>

                    </a>

                </div>

            </div>

        </section>

        <!-- ================== FOOTER ================== -->
        @include('partials.site-footer')

</body>

</html>
