<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @include('partials.seo-meta', [
        'title' => 'The Locads Blog | Digital Signage Insights',
        'description' => 'Read the latest The Locads insights, digital signage trends, best practices, and business success stories.',
        'keywords' => 'digital signage blog, The Locads insights, signage trends, signage articles'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 overflow-x-hidden bg-[#FFFFFF]">

    <!-- ================= TOP LEVEL ================= -->
    <div class="signage16-shell w-full max-w-[1387px] mx-auto flex flex-col">

        <!-- ================= HEADER ================= -->
        @include('partials.signage-header', ['currentPage' => 16])

        <!-- ================= SECOND DIV (HERO) ================= -->
        <!-- ================= HERO SECTION ================= -->
        <section
            class="signage16-hero-band relative z-0 w-full max-w-[1387px] h-[312px] pt-[80px] mt-[79px] px-[53.5px] bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] mx-auto before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#F9FAFB] before:to-[#EFF6FF] max-[1387px]:px-[24px] max-lg:h-auto max-lg:mt-[48px] max-lg:pt-[56px] max-lg:pb-[56px] max-md:px-[16px]">

            <!-- INNER CONTAINER (1280px) -->
            <div class="signage16-hero-inner w-[1280px] h-[152px] px-[48px] mx-auto flex flex-col items-center max-[1387px]:w-full max-[1387px]:max-w-[1184px] max-[1387px]:h-auto max-[1387px]:px-0">

                <!-- CONTENT WRAPPER (1184px) -->
                <div class="w-[1184px] h-[152px] flex flex-col items-center max-[1387px]:w-full max-[1387px]:max-w-full max-[1387px]:h-auto">

                    <!-- HEADING -->
                    <h1 class="signage16-hero-title text-[60px] font-[700] leading-[72px] tracking-[-1.5px] text-[#0F172A] max-lg:text-[44px] max-lg:leading-[1.15] max-lg:text-center max-md:text-[34px]">
                        Latest
                        <span
                            class="bg-gradient-to-r from-[#7C3AED] to-[#2563EB] bg-clip-text text-transparent tracking-[-1.8px]">
                            Insights
                        </span>
                    </h1>

                    <!-- PARAGRAPH -->
                    <p class="signage16-hero-copy w-[672px] h-[56px] mt-[23.5px] text-center text-[20px] leading-[28px] text-[#364153] max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto max-md:text-[17px] max-md:leading-[1.6]">
                        Industry trends, best practices, and success stories from the world of digital signage.
                    </p>

                </div>

            </div>

        </section>

        <!-- ===== EXACT GAP AFTER THIS SECTION ===== -->


        <!-- ================= THIRD DIV (FEATURED) ================= -->
        <section class="signage16-featured w-full max-w-[1387px] h-[482px] px-[165.5px] py-[64px] bg-[#F9FAFB] mx-auto flex max-[1387px]:px-[24px] max-lg:h-auto max-lg:py-[48px] max-md:px-[16px]">

            <!-- INNER WRAPPER -->
            <div
                class="signage16-featured-inner w-[1056px] h-[354px] max-[1387px]:w-full max-[1387px]:max-w-[1184px] bg-white rounded-[24px] border border-[#E5E7EB] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.25)] flex max-lg:h-auto max-lg:flex-col">

                <!-- ================= IMAGE DIV ================= -->
                <div class="signage16-featured-media w-[527px] h-[352px] max-lg:w-full max-lg:h-auto max-lg:aspect-[527/352]">
                    <img src={{ asset('icons/signage16img.jpg') }}
                        class="w-full h-full object-cover rounded-l-[24px] max-lg:rounded-l-none max-lg:rounded-t-[24px]" />
                </div>

                <!-- ================= CONTENT DIV ================= -->
                <div class="signage16-featured-content w-[527px] h-[352px] relative max-lg:w-full max-lg:h-auto max-lg:static max-lg:p-[32px] max-md:p-[24px]">

                    <!-- FEATURED BADGE -->
                    <div
                        class="signage16-featured-badge absolute top-[40px] left-[40px] w-[92.79px] h-[28px] bg-[#FFE2E2] rounded-full flex items-center justify-center max-lg:static max-lg:mb-[16px] max-lg:inline-flex max-lg:h-[36px] max-lg:min-h-[36px] max-lg:w-fit max-lg:max-w-full max-lg:self-start max-lg:px-[16px] max-lg:whitespace-nowrap">
                        <span class="text-[14px] font-[700] leading-[20px] text-[#C10007]">
                            Featured
                        </span>
                    </div>

                    <!-- HEADING -->
                    <div class="absolute top-[84px] left-[40px] w-[447px] h-[72px] max-lg:static max-lg:w-full max-lg:h-auto max-lg:mb-[16px]">
                        <h2 class="text-[30px] font-[700] leading-[36px] text-[#101828]">
                            Top 5 Digital Signage Trends for 2026
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="absolute top-[172px] left-[40px] w-[447px] h-[48px] max-lg:static max-lg:w-full max-lg:h-auto max-lg:mb-[16px]">
                        <p class="text-[16px] font-[400] leading-[24px] text-[#364153]">
                            Discover the latest trends shaping the future of digital signage, from AI-powered content to
                            interactive displays.
                        </p>
                    </div>

                    <!-- AUTHOR ROW -->
                    <div class="absolute top-[244px] left-[40px] w-[447px] h-[20px] flex items-center gap-[24px] max-lg:static max-lg:w-full max-lg:h-auto max-lg:mb-[16px] max-lg:flex-wrap max-lg:gap-[12px]">

                        <!-- AUTHOR -->
                        <div class="flex items-center gap-[8px]">
                            <div class="w-[16px] h-[16px] bg-white-300"><img src="{{ asset('icons/sarahicon.svg') }}">
                            </div>
                            <span class="text-[14px] text-[#4A5565]">Sarah Johnson</span>
                        </div>

                        <!-- DATE -->
                        <div class="flex items-center gap-[8px]">
                            <div class="w-[16px] h-[16px] bg-white-300"><img src="{{ asset('icons/dateicon.svg') }}">
                            </div>
                            <span class="text-[14px] text-[#4A5565]">April 15, 2026</span>
                        </div>

                    </div>

                    <!-- READ ARTICLE -->
                    <div class="absolute top-[288px] left-[40px] flex items-center gap-[8px] max-lg:static">

                        <span class="text-[16px] font-[700] text-[#1447E6]">
                            Read Article
                        </span>

                        <!-- ARROW -->
                        <div class="w-[20px] h-[20px]">
                            <img src={{ asset('icons/arrowwicon.svg') }} alt="icon"
                                class="w-full h-full object-contain" />
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= RECENT ARTICLES ================= -->
        <section class="signage16-articles w-full max-w-[1387px] h-[1192px] px-[101.5px] py-[64px] mx-auto flex flex-col gap-[48px] max-[1387px]:px-[24px] max-lg:h-auto max-lg:py-[48px] max-md:px-[16px]">

            <!-- HEADING WRAPPER -->
            <div class="signage16-articles-heading w-[1184px] h-[36px] max-lg:w-full">
                <h2 class="text-[30px] font-[700] leading-[36px] text-[#101828]">
                    Recent Articles
                </h2>
            </div>

            <!-- CARDS WRAPPER -->
            <!-- ================= BLOG SECTION ================= -->
            <div class="w-full flex flex-wrap gap-[24px]">

                <div class="signage16-articles-grid w-full flex flex-wrap gap-[24px] max-[1387px]:w-full max-[1387px]:max-w-[1184px]">

                    <!-- ================= CARD ================= -->
                    <div class="signage16-article-card w-[373.33px] max-[1387px]:w-[calc(50%_-_12px)] max-md:w-full bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">
                        <div class="w-full h-[192px]">
                            <img src={{ asset('icons/articles1img.jpg') }} class="w-full h-full object-cover" />
                        </div>

                        <div class="px-[24px] py-[20px] flex flex-col gap-[12px] max-[1387px]:[&>div:first-child]:w-full max-[1387px]:[&>div:first-child]:max-w-full max-[1387px]:[&>div:first-child]:h-auto max-[1387px]:[&>h3]:w-full max-[1387px]:[&>h3]:max-w-full max-[1387px]:[&>h3]:h-auto max-[1387px]:[&>p]:w-full max-[1387px]:[&>p]:max-w-full max-[1387px]:[&>p]:h-auto max-[1387px]:[&>div:nth-child(4)]:w-full max-[1387px]:[&>div:nth-child(4)]:max-w-full max-[1387px]:[&>div:nth-child(4)]:h-auto max-md:[&>div:first-child]:flex-wrap max-md:[&>div:first-child]:gap-[10px] max-md:[&>div:nth-child(4)]:flex-wrap max-md:[&>div:nth-child(4)]:gap-[10px]">

                            <div class="w-[323.33px] h-[24px] flex items-center gap-[12px]">

                                <!-- Tag (Retail) -->
                                <div
                                    class="w-[72.23px] h-[24px] flex items-center bg-[#EFF6FF] rounded-full pl-[12px] pr-[12px]">

                                    <!-- Icon -->
                                    <div class="w-[12px] h-[12px] flex items-center justify-center">
                                        <img src="{{ asset('icons/retail.svg') }}" alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Text -->
                                    <span class="ml-[6px] text-[12px] leading-[16px] font-semibold text-[#1447E6]">
                                        Retail
                                    </span>
                                </div>

                                <!-- Read Time -->
                                <div class="w-[60px] h-[16px] flex items-center">
                                    <span class="text-[12px] leading-[16px] text-[#6A7282]">
                                        7 min read
                                    </span>
                                </div>

                            </div>

                            <h3 class="text-[20px] font-bold leading-[28px] text-[#101828]">
                                How to Choose the Right Digital Signage for Retail
                            </h3>

                            <p class="text-[16px] leading-[24px] mt-[12px] text-[#6B7280]">
                                A comprehensive guide to selecting the perfect digital signage solution for your
                            </p>

                            <div class="flex items-center mt-[16px] gap-[16px] text-[#6B7280]">

                                <div class="flex items-center gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/sarahicon.svg') }} alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">Michael Chen</span>
                                </div>

                                <div class="flex items-center  gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/dateicon.svg') }} alt="calendar icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">April 10, 2026</span>
                                </div>

                            </div>

                            <div class="flex items-center gap-[8px] mt-[18px] text-[#155DFC]">
                                <span class="text-[14px] font-semibold">Read More</span>
                                <div class="w-[16px] h-[16px]">
                                    <img src={{ asset('icons/arrowwicon.svg') }} alt="arrow icon"
                                        class="w-full h-full object-contain" />
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- ================= CARD ================= -->
                     <!-- ================= CARD ================= -->
                    <div class="signage16-article-card w-[373.33px] max-[1387px]:w-[calc(50%_-_12px)] max-md:w-full bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">
                        <div class="w-full h-[192px]">
                            <img src={{ asset('icons/article2img.jpg') }} class="w-full h-full object-cover" />
                        </div>

                        <div class="px-[24px] py-[20px] flex flex-col gap-[12px] max-[1387px]:[&>div:first-child]:w-full max-[1387px]:[&>div:first-child]:max-w-full max-[1387px]:[&>div:first-child]:h-auto max-[1387px]:[&>h3]:w-full max-[1387px]:[&>h3]:max-w-full max-[1387px]:[&>h3]:h-auto max-[1387px]:[&>p]:w-full max-[1387px]:[&>p]:max-w-full max-[1387px]:[&>p]:h-auto max-[1387px]:[&>div:nth-child(4)]:w-full max-[1387px]:[&>div:nth-child(4)]:max-w-full max-[1387px]:[&>div:nth-child(4)]:h-auto max-md:[&>div:first-child]:flex-wrap max-md:[&>div:first-child]:gap-[10px] max-md:[&>div:nth-child(4)]:flex-wrap max-md:[&>div:nth-child(4)]:gap-[10px]">

                            <div class="w-[323.33px] h-[24px] flex items-center gap-[12px]">

                                <!-- Tag (Retail) -->
                                <div
                                    class="w-[110.23px] h-[24px] flex items-center bg-[#EFF6FF] rounded-full pl-[12px] pr-[12px]">

                                    <!-- Icon -->
                                    <div class="w-[12px] h-[12px] flex items-center justify-center">
                                        <img src="{{ asset('icons/retail.svg') }}" alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Text -->
                                    <span class="ml-[6px] text-[12px] leading-[16px] font-semibold text-[#1447E6]">
                                        Technology
                                    </span>
                                </div>

                                <!-- Read Time -->
                                <div class="w-[80px] h-[16px] flex items-center">
                                    <span class="text-[12px] leading-[16px] text-[#6A7282]">
                                        6 min read
                                    </span>
                                </div>

                            </div>

                            <h3 class="text-[20px] font-bold leading-[28px] text-[#101828]">
                                Maximizing ROI with Cloud-Based Digital Signage
                            </h3>

                            <p class="text-[16px] leading-[24px] mt-[12px] text-[#6B7280]">
                               Learn how cloud technology can transform your digital signage network and increase your return on investment.
                            </p>

                            <div class="flex items-center mt-[16px] gap-[16px] text-[#6B7280]">

                                <div class="flex items-center gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/sarahicon.svg') }} alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">Emily Rodriguez</span>
                                </div>

                                <div class="flex items-center  gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/dateicon.svg') }} alt="calendar icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">April 5, 2026</span>
                                </div>

                            </div>

                            <div class="flex items-center gap-[8px] mt-[18px] text-[#155DFC]">
                                <span class="text-[14px] font-semibold">Read More</span>
                                <div class="w-[16px] h-[16px]">
                                    <img src={{ asset('icons/arrowwicon.svg') }} alt="arrow icon"
                                        class="w-full h-full object-contain" />
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- ================= CARD ================= -->
                     <!-- ================= CARD ================= -->
                    <div class="signage16-article-card w-[373.33px] max-[1387px]:w-[calc(50%_-_12px)] max-md:w-full bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">
                        <div class="w-full h-[192px]">
                            <img src={{ asset('icons/article3img.jpg') }} class="w-full h-full object-cover" />
                        </div>

                        <div class="px-[24px] py-[20px] flex flex-col gap-[12px] max-[1387px]:[&>div:first-child]:w-full max-[1387px]:[&>div:first-child]:max-w-full max-[1387px]:[&>div:first-child]:h-auto max-[1387px]:[&>h3]:w-full max-[1387px]:[&>h3]:max-w-full max-[1387px]:[&>h3]:h-auto max-[1387px]:[&>p]:w-full max-[1387px]:[&>p]:max-w-full max-[1387px]:[&>p]:h-auto max-[1387px]:[&>div:nth-child(4)]:w-full max-[1387px]:[&>div:nth-child(4)]:max-w-full max-[1387px]:[&>div:nth-child(4)]:h-auto max-md:[&>div:first-child]:flex-wrap max-md:[&>div:first-child]:gap-[10px] max-md:[&>div:nth-child(4)]:flex-wrap max-md:[&>div:nth-child(4)]:gap-[10px]">

                            <div class="w-[323.33px] h-[24px] flex items-center gap-[12px]">

                                <!-- Tag (Retail) -->
                                <div
                                    class="w-[100.23px] h-[24px] flex items-center bg-[#EFF6FF] rounded-full pl-[12px] pr-[12px]">

                                    <!-- Icon -->
                                    <div class="w-[12px] h-[12px] flex items-center justify-center">
                                        <img src="{{ asset('icons/retail.svg') }}" alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Text -->
                                    <span class="ml-[6px] text-[12px] leading-[16px] font-semibold text-[#1447E6]">
                                        Healthcare
                                    </span>
                                </div>

                                <!-- Read Time -->
                                <div class="w-[80px] h-[16px] flex items-center">
                                    <span class="text-[12px] leading-[16px] text-[#6A7282]">
                                        8 min read
                                    </span>
                                </div>

                            </div>

                            <h3 class="text-[20px] font-bold leading-[28px] text-[#101828]">
                                Digital Signage Best Practices for Healthcare
                            </h3>

                            <p class="text-[16px] leading-[24px] mt-[12px] text-[#6B7280]">
                               Explore how hospitals and clinics are using digital signage to improve patient experience and communication.
                            </p>

                            <div class="flex items-center mt-[16px] gap-[16px] text-[#6B7280]">

                                <div class="flex items-center gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/sarahicon.svg') }} alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">Dr. James Park</span>
                                </div>

                                <div class="flex items-center  gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/dateicon.svg') }} alt="calendar icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">April 28, 2026</span>
                                </div>

                            </div>

                            <div class="flex items-center gap-[8px] mt-[18px] text-[#155DFC]">
                                <span class="text-[14px] font-semibold">Read More</span>
                                <div class="w-[16px] h-[16px]">
                                    <img src={{ asset('icons/arrowwicon.svg') }} alt="arrow icon"
                                        class="w-full h-full object-contain" />
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- ================= CARD 2 ================= -->
                    <!-- ================= CARD ================= -->
                    <div class="signage16-article-card w-[373.33px] max-[1387px]:w-[calc(50%_-_12px)] max-md:w-full bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">
                        <div class="w-full h-[192px]">
                            <img src={{ asset('icons/article4img.jpg') }} class="w-full h-full object-cover" />
                        </div>

                        <div class="px-[24px] py-[20px] flex flex-col gap-[12px] max-[1387px]:[&>div:first-child]:w-full max-[1387px]:[&>div:first-child]:max-w-full max-[1387px]:[&>div:first-child]:h-auto max-[1387px]:[&>h3]:w-full max-[1387px]:[&>h3]:max-w-full max-[1387px]:[&>h3]:h-auto max-[1387px]:[&>p]:w-full max-[1387px]:[&>p]:max-w-full max-[1387px]:[&>p]:h-auto max-[1387px]:[&>div:nth-child(4)]:w-full max-[1387px]:[&>div:nth-child(4)]:max-w-full max-[1387px]:[&>div:nth-child(4)]:h-auto max-md:[&>div:first-child]:flex-wrap max-md:[&>div:first-child]:gap-[10px] max-md:[&>div:nth-child(4)]:flex-wrap max-md:[&>div:nth-child(4)]:gap-[10px]">

                            <div class="w-[323.33px] h-[24px] flex items-center gap-[12px]">

                                <!-- Tag (Retail) -->
                                <div
                                    class="w-[90.23px] h-[24px] flex items-center bg-[#EFF6FF] rounded-full pl-[12px] pr-[12px]">

                                    <!-- Icon -->
                                    <div class="w-[12px] h-[12px] flex items-center justify-center">
                                        <img src="{{ asset('icons/retail.svg') }}" alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Text -->
                                    <span class="ml-[6px] text-[12px] leading-[16px] font-semibold text-[#1447E6]">
                                        content
                                    </span>
                                </div>

                                <!-- Read Time -->
                                <div class="w-[80px] h-[16px] flex items-center">
                                    <span class="text-[12px] leading-[16px] text-[#6A7282]">
                                        10 min read
                                    </span>
                                </div>

                            </div>

                            <h3 class="text-[20px] font-bold leading-[28px] text-[#101828]">
                               The Ultimate Guide to Content Creation for Digital Signage
                            </h3>

                            <p class="text-[16px] leading-[24px] mt-[12px] text-[#6B7280]">
                               Tips and strategies for creating engaging content that captures attention and drives action.
                            </p>

                            <div class="flex items-center mt-[16px] gap-[16px] text-[#6B7280]">

                                <div class="flex items-center gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/sarahicon.svg') }} alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">Lisa Thompson</span>
                                </div>

                                <div class="flex items-center  gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/dateicon.svg') }} alt="calendar icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">April 20, 2026</span>
                                </div>

                            </div>

                            <div class="flex items-center gap-[8px] mt-[18px] text-[#155DFC]">
                                <span class="text-[14px] font-semibold">Read More</span>
                                <div class="w-[16px] h-[16px]">
                                    <img src={{ asset('icons/arrowwicon.svg') }} alt="arrow icon"
                                        class="w-full h-full object-contain" />
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- ================= CARD 3 ================= -->
                     <!-- ================= CARD ================= -->
                    <div class="signage16-article-card w-[373.33px] max-[1387px]:w-[calc(50%_-_12px)] max-md:w-full bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">
                        <div class="w-full h-[192px]">
                            <img src={{ asset('icons/article5img.jpg') }} class="w-full h-full object-cover" />
                        </div>

                        <div class="px-[24px] py-[20px] flex flex-col gap-[12px] max-[1387px]:[&>div:first-child]:w-full max-[1387px]:[&>div:first-child]:max-w-full max-[1387px]:[&>div:first-child]:h-auto max-[1387px]:[&>h3]:w-full max-[1387px]:[&>h3]:max-w-full max-[1387px]:[&>h3]:h-auto max-[1387px]:[&>p]:w-full max-[1387px]:[&>p]:max-w-full max-[1387px]:[&>p]:h-auto max-[1387px]:[&>div:nth-child(4)]:w-full max-[1387px]:[&>div:nth-child(4)]:max-w-full max-[1387px]:[&>div:nth-child(4)]:h-auto max-md:[&>div:first-child]:flex-wrap max-md:[&>div:first-child]:gap-[10px] max-md:[&>div:nth-child(4)]:flex-wrap max-md:[&>div:nth-child(4)]:gap-[10px]">

                            <div class="w-[323.33px] h-[24px] flex items-center gap-[12px]">

                                <!-- Tag (Retail) -->
                                <div
                                    class="w-[104.23px] h-[24px] flex items-center bg-[#EFF6FF] rounded-full pl-[12px] pr-[12px]">

                                    <!-- Icon -->
                                    <div class="w-[12px] h-[12px] flex items-center justify-center">
                                        <img src="{{ asset('icons/retail.svg') }}" alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Text -->
                                    <span class="ml-[6px] text-[12px] leading-[16px] font-semibold text-[#1447E6]">
                                        Case Study
                                    </span>
                                </div>

                                <!-- Read Time -->
                                <div class="w-[80px] h-[16px] flex items-center">
                                    <span class="text-[12px] leading-[16px] text-[#6A7282]">
                                        12 min read
                                    </span>
                                </div>

                            </div>

                            <h3 class="text-[20px] font-bold leading-[28px] text-[#101828]">
                               Case Study: Transforming Airport Wayfinding
                            </h3>

                            <p class="text-[16px] leading-[24px] mt-[12px] text-[#6B7280]">
                               How Metro Airport increased passenger satisfaction by 40% with strategic digital signage deployment.
                            </p>

                            <div class="flex items-center mt-[16px] gap-[16px] text-[#6B7280]">

                                <div class="flex items-center gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/sarahicon.svg') }} alt="icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">David Martinez</span>
                                </div>

                                <div class="flex items-center  gap-[6px]">
                                    <div class="w-[16px] h-[16px]">
                                        <img src={{ asset('icons/dateicon.svg') }} alt="calendar icon"
                                            class="w-full h-full object-contain" />
                                    </div>
                                    <span class="text-[14px]">April 15, 2026</span>
                                </div>

                            </div>

                            <div class="flex items-center gap-[8px] mt-[18px] text-[#155DFC]">
                                <span class="text-[14px] font-semibold">Read More</span>
                                <div class="w-[16px] h-[16px]">
                                    <img src={{ asset('icons/arrowwicon.svg') }} alt="arrow icon"
                                        class="w-full h-full object-contain" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- ================= FIFTH DIV (NEWSLETTER) ================= -->
        <section
            class="signage16-newsletter relative z-0 w-full h-[286px] pt-[64px] mt-[64px] px-[245.5px] text-[#EFF6FF] bg-gradient-to-b from-[#EFF6FF] to-[#F9FAFB] flex flex-col items-center before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#EFF6FF] before:to-[#F9FAFB] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[48px] max-lg:pb-[48px] max-md:px-[16px]">

            <!-- Inner Container -->
            <div class="signage16-newsletter-inner w-[896px] h-[158px] flex flex-col items-center max-[1387px]:w-full max-[1387px]:max-w-[1184px] max-lg:h-auto">

                <!-- Heading -->
                <div class="w-[800px] h-[36px] flex justify-center items-center max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto">
                    <h2 class="text-[30px] leading-[36px] font-bold text-[#101828] text-center">
                        Stay Updated
                    </h2>
                </div>

                <!-- Paragraph -->
                <div class="w-[800px] h-[24px] mt-[16px] flex justify-center items-center max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto">
                    <p class="signage16-newsletter-copy w-[715px] text-[16px] leading-[24px] text-[#364153] text-center max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto">
                        Subscribe to our newsletter for the latest articles and industry insights delivered to your
                        inbox.
                    </p>
                </div>

                <!-- Input + Button -->
                <div class="signage16-newsletter-form w-[448px] h-[50px] mt-[32px] flex gap-[16px] max-md:w-full max-md:h-auto max-md:flex-col">

                    <!-- Input Field -->
                    <div
                        class="w-full h-[50px] border border-[#D1D5DC] rounded-full px-[24px] py-[12px] flex items-center">
                        <input type="email" placeholder="Enter your email"
                            class="w-full outline-none text-[16px] text-[#101828]/50 bg-transparent" />
                    </div>

                    <!-- Button -->
                    <button class="w-[143.45px] h-[50px] rounded-full bg-[#E7000B] flex items-center justify-center max-md:w-full">
                        <span class="text-white text-[16px] font-bold leading-[24px]">
                            Subscribe
                        </span>
                    </button>

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

    <button
        class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]"
        aria-label="Chat support">
        <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
    </button>

</body>

</html>
