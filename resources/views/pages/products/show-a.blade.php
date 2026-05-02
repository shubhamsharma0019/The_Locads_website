<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @php
        $detail = $productDetail ?? [];
        $detailTitle = $detail['title'] ?? 'Cloud CMS License (Annual)';
        $detailDescription = $detail['description'] ?? 'Full-featured cloud-based content management system for digital signage.';
        $detailImage = $detail['image'] ?? asset('icons/14pageimg.jpg');
        $detailPrice = $detail['price'] ?? 'Rs 299/year';
        $licenseEnabled = (bool) ($detail['license_enabled'] ?? false);
        $detailFeatures = collect($detail['features'] ?? [])->filter()->values();
        $detailSpecs = collect($detail['specifications'] ?? [])->filter()->values();
        $detailBadges = collect($detail['badges'] ?? ['3 Year Warranty', 'Free Shipping', 'In Stock'])->filter()->take(3)->values();
        $detailBackRoute = $detail['back_route'] ?? route('products.index-g');
        $detailPurchaseLabel = $detail['purchase_label'] ?? 'Purchase Now';

        if ($detailFeatures->isEmpty()) {
            $detailFeatures = collect(['Product details available on request.']);
        }

        if ($detailSpecs->isEmpty()) {
            $detailSpecs = collect(['Category: General Product', 'Availability: Contact team']);
        }

        while ($detailBadges->count() < 3) {
            $detailBadges->push(['Warranty Support', 'Quick Quote', 'Available'][$detailBadges->count()]);
        }
    @endphp
    @include('partials.seo-meta', [
        'title' => $detail['seo_title'] ?? $detailTitle . ' | The Locads',
        'description' => $detail['seo_description'] ?? $detailDescription,
        'keywords' => $detail['seo_keywords'] ?? $detailTitle . ', The Locads product'
    ])
</head>

<body class="m-0 overflow-x-hidden bg-white font-sans">

    <!-- ================== TOP LEVEL WRAPPER ================== -->
    <div class="signage14-shell w-full max-w-[1387px] mx-auto">

        <!-- ================== HEADER ================== -->
        @include('partials.signage-header', ['currentPage' => 14])

        <!-- *********** -->
        <!-- ================= BACK TO PRODUCTS BAR ================= -->
        <div class="signage14-backbar w-full h-[77.5px] border-b border-[#E5E7EB] pt-[24px] px-[53.5px] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[20px] max-lg:pb-[20px] max-md:px-[16px]">

            <!-- INNER CONTAINER -->
            <div class="w-full flex items-center">

                <!-- BACK LINK WRAPPER -->
                <a href="{{ $detailBackRoute }}" class="signage14-backlink flex items-center gap-[8px] pl-[48px] max-lg:pl-0">

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
        <main class="signage14-main w-full max-w-[1387px] mx-auto px-[101.5px] py-[64px] flex flex-col gap-[64px] max-[1387px]:px-[24px] max-lg:py-[48px] max-lg:gap-[48px] max-md:px-[16px] max-md:py-[40px] max-md:gap-[40px]">

            <!-- ================= HERO SECTION ================= -->
            <div class="signage14-hero w-full flex gap-[32px] max-lg:flex-col max-lg:gap-[32px]">

                <!-- ========= DIV 1: IMAGE WRAPPER ========= -->
                <div class="signage14-hero-media w-1/2 h-[568px] bg-[#F3F4F6] rounded-[24px] overflow-hidden max-lg:w-full max-lg:h-auto max-lg:aspect-square">
                    <img src="{{ $detailImage }}"
                        alt="{{ $detailTitle }}"
                        class="w-full h-full object-cover" />
                </div>


                <!-- ========= DIV 2: CONTENT WRAPPER ========= -->
                <div class="signage14-hero-content w-1/2 min-h-[568px] flex flex-col max-lg:w-full max-lg:min-h-0">

                    <!-- ===== DIV 2.1: TITLE + DESCRIPTION BLOCK ===== -->
                    <div class="w-full flex flex-col gap-[16px]">

                        <!-- ---- HEADING DIV ---- -->
                        <div class="signage14-title-wrap w-[568px] h-[96px] max-[1387px]:w-full max-[1387px]:max-w-full max-lg:h-auto">
                            <h1 class="text-[40px] leading-[48px] font-bold text-[#101828] max-lg:text-[34px] max-lg:leading-[1.15] max-md:text-[30px]">
                                {{ $detailTitle }}
                            </h1>
                        </div>

                        <!-- ---- PARAGRAPH DIV ---- -->
                        <div class="signage14-desc-wrap w-[568px] h-[88px] max-[1387px]:w-full max-[1387px]:max-w-full max-lg:h-auto">
                            <p class="text-[18px] leading-[29.25px] text-[#364153] max-md:text-[16px] max-md:leading-[26px]">
                                {{ $detailDescription }}
                            </p>
                        </div>

                    </div>

                    @if ($licenseEnabled)
                        <form method="POST" action="{{ route('licence.store') }}" data-license-form>
                            @csrf
                            <input type="hidden" name="product_slug" value="{{ $detail['slug'] ?? request()->route('productSlug') }}">
                            <input type="hidden" name="product_name" value="{{ $detailTitle }}">

                            @error('mac_number')
                                <div class="mt-[16px] w-[568px] max-[1387px]:w-full max-[1387px]:max-w-full rounded-[12px] border border-red-200 bg-red-50 px-[16px] py-[12px] text-[13px] font-medium text-red-600">
                                    {{ $message }}
                                </div>
                            @enderror

                            @error('product_slug')
                                <div class="mt-[16px] w-[568px] max-[1387px]:w-full max-[1387px]:max-w-full rounded-[12px] border border-red-200 bg-red-50 px-[16px] py-[12px] text-[13px] font-medium text-red-600">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div data-license-error class="mt-[16px] hidden w-[568px] max-[1387px]:w-full max-[1387px]:max-w-full rounded-[12px] border border-red-200 bg-red-50 px-[16px] py-[12px] text-[13px] font-medium text-red-600"></div>
                    @endif


                    <!-- ===== DIV 2.2: PRICE CARD ===== -->
                    <div
                        class="signage14-price-card w-[568px] min-h-[110px] max-[1387px]:w-full max-[1387px]:max-w-full mt-[32px] bg-[#F9FAFB] border border-[#E5E7EB] rounded-[16px] px-[25px] py-[25px]">

                        <!-- INNER PRICE WRAPPER -->
                        <div class="flex items-center justify-between gap-[24px] max-md:flex-col max-md:items-stretch">
                            @unless ($licenseEnabled)
                                <div class="flex min-w-[150px] flex-col gap-[4px]">

                                    <!-- LABEL -->
                                    <p class="text-sm text-gray-500">Price</p>

                                    <!-- PRICE TEXT -->
                                    <h2 class="text-[30px] leading-[36px] font-black text-[#101828]">
                                        {{ $detailPrice }}
                                    </h2>
                                </div>
                            @endunless

                            @if ($licenseEnabled)
                                <div data-license-result class="{{ session('activation_key') ? '' : 'hidden' }} w-full">
                                    <p class="text-[14px] font-semibold text-green-700">Activation Key Generated</p>
                                    <p data-license-key class="mt-[6px] break-all text-[24px] font-black tracking-[1px] text-[#101828]">{{ session('activation_key') }}</p>
                                    <p class="mt-[4px] text-[12px] text-green-700">MAC: <span data-license-mac>{{ session('activation_mac') }}</span></p>
                                </div>

                                @unless (session('activation_key'))
                                    <div data-license-input class="w-full">
                                        <label for="macNumber" class="mb-[8px] block text-[14px] leading-[20px] text-[#4A5565]">MAC Number</label>
                                        <input
                                            id="macNumber"
                                            name="mac_number"
                                            type="text"
                                            placeholder="Enter MAC number"
                                            class="h-[48px] w-full rounded-[14px] border border-[#D1D5DC] bg-white px-[16px] text-[15px] text-[#101828] outline-none transition focus:border-[#155DFC] focus:ring-2 focus:ring-[#155DFC]/15">
                                    </div>
                                @endunless
                            @endif
                        </div>
                    </div>


                    <!-- ===== DIV 2.3: BUTTON GROUP ===== -->
                    @if ($licenseEnabled && !session('activation_key'))
                        <div data-license-actions class="signage14-button-group w-[568px] h-[60px] max-[1387px]:w-full max-[1387px]:max-w-full mt-[32px]">

                            <!-- ===== BUTTON: PURCHASE ===== -->
                            <button type="submit" class="w-full h-[60px] bg-[#155DFC] text-white rounded-[14px] 
                     flex items-center justify-center
                     shadow-[0_4px_6px_rgba(0,0,0,0.1),0_10px_15px_rgba(0,0,0,0.1)]">

                                <!-- TEXT -->
                                <span class="text-[16px] leading-[24px] font-bold">
                                    Activate Key
                                </span>

                            </button>

                        </div>
                    @endif

                    @if ($licenseEnabled)
                        </form>
                    @endif

                    @unless ($licenseEnabled)
                        <div class="signage14-button-group w-[568px] h-[60px] max-[1387px]:w-full max-[1387px]:max-w-full flex gap-[16px] mt-[32px] max-lg:h-auto max-lg:flex-col">

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
                                    {{ $detailPurchaseLabel }}
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
                    @endunless

                    <!-- ===== DIV 2.4: FEATURES ===== -->
                    <!-- ===== DIV 2.4: FEATURES ===== -->
                    <div class="signage14-feature-strip w-[568px] h-[82px] max-[1387px]:w-full max-[1387px]:max-w-full mt-[32px] flex gap-[16px] max-lg:h-auto max-lg:flex-wrap">

                        <!-- FEATURE 1 -->
                        <div class="w-[178.66px] h-[82px] max-lg:w-[calc(50%_-_8px)] max-md:w-full border border-[#E5E7EB] rounded-[14px] 
                  p-[16px] flex flex-col items-center gap-[8px] bg-white">

                            <div class="w-[24px] h-[24px] flex items-center justify-center">
                                <img src="{{ asset('icons/warranty.svg') }}">
                            </div>

                            <p class="text-[12px] leading-[16px] font-bold text-[#364153] text-center">
                                {{ $detailBadges[0] }}
                            </p>

                        </div>


                        <!-- FEATURE 2 -->
                        <div class="w-[178.66px] h-[82px] max-lg:w-[calc(50%_-_8px)] max-md:w-full border border-[#E5E7EB] rounded-[14px] 
                  p-[16px] flex flex-col items-center gap-[8px] bg-white">

                            <div class="w-[24px] h-[24px] flex items-center justify-center">
                                <img src="{{ asset('icons/shipping.svg') }}">
                            </div>

                            <p class="text-[12px] leading-[16px] font-bold text-[#364153] text-center">
                                {{ $detailBadges[1] }}
                            </p>

                        </div>


                        <!-- FEATURE 3 -->
                        <div class="w-[178.66px] h-[82px] max-lg:w-[calc(50%_-_8px)] max-md:w-full border border-[#E5E7EB] rounded-[14px] 
                  p-[16px] flex flex-col items-center gap-[8px] bg-white">

                            <div class="w-[24px] h-[24px] flex items-center justify-center">
                                <img src="{{ asset('icons/stock.svg') }}">
                            </div>

                            <p class="text-[12px] leading-[16px] font-bold text-[#364153] text-center">
                                {{ $detailBadges[2] }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ===== DIV 2 : KEY FEATURES ===== -->
            <div class="w-full flex flex-col gap-[32px]">

                <!-- ===== HEADING DIV ===== -->
                <div class="w-full h-[36px]">
                    <h2 class="text-[30px] leading-[36px] font-bold text-[#101828]">
                        Key Features
                    </h2>
                </div>


                <!-- ===== FEATURES GRID WRAPPER ===== -->
                <div class="signage14-feature-grid w-full grid grid-cols-3 gap-[24px] max-[1387px]:grid-cols-2 max-lg:grid-cols-1 max-lg:gap-[16px] max-[1387px]:[&>div]:w-full">
                    @foreach ($detailFeatures as $feature)
                        <div class="w-[384px] min-h-[56px] bg-[#F9FAFB] rounded-[14px] flex items-center px-[16px] py-[16px] gap-[12px]">
                            <div class="w-[20px] h-[20px] flex items-center justify-center text-green-500">
                                <img src="{{ asset('icons/rightsign14.svg') }}" alt="">
                            </div>

                            <div class="flex-1">
                                <p class="text-[16px] leading-[24px] text-[#364153]">
                                    {{ $feature }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <!-- ===== DIV 3 : TECH SPECS ===== -->
            <div class="w-full flex flex-col gap-[32px]">

                <!-- ===== HEADING DIV ===== -->
                <div class="w-full h-[36px]">
                    <h2 class="text-[30px] leading-[36px] font-bold text-[#101828]">
                        Technical Specifications
                    </h2>
                </div>


                <!-- ===== TABLE WRAPPER ===== -->
                <div class="w-full border border-[#E5E7EB] rounded-[16px] overflow-hidden bg-white">
                    @foreach ($detailSpecs as $specification)
                        @php
                            $specParts = explode(':', $specification, 2);
                            $specLabel = trim($specParts[0] ?? 'Specification');
                            $specValue = trim($specParts[1] ?? $specification);
                        @endphp
                        <div class="signage14-spec-row w-full min-h-[73px] flex items-center justify-between px-[24px] {{ $loop->last ? '' : 'border-b border-[#E5E7EB]' }} max-lg:h-auto max-lg:min-h-[73px] max-lg:flex-col max-lg:items-start max-lg:gap-[8px] max-lg:py-[16px]">
                            <p class="text-[16px] leading-[24px] font-bold text-[#101828]">
                                {{ $specLabel }}
                            </p>

                            <p class="text-[16px] leading-[24px] text-[#364153] text-right max-lg:text-left">
                                {{ $specValue }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </main>

        <!-- ================== CTA SECTION ================== -->
        <section class="signage14-cta relative z-0 w-full h-[296px] px-[53.5px] pt-[64px] text-[#EFF6FF]
                bg-gradient-to-b from-[#EFF6FF] to-[#F9FAFB] max-[1387px]:px-[24px] max-lg:h-auto max-lg:pt-[56px] max-lg:pb-[56px] max-md:mt-[48px] max-md:px-[16px] max-md:pt-[48px] max-md:pb-[48px] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#EFF6FF] before:to-[#F9FAFB]">

            <!-- ===== INNER WRAPPER ===== -->
            <div class="signage14-cta-inner w-full max-w-[1184px] mx-auto flex flex-col items-center text-center max-[1387px]:w-full">

                <!-- ===== HEADING DIV ===== -->
                <div class="signage14-cta-heading w-full h-[36px]">
                    <h2 class="text-[30px] leading-[36px] font-bold text-[#101828] max-md:text-[28px] max-md:leading-[1.2]">
                        Ready to Get Started?
                    </h2>
                </div>

                <!-- ===== PARAGRAPH DIV ===== -->
                <div class="signage14-cta-copy w-[681px] h-[28px] mt-[16px] max-lg:w-full max-lg:max-w-[681px] max-lg:h-auto">
                    <p class="text-[18px] leading-[28px] text-[#364153] max-md:text-[16px] max-md:leading-[26px]">
                        Contact our team to discuss your digital signage needs and get a custom quote.
                    </p>
                </div>

                <!-- ===== BUTTON DIV ===== -->
                <div class="signage14-cta-button mt-[32px]">

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

    @if ($licenseEnabled)
        <script>
            document.querySelectorAll('[data-license-form]').forEach((form) => {
                form.addEventListener('submit', async (event) => {
                    event.preventDefault();

                    const errorBox = form.querySelector('[data-license-error]');
                    const inputWrap = form.querySelector('[data-license-input]');
                    const resultBox = form.querySelector('[data-license-result]');
                    const keyText = form.querySelector('[data-license-key]');
                    const macText = form.querySelector('[data-license-mac]');
                    const actions = form.querySelector('[data-license-actions]');
                    const button = actions?.querySelector('button[type="submit"]');
                    const originalButtonText = button?.textContent?.trim() || 'Activate Key';

                    if (errorBox) {
                        errorBox.classList.add('hidden');
                        errorBox.textContent = '';
                    }

                    if (button) {
                        button.disabled = true;
                        button.classList.add('opacity-70', 'cursor-not-allowed');
                        button.querySelector('span').textContent = 'Generating...';
                    }

                    try {
                        const response = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            body: new FormData(form),
                        });

                        const payload = await response.json();

                        if (!response.ok) {
                            const firstError = payload.errors ? Object.values(payload.errors).flat()[0] : null;
                            throw new Error(firstError || payload.message || 'Activation key generate nahi ho payi.');
                        }

                        if (keyText) {
                            keyText.textContent = payload.activation_key;
                        }

                        if (macText) {
                            macText.textContent = payload.activation_mac;
                        }

                        resultBox?.classList.remove('hidden');
                        inputWrap?.remove();
                        actions?.remove();
                    } catch (error) {
                        if (errorBox) {
                            errorBox.textContent = error.message;
                            errorBox.classList.remove('hidden');
                        }

                        if (button) {
                            button.disabled = false;
                            button.classList.remove('opacity-70', 'cursor-not-allowed');
                            button.querySelector('span').textContent = originalButtonText;
                        }
                    }
                });
            });
        </script>
    @endif

</body>

</html>
