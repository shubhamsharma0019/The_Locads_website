<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @include('partials.seo-meta', [
        'title' => 'Indoor Displays | The Locads',
        'description' => 'Browse indoor digital signage displays from The Locads for retail, offices, hospitality, and commercial spaces.',
        'keywords' => 'indoor displays, indoor digital signage, retail displays, The Locads'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 overflow-x-hidden bg-white">

    <div class="signage10-shell w-full max-w-[1387px] mx-auto">
        @include('partials.signage-header', ['currentPage' => 10])

        <section class="signage10-hero relative z-0 w-full max-w-[1387px] h-[394px] mx-auto mt-[80px] pt-[80px] px-[53.5px]
         bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#F9FAFB] before:to-[#EFF6FF] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[64px] max-lg:pb-[64px] max-md:mt-[40px] max-md:px-[16px] max-md:pt-[48px] max-md:pb-[48px]">
            <div class="signage10-hero-inner w-[1280px] max-w-full mx-auto text-center">
                <div class="signage10-hero-title w-[371px] h-[72px] mx-auto max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto">
                    <h1 class="text-[60px] leading-[72px] font-bold tracking-[-1.5px] text-[#111827] max-lg:text-[44px] max-lg:leading-[1.15] max-md:text-[34px]">
                        Our <span class="text-[#4F46E5] tracking-[-1.8px]">Products</span>
                    </h1>
                </div>

                <div class="signage10-hero-copy w-[768px] h-[56px] mx-auto mt-[24px] max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto">
                    <p class="text-[20px] leading-[28px] text-[#364153] font-normal max-md:text-[17px] max-md:leading-[1.6]">
                        Commercial-grade digital signage hardware and software solutions. Buy or rent to fit your
                        budget.
                    </p>
                </div>

                <div class="signage10-hero-cta w-[320.88px] h-[50px] mx-auto mt-[32px] max-lg:w-full max-lg:max-w-[768px] max-lg:h-auto max-md:max-w-full">
                    <button class="w-full h-full rounded-full border border-[#FFA2A2] bg-[#FFE2E2] flex items-center justify-center gap-[4px] max-md:min-h-[50px] max-md:px-[16px] max-md:py-[12px]">
                        <span class="w-[20px] h-[20px] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#9F0712]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <span class="text-[16px] leading-[24px] font-semibold text-[#9F0712] max-md:text-[14px] max-md:leading-[20px]">
                            All products available for rent!
                        </span>
                    </button>
                </div>
            </div>
        </section>

        @include('partials.product-filter', ['currentPage' => 10])

        <section class="signage10-products w-full max-w-[1387px] mx-auto px-[101.5px] pt-[64px] pb-[64px] max-[1387px]:px-[24px] max-md:px-[16px]">
            <div class="signage10-products-grid w-[1184px] max-w-full mx-auto grid grid-cols-3 gap-[24px] max-[1387px]:grid-cols-2 max-md:grid-cols-1">
                @foreach (($indoorProducts ?? collect()) as $product)
                <div class="signage10-card w-[373.33px] h-[569px] max-[1387px]:w-full max-md:h-auto bg-white rounded-[16px] border border-[#E5E7EB]">
                    <div class="signage10-card-image w-[371.33px] h-[224px] max-[1387px]:w-full max-md:h-auto bg-[#F3F4F6] rounded-t-[16px] overflow-hidden">
                        @if (!empty($product['image_path']))
                        <img class="rounded-[14px] max-md:block max-md:w-full max-md:h-auto max-md:object-cover" src="{{ asset($product['image_path']) }}" alt="{{ $product['name'] }}">
                        @else
                        <div class="flex h-full items-center justify-center">
                            <svg width="58" height="58" fill="none" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="13" rx="2" stroke="#155DFC" stroke-width="1.5"/><path d="M8 21h8M12 17v4" stroke="#155DFC" stroke-width="1.5" stroke-linecap="round"/></svg>
                        </div>
                        @endif
                    </div>

                    <div class="signage10-card-content w-full h-[343px] max-md:h-auto px-[24px] pt-[24px]">
                        <div class="signage10-card-title w-[323.33px] max-[1387px]:w-full h-[28px]">
                            <h3 class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                {{ $product['name'] }}
                            </h3>
                        </div>

                        <div class="signage10-card-features w-[323.33px] max-[1387px]:w-full mt-[16px] flex flex-col gap-[8px]">
                            @foreach (array_slice($product['features'] ?? [], 0, 4) as $feature)
                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565] leading-[20px]">
                                    {{ $feature }}
                                </span>
                            </div>
                            @endforeach

                            @if (empty($product['features']))
                            @foreach (array_slice($product['specifications'] ?? [], 0, 4) as $specification)
                            <div class="flex items-center gap-[8px]">
                                <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                <span class="text-[14px] text-[#4A5565]">
                                    {{ $specification }}
                                </span>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <div class="signage10-card-bottom w-[323.33px] max-[1387px]:w-full mt-[24px] pt-[17px] border-t border-[#E5E7EB] flex flex-col gap-[16px] max-md:h-auto max-md:pb-2">
                            <div class="signage10-card-price w-full h-[52px] flex justify-between items-center max-md:h-auto max-md:gap-[12px]">
                                <div class="flex flex-col justify-between h-[52px]">
                                    <span class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Purchase
                                    </span>
                                    <span class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                        @if (!empty($product['price']))
                                        ₹{{ number_format($product['price'], 0) }}
                                        @else
                                        On request
                                        @endif
                                    </span>
                                </div>

                                <div class="flex flex-col justify-between items-end h-[52px]">
                                    <span class="text-[14px] leading-[20px] text-[#4A5565]">
                                        Rent
                                    </span>
                                    <span class="text-[20px] leading-[28px] font-bold text-[#E7000B]">
                                        @if (!empty($product['rent_price']))
                                        ₹{{ number_format($product['rent_price'], 0) }}/{{ $product['billing_period'] ?? 'month' }}
                                        @else
                                        ₹49/month
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <div class="w-full h-[42px] flex items-center gap-[8px]">
                                <a href="{{ route('products.detail', ['productSlug' => $product['slug'], 'return_to' => request()->fullUrl()]) }}" class="signage10-card-action-primary w-[261.33px] h-[42px] max-[1387px]:w-[calc(100%-62px)] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
                                    <span class="text-white text-[14px] font-medium">
                                        View Details
                                    </span>
                                </a>

                                <a href="{{ route('contact.alt') }}" class="w-[54px] h-[42px] border-[2px] border-[#D1D5DC] rounded-[14px] flex items-center justify-center">
                                    <img src="{{ asset('icons/carticon.svg') }}" class="w-[18px] h-[18px]" alt="cart icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="signage10-cta relative z-0 w-full max-w-[1387px] h-[296px] mx-auto mt-[64px] px-[53.5px] pt-[64px] bg-[#F9FAFB] max-[1387px]:px-[24px] max-md:h-auto max-md:mt-[48px] max-md:px-[16px] max-md:pt-[48px] max-md:pb-[48px] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-[#F9FAFB]">
            <div class="signage10-cta-inner w-[1280px] h-[168px] max-w-full mx-auto flex flex-col items-center max-md:h-auto">
                <div class="signage10-cta-heading w-[1184px] h-[36px] max-[1387px]:w-full flex justify-center">
                    <h2 class="text-[30px] leading-[36px] font-bold text-[#101828] text-center max-md:text-[28px] max-md:leading-[1.2]">
                        Need Help Choosing?
                    </h2>
                </div>

                <div class="signage10-cta-copy w-[1184px] max-[1387px]:w-full mt-[16px] flex justify-center">
                    <p class="w-[682px] max-md:w-full text-[18px] leading-[28px] text-[#364153] text-center max-md:text-[16px] max-md:leading-[26px]">
                        Our team can help you select the perfect digital signage solution for your needs.
                    </p>
                </div>

                <div class="w-[1184px] mt-[24px] flex justify-center">
                    <a href="{{ route('contact.alt') }}" class="w-[241.4px] h-[56px] bg-[#E7000B] rounded-full flex items-center justify-center shadow-[0_4px_6px_rgba(0,0,0,0.1),0_10px_15px_rgba(0,0,0,0.1)]">
                        <span class="text-white text-[16px] leading-[24px] font-bold">
                            Schedule Consultation
                        </span>
                    </a>
                </div>
            </div>
        </section>

        @include('partials.site-footer')

</body>

</html>
