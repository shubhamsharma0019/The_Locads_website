@php
    $products = ($products ?? collect())->values();
    $title = $title ?? null;
    $description = $description ?? null;
@endphp

@if ($products->isNotEmpty())
    <section class="w-full max-w-[1387px] mx-auto px-4 sm:px-6 lg:px-[101.5px] pb-10 lg:pb-[64px]">
        <div class="w-full max-w-[1184px] mx-auto">
            @if ($title || $description)
                <div class="mb-8 text-center">
                    @if ($title)
                        <h2 class="text-[30px] leading-[36px] font-medium text-[#101828] max-md:text-[28px] max-md:leading-[34px]">
                            {{ $title }}
                        </h2>
                    @endif

                    @if ($description)
                        <p class="mt-3 text-[18px] leading-[28px] text-[#364153] max-md:text-[16px] max-md:leading-[26px]">
                            {{ $description }}
                        </p>
                    @endif
                </div>
            @endif

            <div class="grid grid-cols-1 items-stretch gap-4 md:grid-cols-2 xl:grid-cols-3 lg:gap-[24px]">
                @foreach ($products as $product)
                    @php
                        $productFeatures = collect($product['features'] ?? [])
                            ->filter()
                            ->take(4);
                        $isRentalProduct = ($product['type'] ?? 'product') === 'rent';
                        $billingPeriod = $product['billing_period'] ?? 'month';
                        $billingLabel = $billingPeriod === 'month' ? 'month' : $billingPeriod;

                        if ($productFeatures->isEmpty()) {
                            $productFeatures = collect($product['specifications'] ?? [])
                                ->filter()
                                ->take(4);
                        }
                    @endphp

                    <div class="flex h-full w-full max-w-[373.33px] flex-col mx-auto bg-white rounded-[16px] border border-[#E5E7EB] overflow-hidden">
                        <div class="w-full aspect-[371.33/224] bg-[#F3F4F6]">
                            @if (!empty($product['image_path']))
                                <img
                                    src="{{ asset($product['image_path']) }}"
                                    alt="{{ $product['name'] }}"
                                    class="w-full h-full object-cover"
                                >
                            @else
                                <div class="flex h-full items-center justify-center">
                                    <svg width="58" height="58" fill="none" viewBox="0 0 24 24">
                                        <rect x="2" y="4" width="20" height="13" rx="2" stroke="#155DFC" stroke-width="1.5"/>
                                        <path d="M8 21h8M12 17v4" stroke="#155DFC" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <div class="flex flex-1 flex-col px-6 pt-6 pb-5 max-md:px-4">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-[20px] leading-[28px] font-medium text-[#101828]">
                                        {{ $product['name'] }}
                                    </h3>
                                    <p class="mt-1 text-[14px] leading-[20px] text-[#4A5565]">
                                        {{ $product['category'] ?: 'General Product' }}
                                    </p>
                                </div>

                                <span class="shrink-0 rounded-full px-3 py-1 text-[11px] font-semibold {{ ($product['type'] ?? 'product') === 'rent' ? 'bg-[#FFE2E2] text-[#9F0712]' : 'bg-[#DBEAFE] text-[#155DFC]' }}">
                                    {{ ($product['type'] ?? 'product') === 'rent' ? 'Rent' : 'Product' }}
                                </span>
                            </div>

                            <div class="mt-4 flex flex-col gap-2 min-h-[104px]">
                                @forelse ($productFeatures as $feature)
                                    <div class="flex items-center gap-2">
                                        <div class="w-[6px] h-[6px] bg-[#155DFC] rounded-full"></div>
                                        <span class="text-[14px] leading-[20px] text-[#4A5565]">{{ $feature }}</span>
                                    </div>
                                @empty
                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">
                                        {{ $product['short_description'] ?: 'Product details available on request.' }}
                                    </p>
                                @endforelse
                            </div>

                            <div class="mt-auto pt-4">
                                <div class="border-t border-[#E5E7EB] pt-6">
                                    <div class="grid min-h-[56px] grid-cols-[minmax(0,1fr)_auto] items-start gap-4">
                                        @if ($isRentalProduct)
                                            <div>
                                                <p class="text-[14px] leading-[20px] text-[#4A5565]">Rent Price</p>
                                                <p class="text-[24px] leading-[32px] font-bold text-[#E7000B] max-sm:text-[22px]">
                                                    @if (!empty($product['rent_price']))
                                                        ₹{{ number_format($product['rent_price'], 0) }} per {{ $billingLabel }}
                                                    @else
                                                        On request
                                                    @endif
                                                </p>
                                            </div>

                                            <div class="shrink-0 text-right">
                                                <p class="text-[14px] leading-[20px] text-[#4A5565]">Purchase Price</p>
                                                <p class="text-[20px] leading-[28px] font-bold text-[#101828]">
                                                    @if (!empty($product['price']))
                                                        ₹{{ number_format($product['price'], 0) }}
                                                    @else
                                                        On request
                                                    @endif
                                                </p>
                                            </div>
                                        @else
                                            <div>
                                                <p class="text-[14px] leading-[20px] text-[#4A5565]">Purchase Price</p>
                                                <p class="text-[24px] leading-[32px] font-bold text-[#101828]">
                                                    @if (!empty($product['price']))
                                                        ₹{{ number_format($product['price'], 0) }}
                                                    @else
                                                        On request
                                                    @endif
                                                </p>
                                            </div>

                                            @if (!empty($product['rent_price']))
                                                <div class="shrink-0 text-right">
                                                    <p class="text-[14px] leading-[20px] text-[#4A5565]">Rent Price</p>
                                                    <p class="text-[20px] leading-[28px] font-bold text-[#E7000B]">
                                                        ₹{{ number_format($product['rent_price'], 0) }} per {{ $billingLabel }}
                                                    </p>
                                                </div>
                                            @endif
                                        @endif
                                    </div>

                                <div class="mt-4 grid grid-cols-[minmax(0,1fr)_54px] items-center gap-2 max-md:grid-cols-1">
                                    <a
                                        href="{{ route('products.detail', ['productSlug' => $product['slug'], 'return_to' => request()->fullUrl()]) }}"
                                        class="h-[42px] min-w-0 bg-[#155DFC] rounded-[14px] flex items-center justify-center text-white text-[14px] font-medium"
                                    >
                                        View Details
                                    </a>

                                    <a
                                        href="{{ route('contact.alt') }}"
                                        class="h-[42px] w-[54px] border-[2px] border-[#D1D5DC] rounded-[14px] flex items-center justify-center max-md:w-full"
                                        aria-label="Enquire about {{ $product['name'] }}"
                                    >
                                        <img src="{{ asset('icons/carticon.svg') }}" class="w-[18px] h-[18px]" alt="">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
