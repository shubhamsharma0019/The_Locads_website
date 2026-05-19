<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('partials.seo-meta', [
        'title' => ($article['title'] ?? 'Digital Signage Article') . ' | The Locads Blog',
        'description' => $article['excerpt'] ?? 'Explore detailed digital signage insights and case-study content from The Locads blog.',
        'keywords' => ($article['category'] ?? 'digital signage') . ', digital signage article, signage case study, The Locads blog'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden bg-white flex justify-center">

    <!-- MAIN WRAPPER -->
    <div class="signage17-shell w-full max-w-[1387px]">

        <!-- ================= HEADER ================= -->
        @include('partials.signage-header', ['currentPage' => 17])



        <!-- ================= SECOND DIV ================= -->
        <section class="signage17-backbar w-full max-w-full h-[77.5px] mt-[69px] border-b border-[#E5E7EB] pt-[24px] px-[53.5px] max-[1387px]:px-[24px] max-lg:h-auto max-md:px-[16px]">

            <!-- INNER CONTAINER (1280px fill behavior) -->
            <div class="signage17-backbar-inner w-full flex justify-start pl-[48px] pr-[1108.63px] max-[1387px]:w-full max-[1387px]:max-w-[896px] max-[1387px]:mx-auto max-[1387px]:justify-center max-[1387px]:px-0">

                <!-- CONTENT ROW -->
                <div class="flex items-center relative">

                    <!-- ARROW -->
                    <div class="w-[20px] h-[20px] relative top-[2px]">
                        <div class="w-[20px] h-[20px]">
                    <img src={{ asset('icons/arrow3.svg') }} class="w-full h-full" />
                        </div>
                    </div>

                    <!-- TEXT -->
                    <a href="{{ route('blog.index') }}" class="ml-[8px] text-[16px] leading-[24px] font-medium text-[#155DFC] relative top-[-1px]">
                        Back to Blog
                    </a>

                </div>

            </div>

        </section>

        <!-- ================= THIRD DIV ================= -->
        <section class="signage17-hero w-full max-w-full h-[882.37px] pt-[64px] px-[245.5px] max-[1387px]:px-[24px] max-lg:mt-[24px] max-lg:h-auto max-lg:pt-[48px] max-md:mt-[20px] max-md:px-[16px]">

            <!-- INNER CONTAINER (896px) -->
            <div class="signage17-hero-inner w-[896px] h-[706.37px] relative max-[1387px]:w-full max-[1387px]:max-w-[896px] max-[1387px]:mx-auto max-lg:h-auto max-lg:static max-lg:flex max-lg:flex-col max-lg:items-start max-lg:gap-[24px]">

                <!-- ===== FIRST ROW ===== -->
                <div class="signage17-hero-row w-[800px] h-[32px] flex items-center gap-[12px] absolute left-[48px] top-[0px] max-lg:static max-lg:flex max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto max-lg:justify-start max-lg:flex-wrap max-lg:mx-auto">
                    <!-- Tag (Retail) -->
                    <div class="h-[24px] flex items-center bg-[#EFF6FF] rounded-full pl-[12px] pr-[12px]">

                        <!-- Icon -->
                        <div class="w-[12px] h-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons/retail.svg') }}" alt="icon"
                                class="w-full h-full object-contain" />
                        </div>

                        <!-- Text -->
                        <span class="ml-[6px] text-[12px] leading-[16px] font-semibold text-[#1447E6]">
                            {{ $article['category'] ?? 'Retail' }}
                        </span>
                    </div>

                    <!-- Read Time -->
                    <div class="min-w-[60px] h-[16px] flex items-center">
                        <span class="text-[12px] leading-[16px] text-[#6A7282]">
                            {{ $article['read_time'] ?? '7 min read' }}
                        </span>
                    </div>
                </div>

                <!-- ===== HEADING ===== -->
                <div class="signage17-hero-title-wrap w-[800px] h-[120px] absolute left-[48px] top-[56px] max-lg:static max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto max-lg:mx-auto max-lg:text-center">
                    <h1 class="text-[48px] leading-[60px] font-medium text-[#101828] relative top-[-0.5px] max-lg:w-full max-lg:max-w-[800px] max-lg:mx-0 max-lg:text-left max-lg:text-[40px] max-lg:leading-[1.2] max-md:text-[32px]">
                        {{ $article['title'] ?? 'How to Choose the Right Digital Signage for Retail' }}
                    </h1>
                </div>

                <!-- ===== AUTHOR + DATE ===== -->
                <div class="signage17-hero-meta w-[800px] h-[24px] flex items-center gap-[24px] absolute left-[48px] top-[200px] max-lg:static max-lg:flex max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto max-lg:justify-start max-lg:flex-wrap max-lg:mx-auto">

                    <!-- AUTHOR -->
                    <div class="flex items-center gap-[8px]">
                        <div class="w-[16px] h-[16px] bg-white-300"><img src="{{ asset('icons/sarahicon.svg') }}">
                        </div>
                        <span class="text-[14px] text-[#4A5565]">{{ $article['author'] ?? 'Rohan Mehta' }}</span>
                    </div>

                    <!-- DATE -->
                    <div class="flex items-center gap-[8px]">
                        <div class="w-[16px] h-[16px] bg-white-300"><img src="{{ asset('icons/dateicon.svg') }}">
                        </div>
                        <span class="text-[14px] text-[#4A5565]">{{ $article['date'] ?? 'April 10, 2026' }}</span>
                    </div>

                </div>

                <!-- ===== IMAGE ===== -->
                <div class="signage17-hero-image w-[800px] h-[450.37px] absolute left-[48px] top-[256px] rounded-[24px] overflow-hidden max-lg:static max-lg:w-full max-lg:max-w-[800px] max-lg:h-auto max-lg:aspect-[800/450] max-lg:mx-auto">
                    <img src="{{ asset($article['image'] ?? 'icons/page17img.jpg') }}" class="w-full h-full object-cover" />
                </div>

            </div>

        </section>

        <!-- ================= FOURTH DIV ================= -->
        <section class="signage17-body w-full max-w-full px-[357.5px] pb-[64px] max-[1387px]:px-[24px] max-lg:mt-[24px] max-lg:pb-[48px] max-md:mt-[20px] max-md:px-[16px]">

            <!-- INNER CONTENT WIDTH -->
            <div class="signage17-body-inner flex w-[672px] flex-col gap-[20px] max-[1387px]:w-full max-[1387px]:max-w-[896px] max-[1387px]:mx-auto max-lg:items-center max-lg:text-center">

                <!-- ===== INTRO ===== -->
                <p class="w-[672px] text-[16px] leading-[24px] text-[#101828] font-normal max-lg:w-full max-lg:max-w-[672px] max-lg:h-auto max-lg:mx-auto">
                    {{ $article['intro'] ?? '' }}
                </p>

                @foreach (($article['sections'] ?? []) as $section)
                    <h3
                        class="w-full max-w-[672px] text-[20px] leading-[30px] font-medium text-[#101828] relative top-[-0.5px] max-lg:w-full max-lg:max-w-[672px] max-lg:h-auto max-lg:mx-auto">
                        {{ $section['heading'] }}
                    </h3>

                    <p class="w-[672px] text-[16px] leading-[24px] text-[#101828] max-lg:w-full max-lg:max-w-[672px] max-lg:h-auto max-lg:mx-auto">
                        {{ $section['body'] }}
                    </p>
                @endforeach

                <p class="w-[672px] text-[16px] leading-[24px] text-[#101828] max-lg:w-full max-lg:max-w-[672px] max-lg:h-auto max-lg:mx-auto">
                    {{ $article['closing'] ?? '' }}
                </p>

            </div>

        </section>

        <!-- ================= FIFTH DIV ================= -->
        <section class="signage17-author w-full max-w-full border-t border-[#E5E7EB] px-[309.5px] py-[49px] max-[1387px]:px-[24px] max-lg:mt-[24px] max-lg:py-[40px] max-md:mt-[20px] max-md:px-[16px]">

            <!-- INNER CONTAINER -->
            <div class="signage17-author-inner w-[768px] flex items-center gap-[24px] px-[48px] max-[1387px]:w-full max-[1387px]:max-w-[896px] max-[1387px]:mx-auto max-lg:px-0 max-lg:flex-col max-lg:items-center max-lg:justify-center max-lg:text-center max-lg:gap-[16px]">

                <!-- AVATAR -->
                <div
                    class="w-[80px] h-[80px] rounded-full bg-[#DBEAFE] flex items-center justify-center text-[20px] font-bold text-[#155DFC]">
                    {{ $article['author_initial'] ?? 'R' }}
                </div>

                <!-- TEXT BLOCK -->
                <div class="signage17-author-copy w-[568px] max-lg:w-full max-lg:h-auto">

                    <!-- NAME -->
                    <p
                        class="w-full text-[20px] leading-[28px] font-bold text-[#101828] relative top-[-0.5px]">
                        {{ $article['author'] ?? 'Rohan Mehta' }}
                    </p>

                    <!-- DESCRIPTION -->
                    <p class="w-[568px] text-[16px] leading-[24px] text-[#4A5565] mt-[4px] max-lg:w-full">
                        Contributing writer specializing in digital signage trends and technology insights.
                    </p>

                </div>

            </div>

        </section>
        <!-- ================= SIXTH DIV ================= -->
        <section class="signage17-cta w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] px-[53.5px] py-[64px] bg-gradient-to-b from-[#EFF6FF] to-[#F9FAFB] max-[1387px]:px-[24px] max-lg:mt-[24px] max-lg:py-[48px] max-md:mt-[20px] max-md:px-[16px]">

            <!-- INNER CONTAINER -->
            <div class="signage17-cta-inner mx-auto flex w-[1280px] max-w-full flex-col items-center gap-[20px] text-center max-[1387px]:w-full max-[1387px]:max-w-[896px] max-[1387px]:mx-auto">

                <!-- ===== HEADING ===== -->
                <div class="signage17-cta-title flex w-full justify-center">
                    <h2 class="text-[30px] leading-[36px] font-medium text-[#101828] text-center">
                        Ready to Transform Your Space?
                    </h2>
                </div>

                <!-- ===== PARAGRAPH ===== -->
                <div class="signage17-cta-copy w-full max-w-[672px]">
                    <p class="text-[18px] leading-[28px] text-[#364153] text-center">
                        Let’s discuss how The Locads can help you achieve your digital signage goals.
                    </p>
                </div>

                <!-- ===== BUTTON ===== -->
                <a href="{{ route('contact') }}"
                    class="inline-flex min-h-[56px] min-w-[202px] items-center justify-center rounded-full bg-[#E7000B] px-[32px] py-[16px] text-[16px] font-bold leading-[24px] text-white shadow-[0_4px_6px_-4px_rgba(0,0,0,0.1),0_10px_15px_-3px_rgba(0,0,0,0.1)] transition hover:bg-red-700">
                    Contact Us Today
                </a>

            </div>

        </section>

        <!-- ================= FOOTER ================= -->
        @include('partials.site-footer')

</body>

</html>
