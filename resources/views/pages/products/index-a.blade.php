<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-meta', [
        'title' => 'Hardware Products | The Locads',
        'description' => 'Browse commercial hardware products from The Locads including displays, media players, and signage equipment.',
        'keywords' => 'digital signage hardware, commercial displays, media players, The Locads products'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .page-sections > section {
            padding-bottom: 3rem;
        }

        .page-sections > section + section {
            margin-top: 3rem;
        }

        @media (min-width: 1024px) {
            .page-sections > section {
                padding-bottom: 0;
            }

            .page-sections > section + section {
                margin-top: 4rem;
            }
        }
    </style>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-white flex justify-center font-[Inter] overflow-x-hidden">

    <!-- ================= MAIN WRAPPER ================= -->
    <div class="page-sections w-full max-w-[1387px] bg-white">

        <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 4])

        <!-- ================= HERO ================= -->
        <!-- FULL WIDTH HERO -->
        <section class="w-screen min-h-[430px] sm:min-h-[520px] lg:min-h-[593.45px] relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">

            <!-- BACKGROUND -->
            <img src="{{ asset('icons/productimage.svg') }}" class="w-full h-full object-cover absolute inset-0" />

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- CENTER CONTENT -->
            <div class="absolute inset-0 flex justify-center">

                <div class="w-full max-w-[1280px] min-h-[auto] lg:min-h-[440px] mt-8 sm:mt-12 lg:mt-[76.72px] pt-12 sm:pt-16 lg:pt-[80px] px-4 sm:px-6 lg:px-[48px] flex flex-col items-center">

                    <!-- HEADING -->
                    <h1 class="text-[36px] leading-[44px] sm:text-[48px] sm:leading-[56px] lg:text-[60px] lg:leading-[72px] tracking-[-1.5px] font-medium text-white text-center">
                        Our <span class="text-red-500">Products</span>
                    </h1>

                    <!-- PARA -->
                    <p class="w-full max-w-[768px] mt-[24px] text-[18px] leading-[30px] sm:text-[22px] sm:leading-[34px] lg:text-[24px] lg:leading-[39px] text-white text-center">
                        A perfectly synchronized ecosystem of robust hardware and intuitive software.
                    </p>

                    <!-- TOGGLE -->
                    <div class="w-full max-w-[432px] min-h-[58px] mt-[28px] sm:mt-[40px] lg:mt-[48px] bg-[#E5E7EB] rounded-full flex flex-row items-center p-[4px]">

                        <!-- ACTIVE TAB -->
                        <a
                            href="{{ route('products.index') }}"
                            class="flex-1 h-[50px] bg-[#2563EB] rounded-full flex items-center justify-center px-3 text-center shadow-[0px_4px_12px_rgba(37,99,235,0.35)]">
                            <span class="text-white text-[13px] sm:text-[16px] font-semibold">
                                Hardware Solutions
                            </span>
                        </a>

                        <!-- INACTIVE TAB -->
                        <a href="{{ route('products.index-b') }}" class="flex-1 h-[50px] flex items-center justify-center px-3 text-center">
                            <span class="text-[#6B7280] text-[13px] sm:text-[16px] font-semibold">
                                Software Platform
                            </span>
                        </a>

                    </div>
                </div>

            </div>

        </section>

        @if (($dynamicProducts ?? collect())->isNotEmpty())
        <section class="w-full max-w-[1184px] px-4 sm:px-6 lg:px-0 mx-auto mt-10 lg:mt-[64px] mb-6 lg:mb-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[24px] lg:gap-[32px]">
            @foreach (($dynamicProducts ?? collect()) as $product)
            <div class="w-full max-w-[373.33px] min-h-[624px] mx-auto bg-white rounded-[24px] border border-[#E5E7EB] overflow-hidden flex flex-col">
                <div class="w-full h-[256px] bg-[#F3F4F6]">
                    @if (!empty($product['image_path']))
                    <img src="{{ asset($product['image_path']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" />
                    @else
                    <div class="w-full h-full flex items-center justify-center">
                        <svg width="58" height="58" fill="none" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="13" rx="2" stroke="#155DFC" stroke-width="1.5"/><path d="M8 21h8M12 17v4" stroke="#155DFC" stroke-width="1.5" stroke-linecap="round"/></svg>
                    </div>
                    @endif
                </div>

                <div class="flex flex-col px-6 sm:px-8 pt-[32px]">
                    <h3 class="text-[24px] leading-[32px] font-medium text-[#101828]">
                        {{ $product['name'] }}
                    </h3>

                    <div class="flex flex-col gap-[12px] mt-[16px]">
                        @foreach (array_slice($product['features'] ?? [], 0, 4) as $feature)
                        <div class="flex items-start gap-[8px]">
                            <img src="{{ asset('icons/maindiv.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                            <p class="text-[14px] leading-[20px] text-[#364153]">{{ $feature }}</p>
                        </div>
                        @endforeach

                        @if (empty($product['features']))
                        @foreach (array_slice($product['specifications'] ?? [], 0, 4) as $specification)
                        <div class="flex items-start gap-[8px]">
                            <img src="{{ asset('icons/maindiv.svg') }}" class="w-[16px] h-[16px] mt-[2px]" />
                            <p class="text-[14px] leading-[20px] text-[#364153]">{{ $specification }}</p>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>

                <div class="mt-auto px-6 sm:px-8 pb-[32px]">
                    <a href="{{ route('products.detail', ['productSlug' => $product['slug'], 'return_to' => request()->fullUrl()]) }}" class="w-full h-[50px] border border-[#D1D5DC] rounded-[14px] flex items-center justify-center">
                        <span class="text-[16px] leading-[24px] font-medium text-[#101828]">
                            View Specs
                        </span>
                    </a>
                </div>
            </div>
            @endforeach

        </section>
        @endif
        <!-- 🔷 THIRD DIV (FOOTER) -->
        @include('partials.site-footer')

</body>

</html>
